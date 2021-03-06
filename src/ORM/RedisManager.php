<?php /** @noinspection SpellCheckingInspection */

namespace Doctrine\ORM;

use Doctrine\Common\EventManager;
use Doctrine\DBAL\Connection;
use Doctrine\ORM\Configuration;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Query\ResultSetMapping;

class RedisManager extends EntityManager
{
    public function __construct(Connection $conn, Configuration $config, EventManager $eventManager)
    {
        parent::__construct($conn, $config, $eventManager);
    }

    public function getConnection()
    {
        return parent::getConnection(); // TODO: Change the autogenerated stub
    }

    public function getMetadataFactory()
    {
        return parent::getMetadataFactory(); // TODO: Change the autogenerated stub
    }

    public function getExpressionBuilder()
    {
        return parent::getExpressionBuilder(); // TODO: Change the autogenerated stub
    }

    public function beginTransaction()
    {
        parent::beginTransaction(); // TODO: Change the autogenerated stub
    }

    public function getCache()
    {
        return parent::getCache(); // TODO: Change the autogenerated stub
    }

    public function transactional($func)
    {
        return parent::transactional($func); // TODO: Change the autogenerated stub
    }

    public function commit()
    {
        parent::commit(); // TODO: Change the autogenerated stub
    }

    public function rollback()
    {
        parent::rollback(); // TODO: Change the autogenerated stub
    }

    public function getClassMetadata($className)
    {
        return parent::getClassMetadata($className); // TODO: Change the autogenerated stub
    }

    public function createQuery($dql = '')
    {
        return parent::createQuery($dql); // TODO: Change the autogenerated stub
    }

    public function createNamedQuery($name)
    {
        return parent::createNamedQuery($name); // TODO: Change the autogenerated stub
    }

    public function createNativeQuery($sql, ResultSetMapping $rsm)
    {
        return parent::createNativeQuery($sql, $rsm); // TODO: Change the autogenerated stub
    }

    public function createNamedNativeQuery($name)
    {
        return parent::createNamedNativeQuery($name); // TODO: Change the autogenerated stub
    }

    public function createQueryBuilder()
    {
        return parent::createQueryBuilder(); // TODO: Change the autogenerated stub
    }

    public function flush($entity = null)
    {
        parent::flush($entity); // TODO: Change the autogenerated stub
    }

    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        return parent::find($entityName, $id, $lockMode, $lockVersion); // TODO: Change the autogenerated stub
    }

    public function getReference($entityName, $id)
    {
        return parent::getReference($entityName, $id); // TODO: Change the autogenerated stub
    }

    public function getPartialReference($entityName, $identifier)
    {
        return parent::getPartialReference($entityName, $identifier); // TODO: Change the autogenerated stub
    }

    public function clear($entityName = null)
    {
        parent::clear($entityName); // TODO: Change the autogenerated stub
    }

    public function close()
    {
        parent::close(); // TODO: Change the autogenerated stub
    }

    public function persist($entity)
    {
        parent::persist($entity); // TODO: Change the autogenerated stub
    }

    public function remove($entity)
    {
        parent::remove($entity); // TODO: Change the autogenerated stub
    }

    public function refresh($entity)
    {
        parent::refresh($entity); // TODO: Change the autogenerated stub
    }

    public function detach($entity)
    {
        parent::detach($entity); // TODO: Change the autogenerated stub
    }

    public function merge($entity)
    {
        return parent::merge($entity); // TODO: Change the autogenerated stub
    }

    public function copy($entity, $deep = false)
    {
        parent::copy($entity, $deep); // TODO: Change the autogenerated stub
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        parent::lock($entity, $lockMode, $lockVersion); // TODO: Change the autogenerated stub
    }

    public function getRepository($entityName)
    {
        return parent::getRepository($entityName); // TODO: Change the autogenerated stub
    }

    public function contains($entity)
    {
        return parent::contains($entity); // TODO: Change the autogenerated stub
    }

    public function getEventManager()
    {
        return parent::getEventManager(); // TODO: Change the autogenerated stub
    }

    public function getConfiguration()
    {
        return parent::getConfiguration(); // TODO: Change the autogenerated stub
    }

    public function isOpen()
    {
        return parent::isOpen(); // TODO: Change the autogenerated stub
    }

    public function getUnitOfWork()
    {
        return parent::getUnitOfWork(); // TODO: Change the autogenerated stub
    }

    public function getHydrator($hydrationMode)
    {
        return parent::getHydrator($hydrationMode); // TODO: Change the autogenerated stub
    }

    public function newHydrator($hydrationMode)
    {
        return parent::newHydrator($hydrationMode); // TODO: Change the autogenerated stub
    }

    public function getProxyFactory()
    {
        return parent::getProxyFactory(); // TODO: Change the autogenerated stub
    }

    public function initializeObject($obj)
    {
        parent::initializeObject($obj); // TODO: Change the autogenerated stub
    }

    public static function create($connection, Configuration $config, EventManager $eventManager = null)
    {
        return parent::create($connection, $config, $eventManager); // TODO: Change the autogenerated stub
    }

    protected static function createConnection($connection, Configuration $config, EventManager $eventManager = null)
    {
        return parent::createConnection($connection, $config, $eventManager); // TODO: Change the autogenerated stub
    }

    public function getFilters()
    {
        return parent::getFilters(); // TODO: Change the autogenerated stub
    }

    public function isFiltersStateClean()
    {
        return parent::isFiltersStateClean(); // TODO: Change the autogenerated stub
    }

    public function hasFilters()
    {
        return parent::hasFilters(); // TODO: Change the autogenerated stub
    }

}