<?php

use App\Models\User;
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

Route::get('/hasmany', function () {

    ray()->showQueries();

    /**
     * this tip compares the whereHas vs joins
     * as feedback on a question posted on twitter regarding this video
     *
     * https://www.youtube.com/watch?v=JOnXX-N96NE
     */

    $users = User::whereHas('posts', function ($q) {
        $q->where('category_id', 1);
    })->get();
    ray($users->count());


    /**
     * if you are working on a huge table ( lot of columns , lot of data )
     * its better to select only one field to do the wherehas select
     */
    $users = User::whereHas('posts', function ($q) {
        $q->select('id')->where('category_id', 1);
    })->get();
    ray($users->count());

    /**
     * for performance reason a join can be a better solution
     */
    $users = User::select('users.id')
        ->join('posts', 'posts.user_id', '=', 'users.id')
        ->where('posts.category_id', 1)
        ->distinct()
        ->get();
    ray($users->count());

});
