@extends('layouts.frontend.app')
@section('title','Client Request')
{{-- head start --}}
	
	@section('extra-css')

  
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/utility.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/navbar.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/client_request.css') }}">
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

    @include('includes.frontend.navigations')
           
    <section class="main_padding pt-70 ">
       <form action="">
       <div class="robotoMedium cl-000000 f-34 pt-2 d-flex align-items-end mb-3">Post a request:</div>
        <div class="box-shadow-client">

        
        <div class="row pt-3">   
        <div class="col-md-6 pl-5 pr-5">
        <div class="input-group mb-3 border-input pt-3  d-flex flex-nowrap border-bottom">
                <div><img src="{{ asset('assets/frontend/images/Group 216.png') }}" alt="" class="pt-2"/></div>
                  <div class="w-100  ml-2">
                  <label for="" class="m-0 pl-3 cl-gray h5">Select catogery</label>
                    <select id="" name="" class="form-control w-100 border-0 pt-0 cl-gray">
                       <option value="Barbar">Barbar</option>
                       <option value="Albania">Albania</option>
                       <option value="Algeria">Algeria</option>
                       <option value="American Samoa">American Samoa</option>
                       <option value="Andorra">Andorra</option>
                       <option value="Angola">Angola</option>
                    </select>
                </div>
            </div>
        
        </div>
        <div class="col-md-6 pl-5 pr-5">
        <div class="input-group mb-3 border-input pt-3  d-flex flex-nowrap border-bottom ">
                <div><img src="{{ asset('assets/frontend/images/Group 222.png') }}" alt="" class="pt-2"/></div>
                <div class="w-100  ml-2">
                  <label for="" class="m-0 pl-3 cl-gray h5">Select sub-catogery</label>
                    <select id="country" name="country" class="form-control country-select w-100 border-0 pt-0 cl-gray">
                       <option value="Hair style">Hair style</option>
                       <option value="Albania">Albania</option>
                       <option value="Algeria">Algeria</option>
                       <option value="American Samoa">American Samoa</option>
                       <option value="Andorra">Andorra</option>
                       <option value="Angola">Angola</option>
                    </select>
                </div>
            </div>
        
        </div>
      </div>
        <div class="row mt-5 ">
          
        <div class="col-md-6 pl-5 pr-5">
        <div class="input-group mb-3 border-input pt-3  d-flex flex-nowrap border-bottom">
                <div><img src="{{ asset('assets/frontend/images/Group 224.png') }}" alt="" class="pt-2"/></div>
                  <div class="w-100  ml-2">
                  <label for="" class="m-0 pl-3  cl-gray h5">Delivery Timing</label>
                  <label class="pl-5 ml-5 mb-0">
                  <div class="form-check form-check-inline" >
  <input class="form-check-input bg-danger" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="hours" onchange="dropDownSelect(this)" checked>
  <label class="form-check-label" for="inlineRadio1" > &nbsp; Hours</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="days" onchange="dropDownSelect(this)">
  <label class="form-check-label" for="inlineRadio2" value="days">&nbsp; Days</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="months" onchange="dropDownSelect(this)">
  <label class="form-check-label" for="inlineRadio3">&nbsp; Months</label>
