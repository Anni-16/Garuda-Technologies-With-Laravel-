<?php

namespace App\Filament\Resources\Testimonials\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;
use Filament\Support\Icons\Heroicon;
use Filament\Forms\Components\Radio;

class TestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Testimonial Details')
                    ->description('Provide the details of the testimonial.')
                    ->icon(Heroicon::ChatBubbleLeftRight)
                    ->schema([
                        TextInput::make('name')
                            ->label('Name')
                            ->rule(["required", "min:3"])
                            ->validationMessages([
                                'required' => 'The name is required.',
                                'min' => 'The name must be at least 3 characters.',
                            ]),

                        TextInput::make('designation')
                            ->label('Designation')
                            ->rule(["required", "min:3"])
                            ->validationMessages([
                                'required' => 'The designation is required.',
                                'min' => 'The designation must be at least 3 characters.',
                            ]),


                        Radio::make('rating')
                            ->label('Rating')
                            ->required()
                            ->options([
                                1 => '⭐',
                                2 => '⭐⭐',
                                3 => '⭐⭐⭐',
                                4 => '⭐⭐⭐⭐',
                                5 => '⭐⭐⭐⭐⭐',
                            ])
                            ->validationMessages([
                                'required' => 'The rating is required.',
                            ])
                            ->inline(),

                        RichEditor::make('content')
                            ->label('Review Content')
                            ->required()
                            ->validationMessages([
                                'required' => 'The review content is required.',
                            ]),

                    ])->columnSpan(2),

                Section::make('Additional Information')
                    ->description('Provide additional information about the testimonial.')
                    ->icon(Heroicon::Photo)
                    ->schema([
                        FileUpload::make('images')
                            ->label('Photo')
                            ->image()
                            ->disk('public')
                            ->directory('testimonials')
                            ->visibility('public')
                            ->required()
                            ->maxSize(1024)
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
                                'required' => 'The uploaded file is required.',
                                'max' => 'The photo must not be greater than 1MB.',
                            ]),

                        Toggle::make('status')
                            ->label('Is Active')
                            ->default(true),

                    ])->columns(1),

            ])->columns(3);
    }
}
