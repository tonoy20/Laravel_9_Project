<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index () {
        $products = Product::get();

        $products = Product::latest()->paginate(3);
        return view('products.list', ['products' => $products]);
    }

    public function create () {
        return view('products.new');
    }

    public function store (Request $request) {

        $request->validate([
            'email' => 'required|unique:products|max:200'
        ],
        [
            'unique' => "This email is already used"
        ]
        );
        $product = new Product;
        $product->first_name = $request->f_name;
        $product->last_name = $request->l_name;
        $product->email = $request->email;

        $product->save();

        return redirect('/products')->withSuccess('New Product Created!');
    }

    public function edit ($id) {
        // dd($id);
        $product = Product::where('id', $id)->first();
        return view('products.edit', ['product' => $product]);
    }

    public function update (Request $request,  $id) {
        $product = Product::where('id', $id)->first();

        // dd($id);

        $product->first_name = $request->f_name;
        $product->last_name = $request->l_name;
        $product->email = $request->email;

        $product->save();

        return redirect('/products');
    }

    public function delete ($id) {
        $product = Product::whereId($id)->first();

        $product->delete();

        return redirect('/products');
    }
}
