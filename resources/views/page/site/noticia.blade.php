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
                <img src='{{ $imagem->path }}' width="100%" class="mt-3 mb-5 mat_noticia">
            @endforeach
                <div class="text-justify">
                    {!! $post->content !!}
                </div>


        </div>
        <div class="col-12 col-lg-4 col-md-4 ">
            <div class="row">
                <div class="col-12 col-lg-12 col-md-12 text-center">
                    <div class="bg-danger"><b>VIDEO</b></div>
                    dwqhdwqdqod
                </div>
            </div>
            <div class="row">
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
                            <th scope="row">{{ $file->assunto }}</th>
                            <td>
                                <button type="button" class="btn btn-outline-info btn-block rounded-0">
                                    Baixar
                                </button>
                            </td>


                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
</section>


@endsection
