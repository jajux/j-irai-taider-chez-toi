<?php
 
namespace App\Providers;
 
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