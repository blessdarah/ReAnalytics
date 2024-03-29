<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TableGridContainer extends Component
{

    public $title;
    public $routeName;
    public $buttonText;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $routeName, $buttonText="Create")
    {
        $this->title = $title;
        $this->routeName = $routeName;
        $this->buttonText = $buttonText;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Closure|string
     */
    public function render()
    {
        return view('components.table-grid-container');
    }
}
