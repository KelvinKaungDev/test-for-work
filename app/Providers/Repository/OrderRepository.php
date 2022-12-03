<?php

namespace App\Providers\Repository;

use App\Interface\OrderRepositoryInterface;
use App\Models\Order;

class OrderRepository implements OrderRepositoryInterface
{
    public static function getAllOrders()
    {
        return Order::all();
    }
}
