<?php

namespace Mock;

class ProductMock
{
    public static function products(): array
    {
        return array(
            array(
                'category_id' => 1,
                'product_name' => 'Potato Chips',
                'price' => 20.00,
                'unit' => 'pcs',
                'description' => 'Made in China'
            ),
            array(
                'category_id' => 2,
                'product_name' => 'Mang Juan',
                'price' => 100.00,
                'unit' => 'pcs',
                'description' => 'Made with Philippines'
            ),
            array(
                'category_id' => 3,
                'product_name' => 'Hopia',
                'price' => 50.00,
                'unit' => 'pack',
                'description' => 'Made with Heart'
            ),
        );
    }
}
