<?php
namespace ChangelogView;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/Views', 'changelog-view');

        Route::prefix('sobre/changelog/versao/')
            ->namespace('ChangelogView\Controllers')
            ->group(__DIR__ . '/Routes/web.php');
    }
}
