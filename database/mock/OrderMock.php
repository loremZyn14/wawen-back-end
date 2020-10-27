<?php

namespace Mock;

class OrderMock
{
    public static function orders(): array
    {
        return array(
            array(
                'account_id' => 2,
                'status'=>'confirmed',
                'label' => 'retail',
                'confirmed_delivery_date' => '2020-10-27',
                'confirmed_delivery_time' => '03:22:18',
                'choosen_delivery_date' => '2020-10-01',
                'choosen_delivery_time' => '1 PM - 5PM',
                'payment' => 'GCash',
                'active_contact' => '09466640372',
                'receiver_name' => 'Yasu aimo',
                'delivery_address' => 'Alang-Alang Mandaue City',
                'total_amount' => 3660,
                'delivery_fee' => 0,
                'overall_payment' => 3660,
                'products' => array(
                                array('id'=> 1, 'sub_total'=>500, 'sub_quantity'=>5 ),
                                array('id'=> 2, 'sub_total'=>360, 'sub_quantity'=>3 ),
                                array('id'=> 3, 'sub_total'=>2800, 'sub_quantity'=>8),
                            ),
            ),
            array(
                'account_id' => 2,
                'status'=>'confirmed',
                'label' => 'retail',
                'confirmed_delivery_date' => '2020-10-27',
                'confirmed_delivery_time' => '03:22:19',
                'choosen_delivery_date' => '2020-10-01',
                'choosen_delivery_time' => '8 AM - 12 NN',
                'payment' => 'PayMaya',
                'active_contact' => '09291632759',
                'receiver_name' => 'Yasu Aimo',
                'delivery_address' => 'Bakilid Mandaue City',
                'total_amount' => 1400,
                'delivery_fee' => 100,
                'overall_payment' => 1500,
                'products' => array(
                                array('id'=> 1, 'sub_total'=>500, 'sub_quantity'=>5 ),
                                array('id'=> 5, 'sub_total'=>900, 'sub_quantity'=>3 ),
                            ),
            ),
            array(
                'account_id' => 4,
                'status'=>'confirmed',
                'label' => 'retail',
                'confirmed_delivery_date' => '2020-10-27',
                'confirmed_delivery_time' => '03:22:19',
                'choosen_delivery_date' => '2020-10-01',
                'choosen_delivery_time' => '1 PM - 5PM',
                'payment' => 'PayMaya',
                'active_contact' => '09291632759',
                'receiver_name' => 'Lee',
                'delivery_address' => 'Banilad Mandaue City',
                'total_amount' => 5150,
                'delivery_fee' => 100,
                'overall_payment' => 5250,
                'products' => array(
                                array('id'=> 3, 'sub_total'=>1750, 'sub_quantity'=>5 ),
                                array('id'=> 4, 'sub_total'=>1500, 'sub_quantity'=>6 ),
                                array('id'=> 2, 'sub_total'=>1200, 'sub_quantity'=>10 ),
                                array('id'=> 1, 'sub_total'=>700, 'sub_quantity'=>7 ),
                            ),
            ),
            array(
                'account_id' => 5,
                'status'=>'confirmed',
                'label' => 'retail',
                'confirmed_delivery_date' => '2020-10-29',
                'confirmed_delivery_time' => '05:30:18',
                'choosen_delivery_date' => '2020-10-03',
                'choosen_delivery_time' => '1 PM - 5PM',
                'payment' => 'PayMaya',
                'active_contact' => '09291632759',
                'receiver_name' => 'Ji Chang',
                'delivery_address' => 'Basak Mandaue City',
                'total_amount' => 3320,
                'delivery_fee' => 60,
                'overall_payment' => 3380,
                'products' => array(
                                array('id'=> 1, 'sub_total'=>500, 'sub_quantity'=>5 ),
                                array('id'=> 2, 'sub_total'=>720, 'sub_quantity'=>6 ),
                                array('id'=> 3, 'sub_total'=>2100, 'sub_quantity'=>6 ),
                            ),
            ),
            array(
                'account_id' => 6,
                'status'=>'confirmed',
                'label' => 'retail',
                'confirmed_delivery_date' => '2020-11-05',
                'confirmed_delivery_time' => '02:22:18',
                'choosen_delivery_date' => '2020-10-05',
                'choosen_delivery_time' => '1 PM - 5PM',
                'payment' => 'PayMaya',
                'active_contact' => '09291632759',
                'receiver_name' => 'Kim Soo',
                'delivery_address' => 'Basak Mandaue City',
                'total_amount' => 1500,
                'delivery_fee' => 100,
                'overall_payment' => 1600,
                'products' => array(
                                array('id'=> 5, 'sub_total'=>1500, 'sub_quantity'=>5 ),
                            ),
            ),
            array(
                'account_id' => 7,
                'status'=>'confirmed',
                'label' => 'retail',
                'confirmed_delivery_date' => '2020-11-05',
                'confirmed_delivery_time' => '04:22:18',
                'choosen_delivery_date' => '2020-10-06',
                'choosen_delivery_time' => '8 AM - 12 NN',
                'payment' => 'PayMaya',
                'active_contact' => '09291632759',
                'receiver_name' => 'Hyun Bin',
                'delivery_address' => 'Centro Mandaue City',
                'total_amount' => 1500,
                'delivery_fee' => 0,
                'overall_payment' => 1500,
                'products' => array(
                                array('id'=> 5, 'sub_total'=>1500, 'sub_quantity'=>5 ),

                            ),
            ),
            array(
                'account_id' => 8,
                'status'=>'confirmed',
                'label' => 'retail',
                'confirmed_delivery_date' => '2020-11-06',
                'confirmed_delivery_time' => '09:10:18',
                'choosen_delivery_date' => '2020-10-06',
                'choosen_delivery_time' => '1 PM - 5PM',
                'payment' => 'PayMaya',
                'active_contact' => '09291632759',
                'receiver_name' => 'Song Jong',
                'delivery_address' => 'Mantuyong Mandaue City',
                'total_amount' => 3600,
                'delivery_fee' => 0,
                'overall_payment' => 3600,
                'products' => array(
                                array('id'=> 5, 'sub_total'=>1500, 'sub_quantity'=>5 ),
                                array('id'=> 3, 'sub_total'=>2100, 'sub_quantity'=>6 ),

                            ),
            ),
            array(
                'account_id' => 9,
                'status'=>'confirmed',
                'label' => 'retail',
                'confirmed_delivery_date' => '2020-11-10',
                'confirmed_delivery_time' => '09:10:19',
                'choosen_delivery_date' => '2020-10-07',
                'choosen_delivery_time' => '8 AM - 12 NN',
                'payment' => 'PayMaya',
                'active_contact' => '09291632759',
                'receiver_name' => 'Lee jong',
                'delivery_address' => 'Centro Mandaue City',
                'total_amount' => 3820,
                'delivery_fee' => 0,
                'overall_payment' => 3820,
                'products' => array(
                                array('id'=> 5, 'sub_total'=>600, 'sub_quantity'=>2 ),
                                array('id'=> 4, 'sub_total'=>2500, 'sub_quantity'=>10 ),
                                array('id'=> 2, 'sub_total'=>720, 'sub_quantity'=>6 ),
                            ),
            ),
            array(
                'account_id' => 10,
                'status'=>'confirmed',
                'label' => 'retail',
                'confirmed_delivery_date' => '2020-11-10',
                'confirmed_delivery_time' => '07:22:18',
                'choosen_delivery_date' => '2020-10-08',
                'choosen_delivery_time' => '8 AM - 12 NN',
                'payment' => 'PayMaya',
                'active_contact' => '09291632759',
                'receiver_name' => 'Park Shen',
                'delivery_address' => 'Basak Mandaue City',
                'total_amount' => 350,
                'delivery_fee' => 0,
                'overall_payment' => 350,
                'products' => array(
                                array('id'=> 3, 'sub_total'=>350, 'sub_quantity'=>1 ),
                            ),
            ),
            array(
                'account_id' => 11,
                'status'=>'confirmed',
                'label' => 'retail',
                'confirmed_delivery_date' => '2020-11-12',
                'confirmed_delivery_time' => '08:12:18',
                'choosen_delivery_date' => '2020-10-10',
                'choosen_delivery_time' => '1 PM - 5PM',
                'payment' => 'PayMaya',
                'active_contact' => '09291632759',
                'receiver_name' => 'Jhun Ji',
                'delivery_address' => 'Cambaro Mandaue City',
                'total_amount' => 5650,
                'delivery_fee' => 200,
                'overall_payment' => 5850,
                'products' => array(
                                array('id'=> 4, 'sub_total'=>1750, 'sub_quantity'=>7 ),
                                array('id'=> 2, 'sub_total'=>1200, 'sub_quantity'=>10 ),
                                array('id'=> 5, 'sub_total'=>2700, 'sub_quantity'=>9 ),

                            ),
            ),
            array(
                'account_id' => 6,
                'status'=>'confirmed',
                'label' => 'retail',
                'confirmed_delivery_date' => '2020-11-13',
                'confirmed_delivery_time' => '07:42:18',
                'choosen_delivery_date' => '2020-10-10',
                'choosen_delivery_time' => '8 AM - 12 NN',
                'payment' => 'PayMaya',
                'active_contact' => '09291632759',
                'receiver_name' => 'Kim Soo',
                'delivery_address' => 'Looc Mandaue City',
                'total_amount' => 3000,
                'delivery_fee' => 0,
                'overall_payment' => 3000,
                'products' => array(
                                array('id'=> 5, 'sub_total'=>3000, 'sub_quantity'=>10 ),
                            ),
            ),
            array(
                'account_id' => 7,
                'status'=>'confirmed',
                'label' => 'retail',
                'confirmed_delivery_date' => '2020-11-15',
                'confirmed_delivery_time' => '07:42:20',
                'choosen_delivery_date' => '2020-10-11',
                'choosen_delivery_time' => '8 AM - 12 NN',
                'payment' => 'PayMaya',
                'active_contact' => '09291632759',
                'receiver_name' => 'Bin',
                'delivery_address' => 'Tabok Mandaue City',
                'total_amount' => 918,
                'delivery_fee' => 0,
                'overall_payment' => 918,
                'products' => array(
                                array('id'=> 5, 'sub_total'=>3000, 'sub_quantity'=>10 ),
                            ),
            ),
            array(
                'account_id' => 9,
                'status'=>'confirmed',
                'label' => 'retail',
                'confirmed_delivery_date' => '2020-11-16',
                'confirmed_delivery_time' => '08:10:18',
                'choosen_delivery_date' => '2020-10-11',
                'choosen_delivery_time' => '8 AM - 12 NN',
                'payment' => 'PayMaya',
                'active_contact' => '09291632759',
                'receiver_name' => 'Lee J',
                'delivery_address' => 'Banilad Mandaue City',
                'total_amount' => 450,
                'delivery_fee' => 0,
                'overall_payment' => 450,
                'products' => array(
                                array('id'=> 3, 'sub_total'=>350, 'sub_quantity'=>1 ),
                                array('id'=> 5, 'sub_total'=>100, 'sub_quantity'=>1 ),

                            ),
            ),
            array(
                'account_id' => 11,
                'status'=>'confirmed',
                'label' => 'retail',
                'confirmed_delivery_date' => '2020-11-18',
                'confirmed_delivery_time' => '07:02:18',
                'choosen_delivery_date' => '2020-10-11',
                'choosen_delivery_time' => '8 AM - 12 NN',
                'payment' => 'PayMaya',
                'active_contact' => '09291632759',
                'receiver_name' => 'Jun ji',
                'delivery_address' => 'Casili Mandaue City',
                'total_amount' => 500,
                'delivery_fee' => 0,
                'overall_payment' => 500,
                'products' => array(
                                array('id'=> 4, 'sub_total'=>500, 'sub_quantity'=>2 ),

                            ),
            ),
            array(
                'account_id' => 4,
                'status'=>'confirmed',
                'status'=>'confirmed',
                'label' => 'retail',
                'confirmed_delivery_date' => '2020-11-18',
                'confirmed_delivery_time' => '10:22:18',
                'choosen_delivery_date' => '2020-10-12',
                'choosen_delivery_time' => '8 AM - 12 NN',
                'payment' => 'PayMaya',
                'active_contact' => '09291632759',
                'receiver_name' => 'Lee Min',
                'delivery_address' => 'Basak Mandaue City',
                'total_amount' => 2690,
                'delivery_fee' => 100,
                'overall_payment' => 2700,
                'products' => array(
                                array('id'=> 3, 'sub_total'=>1750, 'sub_quantity'=>5 ),
                                array('id'=> 1, 'sub_total'=>100, 'sub_quantity'=>1 ),
                                array('id'=> 2, 'sub_total'=>840, 'sub_quantity'=>7),
                            ),
            ),
            array(
                'account_id' => 8,
                'status'=>'confirmed',
                'label' => 'retail',
                'confirmed_delivery_date' => '2020-11-21',
                'confirmed_delivery_time' => '07:22:18',
                'choosen_delivery_date' => '2020-10-13',
                'choosen_delivery_time' => '1 PM - 5PM',
                'payment' => 'PayMaya',
                'active_contact' => '09291632759',
                'receiver_name' => 'Song Jong',
                'delivery_address' => 'Centro Mandaue City',
                'total_amount' => 6070,
                'delivery_fee' => 0,
                'overall_payment' => 6070,
                'products' => array(
                                array('id'=> 3, 'sub_total'=>1750, 'sub_quantity'=>5 ),
                                array('id'=> 4, 'sub_total'=>720, 'sub_quantity'=>6 ),
                                array('id'=> 5, 'sub_total'=>3600, 'sub_quantity'=>12 ),

                            ),
            ),
            array(
                'account_id' => 9,
                'status'=>'confirmed',
                'label' => 'retail',
                'confirmed_delivery_date' => '2020-11-21',
                'confirmed_delivery_time' => '09:22:18',
                'choosen_delivery_date' => '2020-10-15',
                'choosen_delivery_time' => '8 AM - 12 NN',
                'payment' => 'PayMaya',
                'active_contact' => '09291632759',
                'receiver_name' => 'Lee Jong',
                'delivery_address' => 'Banilad Mandaue City',
                'total_amount' => 1500,
                'delivery_fee' => 100,
                'overall_payment' => 1600,
                'products' => array(
                                array('id'=> 5, 'sub_total'=>1500, 'sub_quantity'=>5 ),
                            ),
            ),
            array(
                'account_id' => 11,
                'status'=>'confirmed',
                'label' => 'retail',
                'confirmed_delivery_date' => '2020-11-21',
                'confirmed_delivery_time' => '07:22:18',
                'choosen_delivery_date' => '2020-10-15',
                'choosen_delivery_time' => '8 AM - 12 NN',
                'payment' => 'PayMaya',
                'active_contact' => '09291632759',
                'receiver_name' => 'Jung ji',
                'delivery_address' => 'Bakilid Mandaue City',
                'total_amount' => 6020,
                'delivery_fee' => 0,
                'overall_payment' => 6020,
                'products' => array(
                                array('id'=> 1, 'sub_total'=>500, 'sub_quantity'=>5 ),
                                array('id'=> 2, 'sub_total'=>720, 'sub_quantity'=>6 ),
                                array('id'=> 4, 'sub_total'=>3000, 'sub_quantity'=>12 ),
                                array('id'=> 5, 'sub_total'=>1800, 'sub_quantity'=>6 ),
                            ),
            ),
            array(
                'account_id' => 4,
                'status'=>'confirmed',
                'label' => 'retail',
                'confirmed_delivery_date' => '2020-11-21',
                'confirmed_delivery_time' => '09:22:18',
                'choosen_delivery_date' => '2020-10-15',
                'choosen_delivery_time' => '1 PM - 5PM',
                'payment' => 'PayMaya',
                'active_contact' => '09291632759',
                'receiver_name' => 'Lee Hoo',
                'delivery_address' => 'Tipolo Mandaue City',
                'total_amount' => 350,
                'delivery_fee' => 0,
                'overall_payment' => 350,
                'products' => array(
                                array('id'=> 3, 'sub_total'=>350, 'sub_quantity'=>1 ),
                            ),
            ),
            array(
                'account_id' => 9,
                'status'=>'confirmed',
                'label' => 'retail',
                'confirmed_delivery_date' => '2020-11-23',
                'confirmed_delivery_time' => '10:22:18',
                'choosen_delivery_date' => '2020-10-15',
                'choosen_delivery_time' => '8 AM - 12 NN',
                'payment' => 'PayMaya',
                'active_contact' => '09291632759',
                'receiver_name' => 'Lee Jong',
                'delivery_address' => 'Tawason Mandaue City',
                'total_amount' => 3820,
                'delivery_fee' => 0,
                'overall_payment' => 3820,
                'products' => array(
                                array('id'=> 5, 'sub_total'=>600, 'sub_quantity'=>2 ),
                                array('id'=> 4, 'sub_total'=>2500, 'sub_quantity'=>10 ),
                                array('id'=> 2, 'sub_total'=>720, 'sub_quantity'=>6 ),
                            ),
            ),
            array(
                'account_id' => 10,
                'status'=>'confirmed',
                'label' => 'retail',
                'confirmed_delivery_date' => '2020-11-24',
                'confirmed_delivery_time' => '10:22:18',
                'choosen_delivery_date' => '2020-10-16',
                'choosen_delivery_time' => '1 PM - 5PM',
                'payment' => 'PayMaya',
                'active_contact' => '09291632759',
                'receiver_name' => 'park Shen',
                'delivery_address' => 'Banilad Mandaue City',
                'total_amount' => 3000,
                'delivery_fee' => 0,
                'overall_payment' => 3000,
                'products' => array(
                                array('id'=> 5, 'sub_total'=>3000, 'sub_quantity'=>10 ),
                            ),
            ),
            array(
                'account_id' => 11,
                'status'=>'confirmed',
                'label' => 'retail',
                'confirmed_delivery_date' => '2020-11-26',
                'confirmed_delivery_time' => '11:22:18',
                'choosen_delivery_date' => '2020-10-17',
                'choosen_delivery_time' => '8 AM - 12 NN',
                'payment' => 'PayMaya',
                'active_contact' => '09291632759',
                'receiver_name' => 'Jun ji',
                'delivery_address' => 'Cabancalan Mandaue City',
                'total_amount' => 3000,
                'delivery_fee' => 0,
                'overall_payment' => 3000,
                'products' => array(
                                array('id'=> 5, 'sub_total'=>3000, 'sub_quantity'=>10 ),
                            ),
            ),
            array(
                'account_id' => 5,
                'status'=>'confirmed',
                'label' => 'retail',
                'confirmed_delivery_date' => '2020-11-26',
                'confirmed_delivery_time' => '05:22:18',
                'choosen_delivery_date' => '2020-10-18',
                'choosen_delivery_time' => '8 AM - 12 NN',
                'payment' => 'PayMaya',
                'active_contact' => '09291632759',
                'receiver_name' => 'Ji Chang',
                'delivery_address' => 'Cabancalan Mandaue City',
                'total_amount' => 1220,
                'delivery_fee' => 0,
                'overall_payment' => 1220,
                'products' => array(
                                array('id'=> 1, 'sub_total'=>500, 'sub_quantity'=>5 ),
                                array('id'=> 2, 'sub_total'=>720, 'sub_quantity'=>6 ),
                            ),
            ),
            array(
                'account_id' => 8,
                'status'=>'confirmed',
                'label' => 'retail',
                'confirmed_delivery_date' => '2020-12-05',
                'confirmed_delivery_time' => '08:22:18',
                'choosen_delivery_date' => '2020-10-18',
                'choosen_delivery_time' => '8 AM - 12 NN',
                'payment' => 'PayMaya',
                'active_contact' => '09291632759',
                'receiver_name' => 'Soong Joon',
                'delivery_address' => 'Centro Mandaue City',
                'total_amount' => 4300,
                'delivery_fee' => 0,
                'overall_payment' => 4300,
                'products' => array(
                                array('id'=> 3, 'sub_total'=>2800, 'sub_quantity'=>8 ),
                                array('id'=> 4, 'sub_total'=>1500, 'sub_quantity'=>6 ),
                            ),
            ),
            array(
                'account_id' => 6,
                'status'=>'confirmed',
                'label' => 'retail',
                'confirmed_delivery_date' => '2020-12-06',
                'confirmed_delivery_time' => '10:22:18',
                'choosen_delivery_date' => '2020-10-18',
                'choosen_delivery_time' => '8 AM - 12 NN',
                'payment' => 'PayMaya',
                'active_contact' => '09291632759',
                'receiver_name' => 'Kimsoo',
                'delivery_address' => 'Looc Mandaue City',
                'total_amount' => 1500,
                'delivery_fee' => 0,
                'overall_payment' => 1500,
                'products' => array(
                                array('id'=> 5, 'sub_total'=>1500, 'sub_quantity'=>5 ),

                            ),
            ),
            array(
                'account_id' => 10,
                'status'=>'confirmed',
                'label' => 'retail',
                'confirmed_delivery_date' => '2020-12-10',
                'confirmed_delivery_time' => '09:22:18',
                'choosen_delivery_date' => '2020-10-19',
                'choosen_delivery_time' => '1 PM - 5PM',
                'payment' => 'PayMaya',
                'active_contact' => '09291632759',
                'receiver_name' => 'park Shin',
                'delivery_address' => 'Canduman Mandaue City',
                'total_amount' => 5000,
                'delivery_fee' => 0,
                'overall_payment' => 5000,
                'products' => array(
                                array('id'=> 3, 'sub_total'=>3500, 'sub_quantity'=>10 ),
                                array('id'=> 4, 'sub_total'=>1500, 'sub_quantity'=>6 ),
                            ),
            ),
            array(
                'account_id' => 6,
                'status'=>'confirmed',
                'label' => 'retail',
                'confirmed_delivery_date' => '2020-12-20',
                'confirmed_delivery_time' => '10:22:18',
                'choosen_delivery_date' => '2020-10-20',
                'choosen_delivery_time' => '8 AM - 12 NN',
                'payment' => 'PayMaya',
                'active_contact' => '09291632759',
                'receiver_name' => 'KIm soo',
                'delivery_address' => 'Centro Mandaue City',
                'total_amount' => 1400,
                'delivery_fee' => 0,
                'overall_payment' => 1400,
                'products' => array(
                                array('id'=> 1, 'sub_total'=>500, 'sub_quantity'=>5 ),
                                array('id'=> 5, 'sub_total'=>900, 'sub_quantity'=>3 ),
                            ),
            ),
            array(
                'account_id' => 9,
                'status'=>'confirmed',
                'label' => 'retail',
                'confirmed_delivery_date' => '2020-12-23',
                'confirmed_delivery_time' => '10:22:18',
                'choosen_delivery_date' => '2020-10-20',
                'choosen_delivery_time' => '1 PM - 5PM',
                'payment' => 'PayMaya',
                'active_contact' => '09291632759',
                'receiver_name' => 'lee jong',
                'delivery_address' => 'Cabancalan Mandaue City',
                'total_amount' => 1000,
                'delivery_fee' => 0,
                'overall_payment' => 1000,
                'products' => array(
                                array('id'=> 3, 'sub_total'=>350, 'sub_quantity'=>1 ),
                                array('id'=> 5, 'sub_total'=>300, 'sub_quantity'=>1 ),
                                array('id'=> 1, 'sub_total'=>100, 'sub_quantity'=>1 ),
                                array('id'=> 4, 'sub_total'=>250, 'sub_quantity'=>1 ),

                            ),
            ),
            array(
                'account_id' => 9,
                'status'=>'confirmed',
                'label' => 'retail',
                'confirmed_delivery_date' => '2020-12-24',
                'confirmed_delivery_time' => '09:22:18',
                'choosen_delivery_date' => '2020-10-21',
                'choosen_delivery_time' => '8 AM - 12 NN',
                'payment' => 'PayMaya',
                'active_contact' => '09291632759',
                'receiver_name' => 'Lee jong',
                'delivery_address' => 'Banilad Mandaue City',
                'total_amount' => 2260,
                'delivery_fee' => 0,
                'overall_payment' => 2260,
                'products' => array(
                                array('id'=> 1, 'sub_total'=>500, 'sub_quantity'=>5 ),
                                array('id'=> 2, 'sub_total'=>360, 'sub_quantity'=>3 ),
                                array('id'=> 3, 'sub_total'=>1400, 'sub_quantity'=>4),
                            ),
            ),
            array(
                'account_id' => 7,
                'status'=>'confirmed',
                'label' => 'retail',
                'confirmed_delivery_date' => '2020-12-25',
                'confirmed_delivery_time' => '09:22:18',
                'choosen_delivery_date' => '2020-10-21',
                'choosen_delivery_time' => '8 AM - 12 NN',
                'payment' => 'PayMaya',
                'active_contact' => '09291632759',
                'receiver_name' => 'Hyun Bin',
                'delivery_address' => 'Casuntingan Mandaue City',
                'total_amount' => 1250,
                'delivery_fee' => 0,
                'overall_payment' => 1250,
                'products' => array(
                                array('id'=> 4, 'sub_total'=>1250, 'sub_quantity'=>5 ),

                            ),
            ),
            array(
                'account_id' => 8,
                'status'=>'confirmed',
                'label' => 'retail',
                'confirmed_delivery_date' => '2020-12-25',
                'confirmed_delivery_time' => '10:22:18',
                'choosen_delivery_date' => '2020-10-21',
                'choosen_delivery_time' => '1 PM - 5PM',
                'payment' => 'PayMaya',
                'active_contact' => '09291632759',
                'receiver_name' => 'Song Jon',
                'delivery_address' => 'Pitos Talamban Mandaue City',
                'total_amount' => 1500,
                'delivery_fee' => 100,
                'overall_payment' => 1600,
                'products' => array(
                                array('id'=> 5, 'sub_total'=>1500, 'sub_quantity'=>5 ),
                            ),
            ),
            array(
                'account_id' => 4,
                'status'=>'confirmed',
                'label' => 'retail',
                'confirmed_delivery_date' => '2020-12-25',
                'confirmed_delivery_time' => '09:22:18',
                'choosen_delivery_date' => '2020-10-21',
                'choosen_delivery_time' => '8 AM - 12 NN',
                'payment' => 'PayMaya',
                'active_contact' => '09291632759',
                'receiver_name' => 'lee min',
                'delivery_address' => 'Cabancalan Mandaue City',
                'total_amount' => 3000,
                'delivery_fee' => 0,
                'overall_payment' => 3000,
                'products' => array(
                                array('id'=> 5, 'sub_total'=>3000, 'sub_quantity'=>10 ),
                            ),
            ),
        );
    }
}
