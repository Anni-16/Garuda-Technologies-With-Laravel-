<?php

namespace App\Filament\Resources\Abouts\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Support\Icons\Heroicon;
use Filament\Schemas\Components\Group;
use Filament\Forms\Components\TagsInput;

class AboutForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Home Page About Section Details')
                    ->description('Provide the details of the about section.')
                    ->icon(Heroicon::OutlinedInformationCircle)
                    ->schema([
                        Group::make()
                            ->schema([
                                TextInput::make('heading_2')
                                    ->label('About Section Heading')
                                    ->rule(["required", "min:3"])
                                    ->validationMessages([
                                        'rule' => 'The about section heading is required.',
                                    ]),
                                TextInput::make('experience_of_year')
                                    ->label('Company Experience Of Year')
                                    ->rule(["required"])
                                    ->validationMessages([
                                        'rule' => 'The company experience of year is required.',
                                    ]),
                            ])->columns(2),

                        RichEditor::make('short_descrpition')
                            ->label('About Section Description')
                            ->required()
                            ->validationMessages([
                                'required' => 'The about Section description is required.',
                            ]),

                    ])->columnSpan(2),

                Section::make('Home Page About Section Media')
                    ->description('Upload images related to the about section .')
                    ->icon(Heroicon::Photo)
                    ->schema([
                        FileUpload::make('images_2')
                            ->label('About Sectiom First Images ( 740px X 830px )')
                            ->disk('public')
                            ->directory('about-images')
                            ->image()
                            ->maxSize(1024)
                            ->getUploadedFileNameForStorageUsing(function ($file, $get) {
                                $name = $get('name') ?? 'images-2';
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
                        FileUpload::make('images_3')
                            ->label('About Section Second Images ( 320px X 360px )')
                            ->disk('public')
                            ->directory('about-images')
                            ->image()
                            ->maxSize(1024)
                            ->getUploadedFileNameForStorageUsing(function ($file, $get) {
                                $name = $get('name') ?? 'images-3';
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
                    ])->columnSpan(1),

                Section::make('About Page Top Section Details')
                    ->description('Provide the details of the about page top section.')
                    ->icon(Heroicon::OutlinedInformationCircle)
                    ->schema([
                        Group::make()
                            ->schema([
                                TextInput::make('heading_1')
                                    ->label('About Page Top Heading')
                                    ->rule(["required", "min:3"])
                                    ->validationMessages([
                                        'rule' => 'The about page top heading is required.',
                                    ]),
                                RichEditor::make('descrpition')
                                    ->label('About Page Description')
                                    ->required()
                                    ->validationMessages([
                                        'required' => 'The about page description is required.',
                                    ]),

                            ])->columns(1),
                    ])->columnSpan(2),

                Section::make('About Page Top Heading Media')
                    ->description('Upload images related to the about page top heading .')
                    ->icon(Heroicon::Photo)
                    ->schema([
                        FileUpload::make('images_1')
                            ->label('About Page First Images ( 1290px X 630px )')
                            ->disk('public')
                            ->directory('about-images')
                            ->image()
                            ->maxSize(1024)
                            ->getUploadedFileNameForStorageUsing(function ($file, $get) {
                                $name = $get('name') ?? 'images-1';
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

                    ])->columnSpan(1),

                Section::make('About Page Our Mission Details')
                    ->description('Provide the details of the about page our mission.')
                    ->icon(Heroicon::OutlinedInformationCircle)
                    ->schema([
                        Group::make()
                            ->schema([
                                TextInput::make('our_mission')
                                    ->label('About Page Our Mission Heading')
                                    ->rule(["required", "min:3"])
                                    ->validationMessages([
                                        'rule' => 'The about page our mission heading is required.',
                                    ]),
                                Textarea::make('content_1')
                                    ->label('About Page Our Mission Description'),
                            ])->columns(1),
                    ])->columnSpanFull(),

                Section::make('About Page Our Vision Details')
                    ->description('Provide the details of the about page our vision.')
                    ->icon(Heroicon::OutlinedInformationCircle)
                    ->schema([
                        Group::make()
                            ->schema([
                                TextInput::make('our_vision')
                                    ->label('About Page Our Vision Heading')
                                    ->rule(["required", "min:3"])
                                    ->validationMessages([
                                        'rule' => 'The about page our vision heading is required.',
                                    ]),
                                Textarea::make('content_2')
                                    ->label('About Page Our Vision Description'),
                            ])->columns(1),
                    ])->columnSpanFull(),


                Section::make('About Page What We Do Details')
                    ->description('Provide the details of the about page what we do.')
                    ->icon(Heroicon::OutlinedInformationCircle)
                    ->schema([
                        Group::make()
                            ->schema([
                                TextInput::make('heading_3')
                                    ->label('About Page What We Do Heading')
                                    ->rule(["required", "min:3"])
                                    ->validationMessages([
                                        'rule' => 'The about page what we do heading is required.',
                                    ]),
                                RichEditor::make('content_3')
                                    ->label('About Page What We Do Description')
                                    ->required()
                                    ->validationMessages([
                                        'required' => 'The about page what we do description is required.',
                                    ]),

                            ])->columns(1),
                    ])->columnSpan(2),

                Section::make('About Page What We Do Media')
                    ->description('Upload images related to the about page what we do .')
                    ->icon(Heroicon::Photo)
                    ->schema([
                        FileUpload::make('images_4')
                            ->label('About Page What We Do Images ( 740px X 830px )')
                            ->disk('public')
                            ->directory('about-images')
                            ->image()
                            ->maxSize(1024)
                            ->getUploadedFileNameForStorageUsing(function ($file, $get) {
                                $name = $get('name') ?? 'images-4';
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

                    ])->columnSpan(1),

                Section::make('SEO Settings')
                    ->description('Provide SEO meta data for the About Pages.')
                    ->icon(Heroicon::ChartBar)
                    ->schema([
                        TextInput::make('meta_title')
                            ->label('Meta Title'),

                        TagsInput::make('meta_keywords')
                            ->label('Meta Keywords'),

                        Textarea::make('meta_description')
                            ->label('Meta Description')
                            ->rows(3),

                    ])->columnSpanFull(),


            ])->columns(3);
    }
}
