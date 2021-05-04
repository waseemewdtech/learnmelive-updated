@extends('layouts.admin.admin') @section('title','Profile') {{-- head start --}} @section('extra-css')
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
@endsection {{-- head end --}} {{-- content section start --}}
@section('navbar')

<section class="main_padding pt-2 pb-2 nav-bg-img robotoRegular">@include('includes.frontend.admin_navbar')</section>
@include('includes.frontend.navigations')
@endsection
@section('content')


    <p class="border-bottom pl-3 f-21 cl-616161">Service Requests</p>

    {{-- <p class="pl-3 f-21 cl-000000">Service Requests</p> --}}
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
                    <th scope="col">Username</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Sub Categories</th>
                    <th scope="col">Description</th>
                    <th scope="col">Budget</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @if($postings->count()>0)
                    @foreach($postings as $key => $request)
                        <tr id="target_{{ $request->id }}">
                            <td>{{ $key+1 }}</td>
                            <td>{{ ucwords($request->user->username) }}</td>
                            <td>{{ ucwords($request->title) }}</td>
                            <td>{{ ucwords($request->category->name) }}</td>
                            @php
                                $subcategories = App\SubCategory::whereIn('id',json_decode($request->subcategories))->get()->pluck('name')->toArray();
                            @endphp 
                            <td>{{ implode(',',array_map('ucwords',$subcategories)) }}</td>
                            <td>{{ Str::limit($request->description,50,".....") }}</td>
                            <td>$ {{ $request->budget }}</td>
                            <td class="text-capitalize"> <span class="badge badge-sm {{ ($request->status == 'active')? 'badge-success':'badge-danger' }} badge-{{ $request->id }}">{{ $request->status}}</span></td>
                            <td style="min-width: 135px !important;">
                                <button class="btn {{ ($request->status== 'active')? 'btn-danger':'btn-success' }}  btn-sm change_status" data-status="{{ ($request->status == 'active')? 'inactive':'active' }}" data-msg="Do you want to {{ ($request->status== 'active')? 'in active ':'active' }} ?" data-user="{{ $request->id }}" data-status="{{ ($request->status == 'active')? 'inactive':'active' }}">{{ ($request->status == 'active')? 'Inactive':'Activate' }}</button>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection 

@section('extra-script')
    <script>
        $('.change_status').on('click',function(){
            var user = $(this);
            var user_id = $(this).data('user');
            var badge = $('.badge-'+user_id);
            var msg = $(this).data('msg');
            var status = $(this).attr('data-status');
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
                            url: "{{ url('dashboard/client/postings') }}"+"/"+user_id,
                            data: {_token: '{{ csrf_token() }}',status:status},
                            beforeSend:function(){
                                $(".user-loader").removeClass('d-none');
                            },
                            success: function (data) {
                                $(".user-loader").addClass('d-none');
                                if(data == 'active'){
                                    $('.badge-'+user_id).removeClass('badge-danger').addClass('badge-success').text('active');
                                    user.removeClass('btn-success').addClass('btn-danger').attr('data-msg',"Do you want to in active ?");
                                    user.text('Inactive')
                                    user.attr('data-status','inactive')
                                    swal({
                                        icon: "success",
                                        text: "{{ __('Service Request Activated Successfully') }}",
                                        icon: 'success'
                                    });
                                }if(data == 'inactive'){
                                    $('.badge-'+user_id).removeClass('badge-success').addClass('badge-danger').text('inactive');
                                    user.attr('data-status','active')
                                    user.removeClass('btn-danger').addClass('btn-success').attr('data-msg',"Do you want to active ?");
                                    user.text('Activate')
                                    swal({
                                        icon: "success",
                                        text: "{{ __('Service Request  In-Activated Successfully') }}",
                                        icon: 'success'
                                    });

                                }
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
@endsection