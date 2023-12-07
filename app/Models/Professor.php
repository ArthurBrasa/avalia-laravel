<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'departamento',
        'professor',
        'email',
        'idade',
        'materia',
        'universidade',
        'observacoes',
        'usuario_id',
        'img',
        'created_at'
    ];

    public static function getProfessorByName($nome)
    {
        // Usando o método where para encontrar um professor com base no nome
        // O método first() retorna apenas o primeiro resultado encontrado
        return self::where('nome', $nome)->first();
    }
}
