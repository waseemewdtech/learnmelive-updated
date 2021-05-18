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
@endsection {{-- head end --}} {{-- content section start --}}
@section('navbar')

<section class="px-5 pt-2 pb-2 nav-bg-img robotoRegular">@include('includes.frontend.navbar')</section>
@include('includes.frontend.navigations')
@endsection
@section('content')


<p class="border-bottom pl-3 f-21 cl-616161">Personal Info</p>
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade {{ session('portfolio')? '':'show active' }} " id="v-pills-profile"
                    role="tabpanel" aria-labelledby="v-pills-profile-tab">
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
                                        <select id="country" name="country"
                                            class="form-control country-select w-100 border-0"  onchange="countryChange(this);">
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
                                            placeholder="What is your business phone#" name="business_phone"
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
                
@endsection 
{{-- footer section start --}} @section('extra-script')
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
