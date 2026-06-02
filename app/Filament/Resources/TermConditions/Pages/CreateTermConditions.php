<?php

namespace App\Filament\Resources\TermConditions\Pages;

use App\Filament\Resources\TermConditions\TermConditionsResource;
use Filament\Resources\Pages\CreateRecord;

class CreateTermConditions extends CreateRecord
{
    protected static string $resource = TermConditionsResource::class;
    protected static bool $canCreateAnother = false;
}
