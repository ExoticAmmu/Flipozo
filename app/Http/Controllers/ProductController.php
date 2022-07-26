<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = product::all();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $category = Category::all();
        return view('admin.products.create', compact('category'));
    }

    public function store(Request $request)
    {
        $products = new Product();

        // if($request->hasfile('image')){
        //     $image=$request->file('image');
        //     $ext=$image->extension();
        //     $image_name=time().'.'.$ext;
        //     $image->storeAs('/assets/uploads/products/',$image_name);
        //     $products->image=$image_name;
        // }

        $products->name  = $request->input('name');
        $products->slug  = $request->input('slug');
        $products->short_description  = $request->input('description');
        $products->description  = $request->input('description');
        $products->category_id  = $request->input('category_id');
        $products->regular_price  = $request->input('regular_price');
        $products->sale_price  = $request->input('sale_price');
        $products->quantity  = $request->input('quantity');
        $products->meta_title  = $request->input('meta_title');
        $products->meta_description  = $request->input('meta_description');
        $products->save();

        return redirect()->route('admin.products.index')->with ('status',"Category Added Succesfully");
    }

    public function edit($id){
        $products = Product::findOrFail($id);
        return view('admin.products.edit', compact('products'));
    }

    public function update(Request $request,$id)
    {
        $products = Product::findOrFail($id);

        $products->name  = $request->input('name');
        $products->slug  = $request->input('slug');
        $products->short_description  = $request->input('description');
        $products->description  = $request->input('description');
        $products->regular_price  = $request->input('regular_price');
        $products->sale_price  = $request->input('sale_price');
        $products->quantity  = $request->input('quantity');
        $products->meta_title  = $request->input('meta_title');
        $products->meta_description  = $request->input('meta_description');
        
        $products->update();
        return back();
    }

    public function destroy($id)
    {
        $products = Product::findOrFail($id);
        $products->delete();
        return back();
    }

}
