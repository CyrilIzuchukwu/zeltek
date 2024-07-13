<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- meta tag -->
    <meta charset="utf-8" />
    <title>Zeltex - Corporate Business</title>
    <meta name="description" content="" />
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- favicon -->
    <link rel="apple-touch-icon" href="apple-touch-icon.html" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/fav.png') }}" />
    <!-- Bootstrap  v5.1.3 css -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <!-- Sall css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/sal.css') }}" />
    <!-- magnific css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/magnific-popup.css') }}" />
    <!-- Swiper Slider css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/swiper.min.css') }}" />
    <!-- Remixicon Fonts css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/ico-fonts.css') }}" />
    <!-- Remixicon Fonts css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/odometer.min.css') }}" />
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}" />

</head>

<body>
    <!-- preloader -->
    <div id="preloader" class="preloader">
        <div class="animation-preloader">

            <div class="txt-loading">
                <span data-text-preloader="Z" class="letters-loading"> Z </span>
                <span data-text-preloader="E" class="letters-loading"> E </span>
                <span data-text-preloader="L" class="letters-loading"> L </span>
                <span data-text-preloader="T" class="letters-loading"> T </span>
                <span data-text-preloader="E" class="letters-loading"> E </span>
                <span data-text-preloader="K" class="letters-loading"> K </span>
            </div>
            <p class="text-center">Loading</p>
        </div>
    </div>
    <!-- welcome content start from here -->

    <!--========== Header Section Start ==============-->
    @include('snippets.header')
    <!--========== Header Section End ==============-->

    <div class="parent-wrapper">
        @yield('content')
    </div>

    <!--=========== Footer Section Start =========-->
    @include('snippets.footer')
    <!--=========== Footer Section End =========-->

    <!--Sc Offcanvas Area Start-->
    <div id="sc-overlay-bg2" class="sc-overlay-bg2"></div>
    <div class="sc-product-offcanvas-area">
        <div class="sc-offcanvas-header d-flex align-items-center justify-content-between">
            <div class="sticky-logo logo-area text-center">
                <a href="index.html"><img src="assets/images/logo-black.png" alt="Logo" /></a>
            </div>
            <div class="offcanvas-icon">
                <a id="canva_close" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="25px" height="25px">
                        <path d="M 9.15625 6.3125 L 6.3125 9.15625 L 22.15625 25 L 6.21875 40.96875 L 9.03125 43.78125 L 25 27.84375 L 40.9375 43.78125 L 43.78125 40.9375 L 27.84375 25 L 43.6875 9.15625 L 40.84375 6.3125 L 25 22.15625 Z" />
                    </svg>
                </a>
            </div>
        </div>

        <!-- Canvas Mobile Menu start -->
        <nav class="right_menu_togle mobile-navbar-menu" id="mobile-navbar-menu">
            <ul class="nav-menu sc-mb-45 sc-pl-0">
                <li class="list-gap menu-item-has-children current-menu-item">
                    <a class="active" href="index.html"> Home</a>
                    <ul class="list-gap sub-menu-list">
                        <li><a class="active" href="index.html">Home One</a></li>
                        <li><a href="index2.html">Home Two</a></li>
                        <li><a href="index3.html">Home Three</a></li>
                    </ul>
                </li>
                <li class="list-gap">
                    <a href="about.html"> About Us</a>
                </li>
                <li class="list-gap menu-item-has-children">
                    <a href="#"> Projects</a>
                    <ul class="list-gap sub-menu-list">
                        <li><a href="project.html">Project</a></li>
                        <li><a href="project-details.html">Project Details</a></li>
                    </ul>
                </li>
                <li class="list-gap menu-item-has-children">
                    <a href="#"> Pages</a>
                    <ul class="list-gap sub-menu-list">
                        <li><a href="price.html">Price</a></li>
                        <li><a href="service.html">Service</a></li>
                        <li><a href="service-details.html">Service Details</a></li>
                        <li><a href="team.html">Team</a></li>
                        <li><a href="team-details.html">Team Details</a></li>
                        <li><a href="faq.html">Faq</a></li>
                        <li><a href="error.html">404 Error</a></li>
                    </ul>
                </li>
                <li class="list-gap menu-item-has-children">
                    <a href="#"> Blog</a>
                    <ul class="list-gap sub-menu-list">
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li class="list-gap"><a href="contact.html">Contact</a></li>
            </ul>
        </nav>


        <!-- Canvas Menu end -->
        <div class="sc-offcanvas-list-info">
            <p class="des sc-mb-20">Boxfin auctor lectus better best conbia euismot rhoncus dolora gorgeous system.</p>
            <h4 class="product-title">Contact Info</h4>
            <ul class="list-gap">
                <li>
                    <i class="icon-map"></i>
                    4983 Walnut Avenue Mountain
                </li>
                <li><i class="icon-phone"></i><a href="tel:02(585)6328585">02 (585) 632 8585</a></li>
                <li><i class="icon-mail"></i><a href="mailto:bizcam@example.com">bizcam@example.com</a></li>
            </ul>
        </div>
        <div class="contact-map">
            <iframe src="https://maps.google.com/maps?q=manhatan&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" style="border: 0" allowfullscreen=""></iframe>
        </div>
        <div class="sc-offcanvas-icon-list">
            <ul>
                <li>
                    <a href="#"><i class="icon-linkedin-2"></i></a>
                </li>
                <li>
                    <a href="#"><i class="icon-twiter"></i></a>
                </li>
                <li>
                    <a href="#"><i class="icon-intragram"></i></a>
                </li>
                <li>
                    <a href="#"><i class="icon-facebook-2"></i></a>
                </li>
            </ul>
        </div>
    </div>
    <!--Sc Offcanvas Area End-->


    <!-- start scrollUp  -->
    <div id="scrollUp">
        <i class="icon-angle_right"></i>
    </div>
    <!-- End scrollUp  -->

    <!-- start scrollUp  -->
    <div class="boxfin-scroll-top progress-done">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 71.1186px"></path>
        </svg>
        <div class="boxfin-scroll-top-icon">
            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" viewBox="0 0 24 24" data-icon="mdi:arrow-up" class="iconify iconify--mdi">
                <path fill="currentColor" d="M13 20h-2V8l-5.5 5.5l-1.42-1.42L12 4.16l7.92 7.92l-1.42 1.42L13 8v12Z"></path>
            </svg>
        </div>
    </div>
    <!-- End scrollUp  -->

    <!-- Bootstrap.min js -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- jquery.min js -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <!-- modernizr.js -->
    <script src="{{ asset('assets/js/modernizr-2.8.3.min.js') }}"></script>
    <!-- Swiper JS -->
    <script src="{{ asset('assets/cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js') }}"></script>
    <!-- imagesloaded.pkgd.min js -->
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- magnific.min js -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Swiper.min js -->
    <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
    <!-- appear js -->
    <script src="{{ asset('assets/js/jquery.appear.min.js') }}"></script>
    <!-- odometer js -->
    <script src="{{ asset('assets/js/odometer.min.js') }}"></script>
    <!-- sal js -->
    <script src="{{ asset('assets/js/sal.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>


</html>
