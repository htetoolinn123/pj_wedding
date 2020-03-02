   
@extends('backendtemplate')   

@section('content') 

  <div class="container-fluid mt-3">
          <h2 class="text-center">Service Edit Form</h2>
          <form action="{{route('services.update',$service->id)}}" method="POST" enctype="multipart/form-data" class="mt-4">
                @csrf
                @method('PUT')
          <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label"> Name </label>
              
              <div class="col-sm-10">
              
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter Service Name" name="name" value="{{$service->name}}">

              @error('name')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-2"></div>
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">
                  <i class="fa fa-save"></i> Update
                </button>
              </div>
          </div>

        </form>

  </div>


 @endsection