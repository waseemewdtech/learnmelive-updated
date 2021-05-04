@extends('layouts.frontend.app')
@section('title','Portfolio')
{{-- head start --}}
@section('extra-css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/utility.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/navbar.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/carousel.css') }}">

<style type="text/css">
   .dropdown-toggle::after{display: none;}    
</style>
@endsection
{{-- head end --}}
{{-- content section start --}}
@section('content')
    <section class="px-5 pt-2 pb-2 nav-bg-img robotoRegular">
    @include('includes.frontend.navbar')
    </section>
    @include('common.messages')
    @include('includes.frontend.navigations')

    <section class="main_padding pt-5">
        <div class="f-34 cl-000000 robotoMedium">Appointments</div>
    </section>
                                       

                     
<section class="main_padding mt-5">
   <section class="pt-5 pb-5 bg-dark borderRadius-12px">
   <section class="d-flex justify-content-center">
   <div class="d-flex container d-flex p-0 ml-0 mr-0 justify-content-center">
        <div class="row m-0 w-100 flex-nowrap justify-content-center" >
            <div class="d-flex col-md-5 bg-ffffff w-42  pt-3 pb-3 borderRadius-5px pl-3">
                <div><img src="{{ asset('assets/frontend/images/search.png') }}"  alt=""></div>

                <div class="pl-3"><input type="search" class="bg-transparent outline-none border-0 robotoRegular f-21 "
                        placeholder="Book your services..."></div>
            </div>
          <div class="d-flex col-md-5 bg-ffffff w-42  pt-3 pb-3 borderRadius-5px pl-3 ml-3 mr-3">
                <div><img src="{{ asset('assets/frontend/images/location.png') }}"  alt="">
        </div>

        <div class=""><input type="search" class="pl-3 bg-transparent outline-none border-0 robotoRegular f-21 "
                placeholder="Near?"></div>
    </div> 
    <div class="col-md-1 p-0"> <button class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574  pt-3 pb-3 pl-3 pr-3"
            type="submit"><img src="{{ asset('assets/frontend/images/search2.png') }}" alt=""></button></div>

    </div>
    </div>
   </section>
            <div class="f-24 cl-ffffff robotoRegular text-center pt-3">Discover and book beauty professionals near you</div>
             

            <section class="pt-4 pl-5 pr-5">
             
              <!-- 1sT CarouSel sTarT -->
              <div class="row m-0 ">

              <div class="col-lg-4 col-md-4 ">
                  <div class="cl-ffffff text-center robotoLight">Pending</div>
                 <div class="d-flex borderRadius-12px bg-white w-100 robotoMedium justify-content-between pt-4 pb-4 pl-4 pr-4 mt-3">
                    <div class="col-md-8 p-0">
                       <div class="f-18 robotoMedium cl-a20101">Pending</div>
                       <div class="cl-000000  f-15 pt-1"> Regular Cut-Recorte Regular</div>                            
                       <div class="cl-616161 f-15 pt-1">Regular Cut</div>
                    </div>
                    <div class="border_Left"></div>
                    <div class="">
                       <div class="text-center">
                          <div class="f-14">Feb</div>
                          <div class="f-32">13</div>
                          <div class="f-12">2021</div>
                          <div class="f-10">5:42 pm</div>

                       </div>

                    </div>
                 </div>

              </div>
              <div class="col-lg-4 col-md-4 ">
                  <div class="cl-ffffff text-center robotoMedium">Finished</div>
                  
<!-- ################### carousel 1 -->

<section class="">
  <div id="carousel-1" class="carousel slide" data-ride="carousel">

   

    <div class="carousel-inner" role="listbox">

      <div class="carousel-item active">
         <section class="d-block w-100">
            <div class="d-flex borderRadius-12px bg-white w-100 robotoMedium justify-content-between pt-4 pb-4 pl-4 pr-4 mt-3">
                    <div class="col-md-8 p-0">
                       <div class="f-18 robotoMedium cl-616161">Pending</div>
                       <div class="cl-000000  f-15 pt-1"> Regular Cut-Recorte Regular</div>                            
                       <div class="cl-616161 f-15 pt-1">Regular Cut</div>
                    </div>
                    <div class="border_Left"></div>
                    <div class="">
                       <div class="text-center">
                          <div class="f-14">Feb</div>
                          <div class="f-32">13</div>
                          <div class="f-12">2021</div>
                          <div class="f-10">5:42 pm</div>

                       </div>

                    </div>
                 </div> 
         </section>
        
      </div>

      <div class="carousel-item">
      <section class="d-block w-100">
            <div class="d-flex borderRadius-12px bg-white w-100 robotoMedium justify-content-between pt-4 pb-4 pl-4 pr-4 mt-3">
                    <div class="col-md-8 p-0">
                       <div class="f-18 robotoMedium cl-616161">Pending</div>
                       <div class="cl-000000  f-15 pt-1"> Regular Cut-Recorte Regular</div>                            
                       <div class="cl-616161 f-15 pt-1">Regular Cut</div>
                    </div>
                    <div class="border_Left"></div>
                    <div class="">
                       <div class="text-center">
                          <div class="f-14">Feb</div>
                          <div class="f-32">13</div>
                          <div class="f-12">2021</div>
                          <div class="f-10">5:42 pm</div>

                       </div>

                    </div>
                 </div> 
         </section>
      </div>

      <div class="carousel-item">
      <section class="d-block w-100">
            <div class="d-flex borderRadius-12px bg-white w-100 robotoMedium justify-content-between pt-4 pb-4 pl-4 pr-4 mt-3">
                    <div class="col-md-8 p-0">
                       <div class="f-18 robotoMedium cl-616161">Pending</div>
                       <div class="cl-000000  f-15 pt-1"> Regular Cut-Recorte Regular</div>                            
                       <div class="cl-616161 f-15 pt-1">Regular Cut</div>
                    </div>
                    <div class="border_Left"></div>
                    <div class="">
                       <div class="text-center">
                          <div class="f-14">Feb</div>
                          <div class="f-32">13</div>
                          <div class="f-12">2021</div>
                          <div class="f-10">5:42 pm</div>

                       </div>

                    </div>
                 </div> 
         </section>
      </div>

      <div class="carousel-item">
      <section class="d-block w-100">
            <div class="d-flex borderRadius-12px bg-white w-100 robotoMedium justify-content-between pt-4 pb-4 pl-4 pr-4 mt-3">
                    <div class="col-md-8 p-0">
                       <div class="f-18 robotoMedium cl-616161">Pending</div>
                       <div class="cl-000000  f-15 pt-1"> Regular Cut-Recorte Regular</div>                            
                       <div class="cl-616161 f-15 pt-1">Regular Cut</div>
                    </div>
                    <div class="border_Left"></div>
                    <div class="">
                       <div class="text-center">
                          <div class="f-14">Feb</div>
                          <div class="f-32">13</div>
                          <div class="f-12">2021</div>
                          <div class="f-10">5:42 pm</div>

                       </div>

                    </div>
                 </div> 
         </section>
      </div>

    </div><!-- e carousel-inner -->

    <a class="carousel-control-prev op-1 singleprev" href="#carousel-1" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">prev</span>
    </a>

    <a class="carousel-control-next single-next op-1" href="#carousel-1" role="button" data-slide="next">
      <span class="carousel-control-next-icon  " aria-hidden="true"></span>
      <span class="sr-only">next</span>
    </a>

  </div><!-- e carousel -->
