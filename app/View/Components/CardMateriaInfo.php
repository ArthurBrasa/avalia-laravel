<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class CardMateriaInfo extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $name,
        public string $img
    ){}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-materia-info');
    }
}

#attributes: array:8 [▼
// "id" => 2
// "name" => "BNHA001 - Prática de Defesa"
// "universidade_id" => "1"
// "duracao" => "180"
// "sigla" => "BNHA001"
// "descricao" => "A disciplina "BNHA001 - Prática de Defesa" é projetada para proporcionar aos estudantes uma compreensão abrangente das estratégias e técnicas essenciais para a  ▶"
// "created_at" => null
// "updated_at" => null
// ]
#

