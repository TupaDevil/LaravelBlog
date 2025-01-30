<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyWorkController;
use App\Http\Controllers\FriendsController;
use App\Http\Controllers\FriendsController_example;

/* Контроллеры под папкой Friend */
use App\Http\Controllers\Friend\IndexController;
use App\Http\Controllers\Friend\CreateController;
use App\Http\Controllers\Friend\StoreController;
use App\Http\Controllers\Friend\ShowController;
use App\Http\Controllers\Friend\DeleteController;
use App\Http\Controllers\Friend\UpdateController;
use App\Http\Controllers\Friend\EditController;



Route::get('/fuck', function () {
    return 'FUCK YOU';
});

Route::get('/friend/createDummies', [FriendsController_example::class, 'createDummies']);

Route::group([
    'name' => 'front.',
    'prefix' => 'front',
    'namespace' => 'Front',
], function () {
    Route::get('about-us', 'AboutController@index')->name('about');
    Route::get('contact', 'ContactController@index')->name('contact');
});

/* Рабочая попытка номер 1 но это не то что было в уроке да мне и похуй как-будто уже */
/* Route::controller(FriendsController::class)->prefix('friend')->name('friend')->group(function() {
    Route::get('/', 'index') -> name('.index');
    Route::get('/create',  'create')-> name('.create');
    Route::post('/', 'store')-> name('.store');
    Route::get('/{friend}','show')-> name('.show');
    Route::get('/{friend}/edit', 'edit')-> name('.edit');
    Route::patch('/{friend}',  'update')-> name('.update');
    Route::delete('/{friend}',  'delete')-> name('.delete');
}); */





/* Оригинал */

/*     Route::get('/friend', [FriendsController::class, 'index']) -> name('friend.index');
    Route::get('/friend/create', [FriendsController::class, 'create'])-> name('friend.create');
    Route::post('/friend', [FriendsController::class, 'store'])-> name('friend.store');
    Route::get('/friend/{friend}', [FriendsController::class, 'show'])-> name('friend.show');
    Route::get('/friend/{friend}/edit', [FriendsController::class, 'edit'])-> name('friend.edit');
    Route::patch('/friend/{friend}', [FriendsController::class, 'update'])-> name('friend.update');
    Route::delete('/friend/{friend}', [FriendsController::class, 'delete'])-> name('friend.delete'); */


//    Нерабочая попытка номер 2 
/* Route::group(['namespace' => 'FriendLOOOL'], function () {
    Route::get('/posts', IndexController::class)->name('post.index');
    Route::get('/posts/create', CreateController::class)->name('post.create');
    Route::post('/posts',StoreController::class)->name('post.store');
    Route::get('/posts/{post}', ShowController::class)->name('post.show');
    Route::get('/posts/{post}/edit', EditController::class)->name('post.edit');
    Route::patch('/posts/{post}', UpdateController::class)->name('post.update');
    Route::delete('/posts/{post}', DeleteController::class)->name('post.delete');
}); */

// Вариант 3 не рабочий 

/* Route::namespace('Friend')->group (function () {
    Route::get('/friend', [FriendsController::class, 'index']) -> name('friend.index');
    Route::get('/friend/create', [CreateController::class, 'create'])-> name('friend.create');
    Route::post('/friend', [StoreController::class, 'store'])-> name('friend.store');
    Route::get('/friend/{friend}', [FriendsController::class, 'show'])-> name('friend.show');
    Route::get('/friend/{friend}/edit', [FriendsController::class, 'edit'])-> name('friend.edit');
    Route::patch('/friend/{friend}', [FriendsController::class, 'update'])-> name('friend.update');
    Route::delete('/friend/{friend}', [FriendsController::class, 'delete'])-> name('friend.delete');
     }); */

// Вариант 4 не рабочий 
/*      Route::group(['namespace' => 'app\Http\Controllers\Friend'], function () {
        Route::get('/posts', IndexController::class)->name('post.index');
        Route::get('/posts/create', CreateController::class)->name('post.create');
        Route::post('/posts',StoreController::class)->name('post.store');
        Route::get('/posts/{post}', ShowController::class)->name('post.show');
        Route::get('/posts/{post}/edit', EditController::class)->name('post.edit');
        Route::patch('/posts/{post}', UpdateController::class)->name('post.update');
        Route::delete('/posts/{post}', DeleteController::class)->name('post.delete');
    }); */


        Route::get('/friend', [IndexController::class, 'index']) -> name('friend.index');
        Route::get('/friend/create', [CreateController::class, 'create'])-> name('friend.create');
        Route::post('/friend', [StoreController::class, 'store'])-> name('friend.store');
        Route::get('/friend/{friend}', [ShowController::class, 'show'])-> name('friend.show');
        Route::get('/friend/{friend}/edit', [EditController::class, 'edit'])-> name('friend.edit');
        Route::patch('/friend/{friend}', [UpdateController::class, 'update'])-> name('friend.update');
        Route::delete('/friend/{friend}', [DeleteController::class, 'delete'])-> name('friend.delete');
