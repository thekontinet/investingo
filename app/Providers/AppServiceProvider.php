<?php

namespace App\Providers;

use App\Settings\AppSettings;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->loadViewsFrom(resource_path('/frontpage/oitila'), 'frontpage');
        Blade::anonymousComponentPath(resource_path('/frontpage/oitila/components'), 'frontpage');
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::unguard();
        Paginator::useBootstrapFive();
        View::share('appSettings', app(AppSettings::class));
    }
}
