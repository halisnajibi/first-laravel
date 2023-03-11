<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return \view('category.index',[
            'categories' => Category::withCount('posts')->get()
        ]);
    }

    public function show(Category $category)
    {
        return \view('category.categories',[
            'name' => $category->name,
            'posts' => $category->posts //mengambil dari nama relasi
        ]);
    }
}
