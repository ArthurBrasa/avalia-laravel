<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Professor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ProfessoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {

    //     // $url = 'http://127.0.0.1:3000/v1/professor';
    //     // $headers = array(
    //     //     'Accept: */*'
    //     // );

    //     // $ch = curl_init($url);

    //     // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //     // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    //     // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    //     // $response = curl_exec($ch);

    //     // if(curl_errno($ch)) {
    //     //     echo 'Erro na requisição cURL: ' . curl_error($ch);
    //     //     return  abort(404, 'Error na API');
    //     // }

    //     // curl_close($ch);

    //     // $lista = json_decode($response);
    //     // dd($lista);

    //     $professores = Professor::all();
        
    //     foreach($professores as $prof) {
    //         $prof->link = strtolower(str_replace('.', '.', str_replace(' ', '-', $prof->nome)));
    //     }

    //     return view('system.listaProfessores', ['professores' => $professores]);
    // }

    // public function search(Request $request) {
    //     $pesquisa = $request->pesquisa;
    //     // dd($pesquisa);
    //     // Use o operador LIKE para pesquisar pelo nome do professor
    //     $professores = Professor::where('nome', 'LIKE', "%$pesquisa%")->get();
    //     foreach($professores as $prof) {
    //         $prof->link = strtolower(str_replace('.', '.', str_replace(' ', '-', $prof->nome)));
    //     }

    //     return view('system.listaProfessores', ['professores' => $professores]);
    // }

    public function index() {
        $userId = Auth::id();

        $data = Professor::where('usuario_id', $userId)->get();

        // dd($data);
        return view('system.createProfessor', ['data' => $data]);
    }

    public function store(Request $request){
        
        $data = $request->all();

        $validator = Validator::make($data, [
            'name' => 'required|string|max:255',
            'departamento' => 'required|string|max:255',
            'email' => 'required|string',
            'idade' => 'required|string|',
            'materia' => 'required|string|max:50',
            // 'universidade' => 'required|string|max:10',
            'observacoes' => 'required|string|',
            'img' => 'required|string',
            // 'descricao' => 'required|string',
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
        $materia = Professor::create([
            'nome' => $request->name,
            'departamento' => $request->departamento,
            'professor' => 'professor',
            'email' => $request->email,
            'idade' => $request->idade,
            'materia' => $request->materia,
            'universidade' => '1',
            'observacoes' => $request->observacoes,
            'usuario_id' => $usuario,
            'img' => $request->img
        ]);
        return redirect()->route('formProfessor')->with('success', 'Professor Cadastrado com sucesso!');
    }

    public function delete(Request $request, $id)
    {
        // dd($request);
        try {
            // Encontrar a matéria pelo ID
            $materia = Professor::findOrFail($id);

            // Deletar a matéria
            $materia->delete();

            // Redirecionar de volta para a página de listagem de matérias ou qualquer página desejada
            return redirect()->route('formProfessor')->with('success', 'Professor Deletado');

        } catch (\Exception $e) {
            // Tratar qualquer exceção, por exemplo, a matéria não foi encontrada
            return redirect()->route('formProfessor')->with('error', $e->getMessage());
        }
    }

    public function get(Request $request, $id){
        $userId = Auth::id();

        $data = Professor::where('usuario_id', $userId)->get();
        $update = Professor::find($id);
        return view('system.createProfessor', ['data' => $data, 'update' => $update]);
    }

    public function put(Request $request, $id){
        
        $validator = Validator::make($request->all(), [
            'name' => 'string|max:255',
            'departamento' => 'string|max:255',
            'email' => 'string',
            'idade' => 'string|',
            'materia' => 'string|max:50',
            // 'universidade' => 'required|string|max:10',
            'observacoes' => 'string|',
            'img' => 'string',
            // 'descricao' => 'required|string',
        ]);

        // dd($request->all());

        $userId = Auth::id();


       
        $update = Professor::find($id);

        $update->nome = $request->name;
        $update->departamento = $request->departamento;
        $update->email = $request->email;
        $update->idade = $request->idade;
        $update->materia = $request->materia;
        $update->observacoes = $request->observacoes;
        $update->img = $request->img;
        $update->save();

        $data = Professor::where('usuario_id', $userId)->get();

        return view('system.createProfessor', ['data' => $data]);
    }



   
}
