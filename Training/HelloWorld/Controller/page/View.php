<?php

declare(strict_types=1);

namespace Training\HelloWorld\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\View\Result\Page;

class View extends Action
{
    public function execute()
    {
        /** @var Page $resultPage */
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}