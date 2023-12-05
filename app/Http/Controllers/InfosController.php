<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Professor;

class InfosController extends Controller
{
    //
 

    public function index(Request $request, $id) {
        // $prof = Professor::getProfessorByName($nome);
        $professor = Professor::findOrFail($id);
        $professor->img = strtolower(str_replace(' ', '-', $professor->nome));
        return view('system.Infos', ['professor' => $professor]);
    }

}
