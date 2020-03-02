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
              <p><a href="#" class="btn btn-primary">Contact Me</a></p>
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
          <div class="col-lg-8 col-md-4 col-sm-12 mt-5">
            <p class="p"><span style="font-weight: bolder;">Perfect Wedding Service</span> ကို ၂၀၁၂ ခုနှစ်တွင်စတင်တည်ထောင်ခဲ့ပြီးမင်္ဂလာဆောင်နှင့်ပတ်သတ်သောဝန်ဆောင်မှုလုပ်ငန်းများကို ဆောင်ရွှတ်ပေးလျက်ရှိပါသည်။ customerများရဲ့ စိတ်ကျေနပ်မှုရရှိအောင်အကောင်းဆုံးကြိုးစား၍ဝန်ဆောင်မှုများပေးလျက်ရှိပီး ၊ customer များရဲ့ တန်ဖိုးအရှိဆုံးအမှတ်တရများ နှင့် အိမ်မက်များကို သိမ်းဆည်းထားနိုင်အောင် ကြိုးစားပေးမည်ဖြစ်သည်။</p>
          </div>
        </div>
    </div>

    <hr class="hr">

    <div class="container-fluid">
      <div class="col-md-7 text-center mx-auto mt-5 pt-4">
          <h2 class="serif">Our Blogs</h2>
      </div>
      <div class="row mt-2 ">
          <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="card" style="width: 18rem;">
                <img src="{{asset('sb-user/images/card1.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class=" p card-title">မင်္ဂလာခန်းမအတွက် စရံမချခင်မှာ စုံတွဲလေးတို့ သတိထားရမှာတွေက</p>
                  <p class="card-text">အပြင်ကနေ ထပ်ငှားတာမျိုး လုပ်လို့ မရဘဲ သူတို့ဝန်ဆောင်မှုကိုပဲ ယူရမယ်၊ ဝန်ဆောင်မှုကလည်း ကိုယ်မကြိုက်တာဆိုရင်တော့ ရှောင်တာ...</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="card" style="width: 18rem;">
                <img src="{{asset('sb-user/images/card2.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class=" p card-title">သတို့သမီးလေးတို့ ထိုင်မသိမ်းကို ဘယ်အချိန်လောက်မှ စအပ်မလဲ</p>
                  <p class="card-text">သတို့သမီးလေးတို့ (၃) လလောက် အလိုမှာတော့ ဒီဇိုင်း အသေးစိတ်ကို ဒီဇိုင်နာနဲ့ တိုင်ပင်ပါ။ ဒီဇိုင်နာက (၂) လလောက် အလိုမှ စပြီး ...</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
          </div>
      </div>
    </div>

    <div class="container-fluid">
          <div class="col-md-7 text-center mx-auto mt-5 pt-4">
            <h2 class="serif">Our Photo Studio</h2>
          </div>
      <div class="row mt-2  mx-4">
        <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
            <img src="{{asset('sb-user/images/p1.jpg')}}" class="img-fluid img" width="400px">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
            <img src="{{asset('sb-user/images/p2.jpg')}}" class="img-fluid img" width="400px">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
            <img src="{{asset('sb-user/images/p3.jpg')}}" class="img-fluid img" width="400px">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
            <img src="{{asset('sb-user/images/p4.jpg')}}" class="img-fluid img" width="400px">
        </div>
      </div>

    </div>
    <hr class="hr">



   
@endsection