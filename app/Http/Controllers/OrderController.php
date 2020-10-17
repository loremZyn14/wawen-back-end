<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Order;
use App\User;
use App\Repository\OrderRepository;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $orderRepository;

    public function __construct(OrderRepository $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }
    public function index()
    {
        return $this->orderRepository->getAllOrder();
    }

    public function customer(User $account)
    {
        return $this->orderRepository->getCustomerOrders($account);
    }

    public function store(OrderRequest $request)
    {
        $order =  Order::create($request->validated());
        $this->orderRepository->attachProducts($order, $request->products);
    }
    public function update(OrderRequest $request, Order $order)
    {
        $order->update($request->validated());
    }

    public function updateStatus(Request $request, Order $order)
    {
        $request->validate(['status' => 'required|string']);
        $order->update([
            'status' => $request->status
        ]);
    }

    public function destroy(Order $order)
    {
        $order->delete();
    }
}
