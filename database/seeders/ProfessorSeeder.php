<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


use App\Models\professor;

class professorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // Adicione manualmente os professors relacionados a anime
       DB::table('professors')->insert([
        'nome' => 'Kakashi Hatake',
        'departamento' => 'Ninjutsu',
        'professor' => 'Sensei Kakashi',
        'email' => 'kakashi@example.com',
        'idade' => 30,
        'materia' => 'Técnicas Avançadas de Ninjutsu',
        'universidade' => 'Konoha Ninja University',
        'observacoes' => 'Membro do Time 7, conhecido por seu Sharingan.',
        'usuario_id' => 1,
        'img' => 'imgs/svg/Proffs/1.svg'
    ]);

    DB::table('professors')->insert([
        'nome' => 'Izumi Curtis',
        'departamento' => 'Alquimia',
        'professor' => 'prof. Izumi',
        'email' => 'izumi@example.com',
        'idade' => 40,
        'materia' => 'Princípios da Alquimia',
        'universidade' => 'Central University of Alchemy',
        'observacoes' => 'Alquimista habilidosa, mentora de Edward e Alphonse Elric.',
        'usuario_id' => 1,
        'img' => 'imgs/svg/Proffs/2.svg'
    ]);

    DB::table('professors')->insert([
        'nome' => 'Vegeta',
        'departamento' => 'Ciências de Combate',
        'professor' => 'prof. Vegeta',
        'email' => 'vegeta@example.com',
        'idade' => 35,
        'materia' => 'Técnicas de Combate Saiyajin',
        'universidade' => 'Escola de Treinamento de Guerreiros',
        'observacoes' => 'Príncipe dos Saiyajins, especialista em técnicas de combate.',
        'usuario_id' => 1,
        'img' => 'imgs/svg/Proffs/3.svg'
    ]);

    DB::table('professors')->insert([
        'nome' => 'Erza Scarlet',
        'departamento' => 'Magia',
        'professor' => 'prof. Erza',
        'email' => 'erza@example.com',
        'idade' => 28,
        'materia' => 'Magia da Armadura',
        'universidade' => 'Fairy Tail Magic Academy',
        'observacoes' => 'Titã da Fairy Tail, especialista em Magia da Armadura.',
        'usuario_id' => 1,
        'img' => 'imgs/svg/Proffs/4.svg'
    ]);

    DB::table('professors')->insert([
        'nome' => 'All Might',
        'departamento' => 'Heróis',
        'professor' => 'prof. All Might',
        'email' => 'allmight@example.com',
        'idade' => 50,
        'materia' => 'Treinamento de Heróis',
        'universidade' => 'UA High School',
        'observacoes' => 'Símbolo da Paz, mentor de Deku em My Hero Academia.',
        'usuario_id' => 1,
        'img' => 'imgs/svg/Proffs/5.svg'
    ]);

    DB::table('professors')->insert([
        'nome' => 'Riza Hawkeye',
        'departamento' => 'Militar',
        'professor' => 'prof. Riza',
        'email' => 'riza@example.com',
        'idade' => 32,
        'materia' => 'Estratégias Militares',
        'universidade' => 'Academia Militar de Amestris',
        'observacoes' => 'Atiradora habilidosa, braço direito de Roy Mustang em Fullmetal Alchemist.',
        'usuario_id' => 1,
        'img' => 'imgs/svg/Proffs/6.svg'
    ]);

    DB::table('professors')->insert([
        'nome' => 'Kisuke Urahara',
        'departamento' => 'Shinigami',
        'professor' => 'prof. Urahara',
        'email' => 'urahara@example.com',
        'idade' => 45,
        'materia' => 'Artes Shinigami',
        'universidade' => 'Academia Shinigami',
        'observacoes' => 'Ex-capitão da Soul Society, dono da loja Urahara Shop em Bleach.',
        'usuario_id' => 1,
        'img' => 'imgs/svg/Proffs/7.svg'
    ]);

    DB::table('professors')->insert([
        'nome' => 'Nami',
        'departamento' => 'Navegação',
        'professor' => 'prof. Nami',
        'email' => 'nami@example.com',
        'idade' => 25,
        'materia' => 'Navegação e Meteorologia',
        'universidade' => 'Escola de Navegação de Baratie',
        'observacoes' => 'Navegadora dos Chapéus de Palha em One Piece.',
        'usuario_id' => 1,
        'img' => 'imgs/svg/Proffs/8.svg'
    ]);

    DB::table('professors')->insert([
        'nome' => 'Sasuke Uchiha',
        'departamento' => 'Artes Marciais',
        'professor' => 'prof. Sasuke',
        'email' => 'sasuke@example.com',
        'idade' => 28,
        'materia' => 'Técnicas de Jutsu e Taijutsu',
        'universidade' => 'Academia Ninja de Konoha',
        'observacoes' => 'Último membro do clã Uchiha, especialista em técnicas avançadas.',
        'usuario_id' => 1,
        'img' => 'imgs/svg/Proffs/9.svg'
    ]);

    DB::table('professors')->insert([
        'nome' => 'Bulma Brief',
        'departamento' => 'Ciência',
        'professor' => 'prof. Bulma',
        'email' => 'bulma@example.com',
        'idade' => 35,
        'materia' => 'Ciência e Tecnologia',
        'universidade' => 'Capsule Corp University',
        'observacoes' => 'Cientista brilhante, inventora de Dragon Radar em Dragon Ball.',
        'usuario_id' => 1,
        'img' => 'imgs/svg/Proffs/10.svg'
    ]);
    }
}
