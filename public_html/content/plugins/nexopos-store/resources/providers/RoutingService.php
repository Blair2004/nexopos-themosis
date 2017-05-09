<?php

namespace Com\Nexopos\Store\Services;

use Themosis\Facades\Route;
use Themosis\Foundation\ServiceProvider;

class RoutingService extends ServiceProvider
{
    /**
     * Register plugin routes.
     * Define a custom namespace.
     */
    public function register()
    {
        Route::group([
            'namespace' => 'Com\Nexopos\Store\Controllers'
        ], function () {
            require themosis_path('plugin.com.nexopos.store.resources').'routes.php';
        });
    }
}