<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

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

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $destinationPath = 'assets/uploads/category/';
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move($destinationPath, $filename);
            $category->image = $filename;
        }

        $category->name  = $request->input('name');
        $category->slug  = $request->input('slug');
        $category->description  = $request->input('description');
        $category->image  = $path;
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
