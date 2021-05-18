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
    
<section class="px-5 pt-2 pb-2 nav-bg-img robotoRegular">
    @if(Auth::user()->user_type!='admin')
        @include('includes.frontend.navbar')
    @else
        @include('includes.frontend.admin_navbar')
    @endif
</section>
@include('includes.frontend.navigations')
@endsection
@section('content')
    <p class="border-bottom pl-3 f-21 cl-616161">Dispute</p>            
    <section class="p-20">
        <div class="row pt-3 pb-3  box_shadow1 ml-0 mr-0 borderRadius-10px justify-content-around">

            <!-- 2 -->
            <div class="col-md-12 col-lg-12 d-flex align-items-center">
                <p class="pl-4 f-21 cl-575757 mb-1">{{ ucfirst($dispute->subject) }}</p>
                <div class="ml-2 mt-2 mb-1 cl-575757">{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $dispute->created_at,config('app.timezone'))->timezone(Auth::user()->time_zone)->format('Y-m-d h:i a') }}</div>
            </div>

            <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-start flex-column">
                <div class="d-flex pl-4 cl-a8a8a8  ">
                    <div class=" d-flex align-items-center  robotoRegular">
                        {{-- {{ trim($dispute->comment) }} --}}
                        {!! html_entity_decode($dispute->comment) !!}
                    </div>
                </div>
                <div class="robotoRegular cl-616161 ml-4">
                    @if ($dispute->file_type=='image')
                        <img src="{{ asset($dispute->file_link) }}" style="cursor: pointer;width: 100px;height: 100px;" onclick="imagePopUp(this);"/>
                    @elseif($dispute->file_type=='video')
                        <video width="100%" height="240" controls>
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

    <section class="p-20 mt-3" style="height: 400px; overflow-y:scroll;" id="disputeReplies" onmouseenter="updateUserDisputeReplySeenStatus();">
        
    </section>
    
    
    @if(Carbon\Carbon::now(new DateTimeZone(config('app.timezone'))) < $dispute->response_time && $dispute->status=='0')
        <section class="p-20 mt-3 mb-2">
            <form id="add-dispute-reply-form" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="dispute_id" value="{{ $dispute->id }}">
                <div class="px-5">
                    <div class="form-group">
                        <label for="reply">Reply*</label>
                        <textarea id="reply" name="reply" class="form-control"
                            placeholder="Enter reply" style="white-space: pre-wrap;">{{ old('reply') }}</textarea>
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
    @else
        <section class="p-20 mt-3">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                Dispute has been closed out.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </section>
    @endif
    {{-- @if($dispute->response_time>time() && Auth::user()->user_type!='admin')
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
    @elseif($dispute->response_time>time() && Auth::user()->user_type=='admin')
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
    @elseif($dispute->response_time<=time() && Auth::user()->user_type=='admin')
        <section class="p-20 mt-3">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                Dispute has been closed out.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
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
    @else
        <section class="p-20 mt-3">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">Dispute has been closed out.</div>
        </section>
    @endif --}}

@endsection {{-- content section end --}} 

