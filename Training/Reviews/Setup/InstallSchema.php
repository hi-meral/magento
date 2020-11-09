<?php

namespace Training\Reviews\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface {

    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context) {

        $reviewTableName = $setup->getTable('user_review');

        if ($setup->getConnection()->isTableExists($reviewTableName) != true) {

            $reviewTable = $setup->getConnection()
                    ->newTable($reviewTableName)
                    ->addColumn(
                            'review_id',
                            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                            null,
                            ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                            'Review ID'
                    )
                    ->addColumn(
                            'title',
                            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                            255,
                            ['nullable' => false, 'default' => ''],
                            'Title'
                    )
                    ->addColumn(
                            'description',
                            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                            null,
                            ['nullable' => false, 'default' => ''],
                            'Description'
                    )
                    ->addColumn(
                            'rating',
                            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                            null,
                            ['nullable' => false],
                            'Rating'
                    )
                    ->addColumn(
                            'created_at',
                            \Magento\Framework\DB\Ddl\Table::TYPE_DATETIME,
                            null,
                            ['nullable' => false],
                            'Created At'
                    )
                    ->addColumn(
                            'updated_at',
                            \Magento\Framework\DB\Ddl\Table::TYPE_DATETIME,
                            null,
                            ['nullable' => false],
                            'Updated At'
                    )
                    ->addIndex(
                            $setup->getIdxName('user_review', ['title']),
                            ['title']
                    )
                    ->setComment("Review Table");

            $setup->getConnection()->createTable($reviewTable);
        }
    }

}
