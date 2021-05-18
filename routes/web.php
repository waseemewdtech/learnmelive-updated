<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::view('semail','emails.admin.disapprove_user');
Route::view('check', 'check');
Route::view('terms-of-services', 'frontend.terms_services')->name('terms_services');
// Route::view('profile','profile');

Route::get('/unauthorize', function () {
    return view('unauthorize');
})->name('unauthorize.user');

Route::get('/', function () {
    return view('frontend.index');
})->name('index');
Route::get('userNameCheck','UserController@usernameCheck')->name('usernameCheck');

Auth::routes();

// Social logins
Route::get('login/google', 'Auth\LoginController@redirectToGoogle')->name('login.google');
Route::get('login/google/callback', 'Auth\LoginController@handleGoogleCallback');
Route::get('login/facebook', 'Auth\LoginController@redirectToFacebook')->name('login.facebook');
Route::get('login/facebook/callback', 'Auth\LoginController@handleFacebookCallback');



Route::get('category/sub_categories','CategoryController@getSubCategories')->name('get.sub_categories');

Route::middleware(['auth','admincheck'])->prefix('dashboard')->group(function(){
    Route::resource('/profile','Admin\AdminController');
    Route::resource('/categories', 'Admin\CategoryController');
    Route::resource('/users', 'Admin\UserController');
    Route::get('/client/postings', 'ServiceRequestController@adminClientPosting');
    Route::post('/client/postings/{id}', 'ServiceRequestController@adminClientPostingUpdate')->name('admin.client.posting.update');
    Route::resource('/subcategories', 'Admin\SubCategoryController');
    Route::get('/password', 'ProfileController@password');
    Route::get('/disputes','ClientSpecialistDisputeController@index')->name('admin.disputes');
    Route::get('admin/user/disputes/notifications','ClientSpecialistDisputeController@adminUserDisputeNotifications')->name('admin.user.dispute.notification');
    //    Route::get('users','AdminController@users');
    //    Route::get('user-approve/{id}','UserController@userApproved')->name('user.approved');
    //payments
    Route::resource('admin/payments', 'Admin\PaymentsController');
    Route::get('admin/stripe', 'Admin\PaymentsController@stripe');
    Route::post('admin/stripe/pay', 'Admin\PaymentsController@stripePayment');
});

// usercheck
Route::group(['middleware'=>['auth','specialistcheck']],function(){
    Route::resource('specialist', 'Specialist\DashboardController');
    Route::post('withdraw_request', 'Specialist\DashboardController@widthdrawRequest');
});

Route::group(['middleware'=>['auth','specialistcheck','checkuserstatus']],function(){
    Route::resource('specialists', 'SpecialistController');
    Route::resource('services', 'Specialist\ServiceController');
    Route::get('get_service_request/{id}', 'Specialist\DashboardController@getServiceRequest')->name('get_service_request');
});

