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

    public function index()
    {

        if (view()->exists('test.index')) {
            $view = view('test.index', [
                'title' => 'Index page',
                'slot' => 'Index page',
            ])->render();

            return response($view)
                ->header('Name', 'Ivan');
        }
    }

    /**
     * @param Request $request
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        if ($request->isMethod('POST')) {

            $rules = [
                'name' => 'alpha_num',
                'email' => 'required|email',
            ];

            $this->validate($request, $rules);

            dd($request->all());
        }

        return redirect()->route('defaultShow');


    }
}
