


@extends('backendtemplate')   

@section('content') 


<div class="container-fluid">
	<div class="row">

		<div class="col-lg-12">


			<div style="float:right;">
				<a href="{{route('service.create')}}" class="btn btn-info">Add New
				</a>
			</div>
		</div>


		<div class="col-lg-12">

			
			<!-- table -->
			<div class="card shadow mb-4">
				<div class="card-header py-3" style="background-color:skyblue;">
					<h4 class="m-0 font-weight-bold text-primary">
						Service Information
					</h4>
				</div>

				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable"
						width="100" cellspacing="0">


						<thead style="color: skyblue;text-align: center;">
							<tr>
								<th>No</th>
								<th>Name</th>
								<th>Action</th>
								
							</tr>
						</thead>


						<tbody style="text-align: center;">

							@php $i=1; @endphp

							@foreach($service as $row)


							<tr>
								<td>{{($i++)}}</td>
								<td>{{($row->name)}}</td>

								

								<td>
									
									
									<a href="{{route('service.edit',$row->id)}}" class="btn btn-warning">
									Edit</a>

									<form method="POST" action="{{route('service.destroy',$row->id)}}"
										onsubmit="return confirm('Are you shour???')">
										@csrf
										@method('DELETE')
										<button type="submit" class="btn btn-danger">
										Delete</button>

									</form>
								</td>
							</tr>
							@endforeach
						</tbody>



						

					</table>
				</div>
			</div>
		</div>

		<!-- table-close -->

	</div>  <!-- columm -->
</div>  <!-- row -->
</div><!-- container-fluid -->




@endsection