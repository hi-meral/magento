<?php
namespace ORM\AdminGridModule\Block;
use ORM\AdminGridModule\Model\ResourceModel\UserDetails\Collection;
use Magento\Framework\View\Element\Template;
use Magento\Backend\Block\Template\Context;
class Registration extends \Magento\Framework\View\Element\Template
{
	public function __construct(\Magento\Framework\View\Element\Template\Context $context,\Magento\Framework\View\Result\PageFactory $pageFactory)
	{
		$this->_pageFactory = $pageFactory;
		parent::__construct($context);
	}

	public function getUserDetails()
    {
        return '/orm/index/registration';
    }
}
?>