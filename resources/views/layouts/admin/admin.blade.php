<!DOCTYPE html>
<html>

<head>
    @include('includes.frontend.head') @yield('extra-css')
</head>

<body>
    @yield('navbar')
   <section class="main_padding pt-70 px-50">
    <div class="row m-0 justify-content-center">
        <div class="col-md-3 col-lg-3 col-sm-12 p-0 box_shadow1 borderRadius-12px pt-4 pb-5">
            <p class="border-bottom text-center f-21 cl-616161">Your Profile</p>
            <div class="d-flex align-items-center flex-column">
                <div class="dashboard_id text-center">
                    <img id="blah" class="rounded-circle blah"
                        src="{{(Auth::user()->avatar != null)? asset(Auth::user()->avatar): asset('uploads/user/default.jpg') }}"
                        alt="" style="height: 118px; width: 118px;" />
                    <form action="{{ url('/profile/change_avatar') }}" method="post" enctype="multipart/form-data"
                        id="avatar_form">
                        @csrf
                        <div class="form-group m-0">
                            <label class="btn img-lbl p-1 mb-0 position-relative" style="top: -34px; left: 43px;">
                                <img src="{{ asset('assets/frontend/images/camera.png') }}" alt="" srcset=""
                                    height="30" />
                                <input type="file" style="display: none;" name="avatar" class="avatar"
                                    onchange="readURL(this);" required accept="image/png, image/jpg, image/jpeg" />
                            </label>
                        </div>
                        {{-- <button class="btn btn-sm bg-3AC574 text-white">Upload Photo</button> --}}
                    </form>
                </div>
                <p class="m-0 f-27 robotoMedium cl-5757575 pt-3">{{ ucwords(Auth::user()->username) }}</p>
                @if (Auth::user()->user_type == 'specialist')

                <p class="f-18 cl-a8a8a8a robotoMedium m-0 pt-1">{{ ucwords(Auth::user()->specialist->category->name) }}
                </p>
                @endif
            </div>

            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link {{ Request::is('dashboard/profile') ? 'active' : ''  }} cl-000000"  href="{{ url('/dashboard') }}" >Profile</a>
                <a class="nav-link {{ Request::is('dashboard/disputes') ? 'active' : ''  }} cl-000000"  href="{{ url('/dashboard/disputes') }}" >Disputes</a>
                <a class="nav-link {{ Request::is('dashboard/categories') ? 'active' : ''  }} cl-000000"  href="{{ url('/dashboard/categories') }}" >Categories</a>
                <a class="nav-link {{ Request::is('dashboard/subcategories') || Request::is('dashboard/subcategories/create') ? 'active' : ''  }} cl-000000"  href="{{ url('/dashboard/subcategories') }}" >Sub Categories</a>
                <a class="nav-link {{ Request::is('dashboard/users') ? 'active' : ''  }} cl-000000"  href="{{ url('/dashboard/users') }}" >Users</a>
                <a class="nav-link {{ Request::is('dashboard/client/postings') ? 'active' : ''  }} cl-000000"  href="{{ url('/dashboard/client/postings') }}" >Service Requests</a>
                <a class="nav-link cl-000000 {{ Request::is('dashboard/password') ? 'active' : ''  }}" href="{{ url('/dashboard/password') }}">Password</a>
            </div>
        </div>

        <div class="col-md-8 col-lg-8 col-sm-12 pt-4 p-0 ml-4 box_shadow1 borderRadius-12px">
            @yield('content') 
        </div>
    </div>

   


</section>
    
    @yield('footer')
    
<!-- E I G H T    S E C T I O N  S T A R T -->
<section class="main_padding pt-70  w-100">
    <div class="w-100 border-bcbcbc"></div>
</section>

<!-- E I G H T    S E C T I O N  E N D  -->

 @include('includes.frontend.footer')

