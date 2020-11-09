<?php
namespace Espl\HelloWorld\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'espl_helloworld_post';

	protected $_cacheTag = 'espl_helloworld_post';

	protected $_eventPrefix = 'espl_helloworld_post';

	protected function _construct()
	{
		$this->_init('Espl\HelloWorld\Model\ResourceModel\Post');
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