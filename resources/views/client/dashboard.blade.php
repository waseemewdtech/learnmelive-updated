@extends('layouts.frontend.app') @section('title','Client | Dashboard') {{-- head start --}} @section('extra-css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/dashboard.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/index.css') }}" />

<style type="text/css">
    .dropdown-toggle::after {
        display: none;
    }

    .f-145 {
        font-size: 145px;
    }

    [slider] {
        width: 100%;
        position: relative;
        height: 5px;
    }

    [slider]>div {
        position: absolute;
        left: 13px;
        right: 15px;
        height: 5px;
    }

    [slider]>div>[inverse-left] {
        position: absolute;
        left: 0;
        height: 5px;
        border-radius: 10px;
        background-color: #CCC;
        margin: 0 7px;
    }

    [slider]>div>[inverse-right] {
        position: absolute;
        right: 0;
        height: 5px;
        border-radius: 10px;
        background-color: #CCC;
        margin: 0 7px;
    }


    [slider]>div>[range] {
        position: absolute;
        left: 0;
        height: 5px;
        border-radius: 14px;
        background-color: #3AC574;
    }

    [slider]>div>[thumb] {
        position: absolute;
        top: -5px;
        z-index: 2;
        height: 15px;
        width: 15px;
        text-align: left;
        margin-left: -7px;
        cursor: pointer;
        /* box-shadow: 0 3px 8px rgba(0, 0, 0, 0.4); */
        background-color: #3AC574;
        border-radius: 50%;
        outline: none;
    }

    [slider]>input[type=range] {
        position: absolute;
        pointer-events: none;
        -webkit-appearance: none;
        z-index: 3;
        height: 14px;
        top: -2px;
        width: 100%;
        opacity: 0;
    }

    div[slider]>input[type=range]:focus::-webkit-slider-runnable-track {
        background: transparent;
        border: transparent;
    }

    div[slider]>input[type=range]:focus {
        outline: none;
    }

    div[slider]>input[type=range]::-webkit-slider-thumb {
        pointer-events: all;
        width: 28px;
        height: 28px;
        border-radius: 0px;
        border: 0 none;
        background: red;
        -webkit-appearance: none;
    }

    div[slider]>input[type=range]::-ms-fill-lower {
        background: transparent;
        border: 0 none;
    }

    div[slider]>input[type=range]::-ms-fill-upper {
        background: transparent;
        border: 0 none;
    }

    div[slider]>input[type=range]::-ms-tooltip {
        display: none;
    }

.lable {
 
  border: 1px solid #ced4da;
  border-radius: 5px;
}
.snehainput {
      
    width: 93%;
  padding: 6px 5px;
  outline: none;
}
span.prefix{
    position: relative;
    left: 8px;
}
    .fs-1-3{ font-size:1.3rem !important; }
