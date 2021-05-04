<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Permission;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();


        // Gate::resource('users','App\Policies\UserPolicy');
        // Gate::define('user.show','App\Policies\UserPolicy@view');
        // Gate::define('user.userList','App\Policies\UserPolicy@show');
        // Gate::define('user.userAdd','App\Policies\UserPolicy@create');
        // Gate::define('user.userEdit','App\Policies\UserPolicy@edit');
        // Gate::define('user.userUpdate','App\Policies\UserPolicy@Update');
        // Gate::define('user.userDelete','App\Policies\UserPolicy@delete');

        // Gate::resource('roles','App\Policies\RolePolicy');
        // Gate::define('role.roleshow','App\Policies\RolePolicy@view');
        // Gate::define('role.roleList','App\Policies\RolePolicy@show');
        // Gate::define('role.roleAdd','App\Policies\RolePolicy@create');
        // Gate::define('role.roleEdit','App\Policies\RolePolicy@edit');
        // Gate::define('role.roleUpdate','App\Policies\RolePolicy@Update');
        // Gate::define('role.roleDelete','App\Policies\RolePolicy@delete');

        // Gate::resource('permissions','App\Policies\PermissionPolicy');
        // Gate::define('permission.permissionshow','App\Policies\PermissionPolicy@view');
        // Gate::define('permission.permissionList','App\Policies\PermissionPolicy@show');
        // Gate::define('permission.permissionAdd','App\Policies\PermissionPolicy@create');
        // Gate::define('permission.permissionEdit','App\Policies\PermissionPolicy@edit');
        // Gate::define('permission.permissionUpdate','App\Policies\PermissionPolicy@Update');
        // Gate::define('permission.permissionDelete','App\Policies\PermissionPolicy@delete');

        // Gate::resource('clients','App\Policies\ClientPolicy');
        // Gate::define('client.clientshow','App\Policies\ClientPolicy@view');
        // Gate::define('client.clientList','App\Policies\ClientPolicy@show');
        // Gate::define('client.clientAdd','App\Policies\ClientPolicy@create');
        // Gate::define('client.clientEdit','App\Policies\ClientPolicy@edit');
        // Gate::define('client.clientUpdate','App\Policies\ClientPolicy@Update');
        // Gate::define('client.clientDelete','App\Policies\ClientPolicy@delete');


        // Gate::resource('stores','App\Policies\StorePolicy');
        // Gate::define('store.storeshow','App\Policies\StorePolicy@view');
        // Gate::define('store.storeList','App\Policies\StorePolicy@show');
        // Gate::define('store.storeAdd','App\Policies\StorePolicy@create');
        // Gate::define('store.storeEdit','App\Policies\StorePolicy@edit');
        // Gate::define('store.storeUpdate','App\Policies\StorePolicy@Update');
        // Gate::define('store.storeDelete','App\Policies\StorePolicy@delete');
        
        // Gate::resource('announcements','App\Policies\AnnouncementPolicy');
        // Gate::define('announcement.announcementshow','App\Policies\AnnouncementPolicy@view');
        // Gate::define('announcement.announcementList','App\Policies\AnnouncementPolicy@show');
        // Gate::define('announcement.announcementAdd','App\Policies\AnnouncementPolicy@create');
        // Gate::define('announcement.announcementEdit','App\Policies\AnnouncementPolicy@edit');
        // Gate::define('announcement.announcementUpdate','App\Policies\AnnouncementPolicy@Update');
        // Gate::define('announcement.announcementDelete','App\Policies\AnnouncementPolicy@delete');

        // Gate::resource('packages','App\Policies\PackagePolicy');
        // Gate::define('package.packageshow','App\Policies\PackagePolicy@view');
        // Gate::define('package.packageList','App\Policies\PackagePolicy@show');
        // Gate::define('package.packageAdd','App\Policies\PackagePolicy@create');
        // Gate::define('package.packageEdit','App\Policies\PackagePolicy@edit');
        // Gate::define('package.packageUpdate','App\Policies\PackagePolicy@Update');
        // Gate::define('package.packageDelete','App\Policies\PackagePolicy@delete');
       
        // Gate::resource('payments','App\Policies\PaymentPolicy');
        // Gate::define('payment.paymentshow','App\Policies\PaymentPolicy@view');
        // Gate::define('payment.paymentList','App\Policies\PaymentPolicy@show');
        // Gate::define('payment.paymentAdd','App\Policies\PaymentPolicy@create');
        // Gate::define('payment.paymentEdit','App\Policies\PaymentPolicy@edit');
        // Gate::define('payment.paymentUpdate','App\Policies\PaymentPolicy@Update');
        // Gate::define('payment.paymentDelete','App\Policies\PaymentPolicy@delete');

        // Gate::resource('profiles','App\Policies\ProfilePolicy');
        // Gate::define('profile.profileshow','App\Policies\ProfilePolicy@view');
        // Gate::define('profile.profileList','App\Policies\ProfilePolicy@show');
        // Gate::define('profile.profileAdd','App\Policies\ProfilePolicy@create');
        // Gate::define('profile.profileEdit','App\Policies\ProfilePolicy@edit');
        // Gate::define('profile.profileUpdate','App\Policies\ProfilePolicy@Update');
        // Gate::define('profile.profileDelete','App\Policies\ProfilePolicy@delete');

        // Gate::resource('subscriptions','App\Policies\SubscriptionPolicy');
        // Gate::define('subscription.subscriptionshow','App\Policies\SubscriptionPolicy@view');
        // Gate::define('subscription.subscriptionList','App\Policies\SubscriptionPolicy@show');
        // Gate::define('subscription.subscriptionAdd','App\Policies\SubscriptionPolicy@create');
        // Gate::define('subscription.subscriptionEdit','App\Policies\SubscriptionPolicy@edit');
        // Gate::define('subscription.subscriptionUpdate','App\Policies\SubscriptionPolicy@Update');
        // Gate::define('subscription.subscriptionDelete','App\Policies\SubscriptionPolicy@delete');


        // Gate::resource('emails','App\Policies\EmailPolicy');
        // Gate::define('email.emailshow','App\Policies\EmailPolicy@view');
        // Gate::define('email.emailList','App\Policies\EmailPolicy@show');
        // Gate::define('email.emailAdd','App\Policies\EmailPolicy@create');
        // Gate::define('email.emailEdit','App\Policies\EmailPolicy@edit');
        // Gate::define('email.emailUpdate','App\Policies\EmailPolicy@Update');
        // Gate::define('email.emailDelete','App\Policies\EmailPolicy@delete');
        
    }

   
}