</section><!-- e section -->

              </div>
              <div class="col-lg-4 col-md-4 ">
                  <div class="cl-ffffff text-center robotoLight">Recent</div>
                 <div class="d-flex borderRadius-12px bg-white w-100 robotoMedium justify-content-between pt-4 pb-4 pl-4 pr-4 mt-3">
                    <div class="col-md-8 p-0">
                       <div class="f-18 robotoMedium cl-0eaf39">Recent</div>
                       <div class="cl-000000  f-15 pt-1"> Regular Cut-Recorte Regular</div>                            
                       <div class="cl-616161 f-15 pt-1">Regular Cut</div>
                    </div>
                    <div class="border_Left"></div>
                    <div class="">
                       <div class="text-center">
                          <div class="f-14">Feb</div>
                          <div class="f-32">13</div>
                          <div class="f-12">2021</div>
                          <div class="f-10">5:42 pm</div>

                       </div>

                    </div>
                 </div>

              </div>
            
              </div>
              


               <!-- 1sT CarouSel END -->
               </section>
               <section class="pl-5 pr-5 pt-5 pb-2">
                          <div class="cl-ffffff pl-3 f-21 robotoMedium">Visited & Favorited</div>
                       </section>
                       <!-- ################### carousel 2 -->

<section class="pl-5 pr-5">


  <div id="carousel-2" class="carousel slide pl-15 pr-15" data-ride="carousel">

    <div class="carousel-inner" role="listbox">

      <div class="carousel-item active">
      <section class="d-block">
 <div class="row">
   <div class="col-md-3"> <img class="d-block w-100" src="{{ asset('assets/frontend/images/hairdresser.png') }}"alt="Slide" >
       <div class="cl-ffffff robotoregular pt-2"><div class="f-21">Hairdresser</div>
       <div class="f-18"> Lorem ipsume, Lorem ipsume,</div></div>
</div>
   <div class="col-md-3"><img class="d-block w-100" src="{{ asset('assets/frontend/images/mostexpensive-spa-ashtonhawks-04.png') }}"alt="Slide" >
   <div class="cl-ffffff robotoregular pt-2"><div class="f-21">Day spa</div>
       <div class="f-18"> Lorem ipsume, Lorem ipsume,</div></div>

</div>
   <div class="col-md-3">   <img class="d-block w-100" src="{{ asset('assets/frontend/images/massageTherapy-636218646-770x553-1.png') }}"alt="Slide" >
   <div class="cl-ffffff robotoregular pt-2"><div class="f-21">Massage</div>
       <div class="f-18"> Lorem ipsume, Lorem ipsume,</div></div>

</div>
   <div class="col-md-3">       <img class="d-block w-100" src="{{ asset('assets/frontend/images/growing-beauty.png') }}" alt="Slide" >
   <div class="cl-ffffff robotoregular pt-2"><div class="f-21">Skin care</div>
       <div class="f-18"> Lorem ipsume, Lorem ipsume,</div></div>
</div>
</div>
 </section>
       
        
      </div>

      <div class="carousel-item">
        
  <section class="d-block">
  <div class="row">
   <div class="col-md-3"> <img class="d-block w-100" src="{{ asset('assets/frontend/images/hairdresser.png') }}"alt="Slide" >
       <div class="cl-ffffff robotoregular pt-2"><div class="f-21">Hairdresser</div>
       <div class="f-18"> Lorem ipsume, Lorem ipsume,</div></div>
</div>
   <div class="col-md-3"><img class="d-block w-100" src="{{ asset('assets/frontend/images/mostexpensive-spa-ashtonhawks-04.png') }}"alt="Slide" >
   <div class="cl-ffffff robotoregular pt-2"><div class="f-21">Day spa</div>
       <div class="f-18"> Lorem ipsume, Lorem ipsume,</div></div>

</div>
   <div class="col-md-3">   <img class="d-block w-100" src="{{ asset('assets/frontend/images/massageTherapy-636218646-770x553-1.png') }}"alt="Slide" >
   <div class="cl-ffffff robotoregular pt-2"><div class="f-21">Massage</div>
       <div class="f-18"> Lorem ipsume, Lorem ipsume,</div></div>

</div>
   <div class="col-md-3">       <img class="d-block w-100" src="{{ asset('assets/frontend/images/growing-beauty.png') }}" alt="Slide" >
   <div class="cl-ffffff robotoregular pt-2"><div class="f-21">Skin care</div>
       <div class="f-18"> Lorem ipsume, Lorem ipsume,</div></div>
</div>
</div>
 </section>
      </div>

      <div class="carousel-item">
     
      <section class="d-block">
      <div class="row">
   <div class="col-md-3"> <img class="d-block w-100" src="{{ asset('assets/frontend/images/hairdresser.png') }}"alt="Slide" >
       <div class="cl-ffffff robotoregular pt-2"><div class="f-21">Hairdresser</div>
       <div class="f-18"> Lorem ipsume, Lorem ipsume,</div></div>
</div>
   <div class="col-md-3"><img class="d-block w-100" src="{{ asset('assets/frontend/images/mostexpensive-spa-ashtonhawks-04.png') }}"alt="Slide" >
   <div class="cl-ffffff robotoregular pt-2"><div class="f-21">Day spa</div>
       <div class="f-18"> Lorem ipsume, Lorem ipsume,</div></div>

</div>
   <div class="col-md-3">   <img class="d-block w-100" src="{{ asset('assets/frontend/images/massageTherapy-636218646-770x553-1.png') }}"alt="Slide" >
   <div class="cl-ffffff robotoregular pt-2"><div class="f-21">Massage</div>
       <div class="f-18"> Lorem ipsume, Lorem ipsume,</div></div>

</div>
   <div class="col-md-3">       <img class="d-block w-100" src="{{ asset('assets/frontend/images/growing-beauty.png') }}" alt="Slide" >
   <div class="cl-ffffff robotoregular pt-2"><div class="f-21">Skin care</div>
       <div class="f-18"> Lorem ipsume, Lorem ipsume,</div></div>
</div>
</div>
 </section>
      </div>


    </div><!-- e carousel-inner -->

    <a class="carousel-control-prev carousel-2-prev op-1" href="#carousel-2" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">prev</span>
    </a>

    <a class="carousel-control-next carousel-2-next op-1" href="#carousel-2" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">next</span>
    </a>

  </div><!-- e carousel -->
<!-- </section>e section -->


                     </section>
   </section>
   </section> 
   <section class=" main_padding pt-70 text-center">
    <p class="main_title RobotoMedium f-34 cl-000000 fw-600 m-0 ">Specialist Available</p>
    <p class="f-21 m-0 pt-3 cl-616161 robotoRegular ">The best and highly skilled in a specific and restricted field.</p>
    <img src="{{ asset('assets/frontend/images/greencurve.png') }}" class="img-fluid pt-3" alt="">
