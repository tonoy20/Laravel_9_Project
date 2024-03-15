<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::latest()->paginate(3);
        return view('categories.list',['categories' => $categories]);
    }
    public function create_c(){
        return view('categories.new');
    }
    public function store_c(Request $request){

        // validate data
        $request->validate([
            'title' => 'required|unique:categories|max:200'
        ]);

        $category = new Category;
        $category->title = $request->title;
        $category->save();

        return redirect('/')->withSuccess('New Category Created!');
    }
    
    public function edit_c($id) {
        $category = Category::where('id', $id)->first();

        return view('categories.edit', ['category' => $category]);
    }

    public function update_c(Request $request ,$id) {
        $category = Category::where('id', $id)->first();

        $category->title = $request->title;

        $category->save();

        return redirect('/');
    }

    public function delete_c($id) {
        $category = Category::whereId($id)->first();

        $category->delete();

        return redirect('/');
    }
}
