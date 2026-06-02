<?php

namespace App\Filament\Resources\CookiesPolicies;

use App\Filament\Resources\CookiesPolicies\Pages\CreateCookiesPolicy;
use App\Filament\Resources\CookiesPolicies\Pages\EditCookiesPolicy;
use App\Filament\Resources\CookiesPolicies\Pages\ListCookiesPolicies;
use App\Filament\Resources\CookiesPolicies\Schemas\CookiesPolicyForm;
use App\Filament\Resources\CookiesPolicies\Tables\CookiesPoliciesTable;
use App\Models\CookiesPolicy;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class CookiesPolicyResource extends Resource
{
    protected static ?string $model = CookiesPolicy::class;

    protected static string|UnitEnum|null $navigationGroup = 'Manage CMS Pages';

    // Updated icon (better suited for pages/info)
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedDocumentText;

    // This changes sidebar name
    protected static ?string $navigationLabel = 'Cookies Policy Pages';

    // Optional: for plural naming
    protected static ?string $pluralModelLabel = 'Cookies Policy Pages';

    // Optional: for single record label
    protected static ?string $modelLabel = 'Cookies Policy Page';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return CookiesPolicyForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CookiesPoliciesTable::configure($table);
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
            'index' => ListCookiesPolicies::route('/'),
            'create' => CreateCookiesPolicy::route('/create'),
            'edit' => EditCookiesPolicy::route('/{record}/edit'),
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
