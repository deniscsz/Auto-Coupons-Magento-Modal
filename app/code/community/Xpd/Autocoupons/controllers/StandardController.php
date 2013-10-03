<?php

class Xpd_Autocoupons_StandardController extends Mage_Core_Controller_Front_Action {

	protected function _getModule() {
        return Mage::getSingleton('autocoupons/standard');
    }

	public function generateAction() {
		if(Mage::getStoreConfig('autocoupons/config/active') && $this->getRequest()->isPost()) {
			$modulo = $this->_getModule();
			$cupao = $modulo->generateCoupon();
            
			if($this->getRequest()->getParam('email')) {
				$modulo->sendCouponEmail($this->getRequest()->getParam('email'),$this->getRequest()->getParam('nome'),$cupao);
				$modulo->setInNewsletter($this->getRequest()->getParam('email'));
                
                $name = 'modalmpc';
                $value = 'nopen';
                $period = 2600000;
                Mage::getModel('core/cookie')->set($name, $value, $period);
                
                echo 1;
			}
			else {
				Mage::log('POST realizado da maneira incorreta. Email: '. $this->getRequest()->getParam('email'),null,'autocupons.log');
                echo 0;
			}
		}
	}
	
}

?>