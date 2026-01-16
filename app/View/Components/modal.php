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
    public string $textBtn1;
    public string $textBtn2;

    public function __construct(?string $title , ?string $textBtn1 , ?string $textBtn2)
    {
        $this->title = $title;
        $this->textBtn1 = $textBtn1;
        $this->textBtn2 = $textBtn2;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.modal');
    }
}
