@extends('layouts.frontend.app')
@section('title','Specialist Detail')
{{-- head start --}}

@section('extra-css')



<style type="text/css">
    .dropdown-toggle::after {
        display: none;
    }






    #clock.light .digits div span {
        background-color: #fff;
        border-color: #fff;
    }

    #clock.light .digits div.dots:before,
    #clock.light .digits div.dots:after {
        background-color: #fff;
    }



    #clock .digits div {
        text-align: left;
        position: relative;
        width: 28px;
        height: 25px;
        display: inline-block;
        /* margin:0 4px; */
    }

    #clock .digits div span {
        opacity: 0;
        position: absolute;

        -webkit-transition: 0.25s;
        -moz-transition: 0.25s;
        transition: 0.25s;
    }

    #clock .digits div span:before,
    #clock .digits div span:after {
        content: '';
        position: absolute;
        width: 0;
        height: 0;
        border: 5px solid transparent;
    }

    #clock .digits .d1 {
        height: 5px;
        width: 2px;
        top: 0;
        left: 20px;
    }

    #clock .digits .d1:before {
        border-width: 0 5px 5px 0;
        border-right-color: inherit;
        left: -5px;
    }

    #clock .digits .d1:after {
        border-width: 0 0 5px 5px;
        border-left-color: inherit;
        right: -5px;
    }

    #clock .digits .d2 {
        height: 5px;
        width: 2px;
        top: 12px;
        left: 20px;
    }

    #clock .digits .d2:before {
        border-width: 3px 4px 2px;
        border-right-color: inherit;
        left: -8px;
    }

    #clock .digits .d2:after {
        border-width: 3px 4px 2px;
        border-left-color: inherit;
        right: -8px;
    }

    #clock .digits .d3 {
        height: 5px;
        width: 2px;
        top: 24px;
        left: 20px;
    }

    #clock .digits .d3:before {
        border-width: 5px 5px 0 0;
        border-right-color: inherit;
        left: -5px;
    }

    #clock .digits .d3:after {
        border-width: 5px 0 0 5px;
        border-left-color: inherit;
        right: -5px;
    }

    #clock .digits .d4 {
        width: 5px;
        height: 2px;
        top: 7px;
        left: 14px;
    }

    #clock .digits .d4:before {
        border-width: 0 5px 5px 0;
        border-bottom-color: inherit;
        top: -5px;
    }

    #clock .digits .d4:after {
        border-width: 0 0 5px 5px;
        border-left-color: inherit;
        bottom: -5px;
    }

    #clock .digits .d5 {
        width: 5px;
        height: 2px;
        top: 7px;
        right: 0;
    }

    #clock .digits .d5:before {
        border-width: 0 0 5px 5px;
        border-bottom-color: inherit;
        top: -5px;
    }

    #clock .digits .d5:after {
        border-width: 5px 0 0 5px;
        border-top-color: inherit;
        bottom: -5px;
    }

    #clock .digits .d6 {
        width: 5px;
        height: 2px;
        top: 20px;
        left: 14px;
    }

    #clock .digits .d6:before {
        border-width: 0 5px 5px 0;
        border-bottom-color: inherit;
        top: -5px;
    }

    #clock .digits .d6:after {
        border-width: 0 0 5px 5px;
        border-left-color: inherit;
        bottom: -5px;
    }

    #clock .digits .d7 {
        width: 5px;
        height: 2px;
        top: 20px;
        right: 0;
    }

    #clock .digits .d7:before {
        border-width: 0 0 5px 5px;
        border-bottom-color: inherit;
        top: -5px;
    }

    #clock .digits .d7:after {
        border-width: 5px 0 0 5px;
        border-top-color: inherit;
        bottom: -5px;
    }


    /* 1 */

    #clock .digits div.one .d5,
    #clock .digits div.one .d7 {
        opacity: 1;
    }

    /* 2 */

    #clock .digits div.two .d1,
    #clock .digits div.two .d5,
    #clock .digits div.two .d2,
    #clock .digits div.two .d6,
    #clock .digits div.two .d3 {
        opacity: 1;
    }

    /* 3 */

    #clock .digits div.three .d1,
    #clock .digits div.three .d5,
    #clock .digits div.three .d2,
    #clock .digits div.three .d7,
    #clock .digits div.three .d3 {
        opacity: 1;
    }

    /* 4 */

    #clock .digits div.four .d5,
    #clock .digits div.four .d2,
    #clock .digits div.four .d4,
    #clock .digits div.four .d7 {
        opacity: 1;
    }

    /* 5 */

    #clock .digits div.five .d1,
    #clock .digits div.five .d2,
    #clock .digits div.five .d4,
    #clock .digits div.five .d3,
    #clock .digits div.five .d7 {
        opacity: 1;
    }

    /* 6 */

    #clock .digits div.six .d1,
    #clock .digits div.six .d2,
    #clock .digits div.six .d4,
    #clock .digits div.six .d3,
    #clock .digits div.six .d6,
    #clock .digits div.six .d7 {
        opacity: 1;
    }


    /* 7 */

    #clock .digits div.seven .d1,
    #clock .digits div.seven .d5,
    #clock .digits div.seven .d7 {
        opacity: 1;
    }

    /* 8 */

    #clock .digits div.eight .d1,
    #clock .digits div.eight .d2,
    #clock .digits div.eight .d3,
    #clock .digits div.eight .d4,
    #clock .digits div.eight .d5,
    #clock .digits div.eight .d6,
    #clock .digits div.eight .d7 {
        opacity: 1;
    }

    /* 9 */

    #clock .digits div.nine .d1,
    #clock .digits div.nine .d2,
    #clock .digits div.nine .d3,
    #clock .digits div.nine .d4,
    #clock .digits div.nine .d5,
    #clock .digits div.nine .d7 {
        opacity: 1;
    }

    /* 0 */

    #clock .digits div.zero .d1,
    #clock .digits div.zero .d3,
    #clock .digits div.zero .d4,
    #clock .digits div.zero .d5,
    #clock .digits div.zero .d6,
    #clock .digits div.zero .d7 {
        opacity: 1;
    }


    /* The dots */

    #clock .digits div.dots {
        width: 5px;
    }

    #clock .digits div.dots:before,
    #clock .digits div.dots:after {
        width: 5px;
        height: 5px;
        content: '';
        position: absolute;
        left: 5px;
        top: 5px;
    }

    #clock .digits div.dots:after {
        top: 18px;
    }

    .h-513 {
        height: 513px !important;
    }

