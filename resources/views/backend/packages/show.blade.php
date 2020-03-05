@extends('backendtemplate')

@section('content')
	<div class= "container" >
		<h2 class="text-center">Package Details</h2>
		<div class="card text-center mt-5 w-100">
		  <div class="card-header">
		    <h3>"{{$package->name}}"</h3>
		  </div>
		  <div class="card-body">
		  
		    
		    @php 
		    $services=$package->services;
		   
		    @endphp
		    <ul>
		    @foreach($services as $key => $value)
		  
		     <li><p style="text-align: left;">{{$value->name}}</p></li>
			
		    @endforeach
			</ul>
		    
		    
		  </div>
		  <div class="card-footer text-muted">
		    <a href="{{route('packages.index')}}" class="btn btn-info">Go Back</a>
		  </div>
		</div>
	</dev>

@endsection