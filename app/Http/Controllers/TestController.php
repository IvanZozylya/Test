<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;

use Route;

/**
 * Class TestController
 * @package App\Http\Controllers
 */
class TestController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        if (view()->exists('test.index')) {
            $view = view('test.index', [
                'title' => 'Index page',
                'slot' => 'Index page',
            ])->render();

            return response($view)
                ->header('Name','Ivan');
        }
    }

    /**
     * @param Request $request
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        return redirect()->route('article', ['page']);



    }
}
