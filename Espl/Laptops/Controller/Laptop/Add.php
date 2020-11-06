<?php

namespace Espl\Laptops\Controller\Laptop;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Espl\Laptops\Model\Laptop as Model;
use Espl\Laptops\Model\ResourceModel\Laptop as ResourceModel;

class Add extends Action implements ResponseInterface {

    private $laptop;
    private $laptopResource;
    protected $_laptopFactory;
    protected $_filesystem;

    public function __construct(
    Context $context, Model $laptop, ResourceModel $laptopResource
    ) {
        parent::__construct($context);
        $this->laptop = $laptop;
        $this->laptopResource = $laptopResource;

        return parent::__construct($context);
    }

    public function execute() {
        /* Get the post data */
        $data = $this->getRequest()->getPostValue();
        if (!empty($data)) {
            /* Set the data in the model */
            $laptopModel = $this->laptop;
            $laptopModel->setData($data);
            try {
                /* Use the resource model to save the model in the DB */
                $this->laptopResource->save($laptopModel);
                $this->messageManager->addSuccessMessage("Laptop saved successfully!");
            } catch (\Exception $exception) {
                $this->messageManager->addErrorMessage(__("Error saving Laptop"));
            }
        } else {
            $this->messageManager->addErrorMessage(__("No data"));
        }




        /* Redirect back to Book page */
        $redirect = $this->resultRedirectFactory->create();
        $redirect->setPath('laptops/laptop/view');
        return $redirect;
    }

    public function sendResponse() {
        
    }

}
