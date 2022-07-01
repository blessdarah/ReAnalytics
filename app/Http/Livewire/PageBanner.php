<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PageBanner extends Component
{
    public $title;
    public $pageName;

    public function render()
    {
        return view('livewire.page-banner');
    }
}
