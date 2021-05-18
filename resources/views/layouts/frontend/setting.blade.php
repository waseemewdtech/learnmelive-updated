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
                        src="{{(Auth::user()->avatar != null)? asset(Auth::user()->avatar): asset('assets/frontend/images/GettyImages-1136599956-hair-stylist-1200x630-min.png') }}"
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
                @if(Auth::user()->user_type!='admin')
                    <a class="nav-link {{ Request::is('profile') ? 'active' : ''  }} cl-000000"  href="{{ url('/profile') }}" >Profile</a>
                    @if (Auth::user()->user_type == 'specialist')
                        <a class="nav-link {{ Request::is('portfolio_setting') ? 'active' : ''  }} cl-000000"  href="{{ url('/portfolio_setting') }}" >Portfolio</a>
                        <a class="nav-link cl-000000 {{ Request::is('services') ? 'active' : ''  }}"  href="{{ url('/services') }}" >Services</a>
                    @endif
                    <a class="nav-link cl-000000 {{ Request::is('bids') ? 'active' : ''  }}"  href="{{ url('/bids') }}">Bids</a>
                    <a class="nav-link cl-000000 {{ Request::is('appointments') ? 'active' : ''  }}"  href="{{ url('/appointments') }}">Appointments</a>
                    <a class="nav-link cl-000000 {{ Request::is('change-password') ? 'active' : ''  }}" href="{{ url('change-password') }}">Password</a>
                @else
                    <a class="nav-link {{ Request::is('dashboard/profile') ? 'active' : ''  }} cl-000000"  href="{{ url('/dashboard/profile') }}" >Profile</a>
                    <a class="nav-link {{ Request::is('dashboard/disputes') ? 'active' : ''  }} cl-000000"  href="{{ url('/dashboard/disputes') }}" >Disputes</a>
                    <a class="nav-link {{ Request::is('dashboard/categories') ? 'active' : ''  }} cl-000000"  href="{{ url('/dashboard/categories') }}" >Categories</a>
                    <a class="nav-link {{ Request::is('dashboard/subcategories') || Request::is('dashboard/subcategories/create') ? 'active' : ''  }} cl-000000"  href="{{ url('/dashboard/subcategories') }}" >Sub Categories</a>
                    <a class="nav-link {{ Request::is('dashboard/users') ? 'active' : ''  }} cl-000000"  href="{{ url('/dashboard/users') }}" >Users</a>
                    <a class="nav-link {{ Request::is('dashboard/client/postings') ? 'active' : ''  }} cl-000000"  href="{{ url('/dashboard/client/postings') }}" >Service Requests</a>
                    <a class="nav-link cl-000000 {{ Request::is('dashboard/password') ? 'active' : ''  }}" href="{{ url('/dashboard/password') }}">Password</a>
                    
                @endif
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
        <script src="https://www.gstatic.com/firebasejs/8.3.2/firebase.js"></script>
        <script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-messaging.js"></script>
        <script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-database.js"></script>
        <script src="{{ asset('assets/frontend/js/moment.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/moment-timezone.js') }}"></script>
        <script>
            // Initialize Firebase
            var config = {
                apiKey: '{{config("services.firebase.api_key")}}',
                authDomain: '{{config("services.firebase.auth_domain")}}',
                databaseURL: "{{config('services.firebase.database_url')}}",
                projectId: "{{config('services.firebase.project_id')}}",
                storageBucket: "{{config('services.firebase.storage_bucket')}}",
                messagingSenderId: "{{config('services.firebase.messaging_sender_id')}}",
                appId: "{{config('services.firebase.appId')}}"
            };
            firebase.initializeApp(config);
        </script>
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
                        
                    @endif
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
            
        </script>
        <script>
            $(function () {
                 $(".select2").select2();
                $(".example1")
                    .DataTable({
                        // responsive: true,
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
    <script src="{{ asset('assets/frontend/js/video-js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/video-js/materialize.min.js') }}"></script>
    <script src="https://cdn.agora.io/sdk/release/AgoraRTCSDK-3.4.0.js"></script>
    <script>


        function endCall(){
            $('#leave').click();
            var username = $('.video-chat').data('caller');
            $.ajax({
                type: 'post',
                url: '{{ url("call-end") }}',
                data: {_token:'{{ csrf_token() }}', name: username },
                success: function(data) {
                    $('.calling-div').addClass('d-none');
                }
            })
        }
        function makeCall(e){
            var username = $(e).data('caller');
            $.ajax({
                type: 'get',
                url: '{{ url("test-token") }}',
                data: { name: username },
                success: function(data) {
                    $('#token').val(JSON.parse(data).token);
                    $('#channelName').val(JSON.parse(data).channel);
                    $('#join').click();
                    $('.calling-div').addClass('d-none');

                }
            })
        }

        function play() {
            var beepsound = new Audio('{{asset("assets/audio/fb_messenger_tone.mp3")}}');
                beepsound.play();
        }



        // // console.log("agora sdk version: " + AgoraRTC.VERSION + " compatible: " + AgoraRTC.checkSystemRequirements());
        var resolutions = [{
                name: 'default',
                value: 'default',
            },
            {
                name: '480p',
                value: '480p',
            },
            {
                name: '720p',
                value: '720p',
            },
            {
                name: '1080p',
                value: '1080p'
            }
        ];

        function Toastify(options) {
            M.toast({ html: options.text, classes: options.classes });
        }

        var Toast = {
            info: (msg) => {
                Toastify({
                    text: msg,
                    classes: "info-toast"
                })
            },
            notice: (msg) => {
                Toastify({
                    text: msg,
                    classes: "notice-toast"
                })
            },
            error: (msg) => {
                Toastify({
                    text: msg,
                    classes: "error-toast"
                })
            }
        };

        function validator(formData, fields) {
            var keys = Object.keys(formData);
            for (let key of keys) {
                if (fields.indexOf(key) != -1) {
                    if (!formData[key]) {
                        // Toast.error("Please Enter " + key);
                        return false;
                    }
                }
            }
            return true;
        }

        function serializeformData() {
            var formData = $("#form").serializeArray();
            var obj = {}
            for (var item of formData) {
                var key = item.name;
                var val = item.value;
                obj[key] = val;
            }
            return obj;
        }

        function addView(id, show) {
            if (!$("#" + id)[0]) {
                $("<div/>", {
                    id: "remote_video_panel_" + id,
                    class: "video-view",
                }).appendTo("#video");

                $("<div/>", {
                    id: "remote_video_" + id,
                    class: "video-placeholder",
                }).appendTo("#remote_video_panel_" + id);

                $("<div/>", {
                    id: "remote_video_info_" + id,
                    class: "video-profile " + (show ? "" : "hide"),
                }).appendTo("#remote_video_panel_" + id);

                $("<div/>", {
                    id: "video_autoplay_" + id,
                    class: "autoplay-fallback hide",
                }).appendTo("#remote_video_panel_" + id);
            }
        }

        function removeView(id) {
            if ($("#remote_video_panel_" + id)[0]) {
                $("#remote_video_panel_" + id).remove();
            }
        }

        function getDevices(next) {
            AgoraRTC.getDevices(function(items) {
                items.filter(function(item) {
                        return ['audioinput', 'videoinput'].indexOf(item.kind) !== -1
                    })
                    .map(function(item) {
                        return {
                            name: item.label,
                            value: item.deviceId,
                            kind: item.kind,
                        }
                    });
                var videos = [];
                var audios = [];
                for (var i = 0; i < items.length; i++) {
                    var item = items[i];
                    if ('videoinput' == item.kind) {
                        var name = item.label;
                        var value = item.deviceId;
                        if (!name) {
                            name = "camera-" + videos.length;
                        }
                        videos.push({
                            name: name,
                            value: value,
                            kind: item.kind
                        });
                    }
                    if ('audioinput' == item.kind) {
                        var name = item.label;
                        var value = item.deviceId;
                        if (!name) {
                            name = "microphone-" + audios.length;
                        }
                        audios.push({
                            name: name,
                            value: value,
                            kind: item.kind
                        });
                    }
                }
                next({ videos: videos, audios: audios });
            });
        }

        var rtc = {
            client: null,
            joined: false,
            published: false,
            localStream: null,
            remoteStreams: [],
            params: {}
        };

        function handleEvents(rtc) {
            // Occurs when an error message is reported and requires error handling.
            rtc.client.on("error", (err) => {
                    // console.log(err)
                })
                // Occurs when the peer user leaves the channel; for example, the peer user calls Client.leave.
            rtc.client.on("peer-leave", function(evt) {
                    var id = evt.uid;
                    // console.log("id", evt);
                    if (id != rtc.params.uid) {
                        removeView(id);
                    }
                    // Toast.notice("peer leave")
                    // console.log('peer-leave', id);
                })
                // Occurs when the local stream is published.
            rtc.client.on("stream-published", function(evt) {
                    // Toast.notice("stream published success")
                    // console.log("stream-published");
                })
                // Occurs when the remote stream is added.
            rtc.client.on("stream-added", function(evt) {
                var remoteStream = evt.stream;
                var id = remoteStream.getId();
                // Toast.info("stream-added uid: " + id)
                if (id !== rtc.params.uid) {
                    rtc.client.subscribe(remoteStream, function(err) {
                        // console.log("stream subscribe failed", err);
                    })
                }
                // console.log('stream-added remote-uid: ', id);
            });
            // Occurs when a user subscribes to a remote stream.
            rtc.client.on("stream-subscribed", function(evt) {
                    var remoteStream = evt.stream;
                    var id = remoteStream.getId();
                    rtc.remoteStreams.push(remoteStream);
                    addView(id);
                    remoteStream.play("remote_video_" + id);
                    // Toast.info('stream-subscribed remote-uid: ' + id);
                    // console.log('stream-subscribed remote-uid: ', id);
                })
                // Occurs when the remote stream is removed; for example, a peer user calls Client.unpublish.
            rtc.client.on("stream-removed", function(evt) {
                var remoteStream = evt.stream;
                var id = remoteStream.getId();
                // Toast.info("stream-removed uid: " + id)
                remoteStream.stop("remote_video_" + id);
                rtc.remoteStreams = rtc.remoteStreams.filter(function(stream) {
                    return stream.getId() !== id
                })
                removeView(id);
                // console.log('stream-removed remote-uid: ', id);
            })
            rtc.client.on("onTokenPrivilegeWillExpire", function() {
                // After requesting a new token
                // rtc.client.renewToken(token);
                // Toast.info("onTokenPrivilegeWillExpire")
                // console.log("onTokenPrivilegeWillExpire")
            });
            rtc.client.on("onTokenPrivilegeDidExpire", function() {
                // After requesting a new token
                // client.renewToken(token);
                // Toast.info("onTokenPrivilegeDidExpire")
                // console.log("onTokenPrivilegeDidExpire")
            })
        }

        /**
        * rtc: rtc object
        * option: {
        *  mode: string, 'live' | 'rtc'
        *  codec: string, 'h264' | 'vp8'
        *  appID: string
        *  channel: string, channel name
        *  uid: number
        *  token; string,
        * }
        **/
        function join(rtc, option) {
            if (rtc.joined) {
                // Toast.error("Your already joined");
                return;
            }

            /**
            * A class defining the properties of the config parameter in the createClient method.
            * Note:
            *    Ensure that you do not leave mode and codec as empty.
            *    Ensure that you set these properties before calling Client.join.
            *  You could find more detail here. https://docs.agora.io/en/Video/API%20Reference/web/interfaces/agorartc.clientconfig.html
            **/
            rtc.client = AgoraRTC.createClient({ mode: option.mode, codec: option.codec });

            rtc.params = option;

            // handle AgoraRTC client event
            handleEvents(rtc);

            // init client
            rtc.client.init(option.appID, function() {
                // console.log("init success");

                /**
                * Joins an AgoraRTC Channel
                * This method joins an AgoraRTC channel.
                * Parameters
                * tokenOrKey: string | null
                *    Low security requirements: Pass null as the parameter value.
                *    High security requirements: Pass the string of the Token or Channel Key as the parameter value. See Use Security Keys for details.
                *  channel: string
                *    A string that provides a unique channel name for the Agora session. The length must be within 64 bytes. Supported character scopes:
                *    26 lowercase English letters a-z
                *    26 uppercase English letters A-Z
                *    10 numbers 0-9
                *    Space
                *    "!", "#", "$", "%", "&", "(", ")", "+", "-", ":", ";", "<", "=", ".", ">", "?", "@", "[", "]", "^", "_", "{", "}", "|", "~", ","
                *  uid: number | null
                *    The user ID, an integer. Ensure this ID is unique. If you set the uid to null, the server assigns one and returns it in the onSuccess callback.
                *   Note:
                *      All users in the same channel should have the same type (number or string) of uid.
                *      If you use a number as the user ID, it should be a 32-bit unsigned integer with a value ranging from 0 to (232-1).
                **/
                rtc.client.join(option.token ? option.token : null, option.channel, option.uid ? +option.uid : null, function(uid) {
                    // Toast.notice("join channel: " + option.channel + " success, uid: " + uid);
                    // console.log("join channel: " + option.channel + " success, uid: " + uid);
                    rtc.joined = true;

                    rtc.params.uid = uid;

                    // create local stream
                    rtc.localStream = AgoraRTC.createStream({
                        streamID: rtc.params.uid,
                        audio: true,
                        video: true,
                        screen: false,
                        microphoneId: option.microphoneId,
                        cameraId: option.cameraId
                    })

                    // init local stream
                    rtc.localStream.init(function() {
                        // console.log("init local stream success");
                        // play stream with html element id "local_stream"
                        rtc.localStream.play("local_stream")

                        // publish local stream
                        publish(rtc);
                    }, function(err) {
                        // Toast.error("stream init failed, please open console see more detail")
                        console.error("init local stream failed ", err);
                    })
                }, function(err) {
                    // Toast.error("client join failed, please open console see more detail")
                    console.error("client join failed", err)
                })
            }, (err) => {
                // Toast.error("client init failed, please open console see more detail")
                console.error(err);
            });
        }

        function publish(rtc) {
            if (!rtc.client) {
                // Toast.error("Please Join Room First");
                return;
            }
            if (rtc.published) {
                // Toast.error("Your already published");
                return;
            }
            var oldState = rtc.published;

            // publish localStream
            rtc.client.publish(rtc.localStream, function(err) {
                rtc.published = oldState;
                // console.log("publish failed");
                // Toast.error("publish failed")
                console.error(err);
            })
            // Toast.info("publish")
            rtc.published = true
        }

        function unpublish(rtc) {
            if (!rtc.client) {
                // Toast.error("Please Join Room First");
                return;
            }
            if (!rtc.published) {
                // Toast.error("Your didn't publish");
                return;
            }
            var oldState = rtc.published;
            rtc.client.unpublish(rtc.localStream, function(err) {
                rtc.published = oldState;
                // console.log("unpublish failed");
                // Toast.error("unpublish failed");
                console.error(err);
            })
            // Toast.info("unpublish")
            rtc.published = false;
        }

        function leave(rtc) {
            if (!rtc.client) {
                // Toast.error("Please Join First!");
                return;
            }
            if (!rtc.joined) {
                // Toast.error("You are not in channel");
                return;
            }
            /**
            * Leaves an AgoraRTC Channel
            * This method enables a user to leave a channel.
            **/
            rtc.client.leave(function() {
                // stop stream
                rtc.localStream.stop();
                // close stream
                rtc.localStream.close();
                while (rtc.remoteStreams.length > 0) {
                    var stream = rtc.remoteStreams.shift();
                    var id = stream.getId();
                    stream.stop();
                    removeView(id);
                }
                rtc.localStream = null;
                rtc.remoteStreams = [];
                rtc.client = null;
                // console.log("client leaves channel success");
                rtc.published = false;
                rtc.joined = false;
                // Toast.notice("leave success");
            }, function(err) {
                // console.log("channel leave failed");
                // Toast.error("leave success");
                console.error(err);
            })
        }

        $(function() {
            getDevices(function(devices) {
                devices.audios.forEach(function(audio) {
                    $('<option/>', {
                        value: audio.value,
                        text: audio.name,
                    }).appendTo("#microphoneId");
                })
                devices.videos.forEach(function(video) {
                    $('<option/>', {
                        value: video.value,
                        text: video.name,
                    }).appendTo("#cameraId");
                })
                resolutions.forEach(function(resolution) {
                    $('<option/>', {
                        value: resolution.value,
                        text: resolution.name
                    }).appendTo("#cameraResolution");
                })
                M.AutoInit();
            })

            var fields = ['appID', 'channel'];

            $("#join").on("click", function(e) {
                // console.log("join")
                e.preventDefault();
                var params = serializeformData();
                if (validator(params, fields)) {
                    join(rtc, params);
                }
            })

            $("#publish").on("click", function(e) {
                // console.log("publish")
                e.preventDefault();
                var params = serializeformData();
                if (validator(params, fields)) {
                    publish(rtc);
                }
            });

            $("#unpublish").on("click", function(e) {
                // console.log("unpublish")
                e.preventDefault();
                var params = serializeformData();
                if (validator(params, fields)) {
                    unpublish(rtc);
                }
            });

            $("#leave").on("click", function(e) {
                // console.log("leave")
                e.preventDefault();
                var params = serializeformData();
                if (validator(params, fields)) {
                    leave(rtc);
                }
            })
        })
    </script>
</body>

</html>
