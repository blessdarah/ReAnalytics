<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use PhpParser\Builder\Method;

class Form extends Component
{
    public $method;
    public $action;
    public $buttonText;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($method = 'POST', $action, $buttonText = 'Save')
    {
        $this->method = $method;
        $this->action = $action;
        $this->buttonText = $buttonText;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Closure|string
     */
    public function render()
    {
        return view('components.form');
    }
}
