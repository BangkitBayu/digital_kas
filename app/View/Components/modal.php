<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class modal extends Component
{
    /**
     * Create a new component instance.
     */

    /**
     *
     * Component properties
     */

    public string $title;
    public string $textBtn;

    public function __construct(?string $title , string $textBtn = "Batal")
    {
        $this->title = $title;
        $this->textBtn = $textBtn;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.modal');
    }
}
