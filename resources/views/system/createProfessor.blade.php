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
@if(session('error'))
    <div class="alert alert-success">
        {{ session('error') }}
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
        @if(isset($update))
            
       
            
        <form action="{{route('updateAdicionar', ['id' => $update->id])}}" method="POST">
            @csrf
            @method('PUT')   
            <div class="row form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Nome</label>
                    <input type="text" name="name" class="form-control" value="{{$update->nome}}" id="inputEmail4" placeholder="Nome Professor" >
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">email</label>
                    <input type="email" name="email"  class="form-control" value="{{$update->email}}" id="inputPassword4" placeholder="prof@email.com" >
                </div>
                <div class="form-group col-md-3">
                    <label for="inputPassword4">idade</label>
                    <input type="text" name="idade"  class="form-control" value="{{$update->idade}}" id="inputPassword4" placeholder="Idade" >
                </div>
                <div class="form-group col-md-3">
                    <label for="inputPassword4">materia</label>
                    <input type="text" name="materia"  class="form-control" value="{{$update->materia}}" id="inputPassword4" placeholder="Materia" >
                </div>
                <div class="form-group col-md-3">
                    <label for="inputPassword4">departamento</label>
                    <input type="text" name="departamento" value="{{$update->departamento}}"  class="form-control" id="inputPassword4" placeholder="CIC" >
                </div>
                {{-- <div class="form-group col-md-3">
                    <label for="inputPassword4">Sigla</label>
                    <input type="text" name="sigla" value="{{$update->sigla}}"  class="form-control" id="inputPassword4" placeholder="sigla" >
                </div> --}}
            </div>
            <div class="form-group">
                <label for="inputAddress">img</label>
                <input type="text" name="img" class="form-control" value="{{$update->img}}" id="inputAddress" placeholder="Link para imagem" >
                
            </div>
            <div class="form-group">
                <label for="descricao">observacoes</label>
                <textarea class="form-control" id="w3review"  name="observacoes" placeholder="ObservaÇões..." rows="4" cols="50" >{{$update->observacoes}}</textarea>
            </div>

            
        
                <!-- Restante do formulário aqui -->
                <button class="btn btn-primary mt-2" name="id" type="submit">update</button>

        </form>
      
        @else
        <form method="POST" action="{{route('storeProfessor')}}" enctype="multipart/form-data">
            @csrf
            <div class="row form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Nome</label>
                    <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="Nome do Professor" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">E-mail</label>
                    <input type="email" name="email"  class="form-control" id="inputPassword4" placeholder="prof@email.com" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputPassword4">Idade</label>
                    <input type="text" name="idade"  class="form-control" id="inputPassword4" placeholder="Idade" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputPassword4">Materia</label>
                    <input type="text" name="materia"  class="form-control" id="inputPassword4" placeholder="Materia" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputPassword4">Departamento</label>
                    <input type="text" name="departamento"  class="form-control" id="inputPassword4" placeholder="CIC" required>
                </div>
                {{-- <div class="form-group col-md-3">
                    <label for="inputPassword4">Sigla</label>
                    <input type="text" name="sigla"  class="form-control" id="inputPassword4" placeholder="sigla" required>
                </div> --}}
            </div>
            <div class="form-group">
                <label for="inputAddress">Imagem link</label>
                <input type="text" name="img" class="form-control" id="inputAddress" placeholder="Link para imagem" required>
                
            </div>
            <div class="form-group">
                <label for="descricao">ObservaÇões</label>
                <textarea class="form-control" id="w3review"  name="observacoes" placeholder="ObservaÇões..." rows="4" cols="50" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary my-3">Adicionar</button>
        </form>
        @endif
    </div>

    <section class="container">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#id</th>
                <th scope="col">name</th>
                <th scope="col">E -mail</th>
                <th scope="col">created_at</th>
                <th scope="col">link</th>
              </tr>
            </thead>
                @foreach ($data as $item)
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td><a href="{{route('infoProfessores', ['id' => $item->id])}}">{{$item->nome}}</a></td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->created_at}}</td>
                        <td class="d-flex gap-4">
                            <form action="{{route('updateProfessor', ['id' => $item->id])}}" method="GET">
                                @csrf
                                <button class="btn btn-warning" name="id" type="submit">update</button>
                            </form>
                            
                            <form action="{{route('deleteProfessor', ['id' => $item->id])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" name="id" type="submit">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                <tbody>
              


            </tbody>
          </table>
    </section>
    <!-- Button trigger modal -->

  
  {{-- <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">{{route('infoProfessores', ['id' => $item->id])}}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
            <form action="" method="post">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </form>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>
      </div>
    </div>
  </div> --}}

@endsection