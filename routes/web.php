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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/task', function () {
// 	return 'task';
// });

// Route::get('/task/{id}', function ($id) {
// 	return $id;
// });

// Route::get('/task1/{id}', function ($id) {
// 	$database = [
//         [
//             'name' => 'Assignment',
//             'date' => '21/03/2018',
//             'pic' => 'Ken Land'
//         ],
//         [
//             'name' => 'Group Project',
//             'date' => '01/01/2018',
//             'pic' => 'Tsu Chauw'
//         ],
//         [
//             'name' => 'Assignment',
//             'date' => '12/02/2018',
//             'pic' => 'Celine'
//         ]
//     ];
//     $task = $database[$id];
//     // dd is check data inside
//     dd($task);
//     return $id;
// });

// TaskController is a class, @ is like call, index is a function in TaskController
Route::get('task2', 'TaskController@index');

Route::get('task3/{id}', 'TaskController@get');