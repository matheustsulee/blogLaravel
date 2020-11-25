@extends('page.site.layout')

@section('title', 'Noticias')
@section('box')

<img style="margin-top:-2em;" src="{{ url("storage/{$capa->path_interna}") }}"  class="img-fluid topo_noticia" alt="Responsive image" width="100%">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css')}}">
@stop

@section('content')


<section class="mt-3 mb-5 container">
    <b> {{ $post->category->name }}</b> |
    <strong>{{ date('d-m-Y H:i', strtotime($post->created_at)) }}</strong>
    <div class="row mt-3">
        <div class="col-12 col-lg-8 col-md-8">
            <h1>{{ $post->title }}</h1>
                @foreach($post->imgs as $imagem)
                    <img src='{{ url("storage/{$imagem->path}") }}' width="100%" class="mt-3 mb-5 mat_noticia">
                @endforeach
                <div class="text-justify">
                    {!! $post->content !!}
                </div>



        </div>
        <div class="col-12 col-lg-4 col-md-4 ">
            <div class="row">
                <div class="col-12 col-lg-12 col-md-12 text-center">
                    <div class="bg-danger"><b>VIDEO</b></div>
                    <div class="embed-responsive embed-responsive-16by9">
                        @foreach($post->movies as $movie)
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $movie->link }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 col-lg-12 col-md-12 text-center">
                    <div class="bg-danger"><b>ARQUIVOS</b></div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Ação</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($post->files as $file)
                        <tr>
                            <th scope="row">Arquivo PDF</th>
                            <td>
                                <a href="{{ route('arquivos.show', $file->id) }}" type="button" class="btn btn-outline-info btn-block rounded-0">
                                    Baixar
                                </a>
                            </td>


                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="row justify-content-start ">

    <div class="col-md-7"></div>
                    <div class="col-md-4 ">
                        <b>Compartilhe!</b>
                            <div class="row">
                                <div class="col-md-2">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u="><i class="fab fa-facebook-square fa-3x text-primary"></i></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="https://api.whatsapp.com/send?text="><i class="fab fa-whatsapp fa-3x"></i></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="#"><i class="fab fa-wordpress fa-3x text-info"></i></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="#"><i class="fa fa-envelope fa-3x "></i></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="#"><i class="fab fa-skype fa-3x text-primary"></i></a>
                                </div>
                                <div class="col-md-2">
                                    <a href=" https://www.linkedin.com/shareArticle?mini=true&url="><i class="fab fa-linkedin fa-3x text-info"></i></a>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-2">
                                    <a href="#"><i class="fab fa-blogger fa-3x text-warning"></i></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="#"><i class="fab fa-pinterest fa-3x text-danger"></i></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="https://telegram.me/share/url?url=[URL]&text=[TEXTO]"><i class="fab fa-telegram fa-3x text-info"></i></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="https://embed.tumblr.com/share"><i class="fab fa-tumblr-square fa-3x "></i></a>
                                    <script>!function(d,s,id){var js,ajs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://assets.tumblr.com/share-button.js";ajs.parentNode.insertBefore(js,ajs);}}(document, "script", "tumblr-js");</script>
                                </div>
                                <div class="col-md-2">
                                    <a href="#"><i class="fab fa-skype fa-3x text-primary"></i></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="#"><i class="fab fa-vk fa-3x text-info"></i></a>
                                </div>
                            </div>
                    </div>
                </div>
                <br><br>
    <div class="row">
        <div class="col-md-9">
            <h2>Algo a dizer? Aproveite a seção de comentários!</h2>
            <h4>Para escrever um comentário, faça login:</h4>
            <div class="row">
                                <div class="col-md-1">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u="><i class="fab fa-facebook-square fa-3x text-primary"></i></a>
                                </div>
                                <div class="col-md-1">
                                    <a href="#"><i class="fab fa-twitter fa-3x text-primary"></i></a>
                                </div>
                                <div class="col-md-1">
                                    <a href="#"><i class="fab fa-vk fa-3x text-info"></i></a>
                                </div>
                                <div class="col-md-1">
                                    <a href="#"><i class="fab fa-wordpress fa-3x text-info"></i></a>
                                </div>
                                <div class="col-md-1">
                                    <a href="#"><i class="fa fa-envelope fa-3x"></i></a>
                                </div>
            </div>
        </div>
    </div>
    <br><br>
    <div clas="row">
        <div class="col-md-1"></div>
        <div class="col-md-8">
            <textarea class="form-control" rows="" cols=""></textarea>
        </div>
    </div>
</section>


@endsection
