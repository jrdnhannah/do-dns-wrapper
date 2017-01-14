<?php declare(strict_types=1);

namespace Jrdn\DoApiWrapper\Infrastructure\Services\DigitalOcean\Auth;

use ChrisHemmings\OAuth2\Client\Provider\DigitalOcean;
use League\OAuth2\Client\Provider\ResourceOwnerInterface;
use League\OAuth2\Client\Token\AccessToken;

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

    /**
     * @param string $code
     * @return AccessToken
     */
    public function authorise(string $code) : AccessToken
    {
        return $this->provider->getAccessToken('authorization_code', ['code' => $code]);
    }

    /**
     * @param AccessToken $token
     * @return ResourceOwnerInterface
     */
    public function getResourceOwner(AccessToken $token) : ResourceOwnerInterface
    {
        return $this->provider->getResourceOwner($token);
    }
}