 @extends('layouts.admin')
@section('content')

<div class="row">
  <div class="col-12 col-lg-8 col-md-8">
    <form action="{{ route('postagem.store') }}" method="POST" enctype= "multipart/form-data">
       @csrf
      <div class="form-group">
        <label for="exampleFormControlInput1">Título</label>

        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Título da matéria" name="title">
      </div>

      <div class="form-group">
        <label for="exampleFormControlInput1">Subtítulo</label>
        <input type="text" maxlength="80" class="form-control" id="exampleFormControlInput1" placeholder="Subtítulo da matéria" name="subtitle">
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Matéria</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content"></textarea>
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Foto Principal</label>
        <input type="file" class="form-control" name="imagem[]" id="imagem" multiple>
      </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Leitura Extra</label>
            <input type="file" class="form-control" name="pdf[]" id="pdf" multiple>
        </div>
        <div class="form-group">
            <div class="form-group">
                <div class="col-auto">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">https://www.youtube.com/watch?v=</div>
                        </div>
                        <input type="text" name="link_movie" class="form-control" id="inlineFormInputGroup" placeholder="Link do Video">
                    </div>
                </div>
            </div>
        </div>

      <div class="form-group">
        <div class="row">
          <div class="col-12 col-md-7 col-lg-7">
            <label for="exampleFormControlInput1">Seção</label>
              <select class="form-control" name="section_id">
                  <option value="">Informe a seção</option>
                  @foreach($sections as $section)
                      <option value="{{ $section->id }}">{{ $section->name }}</option>
                  @endforeach
              </select>
          </div>
          <div class="col-12 col-md-5 col-lg-5">
             <label for="exampleFormControlInput1">Editoria</label>
            <select class="form-control" name="category_id" required="">
              <option value="">Informa a editoria</option>
              @foreach($categorias as $categoria)
              <option value="{{ $categoria['id'] }}">{{ $categoria['name'] }}</option>
              @endforeach
            </select>

          </div>
        </div>


      </div>

      <button type="submit" class="btn btn-lg btn-block btn-success">CADASTRAR</button>
    </form>
  </div>
</div>
<script src="https://cdn.ckeditor.com/4.15.0/full/ckeditor.js"></script>
<script  type="text/javascript" src="{{ asset('assets/js/ckEditor.js') }}" ></script>
@endsection
