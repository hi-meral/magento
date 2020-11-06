<?php

declare(strict_types=1);

namespace Espl\BookShelf\Controller\Book;

use Magento\Framework\Controller\Result\Json;
use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;


class View extends Action
{
    public function execute() {
            
        echo "On page";
         return $this->resultFactory->create(ResultFactory::TYPE_PAGE);  
    }
}