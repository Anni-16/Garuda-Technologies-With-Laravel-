<?php

namespace App\Filament\Resources\Abouts;

use App\Filament\Resources\Abouts\Pages\CreateAbout;
use App\Filament\Resources\Abouts\Pages\EditAbout;
use App\Filament\Resources\Abouts\Pages\ListAbouts;
use App\Filament\Resources\Abouts\Schemas\AboutForm;
use App\Filament\Resources\Abouts\Tables\AboutsTable;
use App\Models\About;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class AboutResource extends Resource
{
    protected static ?string $model = About::class;

    protected static string|UnitEnum|null $navigationGroup = 'Manage CMS Pages';

    // Updated icon (better suited for pages/info)
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedDocumentText;

    // This changes sidebar name
    protected static ?string $navigationLabel = 'About Pages';

    // Optional: for plural naming
    protected static ?string $pluralModelLabel = 'About Pages';

    // Optional: for single record label
    protected static ?string $modelLabel = 'About Page';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return AboutForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AboutsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListAbouts::route('/'),
            'create' => CreateAbout::route('/create'),
            'edit' => EditAbout::route('/{record}/edit'),
        ];
    }


    public static function getNavigationUrl(): string
    {
        $record = \App\Models\About::first(); // or any logic to get record

        if ($record) {
            return static::getUrl('edit', ['record' => $record]);
        }

        // fallback if no record exists
        return static::getUrl('create');
    }
}
