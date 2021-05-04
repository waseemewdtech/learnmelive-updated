<!DOCTYPE html>
<html>

<head>
    @include('includes.frontend.head')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/dashboard.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/register.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/login_register_common.css') }}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <style type="text/css">
        .dropdown-toggle::after {
            display: none;
        }

        body {
            background-image: none;
        }

        .nav-pills .nav-link.active {
            background-color: #3ac574 !important;
        }

        
    

        .px-50 {
            padding-left: 50px !important;
            padding-right: 50px !important;
        }

        .swal-button--confirm {background-color: #3ac574; border:none;outline: none;}
        .swal-button:active {background-color: #3ac574; border:none;outline: none;}
        

    </style>
</head>

<body>
    
    <section class="main_padding pt-2 pb-2 nav-bg-img robotoRegular">@include('includes.frontend.admin_navbar')</section>
    @include('includes.frontend.navigations')

    <section class="main_padding pt-70 px-50">
        <div class="row m-0 justify-content-center">
           
            <div class="col-md-12 col-lg-12 col-sm-12 pt-4 p-0 ml-4 box_shadow1 borderRadius-12px">
                <p class="border-bottom pl-3 f-21 cl-616161">Disputes</p>

                {{-- <p class="pl-3 f-21 cl-000000">Disputes</p> --}}
                @include('common.messages')
                <div class="table-responsive UserTableData" id="UserTableData">
                    {{-- <button title="Click to Add Service" data-toggle="modal" data-target="#addUserModal"
                        class="btn btn-sm bg-3AC574 text-white m-2" style="float: right;">Add User</button> --}}
                    <div class="d-flex justify-content-center mb-3 " >
                        <div class="spinner-border  text-success d-none user-loader" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr class="text-uppercase">
                                <th scope="col">#</th>
                                <th scope="col">Filer</th>
                                <th scope="col">appointment id</th>
                                <th scope="col">Service</th></th>
                                <th scope="col">Client</th>
                                <th scope="col">Specialist</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Comment</th>
                                <th scope="col">Client Response</th>
                                <th scope="col">Specialist Response</th>
                                <th scope="col">Admin Response</th>
                                <th scope="col">Submitted</th>
                                <th scope="col">Appointment Status</th>
                                <th scope="col">Appointment date/time</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($disputes as $key => $dispute)
                                <tr >          
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ ucfirst($dispute->sender->username) }}</td>
                                    <td>{{ $dispute->project_type=='appointments'? $dispute->appointment->id: '' }}</td>
                                    <td>{{ $dispute->project_type=='appointments'? $dispute->appointment->service->title: '' }}</td>
                                    <td>{{ $dispute->project_type=='appointments'? $dispute->appointment->user->username: '' }}</td>
                                    <td>{{ $dispute->project_type=='appointments'? $dispute->appointment->specialist->user->username : '' }}</td>
                                    <td>{{ $dispute->subject }}</td>
                                    <td>{{ Str::limit($dispute->comment,50,'...') }}</td>
                                    <td>{{ $dispute->client_response!=null?Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $dispute->client_response)->timezone(Auth::user()->time_zone)->format('Y-m-d h:i:s a'):'' }}</td>
                                    <td>{{ $dispute->specialist_response!=null?Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $dispute->specialist_response)->timezone(Auth::user()->time_zone)->format('Y-m-d h:i:s a'):'' }}</td>
                                    <td>{{ $dispute->admin_response!=null?Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $dispute->admin_response)->timezone(Auth::user()->time_zone)->format('Y-m-d h:i:s a'):'' }}</td>
                                    <td>{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $dispute->created_at)->timezone(Auth::user()->time_zone)->format('Y-m-d h:i:s a') }}</td>
                                    <td>
                                        @if($dispute->project_type=='appointments')
                                            <span class="badge badge-sm @if($dispute->appointment->status == "Approved" || $dispute->appointment->status == "Completed") badge-success @elseif($dispute->appointment->status == "Cancelled") badge-danger @else badge-warning @endif">{{ $dispute->appointment->status }}</span>
                                        @else
                                        @endif</td>
                                    <td>{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $dispute->appointment->created_at)->timezone(Auth::user()->time_zone)->format('Y-m-d h:i:s a') }}</td>
                                    <td style="min-width: 135px !important;">
                                        <a class="btn btn-sm  btn-success" target="_blank" href="{{ route('disputes.show',encrypt($dispute->id)) }}">View</a>
                                        <button class="btn {{ ($dispute->status== '0')? 'btn-danger':'btn-success' }}  btn-sm change_status" data-status="{{ $dispute->status==1?'0':'1' }}" data-id="{{ $dispute->id }}" data-msg="You want to {{ $dispute->status==1?'open':'close' }} the dispute">{{ $dispute->status==1?'Open':'Closed' }}</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            
                <!-- Modal For Deleting User-->
                <div class="modal fade deleteUserModal" id="deleteUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelUserdelete" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabelUserdelete" style="font-size: 18px !important;">Delete Confirmation !</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Are you sure, you want to delete this User?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-md btn-danger" data-dismiss="modal">No, Cancel</button>
                                <button type="button" class="btn btn-md bg-3AC574 text-white deleteUserBtn" id="deleteUserBtn">Yes, Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
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
                            
                            $('#nav-profile').append(html);
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
    $('.change_status').on('click',function(){
        var user = $(this);
        var user_id = user.data('id');
        var status = user.data('status');
        var msg = user.data('msg');
        swal({
            title: "Are you sure?",
            text: msg,
            icon: "warning",
            buttons: {
                cancel: "No",
                confirm: "Yes"
                },
        }).then((willDelete) => {
                if (willDelete)
                {
                    $.ajax({
                        type: 'post',
                        url: "{{ url('disputes') }}"+"/"+user_id,
                        data: {
                            _token: '{{ csrf_token() }}',
                            _method:"put",
                            admin:"admin",
                            status:status
                        
                        },
                        beforeSend:function(){
                            $(".user-loader").removeClass('d-none');
                        },
                        success: function (data) {
                            $(".user-loader").addClass('d-none');
                            swal({
                                icon: "success",
                                text: "{{ __('Dispute status has been updated successfully') }}",
                                icon: 'success'
                            });
                            window.location = '';
                        }
                    });
                } 
        });
    
    });

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
</body>

</html>






