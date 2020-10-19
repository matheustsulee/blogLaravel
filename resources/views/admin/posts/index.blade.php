@extends('adminlte::page')

@section('title', 'Posts')

@section('content_header')
    <h1>
        Meus Posts
        <a href="{{ route('posts.create') }}" class="btn btn-sm btn-success">Novo Post</a>
    </h1>
@endsection

@section('content')

<div class="card">
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th width="50">ID</th>
                    <th>Título</th>
                    <th width="200">Ações</th>
                </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                 
                    <td>
                    <a href="" target="_blank" class="btn btn-sm btn-success">Ver</a>
                        <a href="{{ route('posts.edit', ['post' => $post->id]) }}" class="btn btn-sm btn-info">Editar</a>
                        
                        <form class="d-inline" method="POST" action="{{ route('posts.destroy', ['post' => $post->id]) }}" onsubmit="return confirm('Tem certeza que deseja excluir?')">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-sm btn-danger">Excluir</button>
                        </form>
                        
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

{{ $posts->links() }}

@endsection