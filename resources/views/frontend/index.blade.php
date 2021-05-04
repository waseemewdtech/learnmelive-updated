@extends('layouts.frontend.app') @section('title','Home') {{-- head start --}} @section('extra-css')

<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/index.css') }}" />
<style type="text/css">
    .dropdown-toggle::after {
        display: none;
    }
</style>
@endsection {{-- head end --}} {{-- content section start --}} @section('content')

<section class="px-5 bg-navbar nav-bg-img pb-5">
    @include('includes.frontend.navbar')

    <div class="text-center"><img src="{{ asset('assets/frontend/images/nav_2.png') }}" class="img-fluid" alt="" /></div>
    <div class="text-center pt-4">
        <p class="m-0 cl-ffffff robotoLight f-26 index_para">Book a virtual appointment with service professionals worldwide</p>
    </div>
    <div class="text-center pt-4 pb-4"><img src="{{ asset('assets/frontend/images/curve.png') }}" alt="" /></div>
    <div class="d-flex justify-content-center">
        <div class="row m-0 pt-3 pb-3 bg-0000006b d-flex w-43 justify-content-center align-items-center">
            <form action="{{ route('search') }}" method="get" class="col-md-12 d-flex">
                @csrf
                <div class="d-flex bg-ffffff w-81 pt-3 pb-3 borderRadius-5px pl-3">
                    <div><img src="{{ asset('assets/frontend/images/search.png') }}" class="img-fluid" alt="" /></div>
                    <div class="pl-3 w-100">
                        <input type="search" class="bg-transparent outline-none border-0 robotoRegular f-21 w-100 search" name="search" placeholder="Book your services..." />
                    </div>
                </div>
                <div class="pl-3">
                    <button class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574 pt-3 pb-3 pl-3 pr-3 search-btn" type="submit"><img src="{{ asset('assets/frontend/images/search2.png') }}" alt="" /></button>
                </div>
            </form>
        </div>
    </div>
</section>

@include('includes.frontend.navigations')

<!-- T H I R D S E C T I O N -->

<section class="main_padding pt-70 text-center">
    <p class="main_title RobotoMedium f-34 cl-000000 fw-600 m-0">Popular Services</p>
    <p class="f-21 m-0 pt-3 cl-616161 robotoRegular">Discover the best services that are offered virtually.</p>
    <img src="{{ asset('assets/frontend/images/greencurve.png') }}" class="img-fluid pt-3" alt="" />
</section>

