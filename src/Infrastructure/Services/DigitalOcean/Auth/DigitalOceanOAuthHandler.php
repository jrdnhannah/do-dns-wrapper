<?php declare(strict_types=1);

namespace Jrdn\DoApiWrapper\Infrastructure\Services\DigitalOcean\Auth;

use ChrisHemmings\OAuth2\Client\Provider\DigitalOcean;
use League\OAuth2\Client\Provider\ResourceOwnerInterface;

/**
 * Class DigitalOceanOAuthHandler
 *
 * @author jrdn hannah <jrdn@jrdnhannah.co.uk>
 */
final class DigitalOceanOAuthHandler implements OAuthHandler
{
    /** @var DigitalOcean */
    private $provider;

    /**
     * DigitalOceanOAuthHandler constructor.
     *
     * @param DigitalOcean $provider
     */
    public function __construct(DigitalOcean $provider)
    {
        $this->provider = $provider;
    }

    public function authorise(string $code) : ResourceOwnerInterface
    {
        $token = $this->provider->getAccessToken('authorization_code', ['code' => $code]);

        return $this->provider->getResourceOwner($token);
    }
}