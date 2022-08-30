
@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<!-- Page Banner Start -->
<div class="section page-banner" style="height: 100px;"></div>
{{-- <div class="section page-banner">
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
                <li class="active">Dashboard</li>
            </ul>
            <h2 class="title">My <span>Dashboard</span></h2>
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
</div> --}}
<!-- Page Banner End -->


<!-- All Courses Start -->
<div class="section section-padding-02">
  <div class="container">
    <!-- All Courses Top Start -->
    <div class="courses-top">
      <!-- Section Title Start -->
      <div class="section-title shape-01">
        <h2 class="main-title">My <span>Courses</span></h2>
      </div>
      <!-- Section Title End -->

      <!-- Courses Search Start -->
      <div class="courses-search">
        <form action="#">
          <input type="text" placeholder="Search ..." />
          <button><i class="flaticon-magnifying-glass"></i></button>
        </form>
      </div>
      <!-- Courses Search End -->
    </div>
    <!-- All Courses Top End -->

    <!-- All Courses Wrapper Start -->
    <div class="courses-wrapper-02">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <!-- Single Courses Start -->
                <div class="single-courses">
                    <div class="courses-images">
                        <a href="{{ route('courses.show', 1) }}"
                            ><img
                                src="{{ asset('assets/images/courses/courses-01.jpg') }}"
                                alt="Courses"
                        /></a>

                        <div class="courses-option dropdown">
                            <button
                                class="option-toggle"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#"
                                        ><i
                                            class="icofont-share-alt"
                                        ></i>
                                        Share</a
                                    >
                                </li>
                                <li>
                                    <a href="#"
                                        ><i
                                            class="icofont-plus"
                                        ></i>
                                        Create Collection</a
                                    >
                                </li>
                                <li>
                                    <a href="#"
                                        ><i
                                            class="icofont-star"
                                        ></i>
                                        Favorite</a
                                    >
                                </li>
                                <li>
                                    <a href="#"
                                        ><i
                                            class="icofont-archive"
                                        ></i>
                                        Archive</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="courses-content">
                        <div class="courses-author">
                            <div class="author">
                                <div class="author-thumb">
                                    <a href="#"
                                        ><img
                                            src="{{ asset('assets/images/author/author-01.jpg') }}"
                                            alt="Author"
                                    /></a>
                                </div>
                                <div class="author-name">
                                    <a class="name" href="#"
                                        >Jason Williams</a
                                    >
                                    <a class="name-2" href="#"
                                        >Ohula Malsh</a
                                    >
                                </div>
                            </div>
                        </div>

                        <h4 class="title">
                            <a href="{{ route('courses.show', 1) }}"
                                >Data Science and Machine
                                Learning with Python - Hands
                                On!</a
                            >
                        </h4>

                        <div class="courses-rating">
                            <p>38% Complete</p>

                            <div class="rating-progress-bar">
                                <div
                                    class="rating-line"
                                    style="width: 38%"
                                ></div>
                            </div>

                            <div class="rating-meta">
                                <span class="rating-star">
                                    <span
                                        class="rating-bar"
                                        style="width: 80%"
                                    ></span>
                                </span>
                                <p>Your rating</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Courses End -->
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- Single Courses Start -->
                <div class="single-courses">
                    <div class="courses-images">
                        <a href="{{ route('courses.show', 1) }}"
                            ><img
                                src="{{ asset('assets/images/courses/courses-02.jpg') }}"
                                alt="Courses"
                        /></a>

                        <div class="courses-option dropdown">
                            <button
                                class="option-toggle"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#"
                                        ><i
                                            class="icofont-share-alt"
                                        ></i>
                                        Share</a
                                    >
                                </li>
                                <li>
                                    <a href="#"
                                        ><i
                                            class="icofont-plus"
                                        ></i>
                                        Create Collection</a
                                    >
                                </li>
                                <li>
                                    <a href="#"
                                        ><i
                                            class="icofont-star"
                                        ></i>
                                        Favorite</a
                                    >
                                </li>
                                <li>
                                    <a href="#"
                                        ><i
                                            class="icofont-archive"
                                        ></i>
                                        Archive</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="courses-content">
                        <div class="courses-author">
                            <div class="author">
                                <div class="author-thumb">
                                    <a href="#"
                                        ><img
                                            src="{{ asset('assets/images/author/author-02.jpg') }}"
                                            alt="Author"
                                    /></a>
                                </div>
                                <div class="author-name">
                                    <a class="name" href="#"
                                        >Pamela Foster
                                    </a>
                                    <a class="name-2" href="#"
                                        >Ohula Malsh</a
                                    >
                                </div>
                            </div>
                        </div>

                        <h4 class="title">
                            <a href="{{ route('courses.show', 1) }}"
                                >Create Amazing Color Schemes
                                for Your UX Design Projects</a
                            >
                        </h4>

                        <div class="courses-rating">
                            <p>80% Complete</p>

                            <div class="rating-progress-bar">
                                <div
                                    class="rating-line"
                                    style="width: 80%"
                                ></div>
                            </div>

                            <div class="rating-meta">
                                <span class="rating-star">
                                    <span
                                        class="rating-bar"
                                        style="width: 0%"
                                    ></span>
                                </span>
                                <p>
                                    <a href="#"
                                        >Leave a rating</a
                                    >
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Courses End -->
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- Single Courses Start -->
                <div class="single-courses">
                    <div class="courses-images">
                        <a href="{{ route('courses.show', 1) }}"
                            ><img
                                src="{{ asset('assets/images/courses/courses-03.jpg') }}"
                                alt="Courses"
                        /></a>

                        <div class="courses-option dropdown">
                            <button
                                class="option-toggle"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#"
                                        ><i
                                            class="icofont-share-alt"
                                        ></i>
                                        Share</a
                                    >
                                </li>
                                <li>
                                    <a href="#"
                                        ><i
                                            class="icofont-plus"
                                        ></i>
                                        Create Collection</a
                                    >
                                </li>
                                <li>
                                    <a href="#"
                                        ><i
                                            class="icofont-star"
                                        ></i>
                                        Favorite</a
                                    >
                                </li>
                                <li>
                                    <a href="#"
                                        ><i
                                            class="icofont-archive"
                                        ></i>
                                        Archive</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="courses-content">
                        <div class="courses-author">
                            <div class="author">
                                <div class="author-thumb">
                                    <a href="#"
                                        ><img
                                            src="{{ asset('assets/images/author/author-03.jpg') }}"
                                            alt="Author"
                                    /></a>
                                </div>
                                <div class="author-name">
                                    <a class="name" href="#"
                                        >Rose Simmons</a
                                    >
                                    <a class="name-2" href="#"
                                        >Ohula Malsh</a
                                    >
                                </div>
                            </div>
                        </div>

                        <h4 class="title">
                            <a href="{{ route('courses.show', 1) }}"
                                >Culture & Leadership:
                                Strategies for a Successful
                                Business</a
                            >
                        </h4>

                        <div class="courses-rating">
                            <p>15% Complete</p>

                            <div class="rating-progress-bar">
                                <div
                                    class="rating-line"
                                    style="width: 15%"
                                ></div>
                            </div>

                            <div class="rating-meta">
                                <span class="rating-star">
                                    <span
                                        class="rating-bar"
                                        style="width: 80%"
                                    ></span>
                                </span>
                                <p>Your rating</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Courses End -->
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- Single Courses Start -->
                <div class="single-courses">
                    <div class="courses-images">
                        <a href="{{ route('courses.show', 1) }}"
                            ><img
                                src="{{ asset('assets/images/courses/courses-04.jpg') }}"
                                alt="Courses"
                        /></a>

                        <div class="courses-option dropdown">
                            <button
                                class="option-toggle"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#"
                                        ><i
                                            class="icofont-share-alt"
                                        ></i>
                                        Share</a
                                    >
                                </li>
                                <li>
                                    <a href="#"
                                        ><i
                                            class="icofont-plus"
                                        ></i>
                                        Create Collection</a
                                    >
                                </li>
                                <li>
                                    <a href="#"
                                        ><i
                                            class="icofont-star"
                                        ></i>
                                        Favorite</a
                                    >
                                </li>
                                <li>
                                    <a href="#"
                                        ><i
                                            class="icofont-archive"
                                        ></i>
                                        Archive</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="courses-content">
                        <div class="courses-author">
                            <div class="author">
                                <div class="author-thumb">
                                    <a href="#"
                                        ><img
                                            src="{{ asset('assets/images/author/author-04.jpg') }}"
                                            alt="Author"
                                    /></a>
                                </div>
                                <div class="author-name">
                                    <a class="name" href="#"
                                        >Jason Williams</a
                                    >
                                    <a class="name-2" href="#"
                                        >Ohula Malsh</a
                                    >
                                </div>
                            </div>
                        </div>

                        <h4 class="title">
                            <a href="{{ route('courses.show', 1) }}"
                                >Finance Series: Learn to Budget
                                and Calculate your Net Worth.</a
                            >
                        </h4>

                        <div class="courses-rating">
                            <p>45% Complete</p>

                            <div class="rating-progress-bar">
                                <div
                                    class="rating-line"
                                    style="width: 45%"
                                ></div>
                            </div>

                            <div class="rating-meta">
                                <span class="rating-star">
                                    <span
                                        class="rating-bar"
                                        style="width: 80%"
                                    ></span>
                                </span>
                                <p>Your rating</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Courses End -->
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- Single Courses Start -->
                <div class="single-courses">
                    <div class="courses-images">
                        <a href="{{ route('courses.show', 1) }}"
                            ><img
                                src="{{ asset('assets/images/courses/courses-05.jpg') }}"
                                alt="Courses"
                        /></a>

                        <div class="courses-option dropdown">
                            <button
                                class="option-toggle"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#"
                                        ><i
                                            class="icofont-share-alt"
                                        ></i>
                                        Share</a
                                    >
                                </li>
                                <li>
                                    <a href="#"
                                        ><i
                                            class="icofont-plus"
                                        ></i>
                                        Create Collection</a
                                    >
                                </li>
                                <li>
                                    <a href="#"
                                        ><i
                                            class="icofont-star"
                                        ></i>
                                        Favorite</a
                                    >
                                </li>
                                <li>
                                    <a href="#"
                                        ><i
                                            class="icofont-archive"
                                        ></i>
                                        Archive</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="courses-content">
                        <div class="courses-author">
                            <div class="author">
                                <div class="author-thumb">
                                    <a href="#"
                                        ><img
                                            src="{{ asset('assets/images/author/author-05.jpg') }}"
                                            alt="Author"
                                    /></a>
                                </div>
                                <div class="author-name">
                                    <a class="name" href="#"
                                        >Pamela Foster</a
                                    >
                                    <a class="name-2" href="#"
                                        >Ohula Malsh</a
                                    >
                                </div>
                            </div>
                        </div>

                        <h4 class="title">
                            <a href="{{ route('courses.show', 1) }}"
                                >Build Brand Into Marketing:
                                Tackling the New Marketing
                                Landscape</a
                            >
                        </h4>

                        <div class="courses-rating">
                            <p>38% Complete</p>

                            <div class="rating-progress-bar">
                                <div
                                    class="rating-line"
                                    style="width: 38%"
                                ></div>
                            </div>

                            <div class="rating-meta">
                                <span class="rating-star">
                                    <span
                                        class="rating-bar"
                                        style="width: 80%"
                                    ></span>
                                </span>
                                <p>Your rating</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Courses End -->
            </div>
        </div>
    </div>
    <!-- All Courses Wrapper End -->

    <!-- All Courses BUtton Start -->
    <div class="courses-btn text-center">
      <a href="{{ route('courses.index') }}" class="btn btn-secondary btn-hover-primary"
        >Find A Course</a
      >
    </div>
    <!-- All Courses BUtton End -->
  </div>
