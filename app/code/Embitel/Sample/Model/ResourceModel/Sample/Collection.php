<?php
namespace Embitel\Sample\Model\ResourceModel\Sample;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * @varstring
     *@codingStandardignoreStart
     */
    protected $_idFieldName = 'sample_id';
    /**
     * Collection initialisation
     */
    protected function _construct()
    {
        //codingStandardignoreEnd
        $this->_init(
            Model:"\Embitel\Sample\Model\Sample"::class,
           ResourceModel:"\Embitel\Sample\Model\ResourceModel\Sample"::class,
        );
    }
}