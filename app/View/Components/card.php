<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class card extends Component
{
    public $title;
    public $description;
    public $buttonValue;
    public $iconName;
    public function __construct($title, $buttonValue, $iconName, $description)
    {
        $this->buttonValue = $buttonValue;
        $this->description = $description;
        $this->iconName = $iconName;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
