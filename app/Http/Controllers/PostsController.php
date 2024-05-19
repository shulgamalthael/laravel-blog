<?php

namespace App\Http\Controllers;

use App\Http\Services\PostsService;
use Illuminate\Support\Facades\Route;

class PostsController extends Controller
{
    public function register() {
        Route::get('/', [PostsService::class, 'getPostsList'])->name('getPostsList');
    }
}
