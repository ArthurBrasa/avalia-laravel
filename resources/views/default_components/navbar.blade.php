<header class="nav-animation fixed-top">
    <nav class="navbar navbar-expand-lg px-5 bg-navbar" aria-label="Third navbar example">
        <div class="container-fluid">
          <a class="navbar-brand logo fs-3 fw-bold text-primary" href="#">Avalia UnB</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    
          <div class="collapse navbar-collapse" id="navbarsExample03">
            <ul class="navbar-nav m-auto mb-2 mb-sm-0 fs-6 gap-3">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{route('home')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Departamento</a>
              </li>
              <li class="nav-item">
                <a class="nav-link "  href="#" aria-disabled="true">Avaliações</a>
              </li>
              <li class="nav-item">
                <a class="nav-link "  href="#" aria-disabled="true">Sobre Nós</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn bg-success"  href="{{ route('login') }}" aria-disabled="true">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn bg-success "  href="{{ route('register') }}" aria-disabled="true">Registrar</a>
              </li>
            </ul>
          </div >

        </div>
      </nav>
  </header>