<?php

use App\Http\Controllers\ModelController;

Route::get('/', [ModelController::class, 'index']);
// routes/web.php

Route::get('/parts', function () {
    return view('parts.index'); // Pastikan path ini sesuai
})->name('parts.index');
