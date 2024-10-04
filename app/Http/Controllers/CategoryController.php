<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'min:2|max:255|string|required',
            'description' => 'min:2|max:255|string|required',
            'status' => 'nullable',
        ]);
        $category = new Category;
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->status = $request->input('status') ? '1':'0';

        $category->save();
        return redirect('category')->with('status','Category added successfully.');
    }


    public function show(Category $category)
    {
        return view('category.show',compact('category'));
    }


    public function edit(Category $category)
    {
        return view('category.edit',compact('category'));
    }


    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'min:2|max:255|string|required',
            'description' => 'min:2|max:255|string|required',
            'status' => 'nullable',
        ]);
        $category->update([
            'name' => $request->name,
            'description' => $request->description,
            'status' => $request->status == true ? 1: 0,
        ]);
        return redirect('category')->with('status','Category updated successfully.');
    }


    public function destroy(Category $category)
    {
        $category->delete();
        return redirect('category')->with('status','Category deleted successfully.');
    }
}
