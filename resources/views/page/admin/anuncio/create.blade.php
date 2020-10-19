@extends('layouts.admin')
@section('content')

<section>
	<div class="row">
		<div class="col-12 col-lg-8 col-md-8">
			<form enctype="multipart/form-data" action="{{ route('anuncio.novo.store') }}" method="post">
				@csrf 
			  <div class="form-group">
			    <label for="exampleInputEmail1">Nome do anúncio</label>
			    <input type="text" class="form-control" id="nome_anuncio" name="nome" aria-describedby="emailHelp" placeholder="Informe uma identificação">
			  </div>
			  <div class="form-group">
			  	<div class="row">
			  		<div class="col-12 col-md-6 col-lg-6">
			  			<label for="exampleInputEmail1">Tamanho do anúncio</label>
			  			<select class="form-control" id="tamanho_anuncio" name="tamanho">
				    		<option value="">Formato do anúncio</option>
				    		<option value="728x90">728x90px</option>
				    		<option value="468x60">468x60px</option>
			    		</select>
			  		</div>
			  		<div class="col-12 col-md-6 col-lg-6">
			  			<label for="exampleInputEmail1">Imagem do anúncio</label>
			  			<input type="file" name="img" class="form-control">
			  		</div>
			  	</div>
			   <div class="form-group">
			    <label for="exampleInputEmail1">Link</label>
			    <input type="text" class="form-control" id="link_anuncio" aria-describedby="emailHelp" placeholder="Informe o link  do anúncio" name="link">
			  </div>

			  </div>
			
			  <button type="submit" class="btn btn-primary">CADASTRAR</button>
			</form>
		</div>
	</div>
</section>
@endsection
