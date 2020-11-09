<?php

namespace CustomerService\Feedback\Controller\Feedback;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use CustomerService\Feedback\Model\Feedback;
use CustomerService\Feedback\Model\ResourceModel\Feedback as FeedbackResource;

class Add extends Action {

    private $feedback;
    private $feedbackResource;

    /**
     * Add constructor.
     * @param Context $context
     * @param Car $car
     * @param CarResource $carResource
     */
    public function __construct(
    Context $context, Feedback $feedback, FeedbackResource $feedbackResource
    ) {
        parent::__construct($context);
        $this->feedback = $feedback;
        $this->feedbackResource = $feedbackResource;
    }

   
    public function execute() {
        /* Get the post data */
        $data = $this->getRequest()->getParams();

        /* Set the data in the model */
        $feedbackModel = $this->feedback;
        $feedbackModel->setData($data);

        try {
            /* Use the resource model to save the model in the DB */
            $this->feedbackResource->save($feedbackModel);
            $this->messageManager->addSuccessMessage("Feedback submitted successfully!");
        } catch (\Exception $exception) {
            $this->messageManager->addErrorMessage(__("Fail to submit feedback"));
        }

        /* Redirect back to feedbackpage page */
        $redirect = $this->resultRedirectFactory->create();
        $redirect->setPath('feedback/page/view');
        return $redirect;
    }

}
