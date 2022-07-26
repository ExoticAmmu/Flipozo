<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Product;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'carts';
    protected $fillable = [
        'session_id',
        'user_id',
        'product_id',
        'product_quantity',
    ];

    public function products()
    {
        return $this->belongsTo(Product::class, 'Product_id', 'id');
    }

    public static function userCartItems()
    {
        if (Auth::check()) {
            $userCartItems = Cart::with('product')->where('user_id', Auth::user()->id)->get()->toArray();
        } else {
            $userCartItems = Cart::with('product')->where('session_id', Session::get('session_id'))->get()->toArray();
        }
        return $userCartItems;
    }

    public function product()
    {
        return $this->belongsto(Product::class,'product_id','id');
    }
}
