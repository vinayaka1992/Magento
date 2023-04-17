<?php

namespace Form\Empmodule\Model\Resolver;

use Magento\Framework\GraphQL\Config\Element\Field;
use Magento\Framework\GraphQL\Schema\Type\ResolveInfo;
use Magento\Framework\GraphQl\Query\ResolverInterface;

class Store implements ResolverInterface
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
        $stores = [
            [
                "firstname"=>"Vinayaka",
                "lastname"=>"BS",
                "email"=>"emb-vinashi@embitel.com",
                "telephone"=>"7892103211",
                "city"=>"Bengaluru",
                "state"=>"Karnataka",
                "country"=>"India",
            ]
            ];
             return [
               'total_count'=> count($stores),
               'items'=> $stores
            ];
       
       
       
    }
}
