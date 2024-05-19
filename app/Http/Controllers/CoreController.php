<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostsController;

class CoreController extends Controller
{
    public function api()
    {
        Route::group('/posts', [PostsController::class, 'register']);
        Route::group('/sign_in', [AuthController::class, 'register']);
    }
}
