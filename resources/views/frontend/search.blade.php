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

@include('includes.frontend.navigations')

@if (count($users)>0 || $services->count() > 0)
    

@if (count($users)>0 )
    
<section class=" main_padding pt-70  text-center">
    <p class="main_title RobotoMedium f-34 cl-000000 fw-600 m-0 ">Check Out These Specialists</p>
    <p class="f-21 m-0 pt-3 cl-616161 robotoRegular ">Discover some of most talented specialists around the globe.</p>
    <img src="{{ asset('assets/frontend/images/greencurve.png') }}" class="img-fluid pt-3" alt="">
</section>


<!-- F I F T H     S E C T I O N E N D  -->

<!-- S I X T H     S E C T I O N  S T A R T -->

<section class="main_padding pt-70">
    <div class="row">

        @foreach($users as $user)
        
            <div class="col-md-3 col-lg-3 col-sm-12 mb-3">
                <a href="{{route('specialist_detail',encrypt($user->specialist->id))}}" >
                    <div class="card border-0 box_shadow">
                        <img src="{{ asset('assets/frontend/images/86d75f5ebf6abc13a630dda33b292727.png') }}"
                            class="card-img-top" alt="...">
                        <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                               <img src="{{ ($user->avatar != null) ? asset($user->avatar) : asset('uploads/user/default.jpg') }}"  class="img-fluid rounded-circle h-60 w-60 profile-shadow"  alt="profile"  >
                        </div>
                        <div class="card-footer  bg-ffffff pt-4 pb-4">
                            <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">{{ ucwords($user->specialist->category->name) }}</h5>
                            <p class="card-text m-0 robotoRegular cl-6 cl-6b6b6b f-21 pt-1">{{ $user->username }}
                            </p>
                        </div>
    
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    
</section>

@endif


 @if($services->count() > 0)
 <section class=" main_padding pt-70  text-center">
    <p class="main_title RobotoMedium f-34 cl-000000 fw-600 m-0 ">Check Out These Services</p>
    <img src="{{ asset('assets/frontend/images/greencurve.png') }}" class="img-fluid pt-3" alt="">
</section>
      <section class="main_padding pt-5">
        <div class="row m-0 p-0">
          <div class="table-responsive tableFixHead table_scroll mt-5 border robotoRegular">
            <table id="boxes-list" class="table m-0 header-fixed">
              
              <thead class="sticky-top bg-white cl-3ac754 ">
                <tr class="bg-white robotoRegular ">
                  <th scope="col">No</th>
                  <th scope="col">Service By</th>
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
                    <th scope="row">{{ ucwords($service->specialist->user->username) }}</th>
                    <td>{{ ucwords($service->title) }}</td>
                    <td>{{ ucwords($service->category->name) }}</td>
                    @php
                      $subcategories = App\SubCategory::whereIn('id',json_decode($service->sub_categories))->get()->pluck('name')->toArray();
                    @endphp 
                    <td>{{ implode(',',array_map('ucwords',$subcategories)) }}</td>
                    <td>{{ $service->timing }} Minutes</td>
                    <td> ${{number_format(intval($service->rate)) }} (USD)</td>
                    <td>{{ $service->status }}</td>
                    <td><a href="{{ route('appointment_request',encrypt($service->id)) }}" class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574  pl-5 pr-5 login_button" >Book</a></td>
                  </tr>

                @endforeach
                
              </tbody>
            </table>
          </div>
                
        </div>
      </section>
    @endif
    @else
<section class=" main_padding pt-70  text-center">
    <p class="main_title RobotoMedium f-34 cl-000000 fw-600 m-0 ">OOps nothing found</p>
    <img src="{{ asset('assets/frontend/images/greencurve.png') }}" class="img-fluid pt-3" alt="">
</section>
    
@endif
@endsection 

