<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\CategoriesNews;
use App\TagsNews;
use App\Article;
use App\CategoriesArticle;
use App\TagsArticle;

class SiteController extends Controller
{
    public function index()
    {
        return view('user.site.index')->with(['news' => News::all()->paginate(10)]);
    }

    public function company()
    {
        return view('user.site.company');
    }

    public function news()
    {
        return view('user.site.news')->with([
            'news' => News::all()->paginate(10),
            'categories' => CategoriesNews::all(),
            'tags' => TagsNews::all(),
        ]);
    }

    public function onenews(News $news)
    {
        return view('user.site.onenews')->with([
            'new' => $news
        ]); 
    }

    public function articles()
    {
        return view('user.site.articles')->with([
            'articles' => Article::all()->paginate(10),
            'categories' => CategoriesArticle::all(),
            'tags' => TagsArticle::all(),
        ]);
    }

    public function onearticle(Article $article) 
    {
        return view('user.site.onearticle')->with([
            'article' => $article
        ]); 
    }

    public function delivery()
    {
        return view('user.site.delivery');
    }

    public function contacts()
    {
        return view('user.site.contacts');
    }
}
