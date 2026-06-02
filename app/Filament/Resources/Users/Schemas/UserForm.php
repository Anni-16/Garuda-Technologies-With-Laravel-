<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Group;
use Filament\Forms\Components\Toggle;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('User Details')
                    ->icon('heroicon-o-user')
                    ->description('Provide the details for the user.')
                    ->schema([
                        Group::make()
                            ->schema([
                                TextInput::make('name')
                                    ->label('User Name')
                                    ->rule(["required", "min:3"])
                                    ->reactive(),
                                TextInput::make('email')
                                    ->label('User Email')
                                    ->email()
                                    ->unique()
                                    ->validationMessages([
                                        'unique' => 'The email must be unique.',
                                    ]),

                            ])->columns(2),

                        TextInput::make('password')
                            ->password()
                            ->revealable()
                            ->label('Password')
                            ->minLength(8)
                            ->required(fn($livewire) => $livewire instanceof \App\Filament\Resources\Users\Pages\CreateUser)
                            ->dehydrated(fn($state) => filled($state))
                            ->dehydrateStateUsing(fn($state) => \Illuminate\Support\Facades\Hash::make($state)),

                        Toggle::make('is_active')
                            ->label('Is Active')
                            ->default(true),

                    ])->columnSpanFull(),
            ]);
    }
}
