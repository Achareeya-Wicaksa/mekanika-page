<?php

use App\Http\Controllers\ModelController;

Route::get('/', [ModelController::class, 'index']);
