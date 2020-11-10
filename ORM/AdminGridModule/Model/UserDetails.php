<?php
namespace ORM\AdminGridModule\Model;
use ORM\AdminGridModule\Model\ResourceModel\UserDetails as ResourceModel;	
class UserDetails extends \Magento\Framework\Model\AbstractModel
{
	protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }
}