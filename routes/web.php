<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('clients', [clientController::class,'index'])->name('api.v1.clients.index');
