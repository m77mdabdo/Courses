@extends('user.app.layout')

@section('content')

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>{{ $course->title }}</h2>
                            <p>Home <span>/</span> {{ $course->category->name ?? 'Uncategorized' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end-->

    <!--================ Start Course Details Area =================-->
    <section class="course_details_area section_padding">
        <div class="container">
            <div class="row">
                <!-- Left -->
                <div class="col-lg-8 course_details_left">
                    <div class="main_image">
                        <img class="img-fluid" src="{{ asset('storage/' . $course->image) }}" alt="{{ $course->title }}">
                    </div>
                    <div class="content_wrapper">
                        <h4 class="title_top">Title</h4>
                        <div class="content">
                            {!! nl2br(e($course->title)) !!}
                        </div>
                        <h4 class="title_top">Course Description</h4>
                        <div class="content">
                            {!! nl2br(e($course->desc)) !!}
                        </div>

                        {{-- <h4 class="title">Eligibility</h4>
                        <div class="content">
                            {{ $course->eligibility ?? 'No specific eligibility mentioned.' }}
                        </div> --}}

                        {{-- <h4 class="title">Course Outline</h4>
                        <div class="content">
                            <ul class="course_list">
                                @if(!empty($course->small_desc))
                                    @foreach(explode("\n", $course->outline) as $lesson)
                                        <li class="justify-content-between align-items-center d-flex">
                                            <p>{{ $lesson }}</p>
                                            <a class="btn_2 text-uppercase" href="#">View Details</a>
                                        </li>
                                    @endforeach
                                @else
                                    <li>No outline available.</li>
                                @endif
                            </ul>
                        </div> --}}
                    </div>
                </div>

                <!-- Right -->
                <div class="col-lg-4 right-contents">
                    <div class="sidebar_top">
                        <ul>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Trainer’s Name</p>
                                    <span class="color">{{ $course->trainer->name ?? 'N/A' }}</span>
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Course Fee</p>
                                    <span>${{ $course->price }}</span>
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Duration</p>
                                    <span>{{ $course->duration }} hours</span>
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Students Enrolled</p>
                                    <span>{{ $course->students->count() }}</span>
                                </a>
                            </li>
                        </ul>
                        <a href="#" class="btn_1 d-block">Enroll the course</a>
                    </div>

                    <h4 class="title">Reviews</h4>
                    <div class="content">
                        <p>No reviews yet. Be the first to add feedback!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Course Details Area =================-->

@endsection
