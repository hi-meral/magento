<?php
declare(strict_types=1);

namespace Training\Reviews\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Context;
use Training\Reviews\Model\Allreviews;
use Training\Reviews\Model\AllreviewsFactory;

class Add extends Action {

    protected $_modelAllreviewsFactory;
    private $logger;

    public function __construct(
            \Psr\Log\LoggerInterface $logger,
            Context $context,
            AllreviewsFactory $modelAllreviewsFactory
    ) {
        parent::__construct($context);
        $this->_modelAllreviewsFactory = $modelAllreviewsFactory;
        $this->logger = $logger;
    }

    public function execute() {
        $BlogModel = $this->_modelAllreviewsFactory->create();
        $date = date('Y-m-d h:i:sa');

        // 1. POST request : Get review data
        $post = (array) $this->getRequest()->getPost();
        $this->logger->info('ProductInfo 2: ', $post);


        if (!empty($post)) {
            // Retrieve form data
            $BlogModel->setData('title', $post['title']);
            $BlogModel->setData('description', $post['description']);
            $BlogModel->setData('rating', $post['rating']);
            $BlogModel->setData('created_at', $date);
            $BlogModel->setData('updated_at', $date);

            // Save in database table
            $BlogModel->save();
            // Display the succes form validation message
            $this->messageManager->addSuccessMessage('Review Submitted Successfully !');

            // Redirect to your form page
            $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
            $resultRedirect->setUrl('/userreview/page/view');

            return $resultRedirect;
        }
        // 2. GET request : Render the userreview page 
        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }

}