<!-- T H I R D S E C T I O N E N D  -->
<section class="main_padding pt-70">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <section class="d-block w-100">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="card border-0 text-white borderRadius-12px">
                                <img class="card-img" src="{{ asset('assets/frontend/images/istock-1147195672-1.png') }}" alt="Card image" />
                                <div class="card-img-overlay borderRadius-12px p-0 cl-ffffff bg_gradient_card_footer pl-3 pt-3 pb-3">
                                    <h5 class="card-title f-26 m-0">Website Developer</h5>
                                    <p class="card-text f-18 m-0 pt-1">Customize your site</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="card border-0 text-white borderRadius-12px">
                                <img class="card-img" src="{{ asset('assets/frontend/images/feature-article-investment-banking-101-what-it-is-and-what-investment-bankers-actually-do-838x484-2019.png') }}" alt="Card image" />
                                <div class="card-img-overlay borderRadius-12px p-0 cl-ffffff bg_gradient_card_footer pl-3 pt-3 pb-3">
                                    <h5 class="card-title f-26 m-0">Social Media</h5>
                                    <p class="card-text f-18 m-0 pt-1">Reach more customers</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="card border-0 text-white borderRadius-12px">
                                <img class="card-img" src="{{ asset('assets/frontend/images/create-logos-1.png') }}" alt="Card image" />
                                <div class="card-img-overlay borderRadius-12px p-0 cl-ffffff bg_gradient_card_footer pl-3 pt-3 pb-3">
                                    <h5 class="card-title f-26 m-0">Logo Design</h5>
                                    <p class="card-text f-18 m-0 pt-1">Build your brand</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="card border-0 text-white borderRadius-12px">
                                <img class="card-img" src="{{ asset('assets/frontend/images/maxresdefault-2.png') }}" alt="Card image" />
                                <div class="card-img-overlay borderRadius-12px p-0 cl-ffffff bg_gradient_card_footer pl-3 pt-3 pb-3">
                                    <h5 class="card-title f-26 m-0">Video Editing</h5>
                                    <p class="card-text f-18 m-0 pt-1">Edit your video</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="carousel-item">
                <section class="d-block w-100">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="card border-0 text-white borderRadius-12px">
                                <img class="card-img" src="{{ asset('assets/frontend/images/istock-1147195672-1.png') }}" alt="Card image" />
                                <div class="card-img-overlay borderRadius-12px p-0 cl-ffffff bg_gradient_card_footer pl-3 pt-3 pb-3">
                                    <h5 class="card-title f-26 m-0">Website Developer</h5>
                                    <p class="card-text f-18 m-0 pt-1">Customize your site</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="card border-0 text-white borderRadius-12px">
                                <img class="card-img" src="{{ asset('assets/frontend/images/feature-article-investment-banking-101-what-it-is-and-what-investment-bankers-actually-do-838x484-2019.png') }}" alt="Card image" />
                                <div class="card-img-overlay borderRadius-12px p-0 cl-ffffff bg_gradient_card_footer pl-3 pt-3 pb-3">
                                    <h5 class="card-title f-26 m-0">Social Media</h5>
                                    <p class="card-text f-18 m-0 pt-1">Reach more customers</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="card border-0 text-white borderRadius-12px">
                                <img class="card-img" src="{{ asset('assets/frontend/images/feature-article-investment-banking-101-what-it-is-and-what-investment-bankers-actually-do-838x484-2019.png') }}" alt="Card image" />
                                <div class="card-img-overlay borderRadius-12px p-0 cl-ffffff bg_gradient_card_footer pl-3 pt-3 pb-3">
                                    <h5 class="card-title f-26 m-0">Logo Design</h5>
                                    <p class="card-text f-18 m-0 pt-1">Build your brand</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="card border-0 text-white borderRadius-12px">
                                <img class="card-img" src="{{ asset('assets/frontend/images/feature-article-investment-banking-101-what-it-is-and-what-investment-bankers-actually-do-838x484-2019.png') }}" alt="Card image" />
                                <div class="card-img-overlay borderRadius-12px p-0 cl-ffffff bg_gradient_card_footer pl-3 pt-3 pb-3">
                                    <h5 class="card-title f-26 m-0">Video Editing</h5>
                                    <p class="card-text f-18 m-0 pt-1">Edit your video</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="carousel-item">
                <section class="d-block w-100">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="card border-0 text-white borderRadius-12px">
                                <img class="card-img" src="{{ asset('assets/frontend/images/feature-article-investment-banking-101-what-it-is-and-what-investment-bankers-actually-do-838x484-2019.png') }}" alt="Card image" />
                                <div class="card-img-overlay borderRadius-12px p-0 cl-ffffff bg_gradient_card_footer pl-3 pt-3 pb-3">
                                    <h5 class="card-title f-26 m-0">Website Developer</h5>
                                    <p class="card-text f-18 m-0 pt-1">Customize your site</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="card border-0 text-white borderRadius-12px">
                                <img class="card-img" src="{{ asset('assets/frontend/images/feature-article-investment-banking-101-what-it-is-and-what-investment-bankers-actually-do-838x484-2019.png') }}" alt="Card image" />
                                <div class="card-img-overlay borderRadius-12px p-0 cl-ffffff bg_gradient_card_footer pl-3 pt-3 pb-3">
                                    <h5 class="card-title f-26 m-0">Social Media</h5>
                                    <p class="card-text f-18 m-0 pt-1">Reach more customers</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="card border-0 text-white borderRadius-12px">
                                <img class="card-img" src="{{ asset('assets/frontend/images/feature-article-investment-banking-101-what-it-is-and-what-investment-bankers-actually-do-838x484-2019.png') }}" alt="Card image" />
                                <div class="card-img-overlay borderRadius-12px p-0 cl-ffffff bg_gradient_card_footer pl-3 pt-3 pb-3">
                                    <h5 class="card-title f-26 m-0">Logo Design</h5>
                                    <p class="card-text f-18 m-0 pt-1">Build your brand</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="card border-0 text-white borderRadius-12px">
                                <img class="card-img" src="{{ asset('assets/frontend/images/feature-article-investment-banking-101-what-it-is-and-what-investment-bankers-actually-do-838x484-2019.png') }}" alt="Card image" />
                                <div class="card-img-overlay borderRadius-12px p-0 cl-ffffff bg_gradient_card_footer pl-3 pt-3 pb-3">
                                    <h5 class="card-title f-26 m-0">Video Editing</h5>
                                    <p class="card-text f-18 m-0 pt-1">Edit your video</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<!-- F O U R T H S E C T I O E N D -->

