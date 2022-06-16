<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PowerGridCard extends Component
{

    public $title = '';
    public $routeName = '';
    public $buttonText = '';

    public function render()
    {
        return view('livewire.power-grid-card', [
            "title" => $this->title,
            "routeName" => $this->routeName,
            "buttonText" => $this->buttonText
        ]);
    }
}
