@extends('layouts.app')
@section('style')
<link href="{!! asset('assets/css/parsley.css') !!}" rel="stylesheet" type="text/css" />
<style type="text/css">
    .parsley-required, .parsley-type{
        list-style: none;
        color: #f28484;
    }
</style>
@stop
@section('content')
<div class="login-body">
    <nav class="navbar navbar-expand-lg extra-padding">
        <a href="{{url('/')}}" class="logo-css">
            <img class="img-fluid navbar-brand laptop-logo" src="{{ url('assets/img/logo.png')}}" width="150">
            <img class="img-fluid navbar-brand mobile-logo" src="{{ url('assets/img/logo-white.png')}}" width="130">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
            <img class="img-fluid" src="{{ url('assets/img/icon/bar-menu-img.png')}}">
        </span>
        </button>
        <div class="collapse navbar-collapse navbar-collapse-custom " id="navbarNav">
            <ul class="navbar-nav navbar-custom ml-auto">
                <li class="nav-item list-unstyled custom-border mr-3">
                    <a class="nav-link animated-nav" href="#">Find a Job</a>
                </li>
                <li class="nav-item list-unstyled custom-border mr-3">
                    <a class="nav-link animated-nav" href="#">Upload Resume</a>
                </li>
                <li class="nav-item list-unstyled custom-border mr-3">
                    <a class="nav-link animated-nav" href="#">Post a Job</a>
                </li>
                <li class="nav-item list-unstyled hover-custom">
                    <a class="nav-link login-signup-btn py-2 px-4 text-white text-center" href="{{url('login')}}">Login</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- nav end -->
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-xs-12 mx-auto my-60">
                <div class="p-80 login-background">
                    <div class="pb-4">
                        <h5 class="font-35 font-weight-bold">Candidate Register</h5>
                    </div>
                    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                        @if(Session::has($msg))
                            <div class="alert alert-{{ $msg }}">{{ Session::get($msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></div>
                        @endif
                    @endforeach
                    <form action="{{ route('register')}}" method="post" id="register_form">
                        @csrf
                        <div class="">
                            <p class="text-medium font-15 text-dark ">If you are recuiter - <a href="{{url('recruiter/registration')}}">Signup</a></p>
                            <!-- <div class="form-check-inline pb-5 mr-3">
                                <input type="radio" class="form-check-input" name="optradio" id="candidate" value="candidate">
                                <label class="form-check-label" for="candidate"> Candidate </label>
                            </div> -->
                           <!--  <div class="form-check-inline pb-5 mr-3">
                                <input type="radio" class="form-check-input" name="optradio" id="recruiter" value="recruiter">
                                <label class="form-check-label" for="recruiter"> Recruiter </label>
                            </div> -->
                            <!-- <p>If you are recuiter - <a href="#">Signup</a></p> -->
                        </div>
                        <div class="">
                            <p class="text-medium font-20">Fill the form</p>
                                <div class="form-group mb-4">
                                    <input type="text" name="first_name" class="form-control form-custom" id="first_name" data-parsley-required="true">
                                    <label class="form-control-placeholder" for="first_name">First name</label>
                                </div>
                                <div class="form-group mb-4">
                                    <input type="text" name="last_name" class="form-control form-custom" id="last_name" data-parsley-required="true">
                                    <label class="form-control-placeholder" for="last_name">Last name</label>
                                </div>
                                <div class="form-group mb-4">
                                    <input type="text" name="mobile_number" class="form-control form-custom" id="mobile_number" data-parsley-required="true">
                                    <label class="form-control-placeholder" for="mobile_number">Mobile number</label>
                                </div>
                                <div class="form-group mb-4">
                                    <input type="text" name="email" class="form-control form-custom" id="email" data-parsley-required="true" data-parsley-type="email" >
                                    <label class="form-control-placeholder" for="email">Email</label>
                                </div>
                                <div class="form-group mb-4">
                                    <input type="password" name="create_password" class="form-control form-custom" id="create_password" data-parsley-required="true">
                                    <label class="form-control-placeholder" for="create_password">Create Password</label>
                                </div>
                                <div class="form-group mb-4">
                                    <input type="password" name="confirm_password" class="form-control form-custom" id="confirm_password" data-parsley-required="true">
                                    <label class="form-control-placeholder" for="confirm_password">Confirm Password</label>
                                </div>
                                <div class="form-group">
                                    <select class="form-control form-custom classic" id="sel1" name="sellist1">
                                        <option>State</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control form-custom classic" id="sel1" name="sellist1">
                                        <option>City</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                                <div class="clearfix">
                                    <div class="float-left martial-mobile">
                                        <p class="text-medium">Martial status</p>
                                    </div>
                                    <div class="float-right martial-check">
                                        <div class="form-check-inline">
                                            <input type="radio" class="form-check-input" name="martial_status"  id="married" value="married">
                                            <label class="form-check-label check-width" for="married"> Married </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input type="radio" class="form-check-input" name="martial_status" id="single" value="single">
                                            <label class="form-check-label check-width" for="single"> Single </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <div class="float-left martial-mobile mt-3 mt-xl-0 mt-lg-0 mt-md-0">
                                        <p class="text-medium">Gender</p>
                                    </div>
                                    <div class="float-right radio-btn-alignment martial-check">
                                        <div class="form-check-inline">
                                            <input type="radio" class="form-check-input" name="Gender" id="male" value="male">
                                            <label class="form-check-label check-width" for="male"> Male </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input type="radio" class="form-check-input" name="Gender" id="female" value="female">
                                            <label class="form-check-label check-width" for="female"> Female </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <div class="form-check float-left py-4">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label text-primary longin-label" for="exampleCheck1">Accept Terms & Conditions</label>
                                    </div>
                                    <div class="float-right py-2 register-blue-btn">
                                        <button type="submit" class="btn blue-btn text-white">Submit</button>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <div class="float-right mt-3 register-blue-btn">
                                        <p>Already have an account?<a class="register-text text-decoration-none" href="{{url('login')}}"> Log In</a></p>
                                    </div>
                                </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('assets/js/parsley.js') }}"></script>
<script type="text/javascript">
     $('#register_form').parsley();
</script>
@stop