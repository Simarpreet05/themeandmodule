<?php
/**
 * Copyright © 2015 Magetech . All rights reserved.
 * 
 */
namespace Magetech\Solution\Block;

/**
 * Abstract product block context
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
use Magento\Framework\View\Element\Template;

class Services extends \Magento\Framework\View\Element\Template
{
    protected $servicesCollectionFactory;
  
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magetech\Solution\Model\ResourceModel\Services\CollectionFactory $servicesCollectionFactory,
        \Magento\Framework\ObjectManagerInterface $objectManager,
        array $data = []
     ) {
        parent::__construct($context, $data);
         $this->serviceCollectionFactory = $servicesCollectionFactory;
        $this->_objectManager = $objectManager;
      }
    public function getServices(){
        
        $collection = $this->serviceCollectionFactory->create();
        return $collection;
    }

}
