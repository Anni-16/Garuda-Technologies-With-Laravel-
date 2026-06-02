<?php

namespace App\Filament\Resources\ServiceCategories\Schemas;

use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Illuminate\Support\Str;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Schemas\Components\Group;

class ServiceCategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Category Details')
                    ->description('Provide the details of the service category.')
                    ->icon(Heroicon::InformationCircle)
                    ->schema([
                        Group::make()
                            ->schema([
                                TextInput::make('name')
                                    ->label('Category Name')
                                    ->rule(["required", "min:3"])
                                    ->reactive()
                                    ->afterStateUpdated(function ($state, callable $set) {
                                        $set('category_slug', Str::slug($state));
                                    }),
                                TextInput::make('category_slug')
                                    ->label('Service Category URL Slug')
                                    ->unique()
                                    ->validationMessages([
                                        'unique' => 'The URL category_slug must be unique.',
                                    ])

                            ])->columns(2),

                        Textarea::make('description')
                            ->label('Description')
                            ->maxLength(255),

                    ])->columnSpan(2),

                Group::make()
                    ->schema([
                        Section::make('Settings')
                            ->description('Upload an image for the service category. Images 64px X 64px')
                            ->icon(Heroicon::Photo)
                            ->schema([
                                FileUpload::make('icon')
                                    ->label('Category Icon')
                                    ->required()
                                    ->disk('public')
                                    ->directory('ser_cat_icons')
                                    ->maxSize(1024)
                                    ->image()
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
                                        'required' => 'The category icon is required.',
                                        'max' => 'The image must not be greater than 1MB.',
                                    ]),
                                Toggle::make('is_active')
                                    ->label('Is Active')
                                    ->default(true)
                            ]),
                    ])->columnSpan(1),



            ])->columns(3);
    }
}
