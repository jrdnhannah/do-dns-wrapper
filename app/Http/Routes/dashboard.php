<?php declare(strict_types=1);

use Illuminate\Routing\Router;

/** @var Router $router */

$router->group(
    [
        'prefix'    => 'dashboard',
        'namespace' => 'Dashboard',
    ],
    function (Router $router) {
        $router->get(
            '/',
            [
                'uses' => 'DashboardController@dashboard',
                'as'   => 'dashboard',
            ]
        );
    }
);