</div>
 
                  </label>
                    <select id="deliveryTime" name="country" class="form-control country-select w-100 border-0 pt-0 cl-gray">
                    <option value="1 hour">1 hour</option>
                       <option value="2 hour">2 hour</option>
                       <option value="3 hour">3 hour</option>
                       <option value="4 hour">4 hour</option>
                       <option value="5 hour">5 hour</option>
                       <option value="6 hour">6 hour</option>
                       <option value="7 hour">7 hour</option>
                       <option value="8 hour">8 hour</option>
                       <option value="9 hour">9 hour</option>
                       <option value="10 hour">10 hour</option>
                       <option value="11 hour">11 hour</option>
                       <option value="12 hour">12 hour</option>
                       <option value="13 hour">13 hour</option>
                       <option value="14 hour">14 hour</option>
                       <option value="15 hour">15 hour</option>
                       <option value="16 hour">16 hour</option>
                       <option value="17 hour">17 hour</option>
                       <option value="18 hour">18 hour</option>
                       <option value="19 hour">19 hour</option>
                       <option value="20 hour">20 hour</option>
                       <option value="21 hour">21 hour</option>
                       <option value="22 hour">22 hour</option>
                       <option value="23 hour">23 hour</option>
                       <option value="24 hour" selected>24 hour</option>
                    </select>
                   
                </div>
            </div>
        
        </div>
        <div class="col-md-6 pl-5 pr-5">
        <div class="input-group mb-3 border-input pt-3  d-flex flex-nowrap border-bottom ">
                <div><img src="{{ asset('assets/frontend/images/Group 223.png') }}" alt="" class="pt-2"/></div>
                <div class="w-100  ml-2">
                  <label for="" class="m-0 pl-3  cl-gray h5">Budget</label>
                  <input type="text" placeholder="$ 10 Minimum" class="w-100 border-0 pt-3 pl-3 h6 cl-gray">
                  
                </div>
            </div>
        
        </div>
      </div>
      <div class="row pt-5">
        <div class="col-md-12 pl-5 pr-5">
          <div class="form-group">
            <label for="exampleFormControlTextarea1" class="robotoRegular cl-gray d-flex justify-content-between">
              <div class="">
                Describe the services you are looking to offer: 
              </div>
              <div class="">
                0/2500 Max
              </div>
            </label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" placeholder="Hello my name is Caroline  the barber I’ve been cutting for over 15 years"></textarea>
          </div>
        </div>
      </div>
      <div class="text-right pr-4 pt-4 pb-5">

        <button href="" class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574  pl-4 pr-4 login_button " type="submit">
        Submit 
        <img src="{{ asset('assets/frontend/images/Path 109.png') }}" alt="" class="img-fluid pl-2">
        </button>
      </div>
      </div>
       </form>
    </section>
    <section class="main_padding pt-5 pb-5">
      <div class="row m-0 p-0">
        <div class="robotoMedium cl-000000 f-34 pt-2 d-flex align-items-end">Client Requests:</div>
        <div class="col-md-5 ml-auto p-0">
          <div class="d-flex m-0">  
            <div class="pt-4 w-100"> <input type="email" placeholder="Search for services" class="robotoRegular h-44 cl-6b6b6b    bg-transparent footer_input pt-2 pb-2 pl-3 w-100 rounded"></div>
            <div class="pt-4 pl-2 mr-3"> <button class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574  pt-2 pb-2 pl-2 pr-2" type="submit"><img src="{{ asset('assets/frontend/images/Group 188.png ') }}" alt=""></button></div>
           
            <div class="btn-group w-50 h-44 mt-4">
  <button type="button" class="btn btn-outline-success bg-3ac574 cl-ffffff dropdown-toggle-btn w-100 rounded" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    All Subcategories
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Separated link</a>
  </div>
