<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Eternus\Product\Plugin;

class Product {
    
    public function afterGetName(
            \Magento\Catalog\Model\Product $subject, $result)
    {
               
        
        return "Product name :".$result;
    }
}