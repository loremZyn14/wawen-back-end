<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Http\Requests\CartRequest;
use App\Product;
use Illuminate\Http\Request;
use App\User;

class CartController extends Controller
{
    public function index(User $account)
    {
        return $account->cart->products;
    }

    public function store(CartRequest $request, User $account)
    {
        $cart = $account->cart;
        if (!$cart) {
            $cart = $account->cart()->create();
        }
        $this->attachProduct($cart, $request);
    }

    public function update(CartRequest $request, User $account)
    {
        $this->attachProduct($account->cart, $request);
    }

    public function destroy(User $account, Product $product)
    {
        $account->cart->products()->detach($product);
    }

    public function attachProduct($cart, $request)
    {
        $cart->products()->syncWithoutDetaching([$request->validated()['id'] => [
            'sub_quantity' => $request->validated()['sub_quantity'],
            'sub_total' => $request->validated()['sub_total']
        ]]);
    }
}
