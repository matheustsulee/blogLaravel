@extends('layouts.admin')
@section('content')
<form method="post" action="{{ route('categoria.store') }}">
	 @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Novo Editorial</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" placeholder="Enter email">
    
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection