@extends('layouts.frontend.app') @section('title','Appointment Request') {{-- head start --}} @section('extra-css')

<style type="text/css">
    .dropdown-toggle::after {
        display: none;
    }
</style>
@endsection {{-- head end --}} {{-- content section start --}} 
@section('content')
    <section class="px-5 pt-2 pb-2 nav-bg-img robotoRegular">
        @include('includes.frontend.navbar')
    </section>
    @include('common.messages')
    @include('includes.frontend.navigations')


    <section class="main_padding pt-70">

        <div class="container-fluid error-message-div ml-1" style="display:none;">
            <div class="row">
                <div class="col-12 px-0">
                    <div class="alert alert-danger alert-block" role="alert">
                        {{-- <button type="button" class="close" data-dismiss="alert">×</button> --}}
                        <strong class="error-message-text"></strong>
                    </div>
                </div>
            </div>
        </div>

        @foreach(json_decode($service->specialist->opening_hours) as $key =>$d)
            <input type="hidden" name="sDays[]"id="sDays" value="{{ucfirst($key)}}">
            <input type="hidden" name="{{ucfirst($key)}}_from"  value="{{ $d[0] }}">
            <input type="hidden" name="{{ucfirst($key)}}_to"  value="{{ $d[1] }}">
        @endforeach
        
        <form action="{{ route('store.appointment') }}" method="POST">
            @csrf
            <input type="hidden" name="rate" id="rate" value="{{ $service->rate }}" />
            <input type="hidden" name="service_id" id="service_id" value="{{ $service->id }}" />
            <input type="hidden" name="time" id="time" value="{{ $service->timing }}" />
            <input type="hidden" name="specialist_id" id="specialist_id" value="{{ $service->specialist_id }}" />
            <input type="hidden" name="date" id="date" value="" />
            <div class="row m-0 justify-content-between flex-nowrap">
                <div class="col-lg-3 col-md-3 light mw-33 p-0">
                    <div class="calendar robotoRegular calender_Shadow pl-2 pr-2 pt-3 pb-3">
                        <div class="calendar__month">
                            <div class="cal-month__previous"><</div>
                            <div class="cal-month__current"></div>
                            <div class="cal-month__next">></div>
                        </div>
                        <div class="calendar__head border-bottom">
                            <div class="cal-head__day"></div>
                            <div class="cal-head__day"></div>
                            <div class="cal-head__day"></div>
                            <div class="cal-head__day"></div>
                            <div class="cal-head__day"></div>
                            <div class="cal-head__day"></div>
                            <div class="cal-head__day"></div>
                        </div>
                        <div class="calendar__body pt-3">
                            <div class="cal-body__week">
                                <div class="cal-body__day"></div>
                                <div class="cal-body__day"></div>
                                <div class="cal-body__day"></div>
                                <div class="cal-body__day"></div>
                                <div class="cal-body__day"></div>
                                <div class="cal-body__day"></div>
                                <div class="cal-body__day"></div>
                            </div>
                            <div class="cal-body__week">
                                <div class="cal-body__day"></div>
                                <div class="cal-body__day"></div>
                                <div class="cal-body__day"></div>
                                <div class="cal-body__day"></div>
                                <div class="cal-body__day"></div>
                                <div class="cal-body__day"></div>
                                <div class="cal-body__day"></div>
                            </div>
                            <div class="cal-body__week">
                                <div class="cal-body__day"></div>
                                <div class="cal-body__day"></div>
                                <div class="cal-body__day"></div>
                                <div class="cal-body__day"></div>
                                <div class="cal-body__day"></div>
                                <div class="cal-body__day"></div>
                                <div class="cal-body__day"></div>
                            </div>
                            <div class="cal-body__week">
                                <div class="cal-body__day"></div>
                                <div class="cal-body__day"></div>
                                <div class="cal-body__day"></div>
                                <div class="cal-body__day"></div>
                                <div class="cal-body__day"></div>
                                <div class="cal-body__day"></div>
                                <div class="cal-body__day"></div>
                            </div>
                            <div class="cal-body__week">
                                <div class="cal-body__day"></div>
                                <div class="cal-body__day"></div>
                                <div class="cal-body__day"></div>
                                <div class="cal-body__day"></div>
                                <div class="cal-body__day"></div>
                                <div class="cal-body__day"></div>
                                <div class="cal-body__day"></div>
                            </div>
                            <div class="cal-body__week">
                                <div class="cal-body__day"></div>
                                <div class="cal-body__day"></div>
                                <div class="cal-body__day"></div>
                                <div class="cal-body__day"></div>
                                <div class="cal-body__day"></div>
                                <div class="cal-body__day"></div>
                                <div class="cal-body__day"></div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-9 col-md-9 mw-67 pl-3 pb-4 pr-3 calender_Shadow borderRadius-12px">

                    @foreach(json_decode($service->specialist->opening_hours) as $l=>$t)
                        <div class="all-day {{ucfirst($l)}}" style="display: none;">
                            
                            <div class="row m-0 pt-4">
                                <div class="col-md-6 col-lg-6 p-0">
                                    <div class="d-flex">
                                        <div><img src="{{ asset('assets/frontend/images/Group198.png') }}" alt="" class="img-fluid w-75" /></div>
                                        <div class="f-21 robotoRegular cl-000000 pl-3">
                                            Available Time
                                            <div class="f-16 cl-878787">{{ getTimeZoneTime($service->specialist->user->time_zone,Auth::user()->time_zone,$t[0]) }} {{ getTimeZoneTime($service->specialist->user->time_zone,Auth::user()->time_zone,$t[1]) }}</div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-md-6 col-lg-6 p-0 robotoRegular">
                                    <button type="button" class="close cl-3ac754" aria-label="Close"><span class="ml-auto cl-3ac754">close</span> <span class="pt-2" aria-hidden="true">&times;</span></button>
                                </div> --}}
                            </div>
                            @php 
                                $f_hour = explode(':' ,$t[0])[0];
                                $f_d = explode(' ' ,$t[0])[1];
                                $t_hour = explode(':', $t[1])[0];
                                $t_d = explode(' ' ,$t[1])[1];
                                if($t_d=='PM')
                                {
                                    $t_hour +=12; 
                                }
                                $p_t = [15,30,45,0];
                                $current_date = date('Y-m-d');
                                $start = new DateTime($current_date." ".$t[0]);
                                $end = new DateTime($current_date." ".$t[1]);
                                $current = clone $start;
                            @endphp
                        
                            <div class="row pt-4 ml-1 mr-1">
                                
                                @while ($current <= $end)
                                    <div class="ml-4 robotoRegular cl-878787 col-md-2 text-center p-0">
                                        <label class="border pt-2 rounded w-100 pb-2">
                                            @php $tz = 'America/Chicago'; @endphp
                                            <input type="radio" name="time" class="bg-success btnclass" value="{{ getTimeZoneTime($service->specialist->user->time_zone,Auth::user()->time_zone,$current->format("g:i A"))}}" @if (in_array(getTimeZoneTime($service->specialist->user->time_zone,$tz,$current->format("g:i A")),$appointments)) disabled @endif/>
                                            <span class="checkmark pl-2">{{ getTimeZoneTime($service->specialist->user->time_zone,Auth::user()->time_zone,$current->format("g:i A")) }}</span>
                                        </label>
                                    </div>
                                    @php $current->modify("+30 minutes") @endphp
                                @endwhile
                            </div>
                            <div class="border w-100 mt-5"></div>
                            
                            <div class="row m-0 pt-3">
                                <div class="col-md-6 p-0">
                                    {{-- <div class="btn-group w-50 h-44">
                                        <button type="button" class="btn btn-outline-success bg-3ac574 cl-ffffff dropdown-toggle-btn w-100 rounded" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Any staff Member
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="col-md-6 pl-0 ml-auto text-end pr-0">
                                    <button type="submit" class="btn btn-outline-success my-2 d-flex justify-content-end my-sm-0 cl-ffffff bg-3ac574 pl-5 pr-5 login_button appointment-btn ml-auto" type="submit">Submit</button>
                                </div>
                            </div>

                        </div>
                    @endforeach
                    
                    {{-- <div class="row pt-4 m-0 robotoRegular">
                        <div class="cl-000000 f-18 col-md-6 pl-0 pr-0"><div>Standard buzz cut or 1 length even line up</div></div>
                        <div class="col-md-6 cl-000000 d-flex justify-content-end"><div class="f-21">${{ number_format($service->rate) }}</div></div>
                    </div> --}}
                    
                </div>
            </div>
        </form>
    </section>

    @if($services->count() > 0)
        <section class="main_padding pt-5">
            <div class="row m-0 p-0">
            <div class="robotoMedium cl-000000 f-34 pt-2 d-flex align-items-end">Services:</div>
            <div class="col-md-3 ml-auto p-0">
                <div class="d-flex m-0">  
                <div class="pt-4 w-100"> 
                    <input type="text" placeholder="Search for services" class="service_inpt robotoRegular h-44 cl-6b6b6b bg-transparent footer_input pt-2 pb-2 pl-3 w-100 rounded">
                </div>
                <div class="pt-4 pl-2"> 
                    <button class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574  pt-2 pb-2 pl-2 pr-2 service_inpt_btn" type="button" onclick="inputSearchServices();"><img src="{{ asset('assets/frontend/images/Group 188.png ') }}" alt=""></button>
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
                    @foreach($services as $key=>$service)
                    <tr class="border-bottom">
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ ucwords($service->title) }}</td>
                        <td>{{ ucwords($service->category->name) }}</td>
                        @php
                        $subcategories = App\SubCategory::whereIn('id',json_decode($service->sub_categories))->get()->pluck('name')->toArray();
                        @endphp 
                        <td>{{ implode(',',array_map('ucwords',$subcategories)) }}</td>
                        <td>{{ $service->timing }} Minutes</td>
                        <td> ${{ number_format($service->rate) }} (USD)</td>
                        <td>{{ $service->status }}</td>
                        <td><a href="{{ route('appointment_request',encrypt($service->id)) }}" class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574  pl-5 pr-5 login_button" target="_blank">Book</a></td>
                    </tr>

                    @endforeach
                    
                </tbody>
                </table>
            </div>
                    
            </div>
        </section>
    @endif

        @if($service->specialist->portfolios->count() >0 )
        <section class=" main_padding pt-70 text-center">
            <p class="main_title robotoMedium  f-34 cl-000000  m-0">Portfolio</p>
            <p class="f-21 m-0 pt-3 cl-616161 robotoRegular">The best and highly skilled Performance done previously</p>
            <img src="{{ asset('assets/frontend/images/greencurve.png') }}" class="img-fluid pt-3" alt="">
        </section>

        <section class=" main_padding pt-70 ">
            <div class="row m-0">
                @foreach ($service->specialist->portfolios->take(1) as $portfolio)
                <div class="col-lg-7 col-md-7 col-sm-12 pl-0 pr-0 bg_img_8 d-flex flex-column  justify-content-end"  >
                    <img src="{{ asset($portfolio->image) }}" alt="" class="w-100 h-100 border-10">
                </div>
                @endforeach
                <div class="col-lg-5 col-md-5 col-sm-12 pr-0 d-flex flex-column justify-content-between">
                    @foreach ($service->specialist->portfolios->skip(1)->take(2) as $portfolio)
                        <div class="bg_imgcol-5 d-flex flex-column  justify-content-end">
                            <img src="{{ asset($portfolio->image) }}" alt="" class="w-100 h-100 border-10">
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class=" main_padding pt-5 text-center">
            <a href="{{route('specialist_portfolio',encrypt($service->specialist->id))}}" class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574  pl-5 pr-5 " type="submit">See
                all</a>
        </section>
    @endif


    @if($service->specialist->ratings->count() > 0)
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
                    @if (isset($service->specialist->ratings))
                        
                        @foreach ($service->specialist->ratings as $rating)
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
@endsection {{-- content section end --}} 
{{-- footer section start --}} 

