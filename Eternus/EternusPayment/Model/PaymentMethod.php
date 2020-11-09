<?php
 namespace Eternus\EternusPayment\Model;

class PaymentMethod extends \Magento\Payment\Model\Method\Cc {
   
   public function capture(\Magento\Payment\Model\InfoInterface $payment, $amount)
    {
        //todo add functionality later
    }
 
    public function authorize(\Magento\Payment\Model\InfoInterface $payment, $amount)
    {
        //todo add functionality later
    }
        //tod
}
