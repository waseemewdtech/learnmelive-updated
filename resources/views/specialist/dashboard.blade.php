@extends('layouts.frontend.app') @section('title','Specialist | Dashboard') {{-- head start --}} @section('extra-css')

<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/dashboard.css') }}" />

<style type="text/css">
    .dropdown-toggle::after {
        display: none;
    }

    .f-145 {
        font-size: 145px;
    }

    [slider] {
        width: 100%;
        position: relative;
        height: 5px;
    }

    [slider]>div {
        position: absolute;
        left: 13px;
        right: 15px;
        height: 5px;
    }

    [slider]>div>[inverse-left] {
        position: absolute;
        left: 0;
        height: 5px;
        border-radius: 10px;
        background-color: #CCC;
        margin: 0 7px;
    }

    [slider]>div>[inverse-right] {
        position: absolute;
        right: 0;
        height: 5px;
        border-radius: 10px;
        background-color: #CCC;
        margin: 0 7px;
    }


    [slider]>div>[range] {
        position: absolute;
        left: 0;
        height: 5px;
        border-radius: 14px;
        background-color: #3AC574;
    }

    [slider]>div>[thumb] {
        position: absolute;
        top: -5px;
        z-index: 2;
        height: 15px;
        width: 15px;
        text-align: left;
        margin-left: -7px;
        cursor: pointer;
        /* box-shadow: 0 3px 8px rgba(0, 0, 0, 0.4); */
        background-color: #3AC574;
        border-radius: 50%;
        outline: none;
    }

    [slider]>input[type=range] {
        position: absolute;
        pointer-events: none;
        -webkit-appearance: none;
        z-index: 3;
        height: 14px;
        top: -2px;
        width: 100%;
        opacity: 0;
    }

    div[slider]>input[type=range]:focus::-webkit-slider-runnable-track {
        background: transparent;
        border: transparent;
    }

    div[slider]>input[type=range]:focus {
        outline: none;
    }

    div[slider]>input[type=range]::-webkit-slider-thumb {
        pointer-events: all;
        width: 28px;
        height: 28px;
        border-radius: 0px;
        border: 0 none;
        background: red;
        -webkit-appearance: none;
    }

    div[slider]>input[type=range]::-ms-fill-lower {
        background: transparent;
        border: 0 none;
    }

    div[slider]>input[type=range]::-ms-fill-upper {
        background: transparent;
        border: 0 none;
    }

    div[slider]>input[type=range]::-ms-tooltip {
        display: none;
    }

    .lable {

    border: 1px solid #ced4da;
    border-radius: 5px;
    }
    .snehainput {

        width: 93%;
    padding: 6px 5px;
    outline: none;
    }
    span.prefix{
        position: relative;
        left: 8px;
    }
    .main-padding-dashboard{
        padding-left: 143px;
    padding-right: 143px;
    }

.bid_submit{
    background-color: #3AC574 !important;
    color: #ffffff !important;

}
.bid_close{
    color: #3AC574 !important;
    background-color: #ffffff !important;
    border: 1px solid #3AC574;

}
a:focus{
    outline: none !important;
}
    .fs-1-3{ font-size:1.3rem !important; }
    .nav-pills .nav-link.active {
    background-color: #3ac574 !important;
}
</style>
@endsection {{-- head end --}} {{-- content section start --}} @section('content')

<section class="px-5 pt-2 pb-2 nav-bg-img robotoRegular">
    @include('includes.frontend.navbar')
</section>

