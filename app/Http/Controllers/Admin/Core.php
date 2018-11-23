<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Country;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


/**
 * Class Core
 * @package App\Http\Controllers\Admin
 */
class Core extends Controller
{
    //list material


    public function getArticles()
    {
        $article = Article::all();

        dump($article->pluck('role'));


        return;
    }


    /**
     * @param $id
     * material
     */
    public function getArticle($id)
    {
        echo ' Ответ: ' . $id;
    }
}

?>
