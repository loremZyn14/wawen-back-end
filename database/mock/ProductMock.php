<?php

namespace Mock;

class ProductMock
{
    public static function products(): array
    {
        return array(
            array(
                'category_id' => 4,
                'product_name' => 'Potato Chips',
                'price' => 20.00,
                'unit' => 'pcs',
                'description' => 'Made in China'
            ), // 1
            array(
                'category_id' => 4,
                'product_name' => 'Mang Juan',
                'price' => 40.00,
                'unit' => 'pcs',
                'description' => 'Made with Philippines'
            ),// 2
            array(
                'category_id' => 1,
                'product_name' => 'Hopia',
                'price' => 50.00,
                'unit' => 'pack',
                'description' => 'Made with Heart'
            ),// 3
            array(
                'category_id' => 1,
                'product_name' => 'Wafellow',
                'price' => 13.00,
                'unit' => 'pcs',
                'description' => 'Made with Heart'
            ),// 4
            array(
                'category_id' => 1,
                'product_name' => 'Fudge Bar',
                'price' => 7.00,
                'unit' => 'pcs',
                'description' => 'Made with Heart'
            ),// 5
            array(
                'category_id' => 1,
                'product_name' => 'Cheese Cake',
                'price' => 7.00,
                'unit' => 'pcs',
                'description' => 'Made with Heart'
            ),// 6
            array(
                'category_id' => 2,
                'product_name' => 'Pancit Canton',
                'price' => 13.00,
                'unit' => 'pcs',
                'description' => 'Made with Heart'
            ),// 7
            array(
                'category_id' => 2,
                'product_name' => 'Lucky Me',
                'price' => 10.00,
                'unit' => 'pcs',
                'description' => 'Made with Heart'
            ),// 8
            array(
                'category_id' => 1,
                'product_name' => 'Calcheese',
                'price' => 13.00,
                'unit' => 'pcs',
                'description' => 'Made with Heart'
            ),// 9
            array(
                'category_id' => 2,
                'product_name' => 'Bulad',
                'price' => 50.00,
                'unit' => 'kilo',
                'description' => 'Made with Heart'
            ),// 10
            array(
                'category_id' => 3,
                'product_name' => 'Rebisco Cracker',
                'price' => 72.00,
                'unit' => 'pack',
                'description' => 'Made with Heart'
            ),// 11
        );
    }
}
