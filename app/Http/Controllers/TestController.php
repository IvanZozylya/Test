<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Route;

class TestController extends Controller
{
    public function index()
    {
        if (view()->exists('test.index')) {
            return view('test.index',[
                'title' => 'Index page',
                'slot' => 'Index page',
            ]);
        }
        abort(404);
    }
}
