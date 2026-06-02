<?php

namespace App\Filament\Resources\BlogCategories\Pages;

use App\Filament\Resources\BlogCategories\BlogCategoryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Notifications\Notification;

class ListBlogCategories extends ListRecords
{
    protected static string $resource = BlogCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('Add New Blog Category'),
        ];
    }
      protected function getDeletedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Blog Categories Deleted')
            ->body('The blog categories has been deleted successfully.');
    }
}
