@extends('layouts.frontend.app')
@section('title','Home')
{{-- head start --}}

@section('extra-css')

<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/index.css') }}">
<style type="text/css">
    .dropdown-toggle::after {
        display: none;
    }

    /* .dropdown-menu::before{

            display: inline-block;
            width: 0;
            height: 0;
            margin-left: .255em;
            vertical-align: .255em;
            content: "";
            border-top: .3em solid;
            border-right: .3em solid transparent;
            border-bottom: 0;
            border-left: .3em solid transparent;

        } */

</style>
@endsection
{{-- head end --}}


{{-- content section start --}}

@section('content')

<section class=" main_padding bg-navbar nav-bg-img pb-5">
    @include('includes.frontend.navbar')
    {{-- <nav class="navbar navbar-expand-lg navbar-light pt-3 pl-0 pr-0">
        <a class="navbar-brand" href="#"><img src="{{ asset('assets/frontend/images/navlogo.png') }}" class="img-fluid"
    alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <form class="form-inline my-2 my-lg-0 ml-auto cl-ffffff robotoRegular">
            <a href="{{route('login')}}"
                class="btn btn-outline-success border-0 my-2 my-sm-0 pt-2 pb-2 cl-ffffff  login_button"
                type="submit">Log In</a>
            <a href="{{route('register')}}"
                class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574 mr-3 ml-3 login_button"
                type="submit">Sign up</a><span>Business?</span>
        </form>
    </div>
    </nav> --}}
    <div class="text-center"><img src="{{ asset('assets/frontend/images/nav_2.png') }}" class="img-fluid" alt=""></div>
    <div class="text-center pt-4">
        <p class="m-0 cl-ffffff robotoLight f-26 index_para">Book a virtual appointment with service professionals
            worldwide
        </p>
    </div>
    <div class="text-center pt-4 pb-4"><img src="{{ asset('assets/frontend/images/curve.png') }}" alt=""></div>
    <div class="d-flex justify-content-center">
        <div class="row m-0 pt-3 pb-3 bg-0000006b d-flex w-43 justify-content-center align-items-cente">
            <div class="d-flex bg-ffffff w-81  pt-3 pb-3 borderRadius-5px pl-3">
                <div><img src="{{ asset('assets/frontend/images/search.png') }}" class="img-fluid" alt=""></div>

                <div class="pl-3"><input type="search" class="bg-transparent outline-none border-0 robotoRegular f-21 "
                        placeholder="Book your services..."></div>
            </div>
            {{-- <div class="d-flex bg-ffffff w-42  pt-3 pb-3 borderRadius-5px pl-3 ml-3 mr-3">
                <div><img src="{{ asset('assets/frontend/images/location.png') }}" class="img-fluid" alt="">
        </div>

        <div class="pl-3"><input type="search" class="bg-transparent outline-none border-0 robotoRegular f-21 "
                placeholder="Near?"></div>
    </div> --}}
    <div class="pl-3"> <button class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574  pt-3 pb-3 pl-3 pr-3"
            type="submit"><img src="{{ asset('assets/frontend/images/search2.png') }}" alt=""></button></div>

    </div>
    </div>
</section>


<!-- 2 N D S E C T I O N -->

<section class=" main_padding pt-5">
    <div>
        <ul class="listStyle-none p-0  d-flex justify-content-between robotoRegular f-18 ul_main_tabs m-0">
            <li> <a href="##" class="cl-3b3b3b3">Hair Salon</a></li>
            <li> <a href="##" class="cl-3b3b3b3">Barbershop</a></li>
            <li> <a href="" class="cl-3b3b3b3">Nail Salon</a></li>
            <li> <a href="" class="cl-3b3b3b3">Beauty Salon</a></li>
            <li> <a href="" class="cl-3b3b3b3">Eyebrows & Lashes</a></li>
            <li> <a href="" class="cl-3b3b3b3">Massage</a></li>
            <li> <a href="" class="cl-3b3b3b3">Makeup Artist</a></li>
            <li> <a href="" class="cl-3b3b3b3">Day Spa</a></li>
            <li> <a href="" class="cl-3b3b3b3">More..</a></li>

        </ul>
    </div>
</section>



<!-- 2 N D S E C T I O N E N D  -->

<!-- T H I R D S E C T I O N -->


