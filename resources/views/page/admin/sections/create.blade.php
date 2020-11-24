@extends('layouts.admin')

@section('content')
    <form action="{{ route('secao.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Nome da Seçao</label>
            <input type="text" name="name" class="form-control" id="secao" aria-describedby="emailHelp" placeholder="Informe o nome da seçao">
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
@endsection
