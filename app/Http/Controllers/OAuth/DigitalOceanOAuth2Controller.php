<?php declare(strict_types=1);

namespace Jrdn\DoApiWrapper\Laravel\Http\Controllers\OAuth;

use Illuminate\Contracts\View\View;
use Jrdn\DoApiWrapper\Infrastructure\Services\DigitalOcean\Auth\OAuthHandler;
use Jrdn\DoApiWrapper\Laravel\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use ChrisHemmings\OAuth2\Client\Provider\DigitalOcean as DigitalOceanProvider;
use Exception;

/**
 * Class DigitalOceanOAuth2Controller
 *
 * @author jrdn hannah <jrdn@jrdnhannah.co.uk>
 */
final class DigitalOceanOAuth2Controller extends Controller
{
    /** @var DigitalOceanProvider */
    private $provider;
    /** @var OAuthHandler */
    private $handler;

    /**
     * DigitalOceanOAuth2Controller constructor.
     *
     * @param DigitalOceanProvider $provider
     * @param OAuthHandler         $handler
     */
    public function __construct(DigitalOceanProvider $provider, OAuthHandler $handler)
    {
        $this->provider = $provider;
        $this->handler = $handler;
    }

    public function requestAuthorisation()
    {
        return redirect()->to($this->provider->getAuthorizationUrl());
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return Response
     */
    public function authorise(\Illuminate\Http\Request $request) : Response
    {
        if (false === $request->query->has('code')) {
            // fail
        }

        try {
            $user = $this->handler->authorise($request->query->get('code'));

            return response('hello ' . $user->getUsername());
        } catch (Exception $e) {

        }

        return response('hello');
        //return redirect()->route();
    }
}