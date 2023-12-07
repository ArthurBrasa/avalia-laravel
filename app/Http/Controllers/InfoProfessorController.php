<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Professor;

class InfoProfessorController extends Controller
{
    public function index(Request $request, $id){

        $professor = Professor::find($id);

        // $materia->img = strtolower(str_replace(' ', '-', $materia->nome));
        // dd($professor, $id);
        return view('system.InfoProfessor', ['professor' => $professor]);
    }
}
;