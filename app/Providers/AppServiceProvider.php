<?php
 
namespace App\Providers;
 
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
 
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