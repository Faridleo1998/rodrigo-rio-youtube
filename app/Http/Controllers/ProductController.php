<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        $products = Product::with(['category'])->get();
        return view('pages.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::pluck('name', 'id');
        return view('pages.products.create', compact('categories'));
    }

    public function store(ProductRequest $request)
    {
        Product::create($request->validated());
        return redirect()
            ->route('products.index')
            ->with('status', 'Product created successfully');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
