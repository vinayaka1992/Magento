<?php
namespace Form\Empmodule\Model;

class Demoservice  implements \Form\Empmodule\Api\DemoInterface
{
    /**
     * Get name
     *
     * @return string
     */
    public function getProfile()
    {
        return [[  "firstname=Vinayaka",
        "lastname=BS",
        "email=emb-vinashi@embitel.com",
        "telephone=7892103211",
        
    ],

    [  "firstname=Arwin",
        "lastname=Fernandis",
        "email=emb-arwin@embitel.com",
        "telephone=123456789",
        
],
];  
    }
      
}

