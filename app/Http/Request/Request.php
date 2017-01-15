<?php declare(strict_types=1);

namespace Jrdn\DoApiWrapper\Laravel\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class Request
 *
 * @author jrdn hannah <jrdn@jrdnhannah.co.uk>
 */
abstract class Request extends FormRequest
{
    /**
     * @return array
     */
    abstract public function rules() : array;

    /**
     * @return bool
     */
    public function authorize() : bool
    {
        return true;
    }
}