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
<hr class="hr mt-5">

   <div class="container">
     <div class="row">



      <div class="col-lg-12 col-md-12 col-sm-12 my-3"> 

         	<div class="col-md-7 text-center mx-auto">
            <h2 class="serif my-4 ">Our Partners</h2>
            </div>
      </div>


     
     <div class="col-lg-2 col-md-4 col-sm-6 my-3" style="text-align: center;">
         <div class="img-fluid display-none">
           <img src="{{asset('sb-user/images/partner/partner1.jpg')}}"  class="partner" />  
         </div>
     </div>


     <div class="col-lg-2 col-md-4 col-sm-6 my-3" style="text-align: center;">
         <div class="img-fluid display-none">
           <img src="{{asset('sb-user/images/partner/partner2.jpg')}}"  class="partner" />  
         </div>
     </div>


     <div class="col-lg-2 col-md-4 col-sm-6 my-3" style="text-align: center;">
         <div class="img-fluid display-none">
           <img src="{{asset('sb-user/images/partner/partner4.jpg')}}" class="partner" />  
         </div>
     </div>  

     <div class="col-lg-2 col-md-4 col-sm-6 my-3" style="text-align: center;">    
         <div class="a img-fluid display-none">
           <img src="{{asset('sb-user/images/partner/partner8.jpg')}}" class="partner"  />  
         </div>
     </div> 

     <div class="col-lg-2 col-md-4 col-sm-6 my-3" style="text-align: center;">
         <div class="img-fluid display-none">
           <img src="{{asset('sb-user/images/partner/partner3.jpg')}}" class="partner" />  
         </div>
     </div>


     <div class="col-lg-2 col-md-4 col-sm-6 my-3" style="text-align: center;">
         <div class="img-fluid display-none">
           <img src="{{asset('sb-user/images/partner/partner5.jpg')}}" class="partner" />  
         </div>
     </div>

  
     <div class="col-lg-2 col-md-4 col-sm-6 my-3" style="text-align: center;">
         <div class="img-fluid display-none">
           <img src="{{asset('sb-user/images/partner/partner6.jpg')}}"  class="partner" />  
         </div>
     </div>

     <div class="col-lg-2 col-md-4 col-sm-6 my-3" style="text-align: center;">
         <div class="img-fluid display-none">
           <img src="{{asset('sb-user/images/partner/partner9.jpg')}}" class="partner"  />  
         </div>
     </div>


     <div class="col-lg-2 col-md-4 col-sm-6 my-3" style="text-align: center;">
         <div class="img-fluid display-none">
           <img src="{{asset('sb-user/images/partner/partner10.jpg')}}" class="partner" />  
         </div>
     </div>


     

     <div class="col-lg-2 col-md-4 col-sm-6 my-3" style="text-align: center;">
         <div class="img-fluid display-none">
           <img src="{{asset('sb-user/images/partner/partner12.jpg')}}" class="partner"  />  
         </div>
     </div>


     <div class="col-lg-2 col-md-4 col-sm-6 my-3" style="text-align: center;">
         <div class="img-fluid display-none">
           <img src="{{asset('sb-user/images/partner/partner13.jpg')}}" class="partner" />  
         </div>
     </div>


     <div class="col-lg-2 col-md-4 col-sm-12 my-3" style="text-align: center;">
         <div class="img-fluid display-none">
           <img src="{{asset('sb-user/images/partner/partner14.jpg')}}" class="partner"  />  
         </div>
     </div>



 
     </div>  <!--  end col -->
   </div>	


@endsection