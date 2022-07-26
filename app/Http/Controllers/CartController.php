<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{

    // Public Function addProduct()
    // {

    //     $product_id = $request -> input('product_id');
    //     $product_quantity = $request -> input('product_quantity');

    //     if (Auth::check())
    //     {
    //         $prod_check = Product::where('id', $product_id)->exists();

    //         if($prod_check)
    //         {
    //             if(Cart::where('product_id',$product_id)->where('user_id',Auth::id())->exists())
    //             {
    //                 return response()->json(['status'=>$prod_check ->name."Already Added to cart"]);
    //             }
    //             else
    //             {
    //             $cartitems = new Cart();
    //             $cartitems -> product_id = $product_id;
    //             $cartitems -> user_id = Auth::id();
    //             $cartitems -> product_quantity = $product_quantity;
    //             $cartitems -> save();
    //             return response()->json(['status'=>$prod_check ->name."Added to cart"]);
    //             }
    //         }
    //     }
    //     else
    //     {
    //         return response()->json(['status'=> "Login To Your Account"]);
    //     }
    // }

    public function viewcart()
    {
        $userCartItems = Cart::userCartItems();
        // echo"<pre>"; print_r($userCartItems); die;
        return view('cart', compact('userCartItems'));
    }

    // public function store(Request $request)
    // {
    //     $product = Product::findorFail($request->input(key:'product_id'));
    //     Cart::add(
    //         $product->id,
    //         $product->name,
    //         $request->input(key:'quantity'),
    //         $product->regular_price
    //     );
    //     return redirect()->route(route:'/');
    // }

    // public function addToCart(Product $product)
    // {
    //     $cart = session()->get('cart');

    //     if (!$cart) {
    //         $cart = [
    //             $product->id => [
    //                 'name' => $product->name,
    //                 'quantity' => 1,
    //                 'regular_price' => $product->regular_price,
    //             ]
    //         ];

    //         session()->put('cart', $cart);
    //     }

    //     if (isset($cart[$product->id])) {
    //         $cart[$product->id]['quantity']++;

    //         session()->put('cart', $cart);
    //         return redirect()->route('cart')->with('sucess', "Added To cart");
    //     }

    //     $cart[$product->id] = [
    //         'name' => $product->name,
    //         'quantity' => 1,
    //         'regular_price' => $product->regular_price,
    //     ];
    //     session()->put('cart', $cart);
    //     return redirect()->route('cart')->with('sucess', "Added To cart");
    // }

    public function addToCart(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            // echo"<pre>"; print_r($data); die;


            //Generate session Id id not exists
            $session_id = Session::get('session_id');
            if (empty($session_id)) {
                $session_id = Session::getId();
                Session::put('session_id', $session_id);
            }

            // Cart::insert(['session_id'=>$session_id,'product_id'=> $data['product_id'],'product_quantity'=>$data['product_quantity']]);

            //check Product if alreday exits in user cart

            if (auth::check()) {
                ///user is logged in
                $countProducts = Cart::where(['product_id' => $data['product_id'], 'user_id' => Auth::user()->id])->count();
            } else {
                //guest (user not logged in)
                $countProducts = Cart::where(['product_id' => $data['product_id'], 'session_id' => session::get('session_id')])->count();
            }
            if ($countProducts > 0) {
                $message = "Product alreday available";
                Session::flash('error_message', $message);
                return redirect()->back();
            }

            $cart = new Cart;
            $cart->session_id = $session_id;

            $cart->user_id = Auth::user() != null;
            $cart->product_id = $data['product_id'];
            $cart->product_quantity = $data['product_quantity'];
            $cart->save();

            $message = "Product has been added in Cart";
            Session::flash('success', $message);
            return redirect()->back();
        }
    }
}
