<?php

namespace App\Http\Controllers;

use App\Http\Services\AuthService;
use Illuminate\Support\Facades\Route;

class AuthController extends Controller
{
    public function register() {
        Route::post('/', [AuthService::class, 'signIn'])->name('signIn');
    }
}
