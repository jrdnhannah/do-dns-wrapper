<?php declare(strict_types=1);

namespace Jrdn\DoApiWrapper\User\Command;

use SmoothPhp\CommandBus\BaseCommand;

/**
 * Class RegisterNewUser
 *
 * @author jrdn hannah <jrdn@jrdnhannah.co.uk>
 */
final class RegisterNewUser extends BaseCommand
{
    /** @var string */
    private $email;
    /** @var string */
    private $password;

    /**
     * RegisterNewUser constructor.
     *
     * @param string $email
     * @param string $password
     */
    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPassword() : string
    {
        return $this->password;
    }
}