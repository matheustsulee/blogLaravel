@extends('page.site.layout')

@section('title', 'Noticias')
@section('box')

<img style="margin-top:-2em;" src="{{ asset('assets/img/planalto.jpg') }}"  class="img-fluid topo_noticia" alt="Responsive image" width="100%">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css')}}">
@stop

@section('content')
    

<section class="mt-3 mb-5 container">
    <b> {{ $post->category->name }}</b> | 
    <strong>{{ date('d-m-Y H:i', strtotime($post->created_at)) }}</strong>
    <div class="row mt-3">
        <div class="col-12 col-lg-8 col-md-8">
            <h1>{{ $post->title }}</h1>

                <img src='{{ url("storage/{$post->img}") }}' width="100%" class="mt-3 mb-5 mat_noticia">
                <div class="text-justify">
                    {!! $post->content !!}
                </div>
                
            
        </div>
    </div>
</section>


@endsection