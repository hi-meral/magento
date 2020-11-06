<?php
namespace Espl\Laptops\Model;
use Espl\Laptops\Model\ResourceModel\Laptop as ResourceModel;

class Laptop extends \Magento\Framework\Model\AbstractModel
{
const CACHE_TAG = 'laptops';

	protected $_cacheTag = 'laptops';

	protected $_eventPrefix = 'laptops';

	protected function _construct()
	{
		$this->_init('Espl\Laptops\Model\ResourceModel\Laptop');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}

}


