<?php

namespace App\Http\Controllers\Admin;

use App\Article;
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

        $article = Article::find(31);
        $article->forceDelete();

        $articles = Article::all();

        dump($articles);
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
