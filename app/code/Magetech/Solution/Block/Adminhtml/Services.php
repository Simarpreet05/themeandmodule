<?php
namespace Magetech\Solution\Block\Adminhtml;
class Services extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
		
        $this->_controller = 'adminhtml_services';/*block grid.php directory*/
        $this->_blockGroup = 'Magetech_Solution';
        $this->_headerText = __('Services');
        $this->_addButtonLabel = __('Add New Entry'); 
        parent::_construct();
		
    }
}
