<?php declare(strict_types=1);

namespace Jrdn\DoApiWrapper\Infrastructure\Services\DigitalOcean\Auth;

use League\OAuth2\Client\Provider\ResourceOwnerInterface;
use League\OAuth2\Client\Token\AccessToken;

/**
 * Class DigitalOceanOAuthHandler
 *
 * @author jrdn hannah <jrdn@jrdnhannah.co.uk>
 */
interface OAuthHandler
{
    /**
     * @param string $code
     * @return AccessToken
     */
    public function authorise(string $code): AccessToken;

    /**
     * @param AccessToken $token
     * @return ResourceOwnerInterface
     */
    public function getResourceOwner(AccessToken $token): ResourceOwnerInterface;
}