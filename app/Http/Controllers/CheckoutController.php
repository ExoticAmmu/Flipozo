<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        $userCartItems = Cart::where('user_id', Auth::id())->get();
        return view('checkout', compact('userCartItems'));
    }

    public function placeorder(Request $request)
    {
        $order = new Order();
        $order->user_id = Auth::id();
        $order->fname = $request->input('fname');
        $order->email = $request->input('email');
        $order->address = $request->input('address');
        $order->city = $request->input('city');
        $order->state = $request->input('state');
        $order->zip = $request->input('zip');
        $order->tracking_no = 'flipozo'.rand(1999,9999);
        $order->save();
        $order->id;

        $userCartItems = cart::where('user_id', Auth::id())->get();

        foreach ($userCartItems as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item->product_id,
                'quantity' => $item->product_quantity,
                'price' => $item->product->regular_price,
            ]);
        }

        if (Auth::user()->address == NULL) {
            $user = User::where('id', Auth::id())->first();

            $user->name = $request->input('fname');
            $user->address = $request->input('address');
            $user->city = $request->input('city');
            $user->state = $request->input('state');
            $user->zip = $request->input('zip');

            $user->update();
        }

        $userCartItems = cart::where('user_id', Auth::id())->get();
        Cart::destroy($userCartItems);
    }
    

}
