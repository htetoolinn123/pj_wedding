@extends('frontendtemplate')

@section('content')


<style>
	
#banner1{
background-color: #E6E6E0;
width: 100%;
height: 100%; /*  viev full screen*/
background-repeat: no-repeat;
background-position: center center;
background-size: cover;
}

.title{
padding-top:10px;
}


/*
#counter{
	background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url({{asset('sb-user/images/partner/lolo.svg')}});
background-size: cover;
width: 100%;
height: 100%;
background-position: center;
background-attachment: fixed;

} */


</style>

<div style="height: 100px; background-color:#E6E6E0; "></div>

	<div id="banner1">

	<div class="container" id="navtitle">
		<div class="row">
		

			<div class="col-lg-12 col-md-12 col-sm-12 text-center">

				
				<div class="title"><h1 class="mt-5 my-3" style="color:#F9A405">Contact Us</h1></div> </div>

				<div class="col-lg-12 col-md-12 col-sm-12 ">

					<form action="" method="POST">
						@csrf
						<div class="form-row">
							<!-- from div col open -->
							<div class="form-group col-lg-6 col-md-6 col-sm-12 my-4">

								<input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="FullName">

								@error('name')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
								<br>

								<input type="email" class="form-control @error('name') is-invalid @enderror" name="email" placeholder="Email">

								@error('name')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror

								<br>

								<input type="number" class="form-control @error('name') is-invalid @enderror" name="phone" placeholder="Phone">

								@error('name')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror

							</div>



							<div class="col-lg-6 col-md-6 col-sm-12 my-4
							     form-group"  >

								<textarea class="form-control @error('message') is-invalid @enderror" name="message" placeholder="Message" style="height:220px;"></textarea>

								@error('message')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</div>
						 <!--  this is row close -->
                        </div>  

						
							<div class="col-sm-4 col-lg-4 col-md-4 col-xs-4 form-group">
								<button type="submit" class="btn btn-primary ">
								<i class="fas fa-paper-plane pr-3"></i>
									 Send
								</button>
	                    	</div>
					  
					</form>


				</div><!--  end col contact form -->

			</div>
		</div>

	</div>




	

	@endsection
