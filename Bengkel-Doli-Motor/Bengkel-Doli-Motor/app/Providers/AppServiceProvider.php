<?php

namespace App\Providers;

use App\Models\Order;
use App\Models\rental;
use App\Models\Service;
use App\Models\doorsmeer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {   
        view()->composer(['customer.home','customer.rental','customer.service','customer.doorsmer','customer.shop','customer.keranjang','customer.contact','customer.pembayaran', 'admin.layouts.header'], function ($view) {
            if(Auth::check()){
                $notifrental = rental::where('user_id', auth()->user()->id)->get();
                $view->with('notifrental', $notifrental);
                $notifrentalAdmin = rental::get();
                $view->with('notifrentalAdmin', $notifrentalAdmin);

                $notifservice = Service::where('user_id', auth()->user()->id)->get();
                $view->with('notifservice', $notifservice);
                $notifserviceAdmin = Service::get();
                $view->with('notifserviceAdmin', $notifserviceAdmin);

                $notifdoorsmeer = Doorsmeer::where('user_id', auth()->user()->id)->get();
                $view->with('notifdoorsmeer', $notifdoorsmeer);
                $notifdoorsmeerAdmin = Doorsmeer::get();
                $view->with('notifdoorsmeerAdmin', $notifdoorsmeerAdmin);

                $notiforder = Order::where('id_customer', auth()->user()->id)->get();
                $view->with('notiforder', $notiforder);
                $notiforderAdmin = order::get();
                $view->with('notiforderAdmin', $notiforderAdmin);
            }
        });
    }
}