</style>
@endsection {{-- head end --}} 
{{-- content section start --}} 
@section('content')

    <section class="px-5 pt-2 pb-2 nav-bg-img robotoRegular">
        @include('includes.frontend.navbar')
    </section>

   @include('includes.frontend.navigations')

    <section class="container-fluid">
        <div class="row mt-5 justify-content-around">
            <div class="col-md-6 borderRadius-10px pl-0 pr-0 box_shadow1 border-top-green-10">
                <div class="px-5 py-3">
                    <div class="cl-3ac754 f-34">Upcoming Appointments <span class="text-muted cl-6A6A6A">({{ count($appointments->take(3)) }})</span></div>
                    <div class="card-body px-0">
                        <div class="row m-0 p-0">
                            <div class="col-md-2 pl-0 py-0">
                                <h1 class="h1 f-145">{{ count($appointments->take(3)) }}</h1>
                            </div>
                            <div class="col-md-10 p-0 cl-6A6A6A">
                                @foreach ($appointments->take(3) as $appointment)
                                    
                                <div class="mt-3 row align-items-center bg-F2F5FA box_shadow2">
                                    <div class="col-md-8">
                                        <p>{{ ucwords($appointment->specialist->user->name) }}sadsadsaddsadsa</p>
                                        <h3 class="fs-1-3">{{ ucwords($appointment->service->title) }}</h3>
                                    </div>
                                    <div class="col-md-4 p-0">
                                        <p>Date & Time</p>
                                        <p>{{ date('M d Y',strtotime(getTimeZoneDate('America/Chicago',$appointment->user->time_zone,$appointment->date))) }} {{ getTimeZoneTime('America/Chicago',$appointment->user->time_zone,$appointment->time) }}</p>
                                    </div>
                                    <div class="col-md-4 p-0">
                                        <span class="font-weight-bold ml-3">Rate</span>
                                        <span class="ml-2">${{ $appointment->rate }}</span>
                                    </div>    
                                    <div class="col-md-8 text-right"><button class="btn btn-success mb-2 mt-2 btn-sm ">Message</button></div>
                                </div>
                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        {{-- <button class="btn btn-md bg-3ac574 cl-ffffff">Update</button> --}}
                        <a href="{{ url('appointments') }}" class="cl-3ac754">View All Appointments >></a>
                    </div>
                </div>
            </div>
            <div class="col-md-5 py-5 borderRadius-10px p-0 box_shadow1 border-top-green-10">
                <div class="row px-5 align-items-center">
                    <div class="col-md-8">
                        <p class="cl-3ac754 f-34 mb-0">Available Balance $</p>
                    </div>
                    <div class="col-md-4">
                        <p class="cl-6A6A6A f-18 mb-0">Available Funds</p>
                    </div>
                </div>
                <div class="row px-5 align-items-center">
                    <div class="col-md-12">
                        <p class="cl-6A6A6A mb-0">Main Account</p>
                    </div>
                </div>
                <div class="row px-5 align-items-center">
                    <div class="col-md-7">
                        <h3 class="">Benjamin Carlos</h3>
                    </div>
                    <div class="col-md-1">
                        <img src="{{ asset('assets/frontend/images/arrow-up.png') }}" alt="" />
                    </div>
                    <div class="col-md-4">
                        <h3 class="mb-0 f-45">$0</h3>
                    </div>
                    <div class="col-md-12 text-right">
                        <p class="cl-6A6A6A f-18 mb-0">Updated 2h ago</p>
                    </div>
                </div>
                <br />
                <br />
                <hr />
                <div class="row px-5 align-items-center">
                    <div class="col-md-7">
                        <h3 class="cl-3ac754">Total Balance $</h3>
                    </div>
                    <div class="col-md-1">
                        <img src="{{ asset('assets/frontend/images/arrow-up.png') }}" alt="" />
                    </div>
                    <div class="col-md-4">
                        <h3 class="mb-0 f-45">$0</h3>
                    </div>
                    <div class="col-md-12 text-right">
                        <p class="cl-6A6A6A f-18 mb-0">This Month So Far</p>
                    </div>
                </div>
            </div>
        </div>
        
    </section>


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
    <section class=" main_padding pt-70  text-center">
        <p class="main_title RobotoMedium f-34 cl-000000 fw-600 m-0 ">Check Out These Specialists</p>
        <p class="f-21 m-0 pt-3 cl-616161 robotoRegular ">Discover some of most talented specialists around the globe.</p>
        <img src="{{ asset('assets/frontend/images/greencurve.png') }}" class="img-fluid pt-3" alt="">
    </section>


    <!-- F I F T H     S E C T I O N E N D  -->

    <!-- S I X T H     S E C T I O N  S T A R T -->

    <section class="main_padding pt-70">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            
            <div class="carousel-inner h-413">

                @foreach(App\Specialist::all()->chunk(4) as $specialistsCollections)

                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <section class="d-block w-100">
                            <div class="row m-0">
                                @foreach($specialistsCollections as $specialist)
                                    <div class="col-md-3 col-lg-3 col-sm-12">
                                        <a href="{{route('specialist_detail',encrypt($specialist->id))}}" >
                                            <div class="card border-0 box_shadow">
                                                <img src="{{ asset('assets/frontend/images/86d75f5ebf6abc13a630dda33b292727.png') }}"
                                                    class="card-img-top" alt="...">
                                                <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                    <img src="{{ ($specialist->user->avatar != null) ? asset($specialist->user->avatar) : asset('uploads/user/default.jpg') }}"  class="img-fluid rounded-circle h-60 w-60 profile-shadow"  alt="profile"  >
                                                </div>
                                                <div class="card-footer  bg-ffffff pt-4 pb-4">
                                                    <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">{{ ucwords($specialist->category->name) }}</h5>
                                                    <p class="card-text m-0 robotoRegular cl-6 cl-6b6b6b f-21 pt-1">{{ $specialist->user->username }}
                                                    </p>
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

    @if(Auth::user()->status=='active')

        <section class=" pl-3 pt-70" id="post_job">
            @include('common.messages')

            <div class="row mt-2 mb-5 px-3 mx-1 ">
                <div class="col-md-12 px-5 borderRadius-10px box_shadow1 p-0">
                    <div class="d-flex mt-3 justify-content-between ">
                        <div class="cl-3ac754 robotoMedium f-24">Post a Job</div>
                        <div class="f-24 cl-3ac754 robotoMedium"></div>
                    </div>
                    <div class="mt-2 border w-100"></div>
                    <form action="{{ route('servicerequests.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="title">Category</label>
                                <select class="form-control select2"  name="category" id="select_category" style="width: 100%;"  onchange="getSubCategories(this);">
                                            <option selected="selected" disabled>Choose category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                            </div>
                            <div class="form-group col-md-4">
                                <div class="sub_categories">
                                                    
                                </div>
                            </div>
                            <div class="form-group col-md-4"> 
                                <label for="rate_from">What is your budget for this service?</label>
                                <div class="lable">
                                <span class="prefix">$</span>
                                <input class="snehainput border-0" type="number" name="budget" id="budget" class="form-control" placeholder="5 Minimum (USD)"/>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="form-group">
                            <label for="description">Description*</label>
                            <textarea id="description" class="form-control summernote" name="description" required rows="5"> </textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">Attach Files (Optional)</label>
                            <input type="file" name="tags" class="form-control" >
                        </div>
                        <div class=" pl-0 ml-auto text-end pr-0 my-3">
                            <button type="submit" class="btn btn-outline-success my-2 d-flex justify-content-end my-sm-0 cl-ffffff bg-3ac574 pl-5 pr-5 login_button appointment-btn ml-auto" type="submit">Submit</button>
                        </div>
                    </form>
                    
                </div>
                
            </div>
        
        </section>

        <section class="main_padding pt-70  text-center">
            <p class="main_title RobotoMedium f-34 cl-000000 fw-600 m-0 ">Your Postings</p>
            <p class="f-21 m-0 pt-3 cl-616161 robotoRegular ">The Requests which you have already been posted.</p>
            <img src="{{ asset('assets/frontend/images/greencurve.png') }}" class="img-fluid pt-3" alt="">
        </section>

        <section class=" pl-3 pt-70">
            <div class="row mt-2 mb-5 px-3 mx-1 ">
                <div class="col-md-12 px-5 borderRadius-10px box_shadow1 p-0">
                    <div class="table-responsive ServiceTableData px-3 pt-5 pb-5" id="ServiceTableData">
                        <table id="example2" class="table table-hover example1">
                            <thead>
                                <tr class="text-uppercase">
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Sub Categories</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Budget</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @if($service_requests->count() >0)
                                    @foreach($service_requests as $i=>$request)

                                        <tr id="target_" class="border-bottom">
                                            <td class="border-0">{{++$i}}</td>
                                            <td class="border-0">{{ ucwords($request->title) }}</td>
                                            <td class="border-0">{{ ucwords($request->category->name) }}</td>
                                            @php
                                                $subcategories = App\SubCategory::whereIn('id',json_decode($request->subcategories))->get()->pluck('name')->toArray();
                                            @endphp 
                                            <td>{{ implode(',',array_map('ucwords',$subcategories)) }}</td>
                                            <td class="border-0">{{ ucfirst($request->description) }}</td>
                                            <td class="border-0">$ {{ $request->budget }}</td>
                                            <td>

                                                <!-- Modal -->
                                                <div class="modal fade bd-example-modal-lg" id="exampleModal{{$request->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content pl-5 pr-5 pt-3 ">
                                                            <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Service Request Bids</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                            </div>
                                                            
                                                            <div class="modal-body">
                                                                @if($request->bids->count() > 0)

                                                                    <div class="row px-3 ml-1 mt-2 mb-5">
                                                                        <div class="col-md-12 mt-3 borderRadius-10px box_shadow1 pb-5">
                                                                            <div class="d-flex mt-3 justify-content-between px-5">
                                                                                <div class="cl-3ac754 robotoMedium f-24 col-md-9 px-0 text-left">Bids Description</div>
                                                                                <div class="f-24 cl-3ac754 robotoMedium col-md-2 px-0 text-right">Amount</div>
                                                                                <div class="f-24 cl-3ac754 robotoMedium col-md-1">Action</div>
                                                                            </div>
                                                                            <div class="mt-3 border w-100"></div>
                                                                            @foreach ($request->bids as $service)
                                                                                <div class="d-flex mt-4 justify-content-between pr-5" >
                                                                                    <div class="col-md-9 pl-5 pr-0">
                                                                                        <div class="d-flex">

                                                                                            <div style="height: 50px;width:50px;" class="mr-2"><img src="{{ $service->specialist->user->avatar }}" class="rounded-circle w-100 h-100" alt="" srcset=""></div>
                                                                                            <div class="">
                                                                                            <div class="cl-000000 robotoMedium f-24 text-left">{{ ucfirst($request->title) }}</div>
                                                                                            <div class="d-flex">
                                                                                                <div class="cl-3ac754 f-14 robotoRegular d-flex align-items-center ">Bid by:</div>
                                                                                                <div class="pl-1 cl-6b6b6b f-14 robotoRegular d-flex align-items-center">{{ $service->specialist->user->username }} </div>
                                                                                            </div>
                                                                                            <div class="w-100 text-justify f-18 robotoRegular cl-6b6b6b pr-5" >
                                                                                                {{$service->perposal}}
                                                                                            </div>
                                                                                            <div class="d-flex pt-2">
                                                                                                <div>
                                                                                                    <div class="d-flex">
                                                                                                        <div><img src="{{ asset('assets/frontend/images/Group 305.png') }}" alt="" /></div>
                                                                                                        <div class="cl-3ac754 f-14 robotoRegular d-flex align-items-center pl-2">Bid</div>
                                                                                                        <div class="pl-1 cl-6b6b6b f-14 robotoRegular d-flex align-items-center">{{ \Carbon\Carbon::parse($service->created_at)->diffForHumans() }}
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div></div>
                                                                                            </div>
                                                                                            @if($service->attachment !=null)
        
                                                                                                <div class="d-flex pt-2">
                                                                                                    <div>
                                                                                                        <div class="d-flex">
                                                                                                            <div><img src="{{ asset('assets/frontend/images/Subtraction 2.png') }}" alt="" /></div>
                                                                                                            <div class="pl-1 cl-6b6b6b f-14 robotoRegular d-flex align-items-center">
                                                                                                                @php  if($service->attachment  !=null){
                                                                                                                            $attachment= explode('uploads/files/',$service->attachment );
                                                                                                                            }  @endphp
                                                                                                                <a class="cl-3ac754" href="public/{{ $service->attachment }}" download="downlaod">{{ $attachment[1] }}</a>
                                                                                                                </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div></div>
                                                                                                </div>
                                                                                            
                                                                                            @endif
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="robotoMedium text-right col-md-2 pr-0">
                                                                                        <div class="f-24 cl-000000 white-spaces robotoMedium">${{ number_format(intval($service->budget))}}</div>
                                                                                        <div class="f-21 cl-6b6b6b">USD</div>
                                                                                    </div>
                                                                                    <div class="col-md-1">
                                                                                        {{-- <form action="{{ route('bids.update',$service->id) }}" method="post" class="bid_accept">
                                                                                        @csrf @method('PUT') --}}
                                                                                        <input type="hidden" name="url" value="{{ route('bids.update',$service->id) }}" class="url">
                                                                                        <input type="hidden" name="status" value="{{ ($service->status == 'Declined') ? 1 :0 }}" class="status">
                                                                                        <button type="button" class="btn btn-sm {{ ($service->status == 'Declined') ? 'btn-success' : 'btn-danger' }}  action_btn change_status_{{ $service->id }}">{{ ($service->status == 'Declined') ? 'Accept' : 'Ignore' }} </button>
                                                                                        {{-- </form> --}}
                                                                                        
                                                                                    </div>
                                                                                </div>

                                                                                <div class="mt-3 border w-100"></div>
                                                                                
                                                                            @endforeach
                                                                            
                                                                        </div>
                                                                    </div>

                                                                @endif
                                                            </div>
                                                        
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#exampleModal{{$request->id}}">Bids</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    @else
        <div class="container main-padding-dashboard">
            <div class="alert alert-warning alert-dismissible fade show mt-4" role="alert">
                Your Profile is under view and administrator will approved your profile as soon as possible
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        
        
    @endif

    

   
    

