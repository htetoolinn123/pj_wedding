@extends('backendtemplate')

@section('content')
<div class="container-fluid mt-4">

	<h1 class="h3 mb-4 text-gray-800">
	  		<i class="fas fa-list-alt pr-3"></i> 
	  		Booking Details List
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
							<th>Booking ID</th>
							<th>Item</th>
						</tr>
					</thead>
					<tbody>
					@php $i=1; @endphp
					<tr>
						<td></td>
                        <td></td> 
                        <td></td> 
					</tr>
					
				</tbody>
                 
                </table>
              </div>
            </div>
          </div>

</div>
</div>
@endsection