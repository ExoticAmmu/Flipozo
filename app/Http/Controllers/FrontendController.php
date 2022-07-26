<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index()
    {
        $products = Product::get();
        return view ('welcome')->with(compact('products'));
    }

    // public function productview($item_slug)
    // {
    //     if(Product::where('slug', $item_slug)->exists())
    //     {
    //         $products - Product::where('slug', $item_slug)->first();
    //         return view('products', compact('product'));
    //     }
    //     else{
    //         return redirect('/')->with('status', "This Link is Broken");
    //     }
    // }

    public function productview(Request $request,$slug)
    {
        if(Product::where('slug', $slug)->exists())
        {
            $products = Product::where('slug', $slug)->first();
            return view('products', compact('products'));
        } else {
            return redirect('/')->with('status', "This Link is Broken");
        }
    }

    public function orderindex()
    {
        $orders = Order::where('user_id',Auth::id())->get();
        return view('orders.index' ,compact('orders'));
    }

    public function orderview($id)
    {
        $orders = Order::where('id',$id)->where('user_id',Auth::id())->get();
        return view('orders.view' ,compact('orders'));
    }
    
    public function RazorThankYou()
     {
       return view('thankyou');
     }
}
