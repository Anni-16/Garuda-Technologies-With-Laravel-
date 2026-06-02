<?php

namespace App\Filament\Resources\Blogs\Tables;

use Dom\Text;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Actions\ViewAction;
use Filament\Actions\DeleteAction;
use Filament\Tables\Filters\SelectFilter;
use Filament\Notifications\Notification;
use App\Models\ServiceCategory;
use App\Models\Blogs;
use Filament\Actions\CreateAction;



class BlogsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('sno')
                    ->label('S.No')
                    ->rowIndex(),
                ImageColumn::make('images')
                    ->label('Image')
                    ->disk('public')
                    ->square(),
                TextColumn::make('title')
                    ->label('Blog Title')
                    ->limit(10)
                    ->tooltip(fn($record) => $record->title)
                    ->sortable()
                    ->searchable(),

                TextColumn::make('category.name')
                    ->label('Blog Type')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('authorName.name')
                    ->label('Author Name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('description')
                    ->label('Description')
                    ->formatStateUsing(fn($state) => strip_tags($state)) 
                    ->limit(30)
                    ->tooltip(fn($record) => strip_tags($record->description))
                    ->searchable()
                    ->sortable(),

                TextColumn::make('published_at')
                    ->label('Published Date')
                    ->date()
                    ->sortable(),

                TextColumn::make('is_featured')
                    ->label('Featured')
                    ->formatStateUsing(fn($state) => $state ? 'Active' : 'Inactive')
                    ->color(fn($state) => $state ? 'success' : 'danger')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('slug')
                    ->label('URL')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('blog_type')
                    ->label('Blog Type')
                    ->options(fn() => \App\Models\BlogCategory::pluck('name', 'id')),
                SelectFilter::make('author')
                    ->label('Author Name')
                    ->options(fn() => \App\Models\BlogAuthor::pluck('name', 'id')),
                SelectFilter::make('is_featured')
                    ->label('Featured')
                    ->options([
                        1 => 'Active',
                        0 => 'Inactive',
                    ]),
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make()
                        ->successNotification(
                            Notification::make()
                                ->success()
                                ->title('Blogs Deleted')
                                ->body('Selected blogs have been deleted successfully.')
                        ),
                    CreateAction::make()->label('Add New Blog')
                ]),
            ]);
    }
}
