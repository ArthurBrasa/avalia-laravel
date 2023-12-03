<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InfoMateriasController extends Controller
{
    //
    public function index(Request $request, $nome){
        $nome = strtoupper(str_replace('-', ' ', $nome));

        return view('system.infoMateria', ['nome' => $nome]);
    }
}
