<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Weeding</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png"> -->
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('sb-user/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('sb-user/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('sb-user/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('sb-user/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('sb-user/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('sb-user/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('sb-user/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('sb-user/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('sb-user/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('sb-user/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('sb-user/css/style.css')}}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo-img">
                                <a href="index.html">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="index.html">home</a></li>
                                        <li><a href="story.html">Our Story</a></li>
                                        <li><a href="Gallery.html">Gallery</a></li>
                                        <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">blog</a></li>
                                                <li><a href="single-blog.html">single-blog</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="Accommodation.html">Accommodation</a></li>
                                                <li><a href="elements.html">elements</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--/ header-->

    <!-- slider_area -->
    <div class="slider_area ">
        <div class="slider_area_inner slider_bg_1 overlay2">
            <div class="slider_text text-center">
                <div class="text_inner">
                    <img src="img/banner/ornaments.png" alt="">
                    <h4>14 Jan 2020</h4>
                    <h3>Anjelina & Jack <br>
                        Wedding Ceremony</h3>
                    <span>Get Married</span>
                </div>
            </div>
        </div>
    </div>
    <!--/ slider_area -->

   @yield('content')

   <!-- footer_start -->
   <footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="quick_links">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Our Story</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">Accommodation</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right_text">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-12">
                    <p class="copy_right text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </div>=
</footer>
<!-- footer_end -->

    <!-- JS here -->
    <script src="{{asset('sb-user/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{asset('sb-user/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('sb-user/js/popper.min.js')}}"></script>
    <script src="{{asset('sb-user/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('sb-user/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('sb-user/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('sb-user/js/ajax-form.js')}}"></script>
    <script src="{{asset('sb-user/js/waypoints.min.js')}}"></script>
    <script src="{{asset('sb-user/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('sb-user/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('sb-user/js/scrollIt.js')}}"></script>
    <script src="{{asset('sb-user/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('sb-user/js/wow.min.js')}}"></script>
    <script src="{{asset('sb-user/js/nice-select.min.js')}}"></script>
    <script src="{{asset('sb-user/js/gijgo.min.js')}}"></script>
    <script src="{{asset('sb-user/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('sb-user/js/jquery.slicknav.min.js')}}"></script>
    <script src="{{asset('sb-user/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('sb-user/js/plugins.js')}}"></script>

    <!--contact js-->
    <script src="{{asset('sb-user/js/contact.js')}}"></script>
    <script src="{{asset('sb-user/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('sb-user/js/jquery.form.js')}}"></script>
    <script src="{{asset('sb-user/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('sb-user/js/mail-script.js')}}"></script>

    <script src="{{asset('sb-user/js/main.js')}}"></script>

    <script>
        $('#clock').countdown('2020/01/07', function (event) {
            $(this).html(event.strftime(
                '<div class="countdown_wrap d-flex"><div  class="single_countdown"><h3>%D</h3><span>Days</span></div><div class="single_countdown"><h3>%H</h3><span>Hours</span></div><div class="single_countdown"><h3>%M</h3><span>Minutes</span></div><div class="single_countdown"><h3>%S</h3><span>Seconds</span></div></div>'
            ));
        });
    </script>
    <script>
        function initMap() {
            var uluru = {
                lat: -25.363,
                lng: 131.044
            };
            var grayStyles = [{
                    featureType: "all",
                    stylers: [{
                            saturation: -90
                        },
                        {
                            lightness: 50
                        }
                    ]
                },
                {
                    elementType: 'labels.text.fill',
                    stylers: [{
                        color: '#ccdee9'
                    }]
                }
            ];
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: -31.197,
                    lng: 150.744
                },
                zoom: 9,
                styles: grayStyles,
                scrollwheel: false
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&amp;callback=initMap">
    </script>



</body>

</html>