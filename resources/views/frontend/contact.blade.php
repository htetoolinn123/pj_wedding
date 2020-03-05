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




	 <div class="container">

        <div class="row pt-3" >
           
            
            <div class="col-md-7 text-center mx-auto mt-3 pt-4">
              <h2 class="serif">Now,Join us</h2>
           </div> 
        </div>

        <div class="row contact-info pt-5">

          <div class="col-lg-4 col-md-4 col-sm-12 text-center mt-3" style="letter-spacing: 0.1em;">
            <div class="contact-address">
              <i class="fas fa-map-marker-alt mt-3" style="font-size:40px;"></i>
              <h3 class="pt-4">Address</h3>
              <address><a href="https://www.google.com/maps/place/640+7th+St,+Yangon/@16.8619128,96.1091906,17z/data=!3m1!4b1!4m5!3m4!1s0x30c194fde6ea9327:0x68243b6e09d65f0e!8m2!3d16.8619077!4d96.1113847"><p class="pt-2">No(640) 7-th Street,Mayangone Township, Yangon ,Myanmar(Burmese)</p></a></address>
            </div>
          </div>



          <div class="col-lg-4 col-md-4 col-sm-12 text-center mt-3" style="letter-spacing: 0.1em;">
            <div class="contact-phone">
              <i class="fas fa-phone-volume mt-3" style="font-size:40px;"></i>
              <h3 class="pt-4">Phone</h3>
              <p class="pt-3">+959 797 731 911</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-12 text-center mt-3"
         >
            <div class="contact-email mt-3">
            	<i class="far fa-envelope" style="font-size:40px;"></i>
             
              <h3 class="pt-4">Email</h3>
              <p class="pt-2"><a href="https://www.google.com/search?sxsrf=ALeKk036aw7wj30cqLbgyNpV7h5adB5QAA%3A1583297487297&ei=zzNfXqXhEcfez7sP0YicmAc&q=gmail&oq=gmail&gs_l=psy-ab.3..0i71l8.0.0..6326...0.2..0.0.0.......0......gws-wiz.AbDsovkdiZ4&ved=0ahUKEwjlhLfigoDoAhVH73MBHVEEB3MQ4dUDCAs&uact=5">perfectweddingwedding@gmail.com</a></p>
            </div>
          </div>

        </div>

      </div>




	

	@endsection
