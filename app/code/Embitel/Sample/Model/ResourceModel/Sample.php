<?php

namespace Embitel\Sample\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\Context;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Sample extends AbstractDb
{
     /**
     * @var\Magento\Framework\Stdlib\DateTime\DateTime
     */
    
    protected $date;
    
    /**
     * Article constructor.
     * 
     * @paramContext $context
     */

    public function __construct(
        Context $context,
    ) {
        parent::_construct($context);
    }

    /**
     * Resource initialisation
     * @codingStandardignoreStart
     */

    protected function _construct()
    {
        //@codingStandardignoreEnd
        $this->_init('sample','sample_id');
    }

    
} 