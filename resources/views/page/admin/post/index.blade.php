@extends('layouts.admin')
@section('content')
		<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Data</th>
      <th scope="col">Titulo</th>
      <th scope="col">Foto</th>
      <th scope="col">Status</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)
    <tr>
      <th scope="row">{{ $post->id }}</th>
      <th scope="row">{{ $post->date_hour }}</th>
      <td>{{ $post->title }}</td>
      <td width="20%"><img src='{{ url("storage/{$post->img}") }}' width="20%"></td>
      <td class="status">{{ $post->scheduled}}</td>
      <td>
      	<div class="btn-group" role="group" aria-label="Basic example">
		  <button type="button" class="btn btn-secondary">Editar</button>
		  <button type="button" class="btn btn-danger">Deletar</button>		  
		</div>
      </td>
    </tr>
    @endforeach
    {{ $posts->links() }}
  </tbody>
</table>
@endsection

