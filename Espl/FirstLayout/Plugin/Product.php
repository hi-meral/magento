<?php
namespace Espl\FirstLayout\Plugin;

class Cart
{
	public function afterGetPrice(
	\Magento\Checkout\Model\Product $subject,
	$productInfo,
	$requestInfo)
	{
        $productInfo['price'] +=50;
		return array ($productInfo,$requestInfo);
    }
       
}

