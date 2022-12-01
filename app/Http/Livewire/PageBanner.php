<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PageBanner extends Component
{
    public string $title;
    public ?string $pageName;
    public ?string $subTitle;

    public function render()
    {
        return view('livewire.page-banner');
    }
}