@endsection 
{{-- content section end --}} 

{{-- footer section start --}}

@section('extra-script') 
    <script>

// $('.bid_accept').on('submit', function(e) {
//     alert($(this).serialize())
//     e.preventDefault(); 
//     $.ajax({
//         type: "POST",
//         url: $(this).attr('action'),
//         data: $(this).serialize(),
//         success: function(msg) {
//             alert(msg)
//         $(this).children('input.status').val(1)
//         $(this).children('button.action_btn').text('1')
//         }
//     });
// });


$('.action_btn').on('click', function(e) {
    var url = $(this).siblings('input.url').val()
    var status = $(this).siblings('input.status').val()
    
    $.ajax({
        type: "POST",
        url: url,
        data: { status: status, _token: "{{ csrf_token() }}",_method:" put" },
        success: function(msg) {

            if(msg.status == 'Declined'){
                $('.change_status_'+msg.id).siblings('input[name="status"]').val(1)
                $('.change_status_'+msg.id).addClass('btn-success').removeClass('btn-danger');
                $('.change_status_'+msg.id).text('Accept')
                
            }else if(msg.status == 'Approved'){
                $('.change_status_'+msg.id).removeClass('btn-success').addClass('btn-danger');
                $('.change_status_'+msg.id).siblings('input[name="status"]').val(0)
                $('.change_status_'+msg.id).text('Ignore')
            }
            if(msg.approval == true){
                $('button.action_btn').not('button.change_status_'+msg.id).hide();
            }if(msg.approval == false){
                 $('button.action_btn').show();
                 $('button.action_btn').removeClass('d-none');
            }
        }
    });
});

        function getMaxRange(e){
            document.getElementById('max').innerHTML = "$"+e.value;
        }
        function getMinRange(e){
            document.getElementById('min').innerHTML = "$"+e.value;
        }

        function getSubCategories(ele)
        {

            let id = $(ele).val();
            $.ajax({
                url:"{{ route('request.get_subcategories') }}",
                type:"get",
                data:{id:id},
                success:function(data)
                {
                    $('.sub_categories').empty();
                    $('.sub_categories').html(data);

                }
            });
        }
    </script>
 @endsection
