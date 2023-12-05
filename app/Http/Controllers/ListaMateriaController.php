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

    public function search(Request $request) {
        $pesquisa = $request->pesquisa;
        // dd($pesquisa);
        // Use o operador LIKE para pesquisar pelo nome do professor
        $materias = Materia::where('name', 'LIKE', "%$pesquisa%")->get();
        foreach($materias as $materia) {
            $materia->link = strtolower(str_replace('.', '.', str_replace(' ', '-', $materia->nome)));
        }

        return view('system.listaMaterias', ['materias' => $materias]);
    }

    
}
