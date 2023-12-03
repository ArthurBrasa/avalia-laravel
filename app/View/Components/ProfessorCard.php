<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class ProfessorCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $nome,
        public string $link,
        public string $img
        ){}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.professor-card');
    }
}
