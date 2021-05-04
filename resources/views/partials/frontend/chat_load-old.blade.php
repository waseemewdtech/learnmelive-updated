
    <section class="px-5 bg-navbar nav-bg-img pb-5">
        @include('includes.frontend.navbar')

    </section>

    @include('includes.frontend.navigations')

	<div class="wrapper">

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
                                        <a data-url="{{ route('chat.user.switch',$u->id) }}" onclick="chatUserSwitch(this);" type="button" class="h-85 border  list-group-item-action   border-left-0 border-right-0 @if($user->id==$u->id) bg-3ac754 text-white @else bg-white @endif">
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
                            <div class="parentCircle-Child bg-grey user-staus-{{ $user->id }}" ></div>

                                           </div></div>
                                <div class="pl-2">
                                    <div>{{ ucwords($user->username) }}</div>
                                    <div class="d-flex">
                                        <div class="cl-a8a8a8 f-11 user-status"></div>
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
        			<div class="card-body messag-log" style="max-height: 417px !important;min-height: 417px !important;">
        			   
        
        				{{-- <div class="d-flex justify-content-center">
        					<div class="spinner-border text-success" role="status">
        						<span class="sr-only">Loading...</span>
        					</div>
        				</div> --}}
        
        				
        			</div>
        			
        			<div class="card-footer border-0 pl-3 pr-3" >
        				<div class="users text-uppercase pl-4" style="height: 23px;"></div>
        				<div id="imagePreview" style="margin-left: -19px !important;height:90px" class="d-flex"></div>
        				<form id="chat-form" method="post" class="mt-1 ">
        					<div class="input-group border-top d-flex align-items-center pb-2">
        						<textarea  name="content" class="form-control  pl-0" placeholder="Type your message ..." autocomplete="off"></textarea>
        						<div id="emojis" class="d-none" style="position: absolute; bottom: 102%; right: 26%;"></div>
        						<span class="pl-3" onclick="if($('#emojis').hasClass('d-none')){ $('#emojis').removeClass('d-none') }else{ $('#emojis').addClass('d-none') }">	<img src="{{asset('assets/frontend/images/chat/Group-150.png')}}" class="" alt="" srcset="" style="cursor:pointer;" ></span>
        						<input type="file"  name="img" style="display:none;" id="img" onchange="fileValidation();">
        			        	<img src="{{asset('assets/frontend/images/chat/Path-87.png')}}" class="" onclick="$('#img').click();" alt="" srcset="" style="cursor:pointer;" >
        						
        					
        						<div class="input-group-btn">
        							<button type="button" class="btn btn-primary send-msg bg-3ac754 border-0 ">Send&nbsp; <img src="{{asset('assets/frontend/images/chat/Path-88.png')}}" class="" alt="" srcset=""></button>
        						</div>
        					</div>
        				</form>
        			</div>
        		</div>
	        </div>
	    </div>
	</div>
	
	<!-- The Modal -->
    <div id="myModal" class="modal" style="z-index:10;">
      <span class="close">&times;</span>
      <img class="modal-content" id="img01" style="width: auto;height: 80%;margin: 0px auto;">
      <div id="caption"></div>
    </div>
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
    @include('includes.frontend.chat_script');
