 @extends('layouts.admin')

@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Postagem / Agendadas</li>
  </ol>
</nav>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Cadastro</th>
      <th scope="col">Titulo</th>
      <th scope="col">Foto</th>
      <th scope="col">Data da publicação</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    @foreach($agendadas as $agendada)
    <tr>
      <th scope="row">{{ $agendada->created_at }}</th>
      <td>{{ $agendada->title }}</td>
      <td><img src='' width="30%">{{ url("storage/{$agendada->img}") }}</td>
      <td>{{ $agendada->date_hour }}</td>
      <td>
        <div class="btn-group" role="group" aria-label="Basic example">
          <button type="button" class="btn btn-secondary">Editar</button>
          <button type="button" class="btn btn-success">Ver</button> 
          <button type="button" class="btn btn-danger">Deletar</button>         
        </div>
      </td>
    </tr>
   @endforeach
  </tbody>
</table>
@endsection
