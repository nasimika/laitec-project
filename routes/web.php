<?php

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

use App\Article;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
//use Exception;

Route::get('/', function () {

    $articles = Article::orderBy('id','DESC')->where('status','1')->paginate(3);
    $categories = Category::all();
    return view('front.blog', compact('articles', 'categories'));
})->name('home');

Route::get('/category/', function (Request $request) {

    $articles = Article::orderBy('id','DESC')
    ->where('status','1')
    ->where('category_id',$request->cat_id)
    ->paginate(5);
    $categories = Category::all();
    return view('front.blog', compact('articles', 'categories'));
})->name('category');

Route::get('/article/{article}', function (Article $article) {
    $categories = Category::all();
    return view('front.single', compact('article', 'categories'));
})->name('article');


////////////////////////




Auth::routes();




Route::prefix('admin')->middleware('checkrole')->group(function () {
    Route::get('/', 'AdminController@index')->name('admin.index');
});

Route::prefix('admin/categories')->middleware('checkrole')->group(function () {
    Route::get('/', 'CategoryController@index')->name('admin.categories');
    Route::get('/create', 'CategoryController@create')->name('admin.categories.create');
    Route::post('/store', 'CategoryController@store')->name('admin.categories.store');
    Route::get('/edit/{category}', 'CategoryController@edit')->name('admin.categories.edit');
    Route::post('/update/{category}', 'CategoryController@update')->name('admin.categories.update');
    Route::get('/delete/{category}', 'CategoryController@destroy')->name('admin.categories.delete');

});

Route::prefix('admin/articles')->middleware('checkrole')->group(function () {
    Route::get('/', 'ArticleController@index')->name('admin.articles');
    Route::get('/create', 'ArticleController@create')->name('admin.articles.create');
    Route::post('/store', 'ArticleController@store')->name('admin.articles.store');
    Route::get('/edit/{article}', 'ArticleController@edit')->name('admin.articles.edit');
    Route::post('/update/{article}', 'ArticleController@update')->name('admin.articles.update');
    Route::get('/delete/{article}', 'ArticleController@destroy')->name('admin.articles.delete');
});



