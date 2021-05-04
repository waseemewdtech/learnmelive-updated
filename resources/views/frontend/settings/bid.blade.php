@extends('layouts.frontend.setting') @section('title','Bids') {{-- head start --}} @section('extra-css')
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
@endsection {{-- head end --}} {{-- content section start --}}
@section('navbar')

<section class="px-5 pt-2 pb-2 nav-bg-img robotoRegular">@include('includes.frontend.navbar')</section>
@include('includes.frontend.navigations')
@endsection
@section('content')


<p class="border-bottom pl-3 f-21 cl-616161">Bids</p>
<div class="table-responsive ServiceTableData px-3" id="ServiceTableData">
    <table id="example1" class="table table-hover example1">
        <thead>
            <tr class="text-uppercase">
                <th scope="col">#</th>
                <th scope="col">{{ (Auth::user()->user_type=='client')?'Bid By':'Bid For' }}</th>
                <th scope="col">Duration</th>
                <th scope="col">Budget</th>
                <th scope="col">Status</th>
                <th scope="col">Work Status</th>
                <th scope="col">Payment Status</th>
                <th scope="col">Payment Remaining</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bids as $key => $service_request_bids)
            @foreach ($service_request_bids as $bid)
            @if ($bid->status == 'Approved')

            <tr id="target_{{ $bid->id }}">
                <td>{{ $key +1 }}</td>
                <td>
                    {{ (Auth::user()->user_type=='client')?$bid->specialist->user->username : $bid->service_request->User->username }}
                </td>
                <td>{{ $bid->delivery }}</td>
                <td>${{ $bid->budget }}</td>
                <td>
                    @if ($bid->status == "Approved")

                    <span class="badge badge-sm badge-success">{{ $bid->status }}</span>
                    @else

                    <span class="badge badge-sm badge-danger">{{ $bid->status }}</span>
                    @endif
                </td>
                <td>
                    @if ($bid->status == 'Approved')
                    @if (Auth::user()->user_type == 'specialist')
                    <span
                        class="badge badge-sm {{ ($bid->work_status == 'Completed')? 'badge-success':'badge-danger' }}">{{ $bid->work_status }}</span>
                    @else

                    <button
                        class="btn {{ ($bid->work_status == 'Completed')? 'btn-danger':'btn-success' }}  btn-sm work_status"
                        data-bid="{{ $bid->id }}"
                        data-work_status="{{ ($bid->work_status == 'Completed')? '0':'1' }}">{{ ($bid->work_status == 'Completed')? 'Mark Un-Completed':'Mark Completed' }}</button>
                    @endif
                    @endif
                </td>
                <td>
                    @if ($bid->status == 'Approved')
                    @if ($bid->payment_status == "Pending")
                    <span class="badge badge-sm badge-warning">{{ $bid->payment_status }}</span>
                    @endif @if ($bid->payment_status == "Partial Paid")
                    <span class="badge badge-sm badge-info">{{ $bid->payment_status }}</span>
                    @endif @if ($bid->payment_status == "Paid")
                    <span class="badge badge-sm badge-success">{{ $bid->payment_status }}</span>
                    @endif
                    @endif

                </td>
                <td>
                    @if ($bid->status == 'Approved')
                    ${{ $bid->budget - $bid->payment_amount }}
                    @endif
                </td>
                <td style="min-width: 135px !important;">
                    @if (Auth::user()->user_type=='client' && $bid->payment_status != "Paid" && $bid->status ==
                    'Approved')
                    <button class="btn btn-success btn-sm payment_btn" onclick="payment_btn(this);" data-toggle="modal" data-target="#payment_modal"
                        data-id="{{ $bid->id }}" data-specialist="{{ $bid->specialist_id }}"
                        data-amount="{{ $bid->budget - $bid->payment_amount }}" data-payment_for="bid">payment</button>
                    @endif

                </td>
            </tr>
            @endif
            @endforeach
            @endforeach
        </tbody>
    </table>
</div>

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

@endsection {{-- content section end --}}
 @section('extra-script')

    <script>

        // ajax for payment
        // $('.payment_btn').on('click', function () {
        function payment_btn(e) {
            var specialist_id = $(e).data('specialist');
            var amount = $(e).data('amount');
            var appointment = $(e).data('id');
            var payment_for = $(e).data('payment_for');
            console.log(specialist_id,appointment,amount,payment_for)
            $('#payment_request').empty();
            $.ajax({
                type: 'get',
                url: "{{ url('stripe') }}",
                data: {
                    _token: '{{ csrf_token() }}',
                    specialist_id: specialist_id,
                    amount: amount,
                    appointment: appointment,
                    payment_for:payment_for,
                },
                success: function (data) {
                    $('#payment_request').html(data);
                }
            })
        }
    


    
    $('.work_status').on('click',function(){
        var bid = $(this);
        var bid_id = $(this).data('bid');
        var work_status = $(this).attr('data-work_status');
        $.ajax({
            type: 'post',
            url: "{{ route('bid_work_status') }}",
            data: {
                _token: '{{ csrf_token() }}',
                bid_id: bid_id,
                work_status:work_status,
               
            },
            success: function (data) {
                if(data == 'Completed'){
                    bid.removeClass('btn-success').addClass('btn-danger');
                    bid.text('Mark Un-Complete')
                    bid.attr('data-work_status','0')
                    swal({
                            icon: "success",
                            text: "{{ __('Work is marked as Completed') }}",
                            icon: 'success'
                        });
                }if(data == 'Un-Complete'){
                    bid.attr('data-work_status','1')
                    bid.removeClass('btn-danger').addClass('btn-success');
                    bid.text('Mark Completed')
                    swal({
                            icon: "success",
                            text: "{{ __('Work is marked as Un-Complete') }}",
                            icon: 'success'
                        });

                }
            }
        })
    })
</script>
@endsection {{-- footer section end --}}
