<?php

namespace Espl\Laptops\Block;

use Magento\Framework\View\Element\Template;
use Magento\Backend\Block\Template\Context;
use Espl\Laptops\Model\ResourceModel\Laptop\Collection;

class Form extends Template {

     protected $_pageFactory;
     protected $_postLoader;
 
     public function __construct(
          \Magento\Framework\View\Element\Template\Context $context,
          \Magento\Framework\View\Result\PageFactory $pageFactory
          )
     {
          $this->_pageFactory = $pageFactory;
          return parent::__construct($context);
          
     }
 
     public function execute()
     {
          return $this->_pageFactory->create();
     }
     
      public function getAddDataPostUrl() {
        return $this->getUrl('laptops/laptop/add');
    }

}
