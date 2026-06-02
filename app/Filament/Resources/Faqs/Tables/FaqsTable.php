<?php

namespace App\Filament\Resources\Faqs\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\Filters\SelectFilter;
use Filament\Actions\DeleteAction;
use Filament\Notifications\Notification;
use Filament\Actions\CreateAction;
use Filament\Actions\ViewAction;

class FaqsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('sno')
                    ->label('S.No')
                    ->rowIndex(),
                TextColumn::make('question')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('answer')
                    ->searchable()
                    ->limit(30)
                    ->tooltip(fn($record) => $record->answer)
                    ->sortable(),
                 TextColumn::make('is_active')
                    ->formatStateUsing(fn($state) => $state ? 'Active' : 'Inactive')
                    ->color(fn($state) => $state ? 'success' : 'danger')
                    ->sortable()
                    ->searchable(),   
            ])
            ->filters([
                SelectFilter::make('is_active')
                    ->label('Status')
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
                                ->title('FAQs Deleted')
                                ->body('Selected FAQs have been deleted successfully.')
                        ),
                    CreateAction::make()->label('Add New FAQ'),
                ]),
            ]);
    }
}
