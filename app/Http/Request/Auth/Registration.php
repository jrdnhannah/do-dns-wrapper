<?php declare(strict_types=1);

namespace Jrdn\DoApiWrapper\Laravel\Http\Request\Auth;

use Jrdn\DoApiWrapper\Laravel\Http\Request\Request;

/**
 * Class Registration
 *
 * @author jrdn hannah <jrdn@jrdnhannah.co.uk>
 */
final class Registration extends Request
{
    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            'email'    => 'required|email|max:255|unique:users',
            'password' => 'required',//|min:6|confirmed',
        ];
    }
}