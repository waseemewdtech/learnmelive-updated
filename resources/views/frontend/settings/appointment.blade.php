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

<p class="border-bottom pl-3 f-21 cl-616161">Appointments</p>

<div class="table-responsive ServiceTableData px-3" id="ServiceTableData">
    <table id="example2" class="table example1" style="width: 100%;">
        <thead class="d-none">
            <tr class="text-uppercase">
                <th scope="col">#</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($appointments as $key => $appointment) 
            @php $tz = Auth::user()->user_type=='specialist' ? $appointment->specialist->user->time_zone : $appointment->user->time_zone @endphp
            <tr class="border-0">
                <td class=" border-0">
                    {{-- <section class="p-100"> --}}
                    <section>
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
                                @if ($appointment->status != "Completed") 
                                    @if (Auth::user()->user_type=='specialist')
                                        @if ($appointment->status == "Approved" && $appointment->payment_status != "Paid")
                                            <div class="pt-3"><button class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-bbbbbb border-0 buttonBoxShadow pt-2 pb-2 robotoRegular pl-4 pr-4">Pending Client Payment</button></div>
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

                                @if ($appointment->status != "Cancelled" && $appointment->payment_status == "Paid")
                                    <div class="pt-3">
                                        @if(App\ClientSpecialistDispute::where('project_id',$appointment->id)->first() ==null)
                                            <a href="{{ route('dispute-araise',['project'=>encrypt($appointment->id),'id'=>Auth::user()->user_type=="client"? encrypt($appointment->specialist->user->id):encrypt($appointment->user->id)]) }}?project_type=appointments" class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-bbbbbb border-0 buttonBoxShadow pt-2 pb-2 robotoRegular pl-4 pr-4">Raise Dispute</a>
                                        @else
                                            <a href="{{ route('disputes.show',encrypt(App\ClientSpecialistDispute::where('project_id',$appointment->id)->first()->id)) }}" target="_blank" class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-bbbbbb border-0 buttonBoxShadow pt-2 pb-2 robotoRegular pl-4 pr-4">View Dispute</a>    
                                        @endif
                                    </div>
                                @endif
                            </div>
                            <!-- end -->
                        </div>
                    </section>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{-- <div class="table-responsive ServiceTableData px-3" id="ServiceTableData">
    <table id="example2" class="table table-hover example1" style="width: 100%;">
        <thead>
            <tr class="text-uppercase">
                <th scope="col">#</th>
                <th scope="col">{{ Auth::user()->user_type=='specialist' ? 'Client' :'Specialist' }}</th>
                <th scope="col">Service</th>
                <th scope="col">Date</th>
                <th scope="col">Timing</th>
                <th scope="col">Rate</th>
                <th scope="col">Status</th>
                <th scope="col">Payment Status</th>
                <th scope="col">Payment Remaining</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($appointments as $key => $appointment) @php $tz = Auth::user()->user_type=='specialist' ? $appointment->specialist->user->time_zone : $appointment->user->time_zone @endphp
            <tr id="target_{{ $appointment->id }}" class="border-bottom">
                <td class="border-0">{{ $key +1 }}</td>
                <td class="border-0">
                    {{ Auth::user()->user_type=='specialist' ? $appointment->user->username : $appointment->specialist->user->username}}
                </td>
                <td class="border-0">{{ $appointment->service->title }}</td>
                <td class="border-0">
                    {{ date('F d Y', strtotime(getTimeZoneDate('America/Chicago',$tz, $appointment->date.' '.$appointment->time))) }}
                </td>
                <td class="border-0">
                    {{ getTimeZoneTime('America/Chicago',$tz,$appointment->date.' '.$appointment->time) }}
                </td>
                <td class="border-0">${{ $appointment->rate }}</td>
                <td class="border-0">
                    @if ($appointment->status == "Pending")

                    <span class="badge badge-sm badge-warning">{{ $appointment->status }}</span>

                    @endif @if ($appointment->status == "Approved")

                    <span class="badge badge-sm badge-info">{{ $appointment->status }}</span>

                    @endif @if ($appointment->status == "Cancelled")

                    <span class="badge badge-sm badge-danger">{{ $appointment->status }}</span>

                    @endif @if ($appointment->status == "Completed")

                    <span class="badge badge-sm badge-success">{{ $appointment->status }}</span>

                    @endif
                </td>
                <td class="border-0">
                    @if ($appointment->payment_status == "Pending")

                    <span class="badge badge-sm badge-warning">{{ $appointment->payment_status }}</span>

                    @endif @if ($appointment->payment_status == "Partial Paid")

                    <span class="badge badge-sm badge-info">{{ $appointment->payment_status }}</span>

                    @endif @if ($appointment->payment_status == "Paid")

                    <span class="badge badge-sm badge-success">{{ $appointment->payment_status }}</span>

                    @endif
                </td>
                <td class="border-0">
                    ${{ $appointment->rate - $appointment->payment_amount }}
                </td>

                <td style="min-width: 135px !important; text-align: left !important;" class="d-flex border-0">
                    @if ($appointment->status != "Completed" ) @if (Auth::user()->user_type=='specialist')
                    <form action="{{ route('appointments.update',$appointment->id) }}" method="post">
                        @csrf @method('put')

                        <input type="hidden" name="status" value="{{ ($appointment->status == 'Cancelled')? '1': (($appointment->status == 'Pending')? '1':'3') }}" />
                        <button type="submit" class="btn btn-sm btn-success ml-1">{{ ($appointment->status == 'Cancelled')? 'Approve': ($appointment->status == 'Pending')? 'Approve':'Completed' }}</button>
                    </form>
                    @endif @if ($appointment->status != "Cancelled") @if (Auth::user()->user_type=='client' && $appointment->payment_status != "Paid")
                    <button
                        class="btn btn-success btn-sm payment_btn ml-1"
                        data-toggle="modal"
                        data-target="#payment_modal"
                        data-id="{{ $appointment->id }}"
                        data-specialist="{{ $appointment->specialist_id }}"
                        data-amount="{{ $appointment->rate - $appointment->payment_amount }}"
                        data-payment_for="appointment"
                    >
                        Payment
                    </button>

                    <div class="modal fade" tabindex="-1" role="dialog" id="review_modal{{$appointment->id}}">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title ml-4">Add Review</h5>
                                    <button type="button" class="close mr-2 close{{$appointment->id}}" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="add-review-form-{{$appointment->id}}">
                                        <input type="hidden" name="appointment_id" value="{{ $appointment->id }}" />
                                        <input type="hidden" name="specialist_id" value="{{ $appointment->specialist->id }}" />
                                        <div class="ml-4 input-group mb-1 pt-2">
                                            <div class="w-100"><label>Rating</label></div>
                                            <div class="w-100">
                                                <fieldset class="rating">
                                                    <input type="radio" id="mystar{{ $appointment->id }}5" name="rating" value="5" />
                                                    <label onclick="labelChange(this);" data-id="5" class="full" for="mystar{{ $appointment->id }}5" title="Awesome - 5 stars"></label>
                                                    <input type="radio" id="mystar{{ $appointment->id }}4" name="rating" value="4" />
                                                    <label onclick="labelChange(this);" data-id="4" class="full" for="mystar{{ $appointment->id }}4" title="Pretty good - 4 stars"></label>
                                                    <input type="radio" id="mystar{{ $appointment->id }}3" name="rating" value="3" />
                                                    <label onclick="labelChange(this);" data-id="3" class="full" for="mystar{{ $appointment->id }}3" title="Meh - 3 stars"></label>
                                                    <input type="radio" id="mystar{{ $appointment->id }}2" name="rating" value="2" />
                                                    <label onclick="labelChange(this);" data-id="2" class="full" for="mystar{{ $appointment->id }}2" title="Kinda bad - 2 stars"></label>
                                                    <input type="radio" id="mystar{{ $appointment->id }}1" name="rating" value="1" />
                                                    <label onclick="labelChange(this);" data-id="1" class="full" for="mystar{{ $appointment->id }}1" title="Sucks big time - 1 star"></label>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group mb-3 pt-3 ml-4 col-md-11">
                                                <label class="mb-2">Review Detail</label>
                                                <textarea type="text" class="w-100 form-control border" placeholder="Enter Message Body" name="description"></textarea>
                                            </div>
                                        </div>

                                        <button type="button" class="btn btn-sm btn-success ml-4" onclick="addReview(this);" data-id="{{$appointment->id}}">Add</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if($appointment->rating == null)

                    <button type="button" class="btn btn-sm btn-success add-review-{{$appointment->id}} ml-1" data-toggle="modal" data-target="#review_modal{{$appointment->id}}">Add Review</button>

                    @endif @endif
                    <form action="{{ route('appointments.update',$appointment->id) }}" method="post">
                        @csrf @method('put')
                        <input type="hidden" name="status" value="2" />
                        <button type="submit" class="btn btn-sm btn-danger ml-1">Cancel</button>
                    </form>
                    @endif @endif
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div> --}}
{{-- Modal for payment --}}
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