<section class=" main_padding pt-70 text-center">
    <p class="main_title RobotoMedium f-34 cl-000000 fw-600 m-0 ">Popular Services</p>
    <p class="f-21 m-0 pt-3 cl-616161 robotoRegular ">Discover the best services that are offered virtually.</p>
    <img src="{{ asset('assets/frontend/images/greencurve.png') }}" class="img-fluid pt-3" alt="">
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
                                <img class="card-img"
                                    src="{{ asset('assets/frontend/images/istock-1147195672-1.png') }}"
                                    alt="Card image">
                                <div
                                    class="card-img-overlay borderRadius-12px p-0 cl-ffffff bg_gradient_card_footer pl-3 pt-3 pb-3">
                                    <h5 class="card-title f-26 m-0">Website Developer</h5>
                                    <p class="card-text f-18 m-0 pt-1">Customize your site</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="card border-0 text-white borderRadius-12px">
                                <img class="card-img"
                                    src="{{ asset('assets/frontend/images/feature-article-investment-banking-101-what-it-is-and-what-investment-bankers-actually-do-838x484-2019.png') }}"
                                    alt="Card image">
                                <div
                                    class="card-img-overlay borderRadius-12px p-0 cl-ffffff bg_gradient_card_footer pl-3 pt-3 pb-3">
                                    <h5 class="card-title f-26 m-0">Social Media</h5>
                                    <p class="card-text f-18 m-0 pt-1">Reach more customers</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="card border-0 text-white borderRadius-12px">
                                <img class="card-img" src="{{ asset('assets/frontend/images/create-logos-1.png') }}"
                                    alt="Card image">
                                <div
                                    class="card-img-overlay borderRadius-12px p-0 cl-ffffff bg_gradient_card_footer pl-3 pt-3 pb-3">
                                    <h5 class="card-title f-26 m-0">Logo Design</h5>
                                    <p class="card-text f-18 m-0 pt-1">Build your brand</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="card border-0 text-white borderRadius-12px">
                                <img class="card-img" src="{{ asset('assets/frontend/images/maxresdefault-2.png') }}"
                                    alt="Card image">
                                <div
                                    class="card-img-overlay borderRadius-12px p-0 cl-ffffff bg_gradient_card_footer pl-3 pt-3 pb-3">
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
                                <img class="card-img"
                                    src="{{ asset('assets/frontend/images/istock-1147195672-1.png') }}"
                                    alt="Card image">
                                <div
                                    class="card-img-overlay borderRadius-12px p-0 cl-ffffff bg_gradient_card_footer pl-3 pt-3 pb-3">
                                    <h5 class="card-title f-26 m-0">Website Developer</h5>
                                    <p class="card-text f-18 m-0 pt-1">Customize your site</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="card border-0 text-white borderRadius-12px">
                                <img class="card-img"
                                    src="{{ asset('assets/frontend/images/feature-article-investment-banking-101-what-it-is-and-what-investment-bankers-actually-do-838x484-2019.png') }}"
                                    alt="Card image">
                                <div
                                    class="card-img-overlay borderRadius-12px p-0 cl-ffffff bg_gradient_card_footer pl-3 pt-3 pb-3">
                                    <h5 class="card-title f-26 m-0">Social Media</h5>
                                    <p class="card-text f-18 m-0 pt-1">Reach more customers</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="card border-0 text-white borderRadius-12px">
                                <img class="card-img"
                                    src="{{ asset('assets/frontend/images/feature-article-investment-banking-101-what-it-is-and-what-investment-bankers-actually-do-838x484-2019.png') }}"
                                    alt="Card image">
                                <div
                                    class="card-img-overlay borderRadius-12px p-0 cl-ffffff bg_gradient_card_footer pl-3 pt-3 pb-3">
                                    <h5 class="card-title f-26 m-0">Logo Design</h5>
                                    <p class="card-text f-18 m-0 pt-1">Build your brand</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="card border-0 text-white borderRadius-12px">
                                <img class="card-img"
                                    src="{{ asset('assets/frontend/images/feature-article-investment-banking-101-what-it-is-and-what-investment-bankers-actually-do-838x484-2019.png') }}"
                                    alt="Card image">
                                <div
                                    class="card-img-overlay borderRadius-12px p-0 cl-ffffff bg_gradient_card_footer pl-3 pt-3 pb-3">
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
                                <img class="card-img"
                                    src="{{ asset('assets/frontend/images/feature-article-investment-banking-101-what-it-is-and-what-investment-bankers-actually-do-838x484-2019.png') }}"
                                    alt="Card image">
                                <div
                                    class="card-img-overlay borderRadius-12px p-0 cl-ffffff bg_gradient_card_footer pl-3 pt-3 pb-3">
                                    <h5 class="card-title f-26 m-0">Website Developer</h5>
                                    <p class="card-text f-18 m-0 pt-1">Customize your site</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="card border-0 text-white borderRadius-12px">
                                <img class="card-img"
                                    src="{{ asset('assets/frontend/images/feature-article-investment-banking-101-what-it-is-and-what-investment-bankers-actually-do-838x484-2019.png') }}"
                                    alt="Card image">
                                <div
                                    class="card-img-overlay borderRadius-12px p-0 cl-ffffff bg_gradient_card_footer pl-3 pt-3 pb-3">
                                    <h5 class="card-title f-26 m-0">Social Media</h5>
                                    <p class="card-text f-18 m-0 pt-1">Reach more customers</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="card border-0 text-white borderRadius-12px">
                                <img class="card-img"
                                    src="{{ asset('assets/frontend/images/feature-article-investment-banking-101-what-it-is-and-what-investment-bankers-actually-do-838x484-2019.png') }}"
                                    alt="Card image">
                                <div
                                    class="card-img-overlay borderRadius-12px p-0 cl-ffffff bg_gradient_card_footer pl-3 pt-3 pb-3">
                                    <h5 class="card-title f-26 m-0">Logo Design</h5>
                                    <p class="card-text f-18 m-0 pt-1">Build your brand</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="card border-0 text-white borderRadius-12px">
                                <img class="card-img"
                                    src="{{ asset('assets/frontend/images/feature-article-investment-banking-101-what-it-is-and-what-investment-bankers-actually-do-838x484-2019.png') }}"
                                    alt="Card image">
                                <div
                                    class="card-img-overlay borderRadius-12px p-0 cl-ffffff bg_gradient_card_footer pl-3 pt-3 pb-3">
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
            <img src="{{ asset('assets/frontend/images/pexels-anastasia-shuraeva-4210037.png') }}" class="img-fluid"
                alt="" srcset="">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 pl-5 pl-0">
            <div>
                <p class="m-0 f-44 RobotoMedium cl-3ac754 fw-600 sixColumnTilte f-16">Engage with a network of global
                    independent specialists right at your fingertips. </p>
                <div class="d-flex">
                    <div class="m-0 d-flex justify-content-center align-items-center pt-1"><img
                            src="{{ asset('assets/frontend/images/tick.png') }}" alt="" srcset=""></div>
                    <div class="m-0 f-34 fw-600 cl-000000 pl-3 RobotoMedium sixColumnMiniTitle f-16">Post a Job hire a
                        specialist</div>
                </div>
                <p class="m-0 cl-707070 robotoRegular f-21 pt-1 sixColumnMiniPara f-16">Simply post a virtual job you
                    need completed within specific date/times and receive competitive bids from specialists. </p>
                <!-- 2 -->
                <div class="pt-2">
                    <div class="d-flex">
                        <div class="m-0 d-flex justify-content-center align-items-center pt-1"><img
                                src="{{ asset('assets/frontend/images/tick.png') }}" alt="" srcset=""></div>
                        <div class="m-0 f-34 fw-600 cl-000000 pl-3 RobotoMedium sixColumnMiniTitle f-16">Hire expert
                            specialists without breaking the bank</div>
                    </div>
                    <p class="m-0 cl-707070 robotoRegular f-21 pt-1 sixColumnMiniPara f-16">Keep within your budget with
                        our bidding features. By naming your own price, our premium specialist marketplace will assist
                        in orchestrating your need on your terms.</p>
                </div>
                <!-- 3 -->
                <div class="pt-2">
                    <div class="d-flex">
                        <div class="m-0 d-flex justify-content-center align-items-center pt-1"><img
                                src="{{ asset('assets/frontend/images/tick.png') }}" alt="" srcset=""></div>
                        <div class="m-0 f-34 fw-600 cl-000000 pl-3 RobotoMedium sixColumnMiniTitle f-16">Pay Safely and
                            Securely</div>
                    </div>
                    <p class="m-0 cl-707070 robotoRegular f-21 pt-1 sixColumnMiniPara f-16">
                        You'll always know what you'll pay upfront. Your payment isn't released until your appointment
                        is completed.
                    </p>
                </div>
                <!-- 4 -->
                <div class="pt-2">
                    <div class="d-flex">
                        <div class="m-0 d-flex justify-content-center align-items-center pt-1"><img
                                src="{{ asset('assets/frontend/images/tick.png') }}" alt="" srcset=""></div>
                        <div class="m-0 f-34 fw-600 cl-000000 pl-3 RobotoMedium sixColumnMiniTitle f-16">Contact us
                            anytime
                        </div>
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


