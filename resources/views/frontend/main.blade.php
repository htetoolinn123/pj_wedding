  @extends('frontendtemplate')

  @section('content')

  <div class="ftco-blocks-cover-1">
    <div class="site-section-cover overlay" style="background-image: url('{{asset('sb-user/images/Ring-banner.jpg')}}')">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-7">
            <p>Welcome</p>
            <h1 class="mb-3 text-primary">Perfect Wedding Service</h1>
            <p style="font-weight: bold;">Wedding တစ်ပွဲလုပ်တော့မယ်ဆို ဘာပဲလိုလို ကျွန်တော်တို့ Perfect Wedding Service ကို ဆက်သွယ် မေးမြန်းနိုင်ပါတယ် ခင်ဗျ။</p>
            <p><a href="{{route('contact')}}" class="btn btn-primary">Contact Me</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row ">
      <div class="col-md-7 text-center mx-auto mt-5 pt-4">
        <h2 class="serif">About Us</h2>
      </div>
    </div>
    <div class="row text-center mt-2">
      <div class="col-lg-4 col-md-4 col-sm-12">
        <img src="{{asset('sb-user/images/logo1.png')}}" class="img-fluid"
        width="300px">
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12 mt-5">
        <p class="p"><span style="font-weight: bolder;">Perfect Wedding Service</span> ကို ၂၀၁၂ ခုနှစ်တွင်စတင်တည်ထောင်ခဲ့ပြီးမင်္ဂလာဆောင်နှင့်ပတ်သတ်သောဝန်ဆောင်မှုလုပ်ငန်းများကိုဆောင်ရွှတ်ပေးလျက်ရှိပါသည်။ customerများရဲ့စိတ်ကျေနပ်မှုရရှိအောင်အကောင်းဆုံးကြိုးစား၍ဝန်ဆောင်မှုများပေးလျက်ရှိပီး၊customerများရဲ့တန်ဖိုးအရှိဆုံးအမှတ်တရများ နှင့် အိမ်မက်များကို သိမ်းဆည်းထားနိုင်အောင် ကြိုးစားပေးမည်ဖြစ်သည်။</p>
      </div>
    </div>
  </div>


  <hr class="hr">


      <div class="col-md-7 text-center mx-auto mt-5 pt-4">
        <h2 class="serif">Our Packages</h2>
      </div>


  <div class="container pt-4">
    <div class="row">
      
  <div class="col-lg-3 col-md-6 col-sm-12 my-3"  >
      <div class="card" style="border-radius: 10px; " id="box">
           <div class="a img-fluid display-none">
             <div style="background-color:#F9A405; height: 60px; padding-top: 10px;text-align: center;border-radius: 10px 10px 0px 0px;" ><h2>Diamond</h2>
             </div>
           </div> 

          <div style="letter-spacing: 0.01em; ">
            <ul class="mt-3">
                <li>Food&Drink</li>
               <li>မင်္ဂလာခန်းမ</li>
               <li>ပန်းနှင့် မီးအလှဆင်</li>
               <li>Photography</li>
               <li>Music Band</li>
               <li>မိတ်ကပ်</li>
               <li>အခမ်းအနားမှူး</li>
            </ul>            
          </div>

          <div style="text-align: center; padding: 20px 0px 20px 0px;">
            <a href="{{route('package')}}" class="btn btn-warning ">
              Package<i class="fas fa-arrow-circle-right pl-2"></i></a>
           </div>
      </div>
    </div>


