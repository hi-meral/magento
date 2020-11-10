<?php

namespace Payment\CustomeGateway\Model;

class DemoPayment extends \Magento\Payment\Model\Method\AbstractMethod
{
    protected $_code = 'customepayment';
}