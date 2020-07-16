<?php

namespace App\Http\Controllers;

use App\Article;
use App\CategoriesArticle;
use App\CategoriesNews;
use App\News;
use App\Tagsarticle;
use App\TagsNews;

class SiteController extends Controller
{
    public function index()
    {
        return view('user.site.index')->with(['news' => News::paginate(10)]);
    }

    public function company()
    {
        return view('user.site.company');
    }

    public function news()
    {
        return view('user.site.news')->with([
            'news' => News::paginate(10),
            'categories' => CategoriesNews::all(),
            'tags' => TagsNews::all(),
        ]);
    }

    public function onenews($categoryslug, $newsslug)
    {
        return view('user.site.onenews')->with([
            'new' => News::where('slug', $newsslug)->firstOrFail(),
        ]);
    }

    public function articles()
    {
        return view('user.site.articles')->with([
            'articles' => Article::paginate(10),
            'categories' => CategoriesArticle::all(),
            'tags' => Tagsarticle::all(),
        ]);
    }

    public function onearticle($categoryslug, $articleslug)
    {
        return view('user.site.onearticle')->with([
            'article' => Article::where('slug', $articleslug)->firstOrFail(),
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

    // Products
    public function telega()
    {
        return view('user.products.telega');
    }

    public function parts()
    {
        return view('user.products.parts');
    }

    public function p1pm2()
    {
        return view('user.products.p1pm2');
    }

    public function p1pna()
    {
        return view('user.products.p1pna');
    }

    public function p2r()
    {
        return view('user.products.p2r');
    }

    public function p2rn()
    {
        return view('user.products.p2rn');
    }

    public function rolgang()
    {
        return view('user.products.rolgang');
    }

    public function t001()
    {
        return view('user.products.t001');
    }

    public function t003()
    {
        return view('user.products.t003');
    }

    public function t004()
    {
        return view('user.products.t004');
    }

    public function tm2()
    {
        return view('user.products.tm2');
    }
}
