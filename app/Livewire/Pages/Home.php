<?php

namespace App\Livewire\Pages;

use Filament\Support\Markdown;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $markdownContent = file_get_contents(resource_path('content/home.md'));
        $parser = new Markdown($markdownContent);
        $content = $parser->toHtml();
        $title = env("APP_NAME");

        return view('livewire.pages.home', compact(['content', 'title']));
    }
}
