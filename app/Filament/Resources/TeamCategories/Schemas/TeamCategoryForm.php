<?php

namespace App\Filament\Resources\TeamCategories\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Str;
use Filament\Schemas\Components\Section;
use Filament\Support\Icons\Heroicon;
use Filament\Schemas\Components\Group;

class TeamCategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Team Category Details')
                    ->description('Provide the details of the team category.')
                    ->icon(Heroicon::InformationCircle)
                    ->schema([
                        Group::make()
                            ->schema([
                                TextInput::make('name')
                                    ->label('Team Category Name')
                                    ->rule(["required", "min:3"])
                                    ->reactive()
                                    ->afterStateUpdated(function ($state, callable $set) {
                                        $set('slug', Str::slug($state));
                                    }),
                                TextInput::make('slug')
                                    ->label('Team Category URL Slug')
                                    ->unique()
                                    ->validationMessages([
                                        'unique' => 'The URL slug must be unique.',
                                    ]),

                            ])->columns(2),

                        Toggle::make('is_active')
                            ->label('Is Active')
                            ->default(true),

                    ])->columnSpanFull(),
            ]);
    }
}
