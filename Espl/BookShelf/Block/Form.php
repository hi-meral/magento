<?php

namespace Espl\BookShelf\Block;

use Magento\Framework\View\Element\Template;
use Magento\Backend\Block\Template\Context;
use Espl\BookShelf\Model\ResourceModel\Book\Collection;

class Form extends Template {

    private $collection;
    protected $request;
    
    public function __construct(
    Context $context, Collection $collection, array $data = []
    ) {
        parent::__construct($context, $data);
        $this->collection = $collection;
         $this->request = $request;
    }

    public function getAllBooks() {
        return $this->collection;
    }

    public function getAddBooksPostUrl() {
       
        return $this->getUrl('bookshelf/book/add');
    }

}