<section class="main_padding pt-5 mt-70 bg-light pb-5">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 pr-0">
            <!-- <div class="embed-responsive embed-responsive-21by9 h-599">
                                    <video  controls>
                                        <source src="./assets/images/MyVideo4.mp4" type="video/mp4">
                              
                                      </video>
                                  </div> -->
            <img src="{{ asset('assets/frontend/images/pexels-anastasia-shuraeva-4210037.png') }}" class="img-fluid" alt="" srcset="" />
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 pl-5 pl-0">
            <div>
                <p class="m-0 f-44 RobotoMedium cl-3ac754 fw-600 sixColumnTilte f-16">Engage with a network of global independent specialists right at your fingertips.</p>
                <div class="d-flex">
                    <div class="m-0 d-flex justify-content-center align-items-center pt-1"><img src="{{ asset('assets/frontend/images/tick.png') }}" alt="" srcset="" /></div>

                    <div class="m-0 f-34 fw-600 cl-000000 pl-3 RobotoMedium sixColumnMiniTitle f-16">Post a Job hire a specialist</div>
                </div>
                <p class="m-0 cl-707070 robotoRegular f-21 pt-1 sixColumnMiniPara f-16">Simply post a virtual job you need completed within specific date/times and receive competitive bids from specialists.</p>
                <!-- 2 -->
                <div class="pt-2">
                    <div class="d-flex">
                        <div class="m-0 d-flex justify-content-center align-items-center pt-1"><img src="{{ asset('assets/frontend/images/tick.png') }}" alt="" srcset="" /></div>

                        <div class="m-0 f-34 fw-600 cl-000000 pl-3 RobotoMedium sixColumnMiniTitle f-16">Hire expert specialists without breaking the bank</div>
                    </div>
                    <p class="m-0 cl-707070 robotoRegular f-21 pt-1 sixColumnMiniPara f-16">
                        Keep within your budget with our bidding features. By naming your own price, our premium specialist marketplace will assist in orchestrating your need on your terms.
                    </p>
                </div>
                <!-- 3 -->
                <div class="pt-2">
                    <div class="d-flex">
                        <div class="m-0 d-flex justify-content-center align-items-center pt-1"><img src="{{ asset('assets/frontend/images/tick.png') }}" alt="" srcset="" /></div>

                        <div class="m-0 f-34 fw-600 cl-000000 pl-3 RobotoMedium sixColumnMiniTitle f-16">Pay Safely and Securely</div>
                    </div>
                    <p class="m-0 cl-707070 robotoRegular f-21 pt-1 sixColumnMiniPara f-16">
                        You'll always know what you'll pay upfront. Your payment isn't released until your appointment is completed.
                    </p>
                </div>
                <!-- 4 -->
                <div class="pt-2">
                    <div class="d-flex">
                        <div class="m-0 d-flex justify-content-center align-items-center pt-1"><img src="{{ asset('assets/frontend/images/tick.png') }}" alt="" srcset="" /></div>

                        <div class="m-0 f-34 fw-600 cl-000000 pl-3 RobotoMedium sixColumnMiniTitle f-16">Contact us anytime</div>
                    </div>
                    <p class="m-0 cl-707070 robotoRegular f-21 pt-1 sixColumnMiniPara f-16">
                        Our 24/7 support team is available to assist anytime.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- F I F T H S E C T I O N -->

