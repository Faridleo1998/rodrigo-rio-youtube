<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function index(): View
    {
        $categories = Category::all();
        return view('pages.categories.index', compact('categories'));
    }

    public function create(): View
    {
        return view('pages.categories.create');
    }

    public function store(CategoryRequest $request): RedirectResponse
    {
        Category::create($request->validated());
        return redirect()
            ->route('categories.index')
            ->with('status', 'Category created successfully');
    }

    public function edit(Category $category): View
    {
        return view('pages.categories.edit', compact('category'));
    }

    public function update(CategoryRequest $request, Category $category): RedirectResponse
    {
        $category->update($request->validated());
        return redirect()
            ->route('categories.index')
            ->with('status', 'Category updated successfully');
    }

    public function destroy(Category $category): RedirectResponse
    {
        $category->delete();
        return redirect()
            ->route('categories.index')
            ->with('status', 'Category deleted successfully');
    }
}
