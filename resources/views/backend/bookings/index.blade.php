@extends('backendtemplate')

@section('content')
<div class="container-fluid mt-4">

	<h1 class="h3 mb-4 text-gray-800">
	  		<i class="fas fa-list-alt pr-3"></i> 
	  		Booking List
	  	</h1>

		<div class=" mb-4">
			<div class="card-header py-3">
	            <div class="row">
					<div class="col-10">
						<h4 class="m-0 font-weight-bold text-primary"> 
			            	 
			            </h4>
					</div>

					
				</div>
	        </div>

	        <div class="card shadow mb-4">
            
            <div class="card-body">
              <div class="table-responsive">
                <table class=" text-center table table-bordered" id="dataTable" width="100%" cellspacing="0">
                	<thead>
						<tr>
							<th>No</th>
							<th>Package_Name</th>
							<th>User_Name</th>
							
							<th>Total</th>
							<th>Wedding Date</th>

							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					@php $i=1; @endphp
					@foreach($booking as $row)
					<tr>
						<td>{{$i++}}</td>
						<td>{{$row->package->name}}</td>
                        <td>{{$row->user->name}}</td> 
                         
						<td>{{$row->total}}</td>
						<td>{{$row->date}}</td>
						
						 
		
						<td>
							<a href="{{route('bookingdetail',$row->id)}}" class="btn btn-info">
								<i class="fas fa-info"></i>
							</a>
						</td>
						
						
						
						</a>
									
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