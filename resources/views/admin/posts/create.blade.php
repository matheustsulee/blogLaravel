@extends('adminlte::page')

@section('title', 'Novo Post')

@section('content_header')
<h1>Novo Post</h1>
@endsection

@section('content')

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        <h5><i class="icon fas fa-ban"></i>Ocorreu um erro.</h5>

        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="card">
    <div class="card-body">
        <form action="{{route('posts.store')}}" method="POST" class="form-horizontal">
            @csrf
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Título</label>
                <div class="col-sm-10">
                    <input type="text" name="title" value="{{old('title')}}" class="form-control @error('title') is-invalid @enderror" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Corpo</label>
                <div class="col-sm-10">
                    <textarea name="body" class="form-control bodyfield">{{old('body')}}</textarea>

                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <input type="submit" value="Criar" class="btn btn-success" />
                </div>
            </div>

        </form>
    </div>
    </div>

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>
<script>

tinymce.init({
    selector:'textarea.bodyfield',
    height:300,
    menubar: 'view',
    plugins:['link', 'table', 'image', 'autoresize', 'lists', 'code'],
    toolbar:'undo redo | code | preview | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | table | link image | bullist numlist',
    content_css:[
        '{{asset('assets/css/content.css')}}'
    ],
    images_upload_url:'{{route('imageupload')}}',
    images_upload_credentials:true,
    convert_urls:false
});

</script>

@endsection