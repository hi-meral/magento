<?php

namespace ORM\AdminGridModule\Setup;

class InstallSchema implements \Magento\Framework\Setup\InstallSchemaInterface
{

	public function install(\Magento\Framework\Setup\SchemaSetupInterface $setup, \Magento\Framework\Setup\ModuleContextInterface $context)
	{
		$installer = $setup;
		$installer->startSetup();
		if (!$installer->tableExists('user_data')) {
			$table = $installer->getConnection()->newTable(
				$installer->getTable('user_data')
			)
				->addColumn(
					'post_id',
					\Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
					null,
					[
						'identity' => true,
						'nullable' => false,
						'primary'  => true,
						'unsigned' => true,
					],
					'ID'
				)
				->addColumn(
					'firstname',
					\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
					255,
					['nullable => false'],
					'First Name'
                )
                ->addColumn(
					'lastname',
					\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
					255,
					['nullable => false'],
					'Last Name'
				)
				->addColumn(
					'phone',
					\Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
					null,
					[],
					'Contact Number'
				)
				->addColumn(
					'emailId',
					\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
					255,
					[],
					'Email Id'
				)
				->setComment('Post Table');
			$installer->getConnection()->createTable($table);

			$installer->getConnection()->addIndex(
				$installer->getTable('user_data'),
				$setup->getIdxName(
					$installer->getTable('user_data'),
					['firstname', 'lastname', 'phone', 'emailId'],
					\Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_FULLTEXT
				),
				['firstname', 'lastname', 'phone', 'emailId'],
				\Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_FULLTEXT
			);
		}
		$installer->endSetup();
	}
}