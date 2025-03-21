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

/* Оригинал */

/*     Route::get('/friend', [FriendsController::class, 'index']) -> name('friend.index');
    Route::get('/friend/create', [FriendsController::class, 'create'])-> name('friend.create');
    Route::post('/friend', [FriendsController::class, 'store'])-> name('friend.store');
    Route::get('/friend/{friend}', [FriendsController::class, 'show'])-> name('friend.show');
    Route::get('/friend/{friend}/edit', [FriendsController::class, 'edit'])-> name('friend.edit');
    Route::patch('/friend/{friend}', [FriendsController::class, 'update'])-> name('friend.update');
    Route::delete('/friend/{friend}', [FriendsController::class, 'delete'])-> name('friend.delete'); */

    Route::prefix('friend')->group(function () {
        Route::get('/', IndexController::class)->name('friend.index');
        Route::get('/create', CreateController::class)->name('friend.create');
        Route::post('/', StoreController::class)->name('friend.store');
        Route::get('/{friend}', ShowController::class)->name('friend.show');
        Route::get('/{friend}/edit', EditController::class)->name('friend.edit');
        Route::patch('/{friend}', UpdateController::class)->name('friend.update');
        Route::delete('/{friend}', DeleteController::class)->name('friend.delete');
    });
