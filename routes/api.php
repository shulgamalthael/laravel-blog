<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoreController;

Route::prefix('/api')->group([CoreController::class, 'api']);
