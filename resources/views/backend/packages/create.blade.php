@extends('backendtemplate')

@section('content')

<div class="container-fluid mt-3">
	<h2 class="text-center">Package Create Form</h2>
	<form action="{{route('packages.store')}}" method="POST">
		@csrf
	  <div class="form-row">
	    <div class="form-group col-md-6">
	      <label for="inputEmail4">Package Name</label>
	      <input type="text" class="form-control @error('name') is-invalid @enderror" id="inputEmail4" name="name">

	    @error('name')
		    <div class="alert alert-danger">{{ $message }}</div>
		@enderror
	    </div>
	    <div class="form-group col-md-6">
	      <label for="inputPassword4">Chosse Service</label>
		    <select name="service" class="form-control @error('service') is-invalid @enderror">
	    		@foreach($services as $row)
		    		<option value="{{$row->id}}">{{$row->name}}
		    		</option>
	    		@endforeach
			</select>
		@error('service')
		    <div class="alert alert-danger">{{ $message }}</div>
		@enderror

	    </div>
	  </div>
	  <div class="form-group row">
            <div class="col-sm-2"></div>
              <div class="col-sm-12">
                <button type="submit" class="btn btn-primary btn-block">
                  <i class="fa fa-save"></i> Save
                </button>
              </div>
        </div>
	</form>
 </div>

@endsection