</style>
@endsection
{{-- head end --}}


{{-- content section start --}}

@section('content')

<section class="px-5 pt-2 pb-2 nav-bg-img robotoRegular">
    @include('includes.frontend.navbar')
</section>

@include('includes.frontend.navigations')

<section class="main_padding pt-70">
    <section class="bg_portfolioImg ">
        <div class="row m-0 pl-0 pr-0 pt-4 pb-4">
            <div class="col-md-6 col-lg-6">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    {{-- <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol> --}}
                    <div class="carousel-inner">
                        <div class="carousel-item active h-513">
                            <img src="{{ ($specialist->user->avatar != null) ? asset($specialist->user->avatar) : asset('assets/frontend/images/avatar-large.png')  }}"
                                class="d-block w-100 img-fluid h-100" alt="...">
                        </div>
                        {{-- <div class="carousel-item">
                <img src="{{ asset('assets/frontend/images/Group 152.png') }}" class="d-block w-100 img-fluid"
                        alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/frontend/images/Group 152.png') }}" class="d-block w-100 img-fluid"
                            alt="...">
                    </div> --}}
                </div>
                {{-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a> --}}
            </div>
        </div>
        <div class="col-md-5 col-lg-6 cl-ffffff pl-5 pr-5">
            <div class="d-flex justify-content-between align-items-center">
                <div class=" f-44 robotoMedium">{{ ucwords($specialist->user->username) }}</div>
                <div id="time"></div>

                {{-- <div id="clock" class="light">
                  <div class="display d-flex align-items-baseline">
                    <div class="digits"></div>
                    <div class="ampm ml-2"></div>
                  </div>
                </div> --}}
            </div>
            <div class="d-flex border-bottom pb-3">
                <div class="pr-3 robotoMedium">{{ ucwords($specialist->category->name) }}</div>
                @if($specialist->user->country)
                <div class="border-left"></div>
                <div class="pl-3 pr-3 robotoRegular">{{ ucfirst($specialist->user->country) }}</div>
                @endif

                @if($specialist->address !=null)
                <div class="border-left"></div>
                <div class="pl-3 robotoRegular">{{ ucfirst($specialist->address) }}</div>
                @endif

            </div>
            @if($specialist->description !=null)
            <div class="border-bottom pb-3">
                <div class="robotoMedium f-18 pt-3">About Me</div>
                <div class="robotoRegular f-18 text-justify pt-3">{{ucfirst($specialist->description)}}
                </div>
            </div>
            @endif

            @if($specialist->specifications !=null)
            <div class="border-bottom pb-3  f-18">
                <div class="robotoMedium pt-3">Specifications:</div>
                <div class="robotoRegular pt-3">Confirmed Appointment</div>
                <div class="robotoRegular pt-3">Timings Decided</div>

            </div>
            @endif

            @if($specialist->languages !=null)
                <div class="border-bottom pb-3 f-18">
                    <div class="robotoMedium pt-3">Languages</div>
                    <div class="d-flex pt-3  robotoRegular">
                        <div class="ml-3">
                            @foreach(json_decode($specialist->languages) as $language)
                                <div>{{ ucfirst($language) }}</div>
                            @endforeach
                            {{-- <div>English</div>
                            <div class="pt-3">French</div>
                            <div class="pt-3">Portuguese</div> --}}
                        </div>
                        {{-- <div class="pl-5">
                            <div>Primary</div>
                            <div class="pt-3">Secondary</div>
                            <div class="pt-3">Secondary</div>
                        </div> --}}
                    </div>
                </div>
            @endif

            @if(json_decode($specialist->opening_hours))
                <div class="border-bottom pb-3  f-18">
                    <div class="robotoMedium f-18 pt-3">Days & Hours of Availability</div>
                    @foreach(json_decode($specialist->opening_hours) as $key=>$value)

                    <div class="row ml-3">
                        <div class="col-md-3 text-left ">{{ ucfirst($key) }}</div>
                        <div class="col-md-3 text-center">
                            {{ getTimeZoneTime($specialist->user->time_zone,Auth::user()->time_zone,$key.' '.json_decode($specialist->opening_hours)->$key[0]) }}
                        </div>
                        <div class="col-md-3 text-center"> - </div>
                        <div class="col-md-3 text-center">
                            {{ getTimeZoneTime($specialist->user->time_zone,Auth::user()->time_zone,$key.' '.json_decode($specialist->opening_hours)->$key[1]) }}
                        </div>
                    </div>

                    @endforeach
                    {{-- <div class="robotoMedium pt-3">Specifications:</div>
                <div class="robotoRegular pt-3">Confirmed Appointment</div>
                <div class="robotoRegular pt-3">Timings Decided</div> --}}

                </div>
            @endif

            {{-- <div class=" pb-3 robotoMedium f-18">
            <div class="pt-3">Share:</div>
            <div class="d-flex pt-3">
            <div><img src="{{ asset('assets/frontend/images/Subtraction 1.png') }}" alt="" srcset="">
        </div>
        <div class="pl-3"><img src="{{ asset('assets/frontend/images/Group 1.png') }}" alt="" srcset=""></div>
        <div class="pl-3"><img src="{{ asset('assets/frontend/images/Group 2.png') }}" alt="" srcset=""></div>
        <div class="pl-3"> <img src="{{ asset('assets/frontend/images/Group 3.png') }}" alt="" srcset=""></div>
        @if($specialist->user->username)<div class="f-13 robotoMedium pl-3">
            {{ URL::to('/') }}/{{ $specialist->user->username }}</div>@endif
        </div>
        </div> --}}
        </div>
    </section>
