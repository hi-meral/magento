<?php
namespace CustomerService\Feedback\Setup;

class InstallSchema implements \Magento\Framework\Setup\InstallSchemaInterface
{

	public function install(\Magento\Framework\Setup\SchemaSetupInterface $setup, \Magento\Framework\Setup\ModuleContextInterface $context)
	{
		$installer = $setup;
		$installer->startSetup();
		if (!$installer->tableExists('customer_feedbacks')) {
			$table = $installer->getConnection()->newTable(
				$installer->getTable('customer_feedbacks')
			)
				->addColumn(
					'feedback_id',
					\Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
					null,
					[
						'identity' => true,
						'nullable' => false,
						'primary'  => true,
						'unsigned' => true,
					],
					'Feedback ID'
				)
				->addColumn(
					'name',
					\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
					255,
					['nullable => false'],
					'Customer Name'
				)
				
				
				->addColumn(
					'status',
					\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
					255,
					[],
					'Feedback Status'
				)
				->addColumn(
					'feedback',
					\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
					255,
					[],
					'Customer Feedback'
				);
				
				
			$installer->getConnection()->createTable($table);

		}
		$installer->endSetup();
	}
}