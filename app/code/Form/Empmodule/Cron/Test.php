<?php

namespace Form\Empmodule\Cron;

class Test
{
    public function execute ()
    {
        $current_date=date("Ymd_his");
        $file_name='customer_'.$current_date.'.csv';
        //$header_data=array('firstname','lastname','email','telephone');
        //$header_info=array_combine($header_info, $header_data);

        // $data=[];

        // $data[]=$header_data;

        $data=[
            'firstname' => 'Vinayaka',
            'lastname' => 'BS',
            'email' => 'emb-vinashi@embitel.com',
            'telephone' => '7892103211'
        ];

        file_put_contents('/var/www/html/magento24/magento24/var/export/'.$file_name,$data);
        // $fp=fopen('/var/www/html/magento24/magento24/var/export/'.$name_of_file, 'w');

        // foreach($data as $fields){
        //     fputcsv($fp, $fields);
        // }
    }
}