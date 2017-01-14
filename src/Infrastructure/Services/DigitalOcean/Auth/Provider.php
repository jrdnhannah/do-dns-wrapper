<?php declare(strict_types=1);

namespace Jrdn\DoApiWrapper\Infrastructure\Services\DigitalOcean\Auth;

use ChrisHemmings\OAuth2\Client\Provider\DigitalOcean;

/**
 * Class Provider
 *
 * @author jrdn hannah <jrdn@jrdnhannah.co.uk>
 */
final class Provider extends DigitalOcean
{
    /**
     * @return array
     */
    protected function getDefaultScopes()
    {
        return ['read write'];
    }

}