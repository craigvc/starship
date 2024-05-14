<?php

namespace Modules\Companies\Filament\Resources\CompaniesResource\Pages;

use Modules\Companies\Filament\Resources\CompaniesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCompanies extends EditRecord
{
    protected static string $resource = CompaniesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
