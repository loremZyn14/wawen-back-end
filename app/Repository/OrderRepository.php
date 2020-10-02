<?php

namespace App\Repository;

use App\Order;

class OrderRepository {

    public function getAllOrder()
    {
        return Order::all();
    }
}
