<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        return view('courses.categories', [
            'title' => 'Courses Categories',
            'navbar' => 'categories',
            'header' => 'All Courses Categories',
            'categories' => Category::latest()->filter(request(['category']))->paginate()
        ]);
    }

    public function show(Category $category) {
        return view('Courses.category', [
            'title' => 'Courses Category',
            'navbar' => 'categories',
            'header' => 'Courses Category',
            'name' => $category->name,
            'posts' => $category->posts()->paginate(3)
        ]);
    }
}