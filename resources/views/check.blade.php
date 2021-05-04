@extends('layouts.frontend.app')
@section('title','Appointments')
{{-- head start --}}
	
	@section('extra-css')

  <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/dashboard.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/utility.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/navbar.css') }}">
  <style type="text/css">
    .dropdown-toggle::after{display: none;}    
  </style>
	@endsection
{{-- head end --}}


{{-- content section start --}}

	@section('content')
		
  <section class="main_padding pt-2 pb-2 nav-bg-img robotoRegular">
      {{-- <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#"
          ><img
            src="{{ asset('assets/frontend/images/navlogo.png') }}"
            alt="navbar logo"
            class="img-fluid"
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <form class="form-inline my-2 my-lg-0 bg-transparent border rounded">
            <input
              class="form-control mr-sm-2 w-18 bg-transparent text-white border-0"
              type="search"
              value="what are you looking for ?"
              aria-label="Search"
            />
            <img
              src="{{ asset('assets/frontend/images/search2.png') }}"
              alt=""
              class="img-fluid p-2 search-img"
            />
          </form>
          <ul class="navbar-nav ml-auto d-flex align-self-center f-20">
            <li class="nav-item col-md-2">
              <a class="nav-link cl-white" href="#"
                >Blog <span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-item col-md-3 p-0">
              <a class="nav-link cl-white" href="#">About us</a>
            </li>
            <li class="nav-item dropdown col-md-3 p-0">
              <a
                class="nav-link cl-white"
                href="#"
                id="navbarDropdown"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded=""
              >
                Messages
                <span class="green-dot mt-1 ml-2"></span>
              </a>
              <div class="dropdown-menu p-0" aria-labelledby="navbarDropdown">
                <nav>
                  <div class="nav nav-tabs row m-0" id="nav-tab" role="tablist">
                      <a
                        class="nav-item nav-link  col-md-6 text-center"
                        id="nav-profile-tab"
                        data-toggle="tab"
                        href="#nav-profile"
                        role="tab"
                        aria-controls="nav-profile"
                        aria-selected="false"
                        > Notifications</a
                      >
                    <a
                      class="nav-item nav-link active col-md-6 text-center"
                      id="nav-home-tab"
                      data-toggle="tab"
                      href="#nav-home"
                      role="tab"
                      aria-controls="nav-home"
                      aria-selected="true"
                      >Inbox</a
                    >
                  </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                  <div
                    class="tab-pane fade"
                    id="nav-profile"
                    role="tabpanel"
                    aria-labelledby="nav-profile-tab"
                  >
                    ...
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                  <div
                    class="tab-pane fade show active"
                    id="nav-home"
                    role="tabpanel"
                    aria-labelledby="nav-home-tab"
                  >
                    <a class="dropdown-item d-flex row m-0 pt-2" href="#">
                      <div class="col-md-2 p-0">
                        <img
                          src="{{ asset('assets/frontend/images/GettyImages-1136599956-hair-stylist-1200x630-min.png') }}"
                          alt=""
                          class="img-fluid"
                        />
                        <span class="green-dot ml--1 mt-1"></span>
                      </div>
                      <div class="col-md-6 pl-2 pt-1 p-0">
                        <div class="row m-0">
                          <div class="dropdown-heading">Heading is here</div>
                        </div>
                        <div class="row m-0">
                          <div class="dropdown-contnt">
                            there is some text below heading
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3 p-0">
                        <div class="row m-0 justify-content-end mt-1">
                          <span class="green-dot-nmbr">3</span>
                        </div>
                        <div class="row m-0 justify-content-end mt-1">
                          <span class="dropdown-contnt">3:34 pm</span>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item d-flex row m-0 pt-2" href="#">
                      <div class="col-md-2 p-0">
                        <img
                          src="{{ asset('assets/frontend/images/GettyImages-1136599956-hair-stylist-1200x630-min.png') }}"
                          alt=""
                          class="img-fluid"
                        />
                        <span class="green-dot ml--1 mt-1"></span>
                      </div>
                      <div class="col-md-6 pl-2 pt-1 p-0">
                        <div class="row m-0">
                          <div class="dropdown-heading">Heading is here</div>
                        </div>
                        <div class="row m-0">
                          <div class="dropdown-contnt">
                            there is some text below heading
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3 p-0">
                        <div class="row m-0 justify-content-end mt-1">
                          <span class="green-dot-nmbr">3</span>
                        </div>
                        <div class="row m-0 justify-content-end mt-1">
                          <span class="dropdown-contnt">3:34 pm</span>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item d-flex row m-0 pt-2" href="#">
                      <div class="col-md-2 p-0">
                        <img
                          src="{{ asset('assets/frontend/images/navlogo.png') }}"
                          alt=""
                          class="img-fluid"
                        />
                        <span class="green-dot ml--1 mt-1"></span>
                      </div>
                      <div class="col-md-6 pl-2 pt-1 p-0">
                        <div class="row m-0">
                          <div class="dropdown-heading">Heading is here</div>
                        </div>
                        <div class="row m-0">
                          <div class="dropdown-contnt">
                            there is some text below heading
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3 p-0">
                        <div class="row m-0 justify-content-end mt-1">
                          <span class="green-dot-nmbr">3</span>
                        </div>
                        <div class="row m-0 justify-content-end mt-1">
                          <span class="dropdown-contnt">3:34 pm</span>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item d-flex row m-0 pt-2" href="#">
                      <div class="col-md-2 p-0">
                        <img
                          src="{{ asset('assets/frontend/images/navlogo.png') }}"
                          alt=""
                          class="img-fluid"
                        />
                        <span class="green-dot ml--1 mt-1"></span>
                      </div>
                      <div class="col-md-6 pl-2 pt-1 p-0">
                        <div class="row m-0">
                          <div class="dropdown-heading">Heading is here</div>
                        </div>
                        <div class="row m-0">
                          <div class="dropdown-contnt">
                            there is some text below heading
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3 p-0">
                        <div class="row m-0 justify-content-end mt-1">
                          <span class="green-dot-nmbr">3</span>
                        </div>
                        <div class="row m-0 justify-content-end mt-1">
                          <span class="dropdown-contnt">3:34 pm</span>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="dropdown-footer mt-5">
                    <div class="bg-3ac574 row m-0 pt-2 pb-2">
                      <div class="col-md-6 d-flex p-0 pl-4">
                          <div><i class="fa fa-cog text-white" aria-hidden="true"></i></div>
                        <div><i class="fa fa-volume-up text-white pl-2" aria-hidden="true"></i></div>
                      </div>
                      <div class="col-md-6 p-0 pr-3 text-white text-right">
                          <h6>See all in inbox</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item col-md-2">
              <a class="nav-link cl-white " href="#">Spa</a>
            </li>
            <li class="nav-item col-md-2 ">
              <a class="nav-link" href="#"
                ><img
                  src="{{ asset('assets/frontend/images/55881685_1284744685011014_8335587762602246144_n.png') }}"
                  alt=""
                  class="img-fluid w-75"
              /></a>
            </li>
          </ul>
        </div>
      </nav> --}}
       @include('includes.frontend.navbar')
    </section>

    <div class="pt-4 main_padding d-flex f-20 cl-3b3b3b3 justify-content-between robotoRegular">
      <div class="col-md-1 p-0"></div>
      <ul class="listStyle-none p-0 col-md-10 d-flex justify-content-between robotoRegular f-18 ul_main_tabs m-0">
        <li>  <a href="##" class="cl-3b3b3b3">Barbershop</a></li>
        <li>  <a href="##" class="cl-3b3b3b3">Web Developer</a></li>
        <li>  <a href="" class="cl-3b3b3b3">Banker</a></li>
        <li>  <a href="" class="cl-3b3b3b3">Engineer</a></li>
        <li>  <a href="" class="cl-3b3b3b3">Massage</a></li>
        <li>  <a href="" class="cl-3b3b3b3">Massage</a></li>
        <li>  <a href="" class="cl-3b3b3b3">Skin Care</a></li>
        <li>  <a href="" class="cl-3b3b3b3">Hair Stylist</a></li>
        
 
    </ul>
      <div class="col-md-2"></div>
    </div>
                     <section class="main_padding pt-70">
                        <div class="row m-0 justify-content-center">
                          <div class="col-md-3 col-lg-3 col-sm-12 p-0 box_shadow1 borderRadius-12px pt-5 pb-5">
                           <div class="d-flex align-items-center flex-column">
                            <div class="dashboard_id text-center">
                              <img src="{{ asset('assets/frontend/images/GettyImages-1136599956-hair-stylist-1200x630-min.png') }}" alt="">
                              <div class="smallCircleActive"></div>
                            </div>

                              <p class="m-0 f-27 robotoMedium cl-5757575 pt-3">Caroline Johnson</p>
                              <p class="f-18 cl-a8a8a8a robotoMedium m-0 pt-1">Hair Stylist</p>
                           </div>

                           <ul class="nav nav-tabs border-0 flex-column robotoRegular f-18 side_navpills-1 pt-4">
                           
                            <li  data-toggle="tab" href="#home" class=" cl-616161 w-100 rounded  pt-3 pb-3 pl-4 mt-1" >Gift Cards</li>
                            <li class="pt-3 pb-3 mt-1 pl-4  bg-3ac574 active cl-ffffff appointment " data-toggle="tab" href="#menu1">Appointments</li>
                            <li class="pt-3 pb-3 mt-1 pl-4  " data-toggle="tab" href="#menu2" class="cl-616161">Favourites</li>
                            <li class="pt-3 pb-3 mt-1 pl-4 " data-toggle="tab" href="#menu3" class="cl-616161">Account & Settings</li>
                            <li class="pt-3 pb-3 mt-1 pl-4 " data-toggle="tab" href="#menu4" class="cl-616161">Reviews</li>
                            <li class="pt-3 pb-3 mt-1 pl-4 " data-toggle="tab" href="#menu5" class="cl-616161">Payments</li>
                            <li class="pt-3 pb-3 mt-1 pl-4 " data-toggle="tab" href="#menu6" class="cl-616161">Like us on Facebook</li>
                            <li class="pt-3 pb-3 mt-1 pl-4 " data-toggle="tab" href="#menu7" class="cl-616161">Terms of Service</li>
                            <li class="pt-3 pb-3 mt-1 pl-4 " data-toggle="tab" href="#menu8" class="cl-616161">Privacy Policy</li>
                            <li class="pt-3 pb-3 mt-1 pl-4 " data-toggle="tab" href="#menu9" class="cl-616161">Call</li>
                          </ul>
                            
                      
                        </div>


                        
                          <div class="col-md-7 col-lg-7 col-sm-12 p-0 ml-4 box_shadow1 borderRadius-12px">    <div class="tab-content">
                            <div id="home" class="tab-pane fade">
                              <h3>HOME</h3>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                            <div id="menu1" class="tab-pane active ">
                   
                              <!-- Appointments start -->
                              <section class="p-100">    <div class="pt-4"> <div class="cl-3ac754 f-21 robotoRegular mt-4 mb-4 tilteContainerDashboard d-inline pb-1">Appointments</div></div>
                                <div class="border mt-1"></div></section>
                                 <section class="p-100 ">
                                  <div class="row pt-3 pb-3 mt-5 box_shadow1  ml-0 mr-0 borderRadius-10px justify-content-around">
                                    <div class="text-center"><p class="robotoRegular cl-515151 f-13 m-0">March</p><p class="f-45 m-0 cl-515151 robotoRegular">13</p>
                                   <p class="f-12 robotoRegular m-0"> 2021</p>
                                   <p class="f-8 robotoRegular m-0">5:42 pm</p>
                                   </div>
                                   <div class="height"></div>
      
                                   <!-- 2 -->
                                   <div class="col-md-5 col-lg-5 p-0 d-flex justify-content-center flex-column ">
                                   
                                     <div class="d-flex">  <div class="f-18 d-flex   align-items-center cl-000000 robotoRegular">Regular Cut-Recorte Regular</div>
                                     <div class="f-24 pl-2 cl-616161 robotoRegular">$30</div></div>
                                       <div class="robotoRegular cl-616161">Regular Cut</div>
                                       <div class="f-14 cl-9c9c9c pt-1">6656 us 301, Riverview, 33578</div>
                                     
                                   </div>
                                   <!-- end -->
                                   <!-- 3 -->
                                    <div class="text-center d-flex justify-content-center flex-column align-items-center">
                                      <div class="robotoRegular cl-616161">Pending</div>
                                      <div class="pt-3">  <button class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-bbbbbb border-0 buttonBoxShadow pt-2 pb-2 robotoRegular pl-4 pr-4" type="submit">Book again</button></div>
                                    </div>
                                    <!-- end -->
      
                                  </div>
                                 </section>
                                 <!-- Appointments end -->

                                 <!-- 2 N D S T A R T -->
                                 <section class="p-100 ">
                                  <div class="row pt-3 pb-3 mt-4 box_shadow1  ml-0 mr-0 borderRadius-10px justify-content-around">
                                    <div class="text-center"><p class="robotoRegular cl-515151 f-13 m-0">March</p><p class="f-45 m-0 cl-515151 robotoRegular">13</p>
                                   <p class="f-12 robotoRegular m-0"> 2021</p>
                                   <p class="f-8 robotoRegular m-0">5:42 pm</p>
                                   </div>
                                   <div class="height"></div>
      
                                   <!-- 2 -->
                                   <div class="col-md-5 col-lg-5 p-0 d-flex justify-content-center flex-column ">
                                   
                                     <div class="d-flex">  <div class="f-18 d-flex   align-items-center cl-000000 robotoRegular">Regular Cut-Recorte Regular</div>
                                     <div class="f-24 pl-2 cl-616161 robotoRegular">$30</div></div>
                                       <div class="robotoRegular cl-616161">Regular Cut</div>
                                       <div class="f-14 cl-9c9c9c pt-1">6656 us 301, Riverview, 33578</div>
                                     
                                   </div>
                                   <!-- end -->
                                   <!-- 3 -->
                                    <div class="text-center d-flex justify-content-center flex-column align-items-center">
                                      <div class="robotoRegular cl-616161">Pending</div>
                                      <div class="pt-3">  <button class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574 border-0 buttonBoxShadow pt-2 pb-2 robotoRegular pl-4 pr-4" type="submit">Book again</button></div>
                                    </div>
                                    <!-- end -->
      
                                  </div>
                                 </section>
                                 <!-- 2 N D E N D -->
                              <!-- T H I R D  S T A R T -->
                              <section class="p-100 ">
                                <div class="row pt-3 pb-3 mt-4 box_shadow1  ml-0 mr-0 borderRadius-10px justify-content-around">
                                  <div class="text-center"><p class="robotoRegular cl-515151 f-13 m-0">March</p><p class="f-45 m-0 cl-515151 robotoRegular">13</p>
                                 <p class="f-12 robotoRegular m-0"> 2021</p>
                                 <p class="f-8 robotoRegular m-0">5:42 pm</p>
                                 </div>
                                 <div class="height"></div>
    
                                 <!-- 2 -->
                                 <div class="col-md-5 col-lg-5 p-0 d-flex justify-content-center flex-column ">
                                 
                                   <div class="d-flex">  <div class="f-18 d-flex   align-items-center cl-000000 robotoRegular">Regular Cut-Recorte Regular</div>
                                   <div class="f-24 pl-2 cl-616161 robotoRegular">$30</div></div>
                                     <div class="robotoRegular cl-616161">Regular Cut</div>
                                     <div class="f-14 cl-9c9c9c pt-1">6656 us 301, Riverview, 33578</div>
                                   
                                 </div>
                                 <!-- end -->
                                 <!-- 3 -->
                                  <div class="text-center d-flex justify-content-center flex-column align-items-center">
                                    <div class="robotoRegular cl-616161">Pending</div>
                                    <div class="pt-3">  <button class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574 border-0 buttonBoxShadow pt-2 pb-2 robotoRegular pl-4 pr-4" type="submit">Book again</button></div>
                                  </div>
                                  <!-- end -->
    
                                </div>
                               </section>
                                 <!-- T H I R D E N D -->
                                 <!-- F O U R T H  S T A R T -->
                                 <section class="p-100 ">
                                  <div class="row pt-3 pb-3 mt-4 box_shadow1  ml-0 mr-0 borderRadius-10px justify-content-around">
                                    <div class="text-center"><p class="robotoRegular cl-515151 f-13 m-0">March</p><p class="f-45 m-0 cl-515151 robotoRegular">13</p>
                                   <p class="f-12 robotoRegular m-0"> 2021</p>
                                   <p class="f-8 robotoRegular m-0">5:42 pm</p>
                                   </div>
                                   <div class="height"></div>
      
                                   <!-- 2 -->
                                   <div class="col-md-5 col-lg-5 p-0 d-flex justify-content-center flex-column ">
                                   
                                     <div class="d-flex">  <div class="f-18 d-flex   align-items-center cl-000000 robotoRegular">Regular Cut-Recorte Regular</div>
                                     <div class="f-24 pl-2 cl-616161 robotoRegular">$30</div></div>
                                       <div class="robotoRegular cl-616161">Regular Cut</div>
                                       <div class="f-14 cl-9c9c9c pt-1">6656 us 301, Riverview, 33578</div>
                                     
                                   </div>
                                   <!-- end -->
                                   <!-- 3 -->
                                    <div class="text-center d-flex justify-content-center flex-column align-items-center">
                                      <div class="robotoRegular cl-616161">Pending</div>
                                      <div class="pt-3">  <button class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-bbbbbb border-0 buttonBoxShadow pt-2 pb-2 robotoRegular pl-4 pr-4" type="submit">Book again</button></div>
                                    </div>
                                    <!-- end -->
      
                                  </div>
                                 </section>
                                 <!-- F O U R T H E N D -->
                                  <!-- F I F T H  S T A R T -->
                                  <section class="p-100 ">
                                    <div class="row pt-3 pb-3 mt-4 box_shadow1  ml-0 mr-0 borderRadius-10px justify-content-around">
                                      <div class="text-center"><p class="robotoRegular cl-515151 f-13 m-0">March</p><p class="f-45 m-0 cl-515151 robotoRegular">13</p>
                                     <p class="f-12 robotoRegular m-0"> 2021</p>
                                     <p class="f-8 robotoRegular m-0">5:42 pm</p>
                                     </div>
                                     <div class="height"></div>
        
                                     <!-- 2 -->
                                     <div class="col-md-5 col-lg-5 p-0 d-flex justify-content-center flex-column ">
                                     
                                       <div class="d-flex">  <div class="f-18 d-flex   align-items-center cl-000000 robotoRegular">Regular Cut-Recorte Regular</div>
                                       <div class="f-24 pl-2 cl-616161 robotoRegular">$30</div></div>
                                         <div class="robotoRegular cl-616161">Regular Cut</div>
                                         <div class="f-14 cl-9c9c9c pt-1">6656 us 301, Riverview, 33578</div>
                                       
                                     </div>
                                     <!-- end -->
                                     <!-- 3 -->
                                      <div class="text-center d-flex justify-content-center flex-column align-items-center">
                                        <div class="robotoRegular cl-616161">Pending</div>
                                        <div class="pt-3">  <button class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574 border-0 buttonBoxShadow pt-2 pb-2 robotoRegular pl-4 pr-4" type="submit">Book again</button></div>
                                      </div>
                                      <!-- end -->
        
                                    </div>
                                   </section>
                                 <!-- F I F T H E N D -->
                            </div>
                            <div id="menu2" class="tab-pane fade">
                              <h3>Menu 2</h3>
                              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                            </div>
                            <div id="menu3" class="tab-pane fade">
                              <h3>Menu 3</h3>
                              <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            </div>
                          </div></div>
                         
                        </div>
                     </section>
