<?php

namespace CustomerService\Customer\Model;

use Magento\Framework\Model\AbstractModel;
use CustomerService\Customer\Model\ResourceModel\Customer as ResourceModel;

class Customer extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }
}