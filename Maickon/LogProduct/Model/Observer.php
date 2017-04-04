<?php

class Maickon_LogProduct_Model_Observer{

	public function logUpdate(Varien_Event_Observer $observer){
		$product = $observer->getEvent()->getProduct();
		$name = $product->getName();
		$sku = $product->getSku();

		Mage::log("{$name} ({$sku}) Atualizado", null, 'product-updates.log');
	}
}