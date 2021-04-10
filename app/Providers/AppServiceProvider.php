<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Schema;
use ConsoleTVs\Charts\Registrar as Charts;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Charts $charts)
    {
        //
        Schema::defaultStringLength(191);


        $charts->register([
            \App\Charts\UserAgePieChart::class,
            \App\Charts\UserGenderPieChart::class,
            \App\Charts\UserLocationPieChart::class,
            \App\Charts\UserDevicePieChart::class,
            \App\Charts\SampleChart::class,
            \App\Charts\FundraiserChart::class,
            \App\Charts\EarningChart::class,
        ]);
    }
}
