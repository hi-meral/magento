<?php
namespace ORM\AdminGridModule\Model\ResourceModel;

class UserDetails extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{		
	protected function _construct()
	{
		$this->_init('user_data', 'id');
	}
	
}