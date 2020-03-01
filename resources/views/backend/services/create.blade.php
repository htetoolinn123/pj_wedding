   
@extends('backendtemplate')   

@section('content') 

  <div class="container-fluid mt-3">
          <h2 class="text-center">Service Create Form</h2>
          <form action="{{route('services.store')}}" method="POST" enctype="multipart/form-data" class="mt-4">
                @csrf
          <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label"> Name </label>
              
              <div class="col-sm-10">
              
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter Service Name" name="name">

                  @error('name')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
              </div>
          </div>
          <div class="form-group row">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">
                  <i class="fa fa-save"></i> Save
                </button>
              </div>
          </div>


   </form>
 </div>



 @endsection