Route::group(['middleware'=>['auth']],function(){
    Route::get('search', 'HomeController@search')->name('search');
    Route::get('category_specialists/{id}', 'HomeController@category_specialists')->name('category_specialists');
    Route::get('user/appointment/notification','AppointmentController@userAppointmentNotification')->name('user.appointment.notification');
    Route::get('appointment/notification/status/update/{id}','AppointmentController@notificationStatusUpdate')->name('appointment.notification.status.update');
    Route::get('portfolio_setting', 'ProfileController@portfolio')->name('portfolio_setting');
    Route::post('portfolio_images', 'ProfileController@portfolioImages')->name('portfolio_images');
    Route::post('portfolio_image_delete/{id}', 'ProfileController@deleteImage')->name('portfolio_image_delete');
    Route::get('sub_categories', 'Specialist\ServiceController@getSubCategories')->name('service.get_subcategories');
    Route::resource('profile', 'ProfileController');
    Route::post('/profile/change_avatar', 'ProfileController@update_avatar');
    Route::get('/change-password', 'ProfileController@password');
    Route::post('/password', 'ProfileController@update_password');
    Route::get('specialist-detail/{id}', 'SpecialistController@getSpecialistDetail')->name('specialist_detail');
    Route::get('specialist-portfolio/{id}', 'SpecialistController@getPortfolio')->name('specialist_portfolio');
    Route::get('portfolio', function () {  return view('frontend.portfolio'); })->name('portfolio');
    Route::get('carousels', function () {  return view('frontend.carousels'); })->name('carousels');
    Route::get('getQueryServices','Specialist\ServiceController@getQueryServices')->name('getQueryServices');
    Route::resource('clients', 'ClientController');
    Route::resource('client', 'Client\ClientController');
    Route::resource('servicerequests', 'ServiceRequestController');
    Route::get('sub_categories', 'Client\ClientController@getSubCategories')->name('request.get_subcategories');
    Route::view('client/dashboard','client.index');
    Route::post('add/client/review','AppointmentController@addReview')->name('add.client.review');
    // payemnts
    Route::get('stripe', 'StripePaymentController@stripe');
    Route::post('stripe', 'StripePaymentController@stripePost')->name('stripe.post');
    Route::post('release_payment/{id}','AppointmentController@releasePayment');
});

Route::group(['middleware'=>['auth','checkuserstatus']],function(){
    Route::view('video', 'video');
    Route::view('test-token', 'php/sample/RtcTokenBuilderSample');
    Route::get('call-checker', 'FirebaseController@callChecker');
    Route::post('call-end', 'FirebaseController@callEnd');
    Route::resource('bids', 'Specialist\BidController');
    Route::post('bid-work-status', 'Specialist\BidController@changeWorkStatus')->name('bid_work_status');
    Route::resource('appointments', 'AppointmentController');
    Route::get('clientRequest', function () {return view('frontend.client_request'); })->name('client_request');
    Route::get('appointment-request/{id}','AppointmentController@create')->name('appointment_request');
    Route::post('store-appointment','AppointmentController@storeAppointment')->name('store.appointment');
    Route::resource('clients', 'ClientController');
    Route::resource('servicerequests', 'ServiceRequestController');
    Route::get('sub-categories', 'Client\ClientController@getSubCategories')->name('request.get_subcategories');
    Route::get('raise-dispute/{project}/{id}',"ClientSpecialistDisputeController@disputeAraise")->name('dispute-araise');
    Route::resource('disputes','ClientSpecialistDisputeController');
    Route::resource('disputes-replies','DisputeReplyController');
    Route::get('dispute/replies','DisputeReplyController@replies')->name('get.all.dispute.replies');
    Route::get('user/disputes/notifications','ClientSpecialistDisputeController@userDisputeNotifications')->name('user.dispute.notification');
    Route::get('user/disputes/reply/notifications','ClientSpecialistDisputeController@userDisputeReplyNotifications')->name('user.dispute.reply.notification');
    Route::get('user/disputes/reply/seen/status','ClientSpecialistDisputeController@userDisputeReplySeenStatus')->name('user.dispute.reply.seen.status');
    Route::get('update/dispute/seen/status','ClientSpecialistDisputeController@updateDisputeSeenStatus')->name('update.dispute.seen.status');
});

Route::middleware(['auth'])->group(function(){
    Route::post('save-token','FirebaseController@save_token')->name('save-token');
    Route::get('chat/{id}', 'FirebaseController@singleChat')->name('single.chat');
    Route::get('chat/user/switch/{id}', 'FirebaseController@chatUserSwitch')->name('chat.user.switch');
    Route::get('users/chat', 'FirebaseController@index')->name('chat.index');
    Route::post('chat/store', 'FirebaseController@store')->name('chat.store');
    Route::get('chat/user/update/{id}', 'FirebaseController@chatUserUpdate')->name('chat.user.update');
    Route::get('chat/user/status/{id}', 'FirebaseController@chatUserStatus')->name('chat.user.status');
    Route::get('chat/update/users/{id}', 'FirebaseController@chatUpdatedUsers')->name('chat.updated.users');
});