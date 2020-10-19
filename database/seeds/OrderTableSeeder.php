<?php

use Illuminate\Database\Seeder;
use Mock\OrderMock;
use App\Order;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (OrderMock::orders() as $orderDetails) {
            $order = Order::create(collect($orderDetails)->except('products')->all());
            foreach (collect($orderDetails)->only('products')['products'] as $product) {
                $order->products()->attach([$product['id'] => [
                    'sub_quantity' => $product['sub_quantity'],
                    'sub_total' => $product['sub_total']
                ]]);
            }
        }
    }
}
