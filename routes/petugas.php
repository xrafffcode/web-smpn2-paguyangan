<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth', 'role:petugas']], function () {
    Route::resource('guestbooks', \App\Http\Controllers\Web\Admin\GuestBookController::class);
});
