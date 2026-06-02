<?php

namespace App\Filament\Resources\Services\Schemas;

use App\Models\ServiceCategory;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Schemas\Components\Group;
use Illuminate\Support\Str;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Group::make()
                    ->schema([
                        Section::make('Service Details')
                            ->description('Provide the details of the service.')
                            ->icon(Heroicon::InformationCircle)
                            ->schema([
                                TextInput::make('name')
                                    ->label('Service Name')
                                    ->rule(["required", "min:3"])
                                    ->reactive()
                                    ->afterStateUpdated(function ($state, callable $set) {
                                        $set('service_slug', Str::slug($state));
                                    }),

                                TextInput::make('service_slug')
                                    ->label('Service URL Slug')
                                    ->unique()
                                    ->validationMessages([
                                        'unique' => 'The URL service_slug must be unique.',
                                    ]),

                                Select::make('category_id')
                                    ->label('Service Category')
                                    ->options(ServiceCategory::pluck('name', 'id'))
                                    ->searchable()
                                    ->required()
                                    ->validationMessages([
                                        'required' => 'The service category is required.',
                                    ]),

                                Textarea::make('short_description')
                                    ->label('Short Description')
                                    ->rows(3)
                                    ->required()
                                    ->validationMessages([
                                        'required' => 'The short description is required.',
                                    ]),

                                RichEditor::make('description')
                                    ->label('Description'),

                                Textarea::make('schema_markup')
                                    ->label('Schema Markup — FAQ Schema ')
                                    ->rows(5)
                                    ->required()
                                    ->validationMessages([
                                        'required' => 'The Schema Markup — FAQ Schema is required.',
                                    ]),
                            ]),
                    ])->columnSpan(2),

                Group::make()
                    ->schema([
                        Section::make('Media')
                            ->description('Upload an image for the service. Image Size 1000px X 570px')
                            ->icon(Heroicon::Photo)
                            ->schema([
                                FileUpload::make('images')
                                    ->label('Service Images')
                                    ->disk('public')
                                    ->directory('service_images')
                                    ->maxSize(1024)
                                    ->image()
                                    ->required()
                                    ->getUploadedFileNameForStorageUsing(function ($file, $get) {
                                        $name = $get('name') ?? 'category';
                                        return Str::slug($name) . '-' . time() . '.' . $file->getClientOriginalExtension();
                                    })
                                    ->deleteUploadedFileUsing(function ($file) {
                                        if ($file && \Illuminate\Support\Facades\Storage::disk('public')->exists($file)) {
                                            \Illuminate\Support\Facades\Storage::disk('public')->delete($file);
                                        }
                                    })
                                    ->validationMessages([
                                        'max' => 'The image must not be greater than 1MB.',
                                        'required' => 'At least one service image is required.',
                                    ]),

                            ]),

                        Section::make('SEO Settings')
                            ->description('Provide SEO metadata for the service.')
                            ->icon(Heroicon::ChartBar)
                            ->schema([
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
                            ])
                    ])->columnSpan(1),


            ])->columns(3);
    }
}
