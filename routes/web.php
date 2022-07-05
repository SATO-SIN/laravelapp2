<?php

// use Illuminate\Support\Facades\Route;

// P.112 4-3
use App\Http\Middleware\HelloMiddleware;




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


// P.33 2-3
// Route::get('hello', function () {
//     return '<html><body><h1>Hello</h1><p>This is sample page.</p></body></html>';
// });


// P.35 2-5
// Route::get('hello/{msg?}',function ($msg='no message.'){

//     $html = <<<EOF
// <html>
// <head>
// <title>Hello</title>
// <style>
// body {font-size:19pt;color:#999;}
// h1 {font-size:100pt;text-align:right;color:#eee;
//     margin:-40px 0px -50px 0px; }
// </style>
// </head>
// <body>
// <h1>Hello</h1>
// <p>{$msg}</p>
// <p>サンプルで作ったページです。</p>
// </body>
// </html>
// EOF;

// return $html;
// });

// P.34 2-4
// Route::get('hello', function () use ($html) {
//     return $html;
// });

// P.43 2-8
// Route::get('hello/{id?}/{pass?}','App\Http\Controllers\HelloController@index');

// P.47 2-12
// Route::get('hello', 'App\Http\Controllers\HelloController@index');
// Route::get('hello/other', 'App\Http\Controllers\HelloController@other');

// p.50 2-14
// Route::get('hello', 'App\Http\Controllers\HelloController@index');

// P.60 3-2
// Route::get('hello', function () {
//     return view('hello.index');
// });

// P.62 3-4
// Route::get('hello/{id?}', 'App\Http\Controllers\HelloController@index');

// Route::post('hello', 'App\Http\Controllers\HelloController@post');


// p.112 4-3
Route::get('hello', 'App\Http\Controllers\HelloController@index')
    ->middleware(HelloMiddleware::class);
