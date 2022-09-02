@extends('layouts.app')

@section('title', 'Learn')

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
                <li><a href="#">Home</a></li>
                <li class="active">Courses Details</li>
            </ul>
            <h2 class="title">Courses <span> Details</span></h2>
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

<!-- Courses Enroll Start -->
<div class="section section-padding mt-n10">
    <div class="container">
        <!-- Courses Enroll Wrapper Start -->
        <div class="courses-enroll-wrapper">

            <!-- Courses Video Player Start -->
            <div class="courses-video-player">

                <!-- Courses Video Container Start -->
                <div class="vidcontainer">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/{{ $content->body['id'] }}?autoplay=1&start=8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <!-- Courses Video Container End -->

                <!-- Courses Enroll Content Start -->
                <div class="courses-enroll-content">

                    <!-- Courses Enroll Title Start -->
                    <div class="courses-enroll-title">
                        <h2 class="title">
                            {{ $course->title }}
                        </h2>
                    </div>
                    <!-- Courses Enroll Title End -->
                </div>
                <!-- Courses Enroll Content End -->
            </div>
            <!-- Courses Video Player End -->

            <!-- Courses Video Playlist Start -->
            <div class="courses-video-playlist">
                <div class="playlist-title">
                    <h3 class="title">Course Content</h3>
                    <span>14 Lessons (8h 15m)</span>
                </div>

                <!-- Video Playlist Start  -->
                <div class="video-playlist">
                    <div class="accordion" id="videoPlaylist">
                        @foreach ($course->topics as $topic)
                        @if($topic->contents->count() == 0) @continue @endif
                        <!-- Accordion Items Start  -->
                        <div class="accordion-item">
                            <button 
                                class="collapsed" 
                                type="button" 
                                data-bs-toggle="collapse" 
                                data-bs-target="#collapse{{ $topic->id }}"
                            >
                                <p>{{ $topic->title }}</p>
                                {{-- <span class="total-duration">01 hour 48 minutes</span> --}}
                            </button>

                            <div 
                                id="collapse{{ $topic->id }}"
                                class="accordion-collapse collapse {{ $active_topic_id == $topic->id ? 'show' : '' }}" 
                                data-bs-parent="#videoPlaylist"
                            >
                                <nav class="vids">
                                    @foreach ($topic->contents as $content)
                                    <a class="{{ $active_content_id == $content->id ? 'active' : '' }}" href="{{ route('courses.learn', [$course->id, $content->id]) }}">
                                        <p>{{ $content->title }}</p>
                                        <span class="total-duration">08 minutes</span>
                                    </a>
                                    @endforeach
                                </nav>
                            </div>
                        </div>
                        <!-- Accordion Items End  -->
                        @endforeach
                    </div>
                </div>
                <!-- Video Playlist End  -->

            </div>
            <!-- Courses Video Playlist End -->

        </div>
        <!-- Courses Enroll Wrapper End -->
    </div>
</div>
<!-- Courses Enroll End -->
@endsection