@extends('layouts.frontend.setting') @section('title','Dispute Content') {{-- head start --}} @section('extra-css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/dashboard.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/register.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/login_register_common.css') }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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

    .loader {
        border: 10px solid #f3f3f3;
        border-radius: 50%;
        border-top: 10px solid #3AC574 ;
        width: 70px;
        height: 70px;
        -webkit-animation: spin 1s linear infinite; /* Safari */
        animation: spin 1s linear infinite;
    }

    /* Safari */
    @-webkit-keyframes spin {
        0% { -webkit-transform: rotate(0deg); }
        100% { -webkit-transform: rotate(360deg); }
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

</style>
@endsection {{-- head end --}} {{-- content section start --}} 
@section('navbar')
    
<section class="px-5 pt-2 pb-2 nav-bg-img robotoRegular">@include('includes.frontend.navbar')</section>
@include('includes.frontend.navigations')
@endsection
@section('content')
    <p class="border-bottom pl-3 f-21 cl-616161">Dispute Content</p>
    
    <div class="d-flex justify-content-center mb-3" >
        {{-- <div class="spinner-border  text-success user-loader" role="status">
            <span class="sr-only">Loading...</span>
        </div> --}}
        <div class="loader user-loader d-none"></div>
    </div>
    <form id="add-dispute-form" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="project_id" value="{{ $project }}">
        <input type="hidden" name="sender_id" value="{{Auth::user()->id }}">
        <input type="hidden" name="reciever_id" value="{{ $id }}">
        <input type="hidden" name="project_type" value="{{ Request::has("project_type")? Request::get('project_type'):'' }}">
        <div class="px-5">
            <div class="form-group">
                <label for="subject">Subject*</label>
                <input id="subject" name="subject" class="form-control"
                    value="{{ old('subject') }}"
                    placeholder="Enter Subject" />
            </div>

            <div class="form-group">
                <label for="comment">Comment*</label>
                <textarea id="comment" name="comment" class="form-control"
                    placeholder="Enter Comment" style="white-space: pre-wrap;">{{ old('comment') }}</textarea>
            </div>

            <div class="d-flex w-100 align-items-center justify-content-between">
                    <div style="form-group col-md-11 p-0">
                        <label for="files">Upload Dispute Video/Image </label>
                        <input id="files" type="file" name="dispute_file" onchange="fileValidation();" class="form-control border-0" >
                    </div>
        
                    <div class="col-md-1 p-0 justify-content-end">
                        <button type="button" onclick="sendDispute(this);" class="ml-auto btn btn-sm pl-2 pr-2  bg-3AC574 text-white">Send</button>
                    </div>
                </div>
        </div>
    </form>
@endsection {{-- content section end --}} 

@section('extra-script')

    <script>
        function fileValidation() {
            var fileInput = document.getElementById('files');
            var filePath = fileInput.value;
            var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif|\.JPG|\.JPEG|\.PNG|\.GIF|\.mp4|\.avi|\.mov|\.wmv)$/i;
            if (!allowedExtensions.exec(filePath)) {
                swal({
                    icon: "error",
                    text: "{{ __('Invalid file type only image/video is allowed') }}",
                });
                fileInput.value = '';
                return false;
            } else{
                const fsize = fileInput.files[0].size;
                const file = Math.round((fsize / 1024));
                if (file >= 10240) {
                    swal({
                        icon: "error",
                        text: "{{ __('File too Big, please select a file less than or equal 10 MBs') }}",
                    });
                }
                
            }
        }

        function sendDispute(elem)
        {
            var myform = document.getElementById("add-dispute-form");
            var fd = new FormData(myform);
            $.ajax({
                url:"{{ route('disputes.store') }}",
                type:"post",
                processData: false, 
    			contentType: false,
                data:fd,
                beforeSend:function(){
                    $(".user-loader").removeClass('d-none');
                    $(elem).attr('disabled','disabled');
                },
                success:function(data)
                {
                    $(".user-loader").addClass('d-none');
                    if (data.success == true) 
                    {
                        swal('success', data.message, 'success')
                            .then((value) => {
                                window.location ='{{ route("appointments.index") }}';
                            });
                    } else {
                        if (data.hasOwnProperty('message')) {
                            var wrapper = document.createElement('div');
                            var err = '';
                            $.each(data.message, function (i, e) {
                                err += '<p>' + e + '</p>';
                            })

                            wrapper.innerHTML = err;
                            swal({
                                icon: "error",
                                text: "{{ __('Please fix following error!') }}",
                                content: wrapper,
                                type: 'error'
                            });
                            //setTimeout("pageRedirect()", 3000);
                            //$('.actions  li:first-child a').click();
                        }
                    }

                }
            });

	    }
    </script>

@endsection