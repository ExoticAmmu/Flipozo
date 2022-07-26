<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {

        $category = new category();

        $category->name  = $request->input('name');
        $category->slug  = $request->input('slug');
        $category->description  = $request->input('description');
        
        if ($request->hasfile('image')) {

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() .'.'.$ext;
            $file->move('assets/uploads/category/', $filename);
            $category->image = $filename;
        }

        $category->meta_keyword  = $request->input('meta_keyword');
        $category->meta_title  = $request->input('meta_title');
        $category->meta_description  = $request->input('meta_description');
        $category->status  = $request->input('status') == TRUE ? '1' : '0';
        $category->save();

        return redirect()->route('admin.categories.index')->with('status', "Category Added Succesfully");
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {

        $category = Category::findOrFail($id);

        if ($request->hasfile('image')) {

        $path = 'assets/uploads/category/'.$category->image;
            if(file::exists($path)){
                file::delete($path);
            }
        }

        $category->name  = $request->input('name');
        $category->slug  = $request->input('slug');
        $category->description  = $request->input('description');
        $category->meta_title  = $request->input('meta_title');
        $category->meta_description  = $request->input('meta_description');
        $category->update();
        return back();
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return back();
    }
}
