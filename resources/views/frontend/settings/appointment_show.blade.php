@extends('layouts.frontend.setting') @section('title','Profile') {{-- head start --}} @section('extra-css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/dashboard.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/register.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/login_register_common.css') }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<style type="text/css">
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
</style>
@endsection {{-- head end --}} {{-- content section start --}} @section('navbar')

<section class="px-5 pt-2 pb-2 nav-bg-img robotoRegular">@include('includes.frontend.navbar')</section>
@include('includes.frontend.navigations') @endsection @section('content')

<p class="border-bottom pl-3 f-21 cl-616161">Appointment</p>
@php $tz = Auth::user()->user_type=='specialist' ? $appointment->specialist->user->time_zone : $appointment->user->time_zone @endphp
<section class="p-100">
    <div class="row pt-3 pb-3  box_shadow1 ml-0 mr-0 borderRadius-10px justify-content-around">
        <div class="text-center">
            <p class="robotoRegular cl-515151 f-13 m-0">
                {{ date('F', strtotime(getTimeZoneDate('America/Chicago',$tz, $appointment->date.' '.$appointment->time))) }}
            </p>
            <p class="f-45 m-0 cl-515151 robotoRegular">
                {{ date('d', strtotime(getTimeZoneDate('America/Chicago',$tz, $appointment->date.' '.$appointment->time))) }}
            </p>
            <p class="f-12 robotoRegular m-0">
                {{ date('Y', strtotime(getTimeZoneDate('America/Chicago',$tz, $appointment->date.' '.$appointment->time))) }}
            </p>
            <p class="f-8 robotoRegular m-0">
                {{ getTimeZoneTime('America/Chicago',$tz,$appointment->date.' '.$appointment->time) }}
            </p>
        </div>
        <div class="height"></div>

        <!-- 2 -->
        <div class="col-md-5 col-lg-5 p-0 d-flex justify-content-center align-items-start flex-column">
            <p>{{ Auth::user()->user_type=='specialist' ? $appointment->user->username : $appointment->specialist->user->username}}</p>
            <div class="d-flex">
                <div class="f-18 d-flex align-items-center cl-000000 robotoRegular">
                    {{ $appointment->service->title }}
                </div>
                <div class="f-24 pl-2 cl-616161 robotoRegular">${{ $appointment->rate }}</div>
            </div>
            <div class="robotoRegular cl-616161">
                {{ ucfirst($appointment->service->timing)  }} Minutes
            </div>
            {{--
            <div class="f-14 cl-9c9c9c pt-1">6656 us 301, Riverview, 33578</div>
            --}}
        </div>
        <!-- end -->
        <!-- 3 -->
        <div class="text-center d-flex justify-content-center flex-column align-items-center">
            @if ($appointment->status != "Completed" ) 
                @if (Auth::user()->user_type=='specialist')
                @if ($appointment->status == "Approved" && $appointment->payment_status != "Paid")
                    <div class="pt-3">
                                <button class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-bbbbbb border-0 buttonBoxShadow pt-2 pb-2 robotoRegular pl-4 pr-4">Pending Client Payment</button>
                            
                            </div>
                            @else

                            <div class="pt-3">
                                <form action="{{ route('appointments.update',$appointment->id) }}" method="post">
                                    @csrf @method('put')

                                    <input type="hidden" name="status" value="{{ ($appointment->status == 'Cancelled')? '1': (($appointment->status == 'Pending')? '1':'3') }}" />
                                    <button type="submit" class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3AC574 border-0 buttonBoxShadow pt-2 pb-2 robotoRegular pl-4 pr-4">
                                        {{ ($appointment->status == 'Cancelled')? 'Accept': ($appointment->status == 'Pending')? 'Accept':'Completed' }}
                                    </button>
                                </form>
                            </div>
                @endif
                @endif 
                @if ($appointment->status != "Cancelled") 
                    @if (Auth::user()->user_type=='client' && $appointment->payment_status != "Paid" )
                        @if ($appointment->status == 'Pending')
                            <div class="pt-3">
                                <button class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-bbbbbb border-0 buttonBoxShadow pt-2 pb-2 robotoRegular pl-4 pr-4">Pending Specialist Approval</button>
                            
                            </div>
                        @else
                            <div class="pt-3">
                                <p class="f-12 robotoRegular m-0">Specialist Accepted <br> pay now to confirm Appointment</p>
                                <button
                                    class="btn payment_btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3AC574 border-0 buttonBoxShadow pt-2 pb-2 robotoRegular pl-4 pr-4"
                                    data-toggle="modal"
                                    data-target="#payment_modal"
                                    data-id="{{ $appointment->id }}"
                                    data-specialist="{{ $appointment->specialist_id }}"
                                    data-amount="{{ $appointment->rate - $appointment->payment_amount }}"
                                    data-payment_for="appointment" >
                                    Payment
                                </button>
                            </div>
                        @endif

                    @endif
                <div class="pt-3">
                    <form action="{{ route('appointments.update',$appointment->id) }}" method="post">
                        @csrf @method('put')
                        <input type="hidden" name="status" value="2" />
                        <button type="submit" class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-bbbbbb border-0 buttonBoxShadow pt-2 pb-2 robotoRegular pl-4 pr-4">Decline</button>
                    </form>
                </div>
                @endif 
            @endif
        </div>
        <!-- end -->
    </div>
