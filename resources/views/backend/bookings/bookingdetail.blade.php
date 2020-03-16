@extends('backendtemplate')

@section('content')
<div class="container-fluid mt-4">
	<h1 class="h3 mb-4 text-gray-800">
  		<i class="fas fa-list-alt pr-3"></i> 
  		Booking Details List
  	</h1>
  	<div>
  		
	    <div class="card shadow">
	    	<div class="card-body mx-3">
	    		<div class="row">
	    			<div class="col-lg-6 col-md-6 col-sm-12">
			    		<table class="table table-borderless" style="border-radius: 10px;">
		              		<tr>
		              			<td>Customer Name</td>
		              			<td>:&nbsp;&nbsp;{{$book->user->name}}</td>
		              		</tr>
		              		<tr>
		              			<td>Customer Email</td>
		              			<td>:&nbsp;&nbsp;{{$book->user->email}}</td>
		              		</tr>
		              		<tr>
		              			<td>Weeding Start Time</td>
		              			<td>:&nbsp;&nbsp;{{$book->start_time}}&nbsp;AM</td>
		              		</tr>
		              		<tr>
		              			<td>Wedding End Time</td>
		              			<td>:&nbsp;&nbsp;{{$book->end_time}}&nbsp;PM</td>
		              		</tr>
		              		<tr>
		              			<td>Wedding Date</td>
		              			<td>:&nbsp;&nbsp;{{$book->date}}</td>
		              		</tr>
		              		<tr>
	              			<td>Customer Notes</td>
	              			<td>:&nbsp;&nbsp;{{$book->notes}}.</td>
	              		</tr>
				        </table>
				    </div>
				    <div class="col-lg-6 col-md-6 col-sm-12 text-center">
				    	<img src="{{asset('sb-user/images/logo8.png')}}" class="img-fluid mt-3"
	        			width="220px">
				    </div>
				</div>
				<div class="row mt-4">
					<table class="table text-left">
                	<thead >
						<tr>
							<th>No</th>
							<th>Service Name</th>
							<th>Item</th>
							<th>Item Price</th>
							
						</tr>
					</thead>
					<tbody>
					@php $i=1; @endphp
					@foreach($booking as $row)
					<tr>
						<td>{{$i++}}</td>
                        <td>{{$row->item->service->name}}</td> 
                        <td>{{$row->item->name}}</td> 
                        <td>{{$row->item->price}}&nbsp;MMK</td>  
					</tr>
					@endforeach
					</tbody>
                 	<tfoot>
                 		<tr>
                 			<th colspan="3" class="text-center">Total</th>
                 			<td>{{$book->total}}&nbsp;MMK</td>
                 		</tr>
                 	</tfoot>
                </table>
				</div>
				<div class=" py-3">
	            <div class="row">
					<div class="col-10">
					
					</div>
					<div class="col-2">
						<a href="{{route('bookings')}}" class="btn btn-info btn-block float-right"> 
		            		<i class="fas fa-backward pr-2"></i>	Back 
		            	</a>
					</div>
					
				</div>
		    </div>
	    	</div>
	    </div>
  	</div>
</div>
@endsection