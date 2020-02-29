@extends('backendtemplate')

@section('content')
	
		<div class="container-fluid mt-3">
			<h2 class="text-center">Item Create Form</h2>
	            <form action="{{route('items.update',$item->id)}}" method="POST" enctype="multipart/form-data" class="mt-4">
	            	@csrf
	            	@method('PUT')
	            	<div class="form-group row">
						<label for="photo" class="col-sm-2 col-form-label"> Photo </label>
				    	
				    	<div class="col-sm-10">
				      		<ul class="nav nav-tabs" id="myTab" role="tablist">
								<li class="nav-item">
							    	<a class="nav-link active" id="oldprofile-tab" data-toggle="tab" href="#oldprofile" role="tab" aria-controls="oldprofile" aria-selected="true"> Old Photo </a>
							  	</li>
							 	<li class="nav-item">
							    	<a class="nav-link" id="newprofile-tab" data-toggle="tab" href="#newprofile" role="tab" aria-controls="newprofile" aria-selected="false"> New photo</a>
							  	</li>
							</ul>

							<div class="tab-content" id="myTabContent">
							  	<div class="tab-pane fade show active" id="oldprofile" role="tabpanel" aria-labelledby="oldprofile-tab">
							  		<img src="{{asset($item->photo)}}" class="img-fluid" style="width: 120px; height: 120px;">
							  		<input type="hidden" name="oldphoto" value="{{$item->photo}}">
							  	</div>

							  	<div class="tab-pane fade" id="newprofile" role="tabpanel" aria-labelledby="newprofile-tab">
							  		<input type="file" name="photo">
							  	</div>
							  	@error('avatar')
								    <div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</div>
				    	</div>
					</div>
	

	            	<div class="form-group row">
						<label for="name" class="col-sm-2 col-form-label"> Name </label>
				    	
				    	<div class="col-sm-10">
				      		<input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter Trainer Name" name="name" value="{{$item->name}}">

				      		@error('name')
							    <div class="alert alert-danger">{{ $message }}</div>
							@enderror
				    	</div>
					</div>

					<div class="form-group row">
						<label for="price" class="col-sm-2 col-form-label"> Price </label>
				    	
				    	<div class="col-sm-10">
				      		<input type="integer" name="price" class="form-control @error('price') is-invalid @enderror" id="price" value="{{$item->price}}">

				      		@error('price')
							    <div class="alert alert-danger">{{ $message }}</div>
							@enderror
		   	    	</div>
					</div>



					<div class="form-group row">
						<label for="duration" class="col-sm-2 col-form-label">  Select Service</label>
				    	
				    	<div class="col-sm-10">
				      		<select name="service" class="form-control">
				    		@foreach($services as $row)
					    		<option value="{{$row->id}}" @if($item->service_id == 
					    			$row->id){{'selected'}} @endif>{{$row->name}}
					    		</option>
				    		@endforeach
				    	</select>
				    	</div>
					</div>

					

					<div class="form-group row">
						<div class="col-sm-2"></div>
					    <div class="col-sm-10">
					      <button type="submit" class="btn btn-primary">
					      	<i class="fa fa-save"></i> Save
					      </button>
					    </div>
					</div>

				</form>

	        </div>

@endsection