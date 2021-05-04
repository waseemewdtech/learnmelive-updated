@extends('layouts.auth.app') @section('title','Forgot Password') {{-- head start --}} @section('extra-css') @endsection {{-- head end --}} {{-- content section start --}} @section('content')

<div class="bg-register-img">
    <div class="padding-top-reg main_padding pt-30">
        <div class="row m-0 box-shadow-reg form-radius rounded-right-reg">
            <div class="col-md-5 bg-register-img2 p-0">
                <div class="text-center padding-bottom-reg-1 inner-padding">
                    <a href="{{ route('index') }}"><img src="{{ asset('assets/frontend/images/register_logo.png') }}" alt="" class="img-fluid" /></a>
                    <div class="display-2 font-600 text-white pt-5">Reset Password!</div>

                    <div class="h3 m-0 text-white pt-3">
                        To keep connected with us please <br />
                        Reset your password to login again.
                    </div>
                </div>
            </div>
            <div class="col-md-7 padding-right-reg padding-left-reg bg-white rounded-right-reg">
                <div class="h1 text-center cl-3AC574 padding-top-reg">Reset your Password</div>
                <div class="pl-5 pt-5 mt-5 pr-5">
                    <div>
                        <div class="row pt-3">
                            <div class="col-md-12 text-center">
                               @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col-md-12 text-center">
                            </div>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="input-group mb-3 border-input pt-4">
                            <span><img src="{{ asset('assets/frontend/images/men-8 (1).png') }}" alt="" /></span>
                            <input type="email" class="form-control border-0 @error('email') is-invalid @enderror"  name="email" value="{{ old('email') }}" placeholder="Email / Username"  aria-label=""  aria-describedby="basic-addon1"  required autocomplete="email"  autofocus  />
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
						
                        <div class="input-group mb-3 border-input pt-4">
                            <span><img src="{{ asset('assets/frontend/images/key-8.png') }}" alt="" /></span>
                            <input type="password" class="form-control border-0 @error('password') is-invalid @enderror" name="password" placeholder="Enter new your password" aria-label="" aria-describedby="basic-addon1" required />
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>
                        <div class="input-group mb-3 border-input pt-4">
                            <span><img src="{{ asset('assets/frontend/images/key-8.png') }}" alt="" /></span>
							 <input type="password" id="password-confirm" class="form-control border-0 " name="password_confirmation" required autocomplete="new-password" placeholder="Enter above entered password" />
                        </div>

                        <button type="submit" class="btn bg-3AC574 w-100 mt-2 pt-2 pb-2 mb-3 text-white">
                            {{ __('Reset Password') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection {{-- content section end --}} {{-- footer section start --}} @section('extra-script') @endsection {{-- footer section end --}}