</div>
           
          </div>
        </div>

             <!-- T A B L E -->
  <div class="table-responsive tableFixHead table_scroll mt-5 border robotoRegular">
  <table id="boxes-list" class="table m-0 header-fixed">
    <tr class="bg-white robotoRegular ">
  <thead class="sticky-top bg-white cl-3ac754 ">
      <th scope="col">Sr</th>
      <th scope="col">Date</th>
      <th scope="col">Clients</th>
      <th scope="col">Request</th>
      <th scope="col">Duration</th>
      <th scope="col">Budget</th>
    </tr>
  </thead>
  <tbody class="table_scroll">
    <tr class="border-bottom">
      <th scope="row">1</th>
      <td>Feb 16, 2021</td>   
      <td> 
            <img src="{{ asset('assets/frontend/images/GettyImages-1136599956-hair-stylist-1200x630-min.png') }}" alt="" class="img-fluid w-25"/>
            <p class="pt-2 m-0">Name is here</p>
      </td>
      <td>Basic hair cut no beard</td>
      <td>1 Day</td>
      <td>$25.00</td>
    </tr>
    <tr class="border-bottom">
      <th scope="row">2</th>
      <td>Feb 16, 2021</td>   
      <td> 
            <img src="{{ asset('assets/frontend/images/GettyImages-1136599956-hair-stylist-1200x630-min.png') }}" alt="" class="img-fluid w-25"/>
            <p class="pt-2 m-0">Name is here</p>
      </td>
      <td>Basic hair cut no beard</td>
      <td>1 Day</td>
      <td>$25.00</td>
    </tr>
    <tr class="border-bottom">
      <th scope="row">3</th>
      <td>Feb 16, 2021</td>   
      <td> 
            <img src="{{ asset('assets/frontend/images/GettyImages-1136599956-hair-stylist-1200x630-min.png') }}" alt="" class="img-fluid w-25"/>
            <p class="pt-2 m-0">Name is here</p>
      </td>
      <td>Basic hair cut no beard</td>
      <td>1 Day</td>
      <td>$25.00</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Feb 16, 2021</td>   
      <td> 
            <img src="{{ asset('assets/frontend/images/GettyImages-1136599956-hair-stylist-1200x630-min.png') }}" alt="" class="img-fluid w-25"/>
            <p class="pt-2 m-0">Name is here</p>
      </td>
      <td>Basic hair cut no beard</td>
      <td>1 Day</td>
      <td>$25.00</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Feb 16, 2021</td>   
      <td> 
            <img src="{{ asset('assets/frontend/images/GettyImages-1136599956-hair-stylist-1200x630-min.png') }}" alt="" class="img-fluid w-25"/>
            <p class="pt-2 m-0">Name is here</p>
      </td>
      <td>Basic hair cut no beard</td>
      <td>1 Day</td>
      <td>$25.00</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Feb 16, 2021</td>   
      <td> 
            <img src="{{ asset('assets/frontend/images/GettyImages-1136599956-hair-stylist-1200x630-min.png') }}" alt="" class="img-fluid w-25"/>
            <p class="pt-2 m-0">Name is here</p>
      </td>
      <td>Basic hair cut no beard</td>
      <td>1 Day</td>
      <td>$25.00</td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>Feb 16, 2021</td>   
      <td> 
            <img src="{{ asset('assets/frontend/images/GettyImages-1136599956-hair-stylist-1200x630-min.png') }}" alt="" class="img-fluid w-25"/>
            <p class="pt-2 m-0">Name is here</p>
      </td>
      <td>Basic hair cut no beard</td>
      <td>1 Day</td>
      <td>$25.00</td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>Feb 16, 2021</td>   
      <td> 
            <img src="{{ asset('assets/frontend/images/GettyImages-1136599956-hair-stylist-1200x630-min.png') }}" alt="" class="img-fluid w-25"/>
            <p class="pt-2 m-0">Name is here</p>
      </td>
      <td>Basic hair cut no beard</td>
      <td>1 Day</td>
      <td>$25.00</td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td>Feb 16, 2021</td>   
      <td> 
            <img src="{{ asset('assets/frontend/images/GettyImages-1136599956-hair-stylist-1200x630-min.png') }}" alt="" class="img-fluid w-25"/>
            <p class="pt-2 m-0">Name is here</p>
      </td>
      <td>Basic hair cut no beard</td>
      <td>1 Day</td>
      <td>$25.00</td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td>Feb 16, 2021</td>   
      <td> 
            <img src="{{ asset('assets/frontend/images/GettyImages-1136599956-hair-stylist-1200x630-min.png') }}" alt="" class="img-fluid w-25"/>
            <p class="pt-2 m-0">Name is here</p>
      </td>
      <td>Basic hair cut no beard</td>
      <td>1 Day</td>
      <td>$25.00</td>
    </tr>
    <tr>
      <th scope="row">11</th>
      <td>Feb 16, 2021</td>   
      <td> 
            <img src="{{ asset('assets/frontend/images/GettyImages-1136599956-hair-stylist-1200x630-min.png') }}" alt="" class="img-fluid w-25"/>
            <p class="pt-2 m-0">Name is here</p>
      </td>
      <td>Basic hair cut no beard</td>
      <td>1 Day</td>
      <td>$25.00</td>
    </tr>
    <tr>
      <th scope="row">12</th>
      <td>Feb 16, 2021</td>   
      <td> 
            <img src="{{ asset('assets/frontend/images/GettyImages-1136599956-hair-stylist-1200x630-min.png') }}" alt="" class="img-fluid w-25"/>
            <p class="pt-2 m-0">Name is here</p>
      </td>
      <td>Basic hair cut no beard</td>
      <td>1 Day</td>
      <td>$25.00</td>
    </tr>
    <tr>
      <th scope="row">13</th>
      <td>Feb 16, 2021</td>   
      <td> 
            <img src="{{ asset('assets/frontend/images/GettyImages-1136599956-hair-stylist-1200x630-min.png') }}" alt="" class="img-fluid w-25"/>
            <p class="pt-2 m-0">Name is here</p>
      </td>
      <td>Basic hair cut no beard</td>
      <td>1 Day</td>
      <td>$25.00</td>
    </tr>
    <tr>
      <th scope="row">14</th>
      <td>Feb 16, 2021</td>   
      <td> 
            <img src="{{ asset('assets/frontend/images/GettyImages-1136599956-hair-stylist-1200x630-min.png') }}" alt="" class="img-fluid w-25"/>
            <p class="pt-2 m-0">Name is here</p>
      </td>
      <td>Basic hair cut no beard</td>
      <td>1 Day</td>
      <td>$25.00</td>
    </tr>
    <tr>
      <th scope="row">15</th>
      <td>Feb 16, 2021</td>   
      <td> 
            <img src="{{ asset('assets/frontend/images/GettyImages-1136599956-hair-stylist-1200x630-min.png') }}" alt="" class="img-fluid w-25"/>
            <p class="pt-2 m-0">Name is here</p>
      </td>
      <td>Basic hair cut no beard</td>
      <td>1 Day</td>
      <td>$25.00</td>
    </tr>
    <tr>
      <th scope="row">16</th>
      <td>Feb 16, 2021</td>   
      <td> 
            <img src="{{ asset('assets/frontend/images/GettyImages-1136599956-hair-stylist-1200x630-min.png') }}" alt="" class="img-fluid w-25"/>
            <p class="pt-2 m-0">Name is here</p>
      </td>
      <td>Basic hair cut no beard</td>
      <td>1 Day</td>
      <td>$25.00</td>
    </tr>
    <tr>
      <th scope="row">17</th>
      <td>Feb 16, 2021</td>   
      <td> 
            <img src="{{ asset('assets/frontend/images/GettyImages-1136599956-hair-stylist-1200x630-min.png') }}" alt="" class="img-fluid w-25"/>
            <p class="pt-2 m-0">Name is here</p>
      </td>
      <td>Basic hair cut no beard</td>
      <td>1 Day</td>
      <td>$25.00</td>
    </tr>
  </tbody>
  </div>
  </table>
