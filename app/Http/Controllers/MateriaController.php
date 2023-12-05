<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\Materia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MateriaController extends Controller
{
    //
    public function index() {
        $userId = Auth::id();
        
        $materias = Materia::where('usuario_id', $userId)->get();
        // dd($materias);
        return view('system.createMateria', ['materias' => $materias]);
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

        $usuario = Auth::id();

        // dd($data);
        $materia = Materia::create([
            'name' => $request->name,
            'sigla' => $request->sigla,
            'universidade_id' => '1',
            'descricao' => $request->descricao,
            // 'departamento' => $request->departamento,
            'img_link' => $request->img,
            'duracao' => $request->time,
            'usuario_id' => $usuario
        ]);
        return redirect()->route('formDiciplinas')->with('success', 'Materia cadastrada com sucesso!');
    }

    public function delete(Request $request, $id)
    {
        // dd($request);
        try {
            // Encontrar a matéria pelo ID
            $materia = Materia::findOrFail($id);

            // Deletar a matéria
            $materia->delete();

            // Redirecionar de volta para a página de listagem de matérias ou qualquer página desejada
            return redirect()->route('formDiciplinas')->with('success', 'Materia deletada com sucesso');

        } catch (\Exception $e) {
            // Tratar qualquer exceção, por exemplo, a matéria não foi encontrada
            return redirect()->route('formDiciplinas')->with('error', $e->getMessage());
        }
    }
}
