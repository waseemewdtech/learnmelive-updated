@extends('layouts.frontend.setting') @section('title','Dispute Content') {{-- head start --}} @section('extra-css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/dashboard.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/register.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/login_register_common.css') }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<style type="text/css">

            ::-webkit-scrollbar-track {
          background:#D5D5D5;
            border-radius: 10px;
        
        }
          ::-webkit-scrollbar {
            width: 6px;
                border-radius: 10px;
        }
         
        ::-webkit-scrollbar-thumb {
            border-radius: 10px;
            /*-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); */
            background:#3AC574 !important;
            height:100px;
        
        }
        
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

    /* The Modal (background) */
    .modal {
          display: none; /* Hidden by default */
          position: fixed; /* Stay in place */
          z-index: 1; /* Sit on top */
          padding-top: 100px; /* Location of the box */
          left: 0;
          top: 0;
          width: 100%; /* Full width */
          height: 100%; /* Full height */
          overflow: auto; /* Enable scroll if needed */
          background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
        }
        
        /* Modal Content (image) */
        .modal-content {
          margin: auto;
          display: block;
          width: 80%;
          max-width: 700px;
        }
        
        /* Caption of Modal Image */
        #caption {
          margin: auto;
          display: block;
          width: 80%;
          max-width: 700px;
          text-align: center;
          color: #ccc;
          padding: 10px 0;
          height: 150px;
        }
        
        /* Add Animation */
        .modal-content, #caption {  
          -webkit-animation-name: zoom;
          -webkit-animation-duration: 0.6s;
          animation-name: zoom;
          animation-duration: 0.6s;
        }
        
        @-webkit-keyframes zoom {
          from {-webkit-transform:scale(0)} 
          to {-webkit-transform:scale(1)}
        }
        
        @keyframes zoom {
          from {transform:scale(0)} 
          to {transform:scale(1)}
        }
        
        /* The Close Button */
        .close {
          position: absolute;
          top: 15px;
          right: 35px;
          color: #f1f1f1;
          font-size: 40px;
          font-weight: bold;
          transition: 0.3s;
        }
        
        .close:hover,
        .close:focus {
          color: #bbb;
          text-decoration: none;
          cursor: pointer;
        }
        .p-20{
            padding-left: 20px;
            padding-right: 20px;
        }
        .f-21{
            font-size: 21px;
        }
        .cl-575757{
            color: #575757
        }
        .cl-a8a8a8{
            color: #A8A8A8;
        }
</style>
@endsection {{-- head end --}} {{-- content section start --}} 
@section('navbar')
    
<section class="px-5 pt-2 pb-2 nav-bg-img robotoRegular">@include('includes.frontend.navbar')</section>
@include('includes.frontend.navigations')
@endsection
@section('content')
    <p class="border-bottom pl-3 f-21 cl-616161">Dispute</p>            
    <section class="p-20">
        <div class="row pt-3 pb-3  box_shadow1 ml-0 mr-0 borderRadius-10px justify-content-around">

            <!-- 2 -->
            <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-start flex-column">
                <p class="pl-4 f-21 cl-575757 mb-1">{{ $dispute->subject }}</p>
                <div class="d-flex pl-4 cl-a8a8a8  ">
                    <div class=" d-flex align-items-center  robotoRegular">
                        {{ $dispute->comment }}
                    </div>
                </div>
                <div class="robotoRegular cl-616161 ml-4">
                    @if ($dispute->file_type=='image')
                        <img src="{{ asset($dispute->file_link) }}" style="cursor: pointer;width: 100px;height: 100px;" onclick="imagePopUp(this);"/>
                    @elseif($dispute->file_type=='video')
                        <video width="320" height="240" controls>
                            <source src="{{ asset($dispute->file_link) }}">
                        </video>
                    @endif
                </div>
                
            </div>
            <!-- end -->
            
                                                          
            <!-- end -->
        </div>

        <!-- The Modal -->
        <div id="myModal" class="modal" style="z-index:10;">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01" style="width: auto;height: 80%;margin: 0px auto;">
            <div id="caption"></div>
        </div>

    </section>

    <section class="p-20 mt-3" style="height: 400px; overflow-y:scroll;" id="disputeReplies">
        
    </section>

    <section class="p-20 mt-3 mb-2">
        <form id="add-dispute-reply-form" method="POST" enctype="multipart/form-data">
            @csrf
           <input type="hidden" name="dispute_id" value="{{ $dispute->id }}">
            <div class="px-5">
                <div class="form-group">
                    <label for="reply">Reply*</label>
                    <textarea id="reply" name="reply" class="form-control"
                        placeholder="Enter reply">{{ old('reply') }}</textarea>
                </div>
    
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <div style="form-group col-md-11 p-0">
                        <label for="files">Upload Dispute Video/Image </label>
                        <input id="files" type="file" name="dispute_file" onchange="fileValidation();" class="form-control border-0" >
                    </div>
        
                    <div class="col-md-1 p-0 justify-content-end">
                        <button type="button" onclick="sendDisputeReply();" class="ml-auto btn btn-sm pl-2 pr-2  bg-3AC574 text-white">Send</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
    

@endsection {{-- content section end --}} 

@section('extra-script')

    <script>
        var sender =  '{{ Auth::user()->id }}';
        var dispute =  '{{ $dispute->id }}';
        console.log(sender+" : "+dispute);
        function getAllReplies(){
            $.ajax({
                url:"{{ route('get.all.dispute.replies') }}",
                type:"get",
                data:{sender:sender,dispute:dispute},
                success:function(data){
                    $('#disputeReplies').html(data.html);
                    scroll_bottom();
                }
            });
        }
        getAllReplies();

        function updateDisputeSeenStatus(){
            $.ajax({
                url:"{{ route('update.dispute.seen.status') }}",
                type:"get",
                data:{dispute:dispute},
                success:function(data){
                    $('#disputeReplies').html(data.html);
                    scroll_bottom();
                }
            });
        }
        // setInterval(getAllReplies,2000);
        var modal = document.getElementById("myModal");
        function imagePopUp(e){
            var modalImg = document.getElementById("img01");
            var captionText = document.getElementById("caption");
            modal.style.display = "block";
            modalImg.src = e.src;
            captionText.innerHTML = e.alt;
        }
        
        var span = document.getElementsByClassName("close")[0];
        span.onclick = function() { 
          modal.style.display = "none";
        }

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
            } 
        }

        var scroll_bottom = function() {
		    var log = $('#disputeReplies');
            log.animate({ scrollTop: log.prop('scrollHeight')}, 0);
		}

        function sendDisputeReply()
        {
            var myform = document.getElementById("add-dispute-reply-form");
            var fd = new FormData(myform);
            $.ajax({
                url:"{{ route('disputes-replies.store') }}",
                type:"post",
                processData: false, 
    			contentType: false,
                data:fd,
                success:function(data)
                {
                    if (data.success == true) 
                    {
                        getAllReplies();
                        $('#reply').val('');
                        $('#files').val('');
                        // swal('success', data.message, 'success')
                        //     .then((value) => {
                        //         getAllReplies();
                        //         $('#reply').val('');
                        //         $('#files').val('');
                        //         // window.location ='';
                        //     });
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

        $(document).on('keypress',function(e) {
			if(e.which == 13 && !e.shiftKey) {
				e.preventDefault();
				if($('#reply').val() !=""){
                    sendDisputeReply();
                }
			}
		});
    </script>

@endsection