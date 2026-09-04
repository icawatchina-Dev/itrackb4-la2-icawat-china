<?php
use App\Http\Controllers\BrgyController;

use Illuminate\Support\Facades\Route;

Route::get('/whoami', function () {
    return 'China Icawat| 2023-70490 | Block 4C| ITRACKB4 Laravel 12';
});

Route::get('/brgys', [BrgyController::class, 'index']);