</section>

<div class="modal fade" tabindex="-1" role="dialog" id="payment_modal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Enter Detail for Payment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="payment_request"></div>
            </div>
        </div>
    </div>
</div>

@endsection {{-- footer section start --}} @section('extra-script')
<script>
    
    function appointmetnUpdate(){
        $.ajax({
            url:"{{ route('appointment.notification.status.update',$appointment->id) }}",
            type:"get",
            success:function(data){
                console.log(data);
            }
        });
    }

    appointmetnUpdate();

    function addReview(e) {
        let id = $(e).data("id");
        var myform = document.getElementById("add-review-form-" + id);
        var fd = new FormData(myform);
        fd.append("_token", "{{ csrf_token() }}");
        $.ajax({
            url: "{{ route('add.client.review') }}",
            type: "post",
            processData: false,
            contentType: false,
            // data: $('#add-client-form').serialize(),
            data: fd,
            success: function (data) {
                if (data.success == true) {
                    swal("success", data.message, "success").then((value) => {
                        $(".close" + id).click();
                        $(".add-review-" + id).hide();
                    });
                } else {
                    if (data.hasOwnProperty("message")) {
                        var wrapper = document.createElement("div");
                        var err = "";
                        $.each(data.message, function (i, e) {
                            err += "<p>" + e + "</p>";
                        });

                        wrapper.innerHTML = err;
                        swal({
                            icon: "error",
                            text: "{{ __('Please fix following error!') }}",
                            content: wrapper,
                            type: "error",
                        });
                        //setTimeout("pageRedirect()", 3000);
                        //$('.actions  li:first-child a').click();
                    }
                }
            },
        });
    }

    function labelChange(elem) {
        let e = $(elem).data("id");
        console.log("#star" + e);
        // $('#star'+e).find(['id="'+$(elem).data('id')+'"']).not().attr('checked',false);
        $("#star" + e).attr("checked", true);
    }

    function ratingChange(elem) {
        $(elem).addClass("checked");
        $(elem).prevAll().addClass("checked");
        $(elem).nextAll().removeClass("checked");
        $(elem).nextAll().children("input").attr("checked", false);
        $("span.checked").each(function () {
            $(this).children("input").attr("checked", true);
        });
    }
    // ajax for payment
    $(".payment_btn").on("click", function () {
        var specialist_id = $(this).data("specialist");
        var amount = $(this).data("amount");
        var appointment = $(this).data("id");
        var payment_for = $(this).data("payment_for");
        console.log(specialist_id, appointment, amount, payment_for);
        $("#payment_request").empty();
        $.ajax({
            type: "get",
            url: "{{ url('stripe') }}",
            data: {
                _token: "{{ csrf_token() }}",
                specialist_id: specialist_id,
                amount: amount,
                appointment: appointment,
                payment_for: payment_for,
            },
            success: function (data) {
                $("#payment_request").html(data);
            },
        });
    });

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

    $(".work_status").on("click", function () {
        var bid = $(this);
        var bid_id = $(this).data("bid");
        var work_status = $(this).attr("data-work_status");
        $.ajax({
            type: "post",
            url: "{{ route('bid_work_status') }}",
            data: {
                _token: "{{ csrf_token() }}",
                bid_id: bid_id,
                work_status: work_status,
            },
            success: function (data) {
                if (data == "Completed") {
                    bid.removeClass("btn-success").addClass("btn-danger");
                    bid.text("Mark Un-Complete");
                    bid.attr("data-work_status", "0");
                }
                if (data == "Un-Complete") {
                    bid.attr("data-work_status", "1");
                    bid.removeClass("btn-danger").addClass("btn-success");
                    bid.text("Mark Completed");
                }
            },
        });
    });
</script>
@endsection {{-- footer section end --}}
