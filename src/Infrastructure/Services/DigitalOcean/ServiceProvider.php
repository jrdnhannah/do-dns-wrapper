<?php declare(strict_types=1);

namespace Jrdn\DoApiWrapper\Infrastructure\Services\DigitalOcean;

use ChrisHemmings\OAuth2\Client\Provider\DigitalOcean;
use DigitalOceanV2\Adapter\GuzzleHttpAdapter;
use DigitalOceanV2\DigitalOceanV2;
use Jrdn\DoApiWrapper\Infrastructure\Services\DigitalOcean\Auth\OAuthHandler;

/**
 * Class ServiceProvider
 *
 * @author jrdn hannah <jrdn@jrdnhannah.co.uk>
 */
final class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /** @var bool */
    protected $defer = true;

    /**
     * @return void
     */
    public function boot() : void
    {
        $this->app->singleton(DigitalOcean::class, function () {
            return new DigitalOcean([
                'clientId'      => config('services.digital_ocean.client_id'),
                'clientSecret'  => config('services.digital_ocean.secret'),
                'redirectUri'   => route('oauth.authorise')
            ]);
        });

        $this->app->singleton(DigitalOceanV2::class, function () {
            return new DigitalOceanV2(new GuzzleHttpAdapter(config('services.digital_ocean.secret')));
        });

        $this->app->bind(OAuthHandler::class, Auth\DigitalOceanOAuthHandler::class);
    }

    /**
     * @return string[]
     */
    public function provides()
    {
        return [
            DigitalOcean::class,
            OAuthHandler::class,
        ];
    }
}