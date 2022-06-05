<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //

    public function index(){
        $categories = Category::all();
        return view('/category/index')->with(['categories' => Category::all()]);
    }

    public function create(){
        return view('/category/create');
    }

    public function store(Request $request, Category $category){
        Category::create($request->all());
        session()->flash('success', 'Categoria adicionada com sucesso');
        return redirect(route('category.index'));
        }

    public function destroy(Category $category){
        $category->delete();
        session()->flash('success', 'Produto deletado com sucesso');
        return redirect(route('category.index'));
    }

    public function edit(Category $category){
        return view('/category/edit')->with('category', $category);
    }

}
