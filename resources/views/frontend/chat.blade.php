@extends('layouts.frontend.app')

@section('extra-css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/all.min.css"  />
    <link href="{{ asset('assets/frontend/css/custom.css') }}" />
    <link href="{{ asset('assets/frontend/css/emoji/jquerysctipttop.css') }}" />
    <link href="{{ asset('assets/frontend/css/emoji/emojis.css') }}" />
     <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/dashboard.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/utility.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/navbar.css') }}">
    <style>
        
        /*.reciever-div{*/
        /*    background:#007bff !important;*/
        /*    color:#FFFFFF !important;*/
        /*}*/
        
        /*.  bn  -div{*/
        /*    background:#3AC574 !important;*/
        /*    color:#FFFFFF !important;*/
        /*}*/
        .main-profile {
            width: 180px;
            height: 180px;
            border-radius: 100%;
          }
          @media screen and (min-width:1240px) {
            .r-Main-P{
            padding-left: 140px;
          padding-right: 140px;
          }
              
          }
         

          .pr {
            position: relative;
            width: fit-content;
            margin: auto;
          }
        
          .small-Circle {
            width: 21px;
            height: 21px;
            position: absolute;
        
            top: 0%;
            right: 17%;
            border-radius: 100%;
          }
        
          .bg-grey {
            background-color: #AAAAAA;
          }
        
          .f-22 {
            font-size: 22px;
          }
        
          .cl-5757575 {
            color: #575757;
          }
        
          .cl-a8a8a8 {
            color: #A8A8A8;
          }
          .cl-a8a8a8{
            color: #A8A8A8;
          }
          .f-17 {
            /*font-size: 17px;*/
            font-size:12px;
          }
          .cl-3ac754{
                  color: #3AC574;
          }
          .bg-3ac754{
                  background-color: #3AC574 !important;
          }
          .f-21{
              font-size:21px !important;
          }
          .f-11{
              font-size:11px !important;
          }
          .h-85{
                  height: 85px;
          }
          .modal-header .close {
              padding-top:12px i !important;
    /* padding: 0.5rem !important; */
    /* margin: -1rem -1rem -1rem auto; */
}
                .embed-responsive-21by9::before {
            padding-top: 32px !important;
                }
          .smallProfile {
            width: 40px;
            height: 38px;
          }
          #video-chat {
                cursor: pointer;
          }
        
          .parent {
            position: relative;
            width: fit-content;
          }
        
          .parentCircle-Child {
            width: 12px;
            height: 12px;
            position: absolute;
            top: 0%;
            right: 5%;
            border-radius: 100%;
          }
          .notification-divMain{
            width: 25px;
            height: 25px;
            border-radius: 50%;
          
          }
          .typing-dot{width: 7px; height: 7px;background: green;border-radius: 50%;margin-top: 10px;margin-left: 1px;}
          .cl-9b9461{
            color: #9B9461;
          }
          .cl-green{
              color:#12EF54;
          }
          .f-13{
              font-size:13px;
          }
          .f-10{
                font-size:10px;
          }
          .f-12{
                font-size:12px;
          }
          .card-footer .btn {
            height: 36px;
          }
          .h-36{
                  height: 36px;
              
          }
        
        
        .my-custom-btn{
            outline: none !important;
            font-size: 15px;
            border: none;
            border-radius: 50%;
            height: 23px;
            cursor:pointer;
            background:transparent !important;
        }
        svg:not(:root).svg-inline--fa {
    overflow: visible;
    color: #3ac373;
}
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
        
        #myImg {
          border-radius: 5px;
          cursor: pointer;
          transition: 0.3s;
        }
        
        #myImg:hover {opacity: 0.7;}
        
        /* The Modal (background) */
        .myModal {
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
        .myModalContent {
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
        
        span.highlight{
            background-color: yellow;
            /*outline: 1px solid orange;*/
            color:black;
            padding-left: 3px;
            padding-right: 3px;
            border-radius: 4px;
        }

        .cursor-pointer{cursor: pointer;}
        
        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px){
          .modal-content {
            width: 100%;
          }
        }
        
        .emoji-picker {
            background-color: #303841;
            width: 400px;
            /*margin: 50px;*/
            border-radius: 5px;
            height: 400px;
            display: flex;
        }
        
        .emoji-selectables {
            background-color: #212427;
            width: 45px;
            height: 100%;
            padding: 10px 15px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .emoji-selectables span {
            margin-bottom: 7px;
            cursor: pointer;
        }
        
        .emoji-selectables span.active img {
            filter: none;
        }
        
        .emoji-selectables span img {
            width: 25px;
            display: block;
            display: flex;
            align-items: center;
            filter: grayscale(100%)
        }
        
        .emoji-content div {
            width: 100%;
        
            flex-wrap: wrap;
            justify-content: center;
            padding: 5px;
        }
        
        .emoji-content span {
            display: block;
            padding: 5px;
            cursor: pointer;
        }
        
        .emoji-content span:hover {
            transform: scale(1.1);
            background-color: #3f4953;
            border-radius: 5px;
        }
        
        .picker-emoji-content {
            display: none;
            
        }
        
        .picker-emoji-sel.face {
            color: aliceblue;
            font-size: 10px;
        }
        
        .picker-emoji-content.active {
            display: flex;
            display: flex;
            height: 100%;
            overflow-y: scroll;
        }
        
        .emoji-content span img {
            width: 32px;
            height: 32px;
        }
        
        
        .picker-emoji-content::-webkit-scrollbar-thumb {
            height: 10px;
            background-color: #65B88D;
            border-radius: 100px;
        }
        
        .picker-emoji-content::-webkit-scrollbar-track {
            background-color: #303841;
        }
        
        .picker-emoji-content::-webkit-scrollbar {
            width: 6px;
        }
        .card-header,.card-footer{
            background-color: #fff !important;
            
        }
        .card-header{
            border-bottom:0px !important;
        }
        textarea{
            border:0px !important; 
        }
        .card {
    box-shadow: rgb(99 99 99 / 20%) 0px 2px 8px 0px;
    border:0px !important;
        }
    .card-body{
    padding:0px !important;
    }
    .loader{
        position: relative;
        top: 50%;
        left: 8%;
        transform: translate(-50%, -50%);
        display: flex;
        align-items: center;
            
        }
        /* Creating the dots */
        span.typing{
        height: 10px;
        width: 10px;
        margin-right: 10px;
        border-radius: 50%;
        background-color: #3AC574;
        animation: loading 1s linear infinite;
        }
        /* Creating the loading animation*/
        @keyframes loading {
        0%{
            transform: translateX(0);
        }
        25%{
            transform: translateX(15px);
        }
        50%{
            transform: translateX(-15px);
        }
        100%{
            transform: translateX(0);
        }
            
        }
        span:span.typing:nth-child(1){
        animation-delay: 0.1s;
        }
        span.typing:nth-child(2){
        animation-delay: 0.2s;
        }
        span.typing:nth-child(3){
        animation-delay: 0.3s;
        }
        /* span.typing:nth-child(4){
        animation-delay: 0.4s;
        }
        span.typing:nth-child(5){
        animation-delay: 0.5s;
        } */
        .A_D_div{
            width: fit-content;
            position:absolute;
            z-index: +1;
            top:50%;
            left:50%;
        }
    </style>
@endsection

@section('content')
    <section class="px-5 bg-navbar nav-bg-img pb-5">
        @include('includes.frontend.navbar')

    </section>

    @include('includes.frontend.navigations')
<div class="d-none calling-div" ><div class="A_D_div text-center bg-dark p-5 rounded"><h6 class="incoming-call text-white mb-4"></h6><div class="d-flex justify-content-center   rounded "><div> <img class="end-call cursor-pointer" onclick="endCall()"  src="{{ asset('assets/frontend/images/decline.png') }}" alt="image" /></div> <div><img class="cursor-pointer" onclick="makeCall()" data-toggle="modal" data-target="#video-call-modal" src="{{ asset('assets/frontend/images/accept.png') }}" alt="image" /></div></div> </div></div>
	<div class="wrapper">
        <input type="hidden" id="sender" value="{{ Auth::user()->id }}">
        <input type="hidden" id="reciever" value="{{ $id }}">
        <input type="hidden" id="username" value="{{ $user->username }}">
        <input type="hidden" id="sender_reciever" value="@if(App\Chat::where('sender_id',Auth::user()->id)->where('reciever_id',$id)->first() !=null){{App\Chat::where('sender_id',Auth::user()->id)->where('reciever_id',$id)->first()->sender_reciever}}@elseif(App\Chat::where('sender_id',$id)->where('reciever_id',Auth::user()->id)->first() !=null){{App\Chat::where('sender_id',$id)->where('reciever_id',Auth::user()->id)->first()->sender_reciever}}@else{{Auth::user()->id.$id}}@endif">
	    <div class="row m-0 r-Main-P mt-5">
            <div class="col-md-3 ">
                <div class="bg-white pl-3 pr-3">
                    <div class="pt-4 pb-4" style="min-height: 702px; max-height: 702px;">
                        <div class="pr">
                          <img src="{{$user->avatar !=''?asset($user->avatar): asset('uploads/user/default.jpg')}}" class="rounded-circle img-fluid main-profile" alt="" srcset="">
                          <div class="small-Circle bg-grey  user-staus-{{ $user->id }}"></div>
                        </div>
                        <div class="text-center f-22 cl-5757575">{{ ucwords($user->username) }}</div>
                        <div class="cl-a8a8a8 f-17 text-center">{{ $user->user_type=='specialist'? ucwords($user->specialist->category->name) :'' }}</div>
                        {{-- <div class="row m-0  pt-3 pb-3 border-bottom cl-a8a8a8">
                          <div class="col-md-6 col-md-6 p-0">
                            <div class="f-17">Reviews:</div>
                          </div>
                          <div class="col-md-6 col-md-6 p-0 text-end d-flex justify-content-end">
                            <div class="f-17 text-end">5.0 (21)</div>
                          </div>
                        </div> --}}
                        <div class="row m-0  pt-3 pb-3 border-bottom cl-a8a8a8">
                          <div class="col-md-6 col-md-6 p-0 ">
                            <div class="f-17">Location:</div>
                          </div>
                          <div class="col-md-6 col-md-6 p-0 text-end d-flex justify-content-end">
                            <div class="f-17 text-end">{{ ucwords($user->country) }}</div>
                          </div>
                        </div>
                        @if($user->user_type=='specialist')
                            @if($user->specialist->languages !=null)
                                @if(json_decode($user->specialist->languages))
                                    @foreach(json_decode($user->specialist->languages) as $lang)
                                        <div class="row m-0  pt-3 pb-3 border-bottom cl-a8a8a8">
                                            <div class="col-md-6 col-md-6 p-0 ">
                                                <div class="f-17 text-end" >{{ $lang }}</div>
                                            </div>
                                            <div class="col-md-6 col-md-6 p-0 text-end d-flex justify-content-end">
                                                <div class="f-17 text-end">Primary</div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            @endif
                        @endif
                    </div>
                </div>
            </div>
	        <div class="col-sm-12 col-md-3 col-lg-3 col-xs-12 pl-0 pr-0">
	            <div class="card" style="min-height: 702px; max-height: 702px;    ">
        			<div class="card-header border-0">
        				<div class="title border-0">All Conversations ({{App\User::where('id', '!=',Auth::user()->id)->where('user_type','!=','admin')->get()->count()}})</div>
        			</div>
        			<div class="card-body pl-0 pr-0">
        				<div class="d-flex">
        				    
        				    @if(App\User::where('id', '!=',Auth::user()->id)->where('user_type','!=','admin')->get()->count() > 0)
			                    
			                    <ul class="list-group " style="width:100%;">
                			        @foreach(App\User::where('id', '!=',Auth::user()->id)->where('user_type','!=','admin')->get() as $u)
                			            <a data-original-url="{{ route('single.chat',$u->id) }}" data-url="{{ route('chat.user.switch',$u->id) }}" onclick="chatUserSwitch(this);" type="button" class="item-nav  h-85 border  list-group-item-action cursor-pointer  border-left-0 border-right-0 @if($user->id==$u->id) bg-3ac754 text-white @else bg-white @endif">
                			                   <div class="row m-0  pt-3">
                                                <div class="col-md-3">
                                                    <div class="parent"><img src="{{$u->avatar!=''?asset($u->avatar): asset('uploads/user/default.jpg')}}" class="rounded-circle img-fluid smallProfile" alt=""
                                                    srcset="">
                                                    <div class="parentCircle-Child bg-grey  user-staus-{{ $u->id }}"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 p-0 f-13 d-flex flex-column justify-content-center">
                                                    <div>{{ ucwords($u->username) }}</div>
                                                    <div class="pt-1" id="message-div-{{ $u->id }}"></div>
                                                </div>
                                                <div class="col-md-2 pl-0 d-flex flex-column justify-content-center align-items-center">
                                                    <div class="notification-divMain bg-3ac754 d-none"><span class="cl-9b9461 d-flex justify-content-center align-items-center text-white" id="badge-{{ $u->id }}"></span></div>
                                                    <div class="f-10 pt-1" id="time-div-{{ $u->id }}"></div>
                                                </div>
                                            </div>
                                        </a>
                			        @endforeach
            			        </ul>
            			    @endif
        				</div>
        			</div>
        			<div class="card-footer border-0" ></div>
        		</div>
	            
	        </div>
	        <div class="col-sm-7 col-md-6 col-lg-6 col-xs-12 pl-0">
	            <div class="card" style="min-height: 702px; max-height: 702px;">
        			<div class="card-header">
        			   <div class="row m-0 align-items-center border-bottom pb-2">
        			       <div class="col-md-7 col-lg-7 p-0"> 
        			       <div class="d-flex">
        			           <div>  <div class="parent"><img src="{{ $user->avatar?asset($user->avatar): asset('uploads/user/default.jpg') }}" class="rounded-circle img-fluid smallProfile" alt=""
                                srcset="">
                            <div class="parentCircle-Child @if($user->last_login >time()) bg-success @else bg-grey @endif user-staus-{{ $user->id }}" ></div>

                                           </div></div>
                                <div class="pl-2">
                                    <div>{{ ucwords($user->username) }} <img src="{{ asset('assets/frontend/images/video-call-icon.png') }}" onclick="makeCall()" class=" img-fluid h-40 video-chat" id="video-chat" data-toggle="modal" data-target="#video-call-modal" data-caller="{{$user->username}}"></div>
                                    <div class="d-flex">
                                        <div class="cl-a8a8a8 f-11 user-status">@if($user->last_login >time()) active @else Last seen {{ Carbon\Carbon::parse(intval($user->last_login))->diffForHumans() }} @endif</div>
                                        <div class="border-right pl-1 pr-1"></div> <div class="cl-a8a8a8 f-11 ml-1" id="local_time"></div>
                                    </div>
                                </div>
        			       </div>
        			      </div>
        			      <div class="col-md-5 col-lg-5 d-flex justify-content-between">
        			          <!--<span><img src="{{asset('assets/frontend/images/chat/search.png')}}" class="" alt="" srcset=""></span>-->
        			          <input class="border rounded f-14 pl-2" style="height:30px;" type="text" onkeyup="searchInput(this);" placeholder="Search Messages...">
        			          <button onclick="scrollBodyBottom();" class="my-custom-btn"><i class="fa fa-angle-down" aria-hidden="true"></i></button>
        			          <button onclick="scrollBodyTop();" class="my-custom-btn"><i class="fa fa-angle-up" aria-hidden="true"></i></button>
        			          <span class="ml-1" id="filter-count"></span>
        			      <!--<div></div>-->
        			      <!--<span class="pl-3"><img src="{{asset('assets/frontend/images/chat/Path-82.png')}}" class="" alt="" srcset=""></span></div>-->
        	
        			                   </div>
        			</div>
        			<div class="card-body messag-log" style="max-height: 417px !important;min-height: 417px !important;" onmouseenter="focusOnInput();">
        			   
        
        				{{-- <div class="d-flex justify-content-center">
        					<div class="spinner-border text-success" role="status">
        						<span class="sr-only">Loading...</span>
        					</div>
        				</div> --}}
        
        				
        			</div>
        			
        			<div class="card-footer border-0 pl-3 pr-3" >
        				<div id="imagePreview" style="margin-left: -19px !important;height:90px" class="d-flex"></div>
        				<div class="users d-flex" style="height: 23px;"></div>
                        <form id="chat-form" method="post" class="mt-1 ">
        					<div class="input-group border-top d-flex align-items-center pb-2">
        						<textarea  name="content" class="form-control  pl-0" placeholder="Type your message ..." autocomplete="off"></textarea>
        						<div id="emojis" class="d-none" style="position: absolute; bottom: 102%; right: 26%;"></div>
        						<span class="pl-3" onclick="if($('#emojis').hasClass('d-none')){ $('#emojis').removeClass('d-none') }else{ $('#emojis').addClass('d-none') }">	<img src="{{asset('assets/frontend/images/chat/Group-150.png')}}" class="" alt="" srcset="" style="cursor:pointer;" ></span>
        						<input type="file"  name="img" style="display:none;" id="img" onchange="fileValidation();">
        			        	<img src="{{asset('assets/frontend/images/chat/Path-87.png')}}" class="" onclick="$('#img').click();" alt="" srcset="" style="cursor:pointer;" >
        						
        					
        						<div class="input-group-btn">
        							<button type="button" class="btn btn-primary send-msg bg-3ac754 border-0 " onclick="messageSend();">Send&nbsp; <img src="{{asset('assets/frontend/images/chat/Path-88.png')}}" class="" alt="" srcset=""></button>
        						</div>
        					</div>
        				</form>
        			</div>
        		</div>
	        </div>
	    </div>
	</div>
	
	<!-- The Modal -->
    <div id="myModal" class="modal myModal" style="z-index:10;">
      <span class="close">&times;</span>
      <img class="modal-content myModalContent" id="img01" style="width: auto;height: 80%;margin: 0px auto;">
      <div id="caption"></div>
    </div>




    <!-- video call Modal -->
<div class="modal fade" id="video-call-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header pl-5 pr-5 bg-3ac574 cl-ffffff p-3">
                <h5 class="modal-title pl-4" id="exampleModalLabel">Waiting Room</h5>
                <button type="button" class=" cl-ffffff opacity-1 border-0 bg-transparent end-call" onclick="endCall()" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="cl-ffffff f-35 mr-3">&times;</span>
                </button>
            </div>
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
                                <div class="video-grid" id="video">
                                  <div class="video-view">
                                    <div id="local_stream" class="video-placeholder"></div>
                                    <div id="local_video_info" class="video-profile hide"></div>
                                    <div id="video_autoplay_local" class="autoplay-fallback hide"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </form>
                        </body>
                        </html>
                    
                  </div>
                  
                <div class="f-21 robotoRegular cl-3ac754 w-50 text-center">The host is currently meeting with other client and will let you into the meeting shortly.</div>
                <div class="f-21 robotoRegular pt-4">Average Wait:<span class="cl-3ac754 pl-3">Approx 5-10 Minutes</span></div>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary bg-3ac574 end-call" data-dismiss="modal" onclick="endCall()">End Call</button>
            </div>
        </div>
    </div>
</div>



@endsection

@section('extra-script')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous"></script>
	<script src="{{ asset('assets/frontend/js/emoji/jquery.js') }}"></script>
	<script src="{{ asset('assets/frontend/js/emoji/emoji.js') }}"></script>
	<script src="{{ asset('assets/frontend/js/emoji/DisMojiPicker.js') }}"></script>
    <script>



        function chatUserSwitch(elem)
        {
            window.history.replaceState({}, '',$(elem).data('original-url'));
            $.ajax({
                url:$(elem).data('url'),
                type:"get",
                success:function(data){
                    sender = data.sender;
                    reciever = data.reciever;
                    sender_reciever = data.sender_reciever;
                    userName = data.username;
                    $('.wrapper').html(data.html);
                    firebase.database().ref('/chats').orderByChild("sender_reciever").equalTo(data.sender_reciever).on('value', function(snapshot) {
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
                }
            });
        }
	    var index = 0;
	    var total = 0;
        var modal = document.getElementById("myModal");
        
        // $('.item-nav').click(function (event) {
        //     event.preventDefault();
        //     window.history.replaceState({}, '', $(this).attr('href'));
        //     $('body').load($(this).attr('href'));
        // });

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
        var sender_reciever;
		var sender;
		var reciever;
        var userName;
        function setValue(){
            sender_reciever = $('#sender_reciever').val();
            sender = $('#sender').val();
            reciever = $('#reciever').val();
            userName = $('#username').val();
        }
        setValue();
        setInterval(setValue,100);
        
		// var sender_reciever =  "@if(App\Chat::where('sender_id',Auth::user()->id)->where('reciever_id',$id)->first() !=null){{App\Chat::where('sender_id',Auth::user()->id)->where('reciever_id',$id)->first()->sender_reciever}}@elseif(App\Chat::where('sender_id',$id)->where('reciever_id',Auth::user()->id)->first() !=null){{App\Chat::where('sender_id',$id)->where('reciever_id',Auth::user()->id)->first()->sender_reciever}}@else{{Auth::user()->id.$id}}@endif";
		// var sender ='{{ Auth::user()->id }}';
		// var reciever='{{ $id }}';
		// firebase.database().ref('/chats').remove();
		firebase.database().ref('/chats').orderByChild("sender_reciever").equalTo(sender_reciever).on('value', function(snapshot) {

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
			if(user && user.name == userName) {
                var html = '';
                html+='<div class="loader"><span class="typing"></span><span class="typing" ></span><span class="typing" ></span></div>';
                // html+='<div class="typing-dot"></div><div class="typing-dot"></div><div class="typing-dot"></div>';
                html+='<div class="ml-3">'+user.name+' is typing</div>';
				$(".users").html(html);
				
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
					// $(".send-msg").click();
                    messageSend();
				}
			}
		});

		function messageSend() {
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
				        chat_element +='<div class="d-flex mt-4">';
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
			
		}

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
                        // console.log("update => "+v.reciever_id+" : "+sender);
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
                        firebase.database().ref('/chats').orderByChild("status").equalTo(sender_reciever_count.toString()+"unread").limitToLast(1).on("value", function(ssnapshot) {
                            if(ssnapshot.numChildren()>0){
                                $.each(ssnapshot.val(),function(){
                                    if(ysnapshot.numChildren()>0 && this.sender_id == sender)
                                    {
                                        if(!$('#badge-{{ $u->id }}').parent('div').hasClass('d-none')){
                                            $('#badge-{{ $u->id }}').parent('div').addClass('d-none');
                                        }
                                        
                                    }
                                    else if(ysnapshot.numChildren()>0 && this.sender_id !=sender && {{ $u->id }}!=reciever){
                                        $('#badge-{{ $u->id }}').parent('div').removeClass('d-none');
                                        $('#badge-{{ $u->id }}').html(ysnapshot.numChildren());
                                    }
                                    else{
                                        $('#badge-{{ $u->id }}').parent('div').addClass('d-none');
                                    }
                                });
                                
                            }
                            
                        });
                        
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
                            if(this.id==reciever)
                            {
                                $('.user-status').html('active');
                            }
                            
                        }else{
                            $('.user-staus-'+this.id).removeClass('bg-success');
                            $('.user-staus-'+this.id).addClass('bg-grey');
                            if(this.id==reciever)
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
 <script src="{{ asset('assets/frontend/js/video-js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/video-js/materialize.min.js') }}"></script>
  <script src="https://cdn.agora.io/sdk/release/AgoraRTCSDK-3.4.0.js"></script>
<script>
$(document).ready(function(){
     setInterval(function(){ 
         
      var username = $('.video-chat').data('caller');
    $.ajax({
        type: 'get',
        url: '{{ url("call-checker") }}',
        data: { name: username },
        success: function(data) {
            if(data.status == 'success' && data.caller !='{{Auth::user()->username}}' )
             $('.calling-div').removeClass('d-none');
             $('.incoming-call').html('incomming call from '+data.caller);

        }
    })
     }, 3000);
})


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
  function makeCall(){
    var username = $('.video-chat').data('caller');
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


 


console.log("agora sdk version: " + AgoraRTC.VERSION + " compatible: " + AgoraRTC.checkSystemRequirements());
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
                Toast.error("Please Enter " + key);
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
            console.log(err)
        })
        // Occurs when the peer user leaves the channel; for example, the peer user calls Client.leave.
    rtc.client.on("peer-leave", function(evt) {
            var id = evt.uid;
            console.log("id", evt);
            if (id != rtc.params.uid) {
                removeView(id);
            }
            Toast.notice("peer leave")
            console.log('peer-leave', id);
        })
        // Occurs when the local stream is published.
    rtc.client.on("stream-published", function(evt) {
            Toast.notice("stream published success")
            console.log("stream-published");
        })
        // Occurs when the remote stream is added.
    rtc.client.on("stream-added", function(evt) {
        var remoteStream = evt.stream;
        var id = remoteStream.getId();
        Toast.info("stream-added uid: " + id)
        if (id !== rtc.params.uid) {
            rtc.client.subscribe(remoteStream, function(err) {
                console.log("stream subscribe failed", err);
            })
        }
        console.log('stream-added remote-uid: ', id);
    });
    // Occurs when a user subscribes to a remote stream.
    rtc.client.on("stream-subscribed", function(evt) {
            var remoteStream = evt.stream;
            var id = remoteStream.getId();
            rtc.remoteStreams.push(remoteStream);
            addView(id);
            remoteStream.play("remote_video_" + id);
            Toast.info('stream-subscribed remote-uid: ' + id);
            console.log('stream-subscribed remote-uid: ', id);
        })
        // Occurs when the remote stream is removed; for example, a peer user calls Client.unpublish.
    rtc.client.on("stream-removed", function(evt) {
        var remoteStream = evt.stream;
        var id = remoteStream.getId();
        Toast.info("stream-removed uid: " + id)
        remoteStream.stop("remote_video_" + id);
        rtc.remoteStreams = rtc.remoteStreams.filter(function(stream) {
            return stream.getId() !== id
        })
        removeView(id);
        console.log('stream-removed remote-uid: ', id);
    })
    rtc.client.on("onTokenPrivilegeWillExpire", function() {
        // After requesting a new token
        // rtc.client.renewToken(token);
        Toast.info("onTokenPrivilegeWillExpire")
        console.log("onTokenPrivilegeWillExpire")
    });
    rtc.client.on("onTokenPrivilegeDidExpire", function() {
        // After requesting a new token
        // client.renewToken(token);
        Toast.info("onTokenPrivilegeDidExpire")
        console.log("onTokenPrivilegeDidExpire")
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
        Toast.error("Your already joined");
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
        console.log("init success");

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
            Toast.notice("join channel: " + option.channel + " success, uid: " + uid);
            console.log("join channel: " + option.channel + " success, uid: " + uid);
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
                console.log("init local stream success");
                // play stream with html element id "local_stream"
                rtc.localStream.play("local_stream")

                // publish local stream
                publish(rtc);
            }, function(err) {
                Toast.error("stream init failed, please open console see more detail")
                console.error("init local stream failed ", err);
            })
        }, function(err) {
            Toast.error("client join failed, please open console see more detail")
            console.error("client join failed", err)
        })
    }, (err) => {
        Toast.error("client init failed, please open console see more detail")
        console.error(err);
    });
}