<!-- T E N    S E C T I O N  E N D  -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/frontend/js/jquery.min.js') }}"></script>
    	<script src="{{ asset('assets/frontend/js/jquery.easing.min.js') }}"></script>
    	<script src="{{ asset('assets/frontend/js/jquery.validate.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/app.js') }}"></script>
        <script src="{{ asset('assets/vendor/sweetalert/sweetalert.min.js') }}"></script>
        <script src="{{ asset('assets/admin/plugins/select2/js/select2.full.min.js') }}"></script>
        <script src="{{ asset('assets/admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{ asset('assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{ asset('assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{ asset('assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
        <script src="{{ asset('assets/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{ asset('assets/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{ asset('assets/admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
        <script src="{{ asset('assets/admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
        <script src="{{ asset('assets/admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
        <script src="{{ asset('assets/admin/dist/js/custome.js') }}"></script>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $(".blah").attr("src", e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
            $("#avatar_form").submit();
        }
    }
    
    @if(Auth::check())
        setInterval(function(){
            $.ajax({
                url:"{{ route('admin.user.dispute.notification') }}",
                type:"get",
                success:function(data){
                    var html ='';
                    // if(data.length>0){ $('.messageDropdown').children('span').addClass('green-dot'); }else{$('.messageDropdown').children('span').removeClass('green-dot');}
                    data.map(v=>{
                        var element = document.getElementById("dispute"+v.id);
                        if(typeof(element) == 'object' && element == null){
                                html += '<a class="dropdown-item d-flex row m-0 pt-2"  id="dispute'+v.id+'" href="'+v.url+'">';
                                html+='<div class="col-md-2 p-0">';
                                    html +='<img src="'+v.avatar+'" alt="miss" class="img-fluid">';
                                html+='</div>';
                                html+='<div class="col-md-9 pl-2 pt-1 p-0">';
                                    html+='<div class="row m-0"><div class="dropdown-heading">'+v.username[0].toUpperCase() + v.username.slice(1)+'</div></div>';
                                    html+='<div class="row m-0"><div class="dropdown-contnt">'+v.subject+'</div></div>';
                                html+='</div>';
                            html+="</a>";
                        } 
                    });
                    
                    let oldHtml = $('#nav-profile').html();
                    oldHtml+=html;
                    $('#nav-profile').html(oldHtml);
                }
            });

            $.ajax({
                url:"{{ route('user.dispute.reply.notification') }}",
                type:"get",
                success:function(data){
                    var html ='';
                    // if(data.length>0){ $('.messageDropdown').html('Messages <span class="mt-1 ml-2 green-dot"></span>'); }else{$('.messageDropdown').html('Messages <span class="mt-1 ml-2"></span>');}
                    data.map(v=>{
                        var element = document.getElementById("dispute"+v.id);
                        if(typeof(element) == 'object' && element == null){
                            html += '<a class="dropdown-item d-flex row m-0 pt-2"  id="dispute'+v.id+'" href="'+v.url+'">';
                                html+='<div class="col-md-2 p-0">';
                                    html +='<img src="'+v.avatar+'" alt="miss" class="img-fluid">';
                                html+='</div>';
                                html+='<div class="col-md-9 pl-2 pt-1 p-0">';
                                    html+='<div class="row m-0"><div class="dropdown-heading">'+v.username[0].toUpperCase() + v.username.slice(1)+'</div></div>';
                                    html+='<div class="row m-0"><div class="dropdown-contnt">'+v.subject+'</div></div>';
                                html+='</div>';
                            html+="</a>";
                        }
                    });
                    let oldHtml = $('#nav-profile').html();
                    oldHtml+=html;
                    $('#nav-profile').html(oldHtml);
                }
            });

        },1000);

        window.onload = function() {
            $.ajax({
                url:"{{ route('chat.user.update',Auth::user()->id) }}",
                type:"get",
                success:function(data)
                {
                    console.log(data);
                }
            });
        }

        setInterval(function(){
            $.ajax({
                url:"{{ route('chat.user.update',Auth::user()->id) }}",
                type:"get",
                success:function(data)
                {
                    console.log(data);
                }
            });
        },10000);

    @endif

</script>
        <script>
            $(function () {
                 $(".select2").select2();
                $(".example1")
                    .DataTable({
                        responsive: true,
                        lengthChange: false,
                        autoWidth: false,
                        "scrollX": true,
                        // buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
                    })
                    .buttons()
                    .container()
                    .appendTo(".dataTables_wrapper .col-md-6:eq(0)");
                
            });
        </script>
    @yield('extra-script')
</body>

</html>
