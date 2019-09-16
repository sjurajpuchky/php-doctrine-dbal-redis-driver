<?php /** @noinspection SpellCheckingInspection */


namespace BABA\Doctrine\DBAL\Driver\Redis;


use Doctrine\DBAL\Schema\AbstractSchemaManager;
use Doctrine\DBAL\Schema\Column;

class RedisSchemaManager extends AbstractSchemaManager
{

    /**
     * Gets Table Column Definition.
     *
     * @param mixed[] $tableColumn
     *
     * @return Column
     */
    protected function _getPortableTableColumnDefinition($tableColumn)
    {
        // TODO: Implement _getPortableTableColumnDefinition() method.
    }
}