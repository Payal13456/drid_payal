<!-- nav start -->
<div class="navbar-bg-color">
    <nav class="navbar navbar-expand-lg extra-padding">
        <a href="{{url('/introduction')}}"><img class="img-fluid navbar-brand" src="{{url('assets/img/logo-white.png')}}" width="150"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
            <img class="img-fluid" src="{{url('assets/img/icon/bar-menu-img.png')}}">
        </span>
        </button>
        <div class="collapse navbar-collapse navbar-collapse-custom " id="navbarNav">
            <ul class="navbar-nav navbar-custom ml-auto">
                <li class="nav-item list-unstyled custom-border mr-3">
                    <span class="nav-icons"><i class="fa fa-search" aria-hidden="true"></i></span>
                    <a class="nav-link animated-nav" href="#">Search</a>
                </li>
                <li class="nav-item list-unstyled custom-border mr-3">
                    <span class="nav-icons"><i class="fa fa-bell" aria-hidden="true"></i></span>
                    <a class="nav-link animated-nav" href="#">Notification</a>
                </li>
                <li class="nav-item list-unstyled custom-border mr-3">
                    <span class="nav-icons"><i class="fa fa-cog" aria-hidden="true"></i></span>
                    <a class="nav-link animated-nav" href="#">Settings</a>
                </li>
                <!-- <li class="nav-item list-unstyled custom-border mr-3">
                    <a class="nav-link animated-nav" href="#">Consultant</a>
                </li> -->
                <!-- <li class="nav-item list-unstyled custom-border mr-3">
                    
                    <a class="nav-link animated-nav" href="#"><img class="img-fluid" alt="" src="{{url('/')}}/{{$user->profile_img}}"></a>
                </li> -->

                <!-- Dropdown -->
                <li class="nav-item list-unstyled custom-border mr-3 dropdown">
                  <a class="nav-link animated-nav dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                   <img class="img-fluid profile_img" alt="" src="{{url('/')}}/{{$user->profile_img}}" style="border-radius:50%;height: 50px;width: 50px;">
                   {{Auth::user()->fname}}
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{url('/profile')}}">Edit Profile</a>
                    <a class="dropdown-item" href="javascript:void(0);" onclick="document.getElementById('delete-form').submit();">Delete Account</a>
                    <form id="delete-form" action="{{ url('delete-account') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    <!-- <a class="dropdown-item" href="#">Logout</a> -->
                    <a href="javascript:void(0);" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="dropdown-item" title="Logout">Logout</a>
                     <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                     </form>
                  </div>
                </li>
            </ul>   
        </div>
    </nav>
</div>
<!-- nav end -->
