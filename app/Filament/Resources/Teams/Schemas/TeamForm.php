<?php

namespace App\Filament\Resources\Teams\Schemas;

use Illuminate\Support\Str;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use App\Models\TeamCategory;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Support\Icons\Heroicon;

class TeamForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Team Member Details')
                    ->description('Provide the details of the team member.')
                    ->icon('heroicon-o-information-circle')
                    ->schema([
                        TextInput::make('name')
                            ->label('Team Member Name')
                            ->rule(["required", "min:3"])
                            ->reactive()
                            ->afterStateUpdated(function ($state, callable $set) {
                                $set('slug', Str::slug($state));
                            }),
                        TextInput::make('slug')
                            ->label('Team Member URL Slug')
                            ->unique()
                            ->validationMessages([
                                'unique' => 'The URL slug must be unique.',
                            ]),

                        Select::make('category_id')
                            ->label('Team Department')
                            ->options(TeamCategory::pluck('name', 'id'))
                            ->searchable()
                            ->required()
                            ->validationMessages([
                                'required' => 'The team department is required.',
                            ]),
                        TextInput::make('position')
                            ->label('Team Member Position')
                            ->rule(["required", "min:3"])
                            ->validationMessages([
                                'required' => 'The team member position is required.',
                            ]),

                    ])->columnSpan(2),

                Section::make('Additional Information')
                    ->description('Provide additional information about the team member.')
                    ->icon(Heroicon::Photo)
                    ->schema([
                        FileUpload::make('images')
                            ->label('Team Member Photo')
                            ->image()
                            ->disk('public')
                            ->directory('team-photos')
                            ->required()
                            ->maxSize(1024) // 1MB
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
                        Toggle::make('is_featured')
                            ->label('Is Active')
                            ->default(true),
                    ])->columns(1),

            ])->columns(3);
    }
}
