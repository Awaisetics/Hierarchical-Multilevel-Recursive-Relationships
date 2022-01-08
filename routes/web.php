<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;

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
Route::get(
    '/c',
    function () {
        $parentCategories = Category::where('parent_id', NULL)->get();
        return view('categories', compact('parentCategories'));
    }
);
Route::get(
    '/s',
    function () {
        $childCategories = Category::where('parent_id', NULL)->get();
        return view('categories', compact('parentCategories'));
    }
);
