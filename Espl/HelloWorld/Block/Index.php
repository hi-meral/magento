<?php
namespace Espl\HelloWorld\Block;

use Magento\Framework\View\Element\Template;
use Espl\HelloWorld\Model\ResourceModel\Post\Collection;

class Index extends \Magento\Framework\View\Element\Template
{
    /**
     * Construct
     *
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */

    private $collection;

   public function __construct(Template\Context $context, Collection $collection, array $data = [])
    {
        parent::__construct($context, $data);
        $this->collection = $collection;
       }
 
    /**
     * Get form action URL for POST booking request
     *
     * @return string
     */
    public function getFormAction()
    {
            // companymodule is given in routes.xml
            // controller_name is folder name inside controller folder
            // action is php file name inside above controller_name folder
            return $this->getUrl('helloworld/user/add');
        //return 'helloworld/index/index';
        // here controller_name is index, action is booking
    }
}