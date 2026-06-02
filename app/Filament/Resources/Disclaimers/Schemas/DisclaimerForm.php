<?php

namespace App\Filament\Resources\Disclaimers\Schemas;


use Filament\Schemas\Schema;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Components\Section;
use Filament\Support\Icons\Heroicon;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;

class DisclaimerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Disclaimer Details')
                    ->description('Provide the details of the disclaimer pages')
                    ->icon(Heroicon::OutlinedInformationCircle)
                    ->schema([
                        TextInput::make('name')
                            ->label('Heading')
                            ->rule(["required", "min:3"])
                            ->validationMessages([
                                'rule' => 'The heading is required.',
                            ]),
                        RichEditor::make('content')
                            ->label('Description')
                            ->required()
                            ->validationMessages([
                                'required' => 'The  description is required.',
                            ]),

                    ])->columnSpan(2),

                Section::make('SEO Settings')
                    ->description('Provide SEO meta data for the disclaimer Pages.')
                    ->icon(Heroicon::ChartBar)
                    ->schema([
                        TextInput::make('meta_title')
                            ->label('Meta Title'),

                        TagsInput::make('meta_keywords')
                            ->label('Meta Keywords'),

                        Textarea::make('meta_description')
                            ->label('Meta Description')
                            ->rows(3),

                    ])->columnSpan(1),

            ])->columns(3);
    }
}
