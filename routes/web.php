<?php

use App\Http\Controllers\CalcController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('calculator');
});

Route::post('/',[CalcController::class, 'calculate'])->name('calc');
