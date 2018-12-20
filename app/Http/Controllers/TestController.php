<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\TestRequest;
use App\User;
use Gate;
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
//        if ($request->isMethod('POST')) {
//
//            $messages = [
//                'required' => 'Поле :attribute обязательно к заполнению.',
//                'max' => 'Максимально допустимое количество символов - :max.',
//            ];
//
//            $validator = Validator::make($request->all(), [
//                'name' => 'required',
//                'text' => 'required'
//            ], $messages);
//
//            if ($validator->fails()) {
//
//
//                return redirect()->back()->withErrors($validator)->withInput();
//            }
//
//        }
//
        //     $user_id = $request->user()->id;
//        $article = Article::create([
//            'name' => $request->name,
//            'text' => $request->text,
//            'user_id' =>$user_id
//        ]);


        if (Gate::denies('create', Article::class)) {
            return redirect()->back()->with(['status' => 'У вас нет прав']);
        }

        return redirect()->route('defaultShow')->with(['status' => 'Операция прошла успешно!']);


    }
}