</div>
    </section>
    



                               


          <section class="main_padding bg-4b4b4b4 mt-5 pt-4 pb-4">
            <div class="d-flex justify-content-center  align-items-center"><img
            src="{{ asset('assets/frontend/images/Copyright © 2021 learnmelive, All Right Reserved learnmelive.png') }}"
            alt="" srcset=""></div>
          </section>




                      <div class="d-none" id="hours">
                       <option value="1 hour">1 hour</option>
                       <option value="2 hour">2 hour</option>
                       <option value="3 hour">3 hour</option>
                       <option value="4 hour">4 hour</option>
                       <option value="5 hour">5 hour</option>
                       <option value="6 hour">6 hour</option>
                       <option value="7 hour">7 hour</option>
                       <option value="8 hour">8 hour</option>
                       <option value="9 hour">9 hour</option>
                       <option value="10 hour">10 hour</option>
                       <option value="11 hour">11 hour</option>
                       <option value="12 hour">12 hour</option>
                       <option value="13 hour">13 hour</option>
                       <option value="14 hour">14 hour</option>
                       <option value="15 hour">15 hour</option>
                       <option value="16 hour">16 hour</option>
                       <option value="17 hour">17 hour</option>
                       <option value="18 hour">18 hour</option>
                       <option value="19 hour">19 hour</option>
                       <option value="20 hour">20 hour</option>
                       <option value="21 hour">21 hour</option>
                       <option value="22 hour">22 hour</option>
                       <option value="23 hour">23 hour</option>
                       <option value="24 hour">24 hour</option>
                      </div>
                      <div id="days" class="d-none">
                      <option value="1 day">1 day</option>
                       <option value="2 day">2 day</option>
                       <option value="3 day">3 day</option>
                       <option value="4 day">4 day</option>
                       <option value="5 day">5 day</option>
                       <option value="6 day">6 day</option>
                       <option value="1 week">1 week</option>
                        <option value="2 week">2 week</option>
                        <option value="3 week">3 week</option>
                     
                      </div>
                      <div id="months" class="d-none">
                      <option value="1 month">1 month</option>
                       <option value="2 month">2 month</option>
                       <option value="3 month">3 month</option>
                       <option value="4 month">4 month</option>
                       <option value="5 month">5 month</option>
                       <option value="6 month">6 month</option>
                       <option value="7 month">7 month</option>
                       <option value="8 month">8 month</option>
                       <option value="9 month">9 month</option>
                       <option value="10 month">10 month</option>
                       <option value="11 month">11 month</option>
                       <option value="12 month">12 month</option>
                      </div>

   

	@endsection

{{-- content section end --}}

{{-- footer section start --}}


	@section('extra-script')

  <script>
   function dropDownSelect(e){
   
      let deliveryTime = document.getElementById('deliveryTime');
      let hour = document.getElementById('hours').innerHTML;
      let day = document.getElementById('days').innerHTML;
      let month = document.getElementById('months').innerHTML;
    if(e.value=="hours"){
      deliveryTime.innerHTML = hour;
     
    }
    if(e.value=="days"){
      deliveryTime.innerHTML = day;
    }
    if(e.value=="months"){
      deliveryTime.innerHTML = month;
    }

   }
  </script>
	@endsection

{{-- footer section end --}}