<section class=" main_padding pt-70  text-center">
    <p class="main_title RobotoMedium f-34 cl-000000 fw-600 m-0 ">Check Out These Specialists</p>
    <p class="f-21 m-0 pt-3 cl-616161 robotoRegular ">Discover some of most talented specialists around the globe.</p>
    <img src="{{ asset('assets/frontend/images/greencurve.png') }}" class="img-fluid pt-3" alt="">
</section>


<!-- F I F T H     S E C T I O N E N D  -->

<!-- S I X T H     S E C T I O N  S T A R T -->

<section class="main_padding pt-70">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

         <div class="carousel-inner row w-100 mx-auto">
            @foreach($products->chunk(7) as $productCollections)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">

                    <div class="row">
                        @foreach($productCollections as $product)
                         <div class="col mx-1 my-5">
                            <img class="img-fluid" width="200" heibght="350" src="{{ asset('uploads/product/' . $product->image) }}" alt="{{ $product->name }}">
                         </div>
                        @endforeach
                    </div>

                </div>
            @endforeach
        </div>

        <div class="carousel-inner h-413">
            <div class="carousel-item active">
                <section class="d-block w-100">
                    <div class="row m-0">
                        <div class="col-md-3 col-lg-3 col-sm-12">
                            <div class="card border-0 box_shadow">
                                <img src="{{ asset('assets/frontend/images/86d75f5ebf6abc13a630dda33b292727.png') }}"
                                    class="card-img-top" alt="...">
                                <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                    <img src="{{ asset('assets/frontend/images/19uk2-superdry-men-maroon-printed-round-neck-sports-t-shirt_500x500_0.png') }}"
                                        alt="" srcset="">
                                </div>
                                <div class="card-footer  bg-ffffff pt-4 pb-4">
                                    <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Illustration</h5>
                                    <p class="card-text m-0 robotoRegular cl-6 cl-6b6b6b f-21 pt-1">By graphics colors
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-12">
                            <div class="card border-0 box_shadow">
                                <img src="{{ asset('assets/frontend/images/tumblr_inline_pirp24H8TJ1u6e51h_1280.png') }}"
                                    class="card-img-top" alt="...">
                                <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                    <img src="{{ asset('assets/frontend/images/gotprint-custom-t-shirt-ideas_5.png') }}"
                                        alt="" srcset="">
                                </div>
                                <div class="card-footer  bg-ffffff pt-4 pb-4">
                                    <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Illustration</h5>
                                    <p class="card-text m-0 robotoRegular cl-6 cl-6b6b6b f-21 pt-1">By graphics colors
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-12">
                            <div class="card border-0 box_shadow">
                                <img src="{{ asset('assets/frontend/images/article_full@1x.png') }}"
                                    class="card-img-top" alt="...">
                                <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                    <img src="{{ asset('assets/frontend/images/upload9223368955665502610.png') }}"
                                        alt="" srcset="">
                                </div>
                                <div class="card-footer  bg-ffffff pt-4 pb-4">
                                    <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Illustration</h5>
                                    <p class="card-text m-0 robotoRegular cl-6 cl-6b6b6b f-21 pt-1">By graphics colors
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-12">
                            <div class="card border-0 box_shadow">
                                <img src="{{ asset('assets/frontend/images/ipad.png') }}" class="card-img-top"
                                    alt="...">
                                <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                    <img src="{{ asset('assets/frontend/images/gotprint-custom-t-shirt-ideas_5.png') }}"
                                        alt="" srcset="">
                                </div>
                                <div class="card-footer  bg-ffffff pt-4 pb-4">
                                    <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Illustration</h5>
                                    <p class="card-text m-0 robotoRegular cl-6 cl-6b6b6b f-21 pt-1">By graphics colors
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>

            </div>
            <div class="carousel-item">
                <section class="d-block w-100">
                    <div class="row m-0">
                        <div class="col-md-3 col-lg-3 col-sm-12">
                            <div class="card border-0 box_shadow">
                                <img src="{{ asset('assets/frontend/images/86d75f5ebf6abc13a630dda33b292727.png') }}"
                                    class="card-img-top" alt="...">
                                <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                    <img src="{{ asset('assets/frontend/images/19uk2-superdry-men-maroon-printed-round-neck-sports-t-shirt_500x500_0.png') }}"
                                        alt="" srcset="">
                                </div>
                                <div class="card-footer  bg-ffffff pt-4 pb-4">
                                    <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Illustration</h5>
                                    <p class="card-text m-0 robotoRegular cl-6 cl-6b6b6b f-21 pt-1">By graphics colors
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-12">
                            <div class="card border-0 box_shadow">
                                <img src="{{ asset('assets/frontend/images/86d75f5ebf6abc13a630dda33b292727.png') }}"
                                    class="card-img-top" alt="...">
                                <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                    <img src="{{ asset('assets/frontend/images/upload9223368955665502610.png') }}"
                                        alt="" srcset="">
                                </div>
                                <div class="card-footer  bg-ffffff pt-4 pb-4">
                                    <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Illustration</h5>
                                    <p class="card-text m-0 robotoRegular cl-6 cl-6b6b6b f-21 pt-1">By graphics colors
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-12">
                            <div class="card border-0 box_shadow">
                                <img src="{{ asset('assets/frontend/images/86d75f5ebf6abc13a630dda33b292727.png') }}"
                                    class="card-img-top" alt="...">
                                <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                    <img src="{{ asset('assets/frontend/images/upload9223368955665502610.png') }}"
                                        alt="" srcset="">
                                </div>
                                <div class="card-footer  bg-ffffff pt-4 pb-4">
                                    <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Illustration</h5>
                                    <p class="card-text m-0 robotoRegular cl-6 cl-6b6b6b f-21 pt-1">By graphics colors
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-12">
                            <div class="card border-0 box_shadow">
                                <img src="{{ asset('assets/frontend/images/86d75f5ebf6abc13a630dda33b292727.png') }}"
                                    class="card-img-top" alt="...">
                                <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                    <img src="{{ asset('assets/frontend/images/upload9223368955665502610.png') }}"
                                        alt="" srcset="">
                                </div>
                                <div class="card-footer  bg-ffffff pt-4 pb-4">
                                    <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Illustration</h5>
                                    <p class="card-text m-0 robotoRegular cl-6 cl-6b6b6b f-21 pt-1">By graphics colors
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>

            </div>
            <div class="carousel-item">
                <section class="d-block w-100">
                    <div class="row m-0">
                        <div class="col-md-3 col-lg-3 col-sm-12">
                            <div class="card border-0 box_shadow">
                                <img src="{{ asset('assets/frontend/images/86d75f5ebf6abc13a630dda33b292727.png') }}"
                                    class="card-img-top" alt="...">
                                <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                    <img src="{{ asset('assets/frontend/images/upload9223368955665502610.png') }}"
                                        alt="" srcset="">
                                </div>
                                <div class="card-footer  bg-ffffff pt-4 pb-4">
                                    <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Illustration</h5>
                                    <p class="card-text m-0 robotoRegular cl-6 cl-6b6b6b f-21 pt-1">By graphics colors
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-12">
                            <div class="card border-0 box_shadow">
                                <img src="{{ asset('assets/frontend/images/86d75f5ebf6abc13a630dda33b292727.png') }}"
                                    class="card-img-top" alt="...">
                                <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                    <img src="{{ asset('assets/frontend/images/upload9223368955665502610.png') }}"
                                        alt="" srcset="">
                                </div>
                                <div class="card-footer  bg-ffffff pt-4 pb-4">
                                    <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Illustration</h5>
                                    <p class="card-text m-0 robotoRegular cl-6 cl-6b6b6b f-21 pt-1">By graphics colors
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-12">
                            <div class="card border-0 box_shadow">
                                <img src="{{ asset('assets/frontend/images/86d75f5ebf6abc13a630dda33b292727.png') }}"
                                    class="card-img-top" alt="...">
                                <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                    <img src="{{ asset('assets/frontend/images/upload9223368955665502610.png') }}"
                                        alt="" srcset="">
                                </div>
                                <div class="card-footer  bg-ffffff pt-4 pb-4">
                                    <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Illustration</h5>
                                    <p class="card-text m-0 robotoRegular cl-6 cl-6b6b6b f-21 pt-1">By graphics colors
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-12">
                            <div class="card border-0 box_shadow">
                                <img src="{{ asset('assets/frontend/images/86d75f5ebf6abc13a630dda33b292727.png') }}"
                                    class="card-img-top" alt="...">
                                <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                    <img src="{{ asset('assets/frontend/images/upload9223368955665502610.png') }}"
                                        alt="" srcset="">
                                </div>
                                <div class="card-footer  bg-ffffff pt-4 pb-4">
                                    <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Illustration</h5>
                                    <p class="card-text m-0 robotoRegular cl-6 cl-6b6b6b f-21 pt-1">By graphics colors
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>

            </div>
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
    <div class="card img-fluid text-center border-0"> <img class="card-img-top w-100 bg-linear-gradient"
            src="{{ asset('assets/frontend/images/banner.png') }}" alt="Card image">
        <div
            class="banner-content cl-fff d-flex justify-content-center flex-column align-items-center father-day-banner-styling">
            <div class="main_Div">
                <div class="d-flex justify-content-center">
                    <div><img src="{{ asset('assets/frontend/images/Webp.net-resizeimage (1).png') }}" alt=""></div>
                    <div class="f-21 cl-ffffff robotoRegular pl-3 d-flex align-items-center"><div class="d-flex"><div>learnmelive</div> <div class="pl-4 pr-0"><ul class="p-0"><li></li></ul></div><div class="">IOS, Android</div> </div>
                    </div>
                </div>
                <div class="robotoMedium cl-ffffff f-35 pt-2">Download our app to book you next</div>
                <div class="robotoMedium cl-ffffff f-35 pt-1">appointment anytime, anywhere.</div>
                <div class="d-flex pt-4">
                    <div class="d-flex bg-ffffff align-items-center borderRadius-5px pl-3 w-75">
                        <div><img src="{{ asset('assets/frontend/images/usa.png') }}" class="img-fluid" alt=""><span
                                class="cl-acacac pl-2">+1</span></div>

                        <div class="pl-3"><input type="search"
                                class="bg-transparent outline-none border-0 robotoRegular f-21 "
                                placeholder="Your phone number"></div>

                    </div>
                    <div class="ml-3"><button type="button"
                            class="btn btn-dark bg-transparent pt-3 pb-3 pl-4 pr-4 border-ffffff robotoMedium">Download</button>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
