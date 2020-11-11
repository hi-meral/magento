<?php

namespace Eternus\EventRegistrations\Setup;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UpgradeSchemaInterface;

class UpgradeSchema implements UpgradeSchemaInterface{
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        if (version_compare($context->getVersion(), '0.1.2', '<')) {
            $setup->getConnection()->dropColumn($setup->getTable('registrations'), 'phone');
        }
        $setup->endSetup();
    }
}
