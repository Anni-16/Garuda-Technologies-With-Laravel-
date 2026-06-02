<?php

namespace App\Filament\Resources\Faqs\Pages;

use App\Filament\Resources\Faqs\FaqResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Notifications\Notification;

class ListFaqs extends ListRecords
{
    protected static string $resource = FaqResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('Add New FAQ'),
        ];
    }
    protected function getDeletedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('FAQ Deleted')
            ->body('The FAQ has been deleted successfully.');
    }
}
