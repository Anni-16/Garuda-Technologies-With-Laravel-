<?php

namespace App\Filament\Resources\CookiesPolicies\Pages;

use App\Filament\Resources\CookiesPolicies\CookiesPolicyResource;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;

class EditCookiesPolicy extends EditRecord
{
    protected static string $resource = CookiesPolicyResource::class;

   protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Cookies Ploicy Pages Updated')
            ->body('The cookies policy us page has been updated successfully.');
    }


    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('edit', [
            'record' => $this->record,
        ]);
    }
}
