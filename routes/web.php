<?php
use App\Http\Controllers\HubController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ola', [HubController::class, 'index']);
Route::get('/Hub/adicionar', [HubController::class, 'create']);
