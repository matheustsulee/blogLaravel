@extends('page.site.layout')

@section('title', 'Nação Incógnita')
@section('box')
<img style="margin-top:-2em;" src="{{ url("storage/$capa->path_home")  }}" class="img-fluid img_topo_home" alt="Responsive image" width="100%">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css')}}">
@stop

@section('content')


<section class="container">
    <h2 align="center" class="mb-5">Publicações mais recentes</h2>
        <div class="row">

            @for($i = 0; $i < 3; $i++)
            <div class="col-md-4 col-lg-4 col-12 border-left">
                <h4 class="mb-3">{{ $posts[$i]->title }}</h4>
                        <small> {{ $posts[$i]->category->name }} |
                            {{ date('d-m-Y H:i', strtotime($posts[$i]->created_at)) }} |
                           <strong><i> Por: {{ $posts[$i]->user->name }}</i></strong>
                        </small>
                <h6 class="mt-3 mb-3">{{ $posts[$i]->subtitle }}.</h6>

                 <div class="col-12 col-lg-12 col-md-12 p-0">
                    <img src='{{ url("storage/{$posts[$i]->img}") }}' width="100%" class="ultimas_noticias">
                    <a type="button" class="btn btn-outline-dark rounded-0 btn-block mt-2" href="noticia/{{ $posts[$i]->link }}">LER +</a>

                </div>
            </div>
            @endfor


        </div>
</section>

    <hr />

    <section class="container">
    <h2 align="center" class="mb-5">Informes</h2>
        <div class="row">
            @for($i = 3; $i < 5; $i++)
            <div class="col-md-6 col-lg-6 col-12 ">
                <h4 class="mb-3">{{ $posts[$i]->title }}</h4>
                <div class="row">
                    <div class="col-7">
                        <small> {{ $posts[$i]->category->name }} |
                            {{ date('d-m-Y H:i', strtotime($posts[$i]->created_at)) }} |
                           <strong><i> Por: {{ $posts[$i]->user->name }}</i></strong>
                        </small>
                        <h6 class="mt-3 mb-3">{{ $posts[$i]->subtitle }}</h6>
                         <a type="button" class="btn btn-outline-dark rounded-0 btn-block mt-2" href="noticia/{{ $posts[$i]->link }}">LER +</a>
                    </div>
                    <div class="col-5">
                        <img class="informes" src='{{ url("storage/{$posts[$i]->img}") }}' width="100%">
                    </div>
                </div>
            </div>
            @endfor

        </div>
</section>
<hr>
 <section class="container">
    <h2 align="center" class="mb-5">Publicações mais lidas</h2>
        <div class="row">
            @for($i=5; $i<8; $i++)
            <div class="col-md-4 col-lg-4 col-4 border-left ">
                <h4 class="mb-3">{{ $posts[$i]->title }}</h4>
                <small> {{ $posts[$i]->category->name }} |
                            {{ date('d-m-Y H:i', strtotime($posts[$i]->created_at)) }} |
                     <strong><i> Por: {{ $posts[$i]->user->name }}</i></strong>
                </small>
                <h6 class="mt-3 mb-3">{{ $posts[$i]->subtitle }}</h6>
                <div class="row">
                    <div class=" col-12 col-md-6 col-lg-6">
                         <a type="button" class="btn btn-outline-dark rounded-0 btn-block mt-2" href="noticia/{{ $posts[$i]->link }}">LER +</a>
                    </div>
                </div>
            </div>
            @endfor

        </div>
</section>

<hr>

<section class="container">
    <div class="row">
        <div class="col-12 col-lg-6 col-md-6 ">
            <img src='{{ url("storage/{$posts[5]->img}") }}' width="100%" class="img_semtitulo">
        </div>
        <div class="col-12 col-lg-6 col-md-6">
             <h4 class="mb-3">{{ $posts[5]->title }}</h4>
                <small>
                    <small> {{ $posts[5]->category->name }} |
                            {{ date('d-m-Y H:i', strtotime($posts[$i]->created_at)) }} |
                     <strong><i> Por: {{ $posts[5]->user->name }}</i></strong>
                </small>
                </small>
                <h6 class="mt-3 mb-3">{{ $posts[5]->subtitle }}</h6>
                <div class="row">
                    <div class=" col-12 col-md-6 col-lg-6">
                        <a type="button" class="btn btn-outline-dark rounded-0 btn-block mt-2" href="noticia/{{ $posts[5]->link }}">LER +</a>
                    </div>
                </div>
        </div>
    </div>
</section>

@endsection
