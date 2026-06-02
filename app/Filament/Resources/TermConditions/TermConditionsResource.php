<?php

namespace App\Filament\Resources\TermConditions;

use App\Filament\Resources\TermConditions\Pages\CreateTermConditions;
use App\Filament\Resources\TermConditions\Pages\EditTermConditions;
use App\Filament\Resources\TermConditions\Pages\ListTermConditions;
use App\Filament\Resources\TermConditions\Schemas\TermConditionsForm;
use App\Filament\Resources\TermConditions\Tables\TermConditionsTable;
use App\Models\TermConditions;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class TermConditionsResource extends Resource
{
    protected static ?string $model = TermConditions::class;

    protected static string|UnitEnum|null $navigationGroup = 'Manage CMS Pages';

    // Updated icon (better suited for pages/info)
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedDocumentText;

    // This changes sidebar name
    protected static ?string $navigationLabel = 'Terms & Conditions Pages';

    // Optional: for plural naming
    protected static ?string $pluralModelLabel = 'Terms & Conditions Pages';

    // Optional: for single record label
    protected static ?string $modelLabel = 'Terms & Conditions Page';


    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return TermConditionsForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TermConditionsTable::configure($table);
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
            'index' => ListTermConditions::route('/'),
            'create' => CreateTermConditions::route('/create'),
            'edit' => EditTermConditions::route('/{record}/edit'),
        ];
    }
    public static function getNavigationUrl(): string
    {
        $record = \App\Models\CookiesPolicy::first(); // or any logic to get record

        if ($record) {
            return static::getUrl('edit', ['record' => $record]);
        }

        // fallback if no record exists
        return static::getUrl('create');
    }
}
