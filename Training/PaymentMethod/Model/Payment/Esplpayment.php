<?php

namespace Training\PaymentMethod\Model\Payment;

/**
 * Pay In Store payment method model
 */
class Esplpayment extends \Magento\Payment\Model\Method\AbstractMethod {

    /**
     * Payment code
     *
     * @var string
     */
    protected $_code = 'esplpayment';

    /**
     * Availability option
     *
     * @var bool
     */
    protected $_isOffline = true;

    public function isAvailable(
            \Magento\Quote\Api\Data\CartInterface $quote = null
    ) {
        return parent::isAvailable($quote);
    }

}
