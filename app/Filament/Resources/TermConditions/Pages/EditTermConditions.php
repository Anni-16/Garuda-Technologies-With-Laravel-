<?php

namespace App\Filament\Resources\TermConditions\Pages;

use App\Filament\Resources\TermConditions\TermConditionsResource;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;

class EditTermConditions extends EditRecord
{
    protected static string $resource = TermConditionsResource::class;

    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Terms & Conditions Pages Updated')
            ->body('The terms & conditions us page has been updated successfully.');
    }


    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('edit', [
            'record' => $this->record,
        ]);
    }
}
