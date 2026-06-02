<?php

namespace App\Filament\Resources\Disclaimers\Pages;

use App\Filament\Resources\Disclaimers\DisclaimerResource;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;

class EditDisclaimer extends EditRecord
{
    protected static string $resource = DisclaimerResource::class;


    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Disclaimer Pages Updated')
            ->body('The disclaimer us page has been updated successfully.');
    }


    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('edit', [
            'record' => $this->record,
        ]);
    }
}
