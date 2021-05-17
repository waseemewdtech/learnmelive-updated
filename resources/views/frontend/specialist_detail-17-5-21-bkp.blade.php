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
                    <div class="carousel-inner">
                        <div class="carousel-item active h-513">
                            <img src="{{ ($specialist->picture != null) ? asset($specialist->picture) : asset('assets/frontend/images/avatar-large.png')  }}"
                                class="d-block w-100 img-fluid h-100" alt="...">
                        </div>
                </div>
            </div>
        </div>
        <div class="col-md-5 col-lg-6 cl-ffffff pl-5 pr-5">
            <div class="d-flex justify-content-between align-items-center">
                <div class=" f-44 robotoMedium">{{ ucwords($specialist->username) }}</div>
                <div id="time"></div>
            </div>
            <div class="d-flex border-bottom pb-3">
                <div class="pr-3 robotoMedium">{{ ucwords($category->title) }}</div>
                @if($specialist->country)
                <div class="border-left"></div>
                <div class="pl-3 pr-3 robotoRegular">{{ ucfirst($specialist->country) }}</div>
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

            @if($specialist->languages !=null)
                <div class="border-bottom pb-3 f-18">
                    <div class="robotoMedium pt-3">Languages</div>
                    <div class="d-flex pt-3  robotoRegular">
                        <div class="ml-3">
                            @foreach(explode(',',$specialist->languages) as $language)
                                <div>{{ ucfirst($language) }}</div>
                            @endforeach
                           
                        </div>
                    </div>
                </div>
            @endif
            
            @if($specialist->availableTime)
                <div class="border-bottom pb-3  f-18">
                    <div class="robotoMedium f-18 pt-3">Days & Hours of Availability</div>
                    @foreach(['mon','tue','wed','thr','fri','sat','sun'] as $d)
                        @if($specialist->availableTime->$d !="Closed")
                            @php $arr = explode('~',$specialist->availableTime->$d); @endphp
                            <div class="row ml-3">
                                <div class="col-md-3 text-left ">{{ ucfirst($d) }}</div>
                                <div class="col-md-3 text-center">
                                    {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', date('Y-m-d h:i:s',$arr[0]/1000),config('app.timezone'))->timezone(Auth::user()->timezone)->format('h:i A') }}
                                </div>
                                <div class="col-md-3 text-center"> - </div>
                                <div class="col-md-3 text-center">
                                    {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', date('Y-m-d h:i:s',$arr[1]/1000),config('app.timezone'))->timezone(Auth::user()->timezone)->format('h:i A') }}
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            @endif
        </div>
    </section>
</section>


@if($specialist->serviceCategories->count() >0)
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
                            <th scope="col">Service</th>
                            <th scope="col">Duration</th>
                            <th scope="col">Rate</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="table_scroll services-table-body">
                        @foreach($specialist->serviceCategories as $serviceCategory)

                            @if($specialist->serviceCategory->t_15!=null)

                                <tr class="border-bottom">
                                    <td>{{ ucwords($serviceCategory->name) }}</td>
                                    <td>15 Minutes</td>
                                    <td> ${{number_format(intval($serviceCategory->t_15)) }} (USD)</td>
                                    <td><a href="{{ route('appointment_request',encrypt($serviceCategory->id)) }}?time=15"
                                            class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574  pl-5 pr-5 login_button">Book</a>
                                    </td>
                                </tr>
                            @endif
                            @if($serviceCategory->t_30!=null)

                                <tr class="border-bottom">
                                    <td>{{ ucwords($serviceCategory->name) }}</td>
                                    <td>30 Minutes</td>
                                    <td> ${{number_format(intval($serviceCategory->t_30)) }} (USD)</td>
                                    <td><a href="{{ route('appointment_request',encrypt($serviceCategory->id)) }}?time=30"
                                            class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574  pl-5 pr-5 login_button">Book</a>
                                    </td>
                                </tr>
                            @endif
                            @if($serviceCategory->t_45!=null)

                                <tr class="border-bottom">
                                    <td>{{ ucwords($serviceCategory->name) }}</td>
                                    <td>45 Minutes</td>
                                    <td> ${{number_format(intval($serviceCategory->t_45)) }} (USD)</td>
                                    <td><a href="{{ route('appointment_request',encrypt($serviceCategory->id)) }}?time=45"
                                            class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574  pl-5 pr-5 login_button">Book</a>
                                    </td>
                                </tr>
                            @endif
                            @if($serviceCategory->t_60!=null)

                                <tr class="border-bottom">
                                    <td>{{ ucwords($serviceCategory->name) }}</td>
                                    <td>60 Minutes</td>
                                    <td> ${{number_format(intval($serviceCategory->t_60)) }} (USD)</td>
                                    <td><a href="{{ route('appointment_request',encrypt($serviceCategory->id)) }}?time=60"
                                            class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574  pl-5 pr-5 login_button">Book</a>
                                    </td>
                                </tr>
                            @endif  

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
                <img src="{{ $portfolio->image }}" alt="" class="w-100 h-100 border-10">
            </div>
            @endforeach
            <div class="col-lg-5 col-md-5 col-sm-12 pr-0 d-flex flex-column justify-content-between">
                @foreach ($specialist->portfolios->skip(1)->take(2) as $portfolio)
                    <div class="bg_imgcol-5 d-flex flex-column  justify-content-end">
                        <img src="{{ $portfolio->image }}" alt="" class="w-100 h-100 border-10">
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


{{-- @if($specialist->ratings->count() > 0)
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

                @if (isset($specialist->ratings))
                    
                    @foreach ($specialist->ratings as $rating)
                        <div class="d-flex pt-5">
                            <div class="img_commentSection"><img src="{{ asset($rating->picture) }}"
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
            
        </div>
    </section>
@endif --}}












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
      let l = "{{ $specialist->timezone }}";
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
