<?php

namespace App\Repository;

use App\Order;
use App\User;

class OrderRepository {

    public function getAllOrder()
    {
        return Order::all();
    }

    public function getCustomerOrders(User $user)
    {
        return $user->orders;
    }
}
