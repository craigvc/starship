<?php

namespace Modules\Contacts\Filament\Resources\ContactResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Modules\Contacts\Filament\Resources\ContactResource;

class CreateContact extends CreateRecord
{
    protected static string $resource = ContactResource::class;


    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
