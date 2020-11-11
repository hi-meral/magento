<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Eternus\EventRegistrations\Controller\Index;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Eternus\EventRegistrations\Model\RegistrationsFactory;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Action;

/**
 * Description of Submit
 *
 * @author espladmin
 */
class Submit extends Action{
    protected $resultPageFactory;
    protected $registrationsFactory;
 
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        RegistrationsFactory $registrationsFactory
    )
    {
        $this->resultPageFactory = $resultPageFactory;
        $this->registrationsFactory = $registrationsFactory;
        parent::__construct($context);
        

    }
    public function execute()
    {
        try {
            $data = (array)$this->getRequest()->getPost();
            if ($data) {
                $model = $this->registrationsFactory->create();
                $model->setData($data)->save();
                $this->messageManager->addSuccessMessage(__("Thanks for your interest in our Event. We will contact you shortly!"));
            }
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage($e, __("We can\'t submit your request, Please try again."));
        }
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        $resultRedirect->setUrl($this->_redirect->getRefererUrl());
        return $resultRedirect;
 
    }
}
