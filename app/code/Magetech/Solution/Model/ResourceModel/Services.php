<?php
/**
 * Copyright © 2015 Magetech. All rights reserved.
 */
namespace Magetech\Solution\Model\ResourceModel;

/**
 * Services resource
 */
class Services extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Initialize resource
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('th_service_centers', 'service_center_id');
    }

  
}
