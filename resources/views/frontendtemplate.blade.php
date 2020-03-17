<!doctype html>
<html lang="en">

  <head>
    <title>Wedding Service</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta  name="csrf-token" content="{{csrf_token() }}">

    <link href="https://fonts.googleapis.com/css?family=Muli:400,700|Hepta+Slab:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('sb-user/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('sb-user/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('sb-user/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('sb-user/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('sb-user/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('sb-user/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('sb-user/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('sb-user/css/aos.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('sb-user/fontawesome-free/css/all.min.css')}}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('sb-user/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('sb-user/style.css')}}">
  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container-fluid">
          <div class="row align-items-center position-relative">

            <div class="col-3 ">
              <div class="site-logo navbar-brand">
                <a href="index.html" class="font-weight-bold">
                  <img src="{{asset('sb-user/images/logo.png')}}" class="img-fluid" width="70px">PERFECT
                </a>
              </div>
            </div>

            <div class="col-9 col-xs-9 text-right">
              

              <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

              

              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                    
                  <li><a href="{{route('main')}}" class="nav-link ">Home</a></li>
                  <li><a href="{{route('package')}}" class="nav-link dd2">Packages</a></li>
                  <li><a href="{{route('photography')}}" class="nav-link">Photography</a></li>
                  <li><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
                  <li>
                    <a href="{{route('book')}}" class="nav-link">
                      <i class="fas fa-shopping-cart"></i>
                      <span id="booking" class="badge badge-pill badge-light badge-notify bookingcart">
                      </span>
                      Book
                    </a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="{{route('blog')}}">Blog</a>
                      <a class="dropdown-item" href="{{route('about')}}">About</a>
                      <a class="dropdown-item" href="{{route('faq')}}">Faqs</a>
                    </div>
                     
                  </li>
                  @role('Admin')
                  <li><a href="{{route('dashboard')}}" class="nav-link ">Admin Managemnet</a></li>
                  @endrole

                            @guest            
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

                </ul>
              </nav>
             </div>

            
          </div>
        </div>

      </header>

    @yield('content')

    <footer class="modal-footer mt-5 pt-4" style="background-color: gray;">
      <div class="container">



        <div class="container-fluid">
          <div class="row ">

      <div class="col-lg-12">
        

        
      

          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.68694262748!2d96.1720107141201!3d16.84187968840766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c19316863d2c15%3A0x2b17a1a8536c1ebe!2sAroma%20Zulu%20Wedding%20One%20Stop%20Service%20Center!5e0!3m2!1sen!2smm!4v1583300333908!5m2!1sen!2smm" width="300" height="125" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
         
     


       
            <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
              <p class="text-white" style=""><i class="fas fa-map-marker-alt pr-2" ></i> No(64),Mayangone Township, Yangon</p>
              <p class="text-white" style=""><i class="fas fa-phone-square-alt pr-2"></i> +959 797 731 911</p>
              <p class="text-white" style=""><i class="fas fa-envelope pr-2"></i> perfectweddingservice@gmail.com</p>
            </div>
        
     

            

         
              <div class="col-lg-4 col-md-12 col-sm-12 mt-3">

             <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
              <ul class="nav ">
                <li class="nav-item">
                  <a class="nav-link active" href="{{route('main')}}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="{{route('package')}}">Package</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="{{route('contact')}}">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="{{route('about')}}">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="{{route('photography')}}">Photography</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('faq')}}">Faqs</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('blog')}}">Blog</a>
                </li>   
              </ul>
            </div>
          </div>



              <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 text-dark">
                <a href=""><i class="fab fa-facebook-square fa-2x p-2 text-white"></i></a>
                <a href=""><i class="fab fa-twitter-square fa-2x p-2 text-white"></i></a>
                <a href=""><i class="fab fa-instagram fa-2x p-2 text-white"></i></a>
                <a href=""><i class="fab fa-google-plus-square fa-2x p-2 text-white"></i></a>
              </div>

            </div>

            </div>
            
       


            



              </div> <!--   row-end -->
     <hr>


     <div class="row text-center pt-3">
          <div class="col-md-12 col-lg-12 col-sm-12">        
            <p class="text-dark">
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> create  <i class="icon-heart text-danger" aria-hidden="true"></i> by Perfect (Myanmar IT Students)
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>                
          </div>
        </div>




          </div>  <!-- col-end -->

          </div>

         </div>   
        </div>
       
        


      </div>
    </footer>

    </div>

    <script src="{{asset('sb-user/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('sb-user/js/jquery-migrate-3.0.0.js')}}"></script>
    <script src="{{asset('sb-user/js/popper.min.js')}}"></script>
    <script src="{{asset('sb-user/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('sb-user/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('sb-user/js/jquery.sticky.js')}}"></script>
    <script src="{{asset('sb-user/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('sb-user/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('sb-user/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('sb-user/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('sb-user/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('sb-user/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('sb-user/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('sb-user/js/aos.js')}}"></script>

    <script src="{{asset('sb-user/js/main.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
    
    @yield('script')

  </body>

</html>

