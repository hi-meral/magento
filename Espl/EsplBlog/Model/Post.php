<?php
namespace Espl\EsplBlog\Model;

class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'espl_esplblog_post';

    protected $_cacheTag = 'espl_esplblog_post';

    protected $_eventPrefix = 'espl_esplblog_post';

    protected function _construct()
    {
        $this->_init('Espl\EsplBlog\Model\ResourceModel\Post');
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