<?php
namespace Espl\BookShelf\Model;
use Espl\BookShelf\Model\ResourceModel\Book as ResourceModel;

class Book extends \Magento\Framework\Model\AbstractModel
{

	protected function _construct()
	{
		$this->_init(ResourceModel::class);
	}

}
