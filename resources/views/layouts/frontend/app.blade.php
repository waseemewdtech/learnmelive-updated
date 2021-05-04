<!DOCTYPE html>
<html>

<head>
    @include('includes.frontend.head') 
    @yield('extra-css')
</head>

<body id="body-content">
    @yield('content')
    @yield('footer')

    <!-- E I G H T    S E C T I O N  S T A R T -->
    <section class="main_padding pt-70  w-100">
        <div class="w-100 border-bcbcbc"></div>
    </section>

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
</body>

</html>
