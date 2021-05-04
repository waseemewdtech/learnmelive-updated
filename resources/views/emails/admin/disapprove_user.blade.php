<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Learnmelive Disapprove</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="./assets/css/utility.css" />
  <link rel="stylesheet" href="./assets/css/index.css" />

  <!-- Bootstrap Link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
</head>

<body>

    <section class="container" style="width: 80%;margin: auto;padding-top: 30px;">
        <div
        style="height:14px;background-color: #e20000;border-top-left-radius: 30px !important;border-top-right-radius: 30px !important;">
        <section
        style="margin: auto;text-align: center;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;border-top-left-radius: 14px !important;border-top-right-radius: 14px !important;">
        <div style="margin: auto;padding-top: 50px;">
        <img src="{{ asset('assets/frontend/images/cross.png')}}" style="margin: auto;" alt="" srcset="">
        </div>
        <div class="robotoMedium" style="font-size: 55px;padding-top: 16px;color: #e20000;">Account Disapproved</div>
        
        <div class="robotoRegular"
        style="font-size: 21px;max-width: 500px;text-align: center;margin: auto; padding-top: 16px;border-bottom: 1px solid #707070;padding-bottom: 20px;">
        Hi,{{ @$data['name'] }} We sorry to inform you but your account has been banned permanently. We have found policy violation in your
        content
        </div>
        <div class="robotoRegular"
        style="font-size: 21px;margin: auto; padding-top: 16px;max-width: 500px;text-align: center;padding-bottom: 60px;"">Please contact
        our support team who can further assist if you have any further questions
        </div>
        
        <!-- <div class="robotoRegular" style="padding-top: 16px;padding-bottom: 60px;"><button type="button"
        style="padding-left: 42px;padding-right: 42px;padding-top: 12px;padding-bottom: 12px;border-radius: 4px;border: 0px ;background-color: #e20000;color: #ffffff !important;"><a
        href="" style="text-decoration: none;color: #ffffff;">Login</a></button></div> -->
        </section>
        </div>
        
        
        
        </section>



</body>

</html>