<?php

namespace App\Filament\Resources\Abouts\Pages;

use App\Filament\Resources\Abouts\AboutResource;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;

class EditAbout extends EditRecord
{
    protected static string $resource = AboutResource::class;


    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('About Pages Updated')
            ->body('The about us page has been updated successfully.');
    }


    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('edit', [
            'record' => $this->record,
        ]);
    }
}
