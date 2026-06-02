<?php

namespace App\Filament\Resources\Faqs\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class FaqForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('FAQ Details')
                    ->description('Provide the details of the FAQ.')
                    ->icon('heroicon-o-question-mark-circle')
                    ->schema([
                        TextInput::make('question')
                            ->label('Question')
                            ->required()
                            ->validationMessages([
                                'required' => 'The question is required.',
                            ]),
                        Textarea::make('answer')
                            ->label('Answer')
                            ->required()
                            ->validationMessages([
                                'required' => 'The answer is required.',
                            ]),
                        Toggle::make('is_active')
                            ->label('Is Active')
                            ->default(true),
                    ]),

            ])->columns(1);
    }
}