</section>

@if($specialist->services->count() > 0)
<section class="main_padding pt-5">
    <div class="row m-0 p-0">
        <div class="robotoMedium cl-000000 f-34 pt-2 d-flex align-items-end">Services:</div>
        <div class="col-md-3 ml-auto p-0">
            <div class="d-flex m-0">
                <div class="pt-4 w-100">
                    <input type="text" placeholder="Search for services"
                        class="service_inpt robotoRegular h-44 cl-6b6b6b bg-transparent footer_input pt-2 pb-2 pl-3 w-100 rounded">
                </div>
                <div class="pt-4 pl-2">
                    <button
                        class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574  pt-2 pb-2 pl-2 pr-2 service_inpt_btn"
                        type="button" onclick="inputSearchServices();"><img
                            src="{{ asset('assets/frontend/images/Group 188.png ') }}" alt=""></button>
                </div>
            </div>
        </div>

        <div class="table-responsive tableFixHead table_scroll mt-5 border robotoRegular">
            <table id="boxes-list" class="table m-0 header-fixed">

                <thead class="sticky-top bg-white cl-3ac754 ">
                    <tr class="bg-white robotoRegular ">
                        <th scope="col">No</th>
                        <th scope="col">Service</th>
                        <th scope="col">Category</th>
                        <th scope="col">Subcategory</th>
                        <th scope="col">Duration</th>
                        <th scope="col">Rate</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="table_scroll services-table-body">
                    @foreach($specialist->services as $key=>$service)
                    <tr class="border-bottom">
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ ucwords($service->title) }}</td>
                        <td>{{ ucwords($service->category->name) }}</td>
                        @php
                        $subcategories =
                        App\SubCategory::whereIn('id',json_decode($service->sub_categories))->get()->pluck('name')->toArray();
                        @endphp
                        <td>{{ implode(',',array_map('ucwords',$subcategories)) }}</td>
                        <td>{{ $service->timing }} Minutes</td>
                        <td> ${{number_format(intval($service->rate)) }} (USD)</td>
                        <td>{{ $service->status }}</td>
                        <td><a href="{{ route('appointment_request',encrypt($service->id)) }}"
                                class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574  pl-5 pr-5 login_button">Book</a>
                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
