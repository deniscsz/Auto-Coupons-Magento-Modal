<?php 

class Xpd_Autocoupons_Block_Standard_Modal extends Mage_Core_Block_Template {
    
    protected function _construct() {
        parent::_construct();
        $this->setTemplate('autocoupons/modal.phtml');
    }
    
}