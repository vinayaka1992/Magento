<?php

namespace Form\Empmodule\Model;

use Magento\Framework\App\Action\Context;
use \Vendor\Module\Api\getPostService;
use Magento\Customer\Model\GroupFactory;

class PostService implements \Form\Empmodule\Api\PostInterface
{
    protected $_group;

        public function __construct(
        GroupFactory $group)
        {
            $this->_group = $group;
        }
 
/**
 * set Data
 *
 * @param string[] check
 * @return array
 *
 */

public function getCustomerGroup($check){
    try{
        $store = [
                'customer_group_code'=>$check['groupName'],
                'tax_class_id'=>3
        ];

        $group = $this->_group->create();
        $group->setData($store);
        $group->save();

        $data_info=[
            'group_Id'=>$check['groupId'],
            'group_Name'=>$check['groupName']         
    ];
    return $data_info;

}  
    catch(\Throwable $th)
    {
        $th->getMessage();
    }
}
}