<section class="main_padding pt-70 text-center">
    <p class="main_title RobotoMedium f-34 cl-000000 fw-600 m-0">Check Out These Specialists</p>
    <p class="f-21 m-0 pt-3 cl-616161 robotoRegular">Discover some of most talented specialists around the globe.</p>
    <img src="{{ asset('assets/frontend/images/greencurve.png') }}" class="img-fluid pt-3" alt="" />
</section>

<!-- F I F T H     S E C T I O N E N D  -->

<!-- S I X T H     S E C T I O N  S T A R T -->

<section class="main_padding pt-70">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner h-413">
            @guest @php $specialists = App\Specialist::all(); @endphp @else @php $specialists = App\Specialist::where('user_id','<>',Auth::user()->id)->get(); @endphp @endguest @foreach($specialists->chunk(4) as $specialistsCollections)
            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                <section class="d-block w-100">
                    <div class="row m-0">
                        @foreach($specialistsCollections as $specialist)

                        <div class="col-md-3 col-lg-3 col-sm-12">
                            <a href="{{route('specialist_detail',encrypt($specialist->id))}}">
                                <div class="card border-0 box_shadow">
                                    <img src="{{ asset('assets/frontend/images/86d75f5ebf6abc13a630dda33b292727.png') }}" class="card-img-top" alt="..." />
                                    <div class="card-body p-0 m-0 bg-transparent circle card_circle">
                                        <img src="{{ ($specialist->user->avatar != null) ? asset($specialist->user->avatar) : asset('uploads/user/default.jpg') }}" class="img-fluid rounded-circle h-60 w-60 profile-shadow" alt="profile" />
                                    </div>
                                    <div class="card-footer bg-ffffff pt-4 pb-4">
                                        <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">{{ ucwords($specialist->category->name) }}</h5>
                                        <p class="card-text m-0 robotoRegular cl-6 cl-6b6b6b f-21 pt-1">{{ $specialist->user->username }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </section>
            </div>

            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

<!-- S I X T H     S E C T I O N  E N D -->
<!-- S E V E N T H    S E C T I O N  S T A R T -->
<section class="mt-70">
    <div class="card img-fluid text-center border-0">
        <img class="card-img-top w-100 bg-linear-gradient" src="{{ asset('assets/frontend/images/banner.png') }}" alt="Card image" />
        <div class="banner-content cl-fff d-flex justify-content-center flex-column align-items-center father-day-banner-styling">
            <div class="main_Div">
                <div class="d-flex justify-content-center">
                    <div><img src="{{ asset('assets/frontend/images/Webp.net-resizeimage (1).png') }}" alt="" /></div>
                    <div class="f-21 cl-ffffff robotoRegular pl-3 d-flex align-items-center">
                        <div class="d-flex">
                            <div>learnmelive</div>
                            <div class="pl-4 pr-0">
                                <ul class="p-0">
                                    <li></li>
                                </ul>
                            </div>
                            <div class="">IOS, Android</div>
                        </div>
                    </div>
                </div>
                <div class="robotoMedium cl-ffffff f-35 pt-2">Download our app to book you next</div>
                <div class="robotoMedium cl-ffffff f-35 pt-1">appointment anytime, anywhere.</div>
                <div class="d-flex pt-4">
                    <div class="d-flex bg-ffffff align-items-center borderRadius-5px pl-3 w-75">
                        <div><img src="{{ asset('assets/frontend/images/usa.png') }}" class="img-fluid" alt="" /><span class="cl-acacac pl-2">+1</span></div>

                        <div class="pl-3"><input type="search" class="bg-transparent outline-none border-0 robotoRegular f-21" placeholder="Your phone number" /></div>
                    </div>
                    <div class="ml-3"><button type="button" class="btn btn-dark bg-transparent pt-3 pb-3 pl-4 pr-4 border-ffffff robotoMedium">Download</button></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- S E V E N T H    S E C T I O N  E N d -->

@endsection {{-- content section end --}} 
{{-- footer section start --}} 
@section('extra-script') 
<script>
    $('.search-btn').on('click',function(){
        if($('.search').val() == ''){
            return false
        }
    })
</script>
@endsection {{-- footer section end --}}
