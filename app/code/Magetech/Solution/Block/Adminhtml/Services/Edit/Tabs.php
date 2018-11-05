<?php
namespace Magetech\Solution\Block\Adminhtml\Services\Edit;

class Tabs extends \Magento\Backend\Block\Widget\Tabs
{
    protected function _construct()
    {
		
        parent::_construct();
        $this->setId('checkmodule_services_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(__('Services Information'));
    }
}