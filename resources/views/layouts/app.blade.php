<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        
        <title>@yield('title', 'Center for Innovation and Advanced Skills') | CIAS</title>

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}" />

        <!-- ======================= CSS ===================== -->

        <!-- Icon Font CSS -->
        {{-- <link rel="stylesheet" href="{{ asset('assets/css/plugins/icofont.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/flaticon.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/font-awesome.min.css') }}" /> --}}

        <!-- Plugins CSS -->
        {{-- <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper-bundle.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnific-popup.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/nice-select.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/apexcharts.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/jqvmap.min.css') }}" /> --}}

        <!-- Main Style CSS -->
        {{-- <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" /> --}}

        <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
        <link rel="stylesheet" href="{{ asset('assets/css/vendor/plugins.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}" />

        <!-- App CSS -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />

        <!-- head section -->
        @yield('head')
    </head>

    <body>
        <div class="main-wrapper">
            <!-- Header Section Start -->
            <div class="header-section">
                <!-- Header Top Start -->
                <div class="header-top d-none d-lg-block">
                <div class="container">
                    <!-- Header Top Wrapper Start -->
                    <div class="header-top-wrapper">
                    <!-- Header Top Left Start -->
                    <div class="header-top-left">
                        <p>All course 28% off for <a href="#">new students.</a></p>
                    </div>
                    <!-- Header Top Left End -->

                    <!-- Header Top Medal Start -->
                    <div class="header-top-medal">
                        <div class="top-info">
                        <p>
                            <i class="flaticon-phone-call"></i>
                            <a href="tel:+8801762284311">+880 1762-284311</a>
                        </p>
                        <p>
                            <i class="flaticon-email"></i>
                            <a href="mailto:info@ciasbd.com">info@ciasbd.com</a>
                        </p>
                        </div>
                    </div>
                    <!-- Header Top Medal End -->

                    <!-- Header Top Right Start -->
                    <div class="header-top-right">
                        <ul class="social">
                        <li>
                            <a target="_blank" href="https://www.facebook.com/ciasbd"
                            ><i class="flaticon-facebook"></i
                            ></a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.facebook.com/ciasbd"
                            ><i class="flaticon-twitter"></i
                            ></a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.facebook.com/ciasbd"
                            ><i class="flaticon-skype"></i
                            ></a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.facebook.com/ciasbd"
                            ><i class="flaticon-instagram"></i
                            ></a>
                        </li>
                        </ul>
                    </div>
                    <!-- Header Top Right End -->
                    </div>
                    <!-- Header Top Wrapper End -->
                </div>
                </div>
                <!-- Header Top End -->

                <!-- Header Main Start -->
                <div class="header-main">
                <div class="container">
                    <!-- Header Main Start -->
                    <div class="header-main-wrapper">
                    <!-- Header Logo Start -->
                    <div class="header-logo">
                        <a href="{{ route('home') }}"
                        ><img src="{{ asset('assets/images/logo.png') }}" alt="Logo"
                        /></a>
                    </div>
                    <!-- Header Logo End -->

                    <!-- Header Menu Start -->
                    <div class="header-menu d-none d-lg-block">
                        <ul class="nav-menu">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="/courses">Courses</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                    <!-- Header Menu End -->

                    <!-- Header Sing In & Up Start -->
                    <div class="header-sign-in-up d-none d-lg-block">
                        <ul>
                        <li><a class="sign-in" href="{{ route('login') }}">Sign In</a></li>
                        <li><a class="sign-up" href="{{ route('register') }}">Sign Up</a></li>
                        </ul>
                    </div>
                    <!-- Header Sing In & Up End -->

                    <!-- Header Mobile Toggle Start -->
                    <div class="header-toggle d-lg-none">
                        <a class="menu-toggle" href="javascript:void(0)">
                        <span></span>
                        <span></span>
                        <span></span>
                        </a>
                    </div>
                    <!-- Header Mobile Toggle End -->
                    </div>
                    <!-- Header Main End -->
                </div>
                </div>
                <!-- Header Main End -->
            </div>
            <!-- Header Section End -->

            <!-- Mobile Menu Start -->
            <div class="mobile-menu">
                <!-- Menu Close Start -->
                <a class="menu-close" href="javascript:void(0)">
                <i class="icofont-close-line"></i>
                </a>
                <!-- Menu Close End -->

                <!-- Mobile Top Medal Start -->
                <div class="mobile-top">
                <p>
                    <i class="flaticon-phone-call"></i>
                    <a href="tel:9702621413">(970) 262-1413</a>
                </p>
                <p>
                    <i class="flaticon-email"></i>
                    <a href="mailto:address@gmail.com">address@gmail.com</a>
                </p>
                </div>
                <!-- Mobile Top Medal End -->

                <!-- Mobile Sing In & Up Start -->
                <div class="mobile-sign-in-up">
                <ul>
                    <li><a class="sign-in" href="{{ route('login') }}">Sign In</a></li>
                    <li><a class="sign-up" href="{{ route('register') }}">Sign Up</a></li>
                </ul>
                </div>
                <!-- Mobile Sing In & Up End -->

                <!-- Mobile Menu Start -->
                <div class="mobile-menu-items">
                <ul class="nav-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="/courses">Courses</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
                </div>
                <!-- Mobile Menu End -->

                <!-- Mobile Menu End -->
                <div class="mobile-social">
                <ul class="social">
                    <li>
                    <a href="#"><i class="flaticon-facebook"></i></a>
                    </li>
                    <li>
                    <a href="#"><i class="flaticon-twitter"></i></a>
                    </li>
                    <li>
                    <a href="#"><i class="flaticon-skype"></i></a>
                    </li>
                    <li>
                    <a href="#"><i class="flaticon-instagram"></i></a>
                    </li>
                </ul>
                </div>
                <!-- Mobile Menu End -->
            </div>
            <!-- Mobile Menu End -->

            <!-- Overlay Start -->
            <div class="overlay"></div>
            <!-- Overlay End -->

            @yield('content')

            <!-- Download App Start -->
            <div class="section section-padding download-section">
                <div class="app-shape-1"></div>
                <div class="app-shape-2"></div>
                <div class="app-shape-3"></div>
                <div class="app-shape-4"></div>

                <div class="container">
                    <!-- Download App Wrapper Start -->
                    <div class="download-app-wrapper mt-n6">
                        <!-- Section Title Start -->
                        <div class="section-title section-title-white">
                            <h5 class="sub-title">Ready to start?</h5>
                            <h2 class="main-title">
                                Download our mobile app. for easy to start your
                                course.
                            </h2>
                        </div>
                        <!-- Section Title End -->

                        <img
                            class="shape-1 animation-right"
                            src="assets/images/shape/shape-14.png"
                            alt="Shape"
                        />

                        <!-- Download App Button End -->
                        <div class="download-app-btn">
                            <ul class="app-btn">
                                <li>
                                    <a href="#"
                                        ><img
                                            src="assets/images/google-play.png"
                                            alt="Google Play"
                                    /></a>
                                </li>
                                <li>
                                    <a href="#"
                                        ><img
                                            src="assets/images/app-store.png"
                                            alt="App Store"
                                    /></a>
                                </li>
                            </ul>
                        </div>
                        <!-- Download App Button End -->
                    </div>
                    <!-- Download App Wrapper End -->
                </div>
            </div>
            <!-- Download App End -->

            @yield('footer')

            <!-- Footer Start  -->
            <div class="section footer-section">
                <!-- Footer Widget Section Start -->
                <div class="footer-widget-section">
                <img
                    class="shape-1 animation-down"
                    src="{{ asset('assets/images/shape/shape-21.png') }}"
                    alt="Shape"
                />

                <div class="container">
                    <div class="row">
                    <div class="col-lg-3 col-md-6 order-md-1 order-lg-1">
                        <!-- Footer Widget Start -->
                        <div class="footer-widget">
                        <div class="widget-logo">
                            <a href="#"
                            ><img src="{{ asset('assets/images/logo.png') }}" alt="Logo"
                            /></a>
                        </div>

                        <div class="widget-address">
                            <h4 class="footer-widget-title">Dhaka City</h4>
                            <p>Wireless, Mogbazar, Dhaka.</p>
                        </div>

                        <ul class="widget-info">
                            <li>
                            <p>
                                <i class="flaticon-email"></i>
                                <a href="mailto:info@ciasbd.com">info@ciasbd.com</a>
                            </p>
                            </li>
                            <li>
                            <p>
                                <i class="flaticon-phone-call"></i>
                                <a href="tel:+8801762-284311">+880 1762-284311</a>
                            </p>
                            </li>
                        </ul>

                        <ul class="widget-social">
                            <li>
                            <a href="#"><i class="flaticon-facebook"></i></a>
                            </li>
                            <li>
                            <a href="#"><i class="flaticon-twitter"></i></a>
                            </li>
                            <li>
                            <a href="#"><i class="flaticon-skype"></i></a>
                            </li>
                            <li>
                            <a href="#"><i class="flaticon-instagram"></i></a>
                            </li>
                        </ul>
                        </div>
                        <!-- Footer Widget End -->
                    </div>
                    <div class="col-lg-6 order-md-3 order-lg-2">
                        <!-- Footer Widget Link Start -->
                        <div class="footer-widget-link">
                        <!-- Footer Widget Start -->
                        <div class="footer-widget">
                            <h4 class="footer-widget-title">Category</h4>

                            <ul class="widget-link">
                            <li><a href="#">Creative Writing</a></li>
                            <li><a href="#">Film & Video</a></li>
                            <li><a href="#">Graphic Design</a></li>
                            <li><a href="#">UI/UX Design</a></li>
                            <li><a href="#">Business Analytics</a></li>
                            <li><a href="#">Marketing</a></li>
                            </ul>
                        </div>
                        <!-- Footer Widget End -->

                        <!-- Footer Widget Start -->
                        <div class="footer-widget">
                            <h4 class="footer-widget-title">Quick Links</h4>

                            <ul class="widget-link">
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Discussion</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Customer Support</a></li>
                            <li><a href="#">Course FAQ’s</a></li>
                            </ul>
                        </div>
                        <!-- Footer Widget End -->
                        </div>
                        <!-- Footer Widget Link End -->
                    </div>
                    <div class="col-lg-3 col-md-6 order-md-2 order-lg-3">
                        <!-- Footer Widget Start -->
                        <div class="footer-widget">
                        <h4 class="footer-widget-title">Subscribe</h4>

                        <div class="widget-subscribe">
                            <p>
                            Lorem Ipsum has been them an industry printer took a
                            galley make book.
                            </p>

                            <div class="widget-form">
                            <form action="#">
                                <input type="text" placeholder="Email here" />
                                <button class="btn btn-primary btn-hover-dark">
                                Subscribe Now
                                </button>
                            </form>
                            </div>
                        </div>
                        </div>
                        <!-- Footer Widget End -->
                    </div>
                    </div>
                </div>

                <img
                    class="shape-2 animation-left"
                    src="{{ asset('assets/images/shape/shape-22.png') }}"
                    alt="Shape"
                />
                </div>
                <!-- Footer Widget Section End -->

                <!-- Footer Copyright Start -->
                <div class="footer-copyright">
                <div class="container">
                    <!-- Footer Copyright Start -->
                    <div class="copyright-wrapper">
                    <div class="copyright-link">
                        <a href="#">Terms of Service</a>
                        <a href="#">Privacy Policy</a>
                        <a href="#">Sitemap</a>
                        <a href="#">Security</a>
                    </div>
                    <div class="copyright-text">
                        <p>
                        &copy; 2022 <span> CIAS </span> Made with
                        <i class="icofont-heart-alt"></i> by
                        <a href="#">Cias IT Team</a>
                        </p>
                    </div>
                    </div>
                    <!-- Footer Copyright End -->
                </div>
                </div>
                <!-- Footer Copyright End -->
            </div>
            <!-- Footer End -->

            <!--Back To Start-->
            <a href="#" class="back-to-top">
                <i class="icofont-simple-up"></i>
            </a>
            <!--Back To End-->
        </div>

        <!-- ======================= JS ===================== -->

        <!-- Modernizer & jQuery JS -->
        <script src="{{ asset('assets/js/vendor/modernizr-3.11.2.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/jquery-3.5.1.min.js') }}"></script>

        <!-- Bootstrap JS -->
        {{-- <script src="{{ asset('assets/js/plugins/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script> --}}

        <!-- Plugins JS -->
        {{-- <script src="{{ asset('assets/js/plugins/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/video-playlist.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/ajax-contact.js') }}"></script> --}}

        <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
        <script src="{{ asset('assets/js/plugins.min.js') }}"></script>

        <!-- Main JS -->
        <script src="{{ asset('assets/js/main.js') }}"></script>

        <!-- App JS -->
        <script src="{{ asset('js/app.js') }}"></script>

        <!-- body section -->
        @yield('body')
    </body>
</html>
