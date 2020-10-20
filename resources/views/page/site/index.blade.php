@extends('page.site.layout')

@section('title', 'TITULO DE TESTE')
@section('box')
<img style="margin-top:-2em;" src="assets/img/box.png" class="img-fluid" alt="Responsive image" width="100%">
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
                            {{ date('d-m-Y H:i', strtotime($posts[$i]->created_at)) }}
                        </small>
                <h6 class="mt-3 mb-3">{{ $posts[$i]->subtitle }}.</h6>

                 <div class="col-12 col-lg-12 col-md-12 p-0">
                    <img src='{{ url("storage/{$posts[$i]->img}") }}' width="100%" class="ultimas_noticias">
                    <a type="button" class="btn btn-outline-dark rounded-0 btn-block mt-2" href="{{ $posts[$i]->link }}">LER +</a>
                    
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
                            {{ date('d-m-Y H:i', strtotime($posts[$i]->created_at)) }}
                        </small>
                        <h6 class="mt-3 mb-3">{{ $posts[$i]->subtitle }}</h6>
                        <button class="btn btn-outline-dark rounded-0 btn-block">LER</button>
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
            <div class="col-md-4 col-lg-4 col-4 border-left ">
                <h4 class="mb-3">Este aqui é um titulo de uma matéria recém postada</h4>
                <small> Política | 200 palavras | 16 de outubro e 2020</small>
                <h6 class="mt-3 mb-3">Arthur do Val - Mamãe Falei tem 2%; demais candidatos têm 1% cada um. Antônio Carlos não pontuou. Levantamento foi feito entre 13 e 15 de outubro.</h6>
                <div class="row">
                    <div class=" col-12 col-md-6 col-lg-6">
                        <button class="btn btn-outline-dark rounded-0 btn-block">LER</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-4 border-left ">
                <h4 class="mb-3">Este aqui é um titulo de uma matéria recém postada</h4>
                <small> Política | 200 palavras | 16 de outubro e 2020</small>
                <h6 class="mt-3 mb-3">Arthur do Val - Mamãe Falei tem 2%; demais candidatos têm 1% cada um. Antônio Carlos não pontuou. Levantamento foi feito entre 13 e 15 de outubro.</h6>
                <div class="row">
                    <div class=" col-12 col-md-6 col-lg-6">
                        <button class="btn btn-outline-dark rounded-0 btn-block">LER</button>
                    </div>
                </div>
            </div>
             <div class="col-md-4 col-lg-4 col-4 border-left ">
                <h4 class="mb-3">Este aqui é um titulo de uma matéria recém postada</h4>
                <small> Política | 200 palavras | 16 de outubro e 2020</small>
                <h6 class="mt-3 mb-3">Arthur do Val - Mamãe Falei tem 2%; demais candidatos têm 1% cada um. Antônio Carlos não pontuou. Levantamento foi feito entre 13 e 15 de outubro.</h6>
                <div class="row">
                    <div class=" col-12 col-md-6 col-lg-6">
                        <button class="btn btn-outline-dark rounded-0 btn-block">LER</button>
                    </div>
                </div>
            </div>
        </div>
</section>

<hr>

<section class="container">
    <div class="row">
        <div class="col-12 col-lg-6 col-md-6 ">
            <img src="{{ asset('assets/img/teste.jpg') }}" width="100%" class="img_semtitulo">
        </div>
        <div class="col-12 col-lg-6 col-md-6">
             <h4 class="mb-3">Este aqui é um titulo de uma matéria recém postada</h4>
                <small> Política | 200 palavras | 16 de outubro e 2020</small>
                <h6 class="mt-3 mb-3">Arthur do Val - Mamãe Falei tem 2%; demais candidatos têm 1% cada um. Antônio Carlos não pontuou. Levantamento foi feito entre 13 e 15 de outubro.</h6>
                <div class="row">
                    <div class=" col-12 col-md-6 col-lg-6">
                        <button class="btn btn-outline-dark rounded-0 btn-block">LER</button>
                    </div>
                </div>
        </div>
    </div>
</section>

@endsection