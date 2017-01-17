<?php declare(strict_types=1);

namespace Jrdn\DoApiWrapper\Laravel\View\Dashboard;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\View\View;
use Jrdn\DoApiWrapper\Laravel\View\ViewComposer;

/**
 * Class IndexComposer
 *
 * @author jrdn hannah <jrdn@jrdnhannah.co.uk>
 */
final class IndexComposer implements ViewComposer
{
    /** @var Guard */
    private $guard;

    /**
     * IndexComposer constructor.
     *
     * @param Guard $guard
     */
    public function __construct(Guard $guard)
    {
        $this->guard = $guard;
    }

    public function compose(View $view): void
    {
        // TODO: Implement compose() method.
    }
}