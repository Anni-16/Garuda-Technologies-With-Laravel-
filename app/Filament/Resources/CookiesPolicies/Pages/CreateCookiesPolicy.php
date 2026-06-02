<?php

namespace App\Filament\Resources\CookiesPolicies\Pages;

use App\Filament\Resources\CookiesPolicies\CookiesPolicyResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCookiesPolicy extends CreateRecord
{
    protected static string $resource = CookiesPolicyResource::class;
    protected static bool $canCreateAnother = false;
}
