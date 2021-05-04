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

        function chatUserSwitch(elem)
        {
            $.ajax({
                url:$(elem).data('url'),
                type:"get",
                success:function(data){
                    $('#body-content').html(data);
                }
            });
        }
       
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

	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous"></script>
	<script src="{{ asset('assets/frontend/js/emoji/jquery.js') }}"></script>
	<script src="{{ asset('assets/frontend/js/emoji/emoji.js') }}"></script>
	<script src="{{ asset('assets/frontend/js/emoji/DisMojiPicker.js') }}"></script>
	
	<script>
	
	    var index = 0;
	    var total = 0;
        var modal = document.getElementById("myModal");
        
        $("#emojis").disMojiPicker()
        $("#emojis").picker(emoji =>$('textarea[name="content"]').val($('textarea[name="content"]').val()+emoji));
        twemoji.parse(document.body);
      
        function scrollBodyBottom(){
            if(total >0)
            {
                if(index<total){
                    ++index;
                    console.log(index+" : "+total);
                }
                
                var elmnt = document.getElementById("span-"+index);
                elmnt.scrollIntoView();
                window.scrollTo(0, 0);
            }
            
        }
        
        function scrollBodyTop(){
            if(total >0)
            {
                if(index>0){
                    --index;
                    console.log(index+" : "+total);
                }
                var elmnt = document.getElementById("span-"+index);
                elmnt.scrollIntoView();
                window.scrollTo(0, 0); 
            }
            
        }
        
       function searchInput(elem)
       {
           index = 0;
           total = 0;
            
            var filter = $(elem).val(), count = 0;
            
               
                $(".chat-content-area").each(function(){
                    var originalText = $(this).text();
                    if(filter!='')
                    {
                        if ($(this).text().search(new RegExp(filter, "igm")) < 0) {
                            $(this).children('span').removeClass('highlight');
                            $(this).children('span').css('color','#FFFFFF');
                        } else {
                            count++;
                            total = count;
                            
                            var regex = new RegExp("("+filter+")", "igm");
                            var spn = '<span class="highlight" id="span-'+count+'">'+filter+'</span>';
                            $(this).html(originalText.replace(regex, spn));
                        }
                    }else{

                        let txt = $(this).children('span').text();
                        // alert(txt);
                        $(this).children('span').removeAttr('id');
                        $(this).children('span').removeAttr('class');
                        $(this).html(originalText.replace('<span>'+txt+'</span>', txt));
                        // $(this).children('span').removeClass('highlight');
                        // $(this).children('span').css('color','#FFFFFF');
                        
                    }
                });
            
            var numberItems = count;
            $("#filter-count").text(count);
        }
        
        function ajaxCommonCode(){
            
            $.ajax({
               url:"{{ route('chat.user.update',Auth::user()->id) }}",
               type:"get",
               success:function(data)
               {
                   console.log(data);
               }
            });
            
            $.ajax({
                url:"{{ route('chat.updated.users',Auth::user()->id) }}",
                type:"get",
                success:function(data)
                {
                    $.each(data,function(){
                        if(this.next > this.current)
                        {
                            $('.user-staus-'+this.id).addClass('bg-success');
                            $('.user-staus-'+this.id).removeClass('bg-grey');
                        }else{
                            $('.user-staus-'+this.id).removeClass('bg-success');
                            $('.user-staus-'+this.id).addClass('bg-grey');
                        }
                    });
                }
            });
            
        }
        
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
	
		var old_users_val = $(".users").html();
        
        function deleteImage(){
            $('#img').val("");
            $('#imagePreview').html("");
        }
        
        function fileValidation() {
            var fileInput = document.getElementById('img');
            var filePath = fileInput.value;
            var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif|\.JPG|\.JPEG|\.PNG|\.GIF|\.pdf|\.doc|\.docx)$/i;
            if (!allowedExtensions.exec(filePath)) {
                alert('Invalid file type only image is allowed');
                fileInput.value = '';
                return false;
            } 
            else 
            {
              
                if (fileInput.files && fileInput.files[0]) {
                    const name = fileInput.files[0].name;
                    const lastDot = name.lastIndexOf('.');
                    const fileName = name.substring(0, lastDot);
                    const ext = name.substring(lastDot + 1).toLowerCase();
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        var html = '<span style="position: relative; cursor: pointer; right: -96px; height: 20px; top: 4px; width: 20px; border-radius: 50%; outline: none !important;" onclick="deleteImage();"><i class="fa fa-times" aria-hidden="true" style="position: absolute; color: red; right: 4px; top: 1px; height: 14px; font-size: 12px;"></i></span>';
                        if(ext=='pdf')
                        {
                            html+='<div class="d-flex flex-column"><i class="fa fa-file-pdf-o" aria-hidden="true" style=" position: relative; top: 22px;"></i><div style=" position: relative; top: 25px;">'+name.substring(0,10) + "..."+'</div></div>';
                        }else if(ext=='docx' || ext=='doc'){
                            html += '<div class="d-flex flex-column"><i class="fa fa-file-word-o" aria-hidden="true" style=" position: relative; top: 22px;"></i><div style=" position: relative; top: 25px;">'+name.substring(0, 10) + "..."+'</div></div>';
                        }else{
                            html+='<img src="' + e.target.result+ '" style="height:100px;width:100px;cursor:pointer;" onclick="imagePopUp(this);"/>';
                        }
                        document.getElementById('imagePreview').innerHTML = html;
                            
                    };
                      
                    reader.readAsDataURL(fileInput.files[0]);
                }
            }
        }

		var scroll_bottom = function() {
		    var log = $('.messag-log');
            log.animate({ scrollTop: log.prop('scrollHeight')}, 0);
		}

		var escapeHtml = function(unsafe) {
		    return unsafe
		         .replace(/&/g, "&amp;")
		         .replace(/</g, "&lt;")
		         .replace(/>/g, "&gt;")
		         .replace(/"/g, "&quot;")
		         .replace(/'/g, "&#039;");
		 }

        const messaging = firebase.messaging();
        messaging.usePublicVapidKey("{{config('services.firebase.public_key')}}");
        function sendTokenToServer(fcm_token) {
            const user_id = '{{auth()->user()->id}}';
            $.ajax({
                url:"{{ route('save-token') }}",
                type:"POST",
                data:{fcm_token:fcm_token,user_id:user_id,_token:"{{ csrf_token() }}"},
                success:function(data)
                {
                    console.log(data);
                }
            });
        }

        function retreiveToken(){
            messaging.getToken().then((currentToken) => {
                if (currentToken) {
                    sendTokenToServer(currentToken);
                }
            }).catch((err) => {
                console.log(err.message);
            });
        }
        retreiveToken();
        messaging.onTokenRefresh(()=>{
            retreiveToken();
        });

        function formatAMPM() {
          var date = new Date();
          var hours = date.getHours();
          var minutes = date.getMinutes();
          var seconds = date.getSeconds();
          var ampm = hours >= 12 ? 'PM' : 'AM';
          hours = hours % 12;
          hours = hours ? hours : 12; // the hour '0' should be '12'
          minutes = minutes < 10 ? '0'+minutes : minutes;
          return strTime = date.getMonth() + '/' + date.getDay()+'/'+date.getFullYear()+' '+ hours + ':' + minutes +':'+ seconds + " " +ampm;
        }
        
		var   sender_reciever =  "@if(App\Chat::where('sender_id',Auth::user()->id)->where('reciever_id',$id)->first() !=null){{App\Chat::where('sender_id',Auth::user()->id)->where('reciever_id',$id)->first()->sender_reciever}}@elseif(App\Chat::where('sender_id',$id)->where('reciever_id',Auth::user()->id)->first() !=null){{App\Chat::where('sender_id',$id)->where('reciever_id',Auth::user()->id)->first()->sender_reciever}}@else{{Auth::user()->id.$id}}@endif";
        console.log("sender_reciever "+sender_reciever);
		var sender ='{{ Auth::user()->id }}';
		var reciever='{{ $id }}';
		// firebase.database().ref('/chats').remove();
		firebase.database().ref('/chats').orderByChild("sender_reciever").equalTo(sender_reciever.toString()).on('value', function(snapshot) {

			var chat_element = '';
		    
			if(snapshot.val() != null) {
				$.each(snapshot.val(),function(){
					var mt = "mt-0";
					chat_element +='<div class="d-flex mt-4">';
        		        chat_element +='<div class="col-lg-1 p-0"><div class="parent"><img src="'+this.avatar+'" class="rounded-circle img-fluid smallProfile" alt="" srcset=""></div></div>';
        		        chat_element +='<div class="col-lg-11 pl-3">';
        		            chat_element +='<div>'+this.name[0].toUpperCase() + this.name.slice(1)+'<span class="f-12 pl-2">'+moment(this.created_at).tz('{{ Auth::user()->time_zone }}').format('M-D-Y h:mmA')+'</span></div> ';
        		            
                            if(this.content && this.content !='' && this.content!='undefined')
						    {
						        mt="";
						        chat_element += '<div class="cl-a8a8a8 f-12 chat-content-area">';
    								chat_element += this.content;
    							chat_element += '</div>';
						    }

                            if (this.file_type=='pdf' && this.file_link !='')
    					    {
                            	chat_element += '<div class="d-flex justify-content-left mb-2"><a href="'+this.file_link+'" download="download" style="position: relative;left: 3px;color:#5d616d;"><div class="d-flex flex-column"><i class="fa fa-file-word-o" aria-hidden="true" style="position: relative; top: 13px; font-size: 15px; left: 4px;">&nbsp;'+this.file_name+'</i></div></a>';
                                chat_element +='</div>';
                            }
                            else if ((this.file_type=='docx' || this.file_type=='doc') && this.file_link !='')
    					    {
                            	chat_element += '<div class="d-flex justify-content-left mb-2"><a href="'+this.file_link+'" download="download" style="position: relative;color:#5d616d;"><div class="d-flex flex-column"><i class="fa fa-file-word-o" aria-hidden="true" style="position: relative; top: 13px; font-size: 15px; left: 4px;">&nbsp;'+this.file_name+'</i></div></a>';
                                chat_element +='</div>';
                            }
                            else if (this.file_type=='img' && this.file_link !='')
    					    {
                            	chat_element += '<div class="d-flex justify-content-left mb-2"><a href="'+this.file_link+'" download="download" style="position: relative;left: 17px;"><i class="fa fa-download" aria-hidden="true"></i></a>';
                                chat_element +='<img src="' + this.file_link + '" onclick="imagePopUp(this);" style="height:100px;width:100px;cursor:pointer;"/></div>';
                            }
        		            chat_element +='</div>';
        		        chat_element +='</div>';
        		    chat_element +='</div>';
        		    
					$(".messag-log").html(chat_element);
				});
			}
			scroll_bottom();
		}, function(error) {
			alert('ERROR! Please, open your console.')
			console.log(error);
		});
		
		firebase.database().ref('/typing').on('value', function(snapshot) {
			var user = snapshot.val();
			if(user && user.name == '{{ $user->username }}') {
				$(".users").html(user.name + ' is typing....');
				
			}else{
				$(".users").html(' ');
			}

		});

		// Set the card height equal to the height of the window
		$(".card-body").css({
			height: $(window).outerHeight() - 200,
			overflowY: 'auto'
		});

		$(document).on('keypress',function(e) {
			if(e.which == 13 && !e.shiftKey) {
				e.preventDefault();
				var chat_content = $('input[name=content]').val();
			    var img = $('input[name=img]').val();
			    var chk = false;
				if($('textarea[name=content]').val() !='' && $('input[name=img]').val()!=''){ chk = true; }
    			else if($('textarea[name=content]').val() =='' && $('input[name=img]').val()!=''){ chk = true; }
    			else if($('textarea[name=content]').val() !='' && $('input[name=img]').val()==''){ chk = true; }
				if(chk)
				{
					$(".send-msg").click();
				}
			}
		});

		$(".send-msg").click(function() {
			var chat_content = $('textarea[name=content]').val();
			var img = $('input[name=img]').val();
			var chk = false;
			var frm = document.getElementById('chat-form');
			var formData = new FormData(frm);
			formData.append('sender',sender);
			formData.append('reciever',reciever);
			formData.append('name','{{ Auth::user()->username }}');
            formData.append("_token","{{ csrf_token() }}");
			if(chat_content !='' && img!=''){ chk = true; }
			else if(chat_content =='' && img!=''){ chk = true; }
			else if(chat_content !='' && img==''){ chk = true; }
			if(chk)
			{
				$.ajax({
					url: '{{ route("chat.store") }}',
					cache:false,
                    contentType: false,
                    processData: false,
					data: formData,
					method: 'post',
					beforeSend: function() {
						$(this).attr('disabled', true);
						let name = "{{ Auth::user()->username }}";
						name = name[0].toUpperCase() + name.slice(1);
				        var chat_element = '';
				        chat_element +='<div class="d-flex mt-3">';
            		        chat_element +='<div class="col-lg-1 p-0"><div class="parent"><img src="{{ Auth::user()->avatar!=''?asset(Auth::user()->avatar): asset("uploads/user/default.jpg")}}" class="rounded-circle img-fluid smallProfile" alt="" srcset=""></div></div>';
            		        chat_element +='<div class="col-lg-11 pl-3">';
            		            chat_element +='<div>'+name+'<span class="f-12 pl-2">'+moment(this.created_at).tz('{{ Auth::user()->time_zone }}').format('M-D-Y h:mmA')+'</span></div> ';
            		            if (document.getElementById('img').files && document.getElementById('img').files[0])
        					    {
                                    var reader = new FileReader();
                                    reader.onload = function(e) {
                                        
                                            chat_element += '<div class="d-flex justify-content-left mb-2"><a href="'+e.target.result+'" download="download" style="position: relative;left: 17px;"><i class="fa fa-download" aria-hidden="true"></i></a>';
                                            chat_element +='<img src="' + e.target.result + '" onclick="imagePopUp(this);" style="height:100px;width:100px;cursor:pointer;"/></div>';
                                    };
                                    reader.readAsDataURL(document.getElementById('img').files[0]);	
                                }
                                var cnt = $('textarea[name=content]').val();
                                if (document.getElementById('img').files && document.getElementById('img').files[0]){
                                    
                                    const fname = document.getElementById('img').files[0].name;
                                    const lastDot = fname.lastIndexOf('.');
                                    const fileName = fname.substring(0, lastDot);
                                    const ext = fname.substring(lastDot + 1).toLowerCase();
                                    if(ext=='pdf'||ext=="docx" ||ext=="dox"){
                                        cnt=fname;
                                    }

                                }
                                
                                if(cnt !='')
    						    {
    						        mt="";
    						        chat_element += '<div class="cl-a8a8a8 f-12 chat-content-area">';
        								chat_element += cnt;
        							chat_element += '</div>';
    						    }
                                
            		            chat_element +='</div>';
            		        chat_element +='</div>';
            		    chat_element +='</div>';
				        
    				    
    					$(".messag-log").append(chat_element);
    					$('textarea[name=content]').val('');
				        $('input[name=img]').val('');
				        $('#imagePreview').html("");
				        $('#emojis').addClass('d-none');
    					scroll_bottom();
					},
					complete: function() {
						$(this).attr('disabled', false);
					},
					success: function(data) {
					    $('#img').val('');
						scroll_bottom();
					}
				});
			}else{
			    console.log("not fine");
			}
			
		});

		var timer;
		$("#chat-form [name=content]").keyup(function() {
			var ref = firebase.database().ref('typing');
			ref.set({
				name: '{{ Auth::user()->username }}'
			});

			timer = setTimeout(function() {
				ref.remove();
			}, 2000);
		});


		messaging.onMessage((payload)=>{
            var notify;
            notify = new Notification(payload.notification.title,{
                body: payload.notification.body,
                icon: payload.notification.icon,
                tag: "Dummy"
            });
        });

        self.addEventListener('notificationclick', function(event) {       
            event.notification.close();
        });	
        
        function focusOnInput()
        {
            firebase.database().ref('/chats').orderByChild("status").equalTo(sender_reciever+"unread").once("value", function(ysnapshot) {
                $.each(ysnapshot.val(),function(i,v){
                    if(v.content){content = v.content;}else{content ='';}
                        if(v.sender_id !=sender)
                        {
                            firebase.database().ref('/chats/'+i).set({avatar:v.avatar,content,file_type:v.file_type,file_link:v.file_link,ip:v.ip,name:v.name,created_at:v.created_at,reciever_id:v.reciever_id,sender_id:v.sender_id,sender_reciever:v.sender_reciever,status:"read",reciever_status:"read"})
                            console.log("status has been update of : "+i+"  ");
                        }
    		             
                });
            });
        }
        
        function dateDifference(date1,date2)
        {
            const diffTime = Math.abs(date2 - date1);
            const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)); 
            return diffDays;
        }
        
        window.onload = function() {
            focusOnInput();
            
            $.ajax({
               url:"{{ route('chat.user.update',Auth::user()->id) }}",
               type:"get",
               success:function(data)
               {
                   console.log(data);
               }
            });
            
            $.ajax({
                url:"{{ route('chat.updated.users',Auth::user()->id) }}",
                type:"get",
                success:function(data)
                {
                    console.log(data);
                    $.each(data,function(){
                         if(this.next > this.current)
                        {
                            $('.user-staus-'+this.id).addClass('bg-success');
                            $('.user-staus-'+this.id).removeClass('bg-grey');
                            if(this.id=="{{$user->id}}")
                            {
                                $('.user-status').html('active');
                            }
                            
                        }else{
                            $('.user-staus-'+this.id).removeClass('bg-success');
                            $('.user-staus-'+this.id).addClass('bg-grey');
                            if(this.id=="{{$user->id}}")
                            {
                                $('.user-status').html("Last seen "+this.status);
                            }
                            
                        }
                    });
                }
            });
        }
        setInterval(function(){
            @if(App\User::where('id', '!=',Auth::user()->id)->where('user_type','!=','admin')->get()->count() > 0)
    			@foreach(App\User::where('id', '!=',Auth::user()->id)->where('user_type','!=','admin')->get() as $u)
    			    sender_reciever_count ="@if(App\Chat::where('sender_id',Auth::user()->id)->where('reciever_id',$u->id)->first() !=null){{App\Chat::where('sender_id',Auth::user()->id)->where('reciever_id',$u->id)->first()->sender_reciever}}@elseif(App\Chat::where('sender_id',$u->id)->where('reciever_id',Auth::user()->id)->first() !=null){{App\Chat::where('sender_id',$u->id)->where('reciever_id',Auth::user()->id)->first()->sender_reciever}}@endif";
            		firebase.database().ref('/chats').orderByChild("status").equalTo(sender_reciever_count.toString()+"unread").on("value", function(ysnapshot) {
                        if(ysnapshot.numChildren()>0 && (sender_reciever_count == sender_reciever))
                        {
                            if(!$('#badge-{{ $u->id }}').parent('div').hasClass('d-none')){
                                $('#badge-{{ $u->id }}').parent('div').addClass('d-none');
                            }
                            
                        }
                        else if(ysnapshot.numChildren()>0 && (sender_reciever_count != sender_reciever) && {{ $u->id }}!={{ Auth::user()->id }}){
                            $('#badge-{{ $u->id }}').parent('div').removeClass('d-none');
                            $('#badge-{{ $u->id }}').html(ysnapshot.numChildren());
                        }
                        else{
                            $('#badge-{{ $u->id }}').parent('div').addClass('d-none');
                        }
                        
                    });
                    
                    firebase.database().ref('/chats').orderByChild("sender_reciever").equalTo(sender_reciever_count.toString()).limitToLast(1).on("value", function(snapshot) {
                        
                        if(snapshot.val() !=null)
                        {
                            $.each(snapshot.val(),function(){
                                
                                if(this.file_type="img" && this.file_link!='')
                                {
                                    $('#message-div-{{ $u->id }}').html('Image');
                                }else{ 
                                    var cnt = '';
                                    if(this.content.length>20 ){ cnt = this.content.substring(0,20)+"..." }else{ cnt=this.content; }
                                    $('#message-div-{{ $u->id }}').html(cnt);
                                    
                                }
                                if(dateDifference(new Date(),new Date(this.created_at))==1 || dateDifference(new Date(),new Date(this.created_at))==0)
                                {
                                    $('#time-div-{{ $u->id }}').html(moment(this.created_at).tz('{{ Auth::user()->time_zone }}').format('h:mmA'));
                                }
                                else{
                                    $('#time-div-{{ $u->id }}').html(dateDifference(new Date(),new Date(this.created_at))+" days");
                                }
                                
                                
                            });
                            
                        }
                        
                    });
    		    @endforeach
    	    @endif
        },100);
        
        
        
        
        setInterval(function(){
            $.ajax({
               url:"{{ route('chat.user.update',Auth::user()->id) }}",
               type:"get",
               success:function(data)
               {
                   console.log(data);
               }
            });
            
            $.ajax({
                url:"{{ route('chat.updated.users',Auth::user()->id) }}",
                type:"get",
                success:function(data)
                {
                    console.log(data);
                    $.each(data,function(){
                        if(this.next > this.current)
                        {
                            $('.user-staus-'+this.id).addClass('bg-success');
                            $('.user-staus-'+this.id).removeClass('bg-grey');
                            if(this.id=="{{$user->id}}")
                            {
                                $('.user-status').html('active');
                            }
                            
                        }else{
                            $('.user-staus-'+this.id).removeClass('bg-success');
                            $('.user-staus-'+this.id).addClass('bg-grey');
                            if(this.id=="{{$user->id}}")
                            {
                                $('.user-status').html("Last seen "+this.status);
                            }
                            
                        }
                    });
                }
            });
        },10000);
        
        setInterval(function(){
            document.getElementById('local_time').innerHTML ="Local time "+moment(new Date()).tz("{{ $user->time_zone }}").format('MMM D h:mmA');
        },1000);    
	</script>