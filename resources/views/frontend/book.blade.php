@extends('frontendtemplate')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-7 text-center mx-auto mt-5 pt-4 pt-5">
        	<h2 class="serif mt-5 pt-4">Your Booking</h2>
      	</div>
    </div>
      	<div class="card mt-4 col-lg-12 col-md-12 " id="box" style="border-radius: 20px;">
      		<div class="card-body">
      			@php $i=1; @endphp
	      		<table class="table table-striped table-secondary text-center table-bordered">
	      				<thead class="bg-warning">
	      					<td>No</td>
	      					<td>Item Name</td>
	      					<td>Photo</td>
	      					<td>Price</td>
	      				</thead>
	      			<tbody id="tbody">

      				</tbody>
	      			<tfoot>
		      			<tr>
							<td colspan="3"><h4 class="text-center">Total Price</h4></td>
							<td id="total"></td>
						</tr>
					</tfoot>
	      		</table>
      		</div>

      	<div class="">
      		<form>
      			<div class="form-row mx-1 mb-3">
			    <div class="form-group col-md-3">
			      <label for="inputCity">Wedding Start Time</label>
			      <input type="time" class="form-control" id="inputCity">
			    </div>
			    <div class="form-group col-md-3">
			      <label for="inputCity">Wedding End Time</label>
			      <input type="time" class="form-control" id="inputCity">
			    </div>
			    <div class="form-group col-md-3">
			      <label for="inputCity">Wedding Date</label>
			      <input type="date" class="form-control" id="inputCity">
			    </div>
			    <div class="form-group col-md-3">
			      <label for="inputZip"></label>
			      <a class="btn btn-warning btn-block mt-3" type="submit">Send</a>
			    </div>
			  </div>
			</form>
		</div>
      	</div>


</div>




@endsection

@section('script')
	
@endsection