@extends('layouts.admin')

@section('content')
<section class="container">
    <form method="post" action="{{ route('videos.store')  }}">
        @csrf
        <div class="form-row align-items-center">
            <div class="col-6">
                <div class="form-group">
                    <div class="col-auto">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Título</div>
                            </div>
                            <input type="text" name="title" class="form-control" id="inlineFormInputGroup" placeholder="Título do vídeo">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-auto">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">https://www.youtube.com/watch?v=</div>
                            </div>
                            <input type="text" name="link" class="form-control" id="inlineFormInputGroup" placeholder="Link do Video">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary btn-block mb-2">Postar</button>
                    </div>
                </div>

            </div>

        </div>
    </form>
</section>
    <section class="container">
            <div class="row">
                @foreach($videos as $video)
                <div class=" col-auto ">
                    <div class="p-4">
                        <div class="row">
                            <div class="col-6">
                                <div class="card" style="width: 18rem;">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $video->link}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $video->title }}</h5>
                                    </div>
                                    <form method="post" action="{{ route('videos.destroy', $video->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-primary btn-block btn-danger rounded-0">DELETAR</button>

                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
</section>

@endsection
