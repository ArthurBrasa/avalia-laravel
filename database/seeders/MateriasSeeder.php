<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MateriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('materias')->insert([
            'name' => 'Princípios da Alquimia',
            'universidade_id' => '1',
            'duracao' => '76',
            'sigla' => 'PA',
            'descricao' => 'Esta matéria oferece uma exploração aprofundada dos fundamentos e práticas da alquimia, uma antiga disciplina que combina elementos de filosofia, ciência e espiritualidade. Ao longo de 76 horas de estudo, os alunos serão introduzidos aos princípios alquímicos, métodos de transmutação e a simbolismo alquímico. O curso abrange a história da alquimia, desde suas raízes antigas até suas influências nas práticas científicas modernas. Os participantes terão a oportunidade de realizar experimentos práticos e explorar as aplicações práticas dos princípios alquímicos em diversas áreas. Este curso é uma jornada fascinante para aqueles interessados na conexão entre ciência, espiritualidade e transformação.'
        ]);

        DB::table('materias')->insert([
            'name' => 'BNHA001 - Prática de Defesa',
            'universidade_id' => '1',
            'duracao' => '180',
            'sigla' => 'BNHA001',
            'descricao' => 'A disciplina "BNHA001 - Prática de Defesa" é projetada para proporcionar aos estudantes uma compreensão abrangente das estratégias e técnicas essenciais para a defesa pessoal. Com uma duração de 180 horas, este curso oferece uma abordagem prática e hands-on para o desenvolvimento de habilidades de autodefesa. Os participantes serão treinados em diversas técnicas, incluindo posturas defensivas, movimentos evasivos e métodos eficazes de resposta a situações de risco. Além disso, o curso aborda conceitos fundamentais de segurança pessoal, promovendo a consciência situacional e a prevenção de ameaças. Se você procura adquirir habilidades práticas de defesa pessoal e promover um ambiente seguro, este curso é uma escolha ideal.'
        ]);

        DB::table('materias')->insert([
            'name' => 'Técnicas Avançadas de Ninjutsu',
            'universidade_id' => 1,
            'duracao' => 180,
            'sigla' => 'TAN',
            'descricao' => 'A disciplina "Técnicas Avançadas de Ninjutsu" oferece uma imersão profunda nas habilidades e estratégias avançadas dessa antiga arte marcial japonesa. Com uma duração de 180 horas, este curso proporciona aos estudantes a oportunidade de aprimorar suas habilidades de ninjutsu, abrangendo técnicas avançadas de combate, estratégias furtivas, e a aplicação prática dos princípios filosóficos do ninjutsu na vida cotidiana. Durante o curso, os participantes explorarão movimentos ágeis, métodos de camuflagem, e táticas de evasão. Se você busca uma jornada desafiadora para a maestria do ninjutsu, este curso é projetado para elevar suas habilidades a um nível avançado.'
        ]);

        DB::table('materias')->insert([
            'name' => 'Técnicas de Combate Saiyajin',
            'universidade_id' => 1,
            'duracao' => 180,
            'sigla' => 'TCS',
            'descricao' => 'A disciplina "Técnicas de Combate Saiyajin" mergulha os estudantes no fascinante mundo das habilidades de combate inspiradas nos lendários guerreiros Saiyajin. Com uma duração de 180 horas, este curso oferece uma experiência intensiva para aqueles que desejam desenvolver habilidades únicas de combate, abrangendo técnicas de luta, controle de energia, e estratégias de batalha características dos guerreiros Saiyajin. Durante o curso, os participantes terão a oportunidade de aprimorar sua força, velocidade e resistência, assim como explorar a aplicação prática dessas habilidades em situações simuladas. Se você aspira a se tornar um mestre das Técnicas de Combate Saiyajin, este curso é a jornada perfeita para desbloquear o poder interior.'
        ]);        

        DB::table('materias')->insert([
            'name' => 'Princípios da Alquimia',
            'universidade_id' => 1,
            'duracao' => 180,
            'sigla' => 'PA',
            'descricao' => 'A disciplina "Princípios da Alquimia" conduz os estudantes a uma jornada fascinante no mundo mágico da alquimia. Com uma duração de 180 horas, este curso oferece uma exploração aprofundada dos fundamentos e práticas dessa antiga disciplina, que combina elementos de filosofia, ciência e espiritualidade. Durante o curso, os participantes serão introduzidos aos princípios alquímicos, métodos de transmutação, e ao simbolismo que permeia essa arte ancestral. A história da alquimia, desde suas raízes antigas até suas influências nas práticas científicas modernas, será cuidadosamente explorada. Os alunos terão a oportunidade única de realizar experimentos práticos, desvendar mistérios alquímicos e compreender as aplicações práticas dos princípios alquímicos em diversas áreas. Se você busca uma experiência enriquecedora e deseja desvendar os segredos ocultos da alquimia, este curso é a escolha ideal para mergulhar nas maravilhas do conhecimento alquímico.'
        ]);
    
        DB::table('materias')->insert([
            'name' => 'Magia da Armadura',
            'universidade_id' => 1,
            'duracao' => 180,
            'sigla' => 'MA',
            'descricao' => 'A disciplina "Magia da Armadura" oferece uma exploração fascinante no mundo mágico da conjuração e encantamento de armaduras. Com uma duração de 180 horas, este curso proporciona uma jornada imersiva no desenvolvimento de habilidades mágicas específicas para a criação e fortalecimento de armaduras encantadas. Durante o curso, os participantes serão guiados pelos princípios fundamentais da magia, aprendendo a aplicar feitiços e encantamentos para conferir propriedades místicas às armaduras. Além disso, serão abordados conceitos de proteção mágica, simbolismo e técnicas avançadas para maximizar a eficácia das armaduras encantadas. Se você deseja dominar as artes mágicas ligadas à defesa e explorar o potencial da "Magia da Armadura", este curso é sua porta de entrada para um reino encantado de conhecimento e habilidades místicas.'
        ]);
        

        
        
        
        
        
        
        
    }
}
