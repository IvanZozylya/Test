<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestRequest;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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

    public function store(TestRequest $request)
    {
        if ($request->isMethod('POST')) {

//            $messages = [];
//
//            $validator = Validator::make($request->all(), [
//                'name' => 'required'
//            ], $messages);
//
//            if($validator->fails()){
//                return redirect()->back()->withErrors($validator)->withInput();
//            }
            dd($request->all());
        }

        return redirect()->route('defaultShow');


    }
}
