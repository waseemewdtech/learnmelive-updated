@extends('layouts.admin.admin') @section('title','Profile') {{-- head start --}} @section('extra-css')
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

<section class="main_padding pt-2 pb-2 nav-bg-img robotoRegular">@include('includes.frontend.admin_navbar')</section>
@include('includes.frontend.navigations')
@endsection
@section('content')


<p class="border-bottom pl-3 f-21 cl-616161">Edit Your Personal Settings</p>

<p class="pl-3 f-21 cl-000000">Personal Info</p>

<form action="{{ route('profile.update',Auth::user()->id) }}" method="post" id="client_profile_form">
    @csrf @method('PUT')
    <div class="pl-5 pr-5 first-step-html-change">
        <div class="row justify-content-between">
            <div
                class="input-group mb-3 border-input pt-4 d-flex flex-nowrap col-md-5 border border-top-0 border-left-0 border-right-0">
                <div class="d-flex"><em class="fa fa-user d-flex justify-content-center align-items-center"></em>
                </div>
                <div class="w-100">
                    <input type="text" class="w-100 form-control border-0" placeholder="Enter username" name="username"
                        id="username" onkeyup="usernamePublicProfile(this);" aria-label=""
                        aria-describedby="basic-addon1" value="{{ Auth::user()->username }}" />
                </div>
            </div>
            <div
                class="input-group mb-3 border-input pt-4 d-flex flex-nowrap col-md-5 border border-top-0 border-left-0 border-right-0">
                <div class="d-flex"><em class="fa fa-user d-flex justify-content-center align-items-center"></em>
                </div>
                <div class="w-100">
                    <input type="text" class="w-100 form-control border-0" placeholder="Enter name" name="name"
                        id="name" aria-label="" aria-describedby="basic-addon1" value="{{ Auth::user()->name }}" />
                </div>
            </div>
        </div>

        <div class="row justify-content-between">
            <div
                class="input-group mb-3 col-md-5 border-input pt-4 d-flex flex-nowrap border border-top-0 border-left-0 border-right-0">
                <div class="d-flex"><em class="fa fa-map-marker d-flex justify-content-center align-items-center"></em>
                </div>
                <div class="w-100">
                    <select id="country" name="country" class="form-control country-select w-100 border-0">
                        @foreach (countries() as $country)
                        <option {{ Auth::user()->country  == ucwords(strtolower($country['name'])) ? "selected":" " }} value="{{ ucwords(strtolower($country['name'])) }}" data-code="{{ $country['code'] }}">{{ $country['name'] }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div
                class="input-group mb-3 border-input pt-4 d-flex flex-nowrap col-md-5 border border-top-0 border-left-0 border-right-0">
                <div class="d-flex"><em class="fa fa-envelope d-flex justify-content-center align-items-end pb-2"></em>
                </div>
                <div class="w-100 d-flex align-items-end">
                    <input type="email" class="w-100 form-control border-0" placeholder="Enter your email" name="email"
                        id="email" aria-label="" aria-describedby="basic-addon1" value="{{ Auth::user()->email }}" />
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
                                                    value="{{Auth::user()->stripe_public_key}}" />
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
                                                    value="{{Auth::user()->stripe_secret_key}}" />
                                            </div>
                                        </div>
                                    </div>

        <div class="row justify-content-end">
            <button type="submit" class="btn btn-sm bg-3AC574 text-white">Save Changes</button>
        </div>
    </div>
</form>




@endsection {{-- content section end --}} {{-- footer section start --}} @section('extra-script')

<script>
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

</script>
@endsection {{-- footer section end --}}
