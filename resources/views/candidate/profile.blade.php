@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

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
        <div class="container-fluid extra-padding mb-5">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12 mt-4">
                    <div class="card hovercard">
                        <div class="cardheader text-right">
                            <a href="#myModal-3" data-toggle="modal"><i class="text-white mt-3 mr-3 fa fa-pen"></i></a>
                        </div>
                        <!-- popup model -->
                        <div class="modal fade text-left" id="myModal-3">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header border-bottom-0">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body model-custom-css py-0">
                                        <div class="row">
                                            <div class="col-5 text-center">
                                                <div class="profile-modal">
                                                    <div class="file-upload">
                                                        <label class="" for="customFile">
                                                            <i class="fa fa-upload"></i>
                                                            <p class="font-14 mb-0">Upload photo</p>
                                                        </label>
                                                        <input type="file" class="custom-file-input" id="customFile" name="filename">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--  -->
                                            <div class="col-7">
                                                <div class="cover-photo p-5 text-center">
                                                    <div class="file-upload">
                                                        <label class="" for="customFile">
                                                            <i class="fa fa-upload"></i>
                                                            <p class="font-14">Upload Cover Photo</p>
                                                        </label>
                                                        <input type="file" class="custom-file-input" id="customFile" name="filename">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mt-4 text-medium text-dark font-18">Choose your status</p>
                                        <div class="form-check-inline mr-3">
                                            <input type="radio" class="form-check-input" name="optradio" id="open_opportunity" value="">
                                            <label class="form-check-label" for="open_opportunity">
                                                Open for opportunity
                                            </label>
                                        </div>
                                        <div class="form-check-inline mr-3">
                                            <input type="radio" class="form-check-input" name="optradio" id="none" value="">
                                            <label class="form-check-label" for="none">
                                                None
                                            </label>
                                        </div>
                                        <div class="form-group mb-4 mt-4">
                                            <input type="text" name="name" class="form-control form-custom" id="name" required>
                                            <label class="form-control-placeholder" for="name">Jaydon Bergson</label>
                                        </div>
                                        <!--  -->
                                        <div class="form-group mb-4">
                                            <input type="text" name="designation" class="form-control form-custom" id="designation" required>
                                            <label class="form-control-placeholder" for="designation">Designation</label>
                                        </div>
                                        <!--  -->
                                        <div class="form-group mb-4">
                                            <input type="text" name="location" class="form-control form-custom" id="location" required>
                                            <label class="form-control-placeholder" for="location">Location</label>
                                        </div>
                                        <!--  -->
                                        <div class="form-group mb-4">
                                            <input type="tel" name="phone_number" class="form-control form-custom" id="phone_number" required>
                                            <label class="form-control-placeholder" for="phone_number">Phone number</label>
                                        </div>
                                        <!--  -->
                                        <div class="form-group mb-4">
                                            <input type="text" name="email" class="form-control form-custom" id="email" required>
                                            <label class="form-control-placeholder" for="email">Email</label>
                                        </div>
                                        <!--  -->
                                        <div class="form-group mb-4">
                                            <input type="text" name="github_url" class="form-control form-custom" id="github_url" required>
                                            <label class="form-control-placeholder" for="github_url">Github URL</label>
                                        </div>
                                        <!--  -->
                                        <div class="form-group mb-4">
                                            <input type="text" name="linkedin_url" class="form-control form-custom" id="linkedin_url" required>
                                            <label class="form-control-placeholder" for="linkedin_url">Linkedin URL</label>
                                        </div>
                                        <!--  -->
                                        <div class="float-right py-2">
                                            <button type="submit" class="btn blue-btn text-white">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- popup model end -->
                        <div class="avatar">
                            <img class="img-fluid" alt="" src="{{url('assets/img/profile.png')}}">
                        </div>
                        <div class="info mb-4">
                            <div class="desc text-dark mt-0">ID: #DRID{{$user->id}} 
                                <i class="fa fa-clone id-copy-icon"></i>
                            </div>
                            <div class="title">
                                <a target="#" href="#">{{$user->fname}} {{$user->lname}}</a>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="shadow p-20 bg-white clearfix">
                        <p class="float-left mb-0 text-dark font-weight-bold font-18">Sammary</p>
                        <a href="#myModal-4" data-toggle="modal"><i class="float-right text-primary mt-1 fa fa-pen"></i></a>
                        <!-- popup model -->
                        <div class="modal fade text-left" id="myModal-4">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header border-bottom-0">
                                        <p class="font-18 text-dark font-weight-bold">Sammary</p>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body model-custom-css py-0">
                                        <div class="form-group my-4">
                                            <textarea class="form-control form-textarea" rows="5" id="comment" required></textarea>
                                            <label class="form-control-placeholder" for="comment">Comment:</label>
                                        </div>
                                    </div>
                                    <div class="float-right text-right pr-3 py-2">
                                        <button type="submit" class="btn blue-btn text-white">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- popup model end -->
                    </div>
                    <!--  -->
                    <div class="shadow p-20 bg-white clearfix">
                        <p class="float-left mb-0 font-weight-bold text-dark font-18">Cover Letter</p>
                        <i class="float-right text-primary mt-1 fa fa-pen"></i>
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
                        <div class="checkbox form-inline mb-3">
                            <label class="light-gray"><input class="mr-2 job-type-checkbox" type="checkbox" value="">Contract</label>
                        </div>
                        <div class="checkbox form-inline mb-3">
                            <label class="light-gray"><input class="mr-2 job-type-checkbox" type="checkbox" value="">Internship</label>
                        </div>
                    </div>
                    <!--  -->
                    <div class="shadow p-20 bg-white clearfix">
                        <p class="float-left mb-0 font-weight-bold text-dark font-18">Prefered Roles</p>
                        <i class="float-right text-primary mt-1 fa fa-pen"></i>
                    </div>
                    <!--  -->
                    <div class="shadow p-20 bg-white clearfix">
                        <p class="float-left mb-0 font-weight-bold text-dark font-18">CTC</p>
                        <i class="float-right text-primary mt-1 fa fa-pen"></i>
                    </div>
                    <!--  -->
                    <div class="shadow p-20 bg-white clearfix">
                        <p class="float-left mb-0 font-weight-bold text-dark font-18">Offers In-Hand</p>
                        <i class="float-right text-primary mt-1 fa fa-pen"></i>
                    </div>
                    <!--  -->
                    <div class="shadow p-20 bg-white clearfix">
                        <p class="float-left mb-0 font-weight-bold text-dark font-18">Languages</p>
                        <i class="float-right text-primary mt-1 fa fa-pen"></i>
                    </div>
                    <!--  -->
                    <div class="shadow p-20 bg-white clearfix">
                        <p class="float-left mb-0 font-weight-bold text-dark font-18">Achivements</p>
                        <i class="float-right text-primary mt-1 fa fa-pen"></i>
                    </div>
                    <!--  -->
                    <div class="shadow p-20 bg-white clearfix">
                        <p class="float-left mb-0 font-weight-bold text-dark font-18">Notice Period</p>
                        <i class="float-right text-primary mt-1 fa fa-pen"></i>
                    </div>
                    <!--  -->
                    <div class="shadow p-20 bg-white clearfix">
                        <p class="float-left mb-0 font-weight-bold text-dark font-18">Intrest</p>
                        <i class="float-right text-primary mt-1 fa fa-pen"></i>
                    </div>
                    <!--  -->
                    <div class="shadow p-20 bg-white clearfix">
                        <p class="float-left mb-0 font-weight-bold text-dark font-18">Strength</p>
                        <i class="float-right text-primary mt-1 fa fa-pen"></i>
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
                    <div class="shadow p-20 bg-white clearfix">
                        <p class="float-left mb-0 font-weight-bold text-dark font-18">References</p>
                        <i class="float-right text-primary mt-1 fa fa-pen"></i>
                    </div>
                    <!--  -->
                </div>
                <!--  -->
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 mt-4">
                    <div class="Introduction-video text-center">
                        <div class="file-upload mb-3">
                            <label class="" for="customFile">
                                <i class="fa fa-upload"></i>
                                <p>Upload your Introduction vedio</p>
                            </label>
                            <input type="file" class="custom-file-input" id="customFile" name="filename">
                        </div>
                    </div>
                    <!--  -->
                    <div class="shadow p-20 bg-white clearfix">
                        <p class="float-left mb-0 font-weight-bold text-dark font-18">Career Objective</p>
                        <i class="float-right text-primary mt-1 fa fa-pen"></i>
                    </div>
                    <!--  -->
                    <div class="shadow p-20 bg-white clearfix">
                        <p class="float-left mb-0 font-weight-bold text-dark font-18 text-left">Professional Experience</p>
                        <a href="#myModal-5" data-toggle="modal"><i class="float-right text-primary mt-1 fa fa-pen"></i></a>
                        <!-- popup model -->
                        <div class="modal fade text-left" id="myModal-5">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header border-bottom-0">
                                        <p class="font-weight-bold font-18 text-dark">Professional Experience</p>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body model-custom-css py-0">
                                        <div class="row">
                                            <div class="col-3 text-center">
                                                <div class="cover-photo">
                                                    <div class="file-upload">
                                                        <label class="" for="customFile">
                                                            <i class="fa fa-upload"></i>
                                                            <p class="font-14 mb-0">Company name</p>
                                                        </label>
                                                        <input type="file" class="custom-file-input" id="customFile" name="filename">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--  -->
                                            <div class="col-9">
                                                <div class="form-group mb-4 mt-3">
                                                    <input type="text" name="company_names" class="form-control form-custom" id="company_names" required>
                                                    <label class="form-control-placeholder" for="company_names">Company name</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="form-group mb-4">
                                            <input type="text" name="designations" class="form-control form-custom" id="designations" required>
                                            <label class="form-control-placeholder" for="designations">Designation</label>
                                        </div>
                                        <!--  -->
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group mb-4">
                                                    <input type="date" name="date" class="form-control form-custom" id="date">
                                                </div>
                                            </div>
                                            <!--  -->
                                            <div class="col-6">
                                                <div class="form-group mb-4">
                                                    <input type="date" name="date" class="form-control form-custom" id="to">
                                                </div>
                                            </div>
                                            <div class="col-12 text-right my-2">
                                                <label class="light-gray"><input class="mr-2" type="checkbox" value="">Currently working</label>
                                            </div>
                                            <!--  -->
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <textarea class="form-control 
                                                    form-textarea" rows="5" id="responsibilities" required></textarea>
                                                    <label class="form-control-placeholder" for="responsibilities">Responsibilities</label>
                                                </div>
                                                <div class="text-left"><i class="fa fa-plus text-primary"></i>Add more experience</div>
                                                <div class="float-right text-right pr-3 py-2">
                                                    <button type="submit" class="btn blue-btn text-white">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- popup model end -->
                    </div>
                    <!--  -->
                    <div class="shadow p-20 bg-white clearfix">
                        <p class="float-left mb-0 font-weight-bold text-dark font-18 text-left">Internship</p>
                        <i class="float-right text-primary mt-1 fa fa-pen"></i>
                    </div>
                    <!--  -->
                    <div class="shadow p-20 bg-white clearfix">
                        <p class="float-left mb-0 font-weight-bold text-dark font-18 text-left">Skills</p>
                        <a href="#myModal-7" data-toggle="modal"><i class="float-right text-primary mt-1 fa fa-pen"></i></a>
                        <!-- popup model -->
                        <div class="modal fade text-left" id="myModal-7">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header border-bottom-0">
                                        <p class="font-weight-bold font-18 text-dark">Skills</p>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body model-custom-css py-0">
                                        <div class="row">
                                            <div class="col-12">
                                                <p class="text-semibold text-dark">GENERAL</p>
                                            </div>
                                            <div class="col-2">
                                                <img class="img-fluid mr-2" src="{{url('assets/img/data.png')}}" width="30">
                                            </div>
                                            <div class="col-4">
                                                <span class="">Data Structures</span>
                                                <div class="icon-size text-left">
                                                    <i class="fa fa-circle"></i>
                                                    <i class="fa fa-circle"></i>
                                                    <i class="fa fa-circle"></i>
                                                    <i class="far fa-circle"></i>
                                                    <i class="far fa-circle"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="">
                                                    <p class="text-right">2 Years of exp.</p>
                                                </div>
                                            </div>
                                            <hr class="w-100 mx-3">
                                            <!--  -->
                                            <!--  -->
                                            <div class="col-12">
                                                <p class="text-semibold text-dark">Language</p>
                                            </div>
                                            <div class="col-2">
                                                <img class="img-fluid mr-2" src="{{url('assets/img/python.png')}}" width="30">
                                            </div>
                                            <div class="col-4">
                                                <span class="">Python</span>
                                                <div class="icon-size text-left">
                                                    <i class="fa fa-circle"></i>
                                                    <i class="fa fa-circle"></i>
                                                    <i class="fa fa-circle"></i>
                                                    <i class="far fa-circle"></i>
                                                    <i class="far fa-circle"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="">
                                                    <p class="font-14 text-right">2 Years of exp.</p>
                                                </div>
                                            </div>
                                            <hr class="w-100 mx-3">
                                        </div>
                                        <!--  -->
                                        <div class="clearfix">
                                            <div class="float-left mt-4"><a href="#myModal-9" data-toggle="modal"><i class="fa fa-plus text-primary"></i></a>Add more experience</div>
                                            <!-- popup model -->
                                            <!-- <div class="modal fade text-left 
                                            skill-modal-9" id="myModal-9">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header border-bottom-0">
                                                        <p class="font-weight-bold font-18 text-dark">Skills</p>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body model-custom-css py-0">
                                                        <div class="form-group mb-4">
                                                            <input type="designation" class="form-control form-custom" id="exampleInputdesignation" aria-describedby="#" placeholder="Graphic De">
                                                        </div>
                                                        <hr class="">
                                                        <div class="checkbox">
                                                            <label class="light-gray">
                                                                <input class="mr-2" type="checkbox" value="">Graphic Design
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label class="light-gray">
                                                                <input class="mr-2" type="checkbox" value="">UIUX Design
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label class="light-gray">
                                                                <input class="mr-2" type="checkbox" value="">Photoshop
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label class="light-gray">
                                                                <input class="mr-2" type="checkbox" value="">Figma
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label class="light-gray">
                                                                <input class="mr-2" type="checkbox" value="">Illustrator
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label class="light-gray">
                                                                <input class="mr-2" type="checkbox" value="">Coreldraw
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label class="light-gray">
                                                                <input class="mr-2" type="checkbox" value="">Sketch
                                                            </label>
                                                        </div>
                                                        <!--<div class="clearfix">
                                                                <div class="float-right text-right pr-3 py-2">
                                                                    <button type="submit" class="btn blue-btn text-white">Save</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <!-- popup model end -->
                                            <div class="float-right text-right pr-3 py-2">
                                                <button type="submit" class="btn blue-btn text-white">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- popup model end -->
                    </div>
                    <!--  -->
                    <div class="shadow p-20 bg-white clearfix">
                        <p class="float-left mb-0 font-weight-bold text-dark font-18 text-left">Projects</p>
                        <a href="#myModal-6" data-toggle="modal"><i class="float-right text-primary mt-1 fa fa-pen"></i></a>
                        <!-- popup model -->
                        <div class="modal fade text-left" id="myModal-6">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header border-bottom-0">
                                        <p class="font-weight-bold font-18 text-dark">Projects</p>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body model-custom-css py-0">
                                        <div class="row">
                                            <div class="col-12 text-center">
                                                <div class="cover-photo p-5 mb-4 text-center">
                                                    <div class="file-upload">
                                                        <label class="" for="customFile">
                                                            <i class="fa fa-upload"></i>
                                                            <p class="font-14">Upload Cover Photo</p>
                                                        </label>
                                                        <input type="file" class="custom-file-input" id="customFile" name="filename">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="form-group mb-4">
                                            <input type="text" name="tool_used" class="form-control form-custom" id="tool_used" required>
                                            <label class="form-control-placeholder" for="tool_used">Tools used</label>
                                        </div>
                                        <!--  -->
                                        <div class="form-group">
                                            <textarea class="form-control form-textarea" rows="5" id="commentt" required></textarea>
                                            <label class="form-control-placeholder" for="commentt">Description</label>
                                        </div>
                                        <div class="form-group mb-4">
                                            <input type="text" name="project_url" class="form-control form-custom" id="project_url" required>
                                            <label class="form-control-placeholder" for="project_url">project url</label>
                                        </div>
                                        <div class="float-right text-right pr-3 py-2">
                                            <button type="submit" class="btn blue-btn text-white">Save</button>
                                        </div>
                                            
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- popup model end -->
                    </div>
                    <!--  -->
                    <div class="shadow p-20 bg-white clearfix">
                        <p class="float-left mb-0 font-weight-bold text-dark font-18 text-left">Education</p>
                        <i class="float-right text-primary mt-1 fa fa-pen"></i>
                    </div>
                    <!--  -->
                    <div class="shadow p-20 bg-white clearfix">
                        <p class="float-left mb-0 font-weight-bold text-dark font-18 text-left">Projects</p>
                        <i class="float-right text-primary mt-1 fa fa-pen"></i>
                    </div>
                    <!--  -->
                    <div class="shadow p-20 bg-white clearfix">
                        <p class="float-left mb-0 font-weight-bold text-dark font-18">Letter of Recommendation</p>
                        <i class="float-right text-primary mt-1 fa fa-pen"></i>
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
                    <!--  -->
                    <div class="text-center mt-100">
                        <div class="btn blue-btn">
                            <a class="text-white text-decoration-none" href="{{url('/introduction')}}">Save Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12 mt-4">
                    <div class="quick-links">
                        <div class="mb-3 like-and-share">
                            <a class="btn bg-white py-3 save-btn font-18 mr-3 share-and-like-btn" href="#">
                                Save Details
                            </a>
                            <a class="btn bg-white py-3 px-4 font-18 mr-3 my-2 share-and-like-btn" href="#"><i class="fa fa-thumbs-up text-light mr-2"></i><span class="border-right pr-2">(123)</span> Like</a>
                            <!--  -->
                            <a class="btn bg-white py-3 px-4 my-3 font-18 share-and-like-btn" href="#"><i class="fa fa-share text-light mr-2"></i>Share</a>
                        </div>
                        <div class="font-20 font-weight-bold">Your Profile Status</div>
                        <div>
                            <div class="rounded-lg clearfix">
                                <!-- Progress bar 1 -->
                                <div class="clearfix">
                                    <div class="progress-profile color-progress-1 my-4 float-left" data-value="25">
                                        <span class="progress-left">
                                            <span class="progress-bar border-1"></span>
                                        </span>
                                        <span class="progress-right">
                                            <span class="progress-bar border-1"></span>
                                        </span>
                                        <div class="progress-value w-100 h-100 rounded-circle d-flex
                                            align-items-center justify-content-center">
                                            <div class="font-20 mb-0 text-center circle-text font-weight-bold">25% <br>
                                                <small class="font-12" >Completed</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="float-right progress-text">
                                        <p class="">Increase your chances to get your dream job by filling all details.</p>
                                    </div>
                                </div>
                                <!-- END -->
                                
                            </div>
                        </div>
                        <div class="font-20 font-weight-bold">Quick Links</div>
                        <ul class="clearfix mb-4">
                            <li class="btn text-primary intro-btn bg-white float-left mr-3 mt-4">Cover Letter</li>
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
    $(function() {
        $(".progress-profile").each(function() {
        var value = $(this).attr('data-value');
        var left = $(this).find('.progress-left .progress-bar');
        var right = $(this).find('.progress-right .progress-bar');
        if (value > 0) {
        if (value <= 50) {
        right.css('transform', 'rotate(' + percentageToDegrees(value) + 'deg)')
        } else {
        right.css('transform', 'rotate(180deg)')
        left.css('transform', 'rotate(' + percentageToDegrees(value - 50) + 'deg)')
        }
        }
        })
        function percentageToDegrees(percentage) {
        return percentage / 100 * 360
        }
    });
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
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
