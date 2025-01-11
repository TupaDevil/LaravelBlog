<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyWorkController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\FriendsController;
use App\Http\Controllers\FriendsController_example;

use App\Http\Controllers\MainController;
use App\Http\Controllers\AboutController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/fuck', function () {
    return 'FUCK YOU';
});

Route::get('/fuck', [MyWorkController::class, 'FUCK']);
Route::get('/color', [ColorController::class, 'color']);
/* Route::get('/friend', [FriendsController::class, 'friend']); */
Route::get('/friend/createDummies', [FriendsController_example::class, 'createDummies']);
Route::get('/friend/update', [FriendsController::class, 'update']);
Route::get('/friend/delete', [FriendsController::class, 'delete']);
Route::get('/friend/firstOrCreate', [FriendsController::class, 'firstOrCreate']);
Route::get('/friend/updateOrCreate', [FriendsController::class, 'updateOrCreate']);

Route::get('/main', [MainController::class, 'main']) -> name('main.index');
Route::get('/about', [AboutController::class, 'about']) -> name('about.index');

Route::get('/friend', [FriendsController::class, 'index']) -> name('friend.index');
Route::get('/friend/create', [FriendsController::class, 'create'])-> name('friend.create');
Route::post('/friend', [FriendsController::class, 'store'])-> name('friend.store');
Route::get('/friend/{friend}', [FriendsController::class, 'show'])-> name('friend.show');
Route::get('/friend/{friend}/edit', [FriendsController::class, 'edit'])-> name('friend.edit');
Route::patch('/friend/{friend}', [FriendsController::class, 'update'])-> name('friend.update');
Route::delete('/friend/{friend}', [FriendsController::class, 'delete'])-> name('friend.delete');


