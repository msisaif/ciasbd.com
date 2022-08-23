
@extends('layouts.app')

@section('title', 'Not Found')

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
                <li><a href="/">Home</a></li>
                <li class="active">404 Error</li>
            </ul>
            <h2 class="title">Page Not <span>Found</span></h2>
            <a
                href="/"
                class="btn btn-primary btn-hover-dark"
            >
                Back To Home
            </a>
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

<!-- Error Start -->
<div class="section section-padding mt-n10">
    <div class="container">
        <!-- Error Wrapper Start -->
        <div class="error-wrapper">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Error Images Start -->
                    <div class="error-images">
                        <img
                            src="assets/images/error.png"
                            alt="Error"
                        />
                    </div>
                    <!-- Error Images End -->
                </div>
                <div class="col-lg-6">
                    <!-- Error Content Start -->
                    <div class="error-content">
                        <h5 class="sub-title">
                            This Page is Not Found.
                        </h5>
                        <h2 class="main-title">
                            We are very sorry for error. We
                            <span> can’t find this</span> page.
                        </h2>
                        <p>
                            It has survived not only five centuries
                            but also the leap into electronic
                            typesetting.
                        </p>
                        <a
                            href="/"
                            class="btn btn-primary btn-hover-dark"
                            >Back To Home</a
                        >
                    </div>
                    <!-- Error Content End -->
                </div>
            </div>
        </div>
        <!-- Error Wrapper End -->
    </div>
</div>
<!-- Error End -->

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