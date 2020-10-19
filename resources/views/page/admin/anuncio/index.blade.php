@extends('layouts.admin')
@section('content')
{{-- ANUNCIO DUPLO --}}
<div class="row">
	<div class="col-12 col-md-4 col-lg-4">
		<form>
			@csrf
			 <div class="form-group" >
			 	<div class="row">
	   				<select class="form-control" id="select_anuncio" class="formato">
						<option value="">Selecione o Anucio</option>
						<option disabled="" class="formato">--> Topo</option>
						<option value="728x90">728x90</option>
						<option>468x60-1</option>
						<option>468x60-2</option>
						<option disabled="">--> Lateral</option>
						<option>728x90</option>
						<option>468x60</option>
					</select>
				</div>
				<div class="row mt-4">
	 				<select class="form-control">
						<option>Selecione o Anuncio</option>
						@if($anuncios)
							@foreach($anuncios as $anuncio)
							<option >{{ $anuncio->nome }}</option>
							@endforeach	
						@endif				
					</select>
			</div>		
  		</div>
			
		</form>
	</div>
	<div class="col-12 col-md-8 col-lg-8">
		<div class="row">
			<div class="col-12 col-lg-6 col-md-6 center ">				
					<img src="https://via.placeholder.com/468x60" width="100%" id="468x60-1">				
			</div>
			<div class="col-12 col-lg-6 col-md-6" >				
				<img src="https://via.placeholder.com/468x60/" id="468x60-2"  width="100%">				
			</div>
		</div>
		<div class="row center mt-2">
			<div class="col-12 col-lg-12 col-md-12" >
				<img src=" https://via.placeholder.com/728x90" width="100%" id="728x90">
			</div>
			
		</div>
	</div>
</div>
@endsection
