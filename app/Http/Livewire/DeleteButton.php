<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DeleteButton extends Component
{
    public $buttonText;
    public $routeName;
    
    public function render()
    {
        return view('livewire.delete-button');
    }
}
