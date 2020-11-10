<?php
namespace ORM\AdminGridModule\Model\ResourceModel\UserDetails;

use ORM\AdminGridModule\Model\UserDetails as Model;
use ORM\AdminGridModule\Model\ResourceModel\UserDetails as ResourceModel;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'id';
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}