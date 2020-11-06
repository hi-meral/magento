<?php

namespace Espl\Laptops\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Setup\Exception;

class InstallSchema implements \Magento\Framework\Setup\InstallSchemaInterface {

    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context) {
        $setup->startSetup();
        $conn = $setup->getConnection();
        $tableName = $setup->getTable('laptops');
        if ($conn->isTableExists($tableName) != true) {
            try {
                $table = $setup->getConnection()->newTable(
                                $setup->getTable('laptops')
                        )->addColumn(
                                'id', \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER, null, [
                            'identity' => true,
                            'nullable' => false,
                            'primary' => true,
                            'unsigned' => true,
                                ], 'ID'
                        )->addColumn(
                                'model_name', \Magento\Framework\DB\Ddl\Table::TYPE_TEXT, 255, ['nullable' => false], 'ModelName'
                        )->addColumn(
                                'ram', \Magento\Framework\DB\Ddl\Table::TYPE_TEXT, 255, ['nullable' => false], 'Ram'
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
