<?php

/**
 * Description of Product
 *
 * @author espladmin
 */
namespace Training\PluginModule\Plugin;

class Cart
{
        public function aroundAddProduct(
                \Magento\Checkout\Model\Cart $subject,
                \Closure $proceed,
                $productInfo,
                $requestInfo = null
        ) {
                $productInfo['price'] += 50; // setting quantity to 10
                $result = $proceed($productInfo, $requestInfo);
                // change result here
                return $result;
        }
}