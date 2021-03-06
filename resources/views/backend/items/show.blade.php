
@extends('backendtemplate')

@section('content')
	<div class="container-fluid">
		<h1 class="h3 mb-4 text-gray-800">
	  		<i class="fas fa-info-circle pr-3"></i> 
	  		Item Details 
	  	</h1>

		<div class=" mb-4">
			<div class="card-header py-3">
	            <div class="row">
					<div class="col-10">
						<h4 class="m-0 font-weight-bold text-primary"> 
			            	List 
			            </h4>
					</div>

					<div class="col-2">
						<a href="{{route('items.index')}}" class="btn btn-primary btn-block float-right"> 
		            		<i class="fas fa-backward pr-2"></i>	Back 
		            	</a>
					</div>
				</div>
	        </div>
		<div class="row">
			<div class="col-12">
				<table class="table table-primary  table-bordered text-center">
					@php $i=1; @endphp
				<tr>
					<td>No</td>
					<td>
						Name 	
					</td>
					<td>
						photo	
					</td>
				</tr>
				<tr>
					<td>{{$i++}}</td>
					<td>
						{{$item->name}}
					</td>
					<td>
						<img src="{{$item->photo}}" class="img-fluid" style="width: 100px; height: 100px;">
					</td>
				</table>
				</tr>
			</div>
		</div>
	</div>
	
@endsection

