<?php

namespace Training\Reviews\Model\ResourceModel\Allreviews;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection {

    protected $_idFieldName = 'review_id';
    protected $_eventPrefix = 'reviews_allreviews_collection';
    protected $_eventObject = 'allreviewss_collection';

    /**
     * Define model & resource model
     */
    protected function _construct() {
        $this->_init('Training\Reviews\Model\Allreviews', 'Training\Reviews\Model\ResourceModel\Allreviews');
    }

}
