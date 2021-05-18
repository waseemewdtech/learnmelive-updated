<!DOCTYPE html>
<html>

<head>
    @include('includes.frontend.head')
    @yield('extra-css')
    <style>
        .top-40 {
            top: 40% !important;
        }
        .left-40{
            left: 40% !important;
        }
        .z-index {
            z-index: 2 !important;
        }
        
    </style>
</head>

<body id="body-content">
<div class="d-none calling-div position-fixed  left-40 top-40 z-index" ><div class="A_D_div text-center bg-dark p-5 rounded"><h6 class="incoming-call text-white mb-4"></h6><div class="d-flex justify-content-center   rounded "><div class="ringing-bell"> <img class="end-call cursor-pointer faa-ring animated fa-5x" onclick="endCall()"  src="{{ asset('assets/frontend/images/decline.png') }}" alt="image" /></div class="ringing-bell"> <div><img class="faa-ring animated fa-5x cursor-pointer accpet_call" onclick="makeCall(this)" data-toggle="modal" data-target="#video-call-modal" src="{{ asset('assets/frontend/images/accept.png') }}" alt="image" /></div></div> </div></div>
    @yield('content')
    @yield('footer')

    <!-- E I G H T    S E C T I O N  S T A R T -->
    <section class="main_padding pt-70  w-100">
        <div class="w-100 border-bcbcbc"></div>
    </section>

       <!-- video call Modal -->
<div class="modal fade" id="video-call-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <!-- <div class="modal-header pl-5 pr-5 bg-3ac574 cl-ffffff p-3">
                <h5 class="modal-title pl-4" id="exampleModalLabel">Waiting Room</h5>
                <button type="button" class=" cl-ffffff opacity-1 border-0 bg-transparent end-call" onclick="endCall()" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="cl-ffffff f-35 mr-3">&times;</span>
                </button>
            </div> -->
            <div class="modal-body d-flex align-items-center flex-column justify-content-center pt-5">
                <div class="f-45 robotoMedium cl-3ac754">Thank you for joining.</div>
                <div class="f-24 cl-616161">Meeting ID : 121545456484</div>
                <div class="embed-responsive embed-responsive-21by9">
                        <!DOCTYPE html>
                        <html lang="en">

                        <head>
                          <meta charset="UTF-8">
                          <meta http-equiv="X-UA-Compatible" content="ie=edge">
                          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                          <title>Basic Communication</title>
                          <link rel="stylesheet" href="{{ asset('assets/frontend/css/video.css') }}" />
                        </head>
                        <body class="agora-theme">

                          <form id="form" class="row col l12 s12 " >
                            <div class="row container col l12 s12">
                              <div class="col  d-none" style="min-width: 433px; max-width: 443px;">
                                <div class="card" style="margin-top: 0px; margin-bottom: 0px;">
                                  <div class="row card-content" style="margin-bottom: 0px;">
                                      <div class="input-field">
                                        <label for="appID" class="active">App ID</label>
                                        <input type="text" placeholder="App ID" name="appID" value="229e3bdfe52e432b86e27f442b1cf04a">
                                      </div>
                                      <div class="input-field">
                                        <label for="channel" class="active">Channel</label>
                                        <input type="text" placeholder="channel" name="channel" value="" id="channelName">
                                      </div>
                                      <div class="input-field">
                                        <label for="token" class="active">Token</label>
                                        <input type="text" id="token" placeholder="token" name="token" value="">
                                      </div>
                                      <div class="row" style="margin: 0">
                                        <div class="col s12">
                                        <button class="btn btn-raised btn-primary waves-effect waves-light" id="join">JOIN</button>
                                        <button class="btn btn-raised btn-primary waves-effect waves-light" id="leave">LEAVE</button>
                                        <button class="btn btn-raised btn-primary waves-effect waves-light" id="publish">PUBLISH</button>
                                        <button class="btn btn-raised btn-primary waves-effect waves-light" id="unpublish">UNPUBLISH</button>
                                        </div>
                                      </div>
                                  </div>
                                </div>
                                <ul class="collapsible card agora-secondary-border" style="margin-top: .4rem; border: 1px ">
                                  <li>
                                    <div class="collapsible-header agora-secondary-bg">
                                      <h6 class="center-align">ADVANCED SETTINGS</h6>
                                    </div>
                                    <div class="collapsible-body card-content">
                                      <div class="row">
                                        <div class="col-sm-12 s12">
                                          <div class="input-field">
                                            <label for="UID" class="active">UID</label>
                                            <input type="number" placeholder="UID" name="uid">
                                          </div>
                                          <div class="input-field">
                                            <label for="cameraId" class="active">CAMERA</label>
                                            <select name="cameraId" id="cameraId"></select>
                                          </div>
                                          <div class="input-field">
                                            <label for="microphoneId" class="active">MICROPHONE</label>
                                            <select name="microphoneId" id="microphoneId"></select>
                                          </div>
                                          <div class="input-field">
                                            <label for="cameraResolution" class="active">CAMERA RESOLUTION</label>
                                            <select name="cameraResolution" id="cameraResolution"></select>
                                          </div>
                                          <div class="row col-sm-12 s12">
                                            <div class="row">
                                              <label for="mode" class="active">MODE</label>
                                            </div>
                                            <div class="row">
                                              <label>
                                                <input type="radio" class="with-gap" name="mode" value="live" checked />
                                                <span>live</span>
                                              </label>

                                              <label>
                                                <input type="radio" class="with-gap" name="mode" value="rtc" />
                                                <span>rtc</span>
                                              </label>
                                            </div>
                                          </div>
                                          <div class="row col-sm-12 s12">
                                            <div class="row">
                                              <label for="codec" class="active">CODEC</label>
                                            </div>
                                            <div class="row">
                                              <label>
                                                <input type="radio" class="with-gap" name="codec" value="h264" checked />
                                                <span>h264</span>
                                              </label>

                                              <label>
                                                <input type="radio" class="with-gap" name="codec" value="vp8" />
                                                <span>vp8</span>
                                              </label>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </li>
                                </ul>
                              </div>
                           
                              <div class="col s7">
                                <div class="video-grid" id="video" style="width:100% !important">
                                  <div class="video-view" style="position:absolute;z-index:+1;width:100% !important;">
                                    <div id="local_stream" class="video-placeholder"></div>
                                    <div id="local_video_info" class="video-profile hide"></div>
                                    <div id="video_autoplay_local" class="autoplay-fallback hide"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </form>
                          <style>
                            #local_stream > :first-child{
                                            height:30% !important;
                                            width:30% !important;
                                            left:67% !important;
                                            top:70% !important;
                                            
                                        }
                          </style>
                        </body>
                        </html>

                  </div>

                <!-- <div class="f-21 robotoRegular cl-3ac754 w-50 text-center">The host is currently meeting with other client and will let you into the meeting shortly.</div>
                <div class="f-21 robotoRegular pt-4">Average Wait:<span class="cl-3ac754 pl-3">Approx 5-10 Minutes</span></div> -->
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary bg-3ac574 end-call" data-dismiss="modal" onclick="endCall()">End Call</button>
            </div>
        </div>
    </div>
