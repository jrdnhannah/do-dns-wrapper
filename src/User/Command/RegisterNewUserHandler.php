<?php declare(strict_types=1);

namespace Jrdn\DoApiWrapper\User\Command;

use Illuminate\Auth\SessionGuard;
use Illuminate\Contracts\Auth\Guard;
use Jrdn\DoApiWrapper\Infrastructure\Services\Database\DatabaseClient;

/**
 * Class RegisterNewUserHandler
 *
 * @author jrdn hannah <jrdn@jrdnhannah.co.uk>
 */
final class RegisterNewUserHandler
{
    /** @var DatabaseClient */
    private $db;
    /** @var Guard */
    private $auth;

    /**
     * RegisterNewUserHandler constructor.
     *
     * @param DatabaseClient $db
     * @param Guard          $auth
     */
    public function __construct(DatabaseClient $db, Guard $auth)
    {
        $this->db = $db;
        $this->auth = $auth;
    }

    /**
     * @param RegisterNewUser $command
     */
    public function handle(RegisterNewUser $command) : void
    {
        $this->db->query()->table('users')->insert([
            'id'        => $command->getUserId(),
            'email'     => $command->getEmail(),
            'password'  => $password = bcrypt($command->getPassword()),
        ]);

        /**
         * Log in if in web app (with sessions)
         */
        if ($this->auth instanceof SessionGuard) {
            $this->auth->loginUsingId($command->getUserId());
        }
    }
}