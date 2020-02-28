   
@extends('backendtemplate')   

@section('content') 

<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      
    
      <div style="float: right;">
      <a href="{{route('service.index')}}" class="btn btn-warning"><h3>Go=>back=></h3>
         </a>
       </div>
    </div>

    <div class="col-lg-12">

      <div class="card-header py-3" style="background-color:skyblue;">
      <h4 class="m-0 font-weight-bold text-primary">
        Edit Service
      </h4>
        </div>





      <form method="POST" action="{{route('service.update',$service->id)}}" enctype="multipart/form-data">

        @csrf

          @method('PUT')

        <!--comment  -->

              <div class="form-group">

              <label for="exampleInputEmail1">Name</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" name="name" value="{{$service->name}}">

              @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
              @enderror
         
              </div>


           


               <button type="submit" class="btn btn-primary">Save</button>
            </form>



    </div>
  </div>
</div>

 @endsection