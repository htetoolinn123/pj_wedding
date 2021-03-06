@extends('backendtemplate')

@section('content')
<div class="container-fluid mt-4">

	<h1 class="h3 mb-4 text-gray-800">
	  		<i class="fas fa-list-alt pr-3"></i> 
	  		Item List
	  	</h1>

		<div class=" mb-4">
			<div class="card-header py-3">
	            <div class="row">
					<div class="col-10">
						<h4 class="m-0 font-weight-bold text-primary"> 
			            	 
			            </h4>
					</div>

					<div class="col-2">
						<a href="{{route('items.create')}}" class="btn btn-info btn-block float-right"> 
		            		<i class="fa fa-plus "></i>	Add New 
		            	</a>
					</div>
				</div>
	        </div>


	        <div class="card shadow mb-4">
            
            <div class="card-body">
              <div class="table-responsive">
                <table class=" text-center table table-bordered" id="dataTable" width="100%" cellspacing="0">
                	<thead>
						<tr>
							<td>No</td>
							<td>Name</td>
							<td>Photo</td>
							<td>Price</td>		
							<td>Service</td>
							<td>Action</td>
						</tr>
					</thead>
					<tbody>
					@php $i=1; @endphp
					@foreach($items as $row)
					<tr>
						<td>{{$i++}}</td>
						<td>{{$row->name}}</td>
						<td><img src="{{$row->photo}}" class="img-fluid" style="width: 70px; height: 70px;"></td>
						<td>{{$row->price}}</td>
						<td>{{$row->service->name}}</td>
						<td>
							<form method="POST" action="{{route('items.destroy',$row->id)}}" onsubmit="return confirm('Are you sure?')">
										@csrf
										@method('DELETE')
									<a href="{{route('items.edit',$row->id)}}" class="btn btn-warning">
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
          </div>

</div>
</div>
@endsection