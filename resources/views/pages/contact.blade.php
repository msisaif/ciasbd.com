@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<!-- Page Banner Start -->
<div class="section page-banner">
    <img
        class="shape-1 animation-round"
        src="{{ asset('assets/images/shape/shape-8.png') }}"
        alt="Shape"
    />

    <img
        class="shape-2"
        src="{{ asset('assets/images/shape/shape-23.png') }}"
        alt="Shape"
    />

    <div class="container">
        <!-- Page Banner Start -->
        <div class="page-banner-content">
            <ul class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active">Contact Us</li>
            </ul>
            <h2 class="title">Contact <span>Us</span></h2>
        </div>
        <!-- Page Banner End -->
    </div>

    <!-- Shape Icon Box Start -->
    <div class="shape-icon-box">
        <img
            class="icon-shape-1 animation-left"
            src="{{ asset('assets/images/shape/shape-5.png') }}"
            alt="Shape"
        />

        <div class="box-content">
            <div class="box-wrapper">
                <i class="flaticon-badge"></i>
            </div>
        </div>

        <img
            class="icon-shape-2"
            src="{{ asset('assets/images/shape/shape-6.png') }}"
            alt="Shape"
        />
    </div>
    <!-- Shape Icon Box End -->

    <img
        class="shape-3"
        src="{{ asset('assets/images/shape/shape-24.png') }}"
        alt="Shape"
    />

    <img
        class="shape-author"
        src="{{ asset('assets/images/author/author-11.jpg') }}"
        alt="Shape"
    />
</div>
<!-- Page Banner End -->

<!-- Contact Map Start -->
<div class="section section-padding-02">
    <div class="container">
        <!-- Contact Map Wrapper Start -->
        <div class="contact-map-wrapper">
            <iframe
                id="gmap_canvas"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2582.506760904109!2d90.38556449867232!3d23.739672575450186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8c6fddec46d%3A0x56930d03c95d73a0!2sKatabon%2C%20Dhaka%201205!5e0!3m2!1sen!2sbd!4v1661301519495!5m2!1sen!2sbd"
            ></iframe>
        </div>
        <!-- Contact Map Wrapper End -->
    </div>
</div>
<!-- Contact Map End -->

<!-- Contact Start -->
<div class="section section-padding">
    <div class="container">
        <!-- Contact Wrapper Start -->
        <div class="contact-wrapper">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Contact Info Start -->
                    <div class="contact-info">
                        <img
                            class="shape animation-round"
                            src="{{ asset('assets/images/shape/shape-12.png') }}"
                            alt="Shape"
                        />

                        <!-- Single Contact Info Start -->
                        <div class="single-contact-info">
                            <div class="info-icon">
                                <i class="flaticon-phone-call"></i>
                            </div>
                            <div class="info-content">
                                <h6 class="title">Phone No.</h6>
                                <p>
                                    <a href="tel:88193326867"
                                        >+88 01762-284311</a
                                    >
                                </p>
                            </div>
                        </div>
                        <!-- Single Contact Info End -->
                        <!-- Single Contact Info Start -->
                        <div class="single-contact-info">
                            <div class="info-icon">
                                <i class="flaticon-email"></i>
                            </div>
                            <div class="info-content">
                                <h6 class="title">
                                    Email Address.
                                </h6>
                                <p>
                                    <a href="mailto:info@ciasbd.com">
                                        info@ciasbd.com
                                    </a>
                                </p>
                            </div>
                        </div>
                        <!-- Single Contact Info End -->
                        <!-- Single Contact Info Start -->
                        <div class="single-contact-info">
                            <div class="info-icon">
                                <i class="flaticon-pin"></i>
                            </div>
                            <div class="info-content">
                                <h6 class="title">
                                    Office Address.
                                </h6>
                                <p>Katabon, Dhaka.</p>
                            </div>
                        </div>
                        <!-- Single Contact Info End -->
                    </div>
                    <!-- Contact Info End -->
                </div>
                <div class="col-lg-6">
                    <!-- Contact Form Start -->
                    <div class="contact-form">
                        <h3 class="title">
                            Get in Touch <span>With Us</span>
                        </h3>

                        <div class="form-wrapper">
                            <form
                                action="#"
                                method="POST"
                            >
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <input
                                        type="text"
                                        name="name"
                                        placeholder="Full Name"
                                    />
                                </div>
                                <!-- Single Form End -->
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <input
                                        type="number"
                                        name="phone"
                                        placeholder="Phone : 01XXXXXXXXX"
                                    />
                                </div>
                                <!-- Single Form End -->
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <input
                                        type="text"
                                        name="subject"
                                        {{-- placeholder="Subject : I want to be a instructor" --}}
                                        placeholder="Subject"
                                    />
                                </div>
                                <!-- Single Form End -->
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <textarea
                                        name="message"
                                        placeholder="Message"
                                    ></textarea>
                                </div>
                                <!-- Single Form End -->
                                <p class="form-message"></p>
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <button
                                        class="btn btn-primary btn-hover-dark w-100"
                                    >
                                        Send Message
                                        <i
                                            class="flaticon-right"
                                        ></i>
                                    </button>
                                </div>
                                <!-- Single Form End -->
                            </form>
                        </div>
                    </div>
                    <!-- Contact Form End -->
                </div>
            </div>
        </div>
        <!-- Contact Wrapper End -->
    </div>
</div>
<!-- Contact End -->
@endsection