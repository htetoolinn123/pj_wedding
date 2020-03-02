@extends('frontendtemplate')

@section('content')


<div class="container">
	<div class="col-md-7 text-center mx-auto mt-5 pt-5">
            <h2 class="serif mt-5 ">{{$package->name}}</h2>
    </div>
	<div class="row mt-4">
		@php 
		    $services=$package->services;
		   
		@endphp
		@php $i=1; @endphp
		
		@foreach($services as $key => $value)
		<div class="accordion" id="accordionExample">
		  <div class="card my-3 mx-2">
		    <div class="card-header" id="headingOne">
		      <h2 class="mb-0">
		        <button class="btn btn-link detail" data-id="{{$value->id}}" type="button" data-toggle="collapse" data-target="#collapse{{$i}}" aria-expanded="true" aria-controls="collapseOne">
		          {{$value->name}}
		        </button>
		      </h2>
		    </div>

	    <div id="collapse{{$i}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
	      <div class="card-body showitem">
	      </div>
	    </div>
	  	</div>

		</div>

@php $i++; @endphp
		@endforeach
	</div>
</div>

@endsection
@section('script')
	<script type="text/javascript">
		$(document).ready(function(){
			$('.detail').click(function(){
				var id = $(this).data('id');
				$.get("/getitem/"+id,function(res){
					var html="";
					$.each(res,function(i,v){
						var rname = v.name;
						var rid = v.id;
						html +=`
						<input class="form-check-input" type="checkbox" value="${v.id}" data-id="${v.id}">
						  <label class="form-check-label" >
						    ${v.name}
						  </label>`;
					})
					$('.showitem').html(html);
				})

			})
		})


	</script>
@endsection