<?php

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
    //$navItems = ['Home', 'Courses'];
    $content = "<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta incidunt necessitatibus doloribus ipsam architecto, nostrum sunt aut eligendi, excepturi itaque veniam dignissimos quis laudantium repellat natus molestias vel. Eaque eos quis, dolore, ipsum vitae ipsa exercitationem sequi adipisci a id voluptatem consequuntur sunt deserunt inventore saepe repellendus? Itaque consequuntur aliquam animi impedit, maiores similique expedita soluta, quaerat voluptatibus dicta temporibus eos dolorem! Quaerat debitis exercitationem quam maxime cumque quibusdam odio ab ullam voluptas rem dolor tempore, officiis voluptatum laudantium veniam consequatur cum molestiae, explicabo eius excepturi maiores iusto quod. Cumque et in porro impedit aliquam odit. Atque dolores expedita voluptatum.</p>";
    return view('home', compact('content'));
});

Route::get('/courses', function () {
    $courses = ['Learn Carbonara', 'Learn Drinks', 'Learn Table Service'];
    return view('courses', compact('courses'));
});

Route::get('/courses/{id}', function ($id) {

    return view('details', ['id' => $id]);
});