</section>
@endif

@if($specialist->portfolios->count() >0 )
    <section class=" main_padding pt-70 text-center">
        <p class="main_title robotoMedium  f-34 cl-000000  m-0">Portfolio</p>
        <p class="f-21 m-0 pt-3 cl-616161 robotoRegular">The best and highly skilled Performance done previously</p>
        <img src="{{ asset('assets/frontend/images/greencurve.png') }}" class="img-fluid pt-3" alt="">
    </section>

    <section class=" main_padding pt-70 ">
        <div class="row m-0">
            @foreach ($specialist->portfolios->take(1) as $portfolio)
            <div class="col-lg-7 col-md-7 col-sm-12 pl-0 pr-0 bg_img_8 d-flex flex-column  justify-content-end"  >
                <img src="{{ asset($portfolio->image) }}" alt="" class="w-100 h-100 border-10">
            </div>
            @endforeach
            <div class="col-lg-5 col-md-5 col-sm-12 pr-0 d-flex flex-column justify-content-between">
                @foreach ($specialist->portfolios->skip(1)->take(2) as $portfolio)
                    <div class="bg_imgcol-5 d-flex flex-column  justify-content-end">
                        <img src="{{ asset($portfolio->image) }}" alt="" class="w-100 h-100 border-10">
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class=" main_padding pt-5 text-center">
        <a href="{{route('specialist_portfolio',encrypt($specialist->id))}}" class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574  pl-5 pr-5 " type="submit">See
            all</a>
    </section>
@endif


