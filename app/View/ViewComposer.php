<?php declare(strict_types = 1);

namespace Jrdn\DoApiWrapper\Laravel\View;

use Illuminate\Contracts\View\View;

/**
 * Interface ViewComposer
 *
 * @author jrdn hannah <jrdn@jrdnhannah.co.uk>
 */
interface ViewComposer
{
    public function compose(View $view) : void;
}