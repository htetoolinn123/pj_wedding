@extends('backendtemplate')

@section('content')
	
		<div class="container-fluid mt-3">
			<h2 class="text-center">Item Create Form</h2>
	            <form action="{{route('items.store')}}" method="POST" enctype="multipart/form-data" class="mt-4">
	            	@csrf
	            	<div class="form-group row">
						<label for="photo" class="col-sm-2 col-form-label"> Photo </label>
				    	
				    	<div class="col-sm-10">
				      		<input type="file" name="photo" class="form-control-file @error('photo') is-invalid @enderror" id="photo">

				      		@error('photo')
							    <div class="alert alert-danger">{{ $message }}</div>
							@enderror
				    	</div>
					</div>
	

	            	<div class="form-group row">
						<label for="name" class="col-sm-2 col-form-label"> Name </label>
				    	
				    	<div class="col-sm-10">
				      		<input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter Trainer Name" name="name">

				      		@error('name')
							    <div class="alert alert-danger">{{ $message }}</div>
							@enderror
				    	</div>
					</div>

					<div class="form-group row">
						<label for="price" class="col-sm-2 col-form-label"> Price </label>
				    	
				    	<div class="col-sm-10">
				      		<input type="integer" name="price" class="form-control @error('price') is-invalid @enderror" id="price">

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
					    		<option value="{{$row->id}}">{{$row->name}}
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