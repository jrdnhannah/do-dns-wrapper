<?php declare(strict_types=1);

namespace Jrdn\DoApiWrapper\Laravel\Http\Controllers\Dashboard;

use Illuminate\Contracts\View\View;
use Jrdn\DoApiWrapper\Laravel\Http\Controllers\Controller;

/**
 * Class DashboardController
 *
 * @author jrdn hannah <jrdn@jrdnhannah.co.uk>
 */
final class DashboardController extends Controller
{
    /**
     * @return View
     */
    public function dashboard() : View
    {
        return view('dashboard.index');
    }
}