<?php

namespace App\Filament\Resources\TeamCategories;

use App\Filament\Resources\TeamCategories\Pages\CreateTeamCategory;
use App\Filament\Resources\TeamCategories\Pages\EditTeamCategory;
use App\Filament\Resources\TeamCategories\Pages\ListTeamCategories;
use App\Filament\Resources\TeamCategories\Schemas\TeamCategoryForm;
use App\Filament\Resources\TeamCategories\Tables\TeamCategoriesTable;
use App\Models\TeamCategory;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class TeamCategoryResource extends Resource
{
    protected static ?string $model = TeamCategory::class;

    protected static string|UnitEnum|null $navigationGroup = 'Manage Teams';
    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-tag';

    // This changes sidebar name
    protected static ?string $navigationLabel = 'Team Departments';

    // Optional: for plural naming
    protected static ?string $pluralModelLabel = 'Team Departments';

    // Optional: for single record label
    protected static ?string $modelLabel = 'Team Department';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return TeamCategoryForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TeamCategoriesTable::configure($table);
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
            'index' => ListTeamCategories::route('/'),
            'create' => CreateTeamCategory::route('/create'),
            'edit' => EditTeamCategory::route('/{record}/edit'),
        ];
    }
}
