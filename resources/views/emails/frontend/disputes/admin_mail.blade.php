<section class="container" style="width: 60%;margin: auto;padding-top: 30px;">
    <div style="height:14px;background-color: #3AC574;border-top-left-radius: 30px !important;border-top-right-radius: 30px !important;">
        <section
        style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;border-top-left-radius: 14px !important;border-top-right-radius: 14px !important;">
            <div class="robotoMedium" style="font-size: 55px;padding-top: 43px;color: #3AC574;text-align: center;"><img src="{{ asset('assets/frontend/images/Group-383.png') }}" alt="" srcset=""></div>
            <section style="padding-left: 80px;padding-right: 80px;text-align: justify;padding-top: 38px;">
                <div class="robotoMedium" style="font-size: 1.8rem;border-bottom:1px solid #707070;padding-bottom: 15px;"><span
                    style="color: #646464;">Subject:</span><span style="color: #3AC574;">{{ $data['subject'] }}</span></div>
    
                <div class="robotoMedium" style="font-size: 18px;color: #646464;">
                    <dl>
                        <div>Hi {{ $data['username'] }},</div>
                        <div style="padding-top: 15px;">{{ $data['comment'] }}</div>
                    </dl>
                    @if($data['file'] !='')
                        <a href="{{ $data['file'] }}" style="color: #007ED2;">{{ $data['type'] }}</a>
                    @endif
                </div>
            </section>
            <section style="text-align: center;margin: auto;">
                <div style="    display: flex;padding-top: 38px;justify-content: center;">
                    <a href="{{ $data['url'] }}" style="background-color: #3AC574;border:0px;padding: 8px 46px 8px 46px;color: #fff;display: flex;text-decoration:none;align-items: center;justify-content: center;font-size: 18px;box-shadow: 8px 8px 2px 1px rgb(0 0 0 / 5%);border-radius: 4px !important;">
                        <img src="{{ asset('assets/frontend/images/Group-2378.png') }}"> &nbsp; Back 
                    </a>
                </div>
                <div style="color: #3AC574;font-size: 20px;padding-top: 15px;padding-bottom: 50px;"></div>
            </section>
        </section>
    </div>
</section>