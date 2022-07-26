<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
        return [
            'category_id' => '1',
            'name' => 'product1',
            'slug' => 'product-1',
            'short_description' => 'Product Short description',
            'description' => 'Product description',
            'regular_price' => '2000',
            'sale_price' => '100',
            'quantity' => '999',
            'meta_title' => 'product1', // password
            'meta_description' => 'meta_description',
        ];
    }
}