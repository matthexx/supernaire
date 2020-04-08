<?php

namespace App\Providers;

use Carbon\Carbon;
use App\Mail\EmailVerification;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services. 
     *
     * @return void
     */
    public function register()
    {
        schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    // public function boot()
    // {
    //     VerifyEmail::toMailUsing(function ($notifiable){
    //         $verifyUrl = URL::temporarySignedRoute(
    //             'verification.verify',
    //             Carbon::now()->addMinutes(Config::get('auth.verification.expire', 60)),
    //             ['id'=>$notifiable->getKey(), 'hash' => 'fijbubugiigbiugbiugig']
    //         );
    //         // dd($verifyUrl);
    //         return (new MailMessage)
    //             ->subject('Welcome!') ->line('something')->action('Verify', $verifyUrl);
                


    // });


    // }
    
}
