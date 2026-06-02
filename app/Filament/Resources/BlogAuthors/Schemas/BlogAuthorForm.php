<?php

namespace App\Filament\Resources\BlogAuthors\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Str;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Group;

class BlogAuthorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Blog Author Details')
                    ->icon('heroicon-o-user')
                    ->description('Provide the details for the blog author.')
                    ->schema([
                        Group::make()
                            ->schema([
                                TextInput::make('name')
                                    ->label('Blog Author Name')
                                    ->rule(["required", "min:3"])
                                    ->reactive()
                                    ->afterStateUpdated(function ($state, callable $set) {
                                        $set('slug', Str::slug($state));
                                    }),
                                TextInput::make('slug')
                                    ->label('Blog Author URL Slug')
                                    ->unique()
                                    ->validationMessages([
                                        'unique' => 'The URL slug must be unique.',
                                    ]),

                            ])->columns(2),

                        Toggle::make('is_active')
                            ->label('Is Active')
                            ->default(true)

                    ])->columnSpanFull(),
            ]);
    }
}
