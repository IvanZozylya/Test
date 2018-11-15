<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Route;
class TestController extends Controller
{
    public function index()
    {
        dd($route = Route::current());
        return view('welcome');
    }
}
