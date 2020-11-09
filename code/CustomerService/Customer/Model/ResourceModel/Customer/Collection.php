<?php
namespace CustomerService\Customer\Model\ResourceModel\Customer;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use CustomerService\Customer\Model\Customer as Model;
use CustomerService\Customer\Model\ResourceModel\Customer as ResourceModel;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}