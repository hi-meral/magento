<?php
namespace ORM\AdmingridModule\Block\Adminhtml;

class UserDetails extends \Magento\Backend\Block\Widget\Grid\Container
{

	protected function _construct()
	{
		$this->_controller = 'adminhtml_userdetails';
		$this->_blockGroup = 'ORM_AdminGridModule';
		$this->_headerText = __('Details');
		$this->_addButtonLabel = __('Add New User');
		parent::_construct();
	}
}