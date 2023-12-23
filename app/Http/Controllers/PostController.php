<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return view('courses.posts', [
            'title' => 'Courses Posts',
            'navbar' => 'posts',
            'header' => 'All Courses Posts',
            'posts' => Post::latest()->filter(request(['search', 'user', 'category']))->paginate(4)->withQueryString()
        ]);
    }
}