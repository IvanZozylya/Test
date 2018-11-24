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

    public function store(Request $request)
    {
        if ($request->isMethod('POST')) {

            $messages = [
                'required' => 'Поле :attribute обязательно к заполнению.',
                'max' => 'Максимально допустимое количество символов - :max.',
                ];

            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required'
            ], $messages);

            if($validator->fails()){

                dd($validator->errors()->messages());
                return redirect()->back()->withErrors($validator)->withInput();
            }

        }

        return redirect()->route('defaultShow');


    }
}
