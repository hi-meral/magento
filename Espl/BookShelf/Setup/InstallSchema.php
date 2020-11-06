<?php

namespace Espl\BookShelf\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Setup\Exception;

class InstallSchema implements \Magento\Framework\Setup\InstallSchemaInterface {

    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context) {
        $setup->startSetup();
        $conn = $setup->getConnection();
        $tableName = $setup->getTable('espl_bookshelf');
        if ($conn->isTableExists($tableName) != true) {
            try {
                $table = $setup->getConnection()->newTable(
                                $setup->getTable('espl_bookshelf')
                        )->addColumn(
                                'book_id', \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER, null, [
                            'identity' => true,
                            'nullable' => false,
                            'primary' => true,
                            'unsigned' => true,
                                ], 'Book ID'
                        )->addColumn(
                                'bookname', \Magento\Framework\DB\Ddl\Table::TYPE_TEXT, 255, ['nullable' => false], 'BookName'
                        )->addColumn(
                                'author', \Magento\Framework\DB\Ddl\Table::TYPE_TEXT, 255, ['nullable' => false], 'Author'
                        )->addColumn(
                                'description', \Magento\Framework\DB\Ddl\Table::TYPE_TEXT, 511, ['nullable' => true], 'Description'
                        )->addColumn(
                                'created_at', \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP, null, ['nullable' => false, 'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT], 'Created At'
                        )->addColumn(
                        'updated_at', \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP, null, ['nullable' => false, 'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT_UPDATE], 'Updated At');
                $setup->getConnection()->createTable($table);
                $setup->endSetup();
            } catch (Exception $err) {
                \Magento\Framework\App\ObjectManager::getInstance()->get('Psr\Log\LoggerInterface')->info($err->getMessage());
            }
        }
    }

}
