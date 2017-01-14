<?php declare(strict_types=1);

namespace Jrdn\DoApiWrapper\Infrastructure\Services\DigitalOcean\Auth;

use League\OAuth2\Client\Provider\ResourceOwnerInterface;

/**
 * Class DigitalOceanOAuthHandler
 *
 * @author jrdn hannah <jrdn@jrdnhannah.co.uk>
 */
interface OAuthHandler
{
    public function authorise(string $code): ResourceOwnerInterface;
}