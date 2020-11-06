<?php

declare(strict_types=1);

namespace Espl\HelloWorld\Controller\Page;

use Magento\Framework\Controller\Result\Json;
use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Checkout\Model\Cart;


class View extends Action
{
    public function execute() {
   
         return $this->resultFactory->create(ResultFactory::TYPE_PAGE);  
    }
}