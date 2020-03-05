@extends('frontendtemplate')

@section('content')


<div class="container">
	<div class="col-md-7 text-center mx-auto mt-5 pt-5">
            <h2 style="color: #B3AFAA;" class="serif mt-5 ">{{$package->name}}</h2>
            <img src="{{asset('sb-user/images/logo2.png')}}" class="img-fluid"
            width="250px">
    </div>
    @php 
	$services=$package->services;   
	@endphp

	@php
	$i=1;
	@endphp

<div class="container " align="center">
<div class="row mt-5 mb-5 ">

  <div class="col-lg-3 col-md-3 col-sm-12">
  	@foreach($services as $key => $value)
    <div class=" dd nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class=" nav-link active detail" data-id="{{$value->id}}" data-name="{{$value->name}}" data-pid="{{$package->name}}" id="v-pills-home-tab" data-toggle="pill" href="#p{{$i}}" role="tab" aria-controls="v-pills-home" aria-selected="true">{{$value->name}}</a>
      
    </div>
     @endforeach
    <div  class="mt-5 pt-5" >
    	<a class="btn btn-primary" href="{{route('package')}}">
    		<i style="font-size: 20px; font" class="fas fa-arrow-alt-circle-left text-dark"><span style="font-weight: bold;">&nbsp;BACK</span></i>
    	</a>
    </div>
  </div>
 
  <div class="col-lg-9 col-md-9 col-sm-12" style="background-color: #FAF7F1; height: auto; border-radius: 20px;">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane showitem fade show active" id="p{{$i}}" role="tabpanel" aria-labelledby="v-pills-home-tab">
      	<div class="">
      		<h2 class="text-center serif mt-5" >Please Choice Our Service</h2>
      		<img src="{{asset('sb-user/images/logo3.png')}}" class="mt-3 img-fluid" width="400px;">
      	</div>
      </div>
    
      
    </div>
  </div>
</div>
	@php $i++; @endphp
	
</div>

</div>

@endsection
@section('script')
@endsection