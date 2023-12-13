<!-- chama 'template' de dentro da pasta 'templates' -->
@extends('templates.template')

@section('content')
  <h1 class="text-center">Cadastrar</h1>

  <div class="col-8 m-auto">
    @if(isset($errors) && count($errors)>0)
      <div class="text-center mt-4 mb-4 p-2 alert-danger">
        @foreach($errors->all() as $erro)
          {{$erro}}<br>
        @endforeach
      </div>
    @endif

    <form name="formCad" id="formCad" method="post" action="{{url('books')}}">
      <!-- segurança no envio de dados:   -->
      @csrf
      <input class="form-control mb-3" type="text" name="title" id="title" placeholder="Título:" required>
      <select class="form-control mb-3" name="id_user" id="id_user" required>

        <option value="">Autor</option>
        @foreach($users as $user)
          <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach

      </select>
      <input class="form-control mb-3" type="text" name="pages" id="pages" placeholder="Páginas:" required>
      <input class="form-control mb-3" type="text" name="price" id="price" placeholder="Preço:" required>
      <input class="btn btn-primary" type="submit" value="Cadastrar">
    </form>
  </div> 
@endsection