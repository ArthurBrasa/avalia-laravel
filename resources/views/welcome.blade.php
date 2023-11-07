@extends('default_components.main')

@section('content')
      


  <section class="row row-cols-1 row-cols-lg-2 d-flex p-0 m-0 flex-column-reverse flex-md-row">
      <div class="d-flex flex-column justify-content-center">
          <div class="text-center text-xl-start ms-lg-5">
              <h1 class="fw-bold text-white text-center text-lg-end"><span id="element"></span></h1>
              <p class="text-white text-center text-lg-end">Pesquise uma disciplina ou um professor </p>
              
          </div>

          <div class='gap-2 m-0 p-0 m-0 ms-lg-5 text-center text-lg-end'>
              <a href="{{route('diciplinas')}}" class="btn-custom">disciplina</a>
              <a href="{{route('professores')}}" class="btn-custom">Professor</a>
          </div>
      </div>

      <div class="overflow-hidden d-flex align-items-end vh-100">
         
        <img src="imgs/svg/logo.svg" alt="" srcset="" class="headline">
              
      </div>

  </section>

    <!-- Load library from the CDN -->
  <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
  
  <!-- Setup and start animation! -->
  <script>
    // inverter a ordem das frases
    var strings = ['Compartilhe sua experiência com outros alunos! ', 'Veja avaliações de Matérias e Professores!', 'Avalie suas Matérias e Professores ^ ^'];
    var typed = new Typed('#element', {
      strings: ['Compartilhe sua experiência com outros alunos! ', 'Veja avaliações de Matérias e Professores!', 'Avalie suas Matérias e Professores ^ ^'],
      typeSpeed: 50,
      backSpeed: 20,
      backDelay: 2000,
      

      loop: true
    });
  </script>

@endsection