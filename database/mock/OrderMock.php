<?php

namespace Mock;

class OrderMock
{
    public static function orders(): array
    {
        return array(
            array(
                'account_id' => 1,
                'label' => 'retail',
                'choosen_delivery_date' => '2020-10-16',
                'choosen_delivery_time' => '1 PM - 5PM',
                'payment' => 'GCash',
                'active_contact' => '09466640372',
                'reciever_name' => 'lorem Zynru',
                'delivery_address' => 'Nasipit Talamban Cebu City',
                'total_amount' => 800,
                'delivery_fee' => 0,
                'overall_payment' => 800,
                'products' => array(
                                array('id'=> 1, 'sub_total'=>100, 'sub_quantity'=>5 ),
                                array('id'=> 2, 'sub_total'=>300, 'sub_quantity'=>3 ),
                                array('id'=> 3, 'sub_total'=>400, 'sub_quantity'=>8),
                            ),
            ),
            array(
                'account_id' => 2,
                'label' => 'retail',
                'choosen_delivery_date' => '2020-10-17',
                'choosen_delivery_time' => '1 PM - 5PM',
                'payment' => 'PayMaya',
                'active_contact' => '09291632759',
                'reciever_name' => 'Yasu Aimo',
                'delivery_address' => 'Nasipit Talamban Cebu City',
                'total_amount' => 400,
                'delivery_fee' => 100,
                'overall_payment' => 500,
                'products' => array(
                                array('id'=> 1, 'sub_total'=>100, 'sub_quantity'=>5 ),
                                array('id'=> 2, 'sub_total'=>300, 'sub_quantity'=>3 ),
                            ),
            ),
            array(
                'account_id' => 3,
                'label' => 'retail',
                'choosen_delivery_date' => '2020-10-18',
                'choosen_delivery_time' => '1 PM - 5PM',
                'payment' => 'PayMaya',
                'active_contact' => '09291632759',
                'reciever_name' => 'Dolor Yakusama',
                'delivery_address' => 'Pitos Talamban Cebu City',
                'total_amount' => 700,
                'delivery_fee' => 100,
                'overall_payment' => 800,
                'products' => array(
                                array('id'=> 1, 'sub_total'=>100, 'sub_quantity'=>5 ),
                                array('id'=> 2, 'sub_total'=>600, 'sub_quantity'=>6 ),
                            ),
            ),
        );
    }
}
