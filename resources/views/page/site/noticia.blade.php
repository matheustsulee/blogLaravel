@extends('page.site.layout')

@section('title', 'TITULO DE TESTE')
@section('box')
<img style="margin-top:-2em;" src="assets/img/planalto.jpg"  class="img-fluid topo_noticia" alt="Responsive image" width="100%">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css')}}">
@stop

@section('content')

{{ $post }}
@endsection