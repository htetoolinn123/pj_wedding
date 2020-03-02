@extends('frontendtemplate')

@section('content')


<style>
	
 #banner1{background: linear-gradient(to bottom,rgba(218,165,146,.4)0, rgba(218,165,146,.6)100%),url({{asset('storage/partner/partner12.jpg')}});
             width: 100%;
             height: 90vh; /*  viev full screen*/
             background-repeat: no-repeat;
             background-position: center center;
             background-size: cover;}


</style>


<div id="banner1">
<div class="container" id="navtitle">
   <div class="row">

   	    <div class="col-10">
   	          		
   	         <h1 class=" text-white">LOST HIGHWAYS</h1>

   		   <div class="col-lg-8 col-md-8 col-sm-8" style="letter-spacing: 0.1em;margin-top: 70px;">
        	 <p class="text-white">These are the key frames,clothing and accessories every rider needs.Go the distance and discover new levels of endurance along the way.</p>

             <div class="my-5"><a href="product.html" id="contactbtn">Read More</a> 
             </div>


   		   </div>

   	    </div>
   </div>
</div>

</div>


@endsection