@section('extra-script')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.0.0/moment.min.js"></script>
    <script>

    const convertTime12to24 = (time12h) => {
        const [time, modifier] = time12h.split(' ');

        let [hours, minutes] = time.split(':');

        if (hours === '12') {
            hours = '00';
        }

        if (modifier === 'PM') {
            hours = parseInt(hours, 10) + 12;
        }

        return `${hours}:${minutes}`;
    }

        function inputSearchServices()
        {
            let val = $('.service_inpt').val();
            $.ajax({
                url:"{{ route('getQueryServices') }}",
                type:"get",
                data:{val:val,service_id:{{ $service->id }},id:{{ $service->specialist_id }}},
                success:function(data)
                {
                $('.services-table-body').html(data);
                }
            });
        }

        $(document).keydown(function(e)
        {
            if(e.which === 13){
            inputSearchServices();
            }
        });

        $(".appointment-btn").on("click", function () {
            
            if($("input[name='time']:checked").val() == null){
                swal({
                        icon: "error",
                        text: " Please select any time slot for appointment",
                        type: 'error'
                    });
                return false
            }
            var month_year = $(".cal-month__current").text();
            var day = $(".cal-day__day--selected").text();
            $("#date").val(day + " " + month_year);
        });

        setInterval(function(){
            var specialistDays = $("input[name='sDays[]']").map(function(){return $(this).val();}).get();
            var month_year = $(".cal-month__current").text();
            var day = $(".cal-day__day--selected").text();
            var d = new Date(day + " " + month_year);
            if(specialistDays.includes(d.toLocaleString('en-us', {weekday: 'long'})))
            {
                $('.all-day').hide();
                $('.'+d.toLocaleString('en-us', {weekday: 'long'})).show();
                // let from = $('input[name='+d.toLocaleString('en-us', {weekday: 'long'})+"_from"+']').val(); 
                // let to = $('input[name='+d.toLocaleString('en-us', {weekday: 'long'})+"_to"+']').val();
                // let from_hour = convertTime12to24(from).split(':')[0];
                // let to_hour = convertTime12to24(to).split(':')[0];
                // for(let i=parseInt(from_hour); i<=parseInt(to_hour);i++)
                // {
                //     console.log(i);
                // }
                $('.error-message-div').hide();
            }
            else
            {
                $('.all-day').hide();
                $('.error-message-div').show();
                $('.error-message-text').html("{{ $service->specialist->user->username }} is not available on "+ d.toLocaleString('en-us', {weekday: 'long'})+"s.");
            }
        },1000);

    </script>
@endsection 