</section>  
<section class="bg-F5F5F5 mt-70">
   <section class="pl-pr-125  pt-5 pb-5">
      <div class="f-34 cl-000000 pb-3 pl-5 robotoMedium">Waxing Services:</div>
   <div id="carousel-3" class="carousel slide pl-15 pr-15" data-ride="carousel">

<div class="carousel-inner" role="listbox">

  <div class="carousel-item active">
  <section class="d-block">
  <div class="row m-0">
<div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px ">
                                            <img src="{{ asset('assets/frontend/images/kitty-kat-wax-men-services.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/2.png') }}" class="img-fluid"  alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">Dino Allen</div>
                                            <div class="card-footer border-0 robotoRegular robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px ">
                                            <img src="{{ asset('assets/frontend/images/siskas-hc.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/6.png') }}" class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">Silvester</div>
                                            <div class="card-footer robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px ">
                                            <img src="{{ asset('assets/frontend/images/songe-dave-barbershop.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/8.png') }}" class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">John samy</div>
                                            <div class="card-footer robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px ">
                                            <img src="{{ asset('assets/frontend/images/d6a1d878-3804-439a-a684-0625544321d1-LastDayOut13.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/2.png') }}" class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">Andy James</div>
                                            
                                            <div class="card-footer robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
</div>
</section>
   
    
  </div>

  <div class="carousel-item">
    
<section class="d-block">
<div class="row m-0">
<div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px ">
                                            <img src="{{ asset('assets/frontend/images/kitty-kat-wax-men-services.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/2.png') }}" class="img-fluid"  alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">Dino Allen</div>
                                            <div class="card-footer border-0 robotoRegular robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px ">
                                            <img src="{{ asset('assets/frontend/images/siskas-hc.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/6.png') }}" class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">Silvester</div>
                                            <div class="card-footer robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px ">
                                            <img src="{{ asset('assets/frontend/images/songe-dave-barbershop.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/8.png') }}" class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">John samy</div>
                                            <div class="card-footer robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px ">
                                            <img src="{{ asset('assets/frontend/images/d6a1d878-3804-439a-a684-0625544321d1-LastDayOut13.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/2.png') }}" class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">Andy James</div>
                                            
                                            <div class="card-footer robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
</div>
</section>
  </div>

  <div class="carousel-item">
 
  <section class="d-block">
  <div class="row m-0">
<div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px ">
                                            <img src="{{ asset('assets/frontend/images/kitty-kat-wax-men-services.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/2.png') }}" class="img-fluid"  alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">Dino Allen</div>
                                            <div class="card-footer border-0 robotoRegular robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px ">
                                            <img src="{{ asset('assets/frontend/images/siskas-hc.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/6.png') }}" class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">Silvester</div>
                                            <div class="card-footer robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px ">
                                            <img src="{{ asset('assets/frontend/images/songe-dave-barbershop.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/8.png') }}" class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">John samy</div>
                                            <div class="card-footer robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px ">
                                            <img src="{{ asset('assets/frontend/images/d6a1d878-3804-439a-a684-0625544321d1-LastDayOut13.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/2.png') }}" class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">Andy James</div>
                                            
                                            <div class="card-footer robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
</div>
</section>
  </div>


</div><!-- e carousel-inner -->

<a class="carousel-control-prev carousel-3-prev op-1" href="#carousel-3" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon carousel-3-prev-bg" aria-hidden="true"></span>
  <span class="sr-only">prev</span>
</a>

<a class="carousel-control-next carousel-3-next op-1" href="#carousel-3" role="button" data-slide="next">
  <span class="carousel-control-next-icon carousel-3-next-bg" aria-hidden="true"></span>
  <span class="sr-only">next</span>
</a>

</div><!-- e carousel -->

   </section>
</section>   

              <!-- 2nd -->
              <section class="mt-70">
   <section class="pl-pr-125 pt-5 pb-5">
      <div class="f-34 cl-000000 pb-3 pl-5 robotoMedium">Skin Care:</div>
   <div id="carousel-4" class="carousel slide pl-15 pr-15" data-ride="carousel">

<div class="carousel-inner pb-3" role="listbox">

  <div class="carousel-item active">
  <section class="d-block">
  <div class="row m-0">
<div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px box_shadow ">
                                            <img src="{{ asset('assets/frontend/images/skin-care-doctors-1.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/7.png') }}" class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">Dino Allen</div>
                                            <div class="card-footer border-0 robotoRegular robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px box_shadow ">
                                            <img src="{{ asset('assets/frontend/images/unnamed.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/2.png') }}"  class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">Jessica</div>
                                            <div class="card-footer robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px box_shadow ">
                                            <img src="{{ asset('assets/frontend/images/Dr_Bernstein_Active-FX_Male_Face_New_York_NYC_14875-scaled.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/4.png') }}" class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">Mr.Edward</div>
                                            <div class="card-footer robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px box_shadow ">
                                            <img src="{{ asset('assets/frontend/images/Dr Oyer Clinic Procedure.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/3.png') }}" class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">Cary Sam</div>
                                            
                                            <div class="card-footer robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
</div>
</section>
   
    
  </div>

  <div class="carousel-item">
    
<section class="d-block">
<div class="row m-0">
<div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px box_shadow ">
                                            <img src="{{ asset('assets/frontend/images/skin-care-doctors-1.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/7.png') }}" class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">Dino Allen</div>
                                            <div class="card-footer border-0 robotoRegular robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px box_shadow ">
                                            <img src="{{ asset('assets/frontend/images/unnamed.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/2.png') }}"  class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">Jessica</div>
                                            <div class="card-footer robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px box_shadow ">
                                            <img src="{{ asset('assets/frontend/images/Dr_Bernstein_Active-FX_Male_Face_New_York_NYC_14875-scaled.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/4.png') }}" class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">Mr.Edward</div>
                                            <div class="card-footer robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px box_shadow ">
                                            <img src="{{ asset('assets/frontend/images/Dr Oyer Clinic Procedure.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/3.png') }}" class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">Cary Sam</div>
                                            
                                            <div class="card-footer robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
</div>
</section>
  </div>

  <div class="carousel-item">
 
  <section class="d-block">
  <div class="row m-0">
<div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px box_shadow ">
                                            <img src="{{ asset('assets/frontend/images/skin-care-doctors-1.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/7.png') }}" class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">Dino Allen</div>
                                            <div class="card-footer border-0 robotoRegular robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px box_shadow ">
                                            <img src="{{ asset('assets/frontend/images/unnamed.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/2.png') }}"  class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">Jessica</div>
                                            <div class="card-footer robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px box_shadow ">
                                            <img src="{{ asset('assets/frontend/images/Dr_Bernstein_Active-FX_Male_Face_New_York_NYC_14875-scaled.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/4.png') }}" class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">Mr.Edward</div>
                                            <div class="card-footer robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px box_shadow ">
                                            <img src="{{ asset('assets/frontend/images/Dr Oyer Clinic Procedure.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/3.png') }}" class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">Cary Sam</div>
                                            
                                            <div class="card-footer robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
</div>
</section>
  </div>


</div><!-- e carousel-inner -->

