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
	      					<td>Action</td>

	      				</thead>
	      			<tbody id="tbody">

      				</tbody>
	      			<tfoot>
		      			<tr>
							<td colspan="3"><h4 class="text-center">Total Price</h4></td>
							<td id="total"></td>
							<td>Action</td>
						</tr>
					</tfoot>
	      		</table>
      		</div>

      	<div id="formbody">
      			<div class="form-row mx-1 mb-3">
			    <div class="form-group col-md-4">
			      <label for="inputCity">Wedding Start Time</label>
			      <input type="time" value="" id="st" class="form-control" id="inputCity">
			    </div>
			    <div class="form-group col-md-4">
			      <label for="inputCity">Wedding End Time</label>
			      <input type="time" value="" id="et" class="form-control" id="inputCity">
			    </div>
			    <div class="form-group col-md-4">
			      <label for="inputCity">Wedding Date</label>
			      <input type="date" value="" id="wd" class="form-control" id="inputCity">
			    </div>
			    <div class="form-group col-md-8">
			      <label for="inputCity"></label>
			      <input type="text" value="" id="note" class="form-control" id="inputCity">
			    </div>
			    <div class="form-group col-md-4">
			      <label for=""></label>
			      @if(Auth::check())
			      <button class="btn btn-warning btn-block mt-2 sendd" type="submit">Send</button>
			  		@else
			  		<a href="/login"><button class="btn btn-danger btn-block mt-2 sendd" type="submit">You Need To Login!</button></a>
			  		@endif
			    </div>
			  </div>
		</div>
      	</div>


</div>




@endsection

@section('script')
	
@endsection