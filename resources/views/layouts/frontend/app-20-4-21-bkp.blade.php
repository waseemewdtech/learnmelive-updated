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
			apiKey: '{{config('services.firebase.api_key')}}',
			authDomain: '{{config('services.firebase.auth_domain')}}',
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
                firebase.database().ref('/chats').orderByChild("reciever_status").equalTo("{{ Auth::user()->id }}unread").on("value", function(ysnapshot) {
                    var chat_html = "";
                    var chk =0;
                    if(ysnapshot.val() != null) {
                        $.each(ysnapshot.val(),function(){
                            if(this.sender_id !=chk)
                            {
                                var count = 0;
                                if(this.reciever_status){
                                    firebase.database().ref('/chats').orderByChild("status").equalTo(this.sender_reciever+"unread").on("value", function(cSnapshot) {
                                        count = cSnapshot.numChildren();
                                        
                                    });

                                    firebase.database().ref('/chats').orderByChild("status").equalTo(this.sender_reciever+"unread").limitToLast(1).on("value", function(snapshot) {
                                        if(snapshot.val() !=null)
                                        {
                                            $.each(snapshot.val(),function(){
                                                var cnt = '';
                                                var c_url = '{{ route("single.chat", ":id") }}';
                                                c_url = c_url.replace(':id',this.sender_id);
                                                var s_url = '{{ route("chat.user.status", ":id") }}';
                                                s_url = s_url.replace(':id',this.sender_id);
                                                if(this.content.length>20 ){ cnt = this.content.substring(0,20)+"..." }else{ cnt=this.content; }
                                                chat_html += '<a class="dropdown-item d-flex row m-0 pt-2" href="'+c_url+'">';
                                                    chat_html+='<div class="col-md-2 p-0">';
                                                        chat_html +='<img src="'+this.avatar+'" alt="" class="img-fluid">';
                                                        $.ajax({
                                                            url:s_url,
                                                            type:"get",
                                                            success:function(data)
                                                            {
                                                                if(data.next>data.current)
                                                                {
                                                                    chat_html+='<span class="ml--1 green-dot mt-1"></span>';
                                                                }else{
                                                                    chat_html+='<span class="ml--1 mt-1"></span>';
                                                                }
                                                            }
                                                        });
                                                        // chat_html+='<span class="ml--1 mt-1"></span>';
                                                    chat_html+='</div>';
                                                    
                                                    chat_html+='<div class="col-md-6 pl-2 pt-1 p-0">';
                                                        chat_html+='<div class="row m-0"><div class="dropdown-heading">'+this.name[0].toUpperCase() + this.name.slice(1)+'</div></div>';
                                                        chat_html+='<div class="row m-0"><div class="dropdown-contnt">'+cnt+'</div></div>';
                                                    chat_html+='</div>';

                                                    chat_html+='<div class="col-md-3 p-0">';
                                                        chat_html+='<div class="row m-0 justify-content-end mt-1"><span class="green-dot-nmbr">'+count+'</span></div>';
                                                        chat_html+='<div class="row m-0 justify-content-end mt-1"><span class="dropdown-contnt">'+moment(this.created_at).tz('{{ Auth::user()->time_zone }}').format('h:mm a')+'</span></div>';
                                                    chat_html+='</div>';
                                                chat_html+="</a>";
                                            });
                                            
                                        }
                                        
                                    });
                                }
                                
                                chk = this.sender_id;
                            }
                        });
                        $("#nav-home").html(chat_html);
                    }
                });
            },1000);
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
