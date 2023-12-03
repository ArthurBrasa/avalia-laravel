<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InfoMateriasController extends Controller
{
    //
    public function index(Request $request, $nome){
        $img = $nome;
        $nome = ucwords(str_replace('-', ' ', $nome));

        return view('system.InfoMateria', ['nome' => $nome, 'img' => $img]);
    }
}
