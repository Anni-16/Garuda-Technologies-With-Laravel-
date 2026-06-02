<?php

namespace App\Filament\Resources\Contacts\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Support\Icons\Heroicon;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Group;
use Illuminate\Support\Str;
use Filament\Forms\Components\FileUpload;

class ContactForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Contact Us Details')
                    ->description('Provide the details of the contact us pages')
                    ->icon(Heroicon::OutlinedInformationCircle)
                    ->schema([
                        TextInput::make('name')
                            ->label('Heading')
                            ->rule(["required", "min:3"])
                            ->validationMessages([
                                'rule' => 'The heading is required.',
                            ]),
                        TextInput::make('number')
                            ->label('Phone No.')
                            ->rule(["required", "min:10"])
                            ->validationMessages([
                                'rule' => 'The phone number is required.',
                            ]),
                        TextInput::make('email')
                            ->label('Email Id')
                            ->rule(["required", "min:3"])
                            ->validationMessages([
                                'rule' => 'The email is required.',
                            ]),
                        Textarea::make('address')
                            ->label('Address')
                            ->rule(["required", "min:3"])
                            ->validationMessages([
                                'rule' => 'The Address is required.',
                            ]),
                        TextInput::make('location_url')
                            ->label('Google Map Location URL')
                            ->rule(["required", "min:3"])
                            ->validationMessages([
                                'rule' => 'The Address is required.',
                            ]),


                    ])->columnSpan(2),


                Group::make()
                    ->schema([
                        Section::make('Media')
                            ->description('Upload an image for the Contact.')
                            ->icon(Heroicon::Photo)
                            ->schema([
                                FileUpload::make('images')
                                    ->label('Contact Images  ( 740px X 830px )')
                                    ->disk('public')
                                    ->directory('contact_images')
                                    ->maxSize(1024)
                                    ->image()
                                    ->required()
                                    ->getUploadedFileNameForStorageUsing(function ($file, $get) {
                                        $name = $get('name') ?? 'contact';
                                        return Str::slug($name) . '-' . time() . '.' . $file->getClientOriginalExtension();
                                    })
                                    ->deleteUploadedFileUsing(function ($file) {
                                        if ($file && \Illuminate\Support\Facades\Storage::disk('public')->exists($file)) {
                                            \Illuminate\Support\Facades\Storage::disk('public')->delete($file);
                                        }
                                    })
                                    ->validationMessages([
                                        'max' => 'The image must not be greater than 1MB.',
                                        'required' => 'At least one contact image is required.',
                                    ]),

                            ]),

                        Section::make('SEO Settings')
                            ->description('Provide SEO meta data for the contact.')
                            ->icon(Heroicon::ChartBar)
                            ->schema([
                                TextInput::make('meta_title')
                                    ->label('Meta Title'),

                                TagsInput::make('meta_keywords')
                                    ->label('Meta Keywords'),

                                Textarea::make('meta_description')
                                    ->label('Meta Description')
                                    ->rows(3),
                            ])
                    ])->columnSpan(1),


                Section::make('Social Media Links')
                    ->description('Provide social media links for the contact Pages.')
                    ->icon('heroicon-o-chat-bubble-left-right')
                    ->schema([
                        TextInput::make('facebook_url')
                            ->label('Face Book Social Media Link'),

                        TextInput::make('instagram_url')
                            ->label('Instagram Social Media Link'),

                        TextInput::make('linkedin_url')
                            ->label('Linkedin Social Media link'),

                    ])->columnSpanFull(),
            ])->columns(3);
    }
}
