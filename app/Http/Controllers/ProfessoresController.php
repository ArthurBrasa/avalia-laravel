<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Professor;

class ProfessoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $url = 'http://127.0.0.1:3000/v1/professor';
        // $headers = array(
        //     'Accept: */*'
        // );

        // $ch = curl_init($url);

        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        // $response = curl_exec($ch);

        // if(curl_errno($ch)) {
        //     echo 'Erro na requisição cURL: ' . curl_error($ch);
        //     return  abort(404, 'Error na API');
        // }

        // curl_close($ch);

        // $lista = json_decode($response);
        // dd($lista);

        $professores = Professor::all();
        
        foreach($professores as $prof) {
            $prof->link = strtolower(str_replace('.', '.', str_replace(' ', '-', $prof->nome)));
        }

        return view('system.listaProfessores', ['professores' => $professores]);
    }



   
}
