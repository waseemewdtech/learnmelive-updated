@extends('layouts.frontend.app')
@section('title','terms_services')
{{-- head start --}}

@section('extra-css')


<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/utility.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/navbar.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/portfolio.css') }}">
<style type="text/css">
.dropdown-toggle::after {
    display: none;
}

.main_Tite_div {
    width: fin;
}
</style>
@endsection
{{-- head end --}}
<style>
.main_Tite {

    letter-spacing: 4px;
}

.w-fit-content {
    width: fit-content;
}
</style>

{{-- content section start --}}

@section('content')

<section class="px-5 pt-2 pb-2 nav-bg-img robotoRegular">
    {{-- <nav class="navbar navbar-expand-lg navbar-light p-0">
        <a class="navbar-brand" href="#"
          ><img
            src="{{ asset('assets/frontend/images/navlogo.png') }}"
    alt="navbar logo"
    class="img-fluid"
    /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="form-inline my-2 my-lg-0 bg-transparent border rounded">
            <input class="form-control mr-sm-2 w-18 bg-transparent text-white border-0" type="search"
                value="what are you looking for ?" aria-label="Search" />
            <img src="{{ asset('assets/frontend/images/search2.png') }}" alt="" class="img-fluid p-2 search-img" />
        </form>
        <ul class="navbar-nav ml-auto d-flex align-self-center f-20">
            <li class="nav-item col-md-2">
                <a class="nav-link cl-white" href="#">Blog <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item col-md-3 p-0">
                <a class="nav-link cl-white" href="#">About us</a>
            </li>
            <li class="nav-item dropdown col-md-3 p-0">
                <a class="nav-link cl-white" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="">
                    Messages
                    <span class="green-dot mt-1 ml-2"></span>
                </a>
                <div class="dropdown-menu p-0" aria-labelledby="navbarDropdown">
                    <nav>
                        <div class="nav nav-tabs row m-0" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link  col-md-6 text-center" id="nav-profile-tab" data-toggle="tab"
                                href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
                                Notifications</a>
                            <a class="nav-item nav-link active col-md-6 text-center" id="nav-home-tab" data-toggle="tab"
                                href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Inbox</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
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
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <a class="dropdown-item d-flex row m-0 pt-2" href="#">
                                <div class="col-md-2 p-0">
                                    <img src="{{ asset('assets/frontend/images/GettyImages-1136599956-hair-stylist-1200x630-min.png') }}"
                                        alt="" class="img-fluid" />
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
                                    <img src="{{ asset('assets/frontend/images/GettyImages-1136599956-hair-stylist-1200x630-min.png') }}"
                                        alt="" class="img-fluid" />
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
                                    <img src="{{ asset('assets/frontend/images/navlogo.png') }}" alt=""
                                        class="img-fluid" />
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
                                    <img src="{{ asset('assets/frontend/images/navlogo.png') }}" alt=""
                                        class="img-fluid" />
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
                            <div class="bg-3ac574 row m-0 pt-2 pb-3">
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
                <a class="nav-link" href="#"><img
                        src="{{ asset('assets/frontend/images/55881685_1284744685011014_8335587762602246144_n.png') }}"
                        alt="" class="img-fluid w-75" /></a>
            </li>
        </ul>
    </div>
    </nav> --}}
    @include('includes.frontend.navbar')
</section>



@include('includes.frontend.navigations')



