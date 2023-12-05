<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class CardMateria extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $materia,
        // public string $link,
        public string $img,
        public string $id
    ){}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-materia');
    }
}
