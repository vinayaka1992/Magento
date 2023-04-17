<?php

namespace Embitel\Sample\Model;

use Magento\Framework\Model\AbstractModel;

class Sample extends AbstractModel
{
    /**
     * initialise resource model
     * @codingStandardsignoreStart
     */
    
    protected function _construct()
    {
        // @codingStandardsignoreEnd
        $this->_init(ResourceModel:"Embitel\Sample\Model\ResourceModel\Sample"::class);
       
    }
}
