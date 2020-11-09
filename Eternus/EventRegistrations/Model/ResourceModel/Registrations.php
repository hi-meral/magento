<?php

namespace Eternus\EventRegistrations\Model\ResourceModel;


use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Registrations extends AbstractDb {

    
    protected function _construct() {

        $this->_init('registrations', 'id');
    }

}
