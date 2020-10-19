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
        <label for="exampleFormControlTextarea1">Foto</label>
        <input type="file" class="form-control" name="imagem" id="imagem">
      </div>

      <div class="form-group">
        <div class="row">
          <div class="col-12 col-md-7 col-lg-7">
            <label for="exampleFormControlInput1">Tags</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Separedo por vírgula" name="tag">
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
         <div class="form-group">
          <div class="row">
            <div class="col-8">
                <label for="exampleFormControlInput1">Data Pulbicação</label>
            </div>
             <div class="col-4" align="right">
                 <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="checado" id="agendar" name="chekbox">
                  <label class="form-check-label" for="defaultCheck1">
                    AGENDAR
                  </label>
                </div>
            </div>
          </div>
        
       
        <input type="datetime-local" class="form-control" placeholder="Subtítulo da matéria" name="date_hour" id="data_hora">
      </div>
      <button type="submit" class="btn btn-lg btn-block btn-success">CADASTRAR</button>
    </form> 
  </div>
</div>
<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
<script src="{{ asset('assets/js/ckEditor.js') }}"></script>
@endsection