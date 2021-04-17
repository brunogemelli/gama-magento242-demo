<?php

namespace GamaAcademy\ModuleConfigDemo\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $tableName2 = $setup->getTable('gamaacademy_sample_table_script');
        if ($setup->getConnection()->isTableExists($tableName2) == true) {
            return;
        }

        $table = $setup->getConnection()
            ->newTable($tableName2)
            ->addColumn(
                'entity_id',
                Table::TYPE_SMALLINT,
                null,
                ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                'ID'
            )
            ->addColumn(
                'name',
                Table::TYPE_TEXT,
                255,
                ['nullable' => true],
                'Name'
            )
            ->addColumn(
                'city',
                Table::TYPE_TEXT,
                255,
                ['nullable' => true],
                'City'
            );

        $setup->getConnection()->createTable($table);
    }
}
