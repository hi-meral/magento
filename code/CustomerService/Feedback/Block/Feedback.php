<?php

namespace CustomerService\Feedback\Block;

use Magento\Framework\View\Element\Template;
use CustomerService\Feedback\Model\ResourceModel\Feedback\Collection;

class Feedback extends Template {

    /**
     * @var Collection
     */
    private $collection;
   
    public function __construct(
     Template\Context $context, Collection $collection, array $data = []
    ) {
        parent::__construct($context, $data);
        $this->collection = $collection;
    }

    public function getAllFeedback() {
        return $this->collection;
    }

    public function getAddDataPostUrl() {
          return $this->getUrl('feedback/feedback/add');
    }
}
