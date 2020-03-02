@extends('frontendtemplate')

@section('content')


<style>
	
	#banner1{background: linear-gradient(to bottom,rgba(218,165,146,.4)0, rgba(218,165,146,.6)100%),url({{asset('sb-user/images/partner/lolo.svg')}});
width: 100%;
height: 100%; /*  viev full screen*/
background-repeat: no-repeat;
background-position: center center;
background-size: cover;
}

.text{padding-top:30px;
}

.title{padding-top:10px;}



  #counter{
    	     background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url({{asset('sb-user/images/partner/lolo.svg')}});
              background-size: cover;
               width: 100%;
      	     height: 100%;
              background-position: center;
              background-attachment: fixed;
            
                      } 

  .pro {letter-spacing: 0.05em;
        padding-top: 10px;
        font-weight: bold;
        text-align: center;}

</style>
<div style="padding-top:100px;"></div>

<div id="banner1">
	<div class="container" id="navtitle">
		<div class="row">

			<div class="col-lg-12 col-md-12 col-sm-12 text-center">

				<div class="text"><h4 style="color:#F9A405;">If Any Query</h4></div>
				<div class="title"><h1 style="color: white;">Contact Us</h1></div> </div>

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



							<div class="col-lg-6 col-md-6 col-sm-12 my-4"  >

								<textarea class="form-control @error('message') is-invalid @enderror" name="message" placeholder="Message" style="height:220px;"></textarea>

								@error('message')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</div>
						</div>   <!--  this is row close -->


						<div class="form-group row" style="text-align: center;">
							<div class="col-sm-3 col-lg-2 col-md2">
								<button type="submit" class="btn btn-primary btn-block">
									<i class="fa fa-save"></i> Save
								</button>
							</div>
						</div>

					</form>


				</div><!--  end col contact form -->

			</div>
		</div>

	</div>


<div id="counter">
  <div class="container p-5">
     <div class="row text-dark text-center">
          			

    <div class="col-lg-4 col-md-6 col-sm-12 my-3">
      <div class="con">
             <div class="a img-fluid display-none">
               <img src="{{asset('sb-user/images/partner/m0.jpg')}}" style="border-radius: 100%; width: 60%; padding-top: 10px" />
               </div>
            

	            <div class="pro"><h5>Wai Yan Tun</h5>
	              <p>Senior Business Manager<br>
	             	Phone:09666965524<br>
	             	Email:waiyuntun@gmail.com
	             </p>
	              <a href="https://www.facebook.com/douple.j.9">Fackbook</a>
	            </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12 my-3">
      <div class="con">
             <div class="a img-fluid display-none">
               <img src="{{asset('sb-user/images/partner/m1.jpg')}}" style="border-radius: 100%; width: 60%; padding-top: 10px" />
               </div>
            

	            <div class="pro"><h5>Kay Zin Soe</h5>
	              <p>Senior Business Manager<br>
	             	Phone:09666965524<br>
	             	Email:waiyuntun@gmail.com
	             </p>
	              <a href="https://www.facebook.com/k.kayzinsoe">Fackbook</a>
	            </div>
      </div>
    </div>


    <div class="col-lg-4 col-md-6 col-sm-12 my-3">
      <div class="con">
             <div class="a img-fluid display-none">
               <img src="{{asset('sb-user/images/partner/m2.jpg')}}" style="border-radius: 100%; width: 60%; padding-top: 10px" />
               </div>
            

	            <div class="pro"><h5>Htet Oo Linn</h5>
	              <p>Senior Business Manager<br>
	             	Phone:09666965524<br>
	             	Email:waiyuntun@gmail.com
	             </p>
	              <a href="https://www.facebook.com/profile.php?id=100008519700457">Fackbook</a>
	            </div>
      </div>
    </div>

       </div>
   </div>
</div>

 

	@endsection
