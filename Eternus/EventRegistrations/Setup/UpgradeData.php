<?php

namespace Eternus\EventRegistrations\Setup;

use \Magento\Framework\Setup\UpgradeDataInterface;
use \Magento\Framework\Setup\ModuleContextInterface;
use \Magento\Framework\Setup\ModuleDataSetupInterface;

class UpgradeData implements UpgradeDataInterface {

    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context) {


        $setup->startSetup();


        if ($context->getVersion() && version_compare($context->getVersion(), '0.1.1') < 0
        ) {

            $tableName = $setup->getTable('registrations');

            $data = [
                [
                    'name' => 'Shruti',
                    'email' => 'shruti@gmail.com',
                    'phone' => 1245632157,
                    
                ],
                [
                    'name' => 'Bhagyashree',
                    'email' => 'bhagyashree@gmail.com',
                    'phone' => 124563215795,
                    
                ],
            ];

            $setup
                    ->getConnection()
                    ->insertMultiple($tableName, $data);
        }


        $setup->endSetup();
    }

}
