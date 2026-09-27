<?php
use App\Http\Controllers\BrgyController;

use Illuminate\Support\Facades\Route;

Route::get('/whoami', function () {
    return 'China Icawat| 2023-70490 | Block 4C| ITRACKB4 Laravel 12';
});

Route::get('/brgy/filter/{municipality}', function (string $municipality) {
    return redirect()->route('brgys.index', ['municipality' => $municipality]);
})->name('brgys.filter');

Route::resource('brgys', BrgyController::class)->only(['index', 'show']);