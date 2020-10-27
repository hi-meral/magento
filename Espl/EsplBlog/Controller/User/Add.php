<?php

namespace Espl\EsplBlog\Controller\User;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Espl\EsplBlog\Model\Post as User;
use Espl\EsplBlog\Model\ResourceModel\Post as UserResource;

class Add extends Action
{
    private $user;
    private $userResource;

    public function __construct(
        Context $context,
        User $user,
        UserResource $userResource
    )
    {
        parent::__construct($context);
        $this->user = $user;
        $this->userResource = $userResource;
    }

    /**
     * Execute action based on request and return result
     *
     * Note: Request will be added as operation argument in future
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        /* Get the post data */
        $data = $this->getRequest()->getParams();

        /* Set the data in the model */
        $userModel = $this->user;
        $userModel->setData($data);

        try {
            /* Use the resource model to save the model in the DB */
            $this->userResource->save($userModel);
            $this->messageManager->addSuccessMessage("Data saved successfully!");
        } catch (\Exception $exception) {
            $this->messageManager->addErrorMessage(__("Error saving data"));
        }

        /* Redirect back */
        $redirect = $this->resultRedirectFactory->create();
        $redirect->setPath('esplblog/user/view');
        return $redirect;
    }
}