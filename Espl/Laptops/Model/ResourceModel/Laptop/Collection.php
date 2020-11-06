<?php
namespace Espl\Laptops\Model\ResourceModel\Laptop;

use Espl\Laptops\Model\Laptop as Model ;
use Espl\Laptops\Model\ResourceModel\Laptop as ResourceModel;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
        protected $_idFieldName = 'id';
	protected $_eventPrefix = 'laptops_collection';
	protected $_eventObject = 'laptop_collection';    
        
        /**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		  $this->_init(Model::class, ResourceModel::class);
	}

}

