<div class="col">
  <div class="card shadow-sm" style="max-width: 380px">
      {{-- <img class="p-3" src='{{ asset("imgs/svg/Proffs/$img.svg", true) }}' alt=""> --}}
      <img class="p-3" src='{{ asset($img) }}' alt="">
      <div class="card-body">
          <p class="card-text">{{ $nome ?? "Unkown" }}</p>
          <div class="d-flex justify-content-between align-items-center">
              <div class="w-100">
                  <button type="button" class="btn btn-sm btn-outline-secondary w-100">
                    <a href="{{ route('infoProfessores', ['id' => $id]) }}" class="nav-link">infos</a>
                  </button>
                  {{-- <button type="button" class="btn btn-sm btn-outline-secondary">E-mails</button> --}}
              </div>
              <small class="text-body-secondary">
                  <img width="50px" src="imgs/svg/Icons/nota.svg" alt="">
              </small>
          </div>
      </div>
  </div>
</div>

