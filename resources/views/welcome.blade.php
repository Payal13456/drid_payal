@extends('layouts.app')

@section('content')
<!-- nav start -->
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-top">
                <a href="index.html" class="logo-css">
                    <img class="img-fluid navbar-brand laptop-logo" src="{{url('assets/img/logo.png')}}" width="150">
                    <img class="img-fluid navbar-brand mobile-logo" src="{{url('assets/img/logo-white.png')}}" width="130">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <img class="img-fluid" src="{{url('assets/img/icon/bar-menu-img.png')}}">
                </span>
                </button>
                <div class="collapse navbar-collapse navbar-collapse-custom " id="navbarNav">
                    <ul class="navbar-nav navbar-custom ml-auto">
                        <li class="nav-item hover-custom list-unstyled mr-xl-3 mr-lg-3">
                            <a class="nav-link text-white py-2 px-4 login-signup-btn" href="{{url('register')}}">Sign up <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item list-unstyled hover-custom">
                            <a class="nav-link text-white py-2 px-4 login-signup-btn" href="{{url('login')}}">Login</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- nav end -->
        <div class="container-fluid hero-section">
            <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 col-xs-12 px-xl-5 px-lg-5 px-md-5 px-3 hero-caption">
                    <h1>Welcome to <span class="drid-in"> Drid.in</span>, India’s <br> 1st Digital Resume site.</h1>
                    <p class="text-light-300 line-height digital-text"><span class="text-medium">Drid.in</span> is a Digital Resume ID for B2B (Business to Business) and B2C (Business to Consumers) company. It is an idea to change the trend of resumes, and makes all the recruiting process to become more easier.</p>
                </div>
                <div class="col-xl-7 col-lg-6 col-md-6 col-sm-12 col-xs-12 clearfix"></div>
                <!--  -->
                <!-- top companies section -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 viewed" id="top-company-carousel">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="bbb_viewed_title_container">
                                    <h3 class="drid-heading">Top companies</h3>
                                    <div class="bbb_viewed_nav_container">
                                        <div class="bbb_viewed_nav bbb_viewed_prev"><i class="fa fa-chevron-left"></i></div>
                                        1 of 3
                                        <div class="bbb_viewed_nav bbb_viewed_next"><i class="fa fa-chevron-right"></i></div>
                                    </div>
                                </div>
                                <div class="bbb_viewed_slider_container">
                                    <div class="owl-carousel owl-theme bbb_viewed_slider">
                                        <!--  -->
                                        <div class="owl-item">
                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="bbb_viewed_image">
                                                    <img class="text-center" src="{{url('assets/img/top-company-img-1.png')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="owl-item">
                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="bbb_viewed_image">
                                                    <img class="text-center" src="{{url('assets/img/top-company-img-2.png')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="owl-item">
                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="bbb_viewed_image">
                                                    <img class="text-center" src="{{url('assets/img/top-company-img-3.png')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="owl-item">
                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="bbb_viewed_image">
                                                    <img class="text-center" src="{{url('assets/img/top-company-img-4.png')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="owl-item">
                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="bbb_viewed_image">
                                                    <img class="text-center" src="{{url('assets/img/top-company-img-5.png')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="owl-item">
                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="bbb_viewed_image">
                                                    <img class="text-center" src="{{url('assets/img/top-company-img-6.png')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="owl-item">
                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="bbb_viewed_image">
                                                    <img class="text-center" src="{{url('assets/img/top-company-img-4.png')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="owl-item">
                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="bbb_viewed_image">
                                                    <img class="text-center" src="{{url('assets/img/top-company-img-5.png')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="owl-item">
                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="bbb_viewed_image">
                                                    <img class="text-center" src="{{url('assets/img/top-company-img-6.png')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- top campanies section end -->
                <!-- card section -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-150 col-xs-12 background-img-card-section">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="text-center mx-auto">
                                <h1 class="drid-tittle sm-tittle mb-100">Why Drid services?</h1>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row mx-auto background-img-service">
                                <div class="col moblile-view text-center text-md-left text-lg-left text-xl-left">
                                    <div class="card border-0 bg-none">
                                        <img class="card-img-top img-fluid mx-auto mx-md-0 mx-lg-0 mx-xl-0 service-img" src="{{url('assets/img/drid-service-img-1.svg')}}">
                                        <div class="card-body px-0 card-body-padding">
                                            <h4 class="card-title service-card-heading">Introduction Video</h4>
                                            <p class="card-text card-text-size text-regular">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1"></div>
                                <div class="col moblile-view text-center text-md-left text-lg-left text-xl-left mt-70 digital-mobile-view">
                                    <div class="card border-0 bg-none">
                                        <img class="card-img-top img-fluid mx-auto mx-md-0 mx-lg-0 mx-xl-0 service-img" src="{{url('assets/img/drid-service-img-2.svg')}}">
                                        <div class="card-body px-0 card-body-padding">
                                            <h4 class="card-title service-card-heading">Digital Resume</h4>
                                            <p class="card-text card-text-size text-regular">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1"></div>
                                <div class="col moblile-view text-center text-md-left text-lg-left text-xl-left">
                                    <div class="card border-0 bg-none">
                                        <img class="card-img-top img-fluid mx-auto mx-md-0 mx-lg-0 mx-xl-0 service-img" src="{{url('assets/img/drid-service-img-3.svg')}}">
                                        <div class="card-body px-0 card-body-padding">
                                            <h4 class="card-title service-card-heading">Top Jobs</h4>
                                            <p class="card-text card-text-size text-regular">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card section end -->
                <!-- career Advice -->
                <div class="container mt-150">
                    <div class="col-xl-10 col-lg-10 col-md-12 col-12 text-center text-xl-left text-lg-left text-md-left mx-auto">
                        <div class="row career-bg-2">
                            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 career-bg-1 py-4">
                                <div class="career-advice-inner-1">
                                    <p class="font-weight-bold mb-0 text-white">Career Advice</p>
                                    <small class="text-white mb-0">What's Hot!</small>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-6 col-md-6 col-sm-12 py-4">
                                <div class="career-advice-inner-2">
                                    <div class="text-regular">
                                        <p class="mb-0">List Of Companies That Are Hiring Amid Coronavirus <br class="none">Outbreak</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-7 mx-auto pb-4 pt-2 pt-xl-4">
                                <div class="read-more-btn mt-md-3 mt-xl-0 text-center">
                                    <a class="text-medium text-decoration-none" href="#">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- career Advice  end -->
                <!-- digital resume -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 background-digital mt-150">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 order-2 order-md-1">
                                <div class="generate-resume text-center text-md-left text-lg-left text-xl-left">
                                    <h1 class="drid-tittle sm-tittle">Generate Your Digital <br>Resume ID</h1>
                                    <p class="text-regular my-4">Create your Digital Resume ID now, and increase your chances to get the best opportunity that fits for you.</p>
                                    <div class="clearfix">
                                        <div class="btn blue-btn float-md-left  float-lg-left float-xl-left mr-xl-4 mr-lg-3 mb-3">
                                            <a class="text-white text-decoration-none" href="#">Create Your Resume</a>
                                        </div>
                                        <div class="btn blue-border-btn float-md-left  float-lg-left float-xl-left mb-3">
                                            <a class="text-white text-medium text-decoration-none text-dark" href="#">View a Sample</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 order-1 order-md-2">
                                <div class="">
                                    <img class="img-fluid" src="{{url('assets/img/digital-resume.svg')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- digital resume end -->
                <!-- employer section -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 background-employer mt-150">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="">
                                    <img class="img-fluid" src="{{url('assets/img/employer-img.svg')}}">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="mt-lg-2 employer-text">
                                    <h1 class="drid-tittle sm-tittle mb-20">Share your DRID to your next employer easily</h1>
                                    <p class="text-regular mb-0">Don’t need to worry about carrying resume documents on your interview day, you can simply share your DRID number to the recruiter by clicking on share button on the right top or by copying your ID# on the left under profile picture and your interviewer will check your Resume on Drid.in.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- employer section end -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-150">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="text-center">
                                <h1 class="drid-tittle sm-tittle">What We Offer</h1>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 background-offer">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="mb-50 mt-70">
                                            <h1 class="service-card-heading font-weight-bold">For The Candidates</h1>
                                        </div>
                                    </div>
                                    <!-- 1 -->
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="clearfix mb-3 mb-md-3 mb-lg-4 mb-xl-4">
                                            <div class="float-left icon-spacing">
                                                <img class="" src="{{url('assets/img/right-check-icon.svg')}}">
                                            </div>
                                            <p class="float-left mb-0 icon-spacing-text">Resume profile with wall</p>
                                        </div>
                                        <div class="clearfix mb-3 mb-md-3 mb-lg-4 mb-xl-4">
                                            <div class="float-left icon-spacing">
                                                <img class="" src="{{url('assets/img/right-check-icon.svg')}}">
                                            </div>
                                            <p class="float-left mb-0 icon-spacing-text">Attractive resume modifications</p>
                                        </div>
                                        <div class="clearfix mb-3 mb-md-3 mb-lg-4 mb-xl-4">
                                            <div class="float-left icon-spacing">
                                                <img class="" src="{{url('assets/img/right-check-icon.svg')}}">
                                            </div>
                                            <p class="float-left mb-0 icon-spacing-text">Job fairs</p>
                                        </div>
                                        <div class="clearfix mb-3 mb-md-3 mb-lg-4 mb-xl-4">
                                            <div class="float-left icon-spacing">
                                                <img class="" src="{{url('assets/img/right-check-icon.svg')}}">
                                            </div>
                                            <p class="float-left mb-0 icon-spacing-text">Short Introduction / Experience Video</p>
                                        </div>
                                    </div>
                                    <!-- 2 -->
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="clearfix mb-3 mb-md-3 mb-lg-4 mb-xl-4">
                                            <div class="float-left icon-spacing">
                                                <img class="" src="{{url('assets/img/right-check-icon.svg')}}">
                                            </div>
                                            <p class="float-left mb-0 icon-spacing-text">Language Parameters</p>
                                        </div>
                                        <div class="clearfix mb-3 mb-md-3 mb-lg-4 mb-xl-4">
                                            <div class="float-left icon-spacing">
                                                <img class="" src="{{url('assets/img/right-check-icon.svg')}}">
                                            </div>
                                            <p class="float-left mb-0 icon-spacing-text">Uploading Projects</p>
                                        </div>
                                        <div class="clearfix mb-3 mb-md-3 mb-lg-4 mb-xl-4">
                                            <div class="float-left icon-spacing">
                                                <img class="" src="{{url('assets/img/right-check-icon.svg')}}">
                                            </div>
                                            <p class="float-left mb-0 icon-spacing-text">Paid resume service</p>
                                        </div>
                                        <div class="clearfix mb-3 mb-md-3 mb-lg-4 mb-xl-4">
                                            <div class="float-left icon-spacing">
                                                <img class="" src="{{url('assets/img/right-check-icon.svg')}}">
                                            </div>
                                            <p class="float-left mb-0 icon-spacing-text">Paid jobs</p>
                                        </div>
                                    </div>
                                    <!-- 3 -->
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="clearfix mb-3 mb-md-3 mb-lg-4 mb-xl-4">
                                            <div class="float-left icon-spacing">
                                                <img class="" src="{{url('assets/img/right-check-icon.svg')}}">
                                            </div>
                                            <p class="float-left mb-0 icon-spacing-text">Uploading verified mark sheets <br>(Varified from DG locker)</p>
                                        </div>
                                        <div class="clearfix mb-3 mb-md-3 mb-lg-4 mb-xl-4">
                                            <div class="float-left icon-spacing">
                                                <img class="" src="{{url('assets/img/right-check-icon.svg')}}">
                                            </div>
                                            <p class="float-left mb-0 icon-spacing-text">Online Interview time slot  booking <br>from invited candidates</p>
                                        </div>
                                    </div>
                                    <!--  -->
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="mt-100 mb-50">
                                            <h1 class="service-card-heading font-weight-bold">For The Companies</h1>
                                        </div>
                                    </div>
                                    <!-- 1 -->
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="clearfix mb-3 mb-md-3 mb-lg-4 mb-xl-4">
                                            <div class="float-left icon-spacing">
                                                <img class="" src="{{url('assets/img/right-check-icon.svg')}}">
                                            </div>
                                            <p class="float-left mb-0 icon-spacing-text">HR can access the job seekers data and they can shortlist the canditates.</p>
                                        </div>
                                        <div class="clearfix mb-3 mb-md-3 mb-lg-4 mb-xl-4">
                                            <div class="float-left icon-spacing">
                                                <img class="" src="{{url('assets/img/right-check-icon.svg')}}">
                                            </div>
                                            <p class="float-left mb-0 icon-spacing-text">One company profile</p>
                                        </div>
                                    </div>
                                    <!-- 2 -->
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="clearfix mb-3 mb-md-3 mb-lg-4 mb-xl-4">
                                            <div class="float-left icon-spacing">
                                                <img class="" src="{{url('assets/img/right-check-icon.svg')}}">
                                            </div>
                                            <p class="float-left mb-0 icon-spacing-text">Post of vacancy</p>
                                        </div>
                                        <div class="clearfix mb-3 mb-md-3 mb-lg-4 mb-xl-4">
                                            <div class="float-left icon-spacing">
                                                <img class="" src="{{url('assets/img/right-check-icon.svg')}}">
                                            </div>
                                            <p class="float-left mb-0 icon-spacing-text">Online time slot booking from invited candidatesUploading Projects</p>
                                        </div>
                                    </div>
                                    <!-- 3 -->
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="clearfix mb-3 mb-md-3 mb-lg-4 mb-xl-4">
                                            <div class="float-left icon-spacing">
                                                <img class="" src="{{url('assets/img/right-check-icon.svg')}}">
                                            </div>
                                            <p class="float-left mb-0 icon-spacing-text">Multiple candidate invitations</p>
                                        </div>
                                    </div>
                                    <!--  -->
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 background-share-drid mt-150">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="share-drid">
                                            <img class="img-fluid" src="{{url('assets/img/share-img.svg')}}">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="background-share-drid-inner">
                                            <h1 class="drid-tittle sm-tittle">Let's share your Drid to professionals on LinkedIn</h1>
                                            <p class="text-regular my-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-70">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 order-2 order-md-1">
                                        <div class="less-price">
                                            <h1 class="drid-tittle sm-tittle">Hire at less price</h1>
                                            <h3 class="service-card-heading text-medium mb-20">Access individual profile at just <span class="font-weight-bold">Rs.49</span></h3>
                                            <p class="text-regular my-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 order-1 order-md-2">
                                        <div class="share-drid">
                                            <img class="img-fluid" src="{{url('assets/img/hire-less-price.svg')}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-150 trusted-company">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="share-drid">
                                            <img class="img-fluid" src="{{url('assets/img/trusted-company-img.png')}}">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="trusted-company-inner">
                                            <h1 class="drid-tittle sm-tittle">We are trusted by more than 800+ Company</h1>
                                            <p class="text-regular my-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center ">
                                        <div class="btn blue-btn">
                                            <a class="text-white text-decoration-none" href="#">Explore more about Drid.in</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 testimonial-background mt-150">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                        <div class="people-say-head">
                                            <h1 class="drid-tittle sm-tittle">What people say about DRID</h1>
                                        </div>
                                    </div>
                                </div>
                                <div id="myCarousel" class="carousel home-carousel slide" data-ride="carousel">
                                    <!-- Carousel indicators -->
                                    <ol class="carousel-indicators indicators-css">
                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                        <li data-target="#myCarousel" data-slide-to="2"></li>
                                    </ol> <!-- Wrapper for carousel items -->
                                    <img class="img-fluid blue-img" src="{{url('assets/img/testimonial-img.png')}}" width="50">
                                    <div class="col-md-10 col-12 carousel-inner custom-css-add mx-auto text-center">
                                        <div class="item carousel-item active">
                                            <p class="testimonial mb-0">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
                                            <div class="img-box rounded-circle img-fluid mb-2"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1558758981/male-2634974_640.jpg" alt="" width="50"></div>
                                            <h4 class="name-heading">Anna Deynah</h4>
                                            <div class=""><small class="font-weight-semibold color-css">ABC Pvt. ltd.</small></div>
                                        </div>
                                        <div class="item carousel-item">
                                            <p class="testimonial mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Vestibulum idac nisl bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
                                            <div class="img-box mb-2"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1558758980/people-875617_1280.jpg" alt=""></div>
                                            <h4 class="name-heading">Anna Deynah</h4>
                                            <div class=""><small class="font-weight-semibold color-css">ABC Pvt. ltd.</small></div>
                                        </div>
                                        <div class="item carousel-item">
                                            <p class="testimonial mb-0">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio. Phasellus auctor velit.</p>
                                            <div class="img-box mb-2"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1558758980/portrait-1287413_640.jpg" alt=""></div>
                                            <h4 class="name-heading">Anna Deynah</h4>
                                            <div class="">
                                                <small class="font-weight-semibold color-css">ABC Pvt. ltd.</small>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                                        <i class="fa fa-angle-left"></i>
                                    </a>
                                    <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                                    <!--  -->
                                    <hr class="custom-hr mx-auto mt-150 mb-0">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-60">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="">
                                                        <h1 class="service-card-heading font-weight-bold">Latest News</h1>
                                                    </div>
                                                </div>
                                                <!--  -->
                                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 my-3">
                                                    <div class="card home-card-css mt-xl-5 mt-lg-5 mt-md-3">
                                                        <div class="row no-gutters">
                                                            <div class="col-xl-5 col-lg-5 col-md-5 col-4">
                                                                <img class="img-fluid img-size" src="{{url('assets/img/card-img.png')}}">
                                                            </div>
                                                            <div class="col-xl-7 col-lg-7 col-md-7 col-7">
                                                                <div class="card-body p-20 sm-card-body">
                                                                    <h5 class="card-tittle font-18 font-weight-bold">Up your career game. Seriously.</h5>
                                                                    <p class="card-text font-14 text-light-300 mb-2 sm-none">With over 78,000 daily subscribers, <span class="text-medium">Drid</span> has quickly become...</p>
                                                                    <div class="font-14">
                                                                        <a class="card-btn text-decoration-none" href="#">Read full article</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--  -->
                                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 my-3">
                                                    <div class="card home-card-css mt-xl-5 mt-lg-5 mt-md-3">
                                                        <div class="row no-gutters">
                                                            <div class="col-xl-5 col-lg-5 col-md-5 col-4">
                                                                <img class="img-fluid img-size" src="{{url('assets/img/card-img-2.png')}}">
                                                            </div>
                                                            <div class="col-xl-7 col-lg-7 col-md-7 col-7">
                                                                <div class="card-body p-20 sm-card-body">
                                                                    <h5 class="card-tittle font-18 font-weight-bold">Up your career game. Seriously.</h5>
                                                                    <p class="card-text font-14 text-light-300 mb-2 sm-none">With over 78,000 daily subscribers, <span class="text-medium">Drid</span> has quickly become...</p>
                                                                    <div class="font-14">
                                                                        <a class="card-btn text-decoration-none" href="#">Read full article</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--  -->
                                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 my-3">
                                                    <div class="card home-card-css mt-xl-5 mt-lg-5 mt-md-0">
                                                        <div class="row no-gutters">
                                                            <div class="col-xl-5 col-lg-5 col-md-5 col-4">
                                                                <img class="img-fluid img-size" src="{{url('assets/img/card-img-3.png')}}">
                                                            </div>
                                                            <div class="col-xl-7 col-lg-7 col-md-7 col-7">
                                                                <div class="card-body p-20 sm-card-body">
                                                                    <h5 class="card-tittle font-18 font-weight-bold">Up your career game. Seriously.</h5>
                                                                    <p class="card-text font-14 text-light-300 mb-2 sm-none">With over 78,000 daily subscribers, <span class="text-medium">Drid</span> has quickly become...</p>
                                                                    <div class="font-14">
                                                                        <a class="card-btn text-decoration-none" href="#">Read full article</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--  -->
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center my-3 mt-md-5">
                                                    <div class="btn blue-border-btn">
                                                        <a class="text-dark text-decoration-none" href="#">Read more news</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <!--  -->
                    <div class="scrolltop float-right">
                        <img class="img-fluid" src="{{url('assets/img/icon/icon-top.svg')}}" onclick="topFunction()" id="mybtn" style="display: block;">
                    </div>
                </div>
@endsection
@section('scripts')
<script>
    $(document).ready(function()
        {
        if($('.bbb_viewed_slider').length)
        {
        var viewedSlider = $('.bbb_viewed_slider');
        viewedSlider.owlCarousel(
        {
        loop:true,
        margin:30,
        autoplay:true,
        autoplayTimeout:6000,
        nav:false,
        dots:true,
        responsiveClass:true,
        responsive:{
        0:{
        items:3,
        nav:false
        },
        600:{
        items:3,
        nav:false
        },
        1000:{
        items:6,
        nav:true,
        loop:true
        }
        }
        });
        if($('.bbb_viewed_prev').length)
        {
        var prev = $('.bbb_viewed_prev');
        prev.on('click', function()
        {
        viewedSlider.trigger('prev.owl.carousel');
        });
        }
        if($('.bbb_viewed_next').length)
        {
        var next = $('.bbb_viewed_next');
        next.on('click', function()
        {
        viewedSlider.trigger('next.owl.carousel');
        });
        }
        }
        });

        // get the button:
        mybutton = document.getElementById("mybtn");
        // when the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
    }
    // when the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0; //for safari
        document.documentElement.scrollTop =0; //for chorme, firefox,ie and opera
    }
</script>
@stop
