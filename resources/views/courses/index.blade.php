@extends('layouts.app')

@section('title', 'Courses')

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
                <li class="active">Courses</li>
            </ul>
            <h2 class="title">Our <span>Courses</span></h2>
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

<!-- All Courses Start -->
<div class="section section-padding-02">
  <div class="container">
    <!-- All Courses Top Start -->
    <div class="courses-top">
      <!-- Section Title Start -->
      <div class="section-title shape-01">
        <h2 class="main-title">All <span>Courses</span> of CIAS</h2>
      </div>
      <!-- Section Title End -->

      <!-- Courses Search Start -->
      <div class="courses-search">
        <form action="#">
          <input type="text" placeholder="Search your course" />
          <button><i class="flaticon-magnifying-glass"></i></button>
        </form>
      </div>
      <!-- Courses Search End -->
    </div>
    <!-- All Courses Top End -->

    <!-- All Courses Tabs Menu Start -->
    <div class="courses-tabs-menu courses-active">
      <div class="swiper-container">
        <ul class="swiper-wrapper nav">
          @foreach ($categories as $category)
          <li class="swiper-slide">
            <button
              class="{{ $loop->first ? 'active' : '' }}"
              data-bs-toggle="tab"
              data-bs-target="#tabs{{ $loop->iteration }}"
            >
              {{ $category->name }}
            </button>
          </li>
          @endforeach
          {{-- <li class="swiper-slide">
            <button
              class="active"
              data-bs-toggle="tab"
              data-bs-target="#tabs1"
            >
              UI/UX Design
            </button>
          </li>
          <li class="swiper-slide">
            <button data-bs-toggle="tab" data-bs-target="#tabs2">
              Development
            </button>
          </li>
          <li class="swiper-slide">
            <button data-bs-toggle="tab" data-bs-target="#tabs3">
              Data Science
            </button>
          </li>
          <li class="swiper-slide">
            <button data-bs-toggle="tab" data-bs-target="#tabs4">
              Business
            </button>
          </li>
          <li class="swiper-slide">
            <button data-bs-toggle="tab" data-bs-target="#tabs5">
              Financial
            </button>
          </li>
          <li class="swiper-slide">
            <button data-bs-toggle="tab" data-bs-target="#tabs6">
              Marketing
            </button>
          </li>
          <li class="swiper-slide">
            <button data-bs-toggle="tab" data-bs-target="#tabs7">
              Design
            </button>
          </li> --}}
        </ul>
      </div>

      <!-- Add Pagination -->
      <div class="swiper-button-next">
        <i class="icofont-rounded-right"></i>
      </div>
      <div class="swiper-button-prev">
        <i class="icofont-rounded-left"></i>
      </div>
    </div>
    <!-- All Courses Tabs Menu End -->

    <!-- All Courses tab content Start -->
    <div class="tab-content courses-tab-content">
      <div class="tab-pane fade show active" id="tabs1">
        <!-- All Courses Wrapper Start -->
        <div class="courses-wrapper">
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
                        <a class="name" href="#">Hasanul Bari</a>
                      </div>
                    </div>
                    <div class="tag">
                      <a href="#">Science</a>
                    </div>
                  </div>

                  <h4 class="title">
                    <a href="{{ route('courses.show', 1) }}"
                      >Data Science and Machine Learning with Python -
                      Hands On!</a
                    >
                  </h4>
                  <div class="courses-meta">
                    <span>
                      <i class="icofont-clock-time"></i> 08 hr 15
                      mins</span
                    >
                    <span>
                      <i class="icofont-read-book"></i> 29 Lectures
                    </span>
                  </div>
                  <div class="courses-price-review">
                    <div class="courses-price">
                      <span class="sale-parice">৳385</span>
                      <span class="old-parice">৳440</span>
                    </div>
                    <div class="courses-review">
                      <span class="rating-count">4.9</span>
                      <span class="rating-star">
                        <span
                          class="rating-bar"
                          style="width: 80%"
                        ></span>
                      </span>
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
                        <a class="name" href="#">Mahdi bin Imdad</a>
                      </div>
                    </div>
                    <div class="tag">
                      <a href="#">Science</a>
                    </div>
                  </div>

                  <h4 class="title">
                    <a href="{{ route('courses.show', 1) }}"
                      >Create Amazing Color Schemes for Your UX Design
                      Projects</a
                    >
                  </h4>
                  <div class="courses-meta">
                    <span>
                      <i class="icofont-clock-time"></i> 08 hr 15
                      mins</span
                    >
                    <span>
                      <i class="icofont-read-book"></i> 29 Lectures
                    </span>
                  </div>
                  <div class="courses-price-review">
                    <div class="courses-price">
                      <span class="sale-parice">৳420</span>
                    </div>
                    <div class="courses-review">
                      <span class="rating-count">4.9</span>
                      <span class="rating-star">
                        <span
                          class="rating-bar"
                          style="width: 80%"
                        ></span>
                      </span>
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
                        <a class="name" href="#">Mahdi</a>
                      </div>
                    </div>
                    <div class="tag">
                      <a href="#">Science</a>
                    </div>
                  </div>

                  <h4 class="title">
                    <a href="{{ route('courses.show', 1) }}"
                      >Culture & Leadership: Strategies for a Successful
                      Business</a
                    >
                  </h4>
                  <div class="courses-meta">
                    <span>
                      <i class="icofont-clock-time"></i> 08 hr 15
                      mins</span
                    >
                    <span>
                      <i class="icofont-read-book"></i> 29 Lectures
                    </span>
                  </div>
                  <div class="courses-price-review">
                    <div class="courses-price">
                      <span class="sale-parice">৳295</span>
                      <span class="old-parice">৳340</span>
                    </div>
                    <div class="courses-review">
                      <span class="rating-count">4.9</span>
                      <span class="rating-star">
                        <span
                          class="rating-bar"
                          style="width: 80%"
                        ></span>
                      </span>
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
                        <a class="name" href="#">Hasanul Bari</a>
                      </div>
                    </div>
                    <div class="tag">
                      <a href="#">Finance</a>
                    </div>
                  </div>

                  <h4 class="title">
                    <a href="{{ route('courses.show', 1) }}"
                      >Finance Series: Learn to Budget and Calculate your
                      Net Worth.</a
                    >
                  </h4>
                  <div class="courses-meta">
                    <span>
                      <i class="icofont-clock-time"></i> 08 hr 15
                      mins</span
                    >
                    <span>
                      <i class="icofont-read-book"></i> 29 Lectures
                    </span>
                  </div>
                  <div class="courses-price-review">
                    <div class="courses-price">
                      <span class="sale-parice">Free</span>
                    </div>
                    <div class="courses-review">
                      <span class="rating-count">4.9</span>
                      <span class="rating-star">
                        <span
                          class="rating-bar"
                          style="width: 80%"
                        ></span>
                      </span>
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
                        <a class="name" href="#">Hasanul Bari</a>
                      </div>
                    </div>
                    <div class="tag">
                      <a href="#">Marketing</a>
                    </div>
                  </div>

                  <h4 class="title">
                    <a href="{{ route('courses.show', 1) }}"
                      >Build Brand Into Marketing: Tackling the New
                      Marketing Landscape</a
                    >
                  </h4>
                  <div class="courses-meta">
                    <span>
                      <i class="icofont-clock-time"></i> 08 hr 15
                      mins</span
                    >
                    <span>
                      <i class="icofont-read-book"></i> 29 Lectures
                    </span>
                  </div>
                  <div class="courses-price-review">
                    <div class="courses-price">
                      <span class="sale-parice">৳136</span>
                    </div>
                    <div class="courses-review">
                      <span class="rating-count">4.9</span>
                      <span class="rating-star">
                        <span
                          class="rating-bar"
                          style="width: 80%"
                        ></span>
                      </span>
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
                      src="{{ asset('assets/images/courses/courses-06.jpg') }}"
                      alt="Courses"
                  /></a>
                </div>
                <div class="courses-content">
                  <div class="courses-author">
                    <div class="author">
                      <div class="author-thumb">
                        <a href="#"
                          ><img
                            src="{{ asset('assets/images/author/author-06.jpg') }}"
                            alt="Author"
                        /></a>
                      </div>
                      <div class="author-name">
                        <a class="name" href="#">Hasanul Bari</a>
                      </div>
                    </div>
                    <div class="tag">
                      <a href="#">Design</a>
                    </div>
                  </div>

                  <h4 class="title">
                    <a href="{{ route('courses.show', 1) }}"
                      >Graphic Design: Illustrating Badges and Icons with
                      Geometric Shapes</a
                    >
                  </h4>
                  <div class="courses-meta">
                    <span>
                      <i class="icofont-clock-time"></i> 08 hr 15
                      mins</span
                    >
                    <span>
                      <i class="icofont-read-book"></i> 29 Lectures
                    </span>
                  </div>
                  <div class="courses-price-review">
                    <div class="courses-price">
                      <span class="sale-parice">৳237</span>
                    </div>
                    <div class="courses-review">
                      <span class="rating-count">4.9</span>
                      <span class="rating-star">
                        <span
                          class="rating-bar"
                          style="width: 80%"
                        ></span>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Single Courses End -->
            </div>
          </div>
        </div>
        <!-- All Courses Wrapper End -->
      </div>
      <div class="tab-pane fade" id="tabs2">
        <!-- All Courses Wrapper Start -->
        <div class="courses-wrapper">
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <!-- Single Courses Start -->
              <div class="single-courses">
                <div class="courses-images">
                  <a href="{{ route('courses.show', 1) }}"
                    ><img
                      src="{{ asset('assets/images/courses/courses-02.jpg') }}"
                      alt="Courses"
                  /></a>
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
                        <a class="name" href="#">Hasanul Bari</a>
                      </div>
                    </div>
                    <div class="tag">
                      <a href="#">Science</a>
                    </div>
                  </div>

                  <h4 class="title">
                    <a href="{{ route('courses.show', 1) }}"
                      >Data Science and Machine Learning with Python -
                      Hands On!</a
                    >
                  </h4>
                  <div class="courses-meta">
                    <span>
                      <i class="icofont-clock-time"></i> 08 hr 15
                      mins</span
                    >
                    <span>
                      <i class="icofont-read-book"></i> 29 Lectures
                    </span>
                  </div>
                  <div class="courses-price-review">
                    <div class="courses-price">
                      <span class="sale-parice">৳385</span>
                      <span class="old-parice">৳440</span>
                    </div>
                    <div class="courses-review">
                      <span class="rating-count">4.9</span>
                      <span class="rating-star">
                        <span
                          class="rating-bar"
                          style="width: 80%"
                        ></span>
                      </span>
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
                        <a class="name" href="#">Mahdi bin Imdad</a>
                      </div>
                    </div>
                    <div class="tag">
                      <a href="#">Science</a>
                    </div>
                  </div>

                  <h4 class="title">
                    <a href="{{ route('courses.show', 1) }}"
                      >Create Amazing Color Schemes for Your UX Design
                      Projects</a
                    >
                  </h4>
                  <div class="courses-meta">
                    <span>
                      <i class="icofont-clock-time"></i> 08 hr 15
                      mins</span
                    >
                    <span>
                      <i class="icofont-read-book"></i> 29 Lectures
                    </span>
                  </div>
                  <div class="courses-price-review">
                    <div class="courses-price">
                      <span class="sale-parice">৳420</span>
                    </div>
                    <div class="courses-review">
                      <span class="rating-count">4.9</span>
                      <span class="rating-star">
                        <span
                          class="rating-bar"
                          style="width: 80%"
                        ></span>
                      </span>
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
                      src="{{ asset('assets/images/courses/courses-01.jpg') }}"
                      alt="Courses"
                  /></a>
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
                        <a class="name" href="#">Mahdi</a>
                      </div>
                    </div>
                    <div class="tag">
                      <a href="#">Science</a>
                    </div>
                  </div>

                  <h4 class="title">
                    <a href="{{ route('courses.show', 1) }}"
                      >Culture & Leadership: Strategies for a Successful
                      Business</a
                    >
                  </h4>
                  <div class="courses-meta">
                    <span>
                      <i class="icofont-clock-time"></i> 08 hr 15
                      mins</span
                    >
                    <span>
                      <i class="icofont-read-book"></i> 29 Lectures
                    </span>
                  </div>
                  <div class="courses-price-review">
                    <div class="courses-price">
                      <span class="sale-parice">৳295</span>
                      <span class="old-parice">৳340</span>
                    </div>
                    <div class="courses-review">
                      <span class="rating-count">4.9</span>
                      <span class="rating-star">
                        <span
                          class="rating-bar"
                          style="width: 80%"
                        ></span>
                      </span>
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
                        <a class="name" href="#">Hasanul Bari</a>
                      </div>
                    </div>
                    <div class="tag">
                      <a href="#">Finance</a>
                    </div>
                  </div>

                  <h4 class="title">
                    <a href="{{ route('courses.show', 1) }}"
                      >Finance Series: Learn to Budget and Calculate your
                      Net Worth.</a
                    >
                  </h4>
                  <div class="courses-meta">
                    <span>
                      <i class="icofont-clock-time"></i> 08 hr 15
                      mins</span
                    >
                    <span>
                      <i class="icofont-read-book"></i> 29 Lectures
                    </span>
                  </div>
                  <div class="courses-price-review">
                    <div class="courses-price">
                      <span class="sale-parice">Free</span>
                    </div>
                    <div class="courses-review">
                      <span class="rating-count">4.9</span>
                      <span class="rating-star">
                        <span
                          class="rating-bar"
                          style="width: 80%"
                        ></span>
                      </span>
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
                      src="{{ asset('assets/images/courses/courses-06.jpg') }}"
                      alt="Courses"
                  /></a>
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
                        <a class="name" href="#">Hasanul Bari</a>
                      </div>
                    </div>
                    <div class="tag">
                      <a href="#">Marketing</a>
                    </div>
                  </div>

                  <h4 class="title">
                    <a href="{{ route('courses.show', 1) }}"
                      >Build Brand Into Marketing: Tackling the New
                      Marketing Landscape</a
                    >
                  </h4>
                  <div class="courses-meta">
                    <span>
                      <i class="icofont-clock-time"></i> 08 hr 15
                      mins</span
                    >
                    <span>
                      <i class="icofont-read-book"></i> 29 Lectures
                    </span>
                  </div>
                  <div class="courses-price-review">
                    <div class="courses-price">
                      <span class="sale-parice">৳136</span>
                    </div>
                    <div class="courses-review">
                      <span class="rating-count">4.9</span>
                      <span class="rating-star">
                        <span
                          class="rating-bar"
                          style="width: 80%"
                        ></span>
                      </span>
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
                </div>
                <div class="courses-content">
                  <div class="courses-author">
                    <div class="author">
                      <div class="author-thumb">
                        <a href="#"
                          ><img
                            src="{{ asset('assets/images/author/author-06.jpg') }}"
                            alt="Author"
                        /></a>
                      </div>
                      <div class="author-name">
                        <a class="name" href="#">Hasanul Bari</a>
                      </div>
                    </div>
                    <div class="tag">
                      <a href="#">Design</a>
                    </div>
                  </div>

                  <h4 class="title">
                    <a href="{{ route('courses.show', 1) }}"
                      >Graphic Design: Illustrating Badges and Icons with
                      Geometric Shapes</a
                    >
                  </h4>
                  <div class="courses-meta">
                    <span>
                      <i class="icofont-clock-time"></i> 08 hr 15
                      mins</span
                    >
                    <span>
                      <i class="icofont-read-book"></i> 29 Lectures
                    </span>
                  </div>
                  <div class="courses-price-review">
                    <div class="courses-price">
                      <span class="sale-parice">৳237</span>
                    </div>
                    <div class="courses-review">
                      <span class="rating-count">4.9</span>
                      <span class="rating-star">
                        <span
                          class="rating-bar"
                          style="width: 80%"
                        ></span>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Single Courses End -->
            </div>
          </div>
        </div>
        <!-- All Courses Wrapper End -->
      </div>
      <div class="tab-pane fade" id="tabs3">
        <!-- All Courses Wrapper Start -->
        <div class="courses-wrapper">
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <!-- Single Courses Start -->
              <div class="single-courses">
                <div class="courses-images">
                  <a href="{{ route('courses.show', 1) }}"
                    ><img
                      src="{{ asset('assets/images/courses/courses-05.jpg') }}"
                      alt="Courses"
                  /></a>
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
                        <a class="name" href="#">Hasanul Bari</a>
                      </div>
                    </div>
                    <div class="tag">
                      <a href="#">Science</a>
                    </div>
                  </div>

                  <h4 class="title">
                    <a href="{{ route('courses.show', 1) }}"
                      >Data Science and Machine Learning with Python -
                      Hands On!</a
                    >
                  </h4>
                  <div class="courses-meta">
                    <span>
                      <i class="icofont-clock-time"></i> 08 hr 15
                      mins</span
                    >
                    <span>
                      <i class="icofont-read-book"></i> 29 Lectures
                    </span>
                  </div>
                  <div class="courses-price-review">
                    <div class="courses-price">
                      <span class="sale-parice">৳385</span>
                      <span class="old-parice">৳440</span>
                    </div>
                    <div class="courses-review">
                      <span class="rating-count">4.9</span>
                      <span class="rating-star">
                        <span
                          class="rating-bar"
                          style="width: 80%"
                        ></span>
                      </span>
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
                      src="{{ asset('assets/images/courses/courses-06.jpg') }}"
                      alt="Courses"
                  /></a>
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
                        <a class="name" href="#">Mahdi bin Imdad</a>
                      </div>
                    </div>
                    <div class="tag">
                      <a href="#">Science</a>
                    </div>
                  </div>

                  <h4 class="title">
                    <a href="{{ route('courses.show', 1) }}"
                      >Create Amazing Color Schemes for Your UX Design
                      Projects</a
                    >
                  </h4>
                  <div class="courses-meta">
                    <span>
                      <i class="icofont-clock-time"></i> 08 hr 15
                      mins</span
                    >
                    <span>
                      <i class="icofont-read-book"></i> 29 Lectures
                    </span>
                  </div>
                  <div class="courses-price-review">
                    <div class="courses-price">
                      <span class="sale-parice">৳420</span>
                    </div>
                    <div class="courses-review">
                      <span class="rating-count">4.9</span>
                      <span class="rating-star">
                        <span
                          class="rating-bar"
                          style="width: 80%"
                        ></span>
                      </span>
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
                        <a class="name" href="#">Mahdi</a>
                      </div>
                    </div>
                    <div class="tag">
                      <a href="#">Science</a>
                    </div>
                  </div>

                  <h4 class="title">
                    <a href="{{ route('courses.show', 1) }}"
                      >Culture & Leadership: Strategies for a Successful
                      Business</a
                    >
                  </h4>
                  <div class="courses-meta">
                    <span>
                      <i class="icofont-clock-time"></i> 08 hr 15
                      mins</span
                    >
                    <span>
                      <i class="icofont-read-book"></i> 29 Lectures
                    </span>
                  </div>
                  <div class="courses-price-review">
                    <div class="courses-price">
                      <span class="sale-parice">৳295</span>
                      <span class="old-parice">৳340</span>
                    </div>
                    <div class="courses-review">
                      <span class="rating-count">4.9</span>
                      <span class="rating-star">
                        <span
                          class="rating-bar"
                          style="width: 80%"
                        ></span>
                      </span>
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
                      src="{{ asset('assets/images/courses/courses-01.jpg') }}"
                      alt="Courses"
                  /></a>
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
                        <a class="name" href="#">Hasanul Bari</a>
                      </div>
                    </div>
                    <div class="tag">
                      <a href="#">Finance</a>
                    </div>
                  </div>

                  <h4 class="title">
                    <a href="{{ route('courses.show', 1) }}"
                      >Finance Series: Learn to Budget and Calculate your
                      Net Worth.</a
                    >
                  </h4>
                  <div class="courses-meta">
                    <span>
                      <i class="icofont-clock-time"></i> 08 hr 15
                      mins</span
                    >
                    <span>
                      <i class="icofont-read-book"></i> 29 Lectures
                    </span>
                  </div>
                  <div class="courses-price-review">
                    <div class="courses-price">
                      <span class="sale-parice">Free</span>
                    </div>
                    <div class="courses-review">
                      <span class="rating-count">4.9</span>
                      <span class="rating-star">
                        <span
                          class="rating-bar"
                          style="width: 80%"
                        ></span>
                      </span>
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
                        <a class="name" href="#">Hasanul Bari</a>
                      </div>
                    </div>
                    <div class="tag">
                      <a href="#">Marketing</a>
                    </div>
                  </div>

                  <h4 class="title">
                    <a href="{{ route('courses.show', 1) }}"
                      >Build Brand Into Marketing: Tackling the New
                      Marketing Landscape</a
                    >
                  </h4>
                  <div class="courses-meta">
                    <span>
                      <i class="icofont-clock-time"></i> 08 hr 15
                      mins</span
                    >
                    <span>
                      <i class="icofont-read-book"></i> 29 Lectures
                    </span>
                  </div>
                  <div class="courses-price-review">
                    <div class="courses-price">
                      <span class="sale-parice">৳136</span>
                    </div>
                    <div class="courses-review">
                      <span class="rating-count">4.9</span>
                      <span class="rating-star">
                        <span
                          class="rating-bar"
                          style="width: 80%"
                        ></span>
                      </span>
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
                </div>
                <div class="courses-content">
                  <div class="courses-author">
                    <div class="author">
                      <div class="author-thumb">
                        <a href="#"
                          ><img
                            src="{{ asset('assets/images/author/author-06.jpg') }}"
                            alt="Author"
                        /></a>
                      </div>
                      <div class="author-name">
                        <a class="name" href="#">Hasanul Bari</a>
                      </div>
                    </div>
                    <div class="tag">
                      <a href="#">Design</a>
                    </div>
                  </div>

                  <h4 class="title">
                    <a href="{{ route('courses.show', 1) }}"
                      >Graphic Design: Illustrating Badges and Icons with
                      Geometric Shapes</a
                    >
                  </h4>
                  <div class="courses-meta">
                    <span>
                      <i class="icofont-clock-time"></i> 08 hr 15
                      mins</span
                    >
                    <span>
                      <i class="icofont-read-book"></i> 29 Lectures
                    </span>
                  </div>
                  <div class="courses-price-review">
                    <div class="courses-price">
                      <span class="sale-parice">৳237</span>
                    </div>
                    <div class="courses-review">
                      <span class="rating-count">4.9</span>
                      <span class="rating-star">
                        <span
                          class="rating-bar"
                          style="width: 80%"
                        ></span>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Single Courses End -->
            </div>
          </div>
        </div>
        <!-- All Courses Wrapper End -->
      </div>
      <div class="tab-pane fade" id="tabs4">
        <!-- All Courses Wrapper Start -->
        <div class="courses-wrapper">
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <!-- Single Courses Start -->
              <div class="single-courses">
                <div class="courses-images">
                  <a href="{{ route('courses.show', 1) }}"
                    ><img
                      src="{{ asset('assets/images/courses/courses-06.jpg') }}"
                      alt="Courses"
                  /></a>
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
                        <a class="name" href="#">Hasanul Bari</a>
                      </div>
                    </div>
                    <div class="tag">
                      <a href="#">Science</a>
                    </div>
                  </div>

                  <h4 class="title">
                    <a href="{{ route('courses.show', 1) }}"
                      >Data Science and Machine Learning with Python -
                      Hands On!</a
                    >
                  </h4>
                  <div class="courses-meta">
                    <span>
                      <i class="icofont-clock-time"></i> 08 hr 15
                      mins</span
                    >
                    <span>
                      <i class="icofont-read-book"></i> 29 Lectures
                    </span>
                  </div>
                  <div class="courses-price-review">
                    <div class="courses-price">
                      <span class="sale-parice">৳385</span>
                      <span class="old-parice">৳440</span>
                    </div>
                    <div class="courses-review">
                      <span class="rating-count">4.9</span>
                      <span class="rating-star">
                        <span
                          class="rating-bar"
                          style="width: 80%"
                        ></span>
                      </span>
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
                        <a class="name" href="#">Mahdi bin Imdad</a>
                      </div>
                    </div>
                    <div class="tag">
                      <a href="#">Science</a>
                    </div>
                  </div>

                  <h4 class="title">
                    <a href="{{ route('courses.show', 1) }}"
                      >Create Amazing Color Schemes for Your UX Design
                      Projects</a
                    >
                  </h4>
                  <div class="courses-meta">
                    <span>
                      <i class="icofont-clock-time"></i> 08 hr 15
                      mins</span
                    >
                    <span>
                      <i class="icofont-read-book"></i> 29 Lectures
                    </span>
                  </div>
                  <div class="courses-price-review">
                    <div class="courses-price">
                      <span class="sale-parice">৳420</span>
                    </div>
                    <div class="courses-review">
                      <span class="rating-count">4.9</span>
                      <span class="rating-star">
                        <span
                          class="rating-bar"
                          style="width: 80%"
                        ></span>
                      </span>
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
                        <a class="name" href="#">Mahdi</a>
                      </div>
                    </div>
                    <div class="tag">
                      <a href="#">Science</a>
                    </div>
                  </div>

                  <h4 class="title">
                    <a href="{{ route('courses.show', 1) }}"
                      >Culture & Leadership: Strategies for a Successful
                      Business</a
                    >
                  </h4>
                  <div class="courses-meta">
                    <span>
                      <i class="icofont-clock-time"></i> 08 hr 15
                      mins</span
                    >
                    <span>
                      <i class="icofont-read-book"></i> 29 Lectures
                    </span>
                  </div>
                  <div class="courses-price-review">
                    <div class="courses-price">
                      <span class="sale-parice">৳295</span>
                      <span class="old-parice">৳340</span>
                    </div>
                    <div class="courses-review">
                      <span class="rating-count">4.9</span>
                      <span class="rating-star">
                        <span
                          class="rating-bar"
                          style="width: 80%"
                        ></span>
                      </span>
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
                        <a class="name" href="#">Hasanul Bari</a>
                      </div>
                    </div>
                    <div class="tag">
                      <a href="#">Finance</a>
                    </div>
                  </div>

                  <h4 class="title">
                    <a href="{{ route('courses.show', 1) }}"
                      >Finance Series: Learn to Budget and Calculate your
                      Net Worth.</a
                    >
                  </h4>
                  <div class="courses-meta">
                    <span>
                      <i class="icofont-clock-time"></i> 08 hr 15
                      mins</span
                    >
                    <span>
                      <i class="icofont-read-book"></i> 29 Lectures
                    </span>
                  </div>
                  <div class="courses-price-review">
                    <div class="courses-price">
                      <span class="sale-parice">Free</span>
                    </div>
                    <div class="courses-review">
                      <span class="rating-count">4.9</span>
                      <span class="rating-star">
                        <span
                          class="rating-bar"
                          style="width: 80%"
                        ></span>
                      </span>
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
                        <a class="name" href="#">Hasanul Bari</a>
                      </div>
                    </div>
                    <div class="tag">
                      <a href="#">Marketing</a>
                    </div>
                  </div>

                  <h4 class="title">
                    <a href="{{ route('courses.show', 1) }}"
                      >Build Brand Into Marketing: Tackling the New
                      Marketing Landscape</a
                    >
                  </h4>
                  <div class="courses-meta">
                    <span>
                      <i class="icofont-clock-time"></i> 08 hr 15
                      mins</span
                    >
                    <span>
                      <i class="icofont-read-book"></i> 29 Lectures
                    </span>
                  </div>
                  <div class="courses-price-review">
                    <div class="courses-price">
                      <span class="sale-parice">৳136</span>
                    </div>
                    <div class="courses-review">
                      <span class="rating-count">4.9</span>
                      <span class="rating-star">
                        <span
                          class="rating-bar"
                          style="width: 80%"
                        ></span>
                      </span>
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
                      src="{{ asset('assets/images/courses/courses-01.jpg') }}"
                      alt="Courses"
                  /></a>
                </div>
                <div class="courses-content">
                  <div class="courses-author">
                    <div class="author">
                      <div class="author-thumb">
                        <a href="#"
                          ><img
                            src="{{ asset('assets/images/author/author-06.jpg') }}"
                            alt="Author"
                        /></a>
                      </div>
                      <div class="author-name">
                        <a class="name" href="#">Hasanul Bari</a>
                      </div>
                    </div>
                    <div class="tag">
                      <a href="#">Design</a>
                    </div>
                  </div>

                  <h4 class="title">
                    <a href="{{ route('courses.show', 1) }}"
                      >Graphic Design: Illustrating Badges and Icons with
                      Geometric Shapes</a
                    >
                  </h4>
                  <div class="courses-meta">
                    <span>
                      <i class="icofont-clock-time"></i> 08 hr 15
                      mins</span
                    >
                    <span>
                      <i class="icofont-read-book"></i> 29 Lectures
                    </span>
                  </div>
                  <div class="courses-price-review">
                    <div class="courses-price">
                      <span class="sale-parice">৳237</span>
                    </div>
                    <div class="courses-review">
                      <span class="rating-count">4.9</span>
                      <span class="rating-star">
                        <span
                          class="rating-bar"
                          style="width: 80%"
                        ></span>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Single Courses End -->
            </div>
          </div>
        </div>
        <!-- All Courses Wrapper End -->
      </div>
      <div class="tab-pane fade" id="tabs5">
        <!-- All Courses Wrapper Start -->
        <div class="courses-wrapper">
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <!-- Single Courses Start -->
              <div class="single-courses">
                <div class="courses-images">
                  <a href="{{ route('courses.show', 1) }}"
                    ><img
                      src="{{ asset('assets/images/courses/courses-03.jpg') }}"
                      alt="Courses"
                  /></a>
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
                        <a class="name" href="#">Hasanul Bari</a>
                      </div>
                    </div>
                    <div class="tag">
                      <a href="#">Science</a>
                    </div>
                  </div>

                  <h4 class="title">
                    <a href="{{ route('courses.show', 1) }}"
                      >Data Science and Machine Learning with Python -
                      Hands On!</a
                    >
                  </h4>
                  <div class="courses-meta">
                    <span>
                      <i class="icofont-clock-time"></i> 08 hr 15
                      mins</span
                    >
                    <span>
                      <i class="icofont-read-book"></i> 29 Lectures
                    </span>
                  </div>
                  <div class="courses-price-review">
                    <div class="courses-price">
                      <span class="sale-parice">৳385</span>
                      <span class="old-parice">৳440</span>
                    </div>
                    <div class="courses-review">
                      <span class="rating-count">4.9</span>
                      <span class="rating-star">
                        <span
                          class="rating-bar"
                          style="width: 80%"
                        ></span>
                      </span>
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
                        <a class="name" href="#">Mahdi bin Imdad</a>
                      </div>
                    </div>
                    <div class="tag">
                      <a href="#">Science</a>
                    </div>
                  </div>

                  <h4 class="title">
                    <a href="{{ route('courses.show', 1) }}"
                      >Create Amazing Color Schemes for Your UX Design
                      Projects</a
                    >
                  </h4>
                  <div class="courses-meta">
                    <span>
                      <i class="icofont-clock-time"></i> 08 hr 15
                      mins</span
                    >
                    <span>
                      <i class="icofont-read-book"></i> 29 Lectures
                    </span>
                  </div>
                  <div class="courses-price-review">
                    <div class="courses-price">
                      <span class="sale-parice">৳420</span>
                    </div>
                    <div class="courses-review">
                      <span class="rating-count">4.9</span>
                      <span class="rating-star">
                        <span
                          class="rating-bar"
                          style="width: 80%"
                        ></span>
                      </span>
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
                      src="{{ asset('assets/images/courses/courses-01.jpg') }}"
                      alt="Courses"
                  /></a>
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
                        <a class="name" href="#">Mahdi</a>
                      </div>
                    </div>
                    <div class="tag">
                      <a href="#">Science</a>
                    </div>
                  </div>

                  <h4 class="title">
                    <a href="{{ route('courses.show', 1) }}"
                      >Culture & Leadership: Strategies for a Successful
                      Business</a
                    >
                  </h4>
                  <div class="courses-meta">
                    <span>
                      <i class="icofont-clock-time"></i> 08 hr 15
                      mins</span
                    >
                    <span>
                      <i class="icofont-read-book"></i> 29 Lectures
                    </span>
                  </div>
                  <div class="courses-price-review">
                    <div class="courses-price">
                      <span class="sale-parice">৳295</span>
                      <span class="old-parice">৳340</span>
                    </div>
                    <div class="courses-review">
                      <span class="rating-count">4.9</span>
                      <span class="rating-star">
                        <span
                          class="rating-bar"
                          style="width: 80%"
                        ></span>
                      </span>
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
                      src="{{ asset('assets/images/courses/courses-06.jpg') }}"
                      alt="Courses"
                  /></a>
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
                        <a class="name" href="#">Hasanul Bari</a>
                      </div>
                    </div>
                    <div class="tag">
                      <a href="#">Finance</a>
                    </div>
                  </div>

                  <h4 class="title">
                    <a href="{{ route('courses.show', 1) }}"
                      >Finance Series: Learn to Budget and Calculate your
                      Net Worth.</a
                    >
                  </h4>
                  <div class="courses-meta">
                    <span>
                      <i class="icofont-clock-time"></i> 08 hr 15
                      mins</span
                    >
                    <span>
                      <i class="icofont-read-book"></i> 29 Lectures
                    </span>
                  </div>
                  <div class="courses-price-review">
                    <div class="courses-price">
                      <span class="sale-parice">Free</span>
                    </div>
                    <div class="courses-review">
                      <span class="rating-count">4.9</span>
                      <span class="rating-star">
                        <span
                          class="rating-bar"
                          style="width: 80%"
                        ></span>
                      </span>
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
                        <a class="name" href="#">Hasanul Bari</a>
                      </div>
                    </div>
                    <div class="tag">
                      <a href="#">Marketing</a>
                    </div>
                  </div>

                  <h4 class="title">
                    <a href="{{ route('courses.show', 1) }}"
                      >Build Brand Into Marketing: Tackling the New
                      Marketing Landscape</a
                    >
                  </h4>
                  <div class="courses-meta">
                    <span>
                      <i class="icofont-clock-time"></i> 08 hr 15
                      mins</span
                    >
                    <span>
                      <i class="icofont-read-book"></i> 29 Lectures
                    </span>
                  </div>
                  <div class="courses-price-review">
                    <div class="courses-price">
                      <span class="sale-parice">৳136</span>
                    </div>
                    <div class="courses-review">
                      <span class="rating-count">4.9</span>
                      <span class="rating-star">
                        <span
                          class="rating-bar"
                          style="width: 80%"
                        ></span>
                      </span>
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
                </div>
                <div class="courses-content">
                  <div class="courses-author">
                    <div class="author">
                      <div class="author-thumb">
                        <a href="#"
                          ><img
                            src="{{ asset('assets/images/author/author-06.jpg') }}"
                            alt="Author"
                        /></a>
                      </div>
                      <div class="author-name">
                        <a class="name" href="#">Hasanul Bari</a>
                      </div>
                    </div>
                    <div class="tag">
                      <a href="#">Design</a>
                    </div>
                  </div>

                  <h4 class="title">
                    <a href="{{ route('courses.show', 1) }}"
                      >Graphic Design: Illustrating Badges and Icons with
                      Geometric Shapes</a
                    >
                  </h4>
                  <div class="courses-meta">
                    <span>
                      <i class="icofont-clock-time"></i> 08 hr 15
                      mins</span
                    >
                    <span>
                      <i class="icofont-read-book"></i> 29 Lectures
                    </span>
                  </div>
                  <div class="courses-price-review">
                    <div class="courses-price">
                      <span class="sale-parice">৳237</span>
                    </div>
                    <div class="courses-review">
                      <span class="rating-count">4.9</span>
                      <span class="rating-star">
                        <span
                          class="rating-bar"
                          style="width: 80%"
                        ></span>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Single Courses End -->
            </div>
          </div>
        </div>
        <!-- All Courses Wrapper End -->
      </div>
      <div class="tab-pane fade" id="tabs6">
        <!-- All Courses Wrapper Start -->
        <div class="courses-wrapper">
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <!-- Single Courses Start -->
              <div class="single-courses">
                <div class="courses-images">
                  <a href="{{ route('courses.show', 1) }}"
                    ><img
                      src="{{ asset('assets/images/courses/courses-03.jpg') }}"
                      alt="Courses"
                  /></a>
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
                        <a class="name" href="#">Hasanul Bari</a>
                      </div>
                    </div>
                    <div class="tag">
                      <a href="#">Science</a>
                    </div>
                  </div>

                  <h4 class="title">
                    <a href="{{ route('courses.show', 1) }}"
                      >Data Science and Machine Learning with Python -
                      Hands On!</a
                    >
                  </h4>
                  <div class="courses-meta">
                    <span>
                      <i class="icofont-clock-time"></i> 08 hr 15
                      mins</span
                    >
                    <span>
                      <i class="icofont-read-book"></i> 29 Lectures
                    </span>
                  </div>
                  <div class="courses-price-review">
                    <div class="courses-price">
                      <span class="sale-parice">৳385</span>
                      <span class="old-parice">৳440</span>
                    </div>
                    <div class="courses-review">
                      <span class="rating-count">4.9</span>
                      <span class="rating-star">
                        <span
                          class="rating-bar"
                          style="width: 80%"
                        ></span>
                      </span>
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
                        <a class="name" href="#">Mahdi bin Imdad</a>
                      </div>
                    </div>
                    <div class="tag">
                      <a href="#">Science</a>
                    </div>
                  </div>

                  <h4 class="title">
                    <a href="{{ route('courses.show', 1) }}"
                      >Create Amazing Color Schemes for Your UX Design
                      Projects</a
                    >
                  </h4>
                  <div class="courses-meta">
                    <span>
                      <i class="icofont-clock-time"></i> 08 hr 15
                      mins</span
                    >
                    <span>
                      <i class="icofont-read-book"></i> 29 Lectures
                    </span>
                  </div>
                  <div class="courses-price-review">
                    <div class="courses-price">
                      <span class="sale-parice">৳420</span>
                    </div>
                    <div class="courses-review">
                      <span class="rating-count">4.9</span>
                      <span class="rating-star">
                        <span
                          class="rating-bar"
                          style="width: 80%"
                        ></span>
                      </span>
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
                      src="{{ asset('assets/images/courses/courses-01.jpg') }}"
                      alt="Courses"
                  /></a>
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
                        <a class="name" href="#">Mahdi</a>
                      </div>
                    </div>
                    <div class="tag">
                      <a href="#">Science</a>
                    </div>
                  </div>

                  <h4 class="title">
                    <a href="{{ route('courses.show', 1) }}"
                      >Culture & Leadership: Strategies for a Successful
                      Business</a
                    >
                  </h4>
                  <div class="courses-meta">
                    <span>
                      <i class="icofont-clock-time"></i> 08 hr 15
                      mins</span
                    >
                    <span>
                      <i class="icofont-read-book"></i> 29 Lectures
                    </span>
                  </div>
                  <div class="courses-price-review">
                    <div class="courses-price">
                      <span class="sale-parice">৳295</span>
                      <span class="old-parice">৳340</span>
                    </div>
                    <div class="courses-review">
                      <span class="rating-count">4.9</span>
                      <span class="rating-star">
                        <span
                          class="rating-bar"
                          style="width: 80%"
                        ></span>
                      </span>
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
                        <a class="name" href="#">Hasanul Bari</a>
                      </div>
                    </div>
                    <div class="tag">
                      <a href="#">Finance</a>
                    </div>
                  </div>

                  <h4 class="title">
                    <a href="{{ route('courses.show', 1) }}"
                      >Finance Series: Learn to Budget and Calculate your
                      Net Worth.</a
                    >
                  </h4>
                  <div class="courses-meta">
                    <span>
                      <i class="icofont-clock-time"></i> 08 hr 15
                      mins</span
                    >
                    <span>
                      <i class="icofont-read-book"></i> 29 Lectures
                    </span>
                  </div>
                  <div class="courses-price-review">
                    <div class="courses-price">
                      <span class="sale-parice">Free</span>
                    </div>
                    <div class="courses-review">
                      <span class="rating-count">4.9</span>
                      <span class="rating-star">
                        <span
                          class="rating-bar"
                          style="width: 80%"
                        ></span>
                      </span>
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
                      src="{{ asset('assets/images/courses/courses-06.jpg') }}"
                      alt="Courses"
                  /></a>
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
                        <a class="name" href="#">Hasanul Bari</a>
                      </div>
                    </div>
                    <div class="tag">
                      <a href="#">Marketing</a>
                    </div>
                  </div>

                  <h4 class="title">
                    <a href="{{ route('courses.show', 1) }}"
                      >Build Brand Into Marketing: Tackling the New
                      Marketing Landscape</a
                    >
                  </h4>
                  <div class="courses-meta">
                    <span>
                      <i class="icofont-clock-time"></i> 08 hr 15
                      mins</span
                    >
                    <span>
                      <i class="icofont-read-book"></i> 29 Lectures
                    </span>
                  </div>
                  <div class="courses-price-review">
                    <div class="courses-price">
                      <span class="sale-parice">৳136</span>
                    </div>
                    <div class="courses-review">
                      <span class="rating-count">4.9</span>
                      <span class="rating-star">
                        <span
                          class="rating-bar"
                          style="width: 80%"
                        ></span>
                      </span>
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
                </div>
                <div class="courses-content">
                  <div class="courses-author">
                    <div class="author">
                      <div class="author-thumb">
                        <a href="#"
                          ><img
                            src="{{ asset('assets/images/author/author-06.jpg') }}"
                            alt="Author"
                        /></a>
                      </div>
                      <div class="author-name">
                        <a class="name" href="#">Hasanul Bari</a>
                      </div>
                    </div>
                    <div class="tag">
                      <a href="#">Design</a>
                    </div>
                  </div>

                  <h4 class="title">
                    <a href="{{ route('courses.show', 1) }}"
                      >Graphic Design: Illustrating Badges and Icons with
                      Geometric Shapes</a
                    >
                  </h4>
                  <div class="courses-meta">
                    <span>
                      <i class="icofont-clock-time"></i> 08 hr 15
                      mins</span
                    >
                    <span>
                      <i class="icofont-read-book"></i> 29 Lectures
                    </span>
                  </div>
                  <div class="courses-price-review">
                    <div class="courses-price">
                      <span class="sale-parice">৳237</span>
                    </div>
                    <div class="courses-review">
                      <span class="rating-count">4.9</span>
                      <span class="rating-star">
                        <span
                          class="rating-bar"
                          style="width: 80%"
                        ></span>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Single Courses End -->
            </div>
          </div>
        </div>
        <!-- All Courses Wrapper End -->
      </div>
      <div class="tab-pane fade" id="tabs7">
        <!-- All Courses Wrapper Start -->
        <div class="courses-wrapper">
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <!-- Single Courses Start -->
              <div class="single-courses">
                <div class="courses-images">
                  <a href="{{ route('courses.show', 1) }}"
                    ><img
                      src="{{ asset('assets/images/courses/courses-04.jpg') }}"
                      alt="Courses"
                  /></a>
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
                        <a class="name" href="#">Hasanul Bari</a>
                      </div>
                    </div>
                    <div class="tag">
                      <a href="#">Science</a>
                    </div>
                  </div>

                  <h4 class="title">
                    <a href="{{ route('courses.show', 1) }}"
                      >Data Science and Machine Learning with Python -
                      Hands On!</a
                    >
                  </h4>
                  <div class="courses-meta">
                    <span>
                      <i class="icofont-clock-time"></i> 08 hr 15
                      mins</span
                    >
                    <span>
                      <i class="icofont-read-book"></i> 29 Lectures
                    </span>
                  </div>
                  <div class="courses-price-review">
                    <div class="courses-price">
                      <span class="sale-parice">৳385</span>
                      <span class="old-parice">৳440</span>
                    </div>
                    <div class="courses-review">
                      <span class="rating-count">4.9</span>
                      <span class="rating-star">
                        <span
                          class="rating-bar"
                          style="width: 80%"
                        ></span>
                      </span>
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
                        <a class="name" href="#">Mahdi bin Imdad</a>
                      </div>
                    </div>
                    <div class="tag">
                      <a href="#">Science</a>
                    </div>
                  </div>

                  <h4 class="title">
                    <a href="{{ route('courses.show', 1) }}"
                      >Create Amazing Color Schemes for Your UX Design
                      Projects</a
                    >
                  </h4>
                  <div class="courses-meta">
                    <span>
                      <i class="icofont-clock-time"></i> 08 hr 15
                      mins</span
                    >
                    <span>
                      <i class="icofont-read-book"></i> 29 Lectures
                    </span>
                  </div>
                  <div class="courses-price-review">
                    <div class="courses-price">
                      <span class="sale-parice">৳420</span>
                    </div>
                    <div class="courses-review">
                      <span class="rating-count">4.9</span>
                      <span class="rating-star">
                        <span
                          class="rating-bar"
                          style="width: 80%"
                        ></span>
                      </span>
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
                      src="{{ asset('assets/images/courses/courses-06.jpg') }}"
                      alt="Courses"
                  /></a>
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
                        <a class="name" href="#">Mahdi</a>
                      </div>
                    </div>
                    <div class="tag">
                      <a href="#">Science</a>
                    </div>
                  </div>

                  <h4 class="title">
                    <a href="{{ route('courses.show', 1) }}"
                      >Culture & Leadership: Strategies for a Successful
                      Business</a
                    >
                  </h4>
                  <div class="courses-meta">
                    <span>
                      <i class="icofont-clock-time"></i> 08 hr 15
                      mins</span
                    >
                    <span>
                      <i class="icofont-read-book"></i> 29 Lectures
                    </span>
                  </div>
                  <div class="courses-price-review">
                    <div class="courses-price">
                      <span class="sale-parice">৳295</span>
                      <span class="old-parice">৳340</span>
                    </div>
                    <div class="courses-review">
                      <span class="rating-count">4.9</span>
                      <span class="rating-star">
                        <span
                          class="rating-bar"
                          style="width: 80%"
                        ></span>
                      </span>
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
                        <a class="name" href="#">Hasanul Bari</a>
                      </div>
                    </div>
                    <div class="tag">
                      <a href="#">Finance</a>
                    </div>
                  </div>

                  <h4 class="title">
                    <a href="{{ route('courses.show', 1) }}"
                      >Finance Series: Learn to Budget and Calculate your
                      Net Worth.</a
                    >
                  </h4>
                  <div class="courses-meta">
                    <span>
                      <i class="icofont-clock-time"></i> 08 hr 15
                      mins</span
                    >
                    <span>
                      <i class="icofont-read-book"></i> 29 Lectures
                    </span>
                  </div>
                  <div class="courses-price-review">
                    <div class="courses-price">
                      <span class="sale-parice">Free</span>
                    </div>
                    <div class="courses-review">
                      <span class="rating-count">4.9</span>
                      <span class="rating-star">
                        <span
                          class="rating-bar"
                          style="width: 80%"
                        ></span>
                      </span>
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
                      src="{{ asset('assets/images/courses/courses-01.jpg') }}"
                      alt="Courses"
                  /></a>
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
                        <a class="name" href="#">Hasanul Bari</a>
                      </div>
                    </div>
                    <div class="tag">
                      <a href="#">Marketing</a>
                    </div>
                  </div>

                  <h4 class="title">
                    <a href="{{ route('courses.show', 1) }}"
                      >Build Brand Into Marketing: Tackling the New
                      Marketing Landscape</a
                    >
                  </h4>
                  <div class="courses-meta">
                    <span>
                      <i class="icofont-clock-time"></i> 08 hr 15
                      mins</span
                    >
                    <span>
                      <i class="icofont-read-book"></i> 29 Lectures
                    </span>
                  </div>
                  <div class="courses-price-review">
                    <div class="courses-price">
                      <span class="sale-parice">৳136</span>
                    </div>
                    <div class="courses-review">
                      <span class="rating-count">4.9</span>
                      <span class="rating-star">
                        <span
                          class="rating-bar"
                          style="width: 80%"
                        ></span>
                      </span>
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
                </div>
                <div class="courses-content">
                  <div class="courses-author">
                    <div class="author">
                      <div class="author-thumb">
                        <a href="#"
                          ><img
                            src="{{ asset('assets/images/author/author-06.jpg') }}"
                            alt="Author"
                        /></a>
                      </div>
                      <div class="author-name">
                        <a class="name" href="#">Hasanul Bari</a>
                      </div>
                    </div>
                    <div class="tag">
                      <a href="#">Design</a>
                    </div>
                  </div>

                  <h4 class="title">
                    <a href="{{ route('courses.show', 1) }}"
                      >Graphic Design: Illustrating Badges and Icons with
                      Geometric Shapes</a
                    >
                  </h4>
                  <div class="courses-meta">
                    <span>
                      <i class="icofont-clock-time"></i> 08 hr 15
                      mins</span
                    >
                    <span>
                      <i class="icofont-read-book"></i> 29 Lectures
                    </span>
                  </div>
                  <div class="courses-price-review">
                    <div class="courses-price">
                      <span class="sale-parice">৳237</span>
                    </div>
                    <div class="courses-review">
                      <span class="rating-count">4.9</span>
                      <span class="rating-star">
                        <span
                          class="rating-bar"
                          style="width: 80%"
                        ></span>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Single Courses End -->
            </div>
          </div>
        </div>
        <!-- All Courses Wrapper End -->
      </div>
    </div>
    <!-- All Courses tab content End -->

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
  </div>
</div>
<!-- All Courses End -->

@endsection