<?php

namespace BABA\Doctrine\DBAL\Driver\Redis;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DBALException;
use Doctrine\DBAL\Driver;
use Doctrine\DBAL\Driver\DriverException;
use Doctrine\DBAL\Driver\ExceptionConverterDriver;
use Doctrine\DBAL\Exception;
use Doctrine\DBAL\Platforms\RedisPlatform;
use Doctrine\DBAL\VersionAwarePlatformDriver;

/**
 * Abstract base implementation of the {@link Doctrine\DBAL\Driver} interface for MySQL based drivers.
 */
abstract class AbstractRedisDriver implements Driver, ExceptionConverterDriver, VersionAwarePlatformDriver
{
    /**
     * {@inheritdoc}
     *
     */
    public function convertException($message, DriverException $exception)
    {
        switch ($exception->getErrorCode()) {
        }

        return new Exception\DriverException($message, $exception);
    }

    /**
     * {@inheritdoc}
     *
     * @throws DBALException
     */
    public function createDatabasePlatformForVersion($version)
    {

        return new RedisPlatform();
    }

    /**
     * {@inheritdoc}
     */
    public function getDatabase(Connection $conn)
    {
        $params = $conn->getParams();

        return $params['dbname'];
    }

    /**
     * {@inheritdoc}
     *
     * @return RedisPlatform
     */
    public function getDatabasePlatform()
    {
        return new RedisPlatform();
    }

    /**
     * {@inheritdoc}
     *
     * @return RedisSchemaManager
     */
    public function getSchemaManager(Connection $conn)
    {
        return new RedisSchemaManager($conn);
    }
}
