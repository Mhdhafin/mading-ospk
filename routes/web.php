<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('home', [
            'title' => 'Home Page',
            'post' => ''
        ]);
    });
    Route::get('/about', function () {
        return view('about', [
            'title' => 'About Page',
            'post' => ''
        ]);
    });
});

// Profile edit
// Route::resource('/profile', ProfileController::class);



// Post
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');


// Admin
// Route::get('/admin/home', [AdminController::class, 'index']);

// Authentication
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('loginPost');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('registerPost');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');
















// Route::get('/posts/{id}', function ($id) {
//     $posts = [
//         [
//             'id' => 1,
//             'title' => 'Judul Artikel 1',
//             'date' => '18 August 2024',
//             'author' => 'Muhammad Dhafin',
//             'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae cum dolorem ipsa repellat, at laudantium dolore quibusdam, ipsam vel veritatis molestiae a explicabo repudiandae voluptatem totam, eaque aspernatur? Praesentium ut ratione incidunt voluptatibus saepe! Minus, ab perferendis? Earum, deleniti quos et explicabo saepe cum similique veritatis recusandae ipsa a deserunt.'
//         ],
//         [
//             'id' => 2,
//             'title' => 'Judul Artikel 2',
//             'date' => '18 July 2024',
//             'author' => 'Bambang Suseno',
//             'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio quis magni quod laborum sunt cum iste praesentium sapiente dicta sed dolores obcaecati illum harum tenetur eius hic veniam, eos fugit eligendi voluptatem fugiat culpa dolorum id porro. Sit tempore, laboriosam minima esse nulla voluptate deleniti expedita. Ipsum rerum fugiat officia.'
//         ]

//     ];

//     $post = Arr::first($posts, function ($post) use ($id) {
//         return $post['id'] == $id;
//     });
//     return view('post', [
//         'title' => 'Single Post',
//         'post' => $post,

//     ]);
// });
