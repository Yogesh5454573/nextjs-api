<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{ UserController };

// ========= Start Manage Admins  =========
Route::controller(UserController::class)
    ->name('admin.')
    ->group(function () {
        Route::get('/userList',  'userList')->name('userList');
        Route::get('/addUser',  'addUser')->name('addUser');
        Route::get('/editUser',  'editUser')->name('editUser');
        Route::post('/addUpdateUser',  'addUpdateUser')->name('addUpdateUser');
        Route::put('/addUpdateUser/{token?}',  'addUpdateUser')->name('addUpdateUser');
        Route::delete('/deleteUser/{token}',  'deleteUser')->name('deleteUser');
    });
// ========= End Manage Admins  =========

    