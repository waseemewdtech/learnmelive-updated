     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
         integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <style>
         .loader11 {
             width: 100px;
             height: 70px;
             margin: 50px auto;
             position: relative
         }

         .loader11 span {
             display: block;
             width: 5px;
             height: 10px;
             background: #e43632;
             position: absolute;
             bottom: 0;
             animation: loading-11 2.25s infinite ease-in-out
         }

         .loader11 span:nth-child(2) {
             left: 11px;
             animation-delay: .2s
         }

         .loader11 span:nth-child(3) {
             left: 22px;
             animation-delay: .4s
         }

         .loader11 span:nth-child(4) {
             left: 33px;
             animation-delay: .6s
         }

         .loader11 span:nth-child(5) {
             left: 44px;
             animation-delay: .8s
         }

         .loader11 span:nth-child(6) {
             left: 55px;
             animation-delay: 1s
         }

         .loader11 span:nth-child(7) {
             left: 66px;
             animation-delay: 1.2s
         }

         .loader11 span:nth-child(8) {
             left: 77px;
             animation-delay: 1.4s
         }

         .loader11 span:nth-child(9) {
             left: 88px;
             animation-delay: 1.6s
         }

         @-webkit-keyframes loading-11 {
             0% {
                 height: 10px;
                 transform: translateY(0);
                 background: #ff4d80
             }

             25% {
                 height: 60px;
                 transform: translateY(15px);
                 background: #3423a6
             }

             50% {
                 height: 10px;
                 transform: translateY(-10px);
                 background: #e29013
             }

             100% {
                 height: 10px;
                 transform: translateY(0);
                 background: #e50926
             }
         }

         @keyframes loading-11 {
             0% {
                 height: 10px;
                 transform: translateY(0);
                 background: #ff4d80
             }

             25% {
                 height: 60px;
                 transform: translateY(15px);
                 background: #3423a6
             }

             50% {
                 height: 10px;
                 transform: translateY(-10px);
                 background: #e29013
             }

             100% {
                 height: 10px;
                 transform: translateY(0);
                 background: #e50926
             }
         }

     </style>

     <div class="row afterRegisterLoader" style="display: none;">
         <div class="col-md-12">
             <div class="loader11">
                 <span></span>
                 <span></span>
                 <span></span>
                 <span></span>
                 <span></span>
                 <span></span>
                 <span></span>
                 <span></span>
                 <span></span>
                 <span></span>
             </div>
         </div>
     </div>
     <form role="form" action="{{ url('dashboard/admin/stripe/pay') }}" method="post" class="require-validation"
         data-cc-on-file="false" data-stripe-publishable-key="{{$specialist->stripe_public_key}}" id="payment-form">
         @csrf
         <input type="hidden" name="stripe_public_key" value="{{$specialist->stripe_public_key}}">
         <input type="hidden" name="payment_id" value="{{ $payment_id }}">
         <input type="hidden" id="payable_amount" value="{{ $amount }}">
         <div class=' row'>
             <div class='col-md-12 form-group required'>
                 <label class='control-label'>Name on Card</label> <input
                     class='form-control border-bottom text-capitalize' size='4' type='text' placeholder="ex. ewdtech">
             </div>
         </div>

         <div class=' row'>
             <div class='col-md-6 form-group  required'>
                 <label class='control-label'>Card Number</label> <input autocomplete='off'
                     class='form-control border-bottom card-number' size='20' type='text'
                     placeholder="ex. 4242424242424242">
             </div>
             <div class='col-md-6 form-group  required'>
                 <label class='control-label'>Amount</label> <input autocomplete='off'
                     class='form-control border-bottom ' name="amount" type='text' value="{{ $amount }}"
                     placeholder="ex. $100 (USD)" min="0">
             </div>
         </div>

         <div class=' row'>
             <div class='col-sm-12 col-md-4 form-group cvc required'>
                 <label class='control-label'>CVC</label> <input autocomplete='off'
                     class='form-control border-bottom card-cvc' placeholder='ex. 311' size='4' type='text'>
             </div>
             <div class='col-sm-12 col-md-4 form-group expiration required'>
                 <label class='control-label'>Expiration Month</label> <input
                     class='form-control border-bottom card-expiry-month' placeholder='MM' min="0" type='number'>
             </div>
             <div class='col-sm-12 col-md-4 form-group expiration required'>
                 <label class='control-label'>Expiration Year</label> <input
                     class='form-control border-bottom card-expiry-year' placeholder='YYYY' min="0" type='number'>
             </div>
         </div>

         <div class=' row'>
             <div class='col-md-12 error form-group d-none'>
                 <div class='alert-danger alert'></div>
             </div>
         </div>

         <div class="row">
             <div class="col-md-12">
                 <button class="btn btn-success btn-lg btn-block submit_payment">Pay Now</button>
             </div>
         </div>

     </form>

     <script type="text/javascript" src="https://js.stripe.com/v2/"></script>

     <script type="text/javascript">
         $(function () {
             var $form = $(".require-validation");
             $('form.require-validation').bind('submit', function (e) {
                 var $form = $(".require-validation"),
                     inputSelector = ['input[type=email]', 'input[type=password]', 'input[type=number]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'
                     ].join(', '),
                     $inputs = $form.find('.required').find(inputSelector),
                     $errorMessage = $form.find('div.error'),
                     valid = true;
                 $inputs.removeClass('border border-danger');
                 $errorMessage.addClass('d-none');

                 $('.text-danger').removeClass('text-danger');
                 $inputs.each(function (i, el) {
                     var $input = $(el);

                     if ($input.val() === '') {
                         $input.addClass('border border-danger');
                         $input.parent().addClass('text-danger');
                         $errorMessage.removeClass('d-none');
                         e.preventDefault();
                     }

                 });

                 if (!$form.data('cc-on-file')) {
                     e.preventDefault();
                     Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                     Stripe.createToken({
                         number: $('.card-number').val(),
                         cvc: $('.card-cvc').val(),
                         exp_month: $('.card-expiry-month').val(),
                         exp_year: $('.card-expiry-year').val()
                     }, stripeResponseHandler);
                 }

             });

             function stripeResponseHandler(status, response) {
                 if (response.error) {
                     $('.error')
                         .removeClass('d-none')
                         .find('.alert')
                         .text(response.error.message);
                 } else {
                     // token contains id, last4, and card type
                     var token = response['id'];
                     // insert the token into the form so it gets submitted to the server
                     $form.find('input[type=text]').empty();
                     $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                     var amount = $('input[name=amount]');
                     var payable_amount = $('#payable_amount');
                     console.log(amount,payable_amount)
                     if (amount.val() != payable_amount.val()) {
                         amount.addClass('border border-danger');
                         amount.parent().addClass('text-danger');
                         $('.error').removeClass('d-none').children('div.alert-danger').text('You need to pay $'+payable_amount.val());
                         e.preventDefault();
                         return false;
                     }else{

                         $('.afterRegisterLoader').show();
                         $.ajax({
                             type: 'post',
                             url: "{{ url('dashboard/admin/stripe/pay') }}",
                             data: $form.serialize(),
                             success: function (data) {
                                 swal({
                                     icon: "success",
                                     text: "{{ __('Payment submit successfully') }}",
                                     icon: 'success'
                                 });
                                 $('.afterRegisterLoader').hide();
                                 $("#payment_modal .close").click();
                                 $('.payment_btn').addClass('disabled')

                             },

                         })
                     }
                     // $form.get(0).submit();
                 }
             }

         });

     </script>