function publish(rtc) {
    if (!rtc.client) {
        Toast.error("Please Join Room First");
        return;
    }
    if (rtc.published) {
        Toast.error("Your already published");
        return;
    }
    var oldState = rtc.published;

    // publish localStream
    rtc.client.publish(rtc.localStream, function(err) {
        rtc.published = oldState;
        console.log("publish failed");
        Toast.error("publish failed")
        console.error(err);
    })
    Toast.info("publish")
    rtc.published = true
}

function unpublish(rtc) {
    if (!rtc.client) {
        Toast.error("Please Join Room First");
        return;
    }
    if (!rtc.published) {
        Toast.error("Your didn't publish");
        return;
    }
    var oldState = rtc.published;
    rtc.client.unpublish(rtc.localStream, function(err) {
        rtc.published = oldState;
        console.log("unpublish failed");
        Toast.error("unpublish failed");
        console.error(err);
    })
    Toast.info("unpublish")
    rtc.published = false;
}

function leave(rtc) {
    if (!rtc.client) {
        Toast.error("Please Join First!");
        return;
    }
    if (!rtc.joined) {
        Toast.error("You are not in channel");
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
        console.log("client leaves channel success");
        rtc.published = false;
        rtc.joined = false;
        Toast.notice("leave success");
    }, function(err) {
        console.log("channel leave failed");
        Toast.error("leave success");
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
        console.log("join")
        e.preventDefault();
        var params = serializeformData();
        if (validator(params, fields)) {
            join(rtc, params);
        }
    })

    $("#publish").on("click", function(e) {
        console.log("publish")
        e.preventDefault();
        var params = serializeformData();
        if (validator(params, fields)) {
            publish(rtc);
        }
    });

    $("#unpublish").on("click", function(e) {
        console.log("unpublish")
        e.preventDefault();
        var params = serializeformData();
        if (validator(params, fields)) {
            unpublish(rtc);
        }
    });

    $("#leave").on("click", function(e) {
        console.log("leave")
        e.preventDefault();
        var params = serializeformData();
        if (validator(params, fields)) {
            leave(rtc);
        }
    })
})
</script>




@endsection