@if($specialist->ratings->count() > 0)
    <section class=" main_padding pt-5">
        <div class="row m-0">
            <div class="col-md-8 col-lg-8 pl-0">
                <div class="d-flex">
                    <div class="f-34 cl-000000 robotoMedium">Reviews</div>
                    <div class="d-flex align-items-center pl-4">
                        <div class="pl-2"><img src="{{ asset('assets/frontend/images/Path 70.png') }}" alt="" srcset=""></div>
                        <div class="pl-2"><img src="{{ asset('assets/frontend/images/Path 70.png') }}" alt="" srcset=""></div>
                        <div class="pl-2"><img src="{{ asset('assets/frontend/images/Path 70.png') }}" alt="" srcset=""></div>
                        <div class="pl-2"><img src="{{ asset('assets/frontend/images/Path 70.png') }}" alt="" srcset=""></div>
                        <div class="pl-2"><img src="{{ asset('assets/frontend/images/Path 70.png') }}" alt="" srcset=""></div>
                    </div>
                </div>
                <div class="w-75 f-21 RobotoRegular cl-616161 text-justify">Reviews are no joke! Booksy values authentic
                    reviews and only verifies them
                    if we know the reviewer has visited this business.
                </div>

                <!-- COMMENTS SECTION START -->
                @if (isset($specialist->ratings))
                    
                    @foreach ($specialist->ratings as $rating)
                        <div class="d-flex pt-5">
                            <div class="img_commentSection"><img src="{{ asset($rating->user->avatar) }}"
                                    alt="" srcset=""></div>
                            <div class="content_commentSection pl-4">
                                <div>
                                    <div class="d-flex">
                                        <div class="d-flex align-items-center pr-3">
                                            @php $r = "assets/frontend/images/rating/".$rating->rating.".png" @endphp
                                            <div class="pl-2"><img src="{{ asset($r) }}" alt="" srcset=""></div>
                                        </div>
                                        <div class="f-26 RobotoRegular cl-616161 borderLeft pl-3 pr-3 comment_SectionName">{{$rating->user->country}}</div>
                                        <div class="f-21 RobotoRegular cl-616161 borderLeft pl-3 comment_SectionDate">{{$rating->created_at->format('F d,Y')}}
                                        </div>
                                    </div>
                                </div>
                                <div class="w-75 f-26 RobotoRegular cl-616161 pt-3 text-justify Comment">{{ ucfirst($rating->description) }}</div>
                            </div>
                        </div>
                    @endforeach

                @endif
            <!-- 2 -->
            </div>
        </div>
        <div class="col-md-4 p-0">
            {{-- <section>
                <div class="row m-0 pt-2 card_boxShadow pt-4 pb-3">
                    <div class="col-md-5 text-center">
                        <div class="f-41 cl-616161 robotoRegular">5.0<span
                                class="robotoRegular f-16 cl-979797">/5</span></div>
                        <div class="d-flex align-items-center justify-content-center">
                            <div><img src="{{ asset('assets/frontend/images/Path 70.png') }}" alt="" srcset=""></div>
                            <div class="pl-2"><img src="{{ asset('assets/frontend/images/Path 70.png') }}" alt=""
                                    srcset=""></div>
                            <div class="pl-2"><img src="{{ asset('assets/frontend/images/Path 70.png') }}" alt=""
                                    srcset=""></div>
                            <div class="pl-2"><img src="{{ asset('assets/frontend/images/Path 70.png') }}" alt=""
                                    srcset=""></div>
                            <div class="pl-2"><img src="{{ asset('assets/frontend/images/Path 70.png') }}" alt=""
                                    srcset=""></div>



                        </div>
                        <div class="f-19 robotoRegular cl-a2a2a2 pt-3">150 reviews</div>
                    </div>

                    <div class="progressBarmainDiv robotoRegular cl-a2a2a2 col-md-7 pl-0">
                        <div class="d-flex align-items-center">
                            <div class="f-16 pr-2">5</div>
                            <div class="progress w-261 h-6px">
                                <div class="progress-bar bg-3ac574 borderRadius-12px" role="progressbar"
                                    style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="pl-2">85%</div>
                        </div>
                        <div class="d-flex align-items-center pt-2">
                            <div class="f-16 pr-2">4</div>
                            <div class="progress w-261 h-6px">
                                <div class="progress-bar bg-3ac574 borderRadius-12px" role="progressbar"
                                    style="width: 45%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="pl-2">40%</div>
                        </div>
                        <div class="d-flex align-items-center pt-2">
                            <div class="f-16 pr-2">3</div>
                            <div class="progress w-261 h-6px">
                                <div class=" borderRadius-12px" role="progressbar" style="width: 45%;"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>



                            <div class="pl-2">0</div>
                        </div>
                        <div class="d-flex align-items-center pt-2">
                            <div class="f-16 pr-2">2</div>
                            <div class="progress w-261 h-6px">
                                <div class=" borderRadius-12px" role="progressbar" style="width: 45%;"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>



                            <div class="pl-2">0</div>
                        </div>
                        <div class="d-flex align-items-center pt-2">
                            <div class="f-16 pr-2">1</div>
                            <div class="progress w-261 h-6px">
                                <div class=" borderRadius-12px" role="progressbar" style="width: 45%;"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>



                            <div class="pl-2">0</div>
                        </div>

                    </div>
                </div>
            </section> --}}
        </div>
    </section>
