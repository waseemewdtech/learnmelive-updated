@extends('layouts.admin.admin') @section('title','Profile') {{-- head start --}} @section('extra-css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/dashboard.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/register.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/login_register_common.css') }}" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
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
@endsection {{-- head end --}} {{-- content section start --}}
@section('navbar')

<section class="main_padding pt-2 pb-2 nav-bg-img robotoRegular">@include('includes.frontend.admin_navbar')</section>
@include('includes.frontend.navigations')
@endsection
@section('content')


<p class="border-bottom pl-3 f-21 cl-616161">Payment requests of specialists</p>

<p class="pl-3 f-21 cl-000000">payment Requests</p>
@include('common.messages')
                <div class="table-responsive catTableData" id="catTableData">

                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr class="text-uppercase">
                                <th scope="col">#</th>
                                <th scope="col">Specialist</th>
                                <th scope="col">Client</th>
                                <th scope="col">Total Amount</th>
                                <th scope="col">Deduction Rate</th>
                                <th scope="col">Payable Amount</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($payment_requests as $payment_request)
                            @foreach ($payment_request as $specialist_request)
                                <tr>
                                    <td>{{$specialist_request->id}}</td>
                                    <td>{{$specialist_request->specialist->user->username}}</td>
                                    <td>{{$specialist_request->user->username}}</td>
                                    <td>{{$specialist_request->received_amount}}</td>
                                    <td>20%</td>
                                    <td>{{$specialist_request->received_amount - ($specialist_request->received_amount/100)*20}}</td>
                                    <td>
                                        <button
                                                        class="btn payment_btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3AC574 border-0 buttonBoxShadow pt-2 pb-2 robotoRegular pl-4 pr-4"
                                                        data-toggle="modal"
                                                        data-target="#payment_modal"
                                                        data-id="{{ $specialist_request->id }}"
                                                        data-specialist="{{ $specialist_request->specialist_id }}"
                                                        data-amount="{{ $specialist_request->received_amount -($specialist_request->received_amount/100)*20 }}"
                                                        data-payment_for="appointment" >
                                                        Payment
                                                    </button>
                                    </td>
                                </tr>
                            @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
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

@endsection

@section('extra-script')
    <script>
        $(".payment_btn").on("click", function () {
        var specialist_id = $(this).data("specialist");
        var amount = $(this).data("amount");
        var payment = $(this).data("id");
        $("#payment_request").empty();
        $.ajax({
            type: "get",
            url: "{{ url('dashboard/admin/stripe') }}",
            data: {
                _token: "{{ csrf_token() }}",
                specialist_id: specialist_id,
                amount: amount,
                payment: payment,
            },
            success: function (data) {
                $("#payment_request").html(data);
            },
        });
    });
    </script>
@endsection