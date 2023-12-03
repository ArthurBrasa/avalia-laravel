<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InfosController extends Controller
{
    //
 

    public function index(Request $request, $nome) {
        
        $img = $nome;
        $nome = ucwords(str_replace('-', ' ', $nome));

        return view('system.Infos', ['nome' => $nome, 'img' => $img]);
    }
}