</div>


    <!-- E I G H T    S E C T I O N  E N D  -->
        @include('includes.frontend.footer')
    <!-- N I N E    S E C T I O N  S T A R T -->

    <!-- N I N E    S E C T I O N  E N D  -->

    <!-- T E N    S E C T I O N  S T A R T  -->


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
                                var element = document.getElementById("notification"+v.id);
                                if(typeof(element) == 'object' && element == null){

                                    html += '<a class="dropdown-item d-flex row m-0 pt-2" id="notification'+v.id+'" href="'+v.url+'">';
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

                                }

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
                @endif

                $.ajax({
                    url:"@if(Auth::user()->user_type=='admin'){{ route('admin.user.dispute.notification') }}@else{{ route('user.dispute.notification') }}@endif",
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

            window.onload = function() {
                $.ajax({
                    url:"{{ route('chat.user.update',Auth::user()->id) }}",
                    type:"get",
                    success:function(data)
                    {
                        // console.log(data);
                    }
                });
            }

            setInterval(function(){
                $.ajax({
                    url:"{{ route('chat.user.update',Auth::user()->id) }}",
                    type:"get",
                    success:function(data)
                    {
                        // // console.log(data);
                    }
                });
            },10000);

        @endif

        $(function () {
            $(".select2").select2();
            $(".example1")
                .DataTable({
                    responsive: true,
                    lengthChange: false,
                    autoWidth: false,
                    // "scrollX": true,
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
