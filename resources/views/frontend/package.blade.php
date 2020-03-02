@extends('frontendtemplate')

@section('content')

<div class="container-fluid">
	<div class="row mt-4">
	<div class="col-md-7 text-center mx-auto mt-5 pt-5">
            <h2 class="serif mt-5 ">Our Packages</h2>
    </div>
	</div>
	<div class="row text-center  pt-3 mx-4">
	@foreach($packages as $row)
		<div class="col-lg-3 col-md-6 col-sm-12">
		<h2 style="color: #B3AFAA;" class="text-center mt-4">{{$row->name}}</h2>
		<img src="{{asset('sb-user/images/logo2.png')}}" class="img-fluid"
            width="250px">
        <p><a href="{{route('detailpackage',$row->id)}}"  class="btn btn-primary mt-3 ">Click Me</a></p>
		</div>

	@endforeach
	</div>
</div>

@endsection