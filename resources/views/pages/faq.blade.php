@extends('layouts.app')

@section('title', 'Frequently Asked Question')

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
                <li><a href="#">Home</a></li>
                <li class="active">FAQ</li>
            </ul>
            <h2 class="title">
                Frequently Asked <span>Question.</span>
            </h2>
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

<!-- FAQ Start -->
<div class="section section-padding">
    <div class="container">
        <!-- FAQ Tab Menu Start -->
        <div class="faq-tab-menu">
            <ul class="nav nav-justified">
                <li class="nav-item">
                    <button
                        class="nav-link active"
                        data-bs-toggle="tab"
                        data-bs-target="#tab1"
                    >
                        UI/UX Design
                    </button>
                </li>
                <li class="nav-item">
                    <button
                        class="nav-link"
                        data-bs-toggle="tab"
                        data-bs-target="#tab2"
                    >
                        Development
                    </button>
                </li>
                <li class="nav-item">
                    <button
                        class="nav-link"
                        data-bs-toggle="tab"
                        data-bs-target="#tab3"
                    >
                        Data Science
                    </button>
                </li>
                <li class="nav-item">
                    <button
                        class="nav-link"
                        data-bs-toggle="tab"
                        data-bs-target="#tab4"
                    >
                        Business
                    </button>
                </li>
                <li class="nav-item">
                    <button
                        class="nav-link"
                        data-bs-toggle="tab"
                        data-bs-target="#tab5"
                    >
                        Financial
                    </button>
                </li>
            </ul>
        </div>
        <!-- FAQ Tab Menu End -->

        <!-- FAQ Tab Content Start -->
        <div class="tab-content">
            <div class="tab-pane fade show active" id="tab1">
                <!-- FAQ Wrapper Start -->
                <div class="faq-wrapper">
                    <!-- Single FAQ Item Start -->
                    <div class="single-faq-item">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="faq-title">
                                    <h4 class="title">
                                        What is the academic
                                        calendar for universities in
                                        the United States?
                                    </h4>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="faq-text">
                                    <p>
                                        Lorem Ipsum is simply dummy
                                        text of the printing and
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text ever since the 1500
                                        when un known printer took
                                        make a type specimen
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text
                                    </p>

                                    <p>
                                        Lorem Ipsum is simply dummy
                                        text of the printing and
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text ever since the 1500
                                        when un known printer took
                                        make a type specimen
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single FAQ Item End -->

                    <!-- Single FAQ Item Start -->
                    <div class="single-faq-item">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="faq-title">
                                    <h4 class="title">
                                        What’s the difference
                                        between a college and a
                                        university?
                                    </h4>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="faq-text">
                                    <p>
                                        Lorem Ipsum is simply dummy
                                        text of the printing and
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text ever since the 1500
                                        when un known printer took
                                        make a type specimen
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single FAQ Item End -->

                    <!-- Single FAQ Item Start -->
                    <div class="single-faq-item">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="faq-title">
                                    <h4 class="title">
                                        What is the academic
                                        calendar for universities in
                                        the United States?
                                    </h4>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="faq-text">
                                    <p>
                                        Lorem Ipsum is simply dummy
                                        text of the printing and
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text ever since the 1500
                                        when un known printer took
                                        make a type specimen
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single FAQ Item End -->

                    <!-- Single FAQ Item Start -->
                    <div class="single-faq-item">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="faq-title">
                                    <h4 class="title">
                                        Is it possible to obtain a
                                        bachelor's degree and a
                                        master's degree at the same
                                        time?
                                    </h4>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="faq-text">
                                    <p>
                                        Lorem Ipsum is simply dummy
                                        text of the printing and
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text ever since the 1500
                                        when un known printer took
                                        make a type specimen
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single FAQ Item End -->

                    <!-- Single FAQ Item Start -->
                    <div class="single-faq-item">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="faq-title">
                                    <h4 class="title">
                                        How do you transfer from a
                                        community college to a four
                                        year university?
                                    </h4>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="faq-text">
                                    <p>
                                        Lorem Ipsum is simply dummy
                                        text of the printing and
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text ever since the 1500
                                        when un known printer took
                                        make a type specimen
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single FAQ Item End -->
                </div>
                <!-- FAQ Wrapper End -->
            </div>
            <div class="tab-pane fade" id="tab2">
                <!-- FAQ Wrapper Start -->
                <div class="faq-wrapper">
                    <!-- Single FAQ Item Start -->
                    <div class="single-faq-item">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="faq-title">
                                    <h4 class="title">
                                        What is the academic
                                        calendar for universities in
                                        the United States?
                                    </h4>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="faq-text">
                                    <p>
                                        Lorem Ipsum is simply dummy
                                        text of the printing and
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text ever since the 1500
                                        when un known printer took
                                        make a type specimen
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text
                                    </p>

                                    <p>
                                        Lorem Ipsum is simply dummy
                                        text of the printing and
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text ever since the 1500
                                        when un known printer took
                                        make a type specimen
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single FAQ Item End -->

                    <!-- Single FAQ Item Start -->
                    <div class="single-faq-item">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="faq-title">
                                    <h4 class="title">
                                        What’s the difference
                                        between a college and a
                                        university?
                                    </h4>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="faq-text">
                                    <p>
                                        Lorem Ipsum is simply dummy
                                        text of the printing and
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text ever since the 1500
                                        when un known printer took
                                        make a type specimen
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single FAQ Item End -->

                    <!-- Single FAQ Item Start -->
                    <div class="single-faq-item">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="faq-title">
                                    <h4 class="title">
                                        What is the academic
                                        calendar for universities in
                                        the United States?
                                    </h4>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="faq-text">
                                    <p>
                                        Lorem Ipsum is simply dummy
                                        text of the printing and
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text ever since the 1500
                                        when un known printer took
                                        make a type specimen
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single FAQ Item End -->

                    <!-- Single FAQ Item Start -->
                    <div class="single-faq-item">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="faq-title">
                                    <h4 class="title">
                                        Is it possible to obtain a
                                        bachelor's degree and a
                                        master's degree at the same
                                        time?
                                    </h4>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="faq-text">
                                    <p>
                                        Lorem Ipsum is simply dummy
                                        text of the printing and
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text ever since the 1500
                                        when un known printer took
                                        make a type specimen
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single FAQ Item End -->

                    <!-- Single FAQ Item Start -->
                    <div class="single-faq-item">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="faq-title">
                                    <h4 class="title">
                                        How do you transfer from a
                                        community college to a four
                                        year university?
                                    </h4>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="faq-text">
                                    <p>
                                        Lorem Ipsum is simply dummy
                                        text of the printing and
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text ever since the 1500
                                        when un known printer took
                                        make a type specimen
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single FAQ Item End -->
                </div>
                <!-- FAQ Wrapper End -->
            </div>
            <div class="tab-pane fade" id="tab3">
                <!-- FAQ Wrapper Start -->
                <div class="faq-wrapper">
                    <!-- Single FAQ Item Start -->
                    <div class="single-faq-item">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="faq-title">
                                    <h4 class="title">
                                        What is the academic
                                        calendar for universities in
                                        the United States?
                                    </h4>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="faq-text">
                                    <p>
                                        Lorem Ipsum is simply dummy
                                        text of the printing and
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text ever since the 1500
                                        when un known printer took
                                        make a type specimen
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text
                                    </p>

                                    <p>
                                        Lorem Ipsum is simply dummy
                                        text of the printing and
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text ever since the 1500
                                        when un known printer took
                                        make a type specimen
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single FAQ Item End -->

                    <!-- Single FAQ Item Start -->
                    <div class="single-faq-item">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="faq-title">
                                    <h4 class="title">
                                        What’s the difference
                                        between a college and a
                                        university?
                                    </h4>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="faq-text">
                                    <p>
                                        Lorem Ipsum is simply dummy
                                        text of the printing and
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text ever since the 1500
                                        when un known printer took
                                        make a type specimen
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single FAQ Item End -->

                    <!-- Single FAQ Item Start -->
                    <div class="single-faq-item">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="faq-title">
                                    <h4 class="title">
                                        What is the academic
                                        calendar for universities in
                                        the United States?
                                    </h4>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="faq-text">
                                    <p>
                                        Lorem Ipsum is simply dummy
                                        text of the printing and
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text ever since the 1500
                                        when un known printer took
                                        make a type specimen
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single FAQ Item End -->

                    <!-- Single FAQ Item Start -->
                    <div class="single-faq-item">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="faq-title">
                                    <h4 class="title">
                                        Is it possible to obtain a
                                        bachelor's degree and a
                                        master's degree at the same
                                        time?
                                    </h4>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="faq-text">
                                    <p>
                                        Lorem Ipsum is simply dummy
                                        text of the printing and
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text ever since the 1500
                                        when un known printer took
                                        make a type specimen
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single FAQ Item End -->

                    <!-- Single FAQ Item Start -->
                    <div class="single-faq-item">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="faq-title">
                                    <h4 class="title">
                                        How do you transfer from a
                                        community college to a four
                                        year university?
                                    </h4>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="faq-text">
                                    <p>
                                        Lorem Ipsum is simply dummy
                                        text of the printing and
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text ever since the 1500
                                        when un known printer took
                                        make a type specimen
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single FAQ Item End -->
                </div>
                <!-- FAQ Wrapper End -->
            </div>
            <div class="tab-pane fade" id="tab4">
                <!-- FAQ Wrapper Start -->
                <div class="faq-wrapper">
                    <!-- Single FAQ Item Start -->
                    <div class="single-faq-item">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="faq-title">
                                    <h4 class="title">
                                        What is the academic
                                        calendar for universities in
                                        the United States?
                                    </h4>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="faq-text">
                                    <p>
                                        Lorem Ipsum is simply dummy
                                        text of the printing and
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text ever since the 1500
                                        when un known printer took
                                        make a type specimen
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text
                                    </p>

                                    <p>
                                        Lorem Ipsum is simply dummy
                                        text of the printing and
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text ever since the 1500
                                        when un known printer took
                                        make a type specimen
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single FAQ Item End -->

                    <!-- Single FAQ Item Start -->
                    <div class="single-faq-item">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="faq-title">
                                    <h4 class="title">
                                        What’s the difference
                                        between a college and a
                                        university?
                                    </h4>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="faq-text">
                                    <p>
                                        Lorem Ipsum is simply dummy
                                        text of the printing and
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text ever since the 1500
                                        when un known printer took
                                        make a type specimen
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single FAQ Item End -->

                    <!-- Single FAQ Item Start -->
                    <div class="single-faq-item">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="faq-title">
                                    <h4 class="title">
                                        What is the academic
                                        calendar for universities in
                                        the United States?
                                    </h4>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="faq-text">
                                    <p>
                                        Lorem Ipsum is simply dummy
                                        text of the printing and
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text ever since the 1500
                                        when un known printer took
                                        make a type specimen
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single FAQ Item End -->

                    <!-- Single FAQ Item Start -->
                    <div class="single-faq-item">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="faq-title">
                                    <h4 class="title">
                                        Is it possible to obtain a
                                        bachelor's degree and a
                                        master's degree at the same
                                        time?
                                    </h4>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="faq-text">
                                    <p>
                                        Lorem Ipsum is simply dummy
                                        text of the printing and
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text ever since the 1500
                                        when un known printer took
                                        make a type specimen
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single FAQ Item End -->

                    <!-- Single FAQ Item Start -->
                    <div class="single-faq-item">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="faq-title">
                                    <h4 class="title">
                                        How do you transfer from a
                                        community college to a four
                                        year university?
                                    </h4>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="faq-text">
                                    <p>
                                        Lorem Ipsum is simply dummy
                                        text of the printing and
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text ever since the 1500
                                        when un known printer took
                                        make a type specimen
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single FAQ Item End -->
                </div>
                <!-- FAQ Wrapper End -->
            </div>
            <div class="tab-pane fade" id="tab5">
                <!-- FAQ Wrapper Start -->
                <div class="faq-wrapper">
                    <!-- Single FAQ Item Start -->
                    <div class="single-faq-item">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="faq-title">
                                    <h4 class="title">
                                        What is the academic
                                        calendar for universities in
                                        the United States?
                                    </h4>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="faq-text">
                                    <p>
                                        Lorem Ipsum is simply dummy
                                        text of the printing and
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text ever since the 1500
                                        when un known printer took
                                        make a type specimen
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text
                                    </p>

                                    <p>
                                        Lorem Ipsum is simply dummy
                                        text of the printing and
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text ever since the 1500
                                        when un known printer took
                                        make a type specimen
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single FAQ Item End -->

                    <!-- Single FAQ Item Start -->
                    <div class="single-faq-item">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="faq-title">
                                    <h4 class="title">
                                        What’s the difference
                                        between a college and a
                                        university?
                                    </h4>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="faq-text">
                                    <p>
                                        Lorem Ipsum is simply dummy
                                        text of the printing and
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text ever since the 1500
                                        when un known printer took
                                        make a type specimen
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single FAQ Item End -->

                    <!-- Single FAQ Item Start -->
                    <div class="single-faq-item">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="faq-title">
                                    <h4 class="title">
                                        What is the academic
                                        calendar for universities in
                                        the United States?
                                    </h4>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="faq-text">
                                    <p>
                                        Lorem Ipsum is simply dummy
                                        text of the printing and
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text ever since the 1500
                                        when un known printer took
                                        make a type specimen
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single FAQ Item End -->

                    <!-- Single FAQ Item Start -->
                    <div class="single-faq-item">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="faq-title">
                                    <h4 class="title">
                                        Is it possible to obtain a
                                        bachelor's degree and a
                                        master's degree at the same
                                        time?
                                    </h4>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="faq-text">
                                    <p>
                                        Lorem Ipsum is simply dummy
                                        text of the printing and
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text ever since the 1500
                                        when un known printer took
                                        make a type specimen
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single FAQ Item End -->

                    <!-- Single FAQ Item Start -->
                    <div class="single-faq-item">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="faq-title">
                                    <h4 class="title">
                                        How do you transfer from a
                                        community college to a four
                                        year university?
                                    </h4>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="faq-text">
                                    <p>
                                        Lorem Ipsum is simply dummy
                                        text of the printing and
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text ever since the 1500
                                        when un known printer took
                                        make a type specimen
                                        typesetting industry lorem
                                        Ipsum has been the
                                        industry's standard dummy
                                        text
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single FAQ Item End -->
                </div>
                <!-- FAQ Wrapper End -->
            </div>
        </div>
        <!-- FAQ Tab Content End -->

        <!-- FAQ Button End -->
        <div class="faq-btn text-center">
            <a class="btn btn-primary btn-hover-dark" href="#"
                >Other’s Question</a
            >
        </div>
        <!-- FAQ Button End -->
    </div>
</div>
<!-- FAQ End -->
@endsection