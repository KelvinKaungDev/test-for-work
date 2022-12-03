<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interface\OrderRepositoryInterface;
use App\Providers\Repository\OrderRepository;

class OrderController extends Controller
{
    // private OrderRepositoryInterface $orderRepository;

    public function __construct(OrderRepositoryInterface $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function index()
    {
        return OrderRepository::getAllOrders();
    }
}
