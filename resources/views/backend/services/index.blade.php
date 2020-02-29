@extends('backendtemplate')

@section('content')
<div class="container-fluid mt-4">

	<h1 class="h3 mb-4 text-gray-800">
	  		<i class="fas fa-list-alt pr-3"></i> 
	  		Service List
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
						<a href="{{route('services.create')}}" class="btn btn-primary btn-block float-right"> 
		            		<i class="fa fa-plus pr-2"></i>	Add New 
		            	</a>
					</div>
				</div>
	        </div>

	<table class="table text-left table-hover table-inverse text-center table-bordered mt-3">
		<thead>
			<tr>
				<th width="200px">No</th>
				<th>Service Name</th>
				<th width="200px">Action</th>
								
			</tr>
		</thead>
		<tbody>
			@php $i=1; @endphp
			@foreach($services as $row)
			<tr>
				<td>{{($i++)}}</td>
				<td>{{($row->name)}}</td>
				<td>
					<form method="POST" action="{{route('services.destroy',$row->id)}}" onsubmit="return confirm('Are you sure?')">
								@csrf
								@method('DELETE')
							<a href="{{route('services.edit',$row->id)}}" class="btn btn-warning">
								<i class="fas fa-edit"></i>
							</a>
							<button class="btn btn-danger">
								<i class="fas fa-trash"></i>
							</button>
							</form>
				</td>
			</tr>
			@endforeach
		</tbody>
		
	</table>
</div>
</div>
@endsection

