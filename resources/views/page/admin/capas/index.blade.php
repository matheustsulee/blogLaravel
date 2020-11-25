@extends('adminlte::page')
@section('content')

    <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
            @if(!empty($home->path_home))
            <img src="{{ url("storage/{$home->path_home}") }}" alt="" width="100%">
            @endif
                <form action="{{ route('capa.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="file" name="capa_home">
                        <div class="input-group-append">
                            <button type="submit" class="input-group-text" id="basic-addon2">ENVIAR</button>
                        </div>
                    </div>
                </form>
        </div>
        <div class="col-12 col-md-6 col-lg-6">
            @if(!empty($interna->path_interna))
                <img src="{{ url("storage/{$interna->path_interna}") }}" alt="" width="100%">
            @endif
                <form action="{{ route('capa.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="input-group mb-3">
                    <input type="file" name="capa_interna">
                    <div class="input-group-append">
                        <button type="submit" class="input-group-text" id="basic-addon2">ENVIAR</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
