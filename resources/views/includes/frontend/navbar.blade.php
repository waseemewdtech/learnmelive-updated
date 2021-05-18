<link rel="stylesheet" href="{{ asset('assets/frontend/css/navbar.css') }}">
<nav class="navbar navbar-expand-lg navbar-light pl-0 pr-0 pt-2">
    <a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset('assets/frontend/images/navlogo.png') }}"
            alt="navbar logo" class="img-fluid" /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <ul class="navbar-nav ml-auto d-flex align-self-center f-20">

        @guest
        <li class="nav-item">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <form class="form-inline my-2 my-lg-0 ml-auto cl-ffffff robotoRegular">
                    <a href="{{route('login')}}"
                        class="btn btn-outline-success border-0 my-2 my-sm-0 pt-2 pb-2 cl-ffffff  login_button"
                        type="submit">Log In</a>
                    <a href="{{route('register')}}"
                        class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574 mr-3 ml-3 login_button"
                        type="submit">Sign up</a>
                    {{-- <span>Business?</span> --}}
                </form>
            </div>
        </li>

        @else
    </ul>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="pt-2 pb-2 border-ffffff w-25 d-flex pl-3 pr-3 rounded">
            <div class="w-100 cl-ffffff">
                <form action="{{ route('search') }}" method="get" id="search_form" onsubmit="return submit_function();">
                    @csrf
                    <input type="search" class="bg-transparent border-0 cl-ffffff w-100 robotoRegular "
                        onfocusout="search_function();" id="search" name="search"
                        placeholder="what are you looking for ?">
                </form>
            </div>

            <div> <img src="{{ asset('assets/frontend/images/search2.png') }}" class="ml-auto" alt=""
                    class="img-fluid p-2 search-img" /></div>

        </div>
        <!-- <form class="form-inline d-flex my-lg-0 bg-transparent border rounded w-25">
                    <input class="form-control mr-sm-0 pr-0 w-100 robotoRegular bg-transparent text-white border-0 pt-2 pb-2" type="search"
                        value="what are you looking for ?" aria-label="Search" />
                    <img src="{{ asset('assets/frontend/images/search2.png') }}" class="ml-auto" alt=""
                        class="img-fluid p-2 search-img" />
                </form> -->
        <ul class="navbar-nav ml-auto d-flex justify-content-center align-items-center f-20 ">

            <li class="nav-item  robotoRegular">
                <a class="nav-link cl-ffffff" href="#">Events <span class="sr-only">(current)</span></a>
            </li>
            {{-- <li class="nav-item  p-0 robotoRegular pl-4 cl-ffffff">
                <a class="nav-link cl-ffffff" href="#">Appointments

                    <sup class="badge badge-success mt-1 ">{{ appointmentCount()['appointment_count'] }}</sup>
                </a>
            </li> --}}
            <li class="nav-item dropdown  pl-4 robotoRegular">
                <a class="nav-link cl-ffffff cl-ffffff" href="#" id="navbarDropdown" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="">Appointments

                    <sup class="badge badge-success mt-1 rounded-circle">{{ (appointmentCount()['appointment_count'] == 0 )? '':appointmentCount()['appointment_count'] }}</sup>
                </a>
                <div class="dropdown-menu p-0" aria-labelledby="navbarDropdown">
                    @foreach (appointmentCount()['appointments'] as $appointment)
                        
                    <a class="dropdown-item d-flex row m-0 pt-2" href="{{ url('appointments') }}">
                        <div class="col-md-2 p-0">
                            <img src="{{ asset(Auth::user()->user_type=='specialist' ? $appointment->user->avatar : $appointment->specialist->user->avatar ) }}"
                                alt="" class="img-fluid rounded-circle w-40 h-40" />
                                <span class="green-dot ml--1 mt-1"></span>
                        </div>
                        <div class="col-md-6 pl-2 pt-1 p-0">
                            <div class="row m-0">
                                <div class="dropdown-heading">{{Auth::user()->user_type=='specialist' ? $appointment->user->username : $appointment->specialist->user->username }}</div>
                            </div>
                            <div class="row m-0">
                                <div class="dropdown-contnt">
                                    {{ $appointment->service->title }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 p-0">
                            <div class="row m-0 justify-content-end mt-1">
                                <span class="   ">${{ $appointment->rate }}</span>
                            </div>
                            <div class="row m-0 justify-content-end mt-2">
                                <span class="dropdown-contnt">{{ $appointment->time }}</span>
                            </div>
                        </div>
                    </a>
                    @endforeach
                        
                    
                    <div class="dropdown-footer mt-5">
                        <div class="bg-3ac574 row m-0 pt-2 pb-3">
                           
                            <div class="col-md-12 p-0 pr-3  text-right">
                            <a href="{{ url('appointments') }}" class="text-white">
                                <h6>
                                    See all in appointments
                                </h6>
                            </a>
                            </div>
                        </div>
                    </div>

                </div>
            </li>
            <li class="nav-item dropdown  pl-4 robotoRegular">
                <a class="nav-link cl-ffffff cl-ffffff messageDropdown" href="#" id="navbarDropdown" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="">
                    Messages
                    <span class="mt-1 ml-2"></span>
                </a>
                <div class="dropdown-menu p-0" aria-labelledby="navbarDropdown">
                    <nav>
                        <div class="nav nav-tabs row m-0" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link col-md-6 text-center" id="nav-profile-tab" data-toggle="tab"
                                href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
                                Notifications</a>
                            <a class="nav-item nav-link active col-md-6 text-center" id="nav-home-tab" data-toggle="tab"
                                href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Inbox</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            
                        </div>
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            
                        </div>

                        {{-- <div class="dropdown-footer mt-5">
                            <div class="bg-3ac574 row m-0 pt-2 pb-3">
                                <div class="col-md-6 d-flex p-0 pl-4">
                                    <div><i class="fa fa-cog text-white" aria-hidden="true"></i></div>
                                    <div><i class="fa fa-volume-up text-white pl-2" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="col-md-6 p-0 pr-3 text-white text-right">
                                    <a href="{{ route('chat.index') }}" style="color: #ffffff;"><h6>See all in inbox</h6></a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </li>
            <li class="nav-item  robotoRegular pl-4 cl-ffffff">
                @if (Auth::user()->user_type == 'specialist')
                    <a class="nav-link cl-ffffff" href="{{  url('services')}}?add_new">Add Service</a>
                @elseif(Auth::user()->user_type == 'client')
                    <a class="nav-link cl-ffffff" href="{{ route('client.index')}}#post_job">Post Request</a>
                @endif
            </li>
            <li class="nav-item  pl-4">
                <a class="nav-img" data-toggle="dropdown" href="#">
                    @if (Auth::user()->avatar != null)
                    <img src="{{ asset(Auth::user()->avatar) }}" class="img-fluid rounded-circle w-40 h-40"
                        alt="profile" />

                    @else

                    <img src="{{ asset('uploads/user/default.jpg') }}"
                        class="img-fluid w-40 h-40" alt="profile" width="40" />
                    @endif
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    @if (Auth::user()->user_type == 'client')
                    <a href="{{ route('client.index') }}" class="dropdown-item">Dashboard</a>

                    @endif
                    @if (Auth::user()->user_type == 'specialist')
                    <a href="{{ route('specialist.index') }}" class="dropdown-item">Dashboard</a>

                    @endif
                    @if (Auth::user()->user_type == 'admin')
                    <a href="{{ url('/dashboard/profile') }}" class="dropdown-item">Setting</a>

                    @endif
                    @if (Auth::user()->user_type != 'admin')
                    <a href="{{ route('profile.index') }}" class="dropdown-item">Profile</a>

                    @endif
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>




            </li>
            <script src="{{ asset('assets/frontend/js/video-js/jquery.min.js') }}"></script>
            <script>
            $(document).ready(function(){
                    setInterval(function(){ 
                        var username = $('.video-chat').data('caller');
                        $.ajax({
                            type: 'get',
                            url: '{{ url("call-checker") }}',
                            data: { name: username },
                            success: function(data) {
                                if(data.status == 'success' && data.caller !='{{Auth::user()->username}}' && data.call_to == '{{Auth::user()->username}}'  ){
                                    $('.calling-div').removeClass('d-none');
                                    $('.incoming-call').html('Incoming call from '+data.caller[0].toUpperCase()+data.caller.slice(1));
                                    $('.accpet_call').attr('data-caller',data.caller);
                                    play();
                                    if(data.check != 'true'){
                                        endCall();
                                    }
                                   
                                }
                            }
                        })
                    }, 5000);
                })
            </script>
           
            @endguest
        </ul>
    </div>
</nav>


<script>
    function search_function() {
        var input = document.getElementById('search').value;
        if (input != '') {
            var form = document.getElementById("search_form");
            form.submit();
        }
    }

    function submit_function() {
        var input = document.forms["search_form"]["search"].value;
        if (input == "") {
            return false;
        }
    }

</script>


