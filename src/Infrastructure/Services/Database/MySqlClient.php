<?php declare(strict_types=1);

namespace Jrdn\DoApiWrapper\Infrastructure\Services\Database;

use Illuminate\Database\DatabaseManager;

/**
 * Class MySqlClient
 *
 * @author jrdn hannah <jrdn@jrdnhannah.co.uk>
 */
final class MySqlClient implements DatabaseClient
{
    /** @var DatabaseManager */
    private $databaseManager;

    /**
     * MySqlClient constructor.
     *
     * @param DatabaseManager $databaseManager
     */
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    /**
     * @return \Illuminate\Database\Connection
     */
    public function query() : \Illuminate\Database\Connection
    {
        return $this->databaseManager->connection();
    }
}