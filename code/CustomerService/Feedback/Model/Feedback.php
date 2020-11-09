<?php
namespace CustomerService\Feedback\Model;

class Feedback extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
    
	const CACHE_TAG = 'customer_feedbacks';

	protected $_cacheTag = 'customer_feedbacks';

	protected $_eventPrefix = 'customer_feedbacks';

	protected function _construct()
	{
		$this->_init('CustomerService\Feedback\Model\ResourceModel\Feedback');
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