<?php

namespace App\Filament\Resources\Disclaimers;

use App\Filament\Resources\Disclaimers\Pages\CreateDisclaimer;
use App\Filament\Resources\Disclaimers\Pages\EditDisclaimer;
use App\Filament\Resources\Disclaimers\Pages\ListDisclaimers;
use App\Filament\Resources\Disclaimers\Schemas\DisclaimerForm;
use App\Filament\Resources\Disclaimers\Tables\DisclaimersTable;
use App\Models\Disclaimer;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class DisclaimerResource extends Resource
{
    protected static ?string $model = Disclaimer::class;

    protected static string|UnitEnum|null $navigationGroup = 'Manage CMS Pages';

    // Updated icon (better suited for pages/info)
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedDocumentText;

    // This changes sidebar name
    protected static ?string $navigationLabel = 'Disclaimer Pages';

    // Optional: for plural naming
    protected static ?string $pluralModelLabel = 'Disclaimer Pages';

    // Optional: for single record label
    protected static ?string $modelLabel = 'Disclaimer Page';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return DisclaimerForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DisclaimersTable::configure($table);
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
            'index' => ListDisclaimers::route('/'),
            'create' => CreateDisclaimer::route('/create'),
            'edit' => EditDisclaimer::route('/{record}/edit'),
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
