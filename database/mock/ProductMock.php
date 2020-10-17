<?php

namespace Mock;

class ProductMock
{
    public static function products(): array
    {
        return array(
            array(
                'category_id' => 1,
                'product_name' => 'product 1',
                'price' => 19.00,
                'unit' => 'pcs',
                'description' => 'test'
            ),
            array(
                'category_id' => 1,
                'product_name' => 'product 2',
                'price' => 19.00,
                'unit' => 'pcs',
                'description' => 'test'
            ),
        );
    }
}
