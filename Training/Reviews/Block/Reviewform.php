<?php

namespace Training\Reviews\Block;

class Reviewform extends \Magento\Framework\View\Element\Template {

    private $logger;

    /**
     * Construct
     *
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    public function __construct(
            \Psr\Log\LoggerInterface $logger,
            \Magento\Framework\View\Element\Template\Context $context,
            array $data = []
    ) {
        parent::__construct($context, $data);
        $this->logger = $logger;
    }

    /**
     * Get form action URL for POST booking request
     *
     * @return string
     */
    public function getAddDataPostUrl() {
        $this->logger->info('We are in block');
        return '/userreview/page/view';
    }

}
