@extends('layout')
@section('content')

<section class="container m-5">
<h1> Gerenciar Registros da Remedio</h1>



<form class="row g-3" method="get" action="{{route('gerenciar-remedio')}}">

  <div class="col-auto">
    <label for="staticEmail2" class="visually-hidden">Nome de Paciente:</label>
    <input type="text"  class="form-control-plaintext" id="nome" name="nome" placeholder="Silvio Florentino">
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Pesquisar</button>
  </div>
</form>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nome</th>
      <th scope="col">convenio</th>
      <th scope="col">medicamento</th>
      <th scope="col">dosagem</th>
      <th scope="col">preco</th>
      <th scope="col">Alterar</th>
      <th scope="col">Excluir</th>
    </tr>
  </thead>
  <tbody>
    @foreach($registrosRemedio as $registrosRemedio)
    <tr>
      <th scope="row">{{$registrosRemedio->id}}</th>
      <td>{{$registrosRemedio->nome}}</td>
      <td>{{$registrosRemedio->convenio}}</td>
      <td>{{$registrosRemedio->medicamento}}</td>
      <td>{{$registrosRemedio->dosagem}}</td>
      <td>{{$registrosRemedio->preco}}</td>

      <td> 
        <a href ="{{route('mostrar-remedio-id',$registrosRemedio->id)}}">
            <button type="button" class="btn btn-primary">X</button>
        </a>
      <td> 
            <form method="post" action="{{route('apagar-remedio',$registrosRemedio->id)}}">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger">X</button>
            </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

</section>
@endsection