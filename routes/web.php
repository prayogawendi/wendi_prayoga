<?php
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('');

Route::get('/profile', [ProfileController::class, 'index']);
Route::put('/profile/{user:username}', [ProfileController::class, 'update'])->middleware('auth');

// Route::get('/posts', [PostController::class, 'index']);
Route::get('/user/{user:username}', [UserController::class, 'index']);
Route::get('/post/{user:username}/{post:slug}', function(User $user, Post $post) {
    return view('courses.post', [
        'title' => 'Courses Post',
        'navbar' => 'posts',
        'header' => 'Courses Post',
        'post' => $post
    ]);
});

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/category/{category:slug}', [CategoryController::class, 'show']);

Route::get('/register', [RegisterController::class, 'create'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [DashboardPostController::class, 'index'])->middleware('auth')->can('admin');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('admin');

Route::resource('/dashboard/categories', AdminCategoryController::class)->middleware('admin')->except('create', 'show');