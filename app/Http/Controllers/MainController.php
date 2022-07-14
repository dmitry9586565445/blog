<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use App\Models\Category;

class MainController extends Controller
{
    public function index(): View
    {
        $categories = Category::latest()->get();
        return view('index', compact('categories'));
    }
}
