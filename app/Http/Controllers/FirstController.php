<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


/**
 * Class FirstController
 * @package App\Http\Controllers
 */
class FirstController extends Controller
{

    public function show($id)
    {
        echo __METHOD__ ."<br>";
        echo $id;
    }
}