<!-- Button trigger modal -->
 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  <!-- Launch demo modal -->
</button>

<!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header pl-5 pr-5 bg-3ac574 cl-ffffff p-3">
        <h5 class="modal-title pl-4" id="exampleModalLabel">Waiting Room</h5>
        <button type="button" class="close cl-ffffff opacity-1  " data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true" class="cl-ffffff f-35 mr-3">&times;</span>
        </button>
      </div>
      <div class="modal-body d-flex align-items-center flex-column justify-content-center pt-5">
        <div class="f-45 robotoMedium cl-3ac754">Thank you for joining.</div>
        <div class="f-24 cl-616161">Meeting ID : 121545456484</div>
         <div class="embed-responsive embed-responsive-21by9 ">
                                    <video  controls class="p-74">
                                        <source src="./assets/images/MyVideo4.mp4" type="video/mp4">
                              
                                      </video>
                                  </div>
                                  <div class="f-21 robotoRegular cl-3ac754 w-50 text-center">The host is currently meeting with other client and will let you into
                                    the meeting shortly.</div>
                                    <div class="f-21 robotoRegular pt-4">Average Wait:<span class="cl-3ac754 pl-3">Approx 5-10 Minutes</span></div>
      </div>
      <div class="modal-footer border-0">
        <button type="button" class="btn btn-secondary bg-3ac574 " data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div> 
 </div> 

	@endsection

{{-- content section end --}}

{{-- footer section start --}}


	@section('extra-script')

	@endsection

{{-- footer section end --}}
