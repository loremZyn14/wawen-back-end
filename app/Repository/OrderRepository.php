<?php

namespace App\Repository;

use App\Order;
use App\User;

class OrderRepository
{

    public function getAllOrder()
    {
        return Order::all();
    }

    public function getCustomerOrders(User $user)
    {
        return $user->orders;
    }

    public function attachProducts(Order $order, array $products)
    {
        foreach ($products as $product) {
            $order->products()->attach([$product['id'] => [
                'sub_quantity' => $product['sub_quantity'],
                'sub_total' => $product['sub_total']
            ]]);
        }
    }

    public function confirmed()
    {
        return Order::with('products','products.category','user')->get()->filter(function($order){
            return $order->status == "confirmed";
        });
    }
}