</div>
<!-- All Courses End -->


<!-- Call to Action Start -->
<div class="section section-padding-02">
  <div class="container">
    <!-- Call to Action Wrapper Start -->
    <div class="call-to-action-wrapper">
      <img
        class="cat-shape-01 animation-round"
        src="{{ asset('assets/images/shape/shape-12.png') }}"
        alt="Shape"
      />
      <img
        class="cat-shape-02"
        src="{{ asset('assets/images/shape/shape-13.svg') }}"
        alt="Shape"
      />
      <img
        class="cat-shape-03 animation-round"
        src="{{ asset('assets/images/shape/shape-12.png') }}"
        alt="Shape"
      />

      <div class="row align-items-center">
        <div class="col-md-6">
          <!-- Section Title Start -->
          <div class="section-title shape-02">
            <h5 class="sub-title">Become A Instructor</h5>
            <h2 class="main-title">
              You can join with CIAS as <span>a instructor?</span>
            </h2>
          </div>
          <!-- Section Title End -->
        </div>
        <div class="col-md-6">
          <div class="call-to-action-btn">
            <a class="btn btn-primary btn-hover-dark" href="{{ route('contact') }}"
              >Drop Information</a
            >
          </div>
        </div>
      </div>
    </div>
    <!-- Call to Action Wrapper End -->
  </div>