<a class="carousel-control-prev carousel-3-prev op-1" href="#carousel-4" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon carousel-3-prev-bg" aria-hidden="true"></span>
  <span class="sr-only">prev</span>
</a>

<a class="carousel-control-next carousel-3-next op-1" href="#carousel-4" role="button" data-slide="next">
  <span class="carousel-control-next-icon carousel-3-next-bg" aria-hidden="true"></span>
  <span class="sr-only">next</span>
</a>

</div><!-- e carousel -->

   </section>
</section>   
              <!-- 2nd End -->
                                            
                                            <!-- 3rd -->
                                            <section class="bg-F5F5F5 mt-70">
   <section class="pl-pr-125  pt-5 pb-5">
      <div class="f-34 cl-000000 pb-3 pl-5 robotoMedium">Hair Stylist:</div>
   <div id="carousel-5" class="carousel slide pl-15 pr-15" data-ride="carousel">

<div class="carousel-inner" role="listbox">

  <div class="carousel-item active">
  <section class="d-block">
  <div class="row m-0">
<div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px ">
                                            <img src="{{ asset('assets/frontend/images/unnamed (2).png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/9.png') }}" class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">Dino Allen</div>
                                            <div class="card-footer border-0 robotoRegular robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px ">
                                            <img src="{{ asset('assets/frontend/images/10.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/5.png') }}" class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">Anna Jones</div>
                                            <div class="card-footer robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px ">
                                            <img src="{{ asset('assets/frontend/images/769_iStock-538204903.jpg_1.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/2.png') }}" alt=""  class="img-fluid" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">Jimie paul</div>
                                            <div class="card-footer robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px ">
                                            <img src="{{ asset('assets/frontend/images/0c458911da2b596bcdbf8350cf3b753b5a-08-male-hairdresser.2x.h473.w710.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/1.png') }}"  class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">Andy James</div>
                                            
                                            <div class="card-footer robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
</div>
</section>
   
    
  </div>

  <div class="carousel-item">
    
<section class="d-block">
<div class="row m-0">
<div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px ">
                                            <img src="{{ asset('assets/frontend/images/unnamed (2).png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/9.png') }}" class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">Dino Allen</div>
                                            <div class="card-footer border-0 robotoRegular robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px ">
                                            <img src="{{ asset('assets/frontend/images/10.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/5.png') }}" class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">Anna Jones</div>
                                            <div class="card-footer robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px ">
                                            <img src="{{ asset('assets/frontend/images/769_iStock-538204903.jpg_1.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/2.png') }}" alt=""  class="img-fluid" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">Jimie paul</div>
                                            <div class="card-footer robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px ">
                                            <img src="{{ asset('assets/frontend/images/0c458911da2b596bcdbf8350cf3b753b5a-08-male-hairdresser.2x.h473.w710.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/1.png') }}"  class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">Andy James</div>
                                            
                                            <div class="card-footer robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
</div>
</section>
  </div>

  <div class="carousel-item">
 
  <section class="d-block">
  <div class="row m-0">
<div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px ">
                                            <img src="{{ asset('assets/frontend/images/unnamed (2).png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/9.png') }}" class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">Dino Allen</div>
                                            <div class="card-footer border-0 robotoRegular robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px ">
                                            <img src="{{ asset('assets/frontend/images/10.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/5.png') }}" class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">Anna Jones</div>
                                            <div class="card-footer robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px ">
                                            <img src="{{ asset('assets/frontend/images/769_iStock-538204903.jpg_1.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/2.png') }}" alt=""  class="img-fluid" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">Jimie paul</div>
                                            <div class="card-footer robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px ">
                                            <img src="{{ asset('assets/frontend/images/0c458911da2b596bcdbf8350cf3b753b5a-08-male-hairdresser.2x.h473.w710.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/1.png') }}"  class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">Andy James</div>
                                            
                                            <div class="card-footer robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
</div>
</section>
  </div>


</div><!-- e carousel-inner -->

<a class="carousel-control-prev carousel-3-prev op-1" href="#carousel-5" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon carousel-3-prev-bg" aria-hidden="true"></span>
  <span class="sr-only">prev</span>
</a>

<a class="carousel-control-next carousel-3-next op-1" href="#carousel-5" role="button" data-slide="next">
  <span class="carousel-control-next-icon carousel-3-next-bg" aria-hidden="true"></span>
  <span class="sr-only">next</span>
</a>

</div><!-- e carousel -->

   </section>
</section>  

                                            <!-- end -->

         <!-- 2nd -->
         <section class="mt-70">
   <section class="pl-pr-125 pt-5 pb-5">
      <div class="f-34 cl-000000 pb-3 pl-5 robotoMedium">Recently Viewed:</div>
   <div id="carousel-6" class="carousel slide pl-15 pr-15" data-ride="carousel">

<div class="carousel-inner pb-3" role="listbox">

  <div class="carousel-item active">
  <section class="d-block">
  <div class="row m-0">
