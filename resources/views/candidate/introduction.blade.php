@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->

<body class="bg-color">
        <section>
            @include('includes.candidate-header')
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="container-fluid extra-padding">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12 mt-4">
                        <div class="card hovercard">
                            <div class="cardheader">
                                <img class="flag" src="{{url('assets/img/country-flag.png')}}">
                            </div>
                            <div class="avatar">
                                <img class="img-fluid" alt="" src="{{url('/')}}/{{$user->profile_img}}">
                            </div>
                            <div class="info">
                                <div class="desc text-dark mt-0">ID: #DRID00{{$user->id}} 
                                    <i class="fa fa-clone id-copy-icon"></i>
                                </div>
                                <div class="title">
                                    <a target="#" href="#">{{$user->fname}} {{$user->lname}}</a>
                                </div>
                                <div class="desc"><a>{{$user->job_title}}</a></div>
                                <div class="desc">
                                    <a class="light-gray" href="#">
                                        <i class="fa fa-map-marker-alt mr-2"></i>Los Angeles, USA
                                    </a>
                                </div>
                                <div class="desc online-desc w-100">
                                    <a class="online-text"><i class="fa fa-circle align-middle"></i>{{$user->status}} </a>
                                </div>
                                <div class="desc-2">
                                    <div class="clearfix">
                                        <div class="float-left contact-desc intro-icon">
                                            <i class="fas fa-phone-alt"></i>
                                        </div>
                                        <div class="float-left intro-text">
                                            <a class="contact-desc">+91 - {{$user->mobile_no}}</a>
                                        </div>
                                    </div>
                                    <!--  -->
                                    <div class="clearfix">
                                        <div class="contact-desc float-left intro-icon">
                                            <i class="fab fa-github"></i>
                                        </div>
                                        <div class="float-left intro-text">
                                            <a class="contact-desc">www.github.com/{{$user->github}}</a>
                                        </div>
                                    </div>
                                    <!--  -->
                                    <div class="clearfix">
                                        <div class="contact-desc float-left intro-icon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <div class="float-left intro-text">
                                            <a class="contact-desc">{{$user->email}}</a>
                                        </div>
                                    </div>
                                    <!--  -->
                                    <div class="clearfix">
                                        <div class="contact-desc float-left intro-icon">
                                            <i class="fab fa-linkedin-in"></i>
                                        </div>
                                        <div class="float-left intro-text">
                                            <a class="contact-desc">www.linkedin.com/{{$user->linkedin}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div class="shadow p-20 bg-white">
                            <p class="font-weight-bold text-dark font-18 mb-2">Summary</p>
                            <p class="font-16 text-reguler">To secure a challenging position in a reputable organization to expand my learings, knowledge, and skills. Secure a responsible career opportunity to fully utilize my training and skills.</p>
                        </div>
                        <!--  -->
                        <div class="shadow p-20 bg-white">
                            <p class="font-weight-bold text-dark font-18">Cover Letter</p>
                            <img class="img-fluid w-100" src="{{url('/')}}/{{$user->cover_img}}">
                        </div>
                        <!--  -->
                        <div class="shadow p-20 bg-white">
                            <p class="font-weight-bold text-dark font-18">Job Type</p>
                            <div class="checkbox form-inline mb-3">
                                <label class="light-gray"><input class="mr-2 job-type-checkbox" type="checkbox" value="">Full Time</label>
                            </div>
                            <div class="checkbox form-inline mb-3">
                                <label class="light-gray"><input class="mr-2 job-type-checkbox" type="checkbox" value="">Part Time</label>
                            </div>
                        </div>
                        <!--  -->
                        <div class="shadow p-20 bg-white">
                            <p class="font-weight-bold text-dark font-18">Prefered Roles</p>
                            <ul class="px-3 light-gray">
                                <li class="">Python Developer</li>
                                <li class="mt-2">Django Developer</li>
                                <li class="mt-2">Full Stack Developer</li>
                                <li class="mt-2">Solution Architect</li>
                            </ul>
                        </div>
                        <!--  -->
                        <div class="shadow p-20 bg-white">
                            <p class="font-weight-bold text-dark font-18">CTC</p>
                            <ul class="row">
                                <li class="list-unstyled col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3 font-14 light-gray">CURRENT</li>
                                <!--  -->
                                <li class="list-unstyled col-xl-4 col-lg-4 col-md-4 col-4 pr-0 mt-3 light-gray">Overall :</li>
                                <li class="list-unstyled col-xl-8 col-lg-8 col-md-8 col-8 mt-3 text-medium">10,50,000</li>
                                <!--  -->
                                <li class="list-unstyled col-xl-4 col-lg-4 col-md-4 col-4 pr-0 mt-3 light-gray">Fixed :</li>
                                <li class="list-unstyled col-xl-8 col-lg-8 col-md-8 col-8 mt-3 text-medium">7,50,000</li>
                                <!--  -->
                                <li class="list-unstyled col-xl-4 col-lg-4 col-md-4 col-4 pr-0 mt-3 light-gray">Variable :</li>
                                <li class="list-unstyled col-xl-8 col-lg-8 col-md-8 col-8 mt-3 text-medium">2,00,000</li>
                                <!--  -->
                                <li class="list-unstyled col-xl-4 col-lg-4 col-md-4 col-4 pr-0 mt-3 light-gray">Bonuses :</li>
                                <li class="list-unstyled col-xl-8 col-lg-8 col-md-8 col-8 mt-3 text-medium">1,00,000</li>
                                <!--  -->
                                <!--  -->
                                <li class="list-unstyled col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3 mt-5 font-14 light-gray">EXPECTED</li>
                                <!--  -->
                                <li class="list-unstyled col-xl-4 col-lg-4 col-md-4 col-4 pr-0 mt-3 light-gray">Overall :</li>
                                <li class="list-unstyled col-xl-8 col-lg-8 col-md-8 col-8 mt-3 text-medium">10,50,000</li>
                                <!--  -->
                                <li class="list-unstyled col-xl-4 col-lg-4 col-md-4 col-4 pr-0 mt-3 light-gray">Fixed :</li>
                                <li class="list-unstyled col-xl-8 col-lg-8 col-md-8 col-8 mt-3 text-medium">-</li>
                                <!--  -->
                                <li class="list-unstyled col-xl-4 col-lg-4 col-md-4 col-4 pr-0 mt-3 light-gray">Variable :</li>
                                <li class="list-unstyled col-xl-8 col-lg-8 col-md-8 col-8 mt-3 text-medium">-</li>
                                <!--  -->
                                <li class="list-unstyled col-xl-4 col-lg-4 col-md-4 col-4 pr-0 mt-3 light-gray">Bonuses :</li>
                                <li class="list-unstyled col-xl-8 col-lg-8 col-md-8 col-8 mt-3 text-medium">-</li>
                                <!--  -->
                            </ul>
                        </div>
                        <!--  -->
                        <div class="shadow p-20 bg-white">
                            <p class="font-weight-bold text-dark font-18">Offers In-Hand</p>
                            <ul class="row">
                                <li class="list-unstyled col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3 font-18 text-medium">1. Microsoft</li>
                                <!--  -->
                                <li class="list-unstyled col-xl-4 col-lg-4 col-md-4 col-4 pr-0 mt-3 light-gray">Role :</li>
                                <li class="list-unstyled col-xl-8 col-lg-8 col-md-8 col-8 mt-3 text-medium">Software Development Engineer</li>
                                <!--  -->
                                <li class="list-unstyled col-xl-4 col-lg-4 col-md-4 col-4 pr-0 mt-3 light-gray">CTC :</li>
                                <li class="list-unstyled col-xl-8 col-lg-8 col-md-8 col-8 mt-3 text-medium">30,00,000</li>
                                <!--  -->
                                <li class="list-unstyled col-xl-4 col-lg-4 col-md-4 col-4 pr-0 mt-3 light-gray">Joining :</li>
                                <li class="list-unstyled col-xl-8 col-lg-8 col-md-8 col-8 mt-3 text-medium">12 Sep 2020</li>
                                <!--  -->
                                <hr class="w-100 mx-2">
                                <a class="text-primary px-3" href="#">Show 1 more offer</a>
                            </ul>
                        </div>
                        <!--  -->
                        <div class="shadow p-20 bg-white">
                            <p class="font-weight-bold text-dark font-18">Languages</p>
                            <ul class="row">
                                <li class="list-unstyled col-xl-8 col-lg-8 col-md-8 col-8 mt-3 light-gray">Hindi
                                    <img class="img-fluid country-img" src="{{url('assets/img/indian-flag.png')}}">
                                </li>
                                <li class="list-unstyled col-xl-4 col-lg-4 col-md-4 col-4 mt-3 text-right light-gray">80%</li>
                                <li class="list-unstyled col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="
                                            100">
                                        </div>
                                    </div>
                                </li>
                                <!--  -->
                                <li class="list-unstyled col-xl-8 col-lg-8 col-md-8 col-8 mt-4 light-gray">English
                                    <img class="img-fluid country-img" src="{{url('assets/img/australia-flag.png')}}">
                                </li>
                                <li class="list-unstyled col-xl-4 col-lg-4 col-md-4 col-4 mt-4 text-right light-gray">60%</li>
                                <li class="list-unstyled col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="
                                            100">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--  -->
                        <div class="shadow p-20 bg-white">
                            <p class="font-weight-bold text-dark font-18">Achivements</p>
                            <ul class="row">
                                <li class="list-unstyled col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1 col-2 icon-width icon-shield"><img src="{{url('assets/img/achivement-icon.svg')}}"></li>
                                <li class="list-unstyled col-xl-10 col-lg-10 col-md-11 line-height-mobile col-10 light-gray">TechGig Code Gladiators 2019 - Finalist</li>
                                <!--  -->
                                <li class="list-unstyled col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1 col-2 mt-4 icon-width icon-shield"><img src="{{url('assets/img/achivement-icon.svg')}}"></li>
                                <li class="list-unstyled col-xl-10 col-lg-10 col-md-11 line-height-mobile col-10 mt-4 light-gray">TechGig Code Gladiators 2019 - Finalist</li>
                                <!--  -->
                                <li class="list-unstyled col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1 col-2 mt-4 icon-width icon-shield"><img src="{{url('assets/img/achivement-icon.svg')}}"></li>
                                <li class="list-unstyled col-xl-10 col-lg-10 col-md-11 line-height-mobile col-10 mt-4 light-gray">TechGig Code Gladiators 2019 - Finalist</li>
                                <!--  -->
                                <hr class="w-100 mx-2">
                                <a class="text-primary px-3" href="#">Show 5 more Achivements</a>
                            </ul>
                        </div>
                        <!--  -->
                        <div class="shadow p-20 bg-white">
                            <p class="font-weight-bold text-dark font-18">Notice Period</p>
                            <ul class="">
                                <div class="clearfix">
                                    <li class="list-unstyled float-left  left-side-text mt-2 light-gray">Already in Notice Period :</li>
                                    <li class="list-unstyled float-right right-side-text mt-2">No</li>
                                </div>
                                <!--  -->
                                <div class="clearfix">
                                    <li class="list-unstyled float-left  left-side-text mt-2 light-gray">Notice Period in Days :</li>
                                    <li class="list-unstyled float-right right-side-text mt-2">90 Days</li>
                                </div>
                                <!--  -->
                            </ul>
                        </div>
                        <!--  -->
                        <div class="shadow p-20 bg-white">
                            <p class="font-weight-bold text-dark font-18">Intrest</p>
                            <div class="row">
                                <div class="list-unstyled col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 mt-2 text-center col-4">
                                    <i class="fa fa-gamepad font-28 light-gray"></i>
                                    <p>Gaming</p>
                                </div>
                                <!--  -->
                                <div class="list-unstyled col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 mt-2 text-center col-4">
                                    <i class="far fa-book-open font-28 light-gray"></i>
                                    <p>Reading</p>
                                </div>
                                <!--  -->
                                <div class="list-unstyled col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 mt-2 text-center col-4">
                                    <i class="fa fa-laptop-code font-28 light-gray"></i>
                                    <p>Coding</p>
                                </div>
                                <!--  -->
                            </div>
                        </div>
                        <!--  -->
                        <div class="shadow p-20 bg-white">
                            <p class="font-weight-bold text-dark font-18">Strength</p>
                            <div class="row">
                                <div class="list-unstyled col-xl-6 col-lg-6 col-md-4 col-sm-6 col-xs-6 col-4 mt-4 text-center">
                                    <i class="fa fa-users font-28 light-gray"></i>
                                    <p>Team Players</p>
                                </div>
                                <!--  -->
                                <div class="list-unstyled col-xl-6 col-lg-6 col-md-4 col-sm-6 col-xs-6 col-4 mt-4 text-center">
                                    <i class="far fa-building font-28 light-gray"></i>
                                    <p>Hard Working</p>
                                </div>
                                <!--  -->
                                <div class="list-unstyled col-xl-6 col-lg-6 col-md-4 col-sm-6 col-xs-6 col-4 mt-4 text-center">
                                    <i class="fa fa-hand-rock font-28 light-gray"></i>
                                    <p>Self Motivated</p>
                                </div>
                                <!--  -->
                            </div>
                        </div>
                        <!--  -->
                        <div class="shadow p-20 bg-white">
                            <p class="font-weight-bold text-dark font-18">Medical Concern</p>
                            <div class="radio form-inline mb-3">
                                <input class="radio-width mr-2" type="radio" name="optradio" checked>
                                <label class="light-gray form-check-label">Differently Able</label>
                            </div>
                            <div class="radio form-inline mb-3">
                                <label class="light-gray form-check-label"><input class="radio-width mr-2" type="radio" name="optradio">Other</label>
                            </div>
                        </div>
                        <!--  -->
                        <div class="shadow p-20 bg-white">
                            <p class="font-weight-bold text-dark font-18">References</p>
                            <ul class="row">
                                <li class="list-unstyled col-xl-4 col-lg-4 col-md-4 col-4">
                                    <p>Person 1</p>
                                </li>
                                <li class="list-unstyled col-xl-8 col-lg-8 col-md-8 col-8">Grace Hopper Event</li>
                                <!--  -->
                                <li class="list-unstyled col-xl-4 col-lg-4 col-md-4 col-4">
                                    <p>Person 1</p>
                                </li>
                                <li class="list-unstyled col-xl-8 col-lg-8 col-md-8 col-8">Grace Hopper Event</li>
                                <!--  -->
                                <li class="list-unstyled col-xl-4 col-lg-4 col-md-4 col-4">
                                    <p>Person 1</p>
                                </li>
                                <li class="list-unstyled col-xl-8 col-lg-8 col-md-8 col-8">Grace Hopper Event</li>
                                <!--  -->
                            </ul>
                        </div>
                        <!--  -->
                    </div>
                    <!--  -->
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 mt-4">
                        <div id="custCarousel" class="carousel slide" data-ride="carousel" align="center">
                            <!-- slides -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/v64KOxKVLVg" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vlDzYIIOYmM" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <!-- Thumbnails -->
                            <ol class="carousel-indicators list-inline">
                                <li class="list-inline-item active">
                                    <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#custCarousel">
                                        <img src="https://i.imgur.com/weXVL8M.jpg" class="img-fluid thumb-img">
                                        <span class="position-set">Introduction</span>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a id="carousel-selector-1" data-slide-to="1" data-target="#custCarousel">
                                        <img src="https://i.imgur.com/Rpxx6wU.jpg" class="img-fluid thumb-img">
                                        <span class="position-set-2">Experience</span>
                                    </a>
                                </li>
                            </ol>
                        </div>
                        <!--  -->
                        <div class="shadow p-20 bg-white">
                            <p class="font-weight-bold text-dark font-18 mb-2">Career Objective</p>
                            <p>To secure a challenging position in a reputable organization to expand my learings, knowledge, and skills. Secure a responsible career opportunity to fully utilize my training and skills, while making a significant contribution to the success of the company.</p>
                        </div>
                        <!--  -->
                        <div class="shadow p-20 bg-white">
                            <div class="clearfix mb-4">
                                <p class="font-weight-bold text-dark font-18 text-left float-left">Professional Experience</p>
                                <p class="text-dark font-18 text-right float-right">4 Years</p>
                            </div>
                            <!--  -->
                            <div class="row">
                                <div class="col-2">
                                    <img class="img-fluid" src="{{url('assets/img/amazon-img.png')}}" width="120">
                                </div>
                                <div class="col-10">
                                    <!--  -->
                                    <div class="">
                                        <p class="text-medium font-18 mb-0">Software Developer  l  Amazon</p>
                                    </div>
                                    <div class="clearfix">
                                        <p class="float-left font-16 text-medium">Jun 2018 - Present</p>
                                        <p class="float-right font-16 text-medium"><i class="fa fa-map-marker-alt"></i> Mumbai, India</p>
                                    </div>
                                    <div class="mb-5">
                                        <ul>
                                            <li class="mb-3 light-gray font-14">Creation / Modification / Appreval of Policies can be done in days opposed.</li>
                                            <li class="mb-3 light-gray font-14">Policy Service - Building a centralized place for all the policies across population.</li>
                                            <a class="text-primary" href="#">See More</a>
                                        </ul>
                                    </div>
                                    <!--  -->
                                </div>
                                <!--  -->
                                <div class="col-2">
                                    <img class="img-fluid" src="{{url('assets/img/amazon-img.png')}}" width="120">
                                </div>
                                <div class="col-10">
                                    <!--  -->
                                    <div class="">
                                        <p class="text-medium font-18 mb-0">Software Developer  l  Amazon</p>
                                    </div>
                                    <div class="clearfix">
                                        <p class="float-left font-16 text-medium">Jun 2018 - Present</p>
                                        <p class="float-right font-16 text-medium"><i class="fa fa-map-marker-alt"></i> Mumbai, India</p>
                                    </div>
                                    <div class="">
                                        <ul>
                                            <li class="mb-3 light-gray font-14">Creation / Modification / Appreval of Policies can be done in days opposed.</li>
                                            <li class="mb-3 light-gray font-14">Policy Service - Building a centralized place for all the policies across population.</li>
                                            <a class="text-primary" href="#">See More</a>
                                        </ul>
                                    </div>
                                    <!--  -->
                                </div>
                                <!--  -->
                                <hr class="w-100 mx-3">
                                <div class="px-3">
                                    <a class="text-primary" href="#">Show 1 more experience</a>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div class="shadow p-20 bg-white">
                            <div class="clearfix">
                                <p class="font-weight-bold text-dark font-18 text-left float-left">Internship</p>
                                <p class="text-dark text-right float-right">6 Months</p>
                            </div>
                            <!--  -->
                            <div class="row">
                                <div class="col-2">
                                    <img class="img-fluid" src="{{url('assets/img/amazon-img.png')}}" width="120">
                                </div>
                                <div class="col-10">
                                    <!--  -->
                                    <div class="">
                                        <p>Software Developer  l  Cisco</p>
                                    </div>
                                    <div class="clearfix">
                                        <p class="float-left">Dec 2017 - may 2018</p>
                                        <p class="float-right"><i class="fa fa-map-marker-alt"></i> Mumbai, India</p>
                                    </div>
                                    <div class="">
                                        <ul>
                                            <li class="mb-4 light-gray">Creation / Modification / Appreval of Policies can be done in days opposed.</li>
                                            <li class="mb-4 light-gray">Policy Service - Building a centralized place for all the policies across population.</li>
                                            <a class="text-primary" href="#">See More</a>
                                        </ul>
                                    </div>
                                    <!--  -->
                                </div>
                                <!--  -->
                                <hr class="w-100 mx-3">
                                <div class="px-3">
                                    <a class="text-primary" href="#">Show 1 more experience</a>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div class="shadow p-20 bg-white">
                            <div class="clearfix">
                                <p class="font-weight-bold text-dark font-18 text-left float-left">Skills</p>
                            </div>
                            <!--  -->
                            <div class="row">
                                <!--  -->
                                <div class="col-12">
                                    <p class="font-14">GENERAL</p>
                                </div>
                                <div class="col-4">
                                    <img class="img-fluid mr-2" src="{{url('assets/img/data.png')}}" width="30">
                                    <span class="">Data Structures</span>
                                </div>
                                <div class="col-4">
                                    <div class="icon-size text-center">
                                        <i class="fa fa-circle"></i>
                                        <i class="fa fa-circle"></i>
                                        <i class="fa fa-circle"></i>
                                        <i class="far fa-circle"></i>
                                        <i class="far fa-circle"></i>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="">
                                        <p class="font-14 text-right">2 Years of exp.</p>
                                    </div>
                                </div>
                                <hr class="w-100 mx-3">
                                <!--  -->
                                <div class="col-12">
                                    <p class="font-14">LANGUAGES</p>
                                </div>
                                <div class="col-4 mb-4">
                                    <img class="img-fluid mr-2" src="{{url('assets/img/python.png')}}" width="30">
                                    <span class="">Data Structures</span>
                                </div>
                                <div class="col-4 mb-4">
                                    <div class="icon-size text-center">
                                        <i class="fa fa-circle"></i>
                                        <i class="fa fa-circle"></i>
                                        <i class="fa fa-circle"></i>
                                        <i class="far fa-circle"></i>
                                        <i class="far fa-circle"></i>
                                    </div>
                                </div>
                                <div class="col-4 mb-4">
                                    <div class="">
                                        <p class="font-14 text-right">2 Years of exp.</p>
                                    </div>
                                </div>
                                <!--  -->
                                <div class="col-4 mb-4">
                                    <img class="img-fluid mr-2" src="{{url('assets/img/java.png')}}" width="30">
                                    <span class="">Data Structures</span>
                                </div>
                                <div class="col-4 mb-4">
                                    <div class="icon-size text-center">
                                        <i class="fa fa-circle"></i>
                                        <i class="fa fa-circle"></i>
                                        <i class="fa fa-circle"></i>
                                        <i class="far fa-circle"></i>
                                        <i class="far fa-circle"></i>
                                    </div>
                                </div>
                                <div class="col-4 mb-4">
                                    <div class="">
                                        <p class="font-14 text-right">2 Years of exp.</p>
                                    </div>
                                </div>
                                <!--  -->
                                <div class="col-4 mb-4">
                                    <img class="img-fluid mr-2" src="{{url('assets/img/c.png')}}" width="30">
                                    <span class="">Data Structures</span>
                                </div>
                                <div class="col-4 mb-4">
                                    <div class="icon-size text-center">
                                        <i class="fa fa-circle"></i>
                                        <i class="fa fa-circle"></i>
                                        <i class="fa fa-circle"></i>
                                        <i class="far fa-circle"></i>
                                        <i class="far fa-circle"></i>
                                    </div>
                                </div>
                                <div class="col-4 mb-4">
                                    <div class="">
                                        <p class="font-14 text-right">2 Years of exp.</p>
                                    </div>
                                </div>
                                <!--  -->
                                <div class="col-4 mb-4">
                                    <img class="img-fluid mr-2" src="{{url('assets/img/javascript.png')}}" width="30">
                                    <span class="">Data Structures</span>
                                </div>
                                <div class="col-4 mb-4">
                                    <div class="icon-size text-center">
                                        <i class="fa fa-circle"></i>
                                        <i class="fa fa-circle"></i>
                                        <i class="fa fa-circle"></i>
                                        <i class="far fa-circle"></i>
                                        <i class="far fa-circle"></i>
                                    </div>
                                </div>
                                <div class="col-4 mb-4">
                                    <div class="">
                                        <p class="font-14 text-right">2 Years of exp.</p>
                                    </div>
                                </div>
                                <hr class="w-100 mx-3">
                                <!--  -->
                                <!--  -->
                                <div class="col-12">
                                    <p class="font-14">CLOUD</p>
                                </div>
                                <div class="col-4">
                                    <img class="img-fluid mr-2" src="{{url('assets/img/aws.png')}}" width="30">
                                    <span class="">AWS</span>
                                </div>
                                <div class="col-4">
                                    <div class="icon-size text-center">
                                        <i class="fa fa-circle"></i>
                                        <i class="fa fa-circle"></i>
                                        <i class="fa fa-circle"></i>
                                        <i class="far fa-circle"></i>
                                        <i class="far fa-circle"></i>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="">
                                        <p class="font-14 text-right">2 Years of exp.</p>
                                    </div>
                                </div>
                                <hr class="w-100 mx-3">
                                <!--  -->
                                <!--  -->
                                <div class="col-12">
                                    <p class="font-14">DATABASES</p>
                                </div>
                                <div class="col-4">
                                    <img class="img-fluid mr-2" src="{{url('assets/img/aws.png')}}" width="30">
                                    <span class="">MySQL</span>
                                </div>
                                <div class="col-4">
                                    <div class="icon-size text-center">
                                        <i class="fa fa-circle"></i>
                                        <i class="fa fa-circle"></i>
                                        <i class="fa fa-circle"></i>
                                        <i class="far fa-circle"></i>
                                        <i class="far fa-circle"></i>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="">
                                        <p class="font-14 text-right">2.5 Years of exp.</p>
                                    </div>
                                </div>
                                <!--  -->
                            </div>
                        </div>
                        <!--  -->
                        <div class="shadow p-20 bg-white">
                            <div class="clearfix">
                                <p class="font-weight-bold text-dark font-18 text-left float-left">Projects</p>
                            </div>
                            <!--  -->
                            <div class="row max-height">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <img class="img-fluid stock-img" src="{{url('assets/img/project-img.png')}}">
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <!--  -->
                                    <div class="mt-5 mt-xl-0 mt-lg-0 mt-md-0">
                                        <p class="text-medium text-dark font-18">Stock Price Analysis</p>
                                        <ul>
                                            <li class="list-unstyled mb-4 light-gray font-14 text-light-300 line-height-24">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique posuere velit, placerat gravida mauris pharetra sit amet. Duis interdum est quam.</li>
                                            <div class="btn-group custom-group">
                                                <a type="button" class="btn btn-light font-12">Python</a>
                                                <a type="button" class="btn btn-light font-12 mx-2">Django</a>
                                                <a type="button" class="btn btn-light font-12">Rest API</a>
                                                <a class="text-primary font-14 text-medium ml-5 mobile-css" href="#myModal" data-toggle="modal">See more details</a>
                                            </div>
                                            <!-- popup model -->
                                            <div class="modal fade" id="myModal">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header border-bottom-0">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body model-custom-css py-0">
                                                            <img class="img-fluid" src="{{url('assets/img/project-img.png')}}">
                                                            <p class="mt-4 text-medium text-dark font-18">Stock Price Analysis</p>
                                                            <div class="btn-group custom-group">
                                                                <a type="button" class="btn btn-light font-12">Python</a>
                                                                <a type="button" class="btn btn-light font-12 mx-xl-3 mx-lg-2 mx-md-4 mx-2">Django</a>
                                                                <a type="button" class="btn btn-light font-12">Rest API</a>
                                                            </div>
                                                            <p class="mt-4">Desription</p>
                                                            <li class="list-unstyled mb-4 light-gray font-14 line-height-24 text-light-300">
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique posuere velit, placerat gravida mauris pharetra sit amet. Duis interdum est quam.
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique posuere velit, placerat gravida mauris pharetra sit amet. Duis interdum est quam.
                                                            </li>
                                                            <li class="list-unstyled mb-4 light-gray font-14 line-height-24 text-light-300">
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique posuere velit, placerat gravida mauris pharetra sit amet. Duis interdum est quam.
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique posuere velit, placerat gravida mauris pharetra sit amet. Duis interdum est quam.
                                                            </li>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- popup model end -->
                                        </ul>
                                    </div>
                                    <!--  -->
                                </div>
                                <!--  -->
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 mt-5">
                                    <img class="img-fluid" src="{{url('assets/img/project-img.png')}}">
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12 mt-5">
                                    <!--  -->
                                    <div class="">
                                        <p class="text-medium text-dark font-18">Recon Dashboard</p>
                                        <ul>
                                            <li class="list-unstyled mb-4 light-gray font-14 text-light-300 line-height-24">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique posuere velit, placerat gravida mauris pharetra sit amet. Duis interdum est quam.</li>
                                            <div class="btn-group custom-group">
                                                <a type="button" class="btn btn-light font-12">Python</a>
                                                <a type="button" class="btn btn-light font-12 mx-2">Django</a>
                                                <a type="button" class="btn btn-light font-12">Rest API</a>
                                                <a class="text-primary font-14 text-medium ml-5 mobile-css" href="#myModal-2" data-toggle="modal">See more details</a>
                                            </div>
                                            <!-- popup model -->
                                            <div class="modal fade" id="myModal-2">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header border-bottom-0">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body model-custom-css py-0">
                                                            <img class="img-fluid" src="{{url('assets/img/project-img.png')}}">
                                                            <p class="mt-4 text-medium text-dark font-18">Stock Price Analysis</p>
                                                            <div class="btn-group custom-group">
                                                                <a type="button" class="btn btn-light font-12">Python</a>
                                                                <a type="button" class="btn btn-light font-12 mx-xl-3 mx-lg-2 mx-md-4 mx-2">Django</a>
                                                                <a type="button" class="btn btn-light font-12">Rest API</a>
                                                            </div>
                                                            <p class="mt-4">Desription</p>
                                                            <li class="list-unstyled mb-4 light-gray font-14 line-height-24 text-light-300">
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique posuere velit, placerat gravida mauris pharetra sit amet. Duis interdum est quam.
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique posuere velit, placerat gravida mauris pharetra sit amet. Duis interdum est quam.
                                                            </li>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- popup model end -->
                                        </ul>
                                    </div>
                                    <!--  -->
                                </div>
                                <!--  -->
                            </div>
                        </div>
                        <!--  -->
                        <div class="shadow p-20 bg-white">
                            <div class="clearfix">
                                <p class="font-weight-bold text-dark font-18 text-left float-left mb-4">Education</p>
                            </div>
                            <!--  -->
                            <div class="row">
                                <div class="col-12">
                                    <p class="font-14 text-uppercase">Bachelor of technology</p>
                                </div>
                                <div class="col-2">
                                    <img class="img-fluid" src="{{url('assets/img/amazon-img.png')}}" width="120">
                                </div>
                                <div class="col-10">
                                    <!--  -->
                                    <div class="">
                                        <p class="text-medium font-18">Sardar Patel Institute of Technology, Mumbai</p>
                                        <p class="list-unstyled mb-2 light-gray font-16 text-medium">COMPUTER SCIENCE & ENGINEERING</p>
                                        <div class="clearfix">
                                            <p class="float-left font-16 text-medium">Jul 2013 - Jun 2016</p>
                                            <p class="float-right font-16 text-medium">CGPA 8.0/10</p>
                                        </div>
                                    </div>
                                    <!--  -->
                                </div>
                                <hr class="w-100 mx-3">
                                <!--  -->
                                <div class="col-12">
                                    <p class="font-14 text-uppercase">Diploma</p>
                                </div>
                                <div class="col-2">
                                    <img class="img-fluid" src="{{url('assets/img/amazon-img.png')}}" width="120">
                                </div>
                                <div class="col-10">
                                    <!--  -->
                                    <div class="">
                                        <p class="text-medium font-18">S.H.M.I.T. Thane, Mumbai</p>
                                        <p class="list-unstyled mb-2 light-gray text-uppercase font-16 text-medium">Computer Technology</p>
                                        <div class="clearfix">
                                            <p class="float-left font-16 text-medium">Jul 2010 - Jun 2013</p>
                                            <p class="float-right font-16 text-medium">Percentage 90.58%</p>
                                        </div>
                                    </div>
                                    <!--  -->
                                </div>
                                <hr class="w-100 mx-3">
                                <!--  -->
                                <div class="px-3">
                                    <a class="text-primary" href="#">Show 1 more education</a>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div class="shadow p-20 bg-white">
                            <div class="clearfix">
                                <p class="font-weight-bold text-dark font-18 text-left float-left">Projects</p>
                            </div>
                            <!--  -->
                            <div class="row">
                                <div class="nav nav-pills col-4 max-height-certificates
                                    border border-left-0 border-bottom-0 border-top-0" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <!--  -->
                                    <a class="nav-link intro-certificates active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                        <img class="img-fluid" src="{{url('assets/img/Certificates-1.png')}}">
                                    </a>
                                    <!--  -->
                                    <a class="nav-link intro-certificates" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                        <img class="img-fluid" src="{{url('assets/img/Certificates-2.png')}}">
                                    </a>
                                    <!--  -->
                                    <a class="nav-link intro-certificates" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                        <img class="img-fluid" src="{{url('assets/img/Certificates-3.png')}}">
                                    </a>
                                    <!--  -->
                                    <a class="nav-link intro-certificates" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                        <img class="img-fluid" src="{{url('assets/img/Certificates-4.png')}}">
                                    </a>
                                    <!--  -->
                                    <a class="nav-link intro-certificates" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-Certificates-5" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                        <img class="img-fluid" src="{{url('assets/img/Certificates-4.png')}}">
                                    </a>
                                    <!--  -->
                                </div>
                                <!--  -->
                                <div class="tab-content col-8" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                        <img class="img-fluid" src="{{url('assets/img/Certificates-main.png')}}">
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                        <img class="img-fluid" src="{{url('assets/img/Certificates-2.png')}}">
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                        <img class="img-fluid" src="{{url('assets/img/Certificates-3.png')}}">
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                        <img class="img-fluid" src="{{url('assets/img/Certificates-4.png')}}">
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-Certificates-5" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                        <img class="img-fluid" src="{{url('assets/img/Certificates-5.png')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div class="shadow p-20 bg-white">
                            <p class="font-weight-bold text-dark font-18">Letter of Recommendation</p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class=" list-unstyled text-medium nav-item">
                                    <a class="nav-link text-dark active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                                </li>
                                <li class=" list-unstyled text-medium nav-item">
                                    <a class="nav-link text-dark" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <ul class="row px-2">
                                        <li class="list-unstyled py-5 col-xl-3 col-lg-3 col-md-3 col-4">
                                            <p class="mb-4">Name :</p>
                                            <p class="mb-4">Designation :</p>
                                            <p class="mb-4">Organization :</p>
                                        </li>
                                        <!--  -->
                                        <li class="list-unstyled py-5 col-xl-4 col-lg-4 col-md-4 col-8">
                                            <p class="mb-4 text-medium text-dark">Dulce Dias</p>
                                            <p class="mb-4 mb-lg-1 text-medium text-dark">Software Development Engineer</p>
                                            <p class="mb-4 text-medium text-dark">Amazon</p>
                                        </li>
                                        <!--  -->
                                        <li class="list-unstyled col-xl-5 col-lg-5 col-md-5 col-12">
                                            <img class="img-fluid" src="{{url('assets/img/letter-recommendation.png')}}">
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <ul class="row px-2">
                                        <li class="list-unstyled py-5 col-xl-3 col-lg-3 col-md-3 col-4">
                                            <p class="mb-4">Name :</p>
                                            <p class="mb-4">Designation :</p>
                                            <p class="mb-4">Organization :</p>
                                        </li>
                                        <!--  -->
                                        <li class="list-unstyled py-5 col-xl-4 col-lg-4 col-md-4 col-8">
                                            <p class="mb-4 text-medium text-dark">Dulce Dias</p>
                                            <p class="mb-4 mb-lg-1 text-medium text-dark">Software Development Engineer</p>
                                            <p class="mb-4 text-medium text-dark">Amazon</p>
                                        </li>
                                        <!--  -->
                                        <li class="list-unstyled col-xl-5 col-lg-5 col-md-5 col-12">
                                            <img class="img-fluid" src="{{url('assets/img/letter-recommendation.png')}}">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div class="shadow p-20 bg-white">
                            <p class="font-weight-bold text-dark font-18 font-18">General Details</p>
                            <ul class="row">
                                <li class="list-unstyled col-xl-6 col-lg-6 col-md-6 col-6">
                                    <p>Gender :</p>
                                </li>
                                <li class="list-unstyled col-xl-6 col-lg-6 col-md-6 col-6">Dulce Dias</li>
                                <!--  -->
                                <li class="list-unstyled col-xl-6 col-lg-6 col-md-6 col-6">
                                    <p>Age :</p>
                                </li>
                                <li class="list-unstyled col-xl-6 col-lg-6 col-md-6 col-6">24</li>
                                <!--  -->
                                <li class="list-unstyled col-xl-6 col-lg-6 col-md-6 col-6">
                                    <p>DOB :</p>
                                </li>
                                <li class="list-unstyled col-xl-6 col-lg-6 col-md-6 col-6">01/02/1996</li>
                                <!--  -->
                                <li class="list-unstyled col-xl-6 col-lg-6 col-md-6 col-6">
                                    <p>Marital Status :</p>
                                </li>
                                <li class="list-unstyled col-xl-6 col-lg-6 col-md-6 col-6">Single</li>
                                <!--  -->
                                <li class="list-unstyled col-xl-6 col-lg-6 col-md-6 col-6">
                                    <p>Address :</p>
                                </li>
                                <li class="list-unstyled col-xl-6 col-lg-6 col-md-6 col-6">50, XY, Los Angeles, USA </li>
                                <!--  -->
                                <li class="list-unstyled col-xl-6 col-lg-6 col-md-6 col-6">
                                    <p>Mother’s Name :</p>
                                </li>
                                <li class="list-unstyled col-xl-6 col-lg-6 col-md-6 col-6">Hanna Baptista</li>
                                <!--  -->
                                <li class="list-unstyled col-xl-6 col-lg-6 col-md-6 col-6">
                                    <p>Mother’s Occupation :</p>
                                </li>
                                <li class="list-unstyled col-xl-6 col-lg-6 col-md-6 col-6">Teacher</li>
                                <!--  -->
                                <li class="list-unstyled col-xl-6 col-lg-6 col-md-6 col-6">
                                    <p>Father’s Name :</p>
                                </li>
                                <li class="list-unstyled col-xl-6 col-lg-6 col-md-6 col-6">Omar Saris</li>
                                <!--  -->
                                <li class="list-unstyled col-xl-6 col-lg-6 col-md-6 col-6">
                                    <p>Father’s Occupation :</p>
                                </li>
                                <li class="list-unstyled col-xl-6 col-lg-6 col-md-6 col-6">Businessman</li>
                                <!--  -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12 mt-4">
                        <div class="quick-links">
                            <div class="mb-3 like-and-share">
                                <a class="btn bg-white p-3 font-18 mr-3 share-and-like-btn" href="#"><i class="fa fa-thumbs-up light-gray mr-2"></i><span class="border-right pr-2">(123)</span> Like</a>
                                <!--  -->
                                <a class="btn bg-white p-3 font-18 share-and-like-btn" href="#"><i class="fa fa-share light-gray mr-2"></i>Share</a>
                            </div>
                            <div class="font-20 font-weight-bold">Quick Links</div>
                            <ul class="clearfix mb-4">
                                <li class="btn text-primary intro-btn bg-white float-left mr-3 mt-4" >Cover Letter</li>
                                <li class="btn text-primary intro-btn bg-white float-left mr-3 mt-4">Skills</li>
                                <li class="btn text-primary intro-btn bg-white float-left mr-3 mt-4">CTC</li>
                                <li class="btn text-primary intro-btn bg-white float-left mr-3 mt-4">Job Type</li>
                                <li class="btn text-primary intro-btn bg-white float-left mr-3 mt-4">Prefered Roles</li>
                                <li class="btn text-primary intro-btn bg-white float-left mr-3 mt-4">Projects</li>
                                <li class="btn text-primary intro-btn bg-white float-left mr-3 mt-4">Offer In Hand</li>
                                <li class="btn text-primary intro-btn bg-white float-left mr-3 mt-4">Education</li>
                                <li class="btn text-primary intro-btn bg-white float-left mr-3 mt-4">Languages</li>
                                <li class="btn text-primary intro-btn bg-white float-left mr-3 mt-4">Achivements</li>
                                <li class="btn text-primary intro-btn bg-white float-left mr-3 mt-4">Notice Period</li>
                                <li class="btn text-primary intro-btn bg-white float-left mr-3 mt-4">Interests</li>
                                <li class="btn text-primary intro-btn bg-white float-left mr-3 mt-4">Concerns</li>
                                <li class="btn text-primary intro-btn bg-white float-left mr-3 mt-4">Medical</li>
                                <li class="btn text-primary intro-btn bg-white float-left mr-3 mt-4">Strenghts</li>
                                <li class="btn text-primary intro-btn bg-white float-left mr-3 mt-4">General Details</li>
                                <li class="btn text-primary intro-btn bg-white float-left mr-3 mt-4">Letter Of Recommendation</li>
                            </ul>
                        </div>
                        <div class="row no-gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <div class="font-20 font-weight-bold my-3">
                                    Latest News
                                </div>
                            </div>
                            <!--  -->
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4 mb-lg-0">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
                                        <div class="card border-0 right-side-bg mb-4">
                                            <img class="img-fluid w-100 john-img" src="{{url('assets/img/job-card-img.png')}}" alt="Card image">
                                            <div class="card-body">
                                                <h4 class="card-title font-weight-bold font-18">Up your career game. Seriously.</h4>
                                                <p class="card-text font-14 text-light-300">Some example text some example text. John Doe is an architect and engineer</p>
                                                <a href="#" class="text-primary">Read full article</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  -->
                                    <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
                                        <div class="card border-0 right-side-bg mb-4">
                                            <img class="img-fluid w-100 john-img" src="{{url('assets/img/job-card-img.png')}}" alt="Card image">
                                            <div class="card-body">
                                                <h4 class="card-title font-weight-bold font-18">Up your career game. Seriously.</h4>
                                                <p class="card-text font-14 text-light-300">Some example text some example text. John Doe is an architect and engineer</p>
                                                <a href="#" class="text-primary">Read full article</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  -->
                                    <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
                                        <div class="card border-0 right-side-bg mb-4">
                                            <img class="img-fluid w-100 john-img" src="{{url('assets/img/job-card-img.png')}}" alt="Card image">
                                            <div class="card-body">
                                                <h4 class="card-title font-weight-bold font-18">Up your career game. Seriously.</h4>
                                                <p class="card-text font-14 text-light-300">Some example text some example text. John Doe is an architect and engineer</p>
                                                <a href="#" class="text-primary">Read full article</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  -->
                                </div>
                            </div>
                            <!--  -->
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 mb-4">
                                        <div class="right-side-bg p-5 p-lg-3 py-lg-5">
                                            <h4 class="text-semibold">Advertisement</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                        </div>
                    </div>
                </div>
            </div>
        
        <div class="scrolltop float-right">
            <img class="img-fluid" src="{{url('assets/img/icon/icon-top.svg')}}" onclick="topFunction()" id="mybtn" style="display: block;">
        </div>
    </section>
</body>
@endsection
@section('scripts')
<script>
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
