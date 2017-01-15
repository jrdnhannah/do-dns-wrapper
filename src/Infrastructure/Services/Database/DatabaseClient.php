<?php declare(strict_types = 1);

namespace Jrdn\DoApiWrapper\Infrastructure\Services\Database;

/**
 * Interface DatabaseClient
 *
 * @author jrdn hannah <jrdn@jrdnhannah.co.uk>
 */
interface DatabaseClient
{
    /**
     * @return \Illuminate\Database\Connection
     */
    public function query() : \Illuminate\Database\Connection;
}