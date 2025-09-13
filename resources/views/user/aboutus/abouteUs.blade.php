@extends('user.app.layout')

@section('content')

@endsection
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h2>About Us</h2>
                        <p>Home<span>/</span>About Us</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

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
                    <img src="img/learning_img.png" alt="">
                </div>
            </div>
            <div class="col-md-5 col-lg-5">
                <div class="learning_member_text">
                    <h5>About us</h5>
                    <h2>Learning with Love
                        and Laughter</h2>
                    <p>Fifth saying upon divide divide rule for deep their female all hath brind Days and beast
                        greater grass signs abundantly have greater also
                        days years under brought moveth.</p>
                    <ul>
                        <li><span class="ti-pencil-alt"></span>Him lights given i heaven second yielding seas
                            gathered wear</li>
                        <li><span class="ti-ruler-pencil"></span>Fly female them whales fly them day deep given
                            night.</li>
                    </ul>
                    <a href="#" class="btn_1">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- learning part end-->

<!-- member_counter counter start -->

<section class="member_counter" style="position: relative; overflow: hidden;">
    <style>
        .member_counter::after {
            content: none !important;
            display: none !important;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single_member_counter" style="position: relative; z-index: 2;">
                    <span class="counter">{{ $trainers }}</span>
                    <h5>All Teachers</h5>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single_member_counter" style="position: relative; z-index: 2;">
                    <span class="counter">{{ $allStudents }}</span>
                    <h5>All Students</h5>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single_member_counter" style="position: relative; z-index: 2;">
                    <span class="counter">{{ $onlineStudents }}</span>
                    <h5>Online Students</h5>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single_member_counter" style="position: relative; z-index: 2;">
                    <span class="counter">{{ $offlineStudents }}</span>
                    <h5>Offline Students</h5>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- member_counter counter end -->

<!--::review_part start::-->
<section class="testimonial_part section_padding">
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
                </div>
            </div>

        </div>
    </div>
</section>
<!--::blog_part end::-->
