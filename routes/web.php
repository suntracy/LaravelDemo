<?php

use Illuminate\Support\Facades\Route;
use App\Services\InspiringService;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello-world', function () {
    return view('hello_world');
}); 

Route::get('/about_us', function () {
    return view('about_us',['name' => 'Laravel 範例']);
});

Route::get('/inspire', 'App\Http\Controllers\InspiringController@inspire'); 

Route::get('/test', function(){
    return App\Models\Post::all();
}); 

Route::get('/edit', function(){
    $post = App\Models\Post::find(1);
    $post->content = 'Laravel demo';
    $post->save();
    return $post;
}); 

Route::get('/add', function(){
    $post = new App\Models\Post;
     $post->content = 'abcde';
     $post->save();
     return $post; 
 }); 


 Route::get('/delete', function(){
    $post = App\Models\Post::find(1);
    $post->delete();
}); 

Route::get('/sub1', function(){
    $posts = new App\Models\Subject;
    $posts->name = 'computer';
    $posts->save();
    return $posts;
}); 

Route::get('/sub2', function(){
    $posts = new App\Models\Subject;
    $posts->name = 'network';
    $posts->save();
    return $posts;
}); 

Route::get('/login', function(){
    var_dump(Auth::check());
}); 

Route::get('/infor', function(){
    echo Auth::user();
}); 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('posts', 'PostController');