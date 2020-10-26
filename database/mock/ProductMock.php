<?php

namespace Mock;

class ProductMock
{
    public static function products(): array
    {
        return array(
            array(
                'category_id' => 1,
                'product_name' => 'Ube Halaya Jar 100 grams',
                'price' => 100.00,
                'unit' => 'pcs',
                'description' => 'Made in China'
            ), // 1
            array(
                'category_id' => 1,
                'product_name' => 'Ube Halaya Jar in Lunch Pack Medium Size',
                'price' => 120.00,
                'unit' => 'pcs',
                'description' => 'Made with Philippines'
            ),// 2
            array(
                'category_id' => 1,
                'product_name' => 'Ube Halaya Birthday Cake',
                'price' => 350.00,
                'unit' => 'pack',
                'description' => 'Made with Heart'
            ),// 3
            array(
                'category_id' => 2,
                'product_name' => 'Ubechi 8pcs',
                'price' => 250.00,
                'unit' => 'pcs',
                'description' => 'Made with Heart'
            ),// 4
            array(
                'category_id' => 2,
                'product_name' => 'Ubechi 1 doz',
                'price' => 300.00,
                'unit' => 'pcs',
                'description' => 'Made with Heart'
            ),// 5
        );
    }
}
