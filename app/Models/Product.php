<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $table ="products";
    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'short_description',
        'description',
        'regular_price',
        'sale_price',
        'quantity',
        'meta_title',
        'meta_description',
    ];

    public function category()
    {
        return $this->belongsto(Category::class,'category_id','id');
    }

}