<div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px box_shadow ">
                                            <img src="{{ asset('assets/frontend/images/skin-care-doctors-1.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/7.png') }}" class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep_1 cl-ffffff f-26 robotoMedium pl-3">Dino Allen</div>
                                            <div class="card-footer border-0 robotoRegular robotoRegular bblr bbrr  bg-ffffff pt-4 ">
                                            <div class="d-flex justify-content-between pt-1"> 
                                         <div class="col-md-8 p-0">   <div>   <h5 class="card-title m-0 RobotoMedium f-13 cl-3ac754">Skin Specialists</h5></div><div class="f-13 RobotoRegular w-75 cl-6b6b6b">We help you to invent your 
                                            professional look.</div><div class="f-14 cl-888888 pt-2">Working hours: 8 hrs</div></div>
                                             <div class="col-md-4 p-0 text-center"> <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-14 mt-4 borderRadius-50px pt-1 text-center pr-1 border-Green">40 reviews
                                                </p></div><div class="d-flex justify-content-center">
                                                    <div><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div></div>
                                                <div class="robotoRegular cl-888888 text-center">$40 / hr</div>
                                            
                                            </div>
                                            </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px box_shadow ">
                                            <img src="{{ asset('assets/frontend/images/0c458911da2b596bcdbf8350cf3b753b5a-08-male-hairdresser.2x.h473.w710.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/1.png') }}" class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep_1 cl-ffffff f-26 robotoMedium pl-3">Andy James</div>
                                            <div class="card-footer border-0 robotoRegular robotoRegular bblr bbrr  bg-ffffff pt-4 ">
                                            <div class="d-flex justify-content-between pt-1"> 
                                         <div class="col-md-8 p-0">   <div>   <h5 class="card-title m-0 RobotoMedium f-13 cl-3ac754">Skin Specialists</h5></div><div class="f-13 RobotoRegular w-75 cl-6b6b6b">We help you to invent your 
                                            professional look.</div><div class="f-14 cl-888888 pt-2">Working hours: 8 hrs</div></div>
                                             <div class="col-md-4 p-0 text-center"> <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-14 mt-4 borderRadius-50px pt-1 text-center pr-1 border-Green">40 reviews
                                                </p></div><div class="d-flex justify-content-center">
                                                    <div><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div></div>
                                                <div class="robotoRegular cl-888888 text-center">$40 / hr</div>
                                            
                                            </div>
                                            </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px box_shadow ">
                                            <img src="{{ asset('assets/frontend/images/siskas-hc.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/6.png') }}" class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep_1 cl-ffffff f-26 robotoMedium pl-3">Silvester</div>
                                            <div class="card-footer border-0 robotoRegular robotoRegular bblr bbrr  bg-ffffff pt-4 ">
                                            <div class="d-flex justify-content-between pt-1"> 
                                         <div class="col-md-8 p-0">   <div>   <h5 class="card-title m-0 RobotoMedium f-13 cl-3ac754">Skin Specialists</h5></div><div class="f-13 RobotoRegular w-75 cl-6b6b6b">We help you to invent your 
                                            professional look.</div><div class="f-14 cl-888888 pt-2">Working hours: 8 hrs</div></div>
                                             <div class="col-md-4 p-0 text-center"> <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-14 mt-4 borderRadius-50px pt-1 text-center pr-1 border-Green">40 reviews
                                                </p></div><div class="d-flex justify-content-center">
                                                    <div><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div></div>
                                                <div class="robotoRegular cl-888888 text-center">$40 / hr</div>
                                            
                                            </div>
                                            </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px box_shadow ">
                                            <img src="{{ asset('assets/frontend/images/10.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/5.png') }}" class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep_1 cl-ffffff f-26 robotoMedium pl-3">Anna Jones</div>
                                            
                                            <div class="card-footer border-0 robotoRegular robotoRegular bblr bbrr  bg-ffffff pt-4 ">
                                            <div class="d-flex justify-content-between pt-1"> 
                                         <div class="col-md-8 p-0">   <div>   <h5 class="card-title m-0 RobotoMedium f-13 cl-3ac754">Skin Specialists</h5></div><div class="f-13 RobotoRegular w-75 cl-6b6b6b">We help you to invent your 
                                            professional look.</div><div class="f-14 cl-888888 pt-2">Working hours: 8 hrs</div></div>
                                             <div class="col-md-4 p-0 text-center"> <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-14 mt-4 borderRadius-50px pt-1 text-center pr-1 border-Green">40 reviews
                                                </p></div><div class="d-flex justify-content-center">
                                                    <div><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div></div>
                                                <div class="robotoRegular cl-888888 text-center">$40 / hr</div>
                                            
                                            </div>
                                            </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
</div>
</section>
   
    
  </div>

  <div class="carousel-item">
    
<section class="d-block">
<div class="row m-0">
<div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px box_shadow ">
                                            <img src="{{ asset('assets/frontend/images/skin-care-doctors-1.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/7.png') }}" class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep_1 cl-ffffff f-26 robotoMedium pl-3">Dino Allen</div>
                                            <div class="card-footer border-0 robotoRegular robotoRegular bblr bbrr  bg-ffffff pt-4 ">
                                            <div class="d-flex justify-content-between pt-1"> 
                                         <div class="col-md-8 p-0">   <div>   <h5 class="card-title m-0 RobotoMedium f-13 cl-3ac754">Skin Specialists</h5></div><div class="f-13 RobotoRegular w-75 cl-6b6b6b">We help you to invent your 
                                            professional look.</div><div class="f-14 cl-888888 pt-2">Working hours: 8 hrs</div></div>
                                             <div class="col-md-4 p-0 text-center"> <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-14 mt-4 borderRadius-50px pt-1 text-center pr-1 border-Green">40 reviews
                                                </p></div><div class="d-flex justify-content-center">
                                                    <div><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div></div>
                                                <div class="robotoRegular cl-888888 text-center">$40 / hr</div>
                                            
                                            </div>
                                            </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px box_shadow ">
                                            <img src="{{ asset('assets/frontend/images/0c458911da2b596bcdbf8350cf3b753b5a-08-male-hairdresser.2x.h473.w710.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/1.png') }}" class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep_1 cl-ffffff f-26 robotoMedium pl-3">Andy James</div>
                                            <div class="card-footer border-0 robotoRegular robotoRegular bblr bbrr  bg-ffffff pt-4 ">
                                            <div class="d-flex justify-content-between pt-1"> 
                                         <div class="col-md-8 p-0">   <div>   <h5 class="card-title m-0 RobotoMedium f-13 cl-3ac754">Skin Specialists</h5></div><div class="f-13 RobotoRegular w-75 cl-6b6b6b">We help you to invent your 
                                            professional look.</div><div class="f-14 cl-888888 pt-2">Working hours: 8 hrs</div></div>
                                             <div class="col-md-4 p-0 text-center"> <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-14 mt-4 borderRadius-50px pt-1 text-center pr-1 border-Green">40 reviews
                                                </p></div><div class="d-flex justify-content-center">
                                                    <div><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div></div>
                                                <div class="robotoRegular cl-888888 text-center">$40 / hr</div>
                                            
                                            </div>
                                            </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px box_shadow ">
                                            <img src="{{ asset('assets/frontend/images/siskas-hc.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/6.png') }}" class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep_1 cl-ffffff f-26 robotoMedium pl-3">Silvester</div>
                                            <div class="card-footer border-0 robotoRegular robotoRegular bblr bbrr  bg-ffffff pt-4 ">
                                            <div class="d-flex justify-content-between pt-1"> 
                                         <div class="col-md-8 p-0">   <div>   <h5 class="card-title m-0 RobotoMedium f-13 cl-3ac754">Skin Specialists</h5></div><div class="f-13 RobotoRegular w-75 cl-6b6b6b">We help you to invent your 
                                            professional look.</div><div class="f-14 cl-888888 pt-2">Working hours: 8 hrs</div></div>
                                             <div class="col-md-4 p-0 text-center"> <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-14 mt-4 borderRadius-50px pt-1 text-center pr-1 border-Green">40 reviews
                                                </p></div><div class="d-flex justify-content-center">
                                                    <div><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div></div>
                                                <div class="robotoRegular cl-888888 text-center">$40 / hr</div>
                                            
                                            </div>
                                            </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px box_shadow ">
                                            <img src="{{ asset('assets/frontend/images/10.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/5.png') }}" class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep_1 cl-ffffff f-26 robotoMedium pl-3">Anna Jones</div>
                                            
                                            <div class="card-footer border-0 robotoRegular robotoRegular bblr bbrr  bg-ffffff pt-4 ">
                                            <div class="d-flex justify-content-between pt-1"> 
                                         <div class="col-md-8 p-0">   <div>   <h5 class="card-title m-0 RobotoMedium f-13 cl-3ac754">Skin Specialists</h5></div><div class="f-13 RobotoRegular w-75 cl-6b6b6b">We help you to invent your 
                                            professional look.</div><div class="f-14 cl-888888 pt-2">Working hours: 8 hrs</div></div>
                                             <div class="col-md-4 p-0 text-center"> <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-14 mt-4 borderRadius-50px pt-1 text-center pr-1 border-Green">40 reviews
                                                </p></div><div class="d-flex justify-content-center">
                                                    <div><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div></div>
                                                <div class="robotoRegular cl-888888 text-center">$40 / hr</div>
                                            
                                            </div>
                                            </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
