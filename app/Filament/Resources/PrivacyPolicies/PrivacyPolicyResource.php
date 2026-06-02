<?php

namespace App\Filament\Resources\PrivacyPolicies;

use App\Filament\Resources\PrivacyPolicies\Pages\CreatePrivacyPolicy;
use App\Filament\Resources\PrivacyPolicies\Pages\EditPrivacyPolicy;
use App\Filament\Resources\PrivacyPolicies\Pages\ListPrivacyPolicies;
use App\Filament\Resources\PrivacyPolicies\Schemas\PrivacyPolicyForm;
use App\Filament\Resources\PrivacyPolicies\Tables\PrivacyPoliciesTable;
use App\Models\PrivacyPolicy;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class PrivacyPolicyResource extends Resource
{
    protected static ?string $model = PrivacyPolicy::class;


    protected static string|UnitEnum|null $navigationGroup = 'Manage CMS Pages';

    // Updated icon (better suited for pages/info)
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedDocumentText;

    // This changes sidebar name
    protected static ?string $navigationLabel = 'Privacy Policy Pages';

    // Optional: for plural naming
    protected static ?string $pluralModelLabel = 'Privacy Policy Pages';

    // Optional: for single record label
    protected static ?string $modelLabel = 'Privacy Policy Page';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return PrivacyPolicyForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PrivacyPoliciesTable::configure($table);
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
            'index' => ListPrivacyPolicies::route('/'),
            'create' => CreatePrivacyPolicy::route('/create'),
            'edit' => EditPrivacyPolicy::route('/{record}/edit'),
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
