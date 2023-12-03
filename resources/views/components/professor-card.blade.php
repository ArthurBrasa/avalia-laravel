<!-- resources/views/components/professor-card.blade.php -->
<div class="col">
    <div class="card shadow-sm">
      <img class="p-3" src="{{$img}}" alt="">
      <div class="card-body">
        <p class="card-text">{{$nome}}</p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-secondary"><a href={{route('infoMaterias', ['nome' => $link])}}>infos</a></button>
            <button type="button" class="btn btn-sm btn-outline-secondary">E-mails</button>
          </div>
          <small class="text-body-secondary"><img src="img/svg/icons/nota.svg" alt=""></small>
        </div>
      </div>
    </div>
  </div>