</div>
</section>
  </div>

  <div class="carousel-item">
 
  <section class="d-block">
  <div class="row m-0">
<div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px box_shadow ">
                                            <img src="{{ asset('assets/frontend/images/skin-care-doctors-1.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/7.png') }}" class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep_1 cl-ffffff f-26 robotoMedium pl-3">Dino Allen</div>
                                            <div class="card-footer border-0 robotoRegular robotoRegular bblr bbrr  bg-ffffff pt-4 ">
                                            <div class="d-flex justify-content-between pt-1"> 
                                         <div class="col-md-8 p-0">   <div>   <h5 class="card-title m-0 RobotoMedium f-13 cl-3ac754">Skin Specialists</h5></div><div class="f-13 RobotoRegular w-75 cl-6b6b6b">We help you to invent your 
                                            professional look.</div><div class="f-14 cl-888888 pt-2">Working hours: 8 hrs</div></div>
                                             <div class="col-md-4 p-0 text-center"> <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-14 mt-4 borderRadius-50px pt-1 text-center pr-1 border-Green">40 reviews
                                                </p></div><div class="d-flex justify-content-center">
                                                    <div><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div></div>
                                                <div class="robotoRegular cl-888888 text-center">$40 / hr</div>
                                            
                                            </div>
                                            </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px box_shadow ">
                                            <img src="{{ asset('assets/frontend/images/0c458911da2b596bcdbf8350cf3b753b5a-08-male-hairdresser.2x.h473.w710.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/1.png') }}" class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep_1 cl-ffffff f-26 robotoMedium pl-3">Andy James</div>
                                            <div class="card-footer border-0 robotoRegular robotoRegular bblr bbrr  bg-ffffff pt-4 ">
                                            <div class="d-flex justify-content-between pt-1"> 
                                         <div class="col-md-8 p-0">   <div>   <h5 class="card-title m-0 RobotoMedium f-13 cl-3ac754">Skin Specialists</h5></div><div class="f-13 RobotoRegular w-75 cl-6b6b6b">We help you to invent your 
                                            professional look.</div><div class="f-14 cl-888888 pt-2">Working hours: 8 hrs</div></div>
                                             <div class="col-md-4 p-0 text-center"> <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-14 mt-4 borderRadius-50px pt-1 text-center pr-1 border-Green">40 reviews
                                                </p></div><div class="d-flex justify-content-center">
                                                    <div><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div></div>
                                                <div class="robotoRegular cl-888888 text-center">$40 / hr</div>
                                            
                                            </div>
                                            </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px box_shadow ">
                                            <img src="{{ asset('assets/frontend/images/siskas-hc.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/6.png') }}" class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep_1 cl-ffffff f-26 robotoMedium pl-3">Silvester</div>
                                            <div class="card-footer border-0 robotoRegular robotoRegular bblr bbrr  bg-ffffff pt-4 ">
                                            <div class="d-flex justify-content-between pt-1"> 
                                         <div class="col-md-8 p-0">   <div>   <h5 class="card-title m-0 RobotoMedium f-13 cl-3ac754">Skin Specialists</h5></div><div class="f-13 RobotoRegular w-75 cl-6b6b6b">We help you to invent your 
                                            professional look.</div><div class="f-14 cl-888888 pt-2">Working hours: 8 hrs</div></div>
                                             <div class="col-md-4 p-0 text-center"> <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-14 mt-4 borderRadius-50px pt-1 text-center pr-1 border-Green">40 reviews
                                                </p></div><div class="d-flex justify-content-center">
                                                    <div><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div></div>
                                                <div class="robotoRegular cl-888888 text-center">$40 / hr</div>
                                            
                                            </div>
                                            </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px box_shadow ">
                                            <img src="{{ asset('assets/frontend/images/10.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/5.png') }}" class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep_1 cl-ffffff f-26 robotoMedium pl-3">Anna Jones</div>
                                            
                                            <div class="card-footer border-0 robotoRegular robotoRegular bblr bbrr  bg-ffffff pt-4 ">
                                            <div class="d-flex justify-content-between pt-1"> 
                                         <div class="col-md-8 p-0">   <div>   <h5 class="card-title m-0 RobotoMedium f-13 cl-3ac754">Skin Specialists</h5></div><div class="f-13 RobotoRegular w-75 cl-6b6b6b">We help you to invent your 
                                            professional look.</div><div class="f-14 cl-888888 pt-2">Working hours: 8 hrs</div></div>
                                             <div class="col-md-4 p-0 text-center"> <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-14 mt-4 borderRadius-50px pt-1 text-center pr-1 border-Green">40 reviews
                                                </p></div><div class="d-flex justify-content-center">
                                                    <div><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div></div>
                                                <div class="robotoRegular cl-888888 text-center">$40 / hr</div>
                                            
                                            </div>
                                            </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
</div>
</section>
  </div>


</div><!-- e carousel-inner -->

<a class="carousel-control-prev carousel-3-prev op-1" href="#carousel-6" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon carousel-3-prev-bg" aria-hidden="true"></span>
  <span class="sr-only">prev</span>
</a>

<a class="carousel-control-next carousel-3-next op-1" href="#carousel-6" role="button" data-slide="next">
  <span class="carousel-control-next-icon carousel-3-next-bg" aria-hidden="true"></span>
  <span class="sr-only">next</span>
</a>

</div><!-- e carousel -->

   </section>
</section>   
              <!-- 2nd End -->
                                     <!-- 3rd -->
                                     <section class="bg-F5F5F5 mt-70">
   <section class="pl-pr-125  pt-5 pb-5">
      <div class="f-34 cl-000000 pb-3 pl-5 robotoMedium">Favorite Sellers:</div>
   <div id="carousel-7" class="carousel slide pl-15 pr-15" data-ride="carousel">

<div class="carousel-inner" role="listbox">

  <div class="carousel-item active">
  <section class="d-block">
  <div class="row m-0">