<!-- S E V E N T H    S E C T I O N  E N d -->


<!-- E I G H T    S E C T I O N  S T A R T -->
<section class="main_padding pt-70  w-100">
    <div class="w-100 border-bcbcbc"></div>
</section>

<!-- E I G H T    S E C T I O N  E N D  -->

<!-- N I N E    S E C T I O N  S T A R T -->
<section class="main_padding pt-70  w-100">
    <div class="row m-0 justify-content-between">
        <div>
            <h4 class="m-0 cl-000000 robotoMedium f-26">Categories</h4>
            <ul class="p-0 robotoRegular footerUl">
                <li class="listStyle-none pt-4"><a href="" class="f-21 cl-6b6b6b">Graphics & Design</a></li>
                <li class="listStyle-none pt-4"><a href="" class="f-21 cl-6b6b6b">Digital Marketing</a></li>
                <li class="listStyle-none pt-4"><a href="" class="f-21 cl-6b6b6b">Business</a></li>
                <li class="listStyle-none pt-4"><a href="" class="f-21 cl-6b6b6b">Lifestyle</a></li>
                <li class="listStyle-none pt-4"><a href="" class="f-21 cl-6b6b6b">Sitemap</a></li>

            </ul>

        </div>
        <div>
            <h4 class="m-0 cl-000000 robotoMedium  f-26">About</h4>
            <ul class="p-0 robotoRegular footerUl">
                <li class="listStyle-none pt-4"><a href="" class="f-21 cl-6b6b6b">Careers</a></li>
                <li class="listStyle-none pt-4"><a href="" class="f-21 cl-6b6b6b">Partnerships</a></li>
                <li class="listStyle-none pt-4"><a href="" class="f-21 cl-6b6b6b">Privacy Policy</a></li>
                <li class="listStyle-none pt-4"><a href="" class="f-21 cl-6b6b6b">Terms of Service</a></li>
                <li class="listStyle-none pt-4"><a href="" class="f-21 cl-6b6b6b">Investor Relations</a></li>

            </ul>
        </div>
        <div>
            <h4 class="m-0 cl-000000 robotoMedium f-26">Support</h4>
            <ul class="p-0 robotoRegular footerUl">
                <li class="listStyle-none pt-4"><a href="" class="f-21 cl-6b6b6b">Help & Support</a></li>
                <li class="listStyle-none pt-4"><a href="" class="f-21 cl-6b6b6b">Trust & Safety</a></li>
                <li class="listStyle-none pt-4"><a href="" class="f-21 cl-6b6b6b">Selling</a></li>
                <li class="listStyle-none pt-4"><a href="" class="f-21 cl-6b6b6b">Buying </a></li>


            </ul>
        </div>
        <div>
            <h4 class="m-0 cl-000000 robotoMedium f-26">Community</h4>
            <ul class="p-0 robotoRegular footerUl">
                <li class="listStyle-none pt-4"><a href="" class="f-21 cl-6b6b6b">Events</a></li>
                <li class="listStyle-none pt-4"><a href="" class="f-21 cl-6b6b6b">Blog</a></li>
                <li class="listStyle-none pt-4"><a href="" class="f-21 cl-6b6b6b">Forum</a></li>
                <li class="listStyle-none pt-4"><a href="" class="f-21 cl-6b6b6b">Podcast</a></li>
                <li class="listStyle-none pt-4"><a href="" class="f-21 cl-6b6b6b">Affiliates
                    </a></li>


            </ul>
        </div>

        <div class="col-md-2 p-0">
            {{-- <div>
                <h4 class="m-0 cl-000000 robotoMedium f-26">Join Us On</h4>
            </div>
            <div class="pt-4"> <input type="email" placeholder="Enter your email..."
                    class="robotoRegular cl-6b6b6b    bg-transparent footer_input pt-2 pb-2 pl-3 w-100 rounded">
            </div>
            <div class="pt-3"><button class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574 w-100 rounded"
                    type="submit">Submit</button></div> --}}

            <div>
                <h4 class="m-0 cl-000000 robotoMedium f-26">Apps</h4>

            </div>
         
            <div class="pt-3"><img
            src="{{ asset('assets/frontend/images/appstore_2x.png') }}"
            alt="" srcset=""></div>
            <div class="pt-3"><img
            src="{{ asset('assets/frontend/images/playstore_2x.png') }}"
            alt="" srcset=""></div>
         
         
            
          
            <div class="f-26 cl-bcbcbc pt-3 footerUl">Follow us On</div>
            <div class="d-flex pt-3">
                <div><a href=""><img src="{{ asset('assets/frontend/images/fb.png') }}" class="img-fluid"></a></div>
                <div class="pl-3"><a href=""><img src="{{ asset('assets/frontend/images/insta.png') }}" alt=""
                            srcset=""></a></div>
                <div class="pl-3"><a href=""><img src="{{ asset('assets/frontend/images/twitter.png') }}" alt=""
                            srcset=""></a></div>
                <div class="pl-3"><a href=""><img src="{{ asset('assets/frontend/images/linkdin.png') }}" alt=""
                            srcset=""></a></div>
            </div>
            </div>
        </div>
</section>

<!-- N I N E    S E C T I O N  E N D  -->

<!-- T E N    S E C T I O N  S T A R T  -->
<section class="main_padding bg-4b4b4b4 mt-5 pt-4 pb-4">
    <div class="d-flex justify-content-center  align-items-center"><img
            src="{{ asset('assets/frontend/images/Copyright © 2021 learnmelive, All Right Reserved learnmelive.png') }}"
            alt="" srcset=""></div>
</section>

<!-- T E N    S E C T I O N  E N D  -->


@endsection

{{-- content section end --}}

{{-- footer section start --}}


@section('extra-script')

@endsection

{{-- footer section end --}}
