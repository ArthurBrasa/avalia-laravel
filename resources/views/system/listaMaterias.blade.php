@extends('default_components.main')

@section('navbar')
    @include('default_components.navbar')
@endsection

@section('content')

<div class="container">

    {{-- Pesquisa --}}
    <div id="search" class="text-center position-relative my-4">
      <input type="text" class="form-control" placeholder="Digite uma matéria que deseja pesquisar sobre...">
      <!-- <i class="bi bi-search position-relatives"></i> -->
    </div>

    <!-- Filtros -->
    {{-- <div class="py-5">
      <ul class="list-group d-flex flex-row justify-content-center">
        <li class="list-group-item"><a href="#" class="text-decoration-none">Acessibilidade</a></li>
        <li class="list-group-item"><a href="#" class="text-decoration-none">Dificuldades</a></li>
        <li class="list-group-item"><a href="#" class="text-decoration-none">Nivel de exigência</a></li>
        <li class="list-group-item"><a href="#" class="text-decoration-none">Organização</a></li>
        <li class="list-group-item"><a href="#" class="text-decoration-none">Ambiente</a></li>
        <li class="list-group-item"><a href="#" class="text-decoration-none">Departamento</a></li>
      </ul>
    </div> --}}
    

  <!--  -->
  <div class="container  justify-content-center d-flex">
    <div class="card mb-3" style="max-width: 740px;">
      <div class="row g-0">
        <div class="col-md-4 p-4">
          <img src="imgs/svg/img-principal.svg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Prática de Defesa</h5>
            <p class="card-text">Explore uma prática de defesa extraordinária ministrada por um instrutor renomado. Prepare-se para aprimorar suas habilidades de combate e resgate, enquanto desenvolve seu próprio espírito heróico. Uma oportunidade única de se tornar o herói que o mundo precisa.</p>
            <p class="card-text"><small class="text-muted">Pré-requisitos: <span>Sem pré-requisitos</span></small></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container  justify-content-center d-flex">
    <div class="card mb-3" style="max-width: 740px;">
      <div class="row g-0">
        <div class="col-md-4 p-4">
          <img src="imgs/svg/img-principal.svg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Prática de Defesa 2</h5>
            <p class="card-text">Explore uma prática de defesa extraordinária ministrada por um instrutor renomado. Prepare-se para aprimorar suas habilidades de combate e resgate, enquanto desenvolve seu próprio espírito heróico. Uma oportunidade única de se tornar o herói que o mundo precisa.</p>
            <p class="card-text"><small class="text-muted">Pré-requisitos: <span>Sem pré-requisitos</span></small></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--  -->
  <div class="container-md">
    <div class="album py-5 bg-body-tertiary">
      <h2 class="fw-bold pb-2">Matérias</h2>
      <div>
  
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

          <x-card-materia :materia="'Auto Defesa'" :link="'auto-defesa'" :img="'https://i.chzbgr.com/full/6635785216/h6DD408B7/a-man-and-his-waifu'" />
          <x-card-materia :materia="'Judô'" :link="'judo'" :img="'https://img.freepik.com/vetores-premium/criancas-de-desenhos-animados-bonitos-fazendo-alguns-movimentos-basicos-de-artes-marciais-de-karate-e-vestindo-quimono-na-ilustracao_2175-4068.jpg?w=996'" />
          <x-card-materia :materia="'Computação'" :link="'computacao'" :img="'https://cdn.2rscms.com.br/imgcache/2008/1536x/uploads/2008/2020_jessica/capa-ciencia-da-computacao.jpg.webp'" />
          <x-card-materia :materia="'Mapografia'" :link="'mapografia'" :img="'http://2.bp.blogspot.com/-HIRdGNOvlQw/TZCvBGsnQRI/AAAAAAAABJY/PO8VfVHHbEU/s320/full0018.jpg'" />
          <x-card-materia :materia="'Literatura'" :link="'literatura'" :img="'https://www.bienaldolivrojf.com.br/wp-content/uploads/2023/06/Fotos-livros-brasileiros-diversidade-historia.webp'" />

        </div>
      </div>
    </div>
  </div>

    
@endsection