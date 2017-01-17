<?php declare(strict_types = 1);

use Illuminate\Routing\Router;

/** @var Router $router */

$router->group(
    [
        'prefix'    =>  'oauth',
        'namespace' =>  'OAuth',
        'middleware' => ['web'],
    ],
    function (Router $router) {
        $router->get('/request', [
            'uses'  => 'DigitalOceanOAuth2Controller@requestAuthorisation',
            'as'    => 'oauth.request',
        ]);

        $router->get('/authorise', [
            'uses'  =>  'DigitalOceanOAuth2Controller@authorise',
            'as'    =>  'oauth.authorise',
        ]);
    }
);