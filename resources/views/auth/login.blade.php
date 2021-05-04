@extends('layouts.auth.app') @section('title','Login') {{-- head start --}} @section('extra-css') @endsection {{-- head end --}} {{-- content section start --}} @section('content')

<div class="bg-register-img">
    <div class="padding-top-reg main_padding pt-30">
        <div class="row m-0 box-shadow-reg form-radius rounded-right-reg">
            <div class="col-md-5 bg-register-img2 p-0">
                <div class="text-center padding-bottom-reg-1 inner-padding">
                    <a href="{{ route('index') }}"><img src="{{ asset('assets/frontend/images/register_logo.png') }}" alt="" class="img-fluid" /></a>
                    <div class="display-2 font-600 text-white pt-5">Welcome Back!</div>

                    <div class="h3 m-0 text-white pt-3 px-2">
                        To connect with us please login with your registered info.
                    </div>
                </div>
            </div>
            <div class="col-md-7 padding-right-reg padding-left-reg bg-white rounded-right-reg">
                <div class="h1 text-center cl-3AC574 padding-top-reg">Sign in to learnme live</div>
                <div class="pl-5 pr-5">
                    <div>
                        <div class="row pt-3">
                            <div class="col-md-12 text-center">
                                <a href="{{ route('login.facebook') }}" target="_blank"><img src="{{ asset('assets/frontend/images/fb-icon.png') }}" alt="" class="img-fluid" /></a>

                                <a href="{{ route('login.google') }}"> <img src="{{ asset('assets/frontend/images/google.png') }}" alt="" class="img-fluid" /></a>

                                {{-- <a href="http://"> <img src="{{ asset('assets/frontend/images/apple.png') }}" alt="" class="img-fluid" /></a> --}}
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col-md-12 text-center">
                                <h6 class="cl-gray">or use email for login</h6>
                            </div>
                        </div>
                    </div>
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="input-group mb-3 border-input pt-4">
                            <span><img src="{{ asset('assets/frontend/images/men-8 (1).png') }}" alt="" /></span>
                            {{--
                            <span>
                                --}}
                                <input
                                    type="email"
                                    class="form-control border-0 @error('email') is-invalid @enderror"
                                    name="email"
                                    value="{{ old('email') }}"
                                    placeholder="Email / Username"
                                    aria-label=""
                                    aria-describedby="basic-addon1"
                                    required
                                />
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror {{--
                            </span>
                            --}}
                        </div>
                        <div class="input-group border-input pt-4 mb-5">
                            <span><img src="{{ asset('assets/frontend/images/key-8.png') }}" alt="" /></span>
                            {{--
                            <span>
                                --}}
                                <input type="password" class="form-control border-0 @error('password') is-invalid @enderror" name="password" placeholder="Enter your password" aria-label="" aria-describedby="basic-addon1" required />
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror {{--
                            </span>
                            --}}
                        </div>
                        <button type="submit" class="btn bg-3AC574 w-100 mt-2 pt-2 pb-2 mb-3 text-white">
                            Sign in
                        </button>
                    </form>
                    <div class="row pt-4 pb-4 cl-gray p-0 m-0 border-bottom">
                        <div class="col-md-6 text-left">
                            <div class="form-check pl-0">
                                <input class="form-check-input border-3AC574" type="checkbox" value="" id="defaultCheck1" />
                                <label class="form-check-label cl-3AC574 font-600 pl-2" for="defaultCheck1">
                                    Remember me
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <h6 class="cl-3AC574"><a href="{{ route('password.request') }}" class="cl-3AC574">Forgotten password</a></h6>
                        </div>
                    </div>
                    <div class="text-center">
                        <h6 class="m-0 mt-4 cl-gray join_Now">
                            Not a member yet?
                            <span> <a href="{{route('register')}}" class="cl-3AC574">Join now</a></span>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection {{-- content section end --}} {{-- footer section start --}} @section('extra-script') @endsection {{-- footer section end --}}
