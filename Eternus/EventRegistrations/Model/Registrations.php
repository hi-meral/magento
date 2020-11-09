<?php

namespace Eternus\EventRegistrations\Model;

use Magento\Framework\Model\AbstractModel;
use Magento\Framework\DataObject\IdentityInterface;

class Registrations extends AbstractModel implements IdentityInterface {

    const CACHE_TAG = 'eternus_eventregistrations_registration';
    protected $_cacheTag = 'eternus_eventregistrations_registration';
    protected $_eventPrefix = 'eternus_eventregistrations_registration';

    protected function _construct() {

        $this->_init('Eternus\EventRegistrations\Model\ResourceModel\Registrations');
    }

    public function getIdentities() {

        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues() {

        $values = [];

        return $values;
    }

}
