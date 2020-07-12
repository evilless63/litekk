<?php

namespace App\Http\Controllers;

use App\CategoriesArticle;
use Illuminate\Http\Request;
use Str;

class CategoriesArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = CategoriesArticle::all();
        return view('admin.categoriesarticle.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categoriesarticle.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|unique:categories_articles,title',
        ]);

        try {
            $data = $request->all();
            $data['slug'] = Str::slug(transliterate($data['title']), '-');
            $category = new CategoriesArticle();
            $category->create($data);
            return redirect()->route('categoryArticle.index')->withSuccess('Запись успешно добавлена!');
        } catch (Extention $e) {
            return redirect()->back()->withError('Не удалось записать! Обратитесь в техническую поддержку для решения проблемы');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoriesArticle $categoriesarticle)
    {
        return view('admin.categoriesarticle.create')->with(['category' => $categoriesarticle]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoriesArticle $categoriesarticle)
    {
        $request->validate([
            'title' => 'required|unique:categories_articles,title',
        ]);

        try {
            $data = $request->all();
            $data['slug'] = Str::slug(transliterate($data['title']), '-');
            $category = new CategoriesArticle();
            $category->update($data);
            return redirect()->back()->withSuccess('Запись успешно изменена!');
        } catch (Extention $e) {
            return redirect()->back()->withError('Не удалось записать! Обратитесь в техническую поддержку для решения проблемы');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoriesArticle $categoriesarticle)
    {
        $categoriesarticle->delete();
        return redirect()->route('categoryArticle.index')->withSuccess('Запись успешно удалена!');
    }
}
