<?php namespace CustomerService\Feedback\Model\ResourceModel\Feedback;
use CustomerService\Feedback\Model\Feedback as Model;
use CustomerService\Feedback\Model\ResourceModel\Feedback as ResourceModel;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection {

    protected $_idFieldName = 'feedback_id';
    protected $_eventPrefix = 'customerservice_feedback_feedback_collection';
    protected $_eventObject = 'feedback_collection';

    
    protected function _construct() {
        $this->_init(Model::class, ResourceModel::class);
    }

}


