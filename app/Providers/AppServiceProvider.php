<?php
 
namespace App\Providers;
 
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use NascentAfrica\Jetstrap\JetstrapFacade;
 
class AppServiceProvider extends ServiceProvider
{
    // /
    //  * Bootstrap any application services.
    //  *
    //  * @return void
    //  */
    public function boot()
    {
        Schema::defaultStringLength(191);

        // Mise en forme de la date fr
        setlocale(LC_TIME, config('app.locale'));

        // method core UI src= https://github.com/nascent-africa/jetstrap#installation
        JetstrapFacade::useCoreUi3();
        
        // // Email Verification
        // Fortify::verifyEmailView(function () {
        //     return view('auth.verify-email');
        // });
        
        // Confirm Password
        Fortify::confirmPasswordView(function () {
            return view('auth.confirm-password');
        });

    }

    //  * Register any application services.
    //  *
    //  * @return void
    //  */
    public function register()
    {
        //
    }
}