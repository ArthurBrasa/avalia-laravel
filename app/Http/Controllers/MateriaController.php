<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    //
    public function index() {
        return view('system.createMateria');
    }

    public function store(Request $request){
        
        $data = $request->all();

        $validator = Validator::make($data, [
            'name' => 'required|string|max:255',
            // 'departamento' => 'required|string|max:255',
            'time' => 'required|integer',
            'sigla' => 'required|string|max:10',
            'img' => 'required|string',
            'descricao' => 'required|string',
        ]);

        // Validator::validate($data['img'], [
        //     'img' => [
        //         'required',
        //         File::types(['svg'])
        //             ->max(2048)
        //     ],
        // ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // dd($data);
        $materia = Materia::create([
            'name' => $request->name,
            'sigla' => $request->sigla,
            'universidade_id' => '1',
            'descricao' => $request->descricao,
            // 'departamento' => $request->departamento,
            'img_link' => $request->img,
            'duracao' => $request->time
        ]);
        return redirect()->route('storeDiciplinas')->with('success', 'Materia cadastrada com sucesso!');
    }
}
