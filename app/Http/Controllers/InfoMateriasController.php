<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Materia;
class InfoMateriasController extends Controller
{
    //
    public function index(Request $request, $id){

        $materia = Materia::find($id);

        $materia->img = strtolower(str_replace(' ', '-', $materia->nome));
        
        return view('system.InfoMateria', ['materia' => $materia]);
    }
}
