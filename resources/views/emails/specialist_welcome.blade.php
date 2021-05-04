<!DOCTYPE html>
    <head>
        <link href="{{ asset('assests/frontend/css/utility.css') }}"/>
    </head>

    <body>
        <section class="container" style="width: 80%;margin: auto;padding-top: 30px;">
            <div
            style="height:14px;background-color: #3AC574;border-top-left-radius: 30px !important;border-top-right-radius: 30px !important;">
            <section style="margin: auto;text-align: center;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;border-top-left-radius: 14px !important;border-top-right-radius: 14px !important;">
            <div style="margin: auto;padding-top: 50px;">
                <img src="{{ asset('assets/frontend/images/welcome.png')}}" style="margin: auto;" alt="" srcset="">
            </div>
            <div class="robotoMedium" style="font-size: 55px;padding-top: 16px;color: #3AC574;">Welcome!</div>
            <div class="robotoMedium" style="font-size: 32px;padding-top: 16px;color: #3AC574;">Hi, {{ @$data['name'] }} Thank you for joining Learnmelive</div>
            <div class="robotoRegular" style="font-size: 21px;max-width: 500px;text-align: center;margin: auto; padding-top: 16px;">We're excited to have you get
            started.Your request will be sent
            to the site administrator for approval.you will then
            receive an email with further instructions.</div>
            <div class="robotoRegular" style="font-size: 21px; padding-top: 16px;">Thanks</div>
            <div style="font-size: 21px; padding-top: 16px;">Learnmelive team </div>
            <div class="robotoRegular" style="padding-top: 16px;padding-bottom: 60px;">
                <a href="{{ url('/') }}" target="_blank" style="text-decoration: none;color: #ffffff;">
                    <button type="button" style="padding-left: 42px;padding-right: 42px;padding-top: 12px;padding-bottom: 12px;border-radius: 4px;border: 0px ;background-color: #3AC574;color: #ffffff !important;
                    cursor: pointer;outline: none;">
                    Back to homepage
                    </button>
                </a>
            </div>
            </section>
            </div>
        </section>

    </body>

</html>