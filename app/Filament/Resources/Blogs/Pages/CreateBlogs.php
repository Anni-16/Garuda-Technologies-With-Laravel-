<?php

namespace App\Filament\Resources\Blogs\Pages;

use App\Filament\Resources\Blogs\BlogsResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateBlogs extends CreateRecord
{
    protected static string $resource = BlogsResource::class;

    protected static bool $canCreateAnother = false;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
        protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Blogs Created')
            ->body('The blogs has been created successfully.');
    }
}
