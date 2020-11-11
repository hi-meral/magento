<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Eternus\Product\Plugin;
use Psr\Log\LoggerInterface;
class Cart {
    protected $logger;
    public function __construct(LoggerInterface $logger)

    {
    $this->logger = $logger;
    }
    

    public function beforeAddProduct(
            \Magento\Checkout\Model\Cart $subject,
                $productInfo,
                $requestInfo=null)
    {
       
        $productInfo['price'] = $productInfo['price'] + 50;       
          
        return array($productInfo,$requestInfo);
       
    }
}