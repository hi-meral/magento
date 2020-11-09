<?php

namespace Eternus\EventRegistrations\Setup;

class InstallSchema implements \Magento\Framework\Setup\InstallSchemaInterface {

    public function install(\Magento\Framework\Setup\SchemaSetupInterface $setup, \Magento\Framework\Setup\ModuleContextInterface $context) {
        $installer = $setup;
        $installer->startSetup();
        if (!$installer->tableExists('registrations')) {
            $table = $installer->getConnection()
                    ->newTable($installer->getTable('registrations'))
                    ->addColumn
                            ('id', \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER, null, ['identity' => true,
                        'nullable' => false,
                        'primary' => true, 'unsigned' => true,], 'Id')
                    ->addColumn(
                            'name', \Magento\Framework\DB\Ddl\Table::TYPE_TEXT, 255, [], 'Name')
                    ->addColumn(
                            'email', \Magento\Framework\DB\Ddl\Table::TYPE_TEXT, 255, [], 'Email')
                    ->addColumn(
                            'phone', \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER, 255, [], 'Phone')
                    ->setComment('Event Registration Table');
            $installer->getConnection()->createTable($table);
        }
        $installer->endSetup();
    }

}
