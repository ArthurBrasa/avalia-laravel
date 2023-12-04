<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class MiniCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $materia,
        public string $img
    ){}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.mini-card');
    }
}