<div class="container-fluid main-padding-dashboard">
    <div class="row mt-5 justify-content-around">
        <div class="col-md-6 borderRadius-10px pl-0 pr-0 box_shadow1 border-top-green-10">
            <div class="px-5 py-3">
                <div class="cl-3ac754 f-34">Upcoming Appointments <span class="text-muted cl-6A6A6A">({{ count($appointments->take(3)) }})</span></div>
                <div class="card-body px-0">
                    <div class="row m-0 p-0">
                        <div class="col-md-2 pl-0 py-0">
                            <h1 class="h1 f-145">{{ count($appointments->take(3)) }}</h1>
                        </div>
                        <div class="col-md-10 p-0 cl-6A6A6A">
                            @foreach ($appointments->take(3) as $appointment)

                            <div class="mt-3 row align-items-center bg-F2F5FA box_shadow2">
                                <div class="col-md-7">
                                    <p>{{ $appointment->user->username }}</p>
                                    <h3 class="fs-1-3">{{ ucwords($appointment->service->title) }}</h3>
                                </div>
                                <div class="col-md-5 p-0">
                                    <p>Date & Time</p>
                                    <p>{{ date('M d Y',strtotime(getTimeZoneDate('America/Chicago',$appointment->specialist->user->time_zone,$appointment->date))) }} {{ getTimeZoneTime('America/Chicago',$appointment->specialist->user->time_zone,$appointment->time) }}</p>
                                </div>
                                <div class="col-md-5 p-0">
                                    <span class="font-weight-bold ml-3">Rate</span>
                                    <span class="ml-2">${{ $appointment->rate }}</span>
                                </div>
                                <div class="col-md-7 text-right"><button class="btn btn-success mb-2 mt-2 btn-sm">Message</button><img src="{{ asset('assets/frontend/images/video-call-icon.png') }}" onclick="makeCall(this)" class=" img-fluid h-40 video-chat" id="video-chat" data-toggle="modal" data-target="#video-call-modal" data-caller="{{$appointment->user->username}}"></div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    {{-- <button class="btn btn-md bg-3ac574 cl-ffffff">Update</button> --}}
                    <a href="{{ url('appointments') }}" class="cl-3ac754">View All Appointments >></a>
                </div>
            </div>
        </div>
        <div class="col-md-5 py-5 borderRadius-10px p-0 box_shadow1 border-top-green-10">
            @if (Auth::user()->total_balance !=null && Auth::user()->total_balance !=0 && Auth::user()->withdraw_status !='request_made')
            <h5 class="text-right pr-3">
                <button class="btn btn-sm btn-outline-successs withdraw_request">Withdrwal</button>
            </h5>
            @elseif(Auth::user()->total_balance !=null && Auth::user()->total_balance !=0 )
            <p>Your Withdrwal request is waiting for admin approval!</p>
            @endif
            <div class="row px-5 align-items-center">
                <div class="col-md-8">
                    <p class="cl-3ac754 f-34 mb-0">Available Balance $</p>
                </div>
                <div class="col-md-4">
                    <p class="cl-6A6A6A f-18 mb-0">Available Funds</p>
                </div>
            </div>
            <div class="row px-5 align-items-center">
                <div class="col-md-12">
                    <p class="cl-6A6A6A mb-0">Main Account</p>
                </div>
            </div>
            <div class="row px-5 align-items-center">
                <div class="col-md-7">
                    <h3 class="">Benjamin Carlos</h3>
                </div>
                <div class="col-md-1">
                    <img src="{{ asset('assets/frontend/images/arrow-up.png') }}" alt="" />
                </div>
                <div class="col-md-4">
                    <h3 class="mb-0 f-45">${{Auth::user()->total_balance}}</h3>
                </div>
                <div class="col-md-12 text-right">
                    <p class="cl-6A6A6A f-18 mb-0">{{Auth::user()->updated_at->diffForHumans()}}</p>
                </div>
            </div>
            <br />
            <br />
            <hr />
            <div class="row px-5 align-items-center">
                <div class="col-md-7">
                    <h3 class="cl-3ac754">Total Balance $</h3>
                </div>
                <div class="col-md-1">
                    <img src="{{ asset('assets/frontend/images/arrow-up.png') }}" alt="" />
                </div>
                <div class="col-md-4">
                    <h3 class="mb-0 f-45">${{Auth::user()->total_balance}}</h3>
                </div>
                <div class="col-md-12 text-right">
                    <p class="cl-6A6A6A f-18 mb-0">{{Auth::user()->updated_at->diffForHumans()}}</p>
                </div>
            </div>
        </div>
    </div>
    @if(Auth::user()->status=='active')
        <div class="row mt-3 pl-5 ">
            <div class="col-md-12 p-0">
                <div class="row">
                    <div class="col-md-10 p-0">
                        <div class="d-flex justify-content-between align-items-baseline">

                            <p class="f-34 mb-0">Available Jobs</p>
                            <div class="d-flex m-0">
                                <div class="pt-4 w-100">
                                    <input type="text" placeholder="Search for services"
                                        class="service_inpt robotoRegular h-44 cl-6b6b6b bg-transparent footer_input pt-2 pb-2 pl-3 w-100 rounded">
                                </div>
                                <div class="pt-4 pl-2">
                                    <button
                                        class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574  pt-2 pb-2 pl-2 pr-2 service_inpt_btn"
                                        type="button" onclick="inputSearchServices();"><img
                                            src="{{ asset('assets/frontend/images/Group 188.png ') }}" alt=""></button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-2 px-0 d-flex align-items-end justify-content-end f-18">

                        <p class="mb-0">Sort by :</p>
                        <select name="" id="" class="border-0 cl-3ac754">
                            <option value="">Latest</option>
                        </select>

                    </div>
                </div>
            </div>
        </div>

        <div class="row px-3 ml-1 mt-2 mb-5">
            <div class="nav flex-row nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                <a class="nav-link active cl-000000" id="v-pills-portfolio-tab"
                    data-toggle="pill" href="#v-pills-new" role="tab" aria-controls="v-pills-portfolio"
                    aria-selected="false">New</a>
                <a class="nav-link cl-000000" id="v-pills-alraady" data-toggle="pill" href="#v-pills-already-bid" role="tab"
                    aria-controls="v-pills-bid" aria-selected="false">Submitted Proposals</a>
            </div>
        </div>

        <div class="row px-3 ml-1 mt-2 mb-5">

            <div class="tab-content col-md-12">

                <div class="col-md-12 mt-3 borderRadius-10px box_shadow1 pb-5 tab-pane fade show active" id="v-pills-new">
                    <div class="d-flex mt-3 justify-content-between px-5 pt-1">
                        <div class="cl-3ac754 robotoMedium f-24">Job Description</div>
                        <div class="f-24 cl-3ac754 robotoMedium">Amount</div>
                    </div>
                    <div class="mt-3 border w-100"></div>
                    @foreach ($service_requests as $service)
                        @php
                            $check_bid = App\Models\Bid::where('service_request_id',$service->id)->where('specialist_id',Auth::user()->specialist->id)->first();
                        @endphp

                        @if ($check_bid ==null)
                            <a href="javascript:void(0);" class=" service_request" title="Click To bid this request" data-toggle="modal" data-target="#exampleModal" data-serviceRequestID="{{ $service->id }}"  tabindex="0" data-toggle="tooltip" title="Click To bid this request">
                                <div class="d-flex mt-4 justify-content-between pr-5" >
                                    <div class="col-md-9 pl-5 pr-0">
                                        <div class="cl-000000 robotoMedium f-24">{{ ucwords($service->title) }}</div>
                                        <div class="d-flex">
                                            <div class="cl-3ac754 f-14 robotoRegular d-flex align-items-center ">Posted by:</div>
                                            <div class="pl-1 cl-6b6b6b f-14 robotoRegular d-flex align-items-center">{{ $service->User->username }} </div>
                                        </div>
                                        <div class="w-100 text-justify f-18 robotoRegular cl-6b6b6b pr-5" >
                                            {{ ucfirst($service->description) }}
                                        </div>
                                        <div class="d-flex pt-2">
                                            <div>
                                                <div class="d-flex">
                                                    <div><img src="{{ asset('assets/frontend/images/Group 305.png') }}" alt="" /></div>
                                                    <div class="cl-3ac754 f-14 robotoRegular d-flex align-items-center pl-2">Posted</div>
                                                    <div class="pl-1 cl-6b6b6b f-14 robotoRegular d-flex align-items-center">{{ $service->created_at->diffForHumans(null, true).' ago' }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div></div>
                                        </div>
                                        <div class="d-flex pt-2">
                                            <div>
                                                <div class="d-flex">

                                                    <div>@if($service->tags !=null)<img src="{{ asset('assets/frontend/images/Subtraction 2.png') }}" alt="" />@endif</div>
                                                    <div class="pl-1 cl-6b6b6b f-14 robotoRegular d-flex align-items-center">
                                                        @php  if($service->tags !=null){
                                                            $tags= explode('uploads/files/',$service->tags);
                                                            }  @endphp
                                                        <a class="cl-3ac754" href="public/{{ $service->tags }}" download="downlaod">{{ isset($tags)?$tags['1']:'' }}</a>
                                                        </div>
                                                </div>
                                            </div>
                                            <div></div>
                                        </div>

                                    </div>
                                    <div class="robotoMedium text-right col-md-2 pr-0">
                                        <div class="f-24 cl-000000 white-spaces robotoMedium">${{ number_format(intval($service->budget))}}</div>
                                        <div class="f-21 cl-6b6b6b">USD</div>
                                    </div>
                                    <div class="col-md-1">
                                        <button class="btn btn-sm btn-success service_request" data-toggle="modal" data-target="#exampleModal" data-serviceRequestID="{{ $service->id }}">Submit Proposal</button>
                                    </div>
                                </div>

                            </a>
                            <div class="mt-3 border w-100"></div>
                        @endif


                    @endforeach

                </div>

                <div class="col-md-12 mt-3 borderRadius-10px box_shadow1 pb-5 tab-pane fade " id="v-pills-already-bid">
                    <div class="d-flex mt-3 justify-content-between px-5 pt-1">
                        <div class="cl-3ac754 robotoMedium f-24">Job Description</div>
                        <div class="f-24 cl-3ac754 robotoMedium">Amount</div>
                    </div>
                    <div class="mt-3 border w-100"></div>
                    @foreach ($service_requests as $service)
                        @php
                            $check_bid = App\Models\Bid::where('service_request_id',$service->id)->where('specialist_id',Auth::user()->specialist->id)->first();
                        @endphp
                        @if ($check_bid !=null)
                            <a href="javascript:void(0);" class=" " title="Click To bid this request"   tabindex="0" data-toggle="tooltip" title="Click To bid this request">

                                <div class="d-flex mt-4 justify-content-between pr-5" >
                                    <div class="col-md-9 pl-5 pr-0">
                                        <div class="cl-000000 robotoMedium f-24">{{ ucwords($service->title) }}</div>
                                        <div class="d-flex">
                                            <div class="cl-3ac754 f-14 robotoRegular d-flex align-items-center ">Posted by:</div>
                                            <div class="pl-1 cl-6b6b6b f-14 robotoRegular d-flex align-items-center">{{ $service->User->username }} </div>
                                        </div>
                                        <div class="w-100 text-justify f-18 robotoRegular cl-6b6b6b pr-5" >
                                            {{ ucfirst($service->description) }}
                                        </div>
                                        <div class="d-flex pt-2">
                                            <div>
                                                <div class="d-flex">
                                                    <div><img src="{{ asset('assets/frontend/images/Group 305.png') }}" alt="" /></div>
                                                    <div class="cl-3ac754 f-14 robotoRegular d-flex align-items-center pl-2">Posted</div>
                                                    <div class="pl-1 cl-6b6b6b f-14 robotoRegular d-flex align-items-center">{{ $service->created_at->diffForHumans(null, true).' ago' }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div></div>
                                        </div>
                                        <div class="d-flex pt-2">
                                            <div>
                                                <div class="d-flex">

                                                    <div>@if($service->tags !=null)<img src="{{ asset('assets/frontend/images/Subtraction 2.png') }}" alt="" />@endif</div>
                                                    <div class="pl-1 cl-6b6b6b f-14 robotoRegular d-flex align-items-center">
                                                        @php  if($service->tags !=null){
                                                            $tags= explode('uploads/files/',$service->tags);
                                                            }  @endphp
                                                        <a class="cl-3ac754" href="public/{{ $service->tags }}" download="downlaod">{{ isset($tags)?$tags['1']:'' }}</a>
                                                        </div>
                                                </div>
                                            </div>
                                            <div></div>
                                        </div>

                                    </div>
                                    <div class="robotoMedium text-right col-md-2 pr-0">
                                        <div class="f-24 cl-000000 white-spaces robotoMedium">${{ number_format(intval($service->budget))}}</div>
                                        <div class="f-21 cl-6b6b6b">USD</div>
                                    </div>
                                    <div class="col-md-1">
                                        <button class="btn btn-sm btn-info disabled " > Offer Sent</button>
                                    </div>
                                </div>
                            </a>
                            <div class="mt-3 border w-100"></div>
                        @endif


                    @endforeach

                </div>

            </div>



        </div>
    @else
        <div class="alert alert-warning alert-dismissible fade show mt-4" role="alert">
            Your Profile is under view and administrator will approved your profile as soon as possible
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>

    @endif
</div>



<!-- Button trigger modal -->



<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content pl-5 pr-5 pt-3 ">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Submit Proposal </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('bids.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="specialist_id" value="{{ Auth::user()->specialist->id }}">
      <div class="modal-body">
        <div class="row">
            <div class="col-md-6 service_request_detail d-flex"></div>
            <div class="col-md-6">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="d-flex align-items-center justify-content-between">
                               Duration :
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="time" id="inlineRadio1" value="Days" onclick="enterDuration(this);">
                                    <label class="form-check-label" for="inlineRadio1">Days</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="time" id="inlineRadio2" value="Hours" onclick="enterDuration(this);">
                                    <label class="form-check-label" for="inlineRadio2">Hours</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="time" id="inlineRadio3" value="Minutes" onclick="enterDuration(this);">
                                    <label class="form-check-label" for="inlineRadio3">Minutes</label>
                                </div>
                            </label>

                            <input type="number" name="delivery" id="delivery" class="form-control d-none">
                            <label class="lbl_duration" style="display: none;"></label>
                        </div>
                        <div class="form-group col-md-12">
                            <label >
                                Budget (USD)
                            </label>
                            <div class="lable">
                                <span class="prefix">$</span>
                                <input class="snehainput border-0" type="number" name="budget" min="5" id="budget" class="form-control" placeholder="5 (USD)" onchange="minBudget(this);"/>
                            </div>
                            <label class="lbl_budget" style="display: none;"></label>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Proposal</label>
                            <textarea name="perposal" id="perposal" class="form-control"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Attachment (optional)</label>
                            <input type="file" name="attachment" id="atatchment" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary bid_close" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary bid_submit">Submit</button>
        </div>
    </form>
    </div>
  </div>
</div>

<!-- T E N    S E C T I O N  E N D  -->
@endsection {{-- content section end --}} {{-- footer section start --}}
 @section('extra-script')

<script>
$('.withdraw_request').on('click',function(){
  $.ajax({
            type: "post",
            url: "{{ url('withdraw_request') }}",
            data: {
                _token: "{{ csrf_token() }}",

            },
            success: function (data) {
                $('.withdraw_request').remove();
                swal({
                            icon: "success",
                            text: data,
                            icon: 'success'
                        });
            },
        });
});
   function minBudget(e){
       if(e.value <5){
           e.value =5;
       }
   }
    function getMaxRange(e){
        document.getElementById('max').innerHTML = "$"+e.value;
    }
    function getMinRange(e){
        document.getElementById('min').innerHTML = "$"+e.value;
    }

    function enterDuration(e){
        var duration =  $('#delivery').removeClass('d-none');
        $(".lbl_duration").css("display", "none");
        if(e.value == 'Days'){
            duration[0].placeholder = "3 Days";
        }
        if(e.value == 'Hours'){

            duration[0].placeholder = "2 Hours ";
        }
        if(e.value == 'Minutes'){

            duration[0].placeholder = "20 Minutes";
        }
    }
    $('.service_request').on('click',function(){
        var Service_request_id = $(this).attr('data-serviceRequestID');
        $.ajax({
            type: 'get',
            url : '{{ url("get_service_request") }}'+"/"+Service_request_id,
            success:function(data)
              {
                  $('.service_request_detail').empty();
                  $('.service_request_detail').html(data);

              }
        })
    })

    $('.bid_submit').on('click',function(){
        if($("input[name='time']:checked").val() == null){
            $(".lbl_duration").html("Please select duration type!").css({ display: "block", color: "red" });
            return false;
        }else{

            $(".lbl_duration").css("display", "none");
        }
        if($("#delivery").val() == ''){
            $(".lbl_duration").html("Please Enter duration time!").css({ display: "block", color: "red" });
            return false;
        }else{
            $(".lbl_duration").css("display", "none");
        }
        if($("#budget").val() == ''){
            $(".lbl_budget").html("Please Enter your offer!").css({ display: "block", color: "red" });
            return false;
        }else{
            $(".lbl_budget").css("display", "none");
        }

    })

</script>



 @endsection