<!------------------Platinum--------------------- -->

    <div class="col-lg-3 col-md-6 col-sm-12 my-3"  >
      <div class="card" style="border-radius: 10px;" id="box">
           <div class="a img-fluid display-none">
             <div style="background-color:#F9A405; height: 60px; padding-top: 10px;text-align: center;border-radius: 10px 10px 0px 0px;" ><h2>Platinum</h2></div>
           </div> 


          <div style="letter-spacing: 0.01em;">
            <ul class="mt-3">
               <li>Food&Drink</li>
               <li>မင်္ဂလာခန်းမ</li>
               <li>ပန်းနှင့် မီးအလှဆင်</li>
               <li>Photography</li>
               <li>မိတ်ကပ်</li>
               <li>အခမ်းအနားမှူး</li>
    
            </ul>            
          </div>

          <div style="text-align: center; padding: 20px 0px 20px 0px;">
            <a href="{{route('package')}}" class="btn btn-warning ">Package<i class="fas fa-arrow-circle-right pl-2"></i></a>
           </div>
      </div>
    </div>

 <!---------------------Gold-------------------------->

  <div class="col-lg-3 col-md-6 col-sm-12 my-3"  >
      <div class="card" style="border-radius: 10px;" id="box">
           <div class="a img-fluid display-none">
             <div style="background-color:#F9A405; height: 60px; padding-top: 10px;text-align: center;border-radius: 10px 10px 0px 0px;" ><h2>Gold</h2></div>
           </div> 

  
          <div style="letter-spacing: 0.01em;">
            <ul class="mt-3">
                <li>Food&Drink</li>
               <li>မင်္ဂလာခန်းမ</li>
               <li>ပန်းနှင့် မီးအလှဆင်</li>
               <li>Photography</li>
               <li>အခမ်းအနားမှူး</li>
            </ul>            
          </div>

          <div style="text-align: center; padding: 20px 0px 20px 0px;">
            <a href="{{route('package')}}" class="btn btn-warning "> Package<i class="fas fa-arrow-circle-right pl-2"></i></a>
           </div>
      </div>
    </div>
  

  <!------------------Silver------------------------>

  <div class="col-lg-3 col-md-6 col-sm-12 my-3" >
      <div class="card" style="border-radius: 10px;" id="box">
           <div class="a img-fluid display-none">
             <div style="background-color:#F9A405; height: 60px; padding-top: 10px;text-align: center;border-radius: 10px 10px 0px 0px;" ><h2>Silver</h2></div>
           </div> 

          <div style="letter-spacing: 0.01em;">
            <ul class="mt-3">
               <li>Food&Drink</li>
               <li>မင်္ဂလာခန်းမ</li>
               <li>ပန်းနှင့် မီးအလှဆင်</li>
               <li>အခမ်းအနားမှူး</li>
            </ul>            
          </div>

          <div style="text-align: center; padding: 20px 0px 20px 0px;">
            <a href="{{route('package')}}" class="btn btn-warning "> Package<i class="fas fa-arrow-circle-right pl-2"></i></a>
           </div>
      </div>
    </div>

    </div>
    
  </div>
  <hr class="hr">
  <div class="container" align="center">
    <div class="col-md-7 text-center mx-auto mt-5 pt-4">
      <h2 class="serif">Our Blogs</h2>
    </div>

    <div class="row mt-4">
      <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
        <div class="card h-100" style="border-radius: 10px;" id="box">
  
          <img src="{{asset('sb-user/images/ring.jpg')}}" class="card-img-top" style="border-radius: 10px 10px 0px 0px;" alt="..."> 
          <div class="card-body">
            <p class=" p card-title">သမိုင်းကြောင်းနက်နဲခဲ့တဲ့လက်ထပ်လက်စွပ်များ</p>
            <p class="card-text">လွန်ခဲ့တဲ့နှစ်ပေါင်း ၅၀၀၀ လောက်က အီဂျစ်နိုင်ငံမှာ    လက်ထပ်လက်စွပ်တွေကို 
            ကျူပင်တွေ သားရေတွေနဲ့...</p>
          </div>
          <div class="card-footer">
            <a href="{{route('blog')}}" class="btn btn-primary">Go to Blog</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
        <div class="card h-100" style="border-radius: 10px;" id="box">
          <img src="{{asset('sb-user/images/couple.jpg')}}" class="card-img-top" style="border-radius: 10px 10px 0px 0px;" alt="...">
          <div class="card-body">
            <p class=" p card-title">မိမိcrushနေသောကောင်မလေးဆီမှအမှတ်ယူနည်းသုံးနည်း</p>
            <p class="card-text">ပထမအချက်ကတော့ ကိုယ်crush နေတဲ့ကောင်မလေး ဆီက...</p>
          </div>
          <div class="card-footer">
            <a href="{{route('blog')}}" class="btn btn-primary">Go to Blog</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
        <div class="card h-100"  style="border-radius: 10px;" id="box">
          <img src="{{asset('sb-user/images/marry.jpg')}}" class="card-img-top" style="border-radius: 10px 10px 0px 0px;" alt="...">
          <div class="card-body">
            <p class=" p card-title">လက်ထပ်ဖို့အကောင်းဆုံးအရွယ်</p>
            <p class="card-text">(၁)သင်ဟာရင့်ကျက်နေပါပြီ (၂)ပျော်ရွှင်မှုတွေကိုတစ်ယောက်တည်းခံစားပြီးပြီ (၃)ကလေးကိုပျိုးထောင်ဖို့...</p>
          </div>
          <div class="card-footer">
            <a href="{{route('blog')}}" class="btn btn-primary">Go to Blog</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
        <div class="card h-100"  style="border-radius: 10px;" id="box">
          <img src="{{asset('sb-user/images/hand.jpg')}}" class="card-img-top" style="border-radius: 10px 10px 0px 0px;" alt="...">
          <div class="card-body">
            <p class=" p card-title">မိန်းကလေးများအတွက်စေ့စပ်အပြီးRelationshipထိန်းသိမ်းနည်းများ</p>
            <p class="card-text">ကျွန်တော်ကယောကျ်ားလေးဖြစ်တဲ့အတွက် Relationship ခိုင်မြဲ...</p>
            
          </div>
          <div class="card-footer">
            <a href="{{route('blog')}}" class="btn btn-primary">Go to Blog</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <hr class="hr">

  <div class="container">
    <div class="col-md-7 text-center mx-auto mt-5 pt-4">
      <h2 class="serif">Our Photo Studio</h2>
    </div>
    <div class="row mt-2  mx-4 pt-4">
      <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
        <img src="{{asset('sb-user/images/p1.jpg')}}" class="img-fluid img" width="100%" id="box">
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
        <img src="{{asset('sb-user/images/p2.jpg')}}" class="img-fluid img" width="100%" id="box">
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
        <img src="{{asset('sb-user/images/p3.jpg')}}" class="img-fluid img" width="100%" id="box">
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
        <img src="{{asset('sb-user/images/p4.jpg')}}" class="img-fluid img" width="100%" id="box">
      </div>
    </div>

  </div>
  <hr class="hr">




  @endsection