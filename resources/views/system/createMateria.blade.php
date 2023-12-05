@extends('default_components.main')

@section('navbar')
    @extends('default_components.navbar')
@endsection

@section('content')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <div class="container">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{route('storeDiciplinas')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Nome</label>
                    <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="Nome da Matéria" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Horas</label>
                    <input type="text" name="time"  class="form-control" id="inputPassword4" placeholder="Total de Horas" required>
                </div>
                {{-- <div class="form-group col-md-6">
                    <label for="inputPassword4">Departamento</label>
                    <input type="text" name="departamento"  class="form-control" id="inputPassword4" placeholder="Total de Horas" required>
                    <div class="invalid-feedback">
                        Please choose a Departamento.
                    </div>
                </div> --}}
            </div>
            <div class="form-group">
                <label for="inputAddress">Sigla</label>
                <input type="text" name="sigla" class="form-control" id="inputAddress" placeholder="SIGLA" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Imagem link</label>
                <input type="text" name="img" class="form-control" id="inputAddress" placeholder="Link para imagem" required>
                
            </div>
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea class="form-control" id="w3review"  name="descricao" placeholder="Uma descrição bem detalhada da matéria...." rows="4" cols="50" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary my-3">Adicionar</button>
        </form>
    </div>

@endsection