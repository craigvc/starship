<?php

namespace Modules\Companies\Filament;

use Coolsam\Modules\Concerns\ModuleFilamentPlugin;
use Filament\Contracts\Plugin;
use Filament\Panel;

class CompaniesPlugin implements Plugin
{
    use ModuleFilamentPlugin;

    public function getModuleName(): string
    {
        return 'Companies';
    }

    public function getId(): string
    {
        return 'companies';
    }

    public function boot(Panel $panel): void
    {
        // TODO: Implement boot() method.
    }
}
