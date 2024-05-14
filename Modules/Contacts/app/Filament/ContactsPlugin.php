<?php

namespace Modules\Contacts\Filament;

use Coolsam\Modules\Concerns\ModuleFilamentPlugin;
use Filament\Contracts\Plugin;
use Filament\Panel;

class ContactsPlugin implements Plugin
{
    use ModuleFilamentPlugin;

    public function getModuleName(): string
    {
        return 'Contacts';
    }

    public function getId(): string
    {
        return 'contacts';
    }

    public function boot(Panel $panel): void
    {
        // TODO: Implement boot() method.
    }
}