<div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px box_shadow ">
                                            <img src="{{ asset('assets/frontend/images/unnamed (2).png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/9.png') }}" class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep_1 cl-ffffff f-26 robotoMedium pl-3">Dino Allen</div>
                                            <div class="card-footer border-0 robotoRegular robotoRegular bblr bbrr  bg-ffffff pt-4 ">
                                            <div class="d-flex justify-content-between pt-1"> 
                                         <div class="col-md-8 p-0">   <div>   <h5 class="card-title m-0 RobotoMedium f-13 cl-3ac754">Skin Specialists</h5></div><div class="f-13 RobotoRegular w-75 cl-6b6b6b">We help you to invent your 
                                            professional look.</div><div class="f-14 cl-888888 pt-2">Working hours: 8 hrs</div></div>
                                             <div class="col-md-4 p-0 text-center"> <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-14 mt-4 borderRadius-50px pt-1 text-center pr-1 border-Green">40 reviews
                                                </p></div><div class="d-flex justify-content-center">
                                                    <div><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div></div>
                                                <div class="robotoRegular cl-888888 text-center">$40 / hr</div>
                                            
                                            </div>
                                            </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px box_shadow ">
                                            <img src="{{ asset('assets/frontend/images/0c458911da2b596bcdbf8350cf3b753b5a-08-male-hairdresser.2x.h473.w710.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/1.png') }}" class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep_1 cl-ffffff f-26 robotoMedium pl-3">Andy James</div>
                                            <div class="card-footer border-0 robotoRegular robotoRegular bblr bbrr  bg-ffffff pt-4 ">
                                            <div class="d-flex justify-content-between pt-1"> 
                                         <div class="col-md-8 p-0">   <div>   <h5 class="card-title m-0 RobotoMedium f-13 cl-3ac754">Skin Specialists</h5></div><div class="f-13 RobotoRegular w-75 cl-6b6b6b">We help you to invent your 
                                            professional look.</div><div class="f-14 cl-888888 pt-2">Working hours: 8 hrs</div></div>
                                             <div class="col-md-4 p-0 text-center"> <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-14 mt-4 borderRadius-50px pt-1 text-center pr-1 border-Green">40 reviews
                                                </p></div><div class="d-flex justify-content-center">
                                                    <div><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div></div>
                                                <div class="robotoRegular cl-888888 text-center">$40 / hr</div>
                                            
                                            </div>
                                            </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px box_shadow ">
                                            <img src="{{ asset('assets/frontend/images/siskas-hc.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/6.png') }}" class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep_1 cl-ffffff f-26 robotoMedium pl-3">Silvester</div>
                                            <div class="card-footer border-0 robotoRegular robotoRegular bblr bbrr  bg-ffffff pt-4 ">
                                            <div class="d-flex justify-content-between pt-1"> 
                                         <div class="col-md-8 p-0">   <div>   <h5 class="card-title m-0 RobotoMedium f-13 cl-3ac754">Skin Specialists</h5></div><div class="f-13 RobotoRegular w-75 cl-6b6b6b">We help you to invent your 
                                            professional look.</div><div class="f-14 cl-888888 pt-2">Working hours: 8 hrs</div></div>
                                             <div class="col-md-4 p-0 text-center"> <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-14 mt-4 borderRadius-50px pt-1 text-center pr-1 border-Green">40 reviews
                                                </p></div><div class="d-flex justify-content-center">
                                                    <div><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div></div>
                                                <div class="robotoRegular cl-888888 text-center">$40 / hr</div>
                                            
                                            </div>
                                            </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px box_shadow ">
                                            <img src="{{ asset('assets/frontend/images/10.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/5.png') }}" class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep_1 cl-ffffff f-26 robotoMedium pl-3">Anna Jones</div>
                                            
                                            <div class="card-footer border-0 robotoRegular robotoRegular bblr bbrr  bg-ffffff pt-4 ">
                                            <div class="d-flex justify-content-between pt-1"> 
                                         <div class="col-md-8 p-0">   <div>   <h5 class="card-title m-0 RobotoMedium f-13 cl-3ac754">Skin Specialists</h5></div><div class="f-13 RobotoRegular w-75 cl-6b6b6b">We help you to invent your 
                                            professional look.</div><div class="f-14 cl-888888 pt-2">Working hours: 8 hrs</div></div>
                                             <div class="col-md-4 p-0 text-center"> <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-14 mt-4 borderRadius-50px pt-1 text-center pr-1 border-Green">40 reviews
                                                </p></div><div class="d-flex justify-content-center">
                                                    <div><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div></div>
                                                <div class="robotoRegular cl-888888 text-center">$40 / hr</div>
                                            
                                            </div>
                                            </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
</div>
</section>
   
    
  </div>

  <div class="carousel-item">
    
<section class="d-block">
<div class="row m-0">
<div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px box_shadow ">
                                            <img src="{{ asset('assets/frontend/images/skin-care-doctors-1.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/7.png') }}" class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep_1 cl-ffffff f-26 robotoMedium pl-3">Dino Allen</div>
                                            <div class="card-footer border-0 robotoRegular robotoRegular bblr bbrr  bg-ffffff pt-4 ">
                                            <div class="d-flex justify-content-between pt-1"> 
                                         <div class="col-md-8 p-0">   <div>   <h5 class="card-title m-0 RobotoMedium f-13 cl-3ac754">Skin Specialists</h5></div><div class="f-13 RobotoRegular w-75 cl-6b6b6b">We help you to invent your 
                                            professional look.</div><div class="f-14 cl-888888 pt-2">Working hours: 8 hrs</div></div>
                                             <div class="col-md-4 p-0 text-center"> <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-14 mt-4 borderRadius-50px pt-1 text-center pr-1 border-Green">40 reviews
                                                </p></div><div class="d-flex justify-content-center">
                                                    <div><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div></div>
                                                <div class="robotoRegular cl-888888 text-center">$40 / hr</div>
                                            
                                            </div>
                                            </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px box_shadow ">
                                            <img src="{{ asset('assets/frontend/images/0c458911da2b596bcdbf8350cf3b753b5a-08-male-hairdresser.2x.h473.w710.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/1.png') }}" class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep_1 cl-ffffff f-26 robotoMedium pl-3">Andy James</div>
                                            <div class="card-footer border-0 robotoRegular robotoRegular bblr bbrr  bg-ffffff pt-4 ">
                                            <div class="d-flex justify-content-between pt-1"> 
                                         <div class="col-md-8 p-0">   <div>   <h5 class="card-title m-0 RobotoMedium f-13 cl-3ac754">Skin Specialists</h5></div><div class="f-13 RobotoRegular w-75 cl-6b6b6b">We help you to invent your 
                                            professional look.</div><div class="f-14 cl-888888 pt-2">Working hours: 8 hrs</div></div>
                                             <div class="col-md-4 p-0 text-center"> <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-14 mt-4 borderRadius-50px pt-1 text-center pr-1 border-Green">40 reviews
                                                </p></div><div class="d-flex justify-content-center">
                                                    <div><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div></div>
                                                <div class="robotoRegular cl-888888 text-center">$40 / hr</div>
                                            
                                            </div>
                                            </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px box_shadow ">
                                            <img src="{{ asset('assets/frontend/images/siskas-hc.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/6.png') }}" class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep_1 cl-ffffff f-26 robotoMedium pl-3">Silvester</div>
                                            <div class="card-footer border-0 robotoRegular robotoRegular bblr bbrr  bg-ffffff pt-4 ">
                                            <div class="d-flex justify-content-between pt-1"> 
                                         <div class="col-md-8 p-0">   <div>   <h5 class="card-title m-0 RobotoMedium f-13 cl-3ac754">Skin Specialists</h5></div><div class="f-13 RobotoRegular w-75 cl-6b6b6b">We help you to invent your 
                                            professional look.</div><div class="f-14 cl-888888 pt-2">Working hours: 8 hrs</div></div>
                                             <div class="col-md-4 p-0 text-center"> <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-14 mt-4 borderRadius-50px pt-1 text-center pr-1 border-Green">40 reviews
                                                </p></div><div class="d-flex justify-content-center">
                                                    <div><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div></div>
                                                <div class="robotoRegular cl-888888 text-center">$40 / hr</div>
                                            
                                            </div>
                                            </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px box_shadow ">
                                            <img src="{{ asset('assets/frontend/images/10.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/5.png') }}" class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep_1 cl-ffffff f-26 robotoMedium pl-3">Anna Jones</div>
                                            
                                            <div class="card-footer border-0 robotoRegular robotoRegular bblr bbrr  bg-ffffff pt-4 ">
                                            <div class="d-flex justify-content-between pt-1"> 
                                         <div class="col-md-8 p-0">   <div>   <h5 class="card-title m-0 RobotoMedium f-13 cl-3ac754">Skin Specialists</h5></div><div class="f-13 RobotoRegular w-75 cl-6b6b6b">We help you to invent your 
                                            professional look.</div><div class="f-14 cl-888888 pt-2">Working hours: 8 hrs</div></div>
                                             <div class="col-md-4 p-0 text-center"> <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-14 mt-4 borderRadius-50px pt-1 text-center pr-1 border-Green">40 reviews
                                                </p></div><div class="d-flex justify-content-center">
                                                    <div><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div></div>
                                                <div class="robotoRegular cl-888888 text-center">$40 / hr</div>
                                            
                                            </div>
                                            </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
