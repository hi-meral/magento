<?php

namespace Training\Reviews\Model;

use Magento\Framework\Model\AbstractModel;

class Allreviews extends AbstractModel {

    const CACHE_TAG = 'training_reviews';

    //Unique identifier for use within caching
    protected $_cacheTag = self::CACHE_TAG;

    protected function _construct() {
        $this->_init('Training\Reviews\Model\ResourceModel\Allreviews');
    }

    public function getIdentities() {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues() {
        $values = [];
        return $values;
    }
}
