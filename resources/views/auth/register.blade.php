@extends('layouts.app')

@section('title', 'Register')

@section('content')
<!-- Page Banner Start -->
<div class="section page-banner">
    <img
        class="shape-1 animation-round"
        src="assets/images/shape/shape-8.png"
        alt="Shape"
    />

    <img
        class="shape-2"
        src="assets/images/shape/shape-23.png"
        alt="Shape"
    />

    <div class="container">
        <!-- Page Banner Start -->
        <div class="page-banner-content">
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Register</li>
            </ul>
            <h2 class="title">Registration <span>Form</span></h2>
        </div>
        <!-- Page Banner End -->
    </div>

    <!-- Shape Icon Box Start -->
    <div class="shape-icon-box">
        <img
            class="icon-shape-1 animation-left"
            src="assets/images/shape/shape-5.png"
            alt="Shape"
        />

        <div class="box-content">
            <div class="box-wrapper">
                <i class="flaticon-badge"></i>
            </div>
        </div>

        <img
            class="icon-shape-2"
            src="assets/images/shape/shape-6.png"
            alt="Shape"
        />
    </div>
    <!-- Shape Icon Box End -->

    <img
        class="shape-3"
        src="assets/images/shape/shape-24.png"
        alt="Shape"
    />

    <img
        class="shape-author"
        src="assets/images/author/author-11.jpg"
        alt="Shape"
    />
</div>
<!-- Page Banner End -->

<!-- Register & Login Start -->
<div class="section section-padding">
    <div class="container">
        <!-- Register & Login Wrapper Start -->
        <div class="register-login-wrapper">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Register & Login Images Start -->
                    <div class="register-login-images">
                        <div class="shape-1">
                            <img
                                src="assets/images/shape/shape-26.png"
                                alt="Shape"
                            />
                        </div>

                        <div class="images">
                            <img
                                src="assets/images/register-login.png"
                                alt="Register Login"
                            />
                        </div>
                    </div>
                    <!-- Register & Login Images End -->
                </div>
                <div class="col-lg-6">
                    <!-- Register & Login Form Start -->
                    <div class="register-login-form">
                        <h3 class="title">
                            Registration <span>Now</span>
                        </h3>

                        <div class="form-wrapper">
                            <form action="#">
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <input
                                        type="text"
                                        placeholder="Name"
                                    />
                                </div>
                                <!-- Single Form End -->
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <input
                                        type="email"
                                        placeholder="Email"
                                    />
                                </div>
                                <!-- Single Form End -->
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <input
                                        type="password"
                                        placeholder="Password"
                                    />
                                </div>
                                <!-- Single Form End -->
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <input
                                        type="password"
                                        placeholder="Confirm Password"
                                    />
                                </div>
                                <!-- Single Form End -->
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <button
                                        class="btn btn-primary btn-hover-dark w-100"
                                    >
                                        Create an account
                                    </button>
                                    <a
                                        class="btn btn-secondary btn-outline w-100"
                                        href="/login"
                                        >Already have an account?</a
                                    >
                                </div>
                                <!-- Single Form End -->
                            </form>
                        </div>
                    </div>
                    <!-- Register & Login Form End -->
                </div>
            </div>
        </div>
        <!-- Register & Login Wrapper End -->
    </div>
</div>
<!-- Register & Login End -->

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
@endsection