@section('extra-script')

    <script>

        @if(Auth::check())
            setInterval(function(){
                @if(Auth::user()->user_type!='admin')
                    firebase.database().ref('/chats').orderByChild("reciever_id").equalTo("{{ Auth::user()->id }}").on("value", function(ysnapshot) {
                        var chat_html = "";
                        var msg_chk = false;
                        var chk =[];
                        if(ysnapshot.val() != null) {
                            $.each(ysnapshot.val(),function(){
                                if(chk.indexOf(this.sender_id) === -1)
                                {
                                    var count = 0;

                                    if(this.reciever_status){
                                        firebase.database().ref('/chats').orderByChild("status").equalTo(this.sender_reciever+"unread").on("value", function(cSnapshot) {
                                            count = cSnapshot.numChildren();
                                        });

                                        firebase.database().ref('/chats').orderByChild("sender_reciever").equalTo(this.sender_reciever).limitToLast(1).on("value", function(snapshot) {
                                            if(snapshot.val() !=null)
                                            {
                                                $.each(snapshot.val(),function(){
                                                    var cnt = '';
                                                    var c_url = '{{ route("single.chat", ":id") }}';
                                                    c_url = c_url.replace(':id',this.sender_id);
                                                    var s_url = '{{ route("chat.user.status", ":id") }}';
                                                    s_url = s_url.replace(':id',this.sender_id);
                                                    if(this.content.length>20 ){ cnt = this.content.substring(0,20)+"..." }else{ cnt=this.content; }
                                                    if(this.sender_id !='{{Auth::user()->id}}'){
                                                        if(count>0){ msg_chk=true; }
                                                        chat_html += '<a class="dropdown-item d-flex row m-0 pt-2" href="'+c_url+'">';
                                                            chat_html+='<div class="col-md-2 p-0">';
                                                                chat_html +='<img src="'+this.avatar+'" alt="" class="img-fluid">';
                                                                $.ajax({
                                                                    url:s_url,
                                                                    type:"get",
                                                                    async: false, 
                                                                    success:function(data)
                                                                    {
                                                                        if(data.next>data.current)
                                                                        {
                                                                            chat_html+='<span class="ml--1 green-dot mt-1"></span>';
                                                                        }else{
                                                                            chat_html+='<span class="ml--1 grey-dot mt-1"></span>';
                                                                        }
                                                                    }
                                                                });
                                                            chat_html+='</div>';
                                                            
                                                            chat_html+='<div class="col-md-6 pl-2 pt-1 p-0">';
                                                                chat_html+='<div class="row m-0"><div class="dropdown-heading">'+this.name[0].toUpperCase() + this.name.slice(1)+'</div></div>';
                                                                chat_html+='<div class="row m-0"><div class="dropdown-contnt">'+cnt+'</div></div>';
                                                            chat_html+='</div>';

                                                            chat_html+='<div class="col-md-3 p-0">';
                                                                if(count>0 && this.sender_id!={{ Auth::user()->id }}){
                                                                    chat_html+='<div class="row m-0 justify-content-end mt-1"><span class="green-dot-nmbr">'+count+'</span></div>';
                                                                }
                                                                chat_html+='<div class="row m-0 justify-content-end mt-1"><span class="dropdown-contnt">'+moment(this.created_at).tz('{{ Auth::user()->time_zone }}').format('h:mmA')+'</span></div>';
                                                            chat_html+='</div>';
                                                        chat_html+="</a>";
                                                    }
                                                });
                                                
                                            }
                                            
                                        });
                                        
                                    }
                                    chk.push(this.sender_id);
                                }
                            });
                            if(msg_chk){ $('.messageDropdown').children('span').addClass('green-dot'); }else{$('.messageDropdown').children('span').removeClass('green-dot');}
                            chat_html+='<div class="dropdown-footer mt-5">';
                                chat_html+='<div class="bg-3ac574 row m-0 pt-2 pb-3">';
                                    chat_html+='<div class="col-md-6 d-flex p-0 pl-4">';
                                        chat_html+='<div><i class="fa fa-cog text-white" aria-hidden="true"></i></div>';
                                        chat_html+='<div><i class="fa fa-volume-up text-white pl-2" aria-hidden="true"></i></div>';
                                    chat_html+='</div>';
                                    chat_html+='<div class="col-md-6 p-0 pr-3 text-white text-right">';
                                        chat_html+='<a href="{{ route("chat.index") }}" style="color: #ffffff;"><h6>See all in inbox</h6></a>';
                                    chat_html+='</div>';
                                chat_html+='</div>';
                            chat_html+='</div>';
                            $("#nav-home").html(chat_html);
                        }
                    });

                    $.ajax({
                        url:"{{ route('user.appointment.notification') }}",
                        type:"get",
                        success:function(data){
                            var html ='';
                            // if(data.length>0){ $('.messageDropdown').children('span').addClass('green-dot'); }else{$('.messageDropdown').children('span').removeClass('green-dot');}
                            data.map(v=>{
                                html += '<a class="dropdown-item d-flex row m-0 pt-2" href="'+v.url+'">';
                                    html+='<div class="col-md-2 p-0">';
                                        html +='<img src="'+v.avatar+'" alt="miss" class="img-fluid">';
                                    html+='</div>';
                                    html+='<div class="col-md-9 pl-2 pt-1 p-0">';
                                        html+='<div class="row m-0"><div class="dropdown-heading">'+v.username[0].toUpperCase() + v.username.slice(1)+'</div></div>';
                                        if(v.status=="Approved")
                                        {
                                            html+='<div class="row m-0"><div class="dropdown-contnt">Your appointment has been accepted</div></div>';
                                        }else if(v.status=="Cancelled"){
                                            html+='<div class="row m-0"><div class="dropdown-contnt">Your appointment has been declined</div></div>';
                                        }
                                    html+='</div>';
                                html+="</a>";
                            });
                            // html+='<div class="dropdown-footer mt-5">';
                            //     html+='<div class="bg-3ac574 row m-0 pt-2 pb-3">';
                            //         html+='<div class="col-md-6 d-flex p-0 pl-4">';
                            //             html+='<div><i class="fa fa-cog text-white" aria-hidden="true"></i></div>';
                            //             html+='<div><i class="fa fa-volume-up text-white pl-2" aria-hidden="true"></i></div>';
                            //         html+='</div>';
                            //         html+='<div class="col-md-6 p-0 pr-3 text-white text-right">';
                            //             html+='<a href="{{ route("appointments.index") }}" style="color: #ffffff;"><h6>See all Notifications</h6></a>';
                            //         html+='</div>';
                            //     html+='</div>';
                            // html+='</div>';
                            $('#nav-profile').html(html);
                        }
                    });
                @endif
                
                $.ajax({
                    url:"{{ route('user.dispute.reply.notification') }}",
                    type:"get",
                    success:function(data){
                        var html ='';
                        if(data.length>0){
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
                        }
                        
                        let oldHtml = $('#nav-profile').html();
                        oldHtml+=html;
                        $('#nav-profile').html(oldHtml);
                    }
                });

            },1000);
        @endif

        var sender =  '{{ Auth::user()->id }}';
        var dispute =  '{{ $dispute->id }}';
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

        function updateUserDisputeReplySeenStatus(){
            $.ajax({
                url:"{{ route('user.dispute.reply.seen.status') }}",
                type:"get",
                data:{sender:sender,dispute:dispute},
                success:function(data){
                    console.log(data);
                }
            });
        }
        
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

        function updateDisputeStatus(){
            var fd = new FormData();
            fd.append("_token","{{ csrf_token() }}");
            fd.append('_method',"PUT");
            var c_url = '{{ route("disputes.update", ":id") }}';
            c_url = c_url.replace(':id',dispute);
            $.ajax({
                url:c_url,
                type:"post",
    			processData: false, 
    			contentType: false,
                data:fd,
                success:function(data){
                    console.log(data);
                }
            });
        }

        // updateDisputeStatus();
        getAllReplies();
        updateDisputeSeenStatus();
        setInterval(function(){
            getAllReplies();
            updateDisputeStatus();
        },5000);
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
                beforeSend:function(){
                    $('#reply').val('');
                },
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