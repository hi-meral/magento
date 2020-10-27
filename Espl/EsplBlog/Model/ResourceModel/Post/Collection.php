<?php
namespace Espl\EsplBlog\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'post_id';
    protected $_eventPrefix = 'espl_esplblog_post_collection';
    protected $_eventObject = 'post_collection';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Espl\EsplBlog\Model\Post', 'Espl\EsplBlog\Model\ResourceModel\Post');
    }

}
