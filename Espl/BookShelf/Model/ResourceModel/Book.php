<?php
namespace Espl\BookShelf\Model\ResourceModel;


class Book extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
	
	protected function _construct()
	{
		$this->_init('espl_bookshelf', 'book_id');
	}
	
}