</div>
</section>
  </div>

  <div class="carousel-item">
 
  <section class="d-block">
  <div class="row m-0">
<div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px box_shadow ">
                                            <img src="{{ asset('assets/frontend/images/skin-care-doctors-1.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/7.png') }}" class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep_1 cl-ffffff f-26 robotoMedium pl-3">Dino Allen</div>
                                            <div class="card-footer border-0 robotoRegular robotoRegular bblr bbrr  bg-ffffff pt-4 ">
                                            <div class="d-flex justify-content-between pt-1"> 
                                         <div class="col-md-8 p-0">   <div>   <h5 class="card-title m-0 RobotoMedium f-13 cl-3ac754">Skin Specialists</h5></div><div class="f-13 RobotoRegular w-75 cl-6b6b6b">We help you to invent your 
                                            professional look.</div><div class="f-14 cl-888888 pt-2">Working hours: 8 hrs</div></div>
                                             <div class="col-md-4 p-0 text-center"> <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-14 mt-4 borderRadius-50px pt-1 text-center pr-1 border-Green">40 reviews
                                                </p></div><div class="d-flex justify-content-center">
                                                    <div><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div></div>
                                                <div class="robotoRegular cl-888888 text-center">$40 / hr</div>
                                            
                                            </div>
                                            </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px box_shadow ">
                                            <img src="{{ asset('assets/frontend/images/0c458911da2b596bcdbf8350cf3b753b5a-08-male-hairdresser.2x.h473.w710.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/1.png') }}" class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep_1 cl-ffffff f-26 robotoMedium pl-3">Andy James</div>
                                            <div class="card-footer border-0 robotoRegular robotoRegular bblr bbrr  bg-ffffff pt-4 ">
                                            <div class="d-flex justify-content-between pt-1"> 
                                         <div class="col-md-8 p-0">   <div>   <h5 class="card-title m-0 RobotoMedium f-13 cl-3ac754">Skin Specialists</h5></div><div class="f-13 RobotoRegular w-75 cl-6b6b6b">We help you to invent your 
                                            professional look.</div><div class="f-14 cl-888888 pt-2">Working hours: 8 hrs</div></div>
                                             <div class="col-md-4 p-0 text-center"> <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-14 mt-4 borderRadius-50px pt-1 text-center pr-1 border-Green">40 reviews
                                                </p></div><div class="d-flex justify-content-center">
                                                    <div><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div></div>
                                                <div class="robotoRegular cl-888888 text-center">$40 / hr</div>
                                            
                                            </div>
                                            </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px box_shadow ">
                                            <img src="{{ asset('assets/frontend/images/siskas-hc.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/6.png') }}" class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep_1 cl-ffffff f-26 robotoMedium pl-3">Silvester</div>
                                            <div class="card-footer border-0 robotoRegular robotoRegular bblr bbrr  bg-ffffff pt-4 ">
                                            <div class="d-flex justify-content-between pt-1"> 
                                         <div class="col-md-8 p-0">   <div>   <h5 class="card-title m-0 RobotoMedium f-13 cl-3ac754">Skin Specialists</h5></div><div class="f-13 RobotoRegular w-75 cl-6b6b6b">We help you to invent your 
                                            professional look.</div><div class="f-14 cl-888888 pt-2">Working hours: 8 hrs</div></div>
                                             <div class="col-md-4 p-0 text-center"> <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-14 mt-4 borderRadius-50px pt-1 text-center pr-1 border-Green">40 reviews
                                                </p></div><div class="d-flex justify-content-center">
                                                    <div><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div></div>
                                                <div class="robotoRegular cl-888888 text-center">$40 / hr</div>
                                            
                                            </div>
                                            </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px box_shadow ">
                                            <img src="{{ asset('assets/frontend/images/10.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/5.png') }}" class="img-fluid" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep_1 cl-ffffff f-26 robotoMedium pl-3">Anna Jones</div>
                                            
                                            <div class="card-footer border-0 robotoRegular robotoRegular bblr bbrr  bg-ffffff pt-4 ">
                                            <div class="d-flex justify-content-between pt-1"> 
                                         <div class="col-md-8 p-0">   <div>   <h5 class="card-title m-0 RobotoMedium f-13 cl-3ac754">Skin Specialists</h5></div><div class="f-13 RobotoRegular w-75 cl-6b6b6b">We help you to invent your 
                                            professional look.</div><div class="f-14 cl-888888 pt-2">Working hours: 8 hrs</div></div>
                                             <div class="col-md-4 p-0 text-center"> <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-14 mt-4 borderRadius-50px pt-1 text-center pr-1 border-Green">40 reviews
                                                </p></div><div class="d-flex justify-content-center">
                                                    <div><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div>
                                                <div class="pl-1"><img src="{{ asset('assets/frontend/images/Path89.png') }}" alt=""></div></div>
                                                <div class="robotoRegular cl-888888 text-center">$40 / hr</div>
                                            
                                            </div>
                                            </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
</div>
</section>
  </div>


</div><!-- e carousel-inner -->

<a class="carousel-control-prev carousel-3-prev op-1" href="#carousel-7" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon carousel-3-prev-bg" aria-hidden="true"></span>
  <span class="sr-only">prev</span>
</a>

<a class="carousel-control-next carousel-3-next op-1" href="#carousel-7" role="button" data-slide="next">
  <span class="carousel-control-next-icon carousel-3-next-bg" aria-hidden="true"></span>
  <span class="sr-only">next</span>
</a>

</div><!-- e carousel -->

   </section>
</section>  

                                            <!-- end -->

   <section class=" bg-4b4b4b4 mt-5 pt-4 pb-4">
   <div class="d-flex justify-content-center  align-items-center"><img
      src="{{ asset('assets/frontend/images/Copyright © 2021 learnmelive, All Right Reserved learnmelive.png') }}"
      alt="" srcset=""></div>
</section>
@endsection
{{-- content section end --}}
{{-- footer section start --}}
@section('extra-script')
<script src="{{ asset('assets/frontend/js/carousel.js') }}"></script>


@endsection
{{-- footer section end --}}
