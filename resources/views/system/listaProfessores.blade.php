@extends('default_components.main')

@include('default_components.navbar')s

@section('content')

<div class="container">

    {{-- Pesquisa --}}
    <div id="search" class="text-center position-relative my-4">
      <input type="text" class="form-control" placeholder="Digite uma matéria que deseja pesquisar sobre...">
      <!-- <i class="bi bi-search position-relatives"></i> -->
    </div>

    <!-- Filtros -->
    <div class="py-5">
      <ul class="list-group d-flex flex-row justify-content-center">
        <li class="list-group-item"><a href="#" class="text-decoration-none">Acessibilidade</a></li>
        <li class="list-group-item"><a href="#" class="text-decoration-none">Dificuldades</a></li>
        <li class="list-group-item"><a href="#" class="text-decoration-none">Nivel de exigência</a></li>
        <li class="list-group-item"><a href="#" class="text-decoration-none">Organização</a></li>
        <li class="list-group-item"><a href="#" class="text-decoration-none">Ambiente</a></li>
        <li class="list-group-item"><a href="#" class="text-decoration-none">Departamento</a></li>
      </ul>
    </div>
    
  </div>

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

  <!--  -->
  <div class="container-md">
    <div class="album py-5 bg-body-tertiary">
      <h2 class="fw-bold pb-2">Professores</h2>
      <div>
  
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          
          <div class="col">
            <div class="card shadow-sm">
              <img class="p-3" src="imgs/svg/Proffs/all-might.svg" alt="">
              <div class="card-body">
                <p class="card-text">All Might</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary"><a href="{{ route('infoProfessores', ['nome' => 'all-might']) }}">Infos</a></button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">E-mails</button>
                  </div>
                  <small class="text-body-secondary"><img src="Icons/nota.svg" alt=""></small>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col">
            <div class="card shadow-sm">
              <img class="p-3" src="imgs/svg/Proffs/eraser.svg" alt="">
              <div class="card-body">
                <p class="card-text">Eraser Head</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Infos</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">E-mails</button>
                  </div>
                  <small class="text-body-secondary"><img src="Icons/nota.svg" alt=""></small>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm">
              <img class="p-3" src="imgs/svg/Proffs/midnight.svg" alt="">
              <div class="card-body">
                <p class="card-text">Midnight</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary"><a href="{{route('infoProfessores', ['nome' => 'midnight'])}}">Infos</a></button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">E-mails</button>
                  </div>
                  <small class="text-body-secondary"><img src="Icons/nota.svg" alt=""></small>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm">
              <img class="p-3" src="imgs/svg/Proffs/nezu.svg" alt="">
              <div class="card-body">
                <p class="card-text">Nezu</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Infos</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">E-mails</button>
                  </div>
                  <small class="text-body-secondary"><img src="Icons/nota.svg" alt=""></small>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm">
              <img class="p-3" src="imgs/svg/Proffs/all-might.svg" alt="">
              <div class="card-body">
                <p class="card-text">All Might</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Infos</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">E-mails</button>
                  </div>
                  <small class="text-body-secondary"><img src="Icons/nota.svg" alt=""></small>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm">
              <img class="p-3" src="imgs/svg/Proffs/all-might.svg" alt="">
              <div class="card-body">
                <p class="card-text">All Might</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Infos</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">E-mails</button>
                  </div>
                  <small class="text-body-secondary"><img src="Icons/nota.svg" alt=""></small>
                </div>
              </div>
            </div>
          </div>
         

        </div>
      </div>
    </div>
  </div>

    
@endsection