</div>
<!-- Call to Action End -->

<!-- How It Work End -->
<div class="section section-padding mt-n1">
  <div class="container">
    <!-- Section Title Start -->
    <div class="section-title shape-03 text-center">
      <h5 class="sub-title">Over 1,235+ Course</h5>
      <h2 class="main-title">How It <span> Work?</span></h2>
    </div>
    <!-- Section Title End -->

    <!-- How it Work Wrapper Start -->
    <div class="how-it-work-wrapper">
      <!-- Single Work Start -->
      <div class="single-work">
        <img
          class="shape-1"
          src="{{ asset('assets/images/shape/shape-15.png') }}"
          alt="Shape"
        />

        <div class="work-icon">
          <i class="flaticon-transparency"></i>
        </div>
        <div class="work-content">
          <h3 class="title">Find Your Course</h3>
          <p>
            It has survived not only centurie also leap into electronic.
          </p>
        </div>
      </div>
      <!-- Single Work End -->

      <!-- Single Work Start -->
      <div class="work-arrow">
        <img
          class="arrow"
          src="{{ asset('assets/images/shape/shape-17.png') }}"
          alt="Shape"
        />
      </div>
      <!-- Single Work End -->

      <!-- Single Work Start -->
      <div class="single-work">
        <img
          class="shape-2"
          src="{{ asset('assets/images/shape/shape-15.png') }}"
          alt="Shape"
        />

        <div class="work-icon">
          <i class="flaticon-forms"></i>
        </div>
        <div class="work-content">
          <h3 class="title">Book A Seat</h3>
          <p>
            It has survived not only centurie also leap into electronic.
          </p>
        </div>
      </div>
      <!-- Single Work End -->

      <!-- Single Work Start -->
      <div class="work-arrow">
        <img
          class="arrow"
          src="{{ asset('assets/images/shape/shape-17.png') }}"
          alt="Shape"
        />
      </div>
      <!-- Single Work End -->

      <!-- Single Work Start -->
      <div class="single-work">
        <img
          class="shape-3"
          src="{{ asset('assets/images/shape/shape-16.png') }}"
          alt="Shape"
        />

        <div class="work-icon">
          <i class="flaticon-badge"></i>
        </div>
        <div class="work-content">
          <h3 class="title">Get Certificate</h3>
          <p>
            It has survived not only centurie also leap into electronic.
          </p>
        </div>
      </div>
      <!-- Single Work End -->
    </div>
  </div>
</div>
<!-- How It Work End -->

@endsection
