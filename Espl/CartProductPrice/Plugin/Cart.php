<?php
 
namespace Espl\CartProductPrice\Plugin;
 
class Cart
{
//    public function beforeAddProduct(
//            \Magento\Checkout\Model\Cart $subject, 
//            $productInfo, 
//            $requestInfo = null
//    )
//    {
//        $requestInfo['qty'] = 5;
//        return array($productInfo, $requestInfo);
//    }
    
    public function aroundAddProduct(
            \Magento\Checkout\Model\Cart $subject,
            \Closure $proceed,
            $productInfo,
            $requestInfo = null
    ) {
        $productInfo['price'] = $productInfo['price']   + 50;
        $result = $proceed($productInfo, $requestInfo);
        return $result;
    }
}