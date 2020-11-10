<?php

namespace ORM\AdminGridModule\Controller\Index;
use Magento\Framework\Controller\ResultFactory;
use ORM\AdminGridModule\Model\UserDetails;
use Magento\Framework\App\Action\Context;
use ORM\AdminGridModule\Model\ResourceModel\UserDetails as userResource;

class Registration extends \Magento\Framework\App\Action\Action
{ 
   private $user;
   private $userresource;
     
     public function __construct(
     Context $context,
     UserDetails $user,
     userResource $userresource
     )
     {
          parent::__construct($context);
          $this->user = $user;
          $this->userresource = $userresource;
     }

     public function execute()
     {
        $data = (array) $this->getRequest()->getParams();
        if(!empty($data)){
        $userDetailsModel = $this->user;
        $userDetailsModel->setData($data);

        try {
            $this->userresource->save($userDetailsModel);
            $this->messageManager->addSuccessMessage("Registered successfully!");
        } 
        catch (\Exception $exception) {
            $this->messageManager->addErrorMessage(__("Error while registering"));
        }
        $redirect = $this->resultRedirectFactory->create();
        $redirect->setUrl('/orm/index/registration');
        return $redirect;
    }
    $this->_view->loadLayout();
    $this->_view->renderLayout();
     }
}