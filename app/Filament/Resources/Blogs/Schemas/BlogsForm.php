<?php

namespace App\Filament\Resources\Blogs\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;
use App\Models\BlogCategory;
use Filament\Forms\Components\Select;
use App\Models\blogAuthor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Group;
use Filament\Support\Icons\Heroicon;
use Filament\Forms\Components\DatePicker;

class BlogsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Blog Details')
                    ->description('Provide the details of the blog post.')
                    ->icon(Heroicon::InformationCircle)
                    ->schema([
                        Group::make()
                            ->schema([
                                TextInput::make('title')
                                    ->label('Blog Title')
                                    ->rule(["required", "min:3"])
                                    ->reactive()
                                    ->afterStateUpdated(function ($state, callable $set) {
                                        $set('slug', Str::slug($state));
                                    }),
                                TextInput::make('slug')
                                    ->label('Blog URL Slug')
                                    ->unique()
                                    ->validationMessages([
                                        'unique' => 'The URL slug must be unique.',
                                    ]),
                                Select::make('blog_type')
                                    ->label('Blog Type')
                                    ->options(BlogCategory::pluck('name', 'id'))
                                    ->searchable()
                                    ->required()
                                    ->validationMessages([
                                        'required' => 'The blog type is required.',
                                    ]),
                                Select::make('author')
                                    ->label('Author Name')
                                    ->options(blogAuthor::pluck('name', 'id'))
                                    ->searchable()
                                    ->required()
                                    ->validationMessages([
                                        'required' => 'The author name is required.',
                                    ]),
                            ]),

                        RichEditor::make('description')
                            ->label('Blog Description')
                            ->required()
                            ->validationMessages([
                                'required' => 'The blog description is required.',
                            ]),
                    ])->columnSpan(2),

                Group::make()
                    ->schema([
                        Section::make('Blog Media')
                            ->description('Upload images related to the blog post.
                            And Imges Size is 1920px and 700px.')
                            ->icon(Heroicon::Photo)
                            ->schema([
                                FileUpload::make('images')
                                    ->label('Blog Image')
                                    ->disk('public')
                                    ->directory('blog-images')
                                    ->image()
                                    ->maxSize(1024)
                                    ->getUploadedFileNameForStorageUsing(function ($file, $get) {
                                        $name = $get('name') ?? 'blog-image';
                                        return Str::slug($name) . '-' . time() . '.' . $file->getClientOriginalExtension();
                                    })
                                    ->deleteUploadedFileUsing(function ($file) {
                                        if ($file && \Illuminate\Support\Facades\Storage::disk('public')->exists($file)) {
                                            \Illuminate\Support\Facades\Storage::disk('public')->delete($file);
                                        }
                                    })
                                    ->validationMessages([
                                        'image' => 'The uploaded file must be an image.',
                                        'max' => 'The image must not be greater than 1MB.',
                                    ]),

                            ]),
                        Section::make('SEO Settings')
                            ->description('Provide SEO metadata for the blog post.')
                            ->icon(Heroicon::ChartBar)
                            ->schema([
                                DatePicker::make('published_at')
                                    ->label('Published Date')
                                    ->default(now())
                                    ->format('Y-m-d')
                                    ->displayFormat('d F Y')
                                    ->native(false)
                                    ->required()
                                    ->validationMessages([
                                        'required' => 'The published date is required.',
                                    ]),
                                TextInput::make('meta_title')
                                    ->label('Meta Title'),

                                TagsInput::make('meta_keywords')
                                    ->label('Meta Keywords'),

                                Textarea::make('meta_description')
                                    ->label('Meta Description')
                                    ->rows(3),

                                Toggle::make('is_featured')
                                    ->label('Is Featured')
                                    ->default(True)
                            ]),
                    ])->columnSpan(1),

            ])->columns(3);
    }
}
