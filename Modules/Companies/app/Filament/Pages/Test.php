<?php

namespace Modules\Companies\Filament\Pages;

use Filament\Pages\Page;

class Test extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'companies::filament.pages.test';
}
