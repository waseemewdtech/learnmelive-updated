<div class="col-md-8 px-0">
    <input type="hidden" name="service_request_id" value=" {{ $service_request->id }}">
    <div class="cl-000000 robotoMedium f-24">{{ $service_request->title }}</div>
    <div class="d-flex">
        <div class="cl-3ac754 f-14 robotoRegular d-flex align-items-center ">Posted by:</div>
        <div class="pl-1 cl-6b6b6b f-14 robotoRegular d-flex align-items-center">{{ $service_request->User->username }}
        </div>
    </div>
    <div class="w-100 text-justify f-18 robotoRegular cl-6b6b6b ">
         {{ Str::limit($service_request->description, 200) }}
    </div>
    <div class="d-flex pt-2">
        <div>
            <div class="d-flex">
                <div><img src="{{ asset('assets/frontend/images/Group 305.png') }}" alt="" /></div>
                <div class="cl-3ac754 f-14 robotoRegular d-flex align-items-center pl-2">Posted</div>
                <div class="pl-1 cl-6b6b6b f-14 robotoRegular d-flex align-items-center">
                    {{ \Carbon\Carbon::parse($service_request->created_at)->diffForHumans() }}
                </div>
            </div>
        </div>
        <div></div>
    </div>
    <div class="d-flex pt-2">
        <div>
            <div class="d-flex">
                <div>@if($service_request->tags !=null)<img src="{{ asset('assets/frontend/images/Subtraction 2.png') }}" alt="" />@endif</div>
                <div class="pl-1 cl-6b6b6b f-14 robotoRegular d-flex align-items-center">
                    @php if($service_request->tags !=null){
                    $tags= explode('uploads/files/',$service_request->tags);
                    } @endphp
                    <a href="public/{{ $service_request->tags }}"
                        download="downlaod">{{ isset($tags)?$tags['1']:'' }}</a>
                </div>
            </div>
        </div>
        <div></div>
    </div>
    {{-- <div class="d-flex pt-2 pl-4">
        <div>
            <div class="d-flex">
                <div class="d-flex">
                    <div><img src="{{ asset('assets/frontend/images/Path 93.png') }}" alt="" /></div>
                    <div class="pl-2"><img src="{{ asset('assets/frontend/images/Path 93.png') }}" alt="" /></div>
                    <div class="pl-2"><img src="{{ asset('assets/frontend/images/Path 93.png') }}" alt="" /></div>
                    <div class="pl-2"><img src="{{ asset('assets/frontend/images/Path 93.png') }}" alt="" /></div>
                    <div class="pl-2"><img src="{{ asset('assets/frontend/images/Path 93.png') }}" alt="" /></div>
                </div>
                <div
                    class="pl-1 cl-3ac754 f-14 robotoRegular d-flex align-items-center reviews pl-2 pr-2 pt-1 pb-1 ml-2">
                    110 reviews</div>
            </div>
        </div>
        <div></div>
    </div> --}}
</div>
<div class="robotoMedium text-right col-md-4 px-0">
    <div class="f-24 cl-000000 white-spaces robotoMedium">${{ number_format(intval($service_request->budget))}}</div>
    <div class="f-21 cl-6b6b6b">USD</div>
</div>
