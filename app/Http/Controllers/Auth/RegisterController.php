<?php

namespace Jrdn\DoApiWrapper\Laravel\Http\Controllers\Auth;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\View\View;
use Jrdn\DoApiWrapper\Laravel\Http\Request\Auth\Registration;
use Jrdn\DoApiWrapper\Laravel\User;
use Jrdn\DoApiWrapper\User\Command\RegisterNewUser;
use SmoothPhp\Contracts\CommandBus\CommandBus;
use Symfony\Component\HttpFoundation\Response;
use Validator;
use Jrdn\DoApiWrapper\Laravel\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    /** @var CommandBus */
    private $bus;

    /**
     * Create a new controller instance.
     *
     * @param CommandBus $bus
     */
    public function __construct(CommandBus $bus)
    {
        $this->middleware('guest');
        $this->bus = $bus;
    }

    /**
     * Show the application registration form.
     *
     * @return View
     */
    public function showRegistrationForm() : View
    {
        return view('auth.register');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  Registration $request
     * @return Response
     */
    public function register(Registration $request) : Response
    {
        $this->bus->execute(new RegisterNewUser(...array_values($request->only(['email', 'password']))));

        return redirect()->route('dashboard');
    }
}
