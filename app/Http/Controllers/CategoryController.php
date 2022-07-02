<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;

class CategoryController extends Controller
{
    public function create(): View
    {
        $categories = Category::latest()->get();
        return view('categories.create', compact('categories'));
    }

    public function store(CategoryRequest $request): RedirectResponse
    {
        $params = $request->validated();
    
        Category::create($params);
        return to_route('index');
    }
}
