<?php declare(strict_types=1);

use Illuminate\Routing\Router;

/** @var Router $router */

$router->group(
    [
        'prefix'    =>  'auth',
        'namespace' =>  'Auth',
    ],
    function (Router $router) {
        $router->get(
            '/register',
            [
                'uses' => 'RegisterController@showRegistrationForm',
                'as'   => 'auth.register',
            ]
        );

        $router->post(
            '/register',
            [
                'uses' => 'RegisterController@register',
                'as'   => 'auth.post_register',
            ]
        );
    }
);