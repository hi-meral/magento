<?php

namespace Espl\BookShelf\Controller\Book;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Espl\BookShelf\Model\Book;
use Espl\BookShelf\Model\ResourceModel\Book as BookResource;

class Add extends Action {

    /**
     * @var Book
     */
    private $book;

    /**
     * @var BookResource
     */
    private $bookResource;

    public function __construct(
    Context $context, Book $book, BookResource $bookResource
    ) {
        parent::__construct($context);
        $this->book = $book;
        $this->bookResource = $bookResource;
    }

    public function execute() {
        /* Get the post data */
        $data = $this->getRequest()->getParams();
        if (!empty($data)) {
  /* Set the data in the model */
        $bookModel = $this->book;
        $bookModel->setData($data);
        try {
            /* Use the resource model to save the model in the DB */
            $this->bookResource->save($bookModel);
            $this->messageManager->addSuccessMessage("Book saved successfully!");
        } catch (\Exception $exception) {
            $this->messageManager->addErrorMessage(__("Error saving Book"));
        }
            } else  {
             $this->messageManager->addErrorMessage(__("No data"));
        }
        
        
        

        /* Redirect back to Book page */
        $redirect = $this->resultRedirectFactory->create();
        $redirect->setPath('bookshelf/book/view');
        return $redirect;
    }

}
