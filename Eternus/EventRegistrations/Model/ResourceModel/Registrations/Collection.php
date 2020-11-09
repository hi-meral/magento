<?php

namespace Eternus\EventRegistrations\Model\ResourceModel\Registrations;
use Eternus\EventRegistrations\Model\Registrations;
use Eternus\EventRegistrations\Model\ResourceModel\Registrations as RegistrationResourceModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection {

protected function _construct()
{
$this->_init(Registrations,RegistrationResourceModel);

}

}
