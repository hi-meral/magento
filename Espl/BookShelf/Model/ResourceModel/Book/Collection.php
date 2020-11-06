<?php
namespace Espl\BookShelf\Model\ResourceModel\Book;

use Espl\BookShelf\Model\Book as Model ;
use Espl\BookShelf\Model\ResourceModel\Book as ResourceModel;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		  $this->_init(Model::class, ResourceModel::class);
	}

}
