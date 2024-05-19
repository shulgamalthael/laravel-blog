<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\Route;

class ViewService
{
    public function home()
    {
        return view('home.index');
    }
}