<section class="main_padding mt-5">
    <div class="main_Tite_div d-flex justify-content-center flex-column align-items-center robotoMedium">
        <h2 class="main_Tite">TERMS OF SERVICE</h2> <img src="{{ asset('assets/frontend/images/greencurve.png') }}"
            class="img-fluid pt-1" alt="">
    </div>

    <div class="text-justify mt-5">

        <p class="cl-6b6b6b f-16 robotoRegular ">Welcome to learnme (hereinafter referred to as ‘’Application’’,
            ‘’App’’, “Website”, “We”, “Us”, “Our”), owned and operated by learnme. (hereinafter referred to as “the
            Company”) with its registered office located in Dover Delaware. The Website is offered to users (hereinafter
            referred to as “You” or “Your”) for use connditioned on user’s acceptance without modification of the terms,
            conditions, and notices contained herein (the "Terms"). </p>
        <p class="cl-6b6b6b f-16">BY CLICKING ON THE "ACCEPT" BUTTON AT THE END OF THE AGREEMENT ACCEPTANCE FORM, USERS
            AGREE TO BE BOUND BY THE TERMS AND CONDITIONS OF THIS AGREEMENT. PLEASE READ THIS ENTIRE AGREEMENT CAREFULLY
            BEFORE ACCEPTING ITS TERMS. WHEN YOU DOWNLOAD THIS WEBSITE, YOU AGREE TO ACCEPT THESE TERMS AND CONDITIONS
            OF USE. </p>
        <p class="cl-6b6b6b f-16 robotoRegular">Our Website provides an online platform/venue to its users to browse
            through the various categories of Service Professionals listed on the Website and avail the services of any
            Service Professional as per its requirement.</p>
        <p class="cl-6b6b6b f-16 robotoRegular">Please carefully read our Terms and our Privacy Policy, and which is
            incorporated by reference into these Terms. If you do not agree to these Terms, you have no right to
            download, obtain information from or otherwise continue using our Website. Failure to use the Website in
            accordance with these Terms may subject you to civil and criminal penalties. This Website reserves the right
            to recover the cost of services, collection charges and lawyer’s fees from persons using the Website
            fraudulently. This Website reserves the right to initiate legal proceedings against such persons for
            fraudulent use of the Website and any other unlawful acts or acts or omissions in breach of these terms and
            conditions.</p>
        <p class="cl-6b6b6b f-16 robotoRegular">PLEASE READ THESE TERMS OF USE CAREFULLY AS THEY CONTAIN IMPORTANT
            INFORMATION REGARDING YOUR LEGAL RIGHTS, REMEDIES AND OBLIGATIONS. THESE INCLUDE VARIOUS LIMITATIONS AND
            EXCLUSIONS, AND A CLAUSE THAT GOVERNS THE JURISDICTION AND VENUE OF DISPUTES.</p>
        <p class="cl-6b6b6b f-16 robotoRegular">IN USING THIS WEBSITE, YOU ARE DEEMED TO HAVE READ AND AGREED TO THE
            FOLLOWING TERMS AND CONDITIONS SET FORTH HEREIN. ANY INCIDENTAL DOCUMENTS AND LINKS MENTIONED SHALL BE
            CONSIDERED TO BE ACCEPTED JOINTLY WITH THESE TERMS. YOU AGREE TO USE THE WEBSITE ONLY IN STRICT
            INTERPRETATION AND ACCEPTANCE OF THESE TERMS AND ANY ACTIONS OR COMMITMENTS MADE WITHOUT REGARD TO THESE
            TERMS SHALL BE AT YOUR OWN RISK. THESE TERMS AND CONDITIONS FORM PART OF THE AGREEMENT BETWEEN THE USERS AND
            US. BY DOWNLOADING AND USING THIS WEBSITE AND/OR UNDERTAKING TO PERFORM A SERVICE BY US INDICATES YOUR
            UNDERSTANDING, AGREEMENT TO AND ACCEPTANCE, OF THE DISCLAIMER NOTICE AND THE FULL TERMS AND CONDITIONS
            CONTAINED HEREIN.</p>
        <h3 class="robotoMedium pt-3 pb-3">1. DEFINITIONS:</h3>
        <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">1.1.</span> <b>"Agreement"</b> means the terms and
            conditions of use as detailed herein including all Exhibits, privacy policy, all other policies published on
            the Website and will include the references to this agreement as amended, negated, supplemented, varied or
            replaced from time to time.</p>
        <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">1.2.</span> Learnme is online platform via which
            users can view the profiles of the Service Professionals and avail the services of the Service Professionals
            as per their requirements.</p>
        <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">1.3.</span> <b>"User/You/Your”</b> means an
            individual who uses our Website and registers/creates an account on our Website so that it can avail
            services by interacting with other users on the Website.</p>
        <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">1.4.</span> <b>“Services” </b> means an individual
            who uses our Website and registers/creates an account on our Website so that it can avail services by
            interacting with other users on the Website.</p>
        <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">1.5.</span> <b>“Account”</b>shall mean the accounts
            created by the Users on our Website in order to use the Services provided by our Website and requires
            information such as name, address, contact number etc.</p>
        <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">1.6.</span> <b>"Content"</b>means text, graphics,
            images, music, software, audio, video, information or other materials. </p>
        <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">1.7.</span> <b>"User Content" </b>means all content
            that a user submits or transmits to us through email, feedback, comments and messages on our Website.</p>
        <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">1.8.</span> <b> “Our Website Content” </b>shall mean
            all the Content that our Website makes available through the Services, including any Content licensed from a
            third party.</p>
        <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">1.9.</span> <b> Collective Content" </b>1.9.
            "Collective Content" means User Content and our Website Content. </p>
        <h3 class="robotoMedium pt-3 pb-3">2. INTERPRETATION:</h3>
        <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">2.1.</span> The official language of these terms
            shall be English. </p>
        <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">2.2.</span> The headings and sub-headings are merely
            for convenience purpose and shall not be used for interpretation. </p>
        <h3 class="robotoMedium pt-3 pb-3">3. ELIGIBILITY:</h3>
        <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">3.1.</span>You may, use the Service only if you are
            at least eighteen (18) years of age and can form a binding contract with us, and only in compliance with
            this Agreement and all applicable local, state, national, and international laws, rules and regulations.
        </p>
        <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">3.2.</span>Any use or access to the Service by
            anyone under 18 is strictly prohibited and in violation of this Agreement. Any person under the age of
            eighteen (18) years accessing the Website should do so only under parental guidance. Our Website reserves
            the right to terminate your membership and refuse to provide you with access to the Website if we discover
            that you are under the age of 18 years. The Service is not available to any Users previously removed from
            the Service by us, unless we provide such Users with specific written authorization to re-use the Service.
            Unauthorized Users are strictly prohibited from accessing or attempting to access, directly or indirectly,
            the Website. Any such unauthorized use is strictly forbidden and shall constitute a violation of applicable
            state and local laws. </p>
        <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">3.3.</span> By using our Website and its services,
            you represent and warrant that you are at least 18 years old and that you have the right, authority and
            capacity to enter into and abide by the terms and conditions of this Agreement. </p>
        <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">3.4.</span> If you use our Website on behalf of a
            company, organization, or other entity, then (a) "you" includes you and that entity, and (b) you represent
            and warrant that you are an authorized representative of the entity with the authority to bind the entity to
            this Agreement, and that you agree to this Agreement on the entity's behalf. </p>
        <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">3.5.</span>You must not be a competitor of our
            Website or use our Service for reasons that are in competition with us or otherwise to replicate some or all
            of the Service for any reason. </p>
        <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">3.6.</span> Our Website may, in its sole discretion,
            refuse to offer access to or use of the Website to any person or entity and change its eligibility criteria
            at any time. This provision is void where prohibited by law and the right to access the Website is revoked
            in such jurisdictions. </p>
        <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">3.7.</span> Except where additional terms and
            conditions are provided which are services specific, these terms and conditions supersede all previous
            representations, understandings, or agreements and shall prevail notwithstanding any variance with any other
            terms. </p>
        <h3 class="robotoMedium pt-3 pb-3">4. REGISTRATION:</h3>
        <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">4.1.</span> It is mandatory for the users to create
            an account on our Website in order to use our services. </p>
        <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">4.2.</span> In order to create an account with us:-
        </p>
        <p class="cl-6b6b6b f-16 robotoRegular"> <span class="pr-2">I.</span> You will first have to provide us with
            your Mobile Number and thereafter you will be texted with an OTP (One-time Password). Once you enter the
            OPT, you will be registered and for the purpose of creating your profile, you will have to enter your full
            name, email address, addresss, location, city and State. You can use your registered username and password
            for logging in to your account and accessing the services therafter.</p>
        <p class="cl-6b6b6b f-16 robotoRegular"> <span class="pr-2">II.</span> You represent and warrant that all
            required registration information you submit is truthful and accurate, and you will maintain the accuracy of
            such information. You are responsible for maintaining the confidentiality of your Account login information
            and are fully responsible for all activities that occur under your Account. You agree to immediately notify
            us of any unauthorized use, or suspected unauthorized use of your Account or any other breach of security.
            We cannot and will not be liable for any loss or damage arising from your failure to comply with the above
            requirements. </p>
        <p class="cl-6b6b6b f-16 robotoRegular"> <span class="pr-2">III.<span> You agree to provide and maintain
                    accurate, current and complete information about your Account. Without limiting the foregoing, in
                    the event you change any of your personal information as mentioned above in this Agreement, you will
                    update your Account information promptly.p>
                    <p class="cl-6b6b6b f-16 robotoRegular"> <span class="pr-2">4.3.</span> When creating an Account,
                        don’t:</p>
                    <p class="cl-6b6b6b f-16 robotoRegular"> <span class="pr-2">I.</span>Provide any false personal
                        information to us (including without limitation a false username) or create any Account for
                        anyone other than yourself without such other person’s permission;</p>
                    <p class="cl-6b6b6b f-16 robotoRegular"> <span class="pr-2">II.</span>Use a username that is the
                        name of another person with the intent to impersonate that person;</p>
                    <p class="cl-6b6b6b f-16 robotoRegular"> <span class="pr-2">III.</span>Use a username that is
                        subject to rights of another person without Websiteropriate authorization; or</p>
                    <p class="cl-6b6b6b f-16 robotoRegular"> <span class="pr-2">IV.</span>Use a username that is
                        offensive, vulgar or obscene or otherwise in bad taste.</p>
                    <p class="cl-6b6b6b f-16 robotoRegular"> <span class="pr-2">V.</span>We reserve the right to suspend
                        or terminate your Account if any information provided during the registration process or
                        thereafter proves to be inaccurate, false or misleading or to reclaim any username that you
                        create through the Service that violates our Terms. If you have reason to believe that your
                        Account is no longer secure, then you must immediately notify us at support@learnme.live.</p>
                    <p class="cl-6b6b6b f-16 robotoRegular"> <span class="pr-2">VI.</span>You may not transfer or sell
                        your Website account and User ID to another party. If you are registering as a business entity,
                        you personally guarantee that you have the authority to bind the entity to this Agreement.</p>
                    <p class="cl-6b6b6b f-16 robotoRegular"> <span class="pr-2">VII.</span> Our Services are not
                        available to temporarily or indefinitely suspended Users. Our Website reserves the right, in its
                        sole discretion, to cancel unconfirmed or inactive accounts. Our Website reserves the right to
                        refuse service to anyone, for any reason, at any time.</p>
                    <p class="cl-6b6b6b f-16 robotoRegular"> <span class="pr-2">VIII.</span> One individual/entity can
                        own only one account in his/her/its name.</p>
                    <p class="cl-6b6b6b f-16 robotoRegular"> <span class="pr-2">IX.</span> You agree to comply with all
                        local laws regarding online conduct and acceptable content. You are responsible for all
                        applicable taxes. In addition, you must abide by our Website’s terms of use as stated in the
                        Agreement and all other rules, policies and procedures listed on the Website and/or that may be
                        published from time to time on the Website by Company.</p>
                    <h3 class="robotoMedium pt-3 pb-3">5 SERVICES:</h3>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">5.1</span> learnme live provides an
                        online platform wherein the various service professionals will list their services under
                        specific category as per their expertise and then accordingly the customers can log in to their
                        account browse the Website and avail the services of the service professionals as per its
                        requirements.</p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">5.2</span> In order to avail the
                        services of a particular service professional, the customer will have to log in to its account
                        and accordingly contact the Service professional through video chat option available on the
                        website.</p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">5.3</span>Both the customer and the
                        service professional shall coordinate with each other in order to avail and provide the services
                        to each other.</p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">5.4</span> learnme live is a portal that
                        allows service professionals users and customers to connect easily and efficiently through
                        virtual means. learnme live does not provide medical advice or therapy services of any kind. Any
                        professional relationships service professionals and the customer.</p>
                    <h3 class="robotoMedium pt-3 pb-3">6. PAYMENTS:</h3>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">6.1</span>The customers/buyers shall
                        make payments to us via the means listed on our website.</p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">6.2</span> In addition to the payment of
                        the applicable purchase price for a purchased item, users are responsible for all applicable
                        taxes or duties associated with the purchase and sale of any items through the Service. </p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">6.3</span> Our website uses third party
                        payment Providers to receive payments from users. We are not responsible for delays or erroneous
                        transaction execution or cancellation of services due to payment issues. </p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">6.4</span> We take utmost care to work
                        with 3rd party payment Providers, but do not control their systems, processes, technology and
                        work flows, hence cannot be held responsible for any fault at the end of payment Providers. </p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">6.5</span> Our website reserves the
                        right to refuse to process transactions by users with a prior history of questionable charges
                        including without limitation breach of any agreements by Buyer with us or breach/violation of
                        any law or any charges imposed by Issuing Bank or breach of any policy.</p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">6.6</span>The users acknowledge that we
                        will not be liable for any damages, interests or claims etc. resulting from not processing a
                        Transaction/Transaction Price or any delay in processing a Transaction/Transaction Price which
                        is beyond our control.</p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">6.7</span> Our website reserves the
                        right to recover the cost of goods, collection charges and lawyers' fees from persons using the
                        Site fraudulently. We reserve the right to initiate legal proceedings against such persons for
                        fraudulent use of the Site and any other unlawful act or acts or omissions in breach of these
                        terms and conditions.</p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">6.8</span> We as a merchant shall be
                        under no liability whatsoever in respect of any loss or damage arising directly or indirectly
                        out of the decline of authorization for any Transaction, on Account of the Cardholder having
                        exceeded the preset limit mutually agreed by us with our acquiring bank from time to time.</p>
                    <h3 class="robotoMedium pt-3 pb-3">7. Payout Schedule:</h3>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> The first payout for every new Professional is typically
                        paid out 7 days after the first successful payment is received. This waiting period can be up to
                        14 days for businesses in certain industries. This allows our third-Party Payment Processer to
                        mitigate some of the risks inherent in providing credit services. </p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2">Service Professionals can view their payment transactions
                        anytime from their account by selecting Payment History.</p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">7.1</span><i>For US & Australia Service
                            Professionals, additional transactions (after the first successful transaction), are
                            processed every business day, and are deposited every 2-4 business days (depending on bank).
                            Additional Countries see payment deposit schedule below. </i></p>
                    <ul class="pl-5 robotoMedium cl-000000">
                        <li>United Sates, Australia: 2-4 Business Days</li>
                        <li> New Zealand: 4-6 Business Days</li>
                        <li> All Other Countries (Except for Brazil): 7-9 Calendar Days</li>
                        <li> Brazil: 30 Calendar Days</li>
                    </ul>
                    <h3 class="robotoMedium pt-3 pb-3"> 8. Refunds:</h3>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"><span class="pr-2">8.1</span>We allow refunds in cases of an
                        incomplete deal. The payment method shall be same for refund as was when the payment was made.
                        However, we reserve the right to change the payment method in certain special circumstances.</p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"><span class="pr-2">8.2</span>We may refund funds to Users
                        irrespective of whether a User has requested funds be refunded if:</p>
                    <ul class="pl-5 robotoRegular cl-6b6b6b ">
                        <li class="pt-"> The law or statute requires us to.</li>
                        <li class="pt-3">We are closing down our business.</li>
                        <li class="pt-3">In accordance with our refund policy</li>
                        <li class="pt-3">To avoid any dispute</li>
                        <li class="pt-3">If the refund is necessary to avoid a chargeback.</li>
                    </ul>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"><span class="pr-2">8.3</span>Refunds will be implemented
                        when a Customer or Service Professional initiates such. However, if you run into any issues or
                        have any inquiries, please send us a mail at support@learnme.live. If we reasonably determine,
                        having considered all the relevant circumstances, that you have made an excessive or
                        unreasonable number of requests to refund funds back to you or chargebacks, we may suspend,
                        limit or close your Account with us.</p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"><span class="pr-2">8.4</span>Processed refund requests can
                        take 5-10 days to appear on a customer's statement, depending on customers bank.</p>
                    <h3 class="robotoMedium pt-3 pb-3">9. CHARGEBACKS:</h3>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2">We are bound to process the chargeback requests and
                        instructions issued to us by third party payment processors or card issuers or banks. We cannot
                        and will not refuse or stop any payment chargebacks if instructed by the relevant bank
                        authorities, payment processors or card issuers.</p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2">You must cooperate with us and refrain from complaining with
                        us any chargeback reversal processed by us. You agree that you will abide by the reversal
                        requests processed by us. <i>- If you have already initiated a chargeback request with your
                            credit card issuer, you must not request a refund of funds by contacting us and must not
                            seek double recovery</i> </p>
                    <h3 class="robotoMedium pt-3 pb-3">10. Fees and Commissions:</h3>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"><span class="pr-2">10.1</span>Listing of services is free
                        with us. We DO NOT charge anything for posting services on our site. When a client hires a
                        specialist, we deduct 20% of the total service amount from the account of the specialist. </p>
                    <h3 class="robotoMedium pt-3 pb-3">11. YOU AGREE AND CONFIRM:</h3>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"><span class="pr-2">11.1</span> That you will use the
                        services provided by our Website, its affiliates and contracted companies, for lawful purposes
                        only and comply with all applicable laws and regulations while using the Website.</p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"><span class="pr-2">11.2</span> You will provide authentic
                        and true information in all instances where such information is requested of you. We reserve the
                        right to confirm and validate the information and other details provided by you at any point of
                        time. If upon confirmation your details are found not to be true (wholly or partly), we have the
                        right in our sole discretion to reject the registration and debar you from using the Services of
                        our Website and / or other affiliated Websites without prior intimation whatsoever.</p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"><span class="pr-2">11.3</span> That you are accessing the
                        services available on this Website and transacting at your sole risk and are using your best and
                        prudent judgment before entering into any dealings through this Website.</p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"><span class="pr-2">11.4</span> It is possible that the other
                        users (including unauthorized/unregistered users or "hackers") may post or transmit offensive or
                        obscene materials on the Website and that you may be involuntarily exposed to such offensive and
                        obscene materials. It also is possible for others to obtain personal information about you due
                        to your use of the Website, and that the recipient may use such information to harass or injure
                        you. We do not approve of such unauthorized uses, but by using the Website you acknowledge and
                        agree that we are not responsible for the use of any personal information that you publicly
                        disclose or share with others on the Website. Please carefully select the type of information
                        that you publicly disclose or share with others on the Website.</p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"><span class="pr-2">11.5</span> You agree that you will not:
                    </p>
                    <div class="pl-3">
                        <p class="cl-6b6b6b f-16 robotoRegular"><span class="pr-2">a.</span> Restrict or inhibit any
                            other user from using and enjoying the Interactive Features;</p>
                        <p class="cl-6b6b6b f-16 robotoRegular"><span class="pr-2">b.</span>Post or transmit any
                            unlawful, threatening, abusive, libelous, defamatory, obscene, vulgar, pornographic,
                            profane, or indecent information of any kind, including without limitation any transmissions
                            constituting or encouraging conduct that would constitute a criminal offense, give rise to
                            civil liability or otherwise violate any local, state, national, or international law;</p>
                        <p class="cl-6b6b6b f-16 robotoRegular"><span class="pr-2">d.</span> Post or transmit any
                            information, software, or other material which violates or infringes in the rights of
                            others, including material which is an invasion of privacy or publicity rights or which is
                            protected by copyright, trademark or other proprietary right, or derivative works with
                            respect thereto, without first obtaining permission from the owner or right holder.</p>
                        <p class="cl-6b6b6b f-16 robotoRegular"><span class="pr-2">e.</span>Alter, damage or delete any
                            Content or other communications that are not your own Content or to otherwise interfere with
                            the ability of others to access our Website;</p>
                        <p class="cl-6b6b6b f-16 robotoRegular"><span class="pr-2">f.</span>Claim a relationship with or
                            to speak for any business, association, institution or other organization for which you are
                            not authorized to claim such a relationship;</p>
                        <p class="cl-6b6b6b f-16 robotoRegular"><span class="pr-2">g.</span>Violate any operating rule,
                            policy or guideline of our Internet access Professional or online service.</p>
                        <p class="cl-6b6b6b f-16 robotoRegular"><span class="pr-2">h.</span>We reserve the right to
                            charge you for the services in near future if there is a significant change in our business
                            model. We shall inform you about any such change by amending our User Agreement. You agree
                            that Company reserves the sole right to change its business model and charge for the
                            services being provided herein.</p>
                    </div>
                    <h3 class="robotoMedium pt-3 pb-3">12. YOU MAY NOT USE THE WEBSITE FOR ANY OF THE FOLLOWING
                        PURPOSES:</h3>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"><span class="pr-2">12.1</span> Disseminating any unlawful,
                        harassing, libelous, abusive, threatening, harmful, vulgar, obscene, or otherwise objectionable
                        material.</p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"><span class="pr-2">12.2</span>Transmitting material that
                        encourages conduct that constitutes a criminal offense, results in civil liability or otherwise
                        breaches any relevant laws, regulations or code of practice.</p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"><span class="pr-2">12.3</span>You shall not create liability
                        for us or cause us to lose (in whole or in part) the services of our internet service
                        Professional ("ISPs") or other suppliers;</p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"><span class="pr-2">12.4</span>You shall not use any
                        "deep-link", "page-scrape", "robot", "spider" or other automatic device, program, algorithm or
                        methodology, or any similar or equivalent manual process, to access, acquire, copy or monitor
                        any portion of the Website or any Content, or in any way reproduce or circumvent the
                        navigational structure or presentation of the Website or any Content, to obtain or attempt to
                        obtain any materials, documents or information through any means not purposely made available
                        through the Website. We reserve our right to bar any such activity. </p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"><span class="pr-2">12.5</span>You shall not attempt to gain
                        unauthorized access to any portion or feature of the Website, or any other systems or networks
                        connected to the Website or to any server, computer, network, or to any of the services offered
                        on or through the Website, by hacking, password "mining" or any other illegitimate means.</p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"><span class="pr-2">12.6</span> You shall not probe, scan or
                        test the vulnerability of the Website or any network connected to the Website nor breach the
                        security or authentication measures on the Website or any network connected to the Website. You
                        may not reverse look-up, trace or seek to trace any information of any other User or visitor to
                        Website, or any other customer, including any account on the Website not owned by You, to its
                        source, or exploit the Website or any service or information made available or offered by or
                        through the Website, in any way where the purpose is to reveal any information, including but
                        not limited to personal identification or information, other than Your own information, as
                        provided for by the Website.</p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"><span class="pr-2">12.7</span> You shall not make any
                        negative, denigrating or defamatory statement(s) or comment(s) about Us or the brand name or
                        domain name used by Us or otherwise engage in any conduct or action that might tarnish the image
                        or reputation, of our Website or otherwise tarnish or dilute any of our trade or service marks,
                        trade name and/or goodwill associated with such trade or service marks, trade name as may be
                        owned or used by us. You agree that you will not take any action that imposes an unreasonable or
                        disproportionately large load on the infrastructure of the Website or our systems or networks,
                        or any systems or networks connected to us.</p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"><span class="pr-2">12.8</span> You agree not to use any
                        device, software or routine to interfere or attempt to interfere with the proper working of the
                        Website or any transaction being conducted on the Website, or with any other person's use of the
                        Website.</p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"><span class="pr-2">12.9</span> You may not forge headers or
                        otherwise manipulate identifiers in order to disguise the origin of any message or transmittal
                        you send to us on or through the Website or any service offered on or through the Website. You
                        may not pretend that you are, or that you represent, someone else, or impersonate any other
                        individual or entity.</p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"><span class="pr-2">12.10</span> You may not use the Website
                        or any content for any purpose that is unlawful or prohibited by these Terms of Use, or to
                        solicit the performance of any illegal activity or other activity which infringes the rights of
                        our Website and / or others.</p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"><span class="pr-2">12.11</span> Interfering with any other
                        person's use or enjoyment of the.</p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"><span class="pr-2">12.12</span>Breaching any applicable
                        laws;</p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"><span class="pr-2">12.13</span> Interfering or disrupting
                        networks or web Websites connected to the Website.</p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"><span class="pr-2">12.14</span> Making, transmitting or
                        storing electronic copies of materials protected by copyright without the permission of the
                        owner.</p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"><span class="pr-2">12.15</span> Without limiting other
                        remedies, we may, in our sole discretion, limit, suspend, or terminate our services and user
                        accounts, prohibit access to our Websites, services, Websites, and tools, and their content,
                        delay or remove hosted content, and take technical and legal steps to keep users from using our
                        Websites, services, Websites, or tools, if we think that they are creating problems or possible
                        legal liabilities, infringing the intellectual property rights of third parties, or acting
                        inconsistently with the letter or spirit of our policies. We also reserve the right to cancel
                        unconfirmed accounts or accounts that have been inactive for a period of months, or to modify or
                        discontinue our Website, services. We shall have all the rights to take necessary action and
                        claim damages that may occur due to your involvement/participation in any way on your own or
                        through group/s of people, intentionally or unintentionally in DoS/DDoS (Distributed Denial of
                        Services).</p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"><span class="pr-2">12.16</span>Further we prohibit the
                        transmission, distribution or posting of any matter which discloses personal or private
                        information concerning any person or entity, including without limitation phone number(s) or
                        addresses, credit, debit cards, calling card, User account numbers/ passwords or similar
                        financial information, and home phone numbers or addresses. Even though all of this is strictly
                        prohibited, there is a small chance that you might become exposed to such items and you further
                        waive your right to any damages (from any party) related to such exposure.</p>
                    <h3 class="robotoMedium pt-3 pb-3">13. OWNERSHIP:</h3>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2">All right, title, and interest in and to the Website
                        (excluding postings/content provided by the users) is and will remain the exclusive property of
                        our Website and its licensors. The Website service is protected by copyright, trademark, and
                        other laws of Dover Delaware. Nothing in these Terms gives you a right to use the name of the
                        Website or Website’s trademark or logo, or any other trademarks, logos, domain names, or other
                        distinctive brand features relating to the Website or located on the Website.</p>
                    <h3 class="robotoMedium pt-3 pb-3">14. USER CONTENT:</h3>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">14.1.</span>Some of the features of this
                        Website or the Services may allow Users to view, post, publish, share, store, or manage (a)
                        ideas, opinions, recommendations, or advice (“User Submissions/Content”), or (b) literary,
                        artistic or other content, including but not limited to photos and videos. User Content includes
                        all content submitted through your Account. By posting or publishing User Content to this
                        Website or to the Services, you represent and warrant to us that (i) you have all necessary
                        rights to distribute User Content via this Website or via the Services, either because you are
                        the author of the User Content and have the right to distribute the same, or because you have
                        the Websiteropriate distribution rights, licenses, consents, and/or permissions to use, in
                        writing, from the copyright or other owner of the User Content, and (ii) the User Content does
                        not violate the rights of any third party.</p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">14.2.</span> All reviews, comments,
                        feedback, submitted or offered to us on this Website or otherwise disclosed, submitted or
                        offered in connection with your use of this Website (collectively, the "Comments") shall be and
                        remain our property. Such disclosure, submission or offer of any Comments shall constitute an
                        assignment to us of all worldwide rights, titles and interests in all copyrights and other
                        intellectual properties in the Comments. Thus, we exclusively own all such rights, titles and
                        interests and shall not be limited in any way in its use, commercial or otherwise, of any
                        Comments. We will be entitled to use, reproduce, disclose, modify, adapt, create derivative
                        works from, publish, display and distribute any Comments you submit for any purpose whatsoever,
                        without restriction and without compensating you in any way. </p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">14.3.</span>We are and shall be under no
                        obligation (1) to maintain any Comments in confidence; (2) to pay you any compensation for any
                        Comments; or (3) to respond to any Comments. You agree that any Comments submitted by you to the
                        Website will not violate this policy or any right of any third party, including copyright,
                        trademark, privacy or other personal or proprietary right(s), and will not cause injury to any
                        person or entity. You further agree that no Comments submitted by you to the Website will be or
                        contain libelous or otherwise unlawful, threatening, abusive or obscene material, or contain
                        software viruses, political campaigning, commercial solicitation, chain letters, mass mailings
                        or any form of "spam".</p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">14.4.</span>Our Website does not
                        regularly review posted Comments, but does reserve the right (but not the obligation) to monitor
                        and edit or remove any Comments submitted to the Website. You grant us the right to use the name
                        that you submit in connection with any Comments. You agree not to use a false email address,
                        impersonate any person or entity, or otherwise mislead as to the origin of any Comments you
                        submit. You are and shall remain solely responsible for the content of any Comments you make and
                        you agree to indemnify us and our affiliates for all claims resulting from any Comments you
                        submit. We and our affiliates take no responsibility and assume no liability for any Comments
                        submitted by you or any third party. We reserve the right, but have no obligation, to monitor
                        the materials posted on the Website. Our Website shall have the right to remove or edit any
                        content that in its sole discretion violates, or is alleged to violate, any applicable law or
                        either the spirit or letter of these Terms of Use. Notwithstanding this right, you remain solely
                        responsible for the content of the materials you post on the Website and in your private
                        messages. Please be advised that such Content posted does not necessarily reflect our views. In
                        no event shall our Website assume or have any responsibility or liability for any Content posted
                        or for any claims, damages or losses resulting from use of Content and/or appearance of Content
                        on the Website. You hereby represent and warrant that you have all necessary rights in and to
                        all Content which you provide and all information it contains and that such Content shall not
                        infringe any proprietary or other rights of third parties or contain any libelous, tortuous, or
                        otherwise unlawful information.</p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">14.5.</span>You shall be solely
                        responsible for any and all of your User Content or User Content that is submitted through your
                        Account, and the consequences of, and requirements for, distributing it. With Respect to User
                        Submissions, you acknowledge and agree that:</p>
                      <div class="pl-5">
                      <p class="cl-6b6b6b f-16 robotoRegular"> <span class="pr-2">i.</span>User Submissions are entirely
                        voluntary;</p>
                    <p class="cl-6b6b6b f-16 robotoRegular"> <span class="pr-2">ii.</span>User Submissions do not
                        establish a confidential relationship or obligate us to treat User Submissions as confidential
                        or secret.</p>
                    <p class="cl-6b6b6b f-16 robotoRegular"> <span class="pr-2">iii.</span>We have no obligation, either
                        express or implied, to develop or use User Submissions, and no compensation is due to you or to
                        anyone else for any intentional or unintentional use of User Submissions.</p>
                      </div>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">14.6.</span>We shall own exclusive
                        rights (including all intellectual property and other proprietary rights) to any User
                        Submissions posted to this Website, and shall be entitled to the unrestricted use and
                        dissemination of any User Submissions posted to this Website for any purpose, commercial or
                        otherwise, without acknowledgment or compensation to you or to anyone else.</p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">14.7.</span>It is possible that any of
                        the user (including unauthorized users or "hackers") may post or transmit offensive or obscene
                        materials on the Website and that other users may be involuntarily exposed to such offensive and
                        obscene materials. It also is possible for others to obtain personal information about you due
                        to your use of the Website, and that the recipient may use such information to harass or injure
                        you. We do not Websiterove of such unauthorized uses, but by using the Website, you acknowledge
                        and agree that we are not responsible for the use of any personal information that you publicly
                        disclose or share with others on the Website. Please carefully select the type of information
                        that you publicly disclose or share with others on the Website.</p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">14.8.</span>You may upload to any area
                        of the Website or otherwise transmit, post, publish, reproduce or distribute, on or through our
                        Website only Content that is not subject to any Intellectual Property Rights, or Content in
                        which any holder of Intellectual Property Rights has given express authorization for
                        distribution over the Internet and on our website, without restriction whatsoever. Any Content
                        submitted with the consent of a copyright owner other than you should contain a phrase such as
                        "Copyright owned by [name of owner]; Used by Permission." By submitting Content to any Area, you
                        automatically grant and/or warrant that the owner of such Content, whether it be You or a third
                        party, has expressly granted to us the royalty-free, perpetual, irrevocable, non-exclusive,
                        unrestricted, worldwide right and license to use, reproduce, modify, adapt, publish, translate,
                        create derivative works from, sublicense, distribute, perform, and display such Content, in
                        whole or in part, worldwide and/or to incorporate it in other works in any form, media, or
                        technology now known or later developed for the full term of any Intellectual Property Rights
                        that may exist in such Content. You also permit us to sublicense to third parties the
                        unrestricted right to exercise any of the foregoing rights granted with respect to such Content.
                    </p>
                    <h3 class="robotoMedium pt-3 pb-3">15. INTELLECTUAL PROPERTY RIGHTS:</h3>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">15.1.</span>Our Website, our suppliers
                        and licensors expressly reserve all intellectual property rights in all text, programs,
                        products, processes, technology, content and other materials, which appears on this Website.
                        Access to this Website does not confer and shall not be considered as conferring upon anyone any
                        license under any of our Website or any third party's intellectual property rights. All rights,
                        including copyright, in this Website are owned by or licensed to us or third party suppliers.
                        Any use of this Website or its contents, including copying or storing it or them in whole or
                        part, other than for your own personal, non-commercial use is prohibited without the permission
                        of our Website. You cannot modify, distribute or re-post anything on this Website for any
                        purpose.</p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">15.2.</span>The Website names and logos
                        and all related service and our slogans are the trademarks or service marks of our Website. All
                        other marks are the property of their respective companies. No trademark or service mark license
                        is granted in connection with the materials contained on this Website. Access to this Website
                        does not authorize anyone to use any name, logo or mark in any manner.</p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">15.3.</span>All materials, including
                        images, text, illustrations, designs, icons, photographs, programs, music clips or downloads,
                        video clips and written and other materials that are part of this Website (collectively, the
                        "Contents") are intended solely for personal, non-commercial use. You may download or copy the
                        Contents and other downloadable materials displayed on the Website for your personal use only.
                        No right, title or interest in any downloaded materials or software is transferred to you as a
                        result of any such downloading or copying. You may not reproduce (except as noted above),
                        publish, transmit, distribute, display, modify, create derivative works from, sell or
                        participate in any sale of or exploit in any way, in whole or in part, any of the Contents, the
                        company or any related software. All software used on this Website is the property of our
                        Website or its suppliers and protected by copyright laws of Dover Delaware. Any other use,
                        including the reproduction, modification, distribution, transmission, republication, display, or
                        performance, of the Contents on this Website is strictly prohibited. Unless otherwise noted, all
                        Contents are copyrights, trademarks and/or other intellectual property owned, controlled or
                        licensed by our Website, one of its affiliates or by third parties who have licensed their
                        materials to us and are protected by copyright laws of Dover Delaware The compilation (meaning
                        the collection, arrangement, and assembly) of all Contents on this Website is the exclusive
                        property of our company and is also protected by Copyright laws of the Dover Delaware.</p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">15.4.</span>We have the right to remove
                        the Content alleged to be infringing without prior notice, at our sole discretion, and without
                        liability to you. In Websiteropriate circumstances, we will also terminate a user’s account if
                        we determine that the user is a repeat infringer.</p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> If you believe in good faith that any material used or
                        displayed on or through our Website infringes your copyright, you (or your agent) may send us a
                        notice at support@learnme.live requesting that the material be removed, or access to it blocked,
                    </p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">15.5.</span>please provide us with the
                        following information: </p>
                     <div class="pl-5">
                     <p class="cl-6b6b6b f-16 robotoRegular"> <span class="pr-2">i.</span>a physical or electronic
                        signature of the copyright owner or a person authorized to act on their behalf; </p>
                    <p class="cl-6b6b6b f-16 robotoRegular"> <span class="pr-2">ii.</span>identification of the
                        copyrighted work claimed to have been infringed;</p>
                    <p class="cl-6b6b6b f-16 robotoRegular"> <span class="pr-2">iii.</span>identification of the
                        material that is claimed to be infringing or to be the subject of infringing activity and that
                        is to be removed or access to which is to be disabled, and information reasonably sufficient to
                        permit us to locate the material;</p>
                    <p class="cl-6b6b6b f-16 robotoRegular"> <span class="pr-2">iv.</span>Your contact information,
                        including your address, telephone number and an email address; a statement by you that you have
                        a good faith belief that use of the material in the manner complained of is not authorized by
                        the copyright owner, its agent, or the law; and</p>
                    <p class="cl-6b6b6b f-16 robotoRegular"> <span class="pr-2">v.</span>a statement that the
                        information in the notification is accurate, and that You are authorized to act on behalf of the
                        copyright owner.</p>
                     </div>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">15.6.</span>You should assume that
                        everything that you see or read on this Website is copyrighted unless otherwise noted and may
                        not be copied, reproduced, distributed, modified, published, downloaded, posted, or transmitted
                        in any way, without the prior written consent of our Website or other copyright owner, EXCEPT:
                        You may print copies of the material for your personal, noncommercial use only, provided that
                        you do not delete or change any copyright, trademark, or other proprietary notices. Unless
                        otherwise indicated, all marks displayed on our Website are subject to the trademark rights of
                        our Website, including our name and Logo, corporate logos and emblems. Modifying, distributing
                        or using for any purpose the material in any of our Website which is copyrighted or otherwise
                        protected under intellectual property laws directly violates our intellectual property rights.
                        The material contained in this Website is copyrighted, is protected by worldwide copyright laws
                        and treaty provisions, and is provided for lawful purposes only.</p>
                    <h3 class="robotoMedium pt-3 pb-3">16. INDEMNITY:</h3>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2">Users agree to defend, indemnify and hold harmless our
                        Website, its employees, directors, officers, agents and their successors and assigns from and
                        against any and all claims, liabilities, damages, losses, costs and expenses, including
                        attorney's fees, caused by or arising out of claims based upon your actions or inactions, which
                        may result in any loss or liability to our Website or any third party including but not limited
                        to breach of any warranties, representations or undertakings or in relation to the
                        non-fulfillment of any of your obligations under this User Agreement or arising out of your
                        violation of any applicable laws, regulations including but not limited to Intellectual Property
                        Rights, payment of statutory dues and taxes, claim of libel, defamation, violation of rights of
                        privacy or publicity, loss of service by other subscribers and infringement of intellectual
                        property or other rights. This clause shall survive the expiry or termination of this User
                        Agreement.</p>
                    <h3 class="robotoMedium pt-3 pb-3">17. TERMINATION:</h3>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">17.1.</span>We may, at any time and
                        without notice, suspend, cancel, or terminate your right to use the Website (or any portion of
                        the Website). In the event of suspension, cancellation, or termination, you are no longer
                        authorized to access the part of the Website affected by such suspension, cancellation, or
                        termination. In the event of any suspension, cancellation, or termination, the restrictions
                        imposed on you with respect to material downloaded from the Website, and the disclaimers and
                        limitations of liabilities set forth in the Agreement, shall survive.</p>
                        <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">17.2.</span>Without limiting the
                        foregoing, we may close, suspend or limit your access to your Account:</p>
                     <div class="pl-5">
                   
                    <p class="cl-6b6b6b f-16 robotoRegular"> <span class="pr-2">i.</span>if we determine that you have
                        breached, or are acting in breach of, this User Agreement; </p>
                    <p class="cl-6b6b6b f-16 robotoRegular"> <span class="pr-2">ii.</span>if we determine that you have
                        breached legal liabilities (actual or potential), including infringing someone else's
                        Intellectual Property Rights;</p>
                    <p class="cl-6b6b6b f-16 robotoRegular"> <span class="pr-2">iii.</span>if we determine that you have
                        engaged, or are engaging, in fraudulent, or illegal activities;</p>
                    <p class="cl-6b6b6b f-16 robotoRegular"> <span class="pr-2">iv.</span>you do not respond to account
                        verification requests;</p>
                    <p class="cl-6b6b6b f-16 robotoRegular"> <span class="pr-2">v.</span>to manage any risk of loss to
                        us, a User, or any other person; or</p>
                    <p class="cl-6b6b6b f-16 robotoRegular"> <span class="pr-2">vi.</span>For other similar reasons.</p>
                     </div>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">17.3.</span>If we close your Account due
                        to your breach of this User Agreement, you may also become liable for fees in an amount as
                        ascertained by the Website. </p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">17.4.</span>In the event that we close
                        your Account, you will have no claim whatsoever against us in respect of any such suspension or
                        termination of your Account.</p>
                    <h3 class="robotoMedium pt-3 pb-3">18. GOVERNING LAW AND JURISDICTION:</h3>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">18.1.</span>This Agreement shall be
                        governed by and construed in accordance with the laws of Dover Delaware, without regard to its
                        choice of law principles. </p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">18.2.</span>The parties consent to
                        exclusive jurisdiction and venue in the courts sitting in Dover Delaware.</p>
                    <h3 class="robotoMedium pt-3 ">19. RESOLUTION OF DISPUTES:</h3>
                    <h5 class="robotoMedium pt-2 pb-2">19.1. DISPUTE BETWEEN YOU AND US:</h5>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">a.</span>In the interest of resolving
                        disputes between you and us in the most expedient and cost effective manner, you and we agree
                        that any and all disputes arising in connection with the Terms shall be resolved by binding
                        arbitration. Arbitration is more informal than a lawsuit in court. Arbitration uses a neutral
                        arbitrator instead of a judge or jury, may allow for more limited discovery than in court, and
                        can be subject to very limited review by courts. Arbitrators can award the same damages and
                        relief that a court can award. Our agreement to arbitrate disputes includes, but is not limited
                        to all claims arising out of or relating to any aspect of the Terms, whether based in contract,
                        tort, statute, fraud, misrepresentation or any other legal theory, and regardless of whether the
                        claims arise during or after the termination of the Terms. YOU UNDERSTAND AND AGREE THAT, BY
                        ENTERING INTO THE TERMS, YOU AND WE ARE EACH WAIVING THE RIGHT TO A TRIAL BY JURY OR TO
                        PARTICIPATE IN A CLASS ACTION.</p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">b.</span>The language used in
                        Arbitration shall be English and the award of the arbitration shall be binding on both, you and
                        us.</p>
                    <h5 class="robotoMedium pt-2 pb-2">19.2. DISPUTE BETWEEN USERS ON THE WEBSITE</h5>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">a.</span>If there is a dispute between
                        users on this site, we or our Website shall be under no obligation to become involved. In the
                        event that You have a dispute with one or more Users in regard to anything be it transactions,
                        disagreement as to price, listing, service, etc. You hereby release us and our officers,
                        employees, agents and successors in rights from claims, demands and damages (actual and
                        consequential) of every kind or nature, known or unknown, suspected and unsuspected, disclosed
                        and undisclosed, arising out of or in any way related to such disputes and / or our service.</p>
                    <h3 class="robotoMedium pt-3 ">20. DISCLAIMER:</h3>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">20.1.</span>The Website is provided
                        without any warranties or guarantees and in an "As Is" condition. You must bear the risks
                        associated with the download and use of the Website.</p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">20.2.</span>We make no warranty that the
                        Services or Website will meet your requirements or that the Services or your access to the
                        Website will be uninterrupted, timely, accurate or reliable; nor do we make any warranty as to
                        any information that may be obtained through the Services or Website. In case there is any
                        defect in any software being used for the provision of the Services, we do not make any warranty
                        that defects in such software will be corrected. You understand and agree that any material
                        and/or data downloaded or otherwise obtained through use of the Services or Website is done at
                        your own discretion and risk and you will be solely responsible for any damage to your computer
                        system or loss of data that results from the download of such material or data.</p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">20.3.</span>The Website provides content
                        from other Websites/Internet sites or resources and while our Website tries to ensure that
                        material included on the Website is correct, reputable and of high quality, it shall not accept
                        responsibility if this is not the case. We will not be responsible for any errors or omissions
                        or for the results obtained from the use of such information or for any technical problems you
                        may experience with the Website. This disclaimer constitutes an essential part of this User
                        Agreement. In addition, to the extent permitted by applicable law, we are not liable, and you
                        agree not to hold Company responsible, for any damages or losses (including, but not limited to,
                        loss of money, goodwill or reputation, profits, or other intangible losses or any special,
                        indirect, or consequential damages) resulting directly or indirectly from:</p>
                <div class="pl-5">
                <p class="cl-6b6b6b f-16 robotoRegular"> <span class="pr-2">i.</span>Your use of or your inability
                        to use our Website, Services and tools; </p>
                    <p class="cl-6b6b6b f-16 robotoRegular"> <span class="pr-2">ii.</span>Delays or disruptions in our
                        Website, Services, or tools;</p>
                    <p class="cl-6b6b6b f-16 robotoRegular"> <span class="pr-2">iii.</span>Viruses or other malicious
                        software obtained by accessing our Website, Services, or tools or any site, Services, or tool
                        linked to our Website, Services, or tools;</p>
                    <p class="cl-6b6b6b f-16 robotoRegular"> <span class="pr-2">iv.</span>Glitches, bugs, errors, or
                        inaccuracies of any kind in our Website, Services, and tools or in the information and graphics
                        obtained from them;</p>
                    <p class="cl-6b6b6b f-16 robotoRegular"> <span class="pr-2">v.</span>The content, actions, or
                        inactions of third parties, including items listed using our Website, services, or tools or the
                        destruction of allegedly fake items;</p>
                    <p class="cl-6b6b6b f-16 robotoRegular"> <span class="pr-2">vi.</span>A suspension or other action
                        taken with respect to your account; and</p>
                </div>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">20.4.</span>To the fullest extent
                        permitted under applicable law, our Website or its suppliers shall not be liable for any
                        indirect, incidental, special, consequential or exemplary damages, including but not limited to,
                        damages for loss of profits, goodwill, use, data or other intangible losses arising out of or in
                        connection with the Website, its services or this User Agreement. </p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">20.5.</span>The Content on the Website
                        is provided for general information only. It is not intended to amount to advice on which you
                        should rely. You must obtain specialist advice before taking, or refraining from, any action on
                        the basis of the content on the Website. </p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">20.6.</span>User understands and agrees
                        that any information or material and/or goods or services obtained through the service is done
                        at user's own discretion and risk and that user will be solely responsible for any damage
                        resulting from any transaction.</p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">20.7.</span>No advice or information,
                        whether oral or written, obtained by user from us for free or through or from the service shall
                        create any warranty not expressly stated herein.</p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">20.8.</span>Users agree that we are only
                        a venue wherein various services are listed and we cannot be held liable for any action or
                        inaction of the Service Professionals listed on the website.</p>
                    <h3 class="robotoMedium pt-3 ">21. PRIVACY:</h3>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2">We respect the privacy of our users and take all possible
                        measures to protect them. Our Privacy Policy has all the practices, measures and steps we have
                        to protect your privacy. </p>
                    <h3 class="robotoMedium pt-3 ">22. SECURITY:</h3>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">a. </span>We have employed highest
                        possible security measures to protect your data which is stored with us. While we take all
                        possible measure steps, you must immediately notify us at support@learnme.live upon becoming
                        aware of any unauthorized access, any illegal online activity or any other security breach
                        pertaining to the Website, your Account or our Services and do everything under your control to
                        mitigate the unauthorized access or security breach (including providing us the evidence and
                        notifying Websiteropriate authorities). You are solely responsible for securing your password.
                        We will not be liable for any loss or damage arising from unauthorized access of your account
                        resulting from your failure to secure your password.</p>
                    <h3 class="robotoMedium pt-3 ">23. EXPRESS RELEASE:</h3>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2">You expressly hereby release and waive all claims against
                        the Company, and its subsidiaries, affiliates, officers, agents, licensors, co-branders or other
                        partners, and employees from any and all liability for claims, damages (actual and/or
                        consequential), costs and expenses (including litigation costs and attorneys' fees) of every
                        kind and nature, arising from or in any way related to your use of our Website. You understand
                        that any fact relating to any matter covered by this release may be found to be other than now
                        believed to be true and you accept and assume the risk of such possible differences in fact. In
                        addition, you expressly waive and relinquish any and all rights and benefits which you may have
                        under any other state or federal statute or common law principle of similar effect, to the
                        fullest extent permitted by law. </p>
                    <h3 class="robotoMedium pt-3 ">24. USER AGREEMENT AS DEFENCE:</h3>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> The suits which are impliedly or specifically barred by
                        this agreement shall be opposed by us by pleading this agreement. </p>
                    <h3 class="robotoMedium pt-3 ">NOTICES:</h3>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">24.1.</span>In your case, we will send
                        you any notice at your provided email address (either during the registration process or when
                        your email address changes). Notice shall be deemed given 24 hours after email is sent, unless
                        the sending party is notified that the email address is invalid. Alternatively, we may give you
                        notice by certified mail, postage prepaid and return receipt requested, to the address provided
                        to us. In such case, notice shall be deemed given three days after the date of mailing.</p>
                    <h3 class="robotoMedium pt-3 ">25. OUR SERVICE AND GUARANTEES:</h3>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2">Our Website reserves the right to modify or terminate the
                        Website’s service for any reason, without notice, at any time. We also reserve the right to
                        sell, alter, transfer or delegate our rights under this agreement to anyone without any prior
                        notice to you. Our Website does not guarantee continuous, uninterrupted access to the Website,
                        and operation of the Website may be interfered with by numerous factors outside our control.</p>
                    <h3 class="robotoMedium pt-3 ">26. LINKS TO OTHER WEBSITES:</h3>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2">Links to third party Websites on this Website are provided
                        solely as a convenience to you. If you use these links, a new browser will be lodged to access
                        linked Websites. We have not reviewed these third party Websites and do not control and are not
                        responsible for any of these Websites or their content and their privacy policy and terms and
                        conditions. If you decide to access any of the third party Websites linked to this Website, you
                        do this entirely at your own risk.</p>
                    <h3 class="robotoMedium pt-3 ">27. NO WAIVER IMPLIED:</h3>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2">The failure of us to enforce at any time any of the
                        provisions of these of Agreement, or the failure to require at any time performance by you of
                        any of the provisions of these provisions, shall in no way be construed to be a present or
                        future waiver of such provisions, nor in any way affect our right to enforce each and every such
                        provision thereafter. The express waiver by us of any provision, condition or requirement of
                        these provisions shall not constitute a waiver of any future obligation to comply with such
                        provision, condition or requirement.</p>
                    <h3 class="robotoMedium pt-3 ">28. SEVERABILITY:</h3>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2">Each Term shall be deemed to be severable. If any Term or
                        portion thereof is found to be invalid or unenforceable, such invalidity or unenforceability
                        shall in no way effect the validity or enforceability of any other Term.</p>
                    <h3 class="robotoMedium pt-3 ">29. ASSIGNMENT:</h3>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">29.1.</span>You will not assign any
                        rights or delegate any obligations under these Terms, in whole or in part, by operation of law
                        or otherwise, without obtaining our prior written consent, which may be withheld in our sole
                        discretion. </p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">29.2.</span>We may assign our rights and
                        delegate any of our obligations under these Terms, in whole or in part, without your consent.
                        Any assignment or delegation in violation of the foregoing will be null and void. These Terms
                        will be binding and inure to the benefit of each party’s permitted successors and assigns.</p>
                    <h3 class="robotoMedium pt-3 ">30. FORCE MAJEURE:</h3>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">30.1.</span>We shall be under no
                        liability to you in respect of anything that, if not for this provision, would or might
                        constitute a breach of these Terms, where this arises out of circumstances beyond our control,
                        including but not limited to:</p>
                        <div class="pl-5">
                        <p class="cl-6b6b6b f-16 robotoRegular"> <span class="pr-2">i.</span>Acts of god;</p>
                    <p class="cl-6b6b6b f-16 robotoRegular"> <span class="pr-2">ii.</span>Natural disasters;</p>
                    <p class="cl-6b6b6b f-16 robotoRegular"> <span class="pr-2">iii.</span>Sabotage;</p>
                    <p class="cl-6b6b6b f-16 robotoRegular"> <span class="pr-2">iv.</span>Accident;</p>
                    <p class="cl-6b6b6b f-16 robotoRegular"> <span class="pr-2">v.</span>Riot;</p>
                    <p class="cl-6b6b6b f-16 robotoRegular"> <span class="pr-2">vi.</span>Shortage of supplies,
                        equipment, and materials;</p>
                    <p class="cl-6b6b6b f-16 robotoRegular"> <span class="pr-2">vii.</span>Strikes and lockouts;</p>
                    <p class="cl-6b6b6b f-16 robotoRegular"> <span class="pr-2">viii.</span>Civil unrest;</p>
                    <p class="cl-6b6b6b f-16 robotoRegular"> <span class="pr-2">ix.</span>Computer hacking; or</p>
                    <p class="cl-6b6b6b f-16 robotoRegular"> <span class="pr-2">x.</span>Malicious damage.</p>
                        </div>
                    <h3 class="robotoMedium pt-3 ">31. MODIFICATION:</h3>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2">The Terms and Conditions cannot be modified on an individual
                        basis by any person affiliated, or claiming affiliation, with us. Nothing in this section will
                        prevent us from modifying the terms of these Terms and Conditions and posting such modifications
                        on our Website. We reserve the right, in our sole and exclusive discretion, to revise these
                        terms and conditions at any time. All revisions shall be posted on this page. Since you are
                        bound by all revisions made by us, you should review this page each time you connect to our
                        Website. It is important that you fully read and understand the terms and conditions you are
                        agreeing to be bound by, when you use this Website.</p>
                    <h3 class="robotoMedium pt-3 ">32. COMMUNICATIONS:</h3>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">32.1.</span>Our Website’s team may send
                        you information about offers, notices, letters and other communication to your email. You can
                        ask us to refrain from sending you offers or promotional offers by sending us an email at <a
                            href="mailto: support@learnme.live">support@learnme.live</a>, or by clicking the unsubscribe
                        link in our emails sent to you. </p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">32.2.</span>You consent to receive
                        notices and information from us in respect of the Website and Services by electronic
                        communication. You may withdraw this consent at any time, but if you do so we may choose to
                        suspend or close your Account.</p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">32.3.</span>By using our services, you
                        are deemed to have executed this Agreement electronically; effective on the date you register
                        your Account and start using our services. Your Account registration constitutes an
                        acknowledgement that you are able to electronically receive, download, and print this Agreement.
                    </p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">32.4.</span>In connection with this
                        Agreement, you may be entitled to receive certain records, such as contracts, notices, and
                        communications, in writing. To facilitate your use of the Website, you give us permission to
                        provide these records to you electronically instead of in paper form.</p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">32.5.</span>By registering for an
                        Account, you consent to electronically receive and access, via email, all records and notices
                        for the services provided to you under this Agreement that we would otherwise be required to
                        provide to you in paper form. However, we reserve the right, in our sole discretion, to
                        communicate with you via the Postal Service and other third-party mail services using the
                        address under which your account is registered. Your consent to receive records and notices
                        electronically will remain in effect until you withdraw it. You may withdraw your consent to
                        receive further records and notices electronically at any time by contacting at the Contact
                        details provided on our Website. If you withdraw your consent to receive such records and
                        notices electronically, we will terminate your access to the Services, and you will no longer be
                        able to use the Services. Any withdrawal of your consent to receive records and notices
                        electronically will be effective only after we have a reasonable period of time to process your
                        request for withdrawal. Please note that your withdrawal of consent to receive records and
                        notices electronically will not Websitely to records and notices electronically provided by us
                        to you before the withdrawal of your consent becomes effective.</p>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> <span class="pr-2">32.6.</span>In order to ensure that we
                        are able to provide records and notices to you electronically, you must notify us of any change
                        in your email address by updating your Account information by contacting Support at <a
                            href="mailto: support@learnme.live">support@learnme.live</a>.</p>
                    <h3 class="robotoMedium pt-3 ">33. ENTIRE AGREEMENT:</h3>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2"> The Agreement, in connection with the other obligations,
                        policies and rules detailed in writing on the Website, constitute the entire agreement between
                        you and the Website. </p>
                    <h3 class="robotoMedium pt-3 ">34. CONTACT US:</h3>
                    <p class="cl-6b6b6b f-16 robotoRegular pl-2">For any further clarification of our Terms and Conditions,
                        please write to us at <a href="mailto: support@learnme.live">support@learnme.live</a>. </p>


    </div>
</section>







@endsection

{{-- content section end --}}

{{-- footer section start --}}


@section('extra-script')

@endsection

{{-- footer section end --}}
<script>

</script>