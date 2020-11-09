<?php
namespace Espl\FirstLayout\Plugin;

class Cart
{
	public function beforeAddProduct(
	\Magento\Checkout\Model\Cart $subject,
	$productInfo,
	$requestInfo)
	{
        $productInfo['price'] +=50;
		return array ($productInfo,$requestInfo);
    }
}
