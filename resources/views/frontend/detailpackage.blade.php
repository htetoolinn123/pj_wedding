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
    		<i style="font-size: 20px; font" class="fas fa-arrow-alt-circle-left text-dark"><span style="font-weight: bold;">&nbsp;Back</span></i>
    	</a>
    </div>
  </div>
 
  <div class="col-lg-9 col-md-9 col-sm-12" style="background-color: #FAF7F1; height: auto; border-radius: 20px;">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane showitem fade show active" id="p{{$i}}" role="tabpanel" aria-labelledby="v-pills-home-tab">

      </div>
    
      
    </div>
  </div>
</div>
	@php $i++; @endphp
	
</div>

</div>

@endsection
@section('script')
	<script type="text/javascript">
		$(document).ready(function(){
			
			$('.detail').click(function(){
				$.ajaxSetup({
				    headers: {
				        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				    }
				});
				var id = $(this).data('id');
				var pname = $(this).data('name');
				var pid=$(this).data('pid');
				//alert(pid);
				$.post("/itembyservice",{id:id,pname:pname,pid:pid},function(res){
					var html="";
					var paginate=res.links;
					$.each(res,function(i,v){
						var rphoto = v.photo;
						var rname = v.name
						var rid = v.id;
						var rprice = v.price;
						html +=`
							<div  class=" text-center col-lg-4 col-md-6 col-sm-12 my-3 card1  row ml-1 mt-5 mb-5">
								<div id="box" class=" card  ml-4" style="width: 18rem;">
								  <img src="${v.photo}" class="card-img-top" class="img-fluid" hight="100px" alt="...">
								  <div class="card-body">
								    <h5 class="card-title">${v.name}</h5>
								    <p class="card-text">Price :&nbsp;${v.price}&nbsp; MMK</p>
								  </div>
								  <div class="card-footer text-muted">
								    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="${v.id}" data-id=${v.id}>
  										<label class="form-check-label" for="inlineCheckbox1">BOOk</label>
								  </div>
								</div>
							</div>`;
      			

					})
					$('.showitem').html(html);
					

				})

			})
		})


	</script>
@endsection