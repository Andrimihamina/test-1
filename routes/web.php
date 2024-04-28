<?php

// use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ArticleControler;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [WelcomeController::class, 'index']) ->name('home');
Route::get('article/{n}',[ArticleControler::class,'show'])->where('n','[0-9]+');

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('1', function(){ return 'Je suis la page 1!';});
// Route::get('2', function(){ return 'Je suis la page 2!';});
// Route::get('3', function(){ return 'Je suis la page 3!';});
// Route::get('{n}', function($n){ return 'Jesuis la page ' . $n. '!';});
// Route::get('{n?}', function($n =1){ return 'Jesuis la page ' . $n. '!';});

// Route::get('{n}', function($n){ return 'Je suis la page ' . $n. '!';})
// ->where('n', '[1-3]');

// Route::get('/', function() { 
//     return 'Je suis la page dacceuil !';
// })->name('home');

// Route::get('/', function() {
//     return 'Je suis la page d\'accueil !';
//   })->name('home');

// Route::get('{n}', function($n){ 
//     return 'Je suis la page ' . $n. '!';
// });

// Route::get('contact', function() {
//     return 'c\'est moi le contact !';
//   });

// Route::get('test', function(){ 
//     return 'test';
// });

// Route::get('test', function(){ 
//     return ['un','deux','trois'];
// });
    
// Route::get('test', function(){ 
//     return response('un test', 206)->header('Content-Type','test/plain');
// });

// Route::get('/', function(){ 
//     return view('vue1');
// });
    
// Route::get('article/{n}', function($n) {
//     return view('article')->with('numero', $n);
// })->where('n', '[0-9]+');

// Route::get('article/{n}', function($n) {
//     return view('article')->withNumero($n);
// });

// Route::get('article/{n}', function($n) {
//     return view('article', ['numero' => $n]);
// });

// Route::get('factures/{n}', function($n) {
//     return view('factures')->withNumero($n);
// })->where('n', '[0-9]+');

