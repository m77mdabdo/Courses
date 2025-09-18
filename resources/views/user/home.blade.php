@extends('user.app.layout')
@section('content')
    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>Upgrade Your Skills, Anytime</h5>
                            <h1>Learn Online & Boost
                                Your Career</h1>
                            <p>Join thousands of learners and explore high-quality online courses taught by
                                expert instructors. Flexible schedules, hands-on training, and recognized
                                certificates to take your career to the next level.</p>
                            <a href="courses.html" class="btn_1">Browse Courses</a>
                            <a href="register.html" class="btn_2">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- banner part start-->

    <!-- feature_part start-->
    <section class="feature_part">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xl-3 align-self-center">
                    <div class="single_feature_text">
                        <h2>Our <br> Features</h2>
                        <p>Discover the key benefits of learning with us. Flexible courses, expert trainers,
                            and career opportunities to help you achieve your goals.</p>
                        <a href="courses.html" class="btn_1">Explore Courses</a>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-layers"></i></span>
                            <h4>Learn Anytime</h4>
                            <p>Study at your own pace from anywhere in the world, using any device.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-new-window"></i></span>
                            <h4>Expert Trainers</h4>
                            <p>Gain knowledge from certified instructors and industry professionals
                                with years of experience.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part single_feature_part_2">
                            <span class="single_service_icon style_icon"><i class="ti-light-bulb"></i></span>
                            <h4>Career Support</h4>
                            <p>Boost your career with internships, job placement guidance,
                                and recognized certificates.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- upcoming_event part start-->

    <!-- learning part start-->
    <section class="learning_part">
        <div class="container">
            <div class="row align-items-sm-center align-items-lg-stretch">
                <div class="col-md-7 col-lg-7">
                    <div class="learning_img">
                        <img src="img/learning_img.png" alt="About Online Learning">
                    </div>
                </div>
                <div class="col-md-5 col-lg-5">
                    <div class="learning_member_text">
                        <h5>About Us</h5>
                        <h2>Learn, Grow & Achieve
                            Your Career Goals</h2>
                        <p>We are dedicated to providing high-quality online courses designed by
                            expert instructors. Our mission is to make learning accessible, flexible,
                            and impactful for everyone.</p>
                        <ul>
                            <li><span class="ti-pencil-alt"></span> Flexible online learning – anytime, anywhere.</li>
                            <li><span class="ti-ruler-pencil"></span> Practical training with real-world projects.</li>
                            <li><span class="ti-cup"></span> Recognized certificates to boost your CV.</li>
                        </ul>
                        <a href="about.html" class="btn_1">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- learning part end-->

    <!-- member_counter counter start -->
    <section class="member_counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">{{ $trainers }}</span>
                        <h4>All Teachers</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">{{ $allStudents }}</span>
                        <h4> All Students</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">{{ $onlineStudents }}</span>
                        <h4>Online Students</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">{{ $offlineStudents }}</span>
                        <h4>Ofline Students</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- member_counter counter end -->

    <!--::review_part start::-->
    <section class="special_cource padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>popular courses</p>
                        <h2>Special Courses</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($allCourses as $course)
                    <div class="col-sm-6 col-lg-4">
                        <div class="single_special_cource">
                            <img src="img/special_cource_1.png" class="special_img" alt="">
                            <div class="special_cource_text">
                                <a href="{{ route('courses.show',$course->id) }}" class="btn_4">{{ $course->category->title }}</a>
                                <h4>${{ $course->price }}</h4>
                                <a href="{{ route('courses.show',$course->id) }}">
                                    <h3>{{ $course->title }}</h3>

                                </a>
                                <p>{{ $course->small_desc }}</p>
                                <div class="author_info">
                                    <div class="author_img">
                                        <img src="img/author/author_1.png" alt="">
                                        <div class="author_info_text">
                                            <p>Conduct by:</p>
                                            <h5><a href="#">{{ $course->trainer->name }}</a></h5>
                                        </div>
                                    </div>
                                    {{-- <div class="author_rating">
                                        <div class="rating">
                                            <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                            <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                            <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                            <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                            <a href="#"><img src="img/icon/star.svg" alt=""></a>
                                        </div>
                                        <p>3.8 Ratings</p>
                                    </div> --}}
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach

                {{ $allCourses->links() }}


            </div>
        </div>
    </section>
    <!--::blog_part end::-->

    <!-- learning part start-->
    <section class="advance_feature learning_part">
        <div class="container">
            <div class="row align-items-sm-center align-items-xl-stretch">
                <div class="col-md-6 col-lg-6">
                    <div class="learning_member_text">
                        <h5>Why Choose Us</h5>
                        <h2>Our Advanced Learning System</h2>
                        <p>
                            We provide a modern and flexible education system that helps students
                            learn anytime, anywhere with the guidance of professional instructors
                            and advanced learning tools.
                        </p>

                        <div class="row">
                            <div class="col-sm-6 col-md-12 col-lg-6">
                                <div class="learning_member_text_iner">
                                    <span class="ti-world"></span>
                                    <h4>Learn Anywhere</h4>
                                    <p>Access our courses online anytime, from any device.</p>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-12 col-lg-6">
                                <div class="learning_member_text_iner">
                                    <span class="ti-user"></span>
                                    <h4>Expert Teachers</h4>
                                    <p>Our trainers are certified and have years of experience.</p>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-12 col-lg-6">
                                <div class="learning_member_text_iner">
                                    <span class="ti-book"></span>
                                    <h4>Wide Range of Courses</h4>
                                    <p>Choose from multiple categories that fit your career goals.</p>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-12 col-lg-6">
                                <div class="learning_member_text_iner">
                                    <span class="ti-cup"></span>
                                    <h4>Certificates</h4>
                                    <p>Earn recognized certificates after completing your courses.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- الصورة -->
                <div class="col-lg-6 col-md-6">
                    <div class="learning_img">
                        <img src="img/advance_feature_img.png" alt="Learning System">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- learning part end-->

    <!--::review_part start::-->
    <section class="testimonial_part">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>tesimonials</p>
                        <h2>Happy Students</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="textimonial_iner owl-carousel">
                        <div class="testimonial_slider">
                            <div class="row">
                                <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-2 col-sm-4">
                                    <div class="testimonial_slider_img">
                                        <img src="img/testimonial_img_1.png" alt="#">
                                    </div>
                                </div>
                                <div class="col-xl-4 d-none d-xl-block">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-xl-2 d-none d-xl-block">
                                    <div class="testimonial_slider_img">
                                        <img src="img/testimonial_img_1.png" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial_slider">
                            <div class="row">
                                <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-2 col-sm-4">
                                    <div class="testimonial_slider_img">
                                        <img src="img/testimonial_img_2.png" alt="#">
                                    </div>
                                </div>
                                <div class="col-xl-4 d-none d-xl-block">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-xl-2 d-none d-xl-block">
                                    <div class="testimonial_slider_img">
                                        <img src="img/testimonial_img_1.png" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial_slider">
                            <div class="row">
                                <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-2 col-sm-4">
                                    <div class="testimonial_slider_img">
                                        <img src="img/testimonial_img_3.png" alt="#">
                                    </div>
                                </div>
                                <div class="col-xl-4 d-none d-xl-block">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-xl-2 d-none d-xl-block">
                                    <div class="testimonial_slider_img">
                                        <img src="img/testimonial_img_1.png" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--::blog_part end::-->

    <!--::blog_part start::-->
    <section class="blog_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>Our Blog</p>
                        <h2>Students Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-sm-6 col-lg-4 col-xl-4">
                        <div class="single-home-blog">
                            <div class="card">
                                <img src="{{ asset('storage/img' . $blog->image) }}" class="card-img-top"
                                    alt="{{ $blog->title }}">
                                <div class="card-body">
                                    {{-- التصنيفات --}}
                                    @if ($blog->categories->count())
                                        @foreach ($blog->categories as $category)
                                            <a href="#" class="btn_4">{{ $category->name }}</a>
                                        @endforeach
                                    @else
                                        <a href="#" class="btn_4">Uncategorized</a>
                                    @endif

                                    {{-- العنوان --}}
                                    <a href="{{ route('blogs.show', $blog->id) }}">
                                        <h5 class="card-title">{{ $blog->title }}</h5>
                                    </a>

                                    {{-- المحتوى --}}
                                    <p>{{ Str::limit($blog->content, 120) }}</p>

                                    {{-- الكومنتات + لايكات (لو عندك عمود likes) --}}
                                    <ul>
                                        <li><span class="ti-comments"></span> {{ $blog->comments->count() }} Comments</li>
                                        <li><span class="ti-heart"></span> {{ $blog->likes ?? 0 }} Likes</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Pagination --}}
            <div class="row mt-4">
                <div class="col-12 d-flex justify-content-center">
                    {{ $blogs->links() }}
                </div>
            </div>
        </div>
    </section>

    <!--::blog_part end::-->

    <!-- footer part start-->
@endsection
