@extends('backendtemplate')

@section('content')
	<div class= container>
		<h2 class="text-center">Package Details</h2>
		<div class="card text-center mt-5">
		  <div class="card-header">
		    <h3>"{{$package->name}}"</h3>
		  </div>
		  <div class="card-body">
		    <h5 class="card-title">Special title treatment</h5>
		    <p class="card-text">{{$package->services}}</p>
		  </div>
		  <div class="card-footer text-muted">
		    <a href="#" class="btn btn-primary">Go Back</a>
		  </div>
		</div>
	</dev>

@endsection