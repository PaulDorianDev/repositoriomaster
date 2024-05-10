<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Http\Livewire\ShowPosts;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    return view('welcome');
});

Route::get('/show/{post}', [PostController::class, 'show'])->name('show');
Route::get('/delete/{post}', [PostController::class, 'destroy'])->name('delete');
Route::get('/create', [PostController::class, 'create'])->name('create');
Route::post('/store', [PostController::class, 'store'])->name('store');
Route::get('/edit/{post}', [PostController::class, 'edit'])->name('edit');
Route::post('/update', [PostController::class, 'update'])->name('update');




Route::get('/about/{id}', function ($id){
    return "Hola mundo {$id}";
});


Route::prefix('admin') -> name('admin.') ->group(function (){
   Route::get('/about', function (){
    return "About";

   });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', ShowPosts::class)->name('dashboard');
});
