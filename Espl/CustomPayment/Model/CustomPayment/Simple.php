<?php
namespace Espl\CustomPayment\Model\CustomPayment;
/**
 * Pay In Store payment method model
 */
class Simple extends \Magento\Payment\Model\Method\AbstractMethod
{
    /**
     * Payment code
     *
     * @var string
     */
    protected $_code = 'esplpayment';
}