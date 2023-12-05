<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Materia;

class ListaMateriaController extends Controller
{
    //
    public function index(){

        $materias = Materia::all();
        
        foreach($materias as $materia) {
            $materia->link = strtolower(str_replace('.', '.', str_replace(' ', '-', $materia->name)));
        }

        return view('system.listaMaterias', ['materias' => $materias]);
    }

    
}
