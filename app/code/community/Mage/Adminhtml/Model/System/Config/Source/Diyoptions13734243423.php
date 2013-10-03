<?php
class Mage_Adminhtml_Model_System_Config_Source_Diyoptions13734243423
{

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
		
            array('value' => 1, 'label'=>Mage::helper('adminhtml')->__('Letras e Números')),
            array('value' => 2, 'label'=>Mage::helper('adminhtml')->__('Somente Números')),
            array('value' => 3, 'label'=>Mage::helper('adminhtml')->__('Somente Letras')),
        );
    }

}
