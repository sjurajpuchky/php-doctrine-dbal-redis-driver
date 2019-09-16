<?php

namespace BABA\Doctrine\DBAL\Driver\Redis;

use Doctrine\DBAL\DBALException;
use Doctrine\DBAL\Driver\AbstractMySQLDriver;

class Driver extends AbstractRedisDriver
{
    /**
     * {@inheritdoc}
     * @throws DBALException
     */
    public function connect(array $params, $username = null, $password = null, array $driverOptions = [])
    {
        try {
            return new RedisConnection($params, $username, $password, $driverOptions);
        } catch (RedisException $e) {
            throw DBALException::driverException($this, $e);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'redis';
    }
}
