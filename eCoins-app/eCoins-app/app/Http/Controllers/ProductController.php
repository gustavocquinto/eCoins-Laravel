<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    //
    public function index (Product $product){
        return view('product.index')->with(['products' => Product::all(), 'categories' => Category::all()]);
    }

    public function create(){
        return view('/product/create')->with(['categories' => Category::all()]);
    }

    public function store(Request $request){
        $product = Product::create($request->all());
        session()->flash('sucess', 'Produto criado com sucesso');
        return redirect(route('product.index'));
    }

    public function destroy(Product $product){
        $product->delete();
        session()->flash('sucess', 'Produto removido com sucesso');
        return redirect(route('product.index'));
    }

    public function edit(Product $product){
        return view('product.edit')->with('product', $product);
    }

    public function update(Product $product, Request $request){
        $product->update($request->all());
        session()->flash('sucess', 'Produto Atualizado com Sucesso');
        return redirect(route('product.index'));
    }

}