@endif












@endsection

{{-- content section end --}}

{{-- footer section start --}}


@section('extra-script')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<!-- JavaScript Includes -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.0.0/moment.min.js"></script>
<script type="text/javascript">
    function inputSearchServices() {
        let val = $('.service_inpt').val();
        $.ajax({
            url: "{{ route('getQueryServices') }}",
            type: "get",
            data: {
                val: val,
                id: {{$specialist->id}}
            },
            success: function (data) {
                $('.services-table-body').html(data);
            }
        });
    }

    $(document).keydown(function (e) {
        if (e.which === 13) {
            inputSearchServices();
        }
    });




    // $(document).ready(function() {
    //   clockUpdate();
    //   setInterval(clockUpdate, 1000);
    // })

    // function clockUpdate() {
    //   var date = new Date();
    //   $('.digital-clock').css({'color': '#fff', 'text-shadow': '0 0 6px #ff0'});
    //   function addZero(x) {
    //     if (x < 10) {
    //       return x = '0' + x;
    //     } else {
    //       return x;
    //     }
    //   }

    //   function twelveHour(x) {
    //     if (x > 12) {
    //       return x = x - 12;
    //     } else if (x == 0) {
    //       return x = 12;
    //     } else {
    //       return x;
    //     }
    //   }

    //   var h = addZero(twelveHour(date.getHours()));
    //   var m = addZero(date.getMinutes());
    //   var s = addZero(date.getSeconds());

    //   $('.digital-clock').text(h + ':' + m + ':' + s)
    // }



    $(function () {

        // Cache some selectors

        var clock = $('#clock'),
            alarm = clock.find('.alarm'),
            ampm = clock.find('.ampm');

        // Map digits to their names (this will be an array)
        var digit_to_name = 'zero one two three four five six seven eight nine'.split(' ');

        // This object will hold the digit elements
        var digits = {};

        // Positions for the hours, minutes, and seconds
        var positions = [
            'h1', 'h2', ':', 'm1', 'm2'
        ];

        // Generate the digits with the needed markup,
        // and add them to the clock

        var digit_holder = clock.find('.digits');

        $.each(positions, function () {

            if (this == ':') {
                digit_holder.append('<div class="dots">');
            } else {

                var pos = $('<div>');

                for (var i = 1; i < 8; i++) {
                    pos.append('<span class="d' + i + '">');
                }

                // Set the digits as key:value pairs in the digits object
                digits[this] = pos;

                // Add the digit elements to the page
                digit_holder.append(pos);
            }

        });

        // Add the weekday names

        var weekday_names = 'MON TUE WED THU FRI SAT SUN'.split(' '),
            weekday_holder = clock.find('.weekdays');

        $.each(weekday_names, function () {
            weekday_holder.append('<span>' + this + '</span>');
        });

        var weekdays = clock.find('.weekdays span');

        // Run a timer every second and update the clock

        (function update_time() {

            // Use moment.js to output the current time as a string
            // hh is for the hours in 12-hour format,
            // mm - minutes, ss-seconds (all with leading zeroes),
            // d is for day of week and A is for AM/PM

            var now = moment().format("hhmmssdA");

            digits.h1.attr('class', digit_to_name[now[0]]);
            digits.h2.attr('class', digit_to_name[now[1]]);
            digits.m1.attr('class', digit_to_name[now[2]]);
            digits.m2.attr('class', digit_to_name[now[3]]);
            // digits.s1.attr('class', digit_to_name[now[4]]);
            // digits.s2.attr('class', digit_to_name[now[5]]);

            // The library returns Sunday as the first day of the week.
            // Stupid, I know. Lets shift all the days one position down, 
            // and make Sunday last

            var dow = now[6];
            dow--;

            // Sunday!
            if (dow < 0) {
                // Make it last
                dow = 6;
            }

            // Mark the active day of the week
            weekdays.removeClass('active').eq(dow).addClass('active');

            // Set the am/pm text:
            ampm.text(now[7] + now[8]);

            // Schedule this function to be run again in 1 sec
            setTimeout(update_time, 1000);

        })();

        // Switch the theme

        $('a.button').click(function () {
            clock.toggleClass('light dark');
        });

    });


    // window.onload = function () {
    //     clock();

    //     function clock() {
    //         var now = new Date();
    //         var month = new Array();
    //         month[0] = "January";
    //         month[1] = "February";
    //         month[2] = "March";
    //         month[3] = "April";
    //         month[4] = "May";
    //         month[5] = "June";
    //         month[6] = "July";
    //         month[7] = "August";
    //         month[8] = "September";
    //         month[9] = "October";
    //         month[10] = "November";
    //         month[11] = "December";
    //         var n = month[now.getMonth() + 1];
    //         var TwentyFourHour = now.getHours();
    //         var hour = now.getHours();
    //         var min = now.getMinutes();
    //         var sec = now.getSeconds();
    //         var current_date = now.getDate();
    //         var mid = 'PM';
    //         if (min < 10) {
    //             min = "0" + min;
    //         }
    //         if (hour > 12) {
    //             hour = hour - 12;
    //         }
    //         if (hour == 0) {
    //             hour = 12;
    //         }
    //         if (TwentyFourHour < 12) {
    //             mid = 'AM';
    //         }
    //         document.getElementById('time').innerHTML = n + " " + current_date + ", " + hour + ':' + min + ' ' +
    //         mid;
    //         setTimeout(clock, 1000);
    //     }
    // }
    function formatDate(date)
    {
      var year = '',
      month = date.getMonth() + 1, // months are zero indexed
      day = date.getDate(),
      hour = date.getHours(),
      minute = date.getMinutes(),
      second = date.getSeconds(),
      hourFormatted = hour % 12 || 12, // hour returned in 24 hour format
      minuteFormatted = minute < 10 ? "0" + minute : minute,
      morning = hour < 12 ? "am" : "pm";
      return month + "/" + day + "/" + year + " " + hourFormatted + ":" +
              minuteFormatted + morning;
    }

    setInterval(function(){
      let l = "{{ $specialist->user->time_zone }}";
      let ampm = new Date().toLocaleTimeString('en-US', { timeZone: l }).split(' ');
      let tm = new Date().toLocaleTimeString('en-US', { timeZone: l }).split(":");
      let dt = new Date().toLocaleDateString('en-US', { timeZone: l}).split('/');
      let dtm = new Date().toLocaleDateString('en-US', { timeZone: l ,month:'long'}).split('/');
      let final = dtm+" "+dt[1]+" , "+tm['0']+":"+tm[1]+" "+ampm[1];
      document.getElementById('time').innerHTML =final;
    },1000);
</script>
@endsection

{{-- footer section end --}}
