<!doctype html>
<html lang="en">

  <head>
    <title>Capture &mdash; Website Template by Colorlib</title>
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

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3 ">
              <div class="site-logo navbar-brand">
                <a href="index.html" class="font-weight-bold">
                  <img src="{{asset('sb-user/images/logo.png')}}" class="img-fluid" width="70px">PERFECT
                </a>
              </div>
            </div>

            <div class="col-9  text-right">
              

              <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

              

              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li><a href="{{route('main')}}" class="nav-link">Home</a></li>
                  <li><a href="{{route('package')}}" class="nav-link">Packages</a></li>
                  <li><a href="{{route('photography')}}" class="nav-link">Photography</a></li>
                  <li><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
                
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{route('blog')}}">Blog</a>
                        <a class="dropdown-item" href="{{route('about')}}">About</a>
                        <a class="dropdown-item" href="{{route('faq')}}">Faqs</a>
                      </div>
                       
                    </li>

                </ul>
              </nav>
             </div>

            
          </div>
        </div>

      </header>

    @yield('content')

    <footer class="modal-footer mt-5">
      <div class="container">
        
        <div class="row text-center">
          <div class="col-md-12">
           
              <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> create  <i class="icon-heart text-danger" aria-hidden="true"></i> by Perfect (Myanmar IT Students)
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            
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
    @yield('script')

  </body>

</html>

