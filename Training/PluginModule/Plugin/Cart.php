<?php

/**
 * Description of Product
 *
 * @author espladmin
 */

namespace Training\PluginModule\Plugin;

class Cart {

    public function beforeAddProduct(
            \Magento\Checkout\Model\Cart $subject,
            $productInfo,
            $requestInfo = null) {

        $productInfo['price'] += 50; // increasing price by 50      

        return array($productInfo, $requestInfo);
    }

}
