<?php

namespace App\Filament\Resources\Contacts;

use App\Filament\Resources\Contacts\Pages\CreateContact;
use App\Filament\Resources\Contacts\Pages\EditContact;
use App\Filament\Resources\Contacts\Pages\ListContacts;
use App\Filament\Resources\Contacts\Schemas\ContactForm;
use App\Filament\Resources\Contacts\Tables\ContactsTable;
use App\Models\Contact;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static string|UnitEnum|null $navigationGroup = 'Manage CMS Pages';

    // Updated icon (better suited for pages/info)
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedDocumentText;

    // This changes sidebar name
    protected static ?string $navigationLabel = 'Contact Pages';

    // Optional: for plural naming
    protected static ?string $pluralModelLabel = 'Contact Pages';

    // Optional: for single record label
    protected static ?string $modelLabel = 'Contact Page';
    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return ContactForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ContactsTable::configure($table);
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
            'index' => ListContacts::route('/'),
            'create' => CreateContact::route('/create'),
            'edit' => EditContact::route('/{record}/edit'),
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
