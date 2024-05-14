<?php

namespace Modules\Companies\Filament\Pages;

use Filament\Pages\Page;

class HelloWorld extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'companies::filament.pages.hello-world';
}
