<?php

namespace Form\Empmodule\Model\Resolver;

use Magento\Framework\GraphQL\Config\Element\Field;
use Magento\Framework\GraphQL\Query\ResolverInterface;
use Magento\Framework\GraphQL\Schema\Type\ResolveInfo;

class Test implements ResolverInterface
{
    /**
     * @inheritdoc
     */
    public function resolve (
        Field $field,
        $context,
        ResolveInfo $info,
        array $value = null,
        array $args = null
    )
    {
        return "test";
       
       
    }
}
