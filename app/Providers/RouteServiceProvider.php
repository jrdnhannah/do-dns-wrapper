<?php

namespace Jrdn\DoApiWrapper\Laravel\Providers;

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace    = 'Jrdn\DoApiWrapper\Laravel\Http\Controllers';

    /**
     * @var string[]
     */
    private $routingFiles   = [
        'oauth',
    ];

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map(Router $router)
    {
        $router->group(['namespace' => $this->namespace], function (Router $router) {
                foreach ($this->routingFiles as $routeFile) {
                    require app_path("Http/Routes/$routeFile}.php");
                }
            }
        );
    }
}
