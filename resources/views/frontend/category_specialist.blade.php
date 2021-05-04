@extends('layouts.frontend.app') @section('title','Specialist | Dashboard') {{-- head start --}} @section('extra-css')

<style>
    .card_circle {
       
        border: 5px solid white;
        border-radius: 50px;
        position: absolute;
        bottom: 66px;
        right: 14px;
    }
    .h-60{
    height: 60px !important;
}
.w-60{
    width: 60px !important;
}
.profile-shadow{
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
}
</style>
@endsection {{-- head end --}} {{-- content section start --}} @section('content')

<section class="px-5 pt-2 pb-2 nav-bg-img robotoRegular">
    @include('includes.frontend.navbar')
</section>

@if(count(categories()) > 0)
    <section class=" main_padding pt-5">
        <div>
            <ul class="listStyle-none p-0  d-flex robotoRegular f-18 ul_main_tabs m-0 d-flex justify-content-around">
                @foreach (categories()->take(8) as $category)
                    <li class="pl-3"> <a href="{{ route('category_specialists',$category->id) }}" class="cl-3b3b3b3">{{ ucwords($category->name) }}</a></li>
                @endforeach
                @if (count(categories()->skip(8)) > 0)
                    
                <li>
                    <!-- Example split danger button -->
                <div class="btn-group">
                <a href="" class=" dropdown-toggle dropdown-toggle-split cl-3b3b3b3"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More...</a>
                <div class="dropdown-menu dropdown-menu-nav">
                    @foreach (categories()->skip(8) as $category)
                    <a class="dropdown-item " href="{{ route('category_specialists',$category->id) }}">{{ ucwords($category->name) }}</a>
                        
                    @endforeach
                    
                </div>
                </div>
                </li>
                @endif
            </ul>
        </div>
    </section>
@endif
<section class=" main_padding pt-70  text-center">
    <p class="main_title RobotoMedium f-34 cl-000000 fw-600 m-0 ">Check Out These Specialists</p>
    <p class="f-21 m-0 pt-3 cl-616161 robotoRegular ">Discover some of most talented specialists around the globe.</p>
    <img src="{{ asset('assets/frontend/images/greencurve.png') }}" class="img-fluid pt-3" alt="">
</section>


<!-- F I F T H     S E C T I O N E N D  -->

<!-- S I X T H     S E C T I O N  S T A R T -->

<section class="main_padding pt-70">
    <div class="row">

        @foreach($specialists as $specialist)
            <div class="col-md-3 col-lg-3 col-sm-12 mb-3">
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

@endsection 

