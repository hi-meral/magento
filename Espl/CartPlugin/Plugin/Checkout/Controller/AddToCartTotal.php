<?php

namespace Espl\CartPlugin\Plugin\Checkout\Controller;

class AddToCartTotal {

    public function beforeAddProduct( \Magento\Checkout\Model\Cart $subject,
            $productInfo,
            $requestInfo = null) {
        
        $productInfo['price'] = $productInfo['price'] + 50;
        return array($productInfo, $requestInfo);
          }
  
    }
    

