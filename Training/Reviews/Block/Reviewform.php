<?php
namespace Training\Reviews\Block;

use Magento\Framework\View\Element\Template;
use Training\Reviews\Model\ResourceModel\Allreviews\Collection;

class Reviewform extends Template
{
    /**
     * @var Collection
     */
    private $collection;
    private $logger;

    /**
     * Hello constructor.
     * @param Template\Context $context
     * @param Collection $collection
     * @param array $data
     */
    public function __construct(\Psr\Log\LoggerInterface $logger, Template\Context $context, Collection $collection, array $data = [])
    {
        parent::__construct($context, $data);
        $this->collection = $collection;
        $this->logger = $logger;
    }

    public function getAllReviews() {
        return $this->collection;
    }

    public function getAddDataPostUrl() {
        $this->logger->info('We are in block');
        return '/userreview/page/add';
    }
}