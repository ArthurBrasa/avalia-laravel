<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Professor;

class ListaProfessoresController extends Controller
{
    public function index(){

        $data = Professor::all(); 
        // dd($data);

        return view('system.listaProfessores', ['professores' => $data]);
    }

    public function search(Request $request) {
        $pesquisa = $request->pesquisa;
        // dd($pesquisa);
        // Use o operador LIKE para pesquisar pelo nome do professor
        $data = Professor::where('name', 'LIKE', "%$pesquisa%")->get();
        // dd($materias);
        return view('system.listaProfessores', ['professores' => $data]);
    }
}
