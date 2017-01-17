<?php declare(strict_types=1);

use Illuminate\Routing\Router;

/** @var Router $router */

$router->group(
    [
        'prefix'        => 'dashboard',
        'namespace'     => 'Dashboard',
        'middleware'    => ['web'],
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