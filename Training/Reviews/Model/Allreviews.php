<?php

namespace Training\Reviews\Model;

use Magento\Framework\Model\AbstractModel;

class Allreviews extends AbstractModel {

//	const STATUS_ENABLED = 1;
//    const STATUS_DISABLED = 0;

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

//	public function getAvailableStatuses()
//    {
//        return [self::STATUS_ENABLED => __('Enabled'), self::STATUS_DISABLED => __('Disabled')];
//    }
}
