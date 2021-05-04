@extends('layouts.frontend.app')
@section('title','Specialist Detail')
{{-- head start --}}

@section('extra-css')
<style type="text/css">
body {
  font-family: Arial;
  margin: 0;
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
a.prev,
a.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
  background-color: rgba(0, 0, 0, 0.8);
  color: #3AC574 !important;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
.w-930{
  width: 930px !important;
}
.h-600{
  height: 600px !important;
}
.w-157{
  width: 157px !important;
}
.h-101{
  height: 101px !important;
}
@media (min-width: 1200px){

  .container {
    width: 960px !important;
  }
}
</style>

@endsection



@section('content')

<section class="px-5 pt-2 pb-2 nav-bg-img robotoRegular">
    @include('includes.frontend.navbar')
</section>

@include('includes.frontend.navigations')
<section class=" main_padding pt-2  text-center">
    <p class="main_title RobotoMedium f-34 cl-000000 fw-600 m-0 ">Check Out My Work</p>
    <img src="{{ asset('assets/frontend/images/greencurve.png') }}" class="img-fluid pt-3" alt="">
</section>

<div class="container my-5 pr-0">
  @foreach ($portfolios as $key => $portfolio)
      
  <div class="mySlides h-600">
    <div class="numbertext">{{ $key+1 }} / {{ count($portfolios) }}</div>
    <img src="{{ asset($portfolio->image) }}" class="h-100 w-100">
  </div>
  @endforeach


    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

 

  <div class="row m-0">
     @foreach ($portfolios as $key => $portfolio)
      
  
  <div class="column w-157 h-101">
    <img class="demo cursor h-100 w-100" src="{{ asset($portfolio->image) }}"  onclick="currentSlide({{ $key+1 }})" alt="The Woods">
  </div>
  @endforeach
   
  </div>
</div>

@endsection




@section('extra-script')
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>
    
@endsection

{{-- footer section end --}}
