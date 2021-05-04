@extends('layouts.frontend.app') @section('title','Profile') {{-- head start --}} @section('extra-css')
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

    /* Start Gallery CSS */
    .thumb {
        margin-bottom: 15px;
    }

    .thumb:last-child {
        margin-bottom: 0;
    }

    /* CSS Image Hover Effects: https://www.nxworld.net/tips/css-image-hover-effects.html */
    /* .thumb figure img {
        -webkit-filter: grayscale(100%);
        filter: grayscale(100%);
        -webkit-transition: 0.3s ease-in-out;
        transition: 0.3s ease-in-out;
    } */
    .thumb figure:hover img {
        -webkit-filter: grayscale(0);
        filter: grayscale(0);
    }

    .ui-sortable-placeholder {
        border: 1px dashed black !important;
        visibility: visible !important;
        background: #eeeeee78 !important;
    }

    .ui-sortable-placeholder * {
        visibility: hidden;
    }

    .RearangeBox.dragElemThumbnail {
        opacity: 0.6;
    }

    .RearangeBox {
        width: 180px;
        height: 240px;
        padding: 10px 5px;
        cursor: all-scroll;
        float: left;
        display: inline-block;
        margin: 5px !important;
        text-align: center;
    }

    .IMGthumbnail {
        max-width: 168px;
        height: 80%;
        margin: auto;
        background-color: #ececec;
        padding: 2px;
        border: none;
    }

    .IMGthumbnail img {
        width: 100%;
        height: 100%;
    }

    .imgThumbContainer {
        margin: 4px;
        border: solid;
        display: inline-block;
        justify-content: center;
        position: relative;
        border: 1px solid rgba(0, 0, 0, 0.14);
        -webkit-box-shadow: 0 0 4px 0 rgba(0, 0, 0, 0.2);
        box-shadow: 0 0 4px 0 rgba(0, 0, 0, 0.2);
    }

    .imgThumbContainer>.imgName {
        text-align: center;
        padding: 2px 6px;
        margin-top: 4px;
        font-size: 13px;
        height: 20%;
        overflow: hidden;
    }

    .imgThumbContainer>.imgRemoveBtn {
        position: absolute;
        right: 2px;
        top: 2px;
        cursor: pointer;
        display: none;
    }

    .RearangeBox:hover>.imgRemoveBtn {
        display: block;
    }

    .img-thumbnail {
        height: 225px !important;
    }

    .px-50 {
        padding-left: 50px !important;
        padding-right: 50px !important;
    }

    .select2-container--default .select2-selection--single {
        border: none !important;
    }

    .select2-container--open .select2-dropdown--below{ border-top: 1px solid #aaaaaa !important; }
    .select2-container--open .select2-dropdown--above{ border-bottom: 1px solid #aaaaaa !important; }

    fieldset,
    label {
        margin: 0;
        padding: 0;
    }

    h1 {
        font-size: 1.5em;
        margin: 10px;
    }

    /****** Style Star Rating Widget *****/

    .rating {
        border: none;
        float: left;
    }

    .rating>input {
        display: none;
    }

    .rating>label:before {
        margin: 5px;
        font-size: 1.25em;
        font-family: FontAwesome;
        display: inline-block;
        content: "\f005";
    }

    .rating>.half:before {
        content: "\f089";
        position: absolute;
    }

    .rating>label {
        color: #ddd;
        float: right;
    }

    /***** CSS Magic to Highlight Stars on Hover *****/

    .rating>input:checked~label,
    /* show gold star when clicked */
    .rating:not(:checked)>label:hover,
    /* hover current star */
    .rating:not(:checked)>label:hover~label {
        color: #3ac574;
    }

    /* hover previous stars in list */

    .rating>input:checked+label:hover,
    /* hover current star when changing rating */
    .rating>input:checked~label:hover,
    .rating>label:hover~input:checked~label,
    /* lighten current selection */
    .rating>input:checked~label:hover~label {
        color: #3ac574;
    }

</style>
@endsection {{-- head end --}} {{-- content section start --}} @section('content')
<section class="main_padding pt-2 pb-2 nav-bg-img robotoRegular">@include('includes.frontend.navbar')</section>
@include('includes.frontend.navigations')

<section class="main_padding pt-70 px-50">
    <div class="row m-0 justify-content-center">
        <div class="col-md-3 col-lg-3 col-sm-12 p-0 box_shadow1 borderRadius-12px pt-4 pb-5">
            <p class="border-bottom text-center f-21 cl-616161">Your Profile</p>
            <div class="d-flex align-items-center flex-column">
                <div class="dashboard_id text-center">
                    <img id="blah" class="rounded-circle blah"
                        src="{{(Auth::user()->avatar != null)? asset(Auth::user()->avatar): asset('assets/frontend/images/GettyImages-1136599956-hair-stylist-1200x630-min.png') }}"
                        alt="" style="height: 118px; width: 118px;" />
                    <form action="{{ url('/profile/change_avatar') }}" method="post" enctype="multipart/form-data"
                        id="avatar_form">
                        @csrf
                        <div class="form-group m-0">
                            <label class="btn img-lbl p-1 mb-0 position-relative" style="top: -34px; left: 43px;">
                                <img src="{{ asset('assets/frontend/images/camera.png') }}" alt="" srcset=""
                                    height="30" />
                                <input type="file" style="display: none;" name="avatar" class="avatar"
                                    onchange="readURL(this);" required accept="image/png, image/jpg, image/jpeg" />
                            </label>
                        </div>
                        {{-- <button class="btn btn-sm bg-3AC574 text-white">Upload Photo</button> --}}
                    </form>
                </div>
                <p class="m-0 f-27 robotoMedium cl-5757575 pt-3">{{ ucwords(Auth::user()->username) }}</p>
                @if (Auth::user()->user_type == 'specialist')

                <p class="f-18 cl-a8a8a8a robotoMedium m-0 pt-1">{{ ucwords(Auth::user()->specialist->category->name) }}
                </p>
                @endif
            </div>

            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link {{ session('portfolio')? '':'active' }} cl-000000" id="v-pills-profile-tab"
                    data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                    aria-selected="true">Profile</a>
                @if (Auth::user()->user_type == 'specialist')
                <a class="nav-link {{ session('portfolio')? 'active':'' }} cl-000000" id="v-pills-portfolio-tab"
                    data-toggle="pill" href="#v-pills-portfolio" role="tab" aria-controls="v-pills-portfolio"
                    aria-selected="false">Portfolio</a>
                <a class="nav-link cl-000000" id="v-pills-service-tab" data-toggle="pill" href="#v-pills-service"
                    role="tab" aria-controls="v-pills-service" aria-selected="false">Services</a>
                    @endif
                <a class="nav-link cl-000000" id="v-pills-bid-tab" data-toggle="pill" href="#v-pills-bid" role="tab"
                    aria-controls="v-pills-bid" aria-selected="false">Bids</a>
                <a class="nav-link cl-000000" id="v-pills-appointment-tab" data-toggle="pill"
                    href="#v-pills-appointment" role="tab" aria-controls="v-pills-appointment"
                    aria-selected="false">Appointments</a>
                <a class="nav-link cl-000000" id="v-pills-password-tab" data-toggle="pill" href="#v-pills-password"
                    role="tab" aria-controls="v-pills-password" aria-selected="false">Password</a>
            </div>
        </div>

        <div class="col-md-8 col-lg-8 col-sm-12 pt-4 p-0 ml-4 box_shadow1 borderRadius-12px">
            <p class="border-bottom pl-3 f-21 cl-616161">Edit Your Personal Settings</p>
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade {{ session('portfolio')? '':'show active' }} " id="v-pills-profile"
                    role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <p class="pl-3 f-21 cl-000000">Personal Info</p>
                    @if (Auth::user()->user_type =='specialist')

                    <form class="steps" action="{{ route('profile.update',Auth::user()->id) }}" method="POST"
                        accept-charset="UTF-8" enctype="multipart/form-data" id="registerForm" novalidate=""
                        id="specilaist_profile_form">
                        @csrf @method('PUT')
                        <div class="pl-5 pr-5 pb-5 first-step-html-change">
                            <div class="row justify-content-between">
                                <div
                                    class="input-group mb-3 border-input pt-4 d-flex flex-nowrap col-md-5 border border-top-0 border-left-0 border-right-0">
                                    <div class="d-flex"><em
                                            class="fa fa-user d-flex justify-content-center align-items-center"></em>
                                    </div>
                                    <div class="w-100">
                                        <input type="text" class="w-100 form-control border-0"
                                            placeholder="Enter username" name="username" id="username"
                                            onkeyup="usernamePublicProfile(this);" aria-label=""
                                            aria-describedby="basic-addon1" value="{{ Auth::user()->username }}" />
                                    </div>
                                </div>
                                <div
                                    class="input-group mb-3 border-input pt-4 d-flex flex-nowrap col-md-5 border border-top-0 border-left-0 border-right-0">
                                    <div class="d-flex"><em
                                            class="fa fa-user d-flex justify-content-center align-items-center"></em>
                                    </div>
                                    <div class="w-100">
                                        <input type="text" class="w-100 form-control border-0" placeholder="Enter name"
                                            name="name" id="name" aria-label="" aria-describedby="basic-addon1"
                                            value="{{ Auth::user()->name }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div
                                    class="mb-3 border-input col-md-5 border border-top-0 border-left-0 border-right-0">
                                    <label class="cl-3AC574 m-0 pt-3 pb-1">
                                        <span>
                                            <em class="fa fa-globe"></em>
                                        </span>
                                        <span class="pl-1 cl-3AC574 h6">Link to your Public Profile</span>
                                    </label>
                                    <div class="input-group mb-2 border-input pt-0 pl-3">
                                        <input type="text" class="form-control border-0 pl-4 pt-0"
                                            placeholder="Link.public.profile" name="public_profile" id="public_profile"
                                            aria-label="" aria-describedby="basic-addon1" readonly=""
                                            value="{{ Auth::user()->specialist->public_profile }}" />
                                    </div>
                                </div>
                                <div
                                    class="input-group mb-3 border-input pt-4 d-flex flex-nowrap col-md-5 border border-top-0 border-left-0 border-right-0">
                                    <div class="d-flex"><em
                                            class="fa fa-envelope d-flex justify-content-center align-items-end pb-2"></em>
                                    </div>
                                    <div class="w-100 d-flex align-items-end">
                                        <input type="email" class="w-100 form-control border-0"
                                            placeholder="Enter your email" name="email" id="email" aria-label=""
                                            aria-describedby="basic-addon1" value="{{ Auth::user()->email }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div
                                    class="input-group mb-3 col-md-5 border-input pt-4 d-flex flex-nowrap border border-top-0 border-left-0 border-right-0">
                                    <div class="d-flex"><em
                                            class="fa fa-map-marker d-flex justify-content-center align-items-center"></em>
                                    </div>
                                    <div class="w-100">
                                        <select id="country" name="country" onchange="countryChange(this);"
                                            class="form-control country-select w-100 border-0">
                                            @foreach (countries() as $country)
                                                <option {{ Auth::user()->country  == ucwords(strtolower($country['name'])) ? "selected":" " }} value="{{ ucwords(strtolower($country['name'])) }}" data-code="{{ $country['code'] }}">{{ $country['name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div
                                    class="input-group mb-3 border-input pt-4 d-flex flex-nowrap col-md-5 border border-top-0 border-left-0 border-right-0">
                                    <div class="d-flex"><em
                                            class="fa fa-phone d-flex justify-content-center align-items-center"></em>
                                    </div>
                                    <div class="w-100">
                                        <input type="text" class="form-control border-0 phone-number"
                                            placeholder="What is your business phone" name="business_phone"
                                            id="business_phone" aria-label="" aria-describedby="basic-addon1"
                                            value="{{ Auth::user()->specialist->business_phone }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div
                                    class="input-group mb-3 col-md-5 border-input pt-4 d-flex flex-nowrap border border-top-0 border-left-0 border-right-0">
                                    <div class="d-flex"><em
                                            class="fa fa-bars pb-2 d-flex justify-content-center align-items-end"></em>
                                    </div>
                                    <div class="w-100 d-flex align-items-end">
                                        <input type="text" class="form-control border-0" placeholder="Select Category"
                                            id="select_category" aria-label="" aria-describedby="basic-addon1"
                                            data-toggle="modal" data-target="#exampleModal"
                                            value="{{ Auth::user()->specialist->category->name }}" />
                                    </div>
                                </div>
                                <div
                                    class="input-group mb-3 border-input col-md-5 border border-top-0 border-left-0 border-right-0">
                                    <label class="cl-gray m-0 pt-3">
                                        <span>
                                            <em class="fa fa-calendar"></em>
                                        </span>
                                        <span class="pl-1 h6">Days & Hours of Availability </span>
                                    </label>
                                    <div class="input-group mb-2 border-input pt-0 pl-3">
                                        <input type="text" class="form-control border-0 pl-4 pt-0"
                                            placeholder="Select Opening Hours" id="select_opening_hours" aria-label=""
                                            aria-describedby="basic-addon1" data-toggle="modal"
                                            data-target="#exampleModalLong" readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div
                                    class="input-group mb-3 border-input pt-4 d-flex flex-nowrap col-md-5 border border-top-0 border-left-0 border-right-0">
                                    <div class="d-flex"><em
                                            class="fas fa-user-clock d-flex justify-content-center align-items-center"></em>
                                    </div>
                                    <div class="w-100">
                                        <select name="timezone" class="form-control w-100 border-0 select2">
                                            @foreach (getTimeZoneList() as $key => $time)
                                            <option value="{{ $key }}"
                                                {{ ($key == Auth::user()->time_zone)? 'selected':'' }}>{{ $time }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="h1 text-center cl-3AC574 pt-2">Enter Banking Information</div>
                            <div class="">
                                <div class="row pt-2">
                                    <div class="col-md-12 d-flex justify-content-center">
                                        <div
                                            class="{{(Auth::user()->specialist->payment_method == 'stripe')? 'bg-3AC574':''}} ml-2 mr-2 pl-4 pr-4 active rounded border radio_Selection_sub">
                                            <input type="radio" class="btn-check" style="display: none;"
                                                name="payment_method" id="option1" autocomplete="off"
                                                {{(Auth::user()->specialist->payment_method == "stripe")? 'checked':''}}
                                                onclick="paymentRadio(this)" value="stripe">
                                            <label
                                                class="btn {{(Auth::user()->specialist->payment_method == 'stripe')? 'text-white':''}}"
                                                for="option1"> Stripe </label>
                                        </div>
                                        <div
                                            class="{{(Auth::user()->specialist->payment_method == 'paypal')? 'bg-3AC574':''}} ml-4 mr-4 pl-4 pr-4 rounded border radio_Selection_sub">
                                            <input type="radio" class="btn-check" style="display: none;"
                                                name="payment_method" id="option2" autocomplete="off"
                                                onclick="paymentRadio(this)" {{(Auth::user()->specialist->payment_method ==
                                            "paypal")? 'checked':''}} value="paypal">
                                            <label
                                                class="btn {{(Auth::user()->specialist->payment_method == 'paypal')? 'text-white':''}}"
                                                for="option2">Paypal</label>
                                        </div>
                                        <div
                                            class="{{(Auth::user()->specialist->payment_method == 'payoneer')? 'bg-3AC574':''}} ml-2 mr-2 pl-3 pr-3 rounded border radio_Selection_sub">
                                            <input type="radio" class="btn-check" style="display: none;"
                                                name="payment_method" id="option4" autocomplete="off"
                                                onclick="paymentRadio(this)" {{(Auth::user()->specialist->payment_method ==
                                            "payoneer")? 'checked':''}} value="payoneer">
                                            <label
                                                class="btn {{(Auth::user()->specialist->payment_method == 'payoneer')? 'text-white':''}}"
                                                for="option4">Payoneer</label>
                                        </div>
                                    </div>
                                </div>
                                <div id="payment_selection_html">
                                    @if(Auth::user()->specialist->payment_method == "stripe")
                                    <div class="row d-flex justify-content-between">
                                        <div
                                            class="input-group mb-3 border-input col-md-5 pt-3 mt-3 d-flex flex-nowrap border border-top-0 border-left-0 border-right-0">
                                            <div><em class="fa fa-user"></em></div>
                                            <div class="w-100">
                                                <input type="text" id="payment_first_name"
                                                    class="w-100 form-control border-0"
                                                    placeholder="Enter your first name" aria-label=""
                                                    aria-describedby="basic-addon1" name="payment_first_name"
                                                    value="{{Auth::user()->specialist->payment_first_name}}" />
                                            </div>
                                        </div>
                                        <div
                                            class="input-group mb-3 border-input col-md-5 pt-3 mt-3 d-flex flex-nowrap border border-top-0 border-left-0 border-right-0">
                                            <div><em class="fa fa-user"></em></div>
                                            <div class="w-100">
                                                <input type="text" id="payment_last_name"
                                                    class="w-100 form-control border-0"
                                                    placeholder="Enter your last name" aria-label=""
                                                    aria-describedby="basic-addon1" name="payment_last_name"
                                                    value="{{Auth::user()->specialist->payment_last_name}}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-between">
                                        <div
                                            class="input-group mb-3 border-input col-md-5 pt-3 d-flex flex-nowrap border border-top-0 border-left-0 border-right-0">
                                            <div><em class="fa fa-university"></em></div>
                                            <div class="w-100">
                                                <input type="number" id="account_number"
                                                    class="w-100 form-control border-0"
                                                    placeholder="Enter your account number" aria-label=""
                                                    aria-describedby="basic-addon1" name="account_number"
                                                    value="{{Auth::user()->specialist->account_number}}" />
                                            </div>
                                        </div>
                                        <div
                                            class="input-group mb-3 border-input col-md-5 pt-3 d-flex flex-nowrap border border-top-0 border-left-0 border-right-0">
                                            <div><em class="fa fa-university"></em></div>
                                            <div class="w-100">
                                                <input type="number" id="routing_number"
                                                    class="w-100 form-control border-0"
                                                    placeholder="Enter your routing number" aria-label=""
                                                    aria-describedby="basic-addon1" name="routing_number"
                                                    value="{{Auth::user()->specialist->routing_number}}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-between">
                                        <div
                                            class="input-group mb-3 border-input col-md-5 pt-3 d-flex flex-nowrap border border-top-0 border-left-0 border-right-0">
                                            <div><em class="fa fa-calendar"></em></div>
                                            <div>
                                                <input type="text" id="payment_birth_date" class="form-control border-0"
                                                    placeholder="Date of Birth" aria-label=""
                                                    aria-describedby="basic-addon1" name="payment_birth_date"
                                                    value="{{Auth::user()->specialist->payment_birth_date}}" />
                                            </div>
                                        </div>
                                        <div
                                            class="input-group mb-3 border-input pt-3 col-md-5 d-flex flex-nowrap border border-top-0 border-left-0 border-right-0">
                                            <div><em class="fa fa-key"></em></div>
                                            <div class="w-100">
                                                <input type="number" class="w-100 form-control border-0"
                                                    placeholder="SSN last four" id="payment_ssn" aria-label=""
                                                    aria-describedby="basic-addon1" name="payment_ssn"
                                                    value="{{Auth::user()->specialist->payment_ssn}}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-between">
                                        <div
                                            class="input-group mb-3 border-input col-md-5 pt-3 d-flex flex-nowrap border border-top-0 border-left-0 border-right-0">
                                            <div><em class="fa fa-key"></em></div>
                                            <div class="w-100">
                                                <input type="text" id="stripe_public_key" class="form-control border-0"
                                                    placeholder="Stripe public key" aria-label=""
                                                    aria-describedby="basic-addon1" name="stripe_public_key"
                                                    value="{{Auth::user()->specialist->stripe_public_key}}" />
                                            </div>
                                        </div>
                                        <div
                                            class="input-group mb-3 border-input pt-3 col-md-5 d-flex flex-nowrap border border-top-0 border-left-0 border-right-0">
                                            <div><em class="fa fa-key"></em></div>
                                            <div class="w-100">
                                                <input type="text" class="w-100 form-control border-0"
                                                    placeholder="stripe secrete key" id="stirpe_secrete_key"
                                                    aria-label="" aria-describedby="basic-addon1"
                                                    name="stripe_secrete_key"
                                                    value="{{Auth::user()->specialist->stripe_secrete_key}}" />
                                            </div>
                                        </div>
                                    </div>
                                    @endif @if(Auth::user()->specialist->payment_method == "paypal")
                                    <div class="row">
                                        <div
                                            class="input-group mb-3 col-md-12 border-input pt-4 mb-4 mt-5 d-flex flex-nowrap border border-top-0 border-left-0 border-right-0">
                                            <div><em class="fa fa-envelope"></em></div>
                                            <div class="w-100">
                                                <input type="email" id="payment_email_paypal1"
                                                    class="w-100 form-control border-0"
                                                    placeholder="Enter your PayPal email address" aria-label=""
                                                    aria-describedby="basic-addon1" name="payment_email"
                                                    value="{{Auth::user()->specialist->payment_email}}" />
                                            </div>
                                        </div>
                                    </div>
                                    @endif @if(Auth::user()->specialist->payment_method == "payoneer")
                                    <div class="row">
                                        <div
                                            class="input-group mb-3 col-md-12 border-input pt-4 mb-4 mt-5 d-flex flex-nowrap border border-top-0 border-left-0 border-right-0">
                                            <div><em class="fa fa-envelope"></em></div>
                                            <div class="w-100">
                                                <input type="email" id="payment_email_pyoneer1"
                                                    class="w-100 form-control border-0"
                                                    placeholder="Enter you Payoneer email address" aria-label=""
                                                    aria-describedby="basic-addon1" name="payment_email"
                                                    value="{{Auth::user()->specialist->payment_email}}" />
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                                <div id="stripe-html" style="display: none;">
                                    <div class="row d-flex justify-content-between">
                                        <div
                                            class="input-group mb-3 border-input col-md-5 pt-3 mt-3 d-flex flex-nowrap border border-top-0 border-left-0 border-right-0">
                                            <div><em class="fa fa-user"></em></div>
                                            <div class="w-100">
                                                <input type="text" id="payment_first_name"
                                                    class="w-100 form-control border-0"
                                                    placeholder="Enter your first name" aria-label=""
                                                    aria-describedby="basic-addon1" name="payment_first_name"
                                                    value="{{Auth::user()->specialist->payment_first_name}}" />
                                            </div>
                                        </div>
                                        <div
                                            class="input-group mb-3 border-input col-md-5 pt-3 mt-3 d-flex flex-nowrap border border-top-0 border-left-0 border-right-0">
                                            <div><em class="fa fa-user"></em></div>
                                            <div class="w-100">
                                                <input type="text" id="payment_last_name"
                                                    class="w-100 form-control border-0"
                                                    placeholder="Enter your last name" aria-label=""
                                                    aria-describedby="basic-addon1" name="payment_last_name"
                                                    value="{{Auth::user()->specialist->payment_last_name}}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-between">
                                        <div
                                            class="input-group mb-3 border-input col-md-5 pt-3 d-flex flex-nowrap border border-top-0 border-left-0 border-right-0">
                                            <div><em class="fa fa-university"></em></div>
                                            <div class="w-100">
                                                <input type="number" id="account_number"
                                                    class="w-100 form-control border-0"
                                                    placeholder="Enter your account number" aria-label=""
                                                    aria-describedby="basic-addon1" name="account_number"
                                                    value="{{Auth::user()->specialist->account_number}}" />
                                            </div>
                                        </div>
                                        <div
                                            class="input-group mb-3 border-input col-md-5 pt-3 d-flex flex-nowrap border border-top-0 border-left-0 border-right-0">
                                            <div><em class="fa fa-university"></em></div>
                                            <div class="w-100">
                                                <input type="number" id="routing_number"
                                                    class="w-100 form-control border-0"
                                                    placeholder="Enter your routing number" aria-label=""
                                                    aria-describedby="basic-addon1" name="routing_number"
                                                    value="{{Auth::user()->specialist->routing_number}}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-between">
                                        <div
                                            class="input-group mb-3 border-input col-md-5 pt-3 d-flex flex-nowrap border border-top-0 border-left-0 border-right-0">
                                            <div><em class="fa fa-calendar"></em></div>
                                            <div>
                                                <input type="text" id="payment_birth_date" class="form-control border-0"
                                                    placeholder="Date of Birth" aria-label=""
                                                    aria-describedby="basic-addon1" name="payment_birth_date"
                                                    value="{{Auth::user()->specialist->payment_birth_date}}" />
                                            </div>
                                        </div>
                                        <div
                                            class="input-group mb-3 border-input pt-3 col-md-5 d-flex flex-nowrap border border-top-0 border-left-0 border-right-0">
                                            <div><em class="fa fa-key"></em></div>
                                            <div class="w-100">
                                                <input type="number" class="w-100 form-control border-0"
                                                    placeholder="SSN last four" id="payment_ssn" aria-label=""
                                                    aria-describedby="basic-addon1" name="payment_ssn"
                                                    value="{{Auth::user()->specialist->payment_ssn}}" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 pt-4 warningAlert" style="display: none;">
                                        <div class="alert alert-warning warningAlertContent"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <button type="submit" class="btn btn-sm bg-3AC574 text-white">Save Changes</button>
                            </div>
                        </div>
                        <!-- Modal 1st code start-->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog border-1" role="document">
                                <div class="modal-content pt-4">
                                    <div class="modal-header border-0 pl-5 pr-5">
                                        <h2 class="modal-title cl-gray" id="exampleModalLabel">Category</h2>
                                        <button type="button" class="close close1" data-dismiss="modal"
                                            aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body pl-5 pr-5 pt-0">
                                        <select class="custom-select main-category" name="category_id"
                                            onchange="getSubCategories(this);">
                                            @if(App\Category::all()->count() >0)
                                            <option value="Select Main Category" selected="" disabled="">Select
                                                Category</option>
                                            @foreach(App\Category::all() as $category)
                                            <option value="{{ $category->id }}"
                                                {{ Auth::user()->specialist->category->id == $category->id ? 'selected':'' }}>
                                                {{ ucwords($category->name) }}</option>
                                            @endforeach @endif
                                        </select>
                                    </div>
                                    <div id="sub_categories">
                                        @if($subcategories->count() > 0)
                                        <h2 class="modal-title pl-5 pr-5 cl-gray" id="exampleModalLabel">SubCategory</h2>
                                        <div class="border overflow-scroll-reg pl-5 mt-2">
                                            @php $sub_categories =
                                            json_decode(Auth::user()->specialist->sub_category_id); @endphp
                                            @foreach($subcategories as $key=>$subcategory) @if($subcategory->category_id
                                            ==
                                            Auth::user()->specialist->category_id)
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                    @foreach($sub_categories as $selected_subcategory)
                                                    @if($selected_subcategory==$subcategory->id) checked @endif
                                                @endforeach
                                                name="sub_category_id[]" id="customCheck{{ $key }}"
                                                value="{{ $subcategory->id }}">
                                                <label class="custom-control-label"
                                                    for="customCheck{{ $key }}">{{ ucwords($subcategory->name) }}</label>
                                            </div>
                                            @endif @endforeach
                                        </div>

                                        @endif
                                    </div>
                                    <div class="modal-footer m-auto border-0">
                                        <button type="button" onclick="categorySubcategoryCheck();"
                                            class="btn bg-3ac574 text-white pl-5 pr-5 mt-3 mb-3">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal 1st code end-->
                        <!-- Modal 2nd code start-->
                        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog border-1" role="document">
                                <div class="modal-content pt-4">
                                    <div class="modal-header border-0 pl-5 pr-4">
                                        <h3 class="modal-title cl-gray" id="exampleModalLabel">Days & Hours of
                                            Availability</h3>
                                        <button type="button" class="close close2 pt-0" data-dismiss="modal"
                                            aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="row pt-2">
                                        <div class="col-md-12 d-flex text-center pl-5">
                                            <p class="text-warning">Note: All days are closed if you want to open then
                                                check the respective day</p>
                                        </div>
                                    </div>
                                    @php $days = json_decode(Auth::user()->specialist->opening_hours); $week_days =
                                    array('monday','tuesday','wednesday','thursday','friday','saturday','sunday' );
                                    @endphp
                                    <div class="pl-4 mt-2">
                                        @foreach ($week_days as $week_day)

                                        <div
                                            class="border-bottom custom-control custom-checkbox d-flex justify-content-between align-items-center">
                                            <input type="checkbox" class="custom-control-input checkbxCheck days "
                                                {{ ( array_key_exists($week_day,$days)) ?'checked':'' }}
                                                onchange="dayOpened(this);" id="customCheck{{ $week_day }}"
                                                name="days[]" value="{{ $week_day }}">
                                            <label class="custom-control-label mr-2" for="customCheck{{ $week_day }}"
                                                style="width: 100px;">{{ ucfirst($week_day) }}</label>
                                            <!-- Time select code -->

                                            <select
                                                class="custom-select-reg {{ ( array_key_exists($week_day,$days))?'':'d-none' }} ml-5 mr-2"
                                                name="{{ $week_day }}_from">
                                                @for ($j = 1; $j <=2; $j++) @if ($j==1) {{ $interval = "AM" }} @else
                                                    {{ $interval = "PM" }} @endif @for($i=1;$i<=12;$i++) <option
                                                    value="{{ $i.':'.'00 '.$interval }}" {{ ( array_key_exists($week_day,$days)) ? (($days->
                                                    $week_day[0] == $i.':'.'00 '.$interval) ? "selected":'' ):''}}>
                                                    {{ $i.':'.'00 '.$interval }}
                                                    </option>
                                                    <option value="{{ $i.':'.'15 '.$interval }}" {{ ( array_key_exists($week_day,$days)) ? (($days->
                                                    $week_day[0] == $i.':'.'15 '.$interval) ? "selected":''):'' }}>
                                                        {{ $i.':'.'15 '.$interval }}
                                                    </option>
                                                    <option value="{{ $i.':'.'30 '.$interval }}" {{ ( array_key_exists($week_day,$days)) ? (($days->
                                                    $week_day[0] == $i.':'.'30 '.$interval) ? "selected":''):'' }}>
                                                        {{ $i.':'.'30 '.$interval }}
                                                    </option>
                                                    <option value="{{ $i.':'.'45 '.$interval }}" {{ ( array_key_exists($week_day,$days)) ? (($days->
                                                    $week_day[0] == $i.':'.'45 '.$interval) ? "selected":''):'' }}>
                                                        {{ $i.':'.'45 '.$interval }}
                                                    </option>
                                                    @endfor @endfor
                                            </select>
                                            -
                                            <select
                                                class="custom-select-reg {{ ( array_key_exists($week_day,$days))?'':'d-none' }} ml-2"
                                                name="{{ $week_day }}_to">
                                                @for ($j = 1; $j <=2; $j++) @if ($j==1) {{ $interval = "AM" }} @else
                                                    {{ $interval = "PM" }} @endif @for($i=1;$i<=12;$i++) <option
                                                    value="{{ $i.':'.'00 '.$interval }}" {{ ( array_key_exists($week_day,$days)) ? (($days->
                                                    $week_day[1] == $i.':'.'00 '.$interval) ? "selected":'' ):''}}>
                                                    {{ $i.':'.'00 '.$interval }}
                                                    </option>
                                                    <option value="{{ $i.':'.'15 '.$interval }}" {{ ( array_key_exists($week_day,$days)) ? (($days->
                                                    $week_day[1] == $i.':'.'15 '.$interval) ? "selected":''):'' }}>
                                                        {{ $i.':'.'15 '.$interval }}
                                                    </option>
                                                    <option value="{{ $i.':'.'30 '.$interval }}" {{ ( array_key_exists($week_day,$days)) ? (($days->
                                                    $week_day[1] == $i.':'.'30 '.$interval) ? "selected":''):'' }}>
                                                        {{ $i.':'.'30 '.$interval }}
                                                    </option>
                                                    <option value="{{ $i.':'.'45 '.$interval }}" {{ ( array_key_exists($week_day,$days)) ? (($days->
                                                    $week_day[1] == $i.':'.'45 '.$interval) ? "selected":''):'' }}>
                                                        {{ $i.':'.'45 '.$interval }}
                                                    </option>
                                                    @endfor @endfor
                                            </select>
                                            <!-- Time select code -->
                                            @if (!( array_key_exists($week_day,$days)))

                                            <span class="ml-5 pr-4 cl-gray">Closed</span>
                                            @else
                                            <span class="ml-5 pr-4 d-none cl-gray">Closed</span>
                                            @endif

                                            <button type="button"
                                                class="close close-reg {{ ( array_key_exists($week_day,$days))?'':'d-none' }} "
                                                aria-label="Close" onclick="dayClosed(this);"><span
                                                    aria-hidden="true">&times;</span></button>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="modal-footer m-auto border-0">
                                        <button type="button" onclick="dayCheckValidation();"
                                            class="btn bg-3ac574 text-white pl-5 pr-5 mt-3 mb-3">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal 2nd code end-->
                    </form>

                    <div id="paypal-html" style="display: none;">
                        <div class="row">
                            <div
                                class="input-group mb-3 col-md-12 border-input pt-4 mb-4 mt-5 d-flex flex-nowrap border border-top-0 border-left-0 border-right-0">
                                <div><em class="fa fa-envelope"></em></div>
                                <div class="w-100">
                                    <input type="email" id="payment_email_paypal2" class="w-100 form-control border-0"
                                        placeholder="Enter your PayPal email address" aria-label=""
                                        aria-describedby="basic-addon1" name="payment_email"
                                        value="{{Auth::user()->specialist->payment_email}}" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="payoneer-html" style="display: none;">
                        <div class="row">
                            <div
                                class="input-group mb-3 col-md-12 border-input pt-4 mb-4 mt-5 d-flex flex-nowrap border border-top-0 border-left-0 border-right-0">
                                <div><em class="fa fa-envelope"></em></div>
                                <div class="w-100">
                                    <input type="email" id="payment_email_payoneer2" class="w-100 form-control border-0"
                                        placeholder="Enter you Payoneer email address" aria-label=""
                                        aria-describedby="basic-addon1" name="payment_email"
                                        value="{{Auth::user()->specialist->payment_email}}" />
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    <form action="{{ route('profile.update',Auth::user()->id) }}" method="post"
                        id="client_profile_form">
                        @csrf @method('PUT')
                        <div class="pl-5 pr-5 first-step-html-change">
                            <div class="row justify-content-between">
                                <div
                                    class="input-group mb-3 border-input pt-4 d-flex flex-nowrap col-md-5 border border-top-0 border-left-0 border-right-0">
                                    <div class="d-flex"><em
                                            class="fa fa-user d-flex justify-content-center align-items-center"></em>
                                    </div>
                                    <div class="w-100">
                                        <input type="text" class="w-100 form-control border-0"
                                            placeholder="Enter username" name="username" id="username"
                                            onkeyup="usernamePublicProfile(this);" aria-label=""
                                            aria-describedby="basic-addon1" value="{{ Auth::user()->username }}" />
                                    </div>
                                </div>
                                <div
                                    class="input-group mb-3 border-input pt-4 d-flex flex-nowrap col-md-5 border border-top-0 border-left-0 border-right-0">
                                    <div class="d-flex"><em
                                            class="fa fa-user d-flex justify-content-center align-items-center"></em>
                                    </div>
                                    <div class="w-100">
                                        <input type="text" class="w-100 form-control border-0" placeholder="Enter name"
                                            name="name" id="name" aria-label="" aria-describedby="basic-addon1"
                                            value="{{ Auth::user()->name }}" />
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-between">
                                <div
                                    class="input-group mb-3 col-md-5 border-input pt-4 d-flex flex-nowrap border border-top-0 border-left-0 border-right-0">
                                    <div class="d-flex"><em
                                            class="fa fa-map-marker d-flex justify-content-center align-items-center"></em>
                                    </div>
                                    <div class="w-100">
                                        <select id="country" name="country" onchange="countryChange(this);"
                                            class="select2 form-control country-select w-100 border-0">
                                            @foreach (countries() as $country)
                                                <option {{ Auth::user()->country  == ucwords(strtolower($country['name'])) ? "selected":" " }} value="{{ ucwords(strtolower($country['name'])) }}" data-code="{{ $country['code'] }}">{{ $country['name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div
                                    class="input-group mb-3 border-input pt-4 d-flex flex-nowrap col-md-5 border border-top-0 border-left-0 border-right-0">
                                    <div class="d-flex"><em
                                            class="fa fa-envelope d-flex justify-content-center align-items-end pb-2"></em>
                                    </div>
                                    <div class="w-100 d-flex align-items-end">
                                        <input type="email" class="w-100 form-control border-0"
                                            placeholder="Enter your email" name="email" id="email" aria-label=""
                                            aria-describedby="basic-addon1" value="{{ Auth::user()->email }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div
                                    class="input-group mb-3 border-input pt-4 d-flex flex-nowrap col-md-5 border border-top-0 border-left-0 border-right-0">
                                    <div class="d-flex"><em
                                            class="fa fa-phone d-flex justify-content-center align-items-center"></em>
                                    </div>
                                    <div class="w-100">
                                        <input type="text" class="form-control border-0 phone-number"
                                            placeholder="What is your business phone" name="business_phone"
                                            id="business_phone" aria-label="" aria-describedby="basic-addon1"
                                            value="{{ Auth::user()->client->business_phone }}" />
                                    </div>
                                </div>
                                <div
                                    class="input-group mb-3 border-input pt-4 d-flex flex-nowrap col-md-5 border border-top-0 border-left-0 border-right-0">
                                    <div class="d-flex"><em
                                            class="fas fa-user-clock d-flex justify-content-center align-items-center"></em>
                                    </div>
                                    <div class="w-100">
                                        <select name="timezone" class="form-control w-100 border-0 select2"
                                            data-placeholder="Select Time Zone">

                                            @foreach (getTimeZoneList() as $key => $time)
                                            <option value="{{ $key }}"
                                                {{ ($key == Auth::user()->time_zone)? 'selected':'' }}>{{ $time }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-end">
                                <button type="submit" class="btn btn-sm bg-3AC574 text-white">Save Changes</button>
                            </div>
                        </div>
                    </form>
                    @endif
                </div>
                @if(Auth::user()->user_type == 'specialist')
                <div class="tab-pane fade {{ session('portfolio')? 'show active':'' }}" id="v-pills-portfolio"
                    role="tabpanel" aria-labelledby="v-pills-portfolio-tab">
                    <p class="pl-3 f-21 cl-000000">Portfolio/Images</p>
                    <section class="container">
                        <div class="row gallery">
                            @foreach ($portfolio_images as $image)

                            <div class="col-lg-3 col-md-4 col-xs-6 thumb" id="target_{{ $image->id }}">
                                <i class="material-icons imgRemoveBtn btn-danger position-relative float-right delete_portfolio_image Cursor"
                                    data-toggle="modal" data-target="#deletePortfolioModal"
                                    style="top: 23px; z-index: 1; cursor: pointer; border-radius: 5px;"
                                    data-portfolioID="{{ $image->id }}">
                                    delete
                                </i>
                                <a href="{{ $image->image }}">
                                    <figure>
                                        <img class="img-fluid img-thumbnail" src="{{ $image->image }}"
                                            alt="Random Image" />
                                    </figure>
                                </a>
                            </div>

                            @endforeach
                        </div>
                        <form action="{{ route('portfolio_images') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row justify-content-center align-items-end">
                                <div style="form-group col-md-6">
                                    <label for="files">Upload Portfolio's Images </label>
                                    <input id="files" type="file" name="images[]" class="form-control border-0"
                                        multiple />
                                </div>
                                <div class="form-group col-md-6 m-0">
                                    <button type="submit" class="btn btn-md bg-3AC574 text-white">Upload Photos</button>
                                </div>
                            </div>
                        </form>
                        <div style="padding: 14px; margin: auto;" ;>
                            <div id="sortableImgThumbnailPreview"></div>
                        </div>
                    </section>
                </div>

                <div class="tab-pane fade" id="v-pills-service" role="tabpanel" aria-labelledby="v-pills-service-tab">
                    <p class="pl-3 f-21 cl-000000">Services</p>
                    <button title="Click to Add Service" data-toggle="modal" data-target="#addServiceModal"
                        class="btn btn-sm bg-3AC574 text-white m-2" style="float: right;">Add Service</button>
                    <div class="table-responsive ServiceTableData px-3" id="ServiceTableData">
                        <table id="example1" class="table table-hover example1" style="width:100%;">
                            <thead>
                                <tr class="text-uppercase">
                                    <th scope="col">#</th>
                                    <th scope="col">service</th>
                                    <th scope="col">Timing</th>
                                    <th scope="col">Rate</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($services as $key => $service)
                                    <tr id="target_{{ $service->id }}">
                                        <td>{{ $key +1 }}</td>
                                        <td>{{ $service->title }}</td>
                                        <td>{{ $service->timing }} Minutes</td>
                                        <td>${{ $service->rate }}</td>
                                        <td>
                                            @if ($service->status == "Active")

                                            <span class="badge badge-sm badge-success">{{ $service->status }}</span>
                                            @else

                                            <span class="badge badge-sm badge-danger">{{ $service->status }}</span>
                                            @endif
                                        </td>

                                        <td style="min-width: 135px !important;">
                                            <button title="Click to Update Service"
                                                class="btn btn-warning btn-sm editServiceBtn" id="editServiceBtn"
                                                data-toggle="modal" data-target="#editServiceModal"
                                                data-Serviceid="{{ $service->id }}">
                                                <i class="fe fe-pencil"></i> Edit
                                            </button>

                                            <button title="Click to Delete Service" type="button"
                                                class="btn btn-danger btn-sm ServiceDelete" data-toggle="modal"
                                                data-target="#deleteServiceModal" id="ServiceDelete"
                                                data-Serviceid="{{ $service->id }}">
                                                <i class="fe fe-trash"></i> Delete
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                
                @endif
                <div class="tab-pane fade " id="v-pills-bid" role="tabpanel" aria-labelledby="v-pills-bid-tab">
                    <p class="pl-3 f-21 cl-000000">Bids</p>
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
                                            
                                        <tr id="target_{{ $bid->id }}" >
                                            <td>{{ $key +1 }}</td>
                                            <td>
                                                {{ (Auth::user()->user_type=='client')?$bid->specialist->user->username : $bid->service_request->User->username }}</td>
                                            <td>{{ $bid->delivery }} Minutes</td>
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
                                                    <span class="badge badge-sm {{ ($bid->work_status == 'Completed')? 'badge-success':'badge-danger' }}">{{ $bid->work_status }}</span>
                                                @else
                                                    
                                                <button class="btn {{ ($bid->work_status == 'Completed')? 'btn-danger':'btn-success' }}  btn-sm work_status"   data-bid="{{ $bid->id }}" data-work_status="{{ ($bid->work_status == 'Completed')? '0':'1' }}">{{ ($bid->work_status == 'Completed')? 'Mark Un-Completed':'Mark Completed' }}</button>
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
                                                @if (Auth::user()->user_type=='client' && $bid->payment_status != "Paid" && $bid->status == 'Approved')
                                                <button class="btn btn-success btn-sm payment_btn" data-toggle="modal"
                                                    data-target="#payment_modal" data-id="{{ $bid->id }}"
                                                    data-specialist="{{ $bid->specialist_id }}"
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
                </div>

                <div class="tab-pane fade " id="v-pills-appointment" role="tabpanel"
                    aria-labelledby="v-pills-appointment-tab">
                    <p class="pl-3 f-21 cl-000000">Appointments</p>
                    <div class="table-responsive ServiceTableData px-3" id="ServiceTableData">
                        <table id="example2" class="table table-hover example1" style="width:100%">
                            <thead>
                                <tr class="text-uppercase">
                                    <th scope="col">#</th>
                                    <th scope="col">{{ Auth::user()->user_type=='specialist' ? 'Client' :'Specialist' }}
                                    </th>
                                    <th scope="col">Service</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Rate</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Payment Status</th>
                                    <th scope="col">Payment Remaining</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($appointments as $key => $appointment)
                                @php $tz = Auth::user()->user_type=='specialist' ?
                                $appointment->specialist->user->time_zone : $appointment->user->time_zone @endphp
                                <tr id="target_{{ $appointment->id }}" class="border-bottom">
                                    <td class="border-0">{{ $key +1 }}</td>
                                    <td class="border-0">
                                        {{ Auth::user()->user_type=='specialist' ? $appointment->user->name : $appointment->specialist->user->name}}
                                    </td>
                                    <td class="border-0">{{ $appointment->service->title }}</td>
                                    <td class="border-0">
                                        {{ date('d-m-Y', strtotime(getTimeZoneDate('America/Chicago',$tz,$appointment->date.' '.$appointment->time))) }}
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

                                        <span
                                            class="badge badge-sm badge-warning">{{ $appointment->payment_status }}</span>

                                        @endif @if ($appointment->payment_status == "Partial Paid")

                                        <span
                                            class="badge badge-sm badge-info">{{ $appointment->payment_status }}</span>

                                        @endif @if ($appointment->payment_status == "Paid")

                                        <span
                                            class="badge badge-sm badge-success">{{ $appointment->payment_status }}</span>

                                        @endif
                                    </td>
                                    <td class="border-0">
                                        ${{ $appointment->rate - $appointment->payment_amount }}
                                    </td>

                                    <td style="min-width: 135px !important;text-align:left!important;" class="d-flex border-0">
                                        @if ($appointment->status != "Completed" ) @if (Auth::user()->user_type=='specialist')
                                        <form action="{{ route('appointments.update',$appointment->id) }}"
                                            method="post">
                                            @csrf @method('put')

                                            <input type="hidden" name="status"
                                                value="{{ ($appointment->status == 'Cancelled')? '1': (($appointment->status == 'Pending')? '1':'3') }}" />
                                            <button type="submit"
                                                class="btn btn-sm btn-success ml-1">{{ ($appointment->status == 'Cancelled')? 'Approve': ($appointment->status == 'Pending')? 'Approve':'Completed' }}</button>
                                        </form>
                                        @endif @if ($appointment->status != "Cancelled") 
                                        @if (Auth::user()->user_type=='client' && $appointment->payment_status != "Paid")
                                        <button class="btn btn-success btn-sm payment_btn ml-1" data-toggle="modal"
                                            data-target="#payment_modal" data-id="{{ $appointment->id }}"
                                            data-specialist="{{ $appointment->specialist_id }}"
                                            data-amount="{{ $appointment->rate - $appointment->payment_amount }}" data-payment_for="appointment">Payment</button>

                                        <div class="modal fade " tabindex="-1" role="dialog"
                                            id="review_modal{{$appointment->id}}">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title ml-4">Add Review</h5>
                                                        <button type="button" class="close mr-2 close{{$appointment->id}}" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">

                                                        <form id="add-review-form-{{$appointment->id}}">
                                                            <input type="hidden" name="appointment_id" value="{{ $appointment->id }}">
                                                            <input type="hidden" name="specialist_id" value="{{ $appointment->specialist->id }}">
                                                            <div class="ml-4 input-group mb-1 pt-2">
                                                                <div class="w-100"><label>Rating</label></div>
                                                                <div class="w-100">
                                                                    <fieldset class="rating">
                                                                        <input type="radio" id="mystar{{ $appointment->id }}5" name="rating" value="5" /><label onclick="labelChange(this);" data-id="5" class = "full" for="mystar{{ $appointment->id }}5" title="Awesome - 5 stars"></label>
                                                                        <input type="radio" id="mystar{{ $appointment->id }}4" name="rating" value="4" /><label onclick="labelChange(this);" data-id="4" class = "full" for="mystar{{ $appointment->id }}4" title="Pretty good - 4 stars"></label>
                                                                        <input type="radio" id="mystar{{ $appointment->id }}3" name="rating" value="3" /><label onclick="labelChange(this);" data-id="3" class = "full" for="mystar{{ $appointment->id }}3" title="Meh - 3 stars"></label>
                                                                        <input type="radio" id="mystar{{ $appointment->id }}2" name="rating" value="2" /><label onclick="labelChange(this);" data-id="2" class = "full" for="mystar{{ $appointment->id }}2" title="Kinda bad - 2 stars"></label>
                                                                        <input type="radio" id="mystar{{ $appointment->id }}1" name="rating" value="1" /><label onclick="labelChange(this);" data-id="1" class = "full" for="mystar{{ $appointment->id }}1" title="Sucks big time - 1 star"></label>
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

                                            <button type="button" class="btn btn-sm btn-success add-review-{{$appointment->id}} ml-1" data-toggle="modal"
                                        data-target="#review_modal{{$appointment->id}}">Add Review</button>

                                        @endif
                                        

                                        @endif
                                        <form action="{{ route('appointments.update',$appointment->id) }}"
                                            method="post">
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
                    </div>
                </div>

                <div class="tab-pane fade" id="v-pills-password" role="tabpanel" aria-labelledby="v-pills-password-tab">
                    <p class="pl-3 f-21 cl-000000">Password Setting</p>
                    <form action="{{ url('password') }}" method="POST">
                        @csrf
                        <div class="px-5">
                            <div class="form-group">
                                <label for="old_password">Old Password*</label>
                                <input id="old_password" name="old_password" type="password" class="form-control"
                                    value="{{ old('old_password') }}" autocomplete="first_name"
                                    placeholder="Enter Old Password" />
                            </div>
                            <div class="form-group">
                                <label for="new_password">New Password*</label>
                                <input id="new_password" name="new_password" type="password" class="form-control"
                                    value="{{ old('new_password') }}" placeholder="Enter New Password"
                                    autocomplete="new-password" />
                            </div>
                            <div class="form-group">
                                <label for="password-confirm">Confirm New Password*</label>
                                <input id="password-confirm" type="password" class="form-control"
                                    name="new_password_confirmation" placeholder="Re-Type New Password"
                                    autocomplete="new-password" />
                            </div>
                            <div class="row justify-content-end">
                                <button type="submit" class="btn btn-sm bg-3AC574 text-white">Save Changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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


    {{-- services modals started --}} @if (Auth::user()->user_type == 'specialist')

    <!-- Modal For Adding Service-->
    <div class="modal fade" id="addServiceModal" tabindex="-1" role="dialog" aria-labelledby="addServiceModalArea"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addServiceModalArea" style="font-size: 18px !important;">Add New Service
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('specialist/services') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control select2" name="category" id="select_service_category"
                                style="width: 100%;" onchange="getSubCategoriesForServices(this);">
                                <option selected="selected" disabled>Choose category</option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group sub_categories"></div>
                        <div class="form-group">
                            <label for="title">Notes*</label>
                            <input id="title" type="text" class="form-control text-capitalize" name="title"
                                value="{{ old('title') }}" autocomplete="title" placeholder="Enter Service Title" />
                        </div>
                        <div class="form-group mb-0">
                            <label for="timing">Timing*</label>
                            <input id="timing" type="number" class="form-control text-capitalize" name="timing"
                                value="{{ old('timing') }}" autocomplete="timing" placeholder="Enter Service Timing" />
                            <small class="font-italic text-muted m-0 p-0"> ( in minutes )</small>
                        </div>
                        <div class="form-group">
                            <label for="rate">Rate*</label>
                            <input id="rate" type="number" class="form-control text-capitalize" name="rate"
                                value="{{ old('rate') }}" autocomplete="rate" placeholder="Enter Service Rate" />
                        </div>
                        <div class="form-group">
                            <label for="description">Description*</label>
                            <textarea id="description" class="form-control summernote" name="description"
                                required> </textarea>
                        </div>

                        {{-- <div class="form-group">
                            <label for="description">tags*</label>
                            <input type="text" name="tags" class="form-control" placeholder="laravel,php" required />
                        </div> --}}

                        <div class="form-group">
                            <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                <input type="checkbox" name="status" class="custom-control-input" checked
                                    id="customSwitch3" />
                                <label class="custom-control-label" for="customSwitch3">Inactive/Active</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-md btn-danger" data-dismiss="modal"><i
                                class="fas fa-backspace"></i> Cancel</button>
                        <button type="submit" class="btn btn-md btn-primary"><i class="fas fa-check-circle"></i> Add
                            Service</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal For Editing Service-->
    <div class="modal fade editServiceModal" id="editServiceModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabelServiceedit" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabelServiceedit" style="font-size: 18px !important;">Edit
                        Service</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="requestServiceData"></div>
            </div>
        </div>
    </div>

    <!-- Modal For Deleting Service-->
    <div class="modal fade deleteServiceModal" id="deleteServiceModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabelServicedelete" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabelServicedelete" style="font-size: 18px !important;">
                        Delete Confirmation !</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure, you want to delete this Service?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-md btn-danger" data-dismiss="modal">No, Cancel</button>
                    <button type="button" class="btn btn-md btn-primary deleteServiceBtn" id="deleteServiceBtn"
                        data-dismiss="modal">Yes, Delete</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal For Deleting Service-->
    <div class="modal fade deletePortfolioModal" id="deletePortfolioModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabelPortfoliodelete" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabelPortfoliodelete" style="font-size: 18px !important;">
                        Delete Confirmation !</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure, you want to delete this Image?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-md btn-danger" data-dismiss="modal">No, Cancel</button>
                    <button type="button" class="btn btn-md btn-primary deletePortfolioBtn" id="deletePortfolioBtn"
                        data-dismiss="modal">Yes, Delete</button>
                </div>
            </div>
        </div>
    </div>
    @endif {{-- Services modals ended --}}
</section>
@endsection {{-- content section end --}} {{-- footer section start --}} @section('extra-script')
@if (Auth::user()->user_type == 'specialist')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script>
    
        const usernamePublicProfile = (ele) => {
            let val = $(ele).val();
            val = val.split(" ").join("-");
            $(ele).val(val);
            $("#public_profile").val(val + ".learnme.live");
        };

        function getSubCategories(ele) {
            let id = $(ele).val();
            $("#select_category").val(
                $(ele)
                .find("option[value=" + id + "]")
                .text()
            );
            $.ajax({
                url: "{{ route('get.sub_categories') }}",
                type: "get",
                data: {
                    id: id,
                },
                success: function (data) {
                    $("#sub_categories").html(data);
                },
            });
        }

        function dayClosed(ele) {
            $(ele).siblings("input").removeAttr("checked");
            $(ele).siblings("select").addClass("d-none");
            $(ele).addClass("d-none");
            $(ele).siblings("span").removeClass("d-none");
        }

        function dayOpened(ele) {
            if ($(ele).is(":checked")) {
                $(ele).siblings("select").removeClass("d-none").show();
                $(ele).siblings("button").removeClass("d-none");
                $(ele).siblings("span").addClass("d-none");
            } else {
                $(ele).siblings("select").addClass("d-none");
                $(ele).siblings("button").addClass("d-none");
                $(ele).siblings("span").removeClass("d-none");
            }
        }
        
        setInterval(() => {
            let meCheck = false;
            $.each($(".days"), function () {
                if ($(this).is(":checked")) {
                    meCheck = true;
                }
            });
            if (meCheck) {
                let allChecked = document.getElementById("select_opening_hours");
                allChecked.placeholder = "Completed";
            } else {
                let notChecked = document.getElementById("select_opening_hours");
                notChecked.placeholder = "Not Completed";
            }
        }, 1000);

        function dayCheckValidation() {
            let meCheck = false;
            $.each($(".days"), function () {
                if ($(this).is(":checked")) {
                    meCheck = true;
                }
            });
            if (!meCheck) {
                swal({
                    icon: "error",
                    text: "{{ __('Please Check Your Available Day!') }}",
                    type: "error",
                });
            } else {
                $(".close2").click();
            }
        }

        const paymentRadio = (ele) => {
            $(ele).parent().addClass("bg-3AC574");
            $(ele).parent().siblings().removeClass("bg-3AC574");
            $(ele).parent().siblings().find("label").removeClass("text-white");
            // $(ele).siblings().removeClass('text-white');
            $(ele).siblings().addClass("text-white");
            if ($(ele).val() == "stripe") {
                $("#payment_selection_html").html(document.getElementById("stripe-html").innerHTML);
            }
            if ($(ele).val() == "paypal") {
                $("#payment_selection_html").html(document.getElementById("paypal-html").innerHTML);
            }
            if ($(ele).val() == "payoneer") {
                $("#payment_selection_html").html(document.getElementById("payoneer-html").innerHTML);
            }
        };

        function categorySubcategoryCheck() {
            if ($('select[name="category_id"]').val() == null) {
                swal({
                    icon: "error",
                    text: "{{ __('Please Select Category!') }}",
                    type: "error",
                });
            } else {
                meCheckSubCategory = false;
                $.each($('input[name="sub_category_id[]"]'), function () {
                    if ($(this).is(":checked")) {
                        meCheckSubCategory = true;
                    }
                });
                if (!meCheckSubCategory) {
                    swal({
                        icon: "error",
                        text: "{{ __('Please Select Business Category!') }}",
                        type: "error",
                    });
                } else {
                    $(".close1").click();
                }
            }
        }

        function getSubCategoriesForServices(ele) {
            let id = $(ele).val();
            $.ajax({
                url: "{{ url('sub_categories') }}",
                type: "get",
                data: {
                    id: id
                },
                success: function (data) {
                    $(".sub_categories").empty();
                    $(".sub_categories").html(data);
                },
            });
        }



        $(document).ready(function () {
            $(".gallery").magnificPopup({
                delegate: "a",
                type: "image",
                tLoading: "Loading image #%curr%...",
                mainClass: "mfp-img-mobile",
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0, 1], // Will preload 0 - before current, and 1 after the current image
                },
                image: {
                    tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                },
            });
        });
        $(function () {
            $("#sortableImgThumbnailPreview").sortable({
                connectWith: ".RearangeBox",
                start: function (event, ui) {
                    $(ui.item).addClass("dragElemThumbnail");
                    ui.placeholder.height(ui.item.height());
                },
                stop: function (event, ui) {
                    $(ui.item).removeClass("dragElemThumbnail");
                },
            });
            $("#sortableImgThumbnailPreview").disableSelection();
        });
        document.getElementById("files").addEventListener("change", handleFileSelect, false);

        function handleFileSelect(evt) {
            var files = evt.target.files;
            var output = document.getElementById("sortableImgThumbnailPreview");
            // Loop through the FileList and render image files as thumbnails.
            for (var i = 0, f;
                (f = files[i]); i++) {
                // Only process image files.
                if (!f.type.match("image.*")) {
                    continue;
                }
                var reader = new FileReader();
                // Closure to capture the file information.
                reader.onload = (function (theFile) {
                    return function (e) {
                        // Render thumbnail.
                        var imgThumbnailElem =
                            "<div class='RearangeBox imgThumbContainer'><i class='material-icons imgRemoveBtn' onclick='removeThumbnailIMG(this)'>cancel</i><div class='IMGthumbnail' ><img  src='" +
                            e.target.result +
                            "'" +
                            "title='" +
                            theFile.name +
                            "'/></div><div class='imgName'>" +
                            theFile.name +
                            "</div></div>";
                        output.innerHTML = output.innerHTML + imgThumbnailElem;
                    };
                })(f);
                // Read in the image file as a data URL.
                reader.readAsDataURL(f);
            }
        }

        function removeThumbnailIMG(elm) {
            elm.parentNode.outerHTML = "";
        }

    </script>
@else
    <script>

        function addReview(e) {
            let id = $(e).data('id');
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
                        swal('success', data.message, 'success')
                            .then((value) => {
                            $('.close'+id).click();
                            $('.add-review-'+id).hide();
                            });
                    } else {
                        if (data.hasOwnProperty('message')) {
                            var wrapper = document.createElement('div');
                            var err = '';
                            $.each(data.message, function (i, e) {
                                err += '<p>' + e + '</p>';
                            })

                            wrapper.innerHTML = err;
                            swal({
                                icon: "error",
                                text: "{{ __('Please fix following error!') }}",
                                content: wrapper,
                                type: 'error'
                            });
                            //setTimeout("pageRedirect()", 3000);
                            //$('.actions  li:first-child a').click();
                        }
                    }

                }
            });
        }

        function labelChange(elem) {
            let e = $(elem).data('id');
            console.log('#star' + e);
            // $('#star'+e).find(['id="'+$(elem).data('id')+'"']).not().attr('checked',false);
            $('#star' + e).attr('checked', true);

        }

        function ratingChange(elem) {
            $(elem).addClass("checked");
            $(elem).prevAll().addClass("checked");
            $(elem).nextAll().removeClass("checked");
            $(elem).nextAll().children('input').attr("checked", false);
            $('span.checked').each(function () {
                $(this).children('input').attr('checked', true);
            });
        }
        // ajax for payment
        $('.payment_btn').on('click', function () {
            var specialist_id = $(this).data('specialist');
            var amount = $(this).data('amount');
            var appointment = $(this).data('id');
            var payment_for = $(this).data('payment_for');
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

        })

    </script>
@endif
<script>

    function countryChange(elem)
    {
        $('.phone-number').val('+'+$(elem).find('option[value="'+$(elem).val()+'"]').data('code'));
    }

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
                }if(data == 'Un-Complete'){
                    bid.attr('data-work_status','1')
                    bid.removeClass('btn-danger').addClass('btn-success');
                    bid.text('Mark Completed')

                }
            }
        })
    })
</script>
@endsection {{-- footer section end --}}
