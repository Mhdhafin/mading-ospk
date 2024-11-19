<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StructureController;
use App\Http\Controllers\TestimonalController;
use App\Http\Controllers\VisiMisiController;
use App\Mail\SendMail;
use App\Models\Faq;
use App\Models\Hero;
use App\Models\Post;
use App\Models\Profile;
use App\Models\Structure;
use App\Models\Testimonal;
use App\Models\VisiMisi;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;





Route::get('/blog', function () {
    $posts = Post::get();
    return view('pages.blog', [
        'title' => 'Postingan',
        'post' => $posts
    ]);
});


Route::get('/', function () {
    $hero = Hero::first();
    $profile = Profile::first();
    $visimisi = VisiMisi::get();
    $faq = Faq::get();

    return view('pages.home', compact('hero', 'profile', 'visimisi', 'faq'));
});
Route::get('/about', function () {
    $profile = Profile::get();
    $structure = Structure::get();
    $testimonal = Testimonal::get();
    return view('pages.about', compact('profile', 'structure', 'testimonal'));
});
// Route::get('/posts', [BlogController::class, 'index']);
// Route::get('/posts/{post:slug}', [BlogController::class, 'show']);

Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact-send', [ContactController::class, 'store']);
Route::get('/posts/{post:slug}', [PostsController::class, 'show']);

Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');


Route::middleware('auth', 'verified')->group(function () {
    Route::resource('/dashboard/hero', HeroController::class);
    Route::resource('/dashboard/faq', FaqController::class);
    Route::resource('/dashboard/profile', ProfileController::class);
    Route::resource('/dashboard/visimisi', VisiMisiController::class);
    Route::resource('/dashboard/testimonal', TestimonalController::class);
    Route::resource('/dashboard/structure', StructureController::class);
    Route::resource('/dashboard/posts', PostsController::class);
});











Route::get('/users', [AdminController::class, 'userLists']);
Route::delete('/users/{id}', [AdminController::class, 'destroyUser']);
// Profile edit
Route::get('/profile', [AdminController::class, 'edit'])->name('profile');
Route::put('/profile/edit/{id}', [AdminController::class, 'update']);
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
