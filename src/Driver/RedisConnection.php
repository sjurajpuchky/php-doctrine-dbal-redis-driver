<?php

namespace Doctrine\DBAL\Driver\Redis;

use Doctrine\DBAL\Driver\Connection;
use Doctrine\DBAL\Driver\Mysqli\RedisStatement;
use Doctrine\DBAL\Driver\PingableConnection;
use Doctrine\DBAL\Driver\ServerInfoAwareConnection;
use Doctrine\DBAL\ParameterType;
use Redis;

class RedisConnection implements Connection, PingableConnection, ServerInfoAwareConnection
{
    /**
     * Name of the option to set connection flags
     */
    const OPTION_FLAGS = 'flags';

    /** @var Redis */
    private $conn;

    private $dbname;
    private $socket;
    private $flags;

    /**
     * @param mixed[] $params
     * @param string  $username
     * @param string  $password
     * @param mixed[] $driverOptions
     *
     * @throws RedisException
     */
    public function __construct(array $params, $username, $password, array $driverOptions = [])
    {
        $port = $params['port'] ?? ini_get('redis.default_port');

        // Fallback to default MySQL port if not given.
        if (! $port) {
            $port = 6379;
        }

        $this->socket = $params['unix_socket'] ?? ini_get('redis.default_socket');
        $this->dbname = $params['dbname'] ?? null;

        $this->flags = $driverOptions[static::OPTION_FLAGS] ?? null;

        $this->conn = new Redis();

        try {
            if (! $this->conn->connect($params['host'], $port)) {
                throw new RedisException('Cannot connect to redis server','CONNECTION', '-1');
            }
        } finally {
        }
    }

    /**
     * Retrieves redis native resource handle.
     *
     * Could be used if part of your application is not using DBAL.
     *
     * @return redis
     */
    public function getWrappedResourceHandle()
    {
        return $this->conn;
    }

    /**
     * {@inheritdoc}
     *
     * The server version detection includes a special case for MariaDB
     * to support '5.5.5-' prefixed versions introduced in Maria 10+
     *
     * @link https://jira.mariadb.org/browse/MDEV-4088
     */
    public function getServerVersion()
    {
        return phpversion('redis');
    }

    /**
     * {@inheritdoc}
     */
    public function requiresQueryForServerVersion()
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function prepare($prepareString)
    {
        return new RedisStatement($this->conn, $prepareString);
    }

    /**
     * {@inheritdoc}
     */
    public function query()
    {
        $args = func_get_args();
        $command  = $args[0];
        return $this->conn->client($command);
    }

    /**
     * {@inheritdoc}
     */
    public function quote($input, $type = ParameterType::STRING)
    {
        return "'" . addslashes($input) . "'";
    }

    /**
     * {@inheritdoc}
     * @throws RedisException
     */
    public function exec($statement)
    {
        if ($result = $this->conn->query($statement) === false) {
            throw new RedisException($this->errorInfo(), 'COMMAND', $this->errorCode());
        }

        return $result;
    }

    /**
     * {@inheritdoc}
     */
    public function lastInsertId($name = null)
    {
        return 0;
    }

    /**
     * {@inheritdoc}
     */
    public function beginTransaction()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function commit()
    {
    }

    /**
     * {@inheritdoc}non-PHPdoc)
     */
    public function rollBack()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function errorCode()
    {
        return -1;
    }

    /**
     * {@inheritdoc}
     */
    public function errorInfo()
    {
        return $this->conn->getLastError();
    }

    /**
     * Apply the driver options to the connection.
     * @param array $driverOptions
     */
    private function setDriverOptions(array $driverOptions = [])
    {
    }

    /**
     * Pings the server and re-connects when `redis.reconnect = 1`
     *
     * @return bool
     */
    public function ping()
    {
        return $this->conn->ping();
    }

    /**
     * Establish a secure connection
     *
     * @param mixed[] $params
     *
     * @throws RedisException
     */
    private function setSecureConnection(array $params)
    {
    }
}
