<?php

namespace App\Http\Controllers;

use App\CategoriesNews;
use Illuminate\Http\Request;
use Str;

class CategoriesNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = CategoriesNews::all();
        return view('admin.categoriesnews.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categoriesnews.create');
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
            'title' => 'required|unique:categories_news,title',
        ]);

        try {
            $data = $request->all();
            $data['slug'] = Str::slug(transliterate($data['title']), '-');
            $category = new CategoriesNews();
            $category->create($data);
            return redirect()->route('categoryNews.index')->withSuccess('Запись успешно добавлена!');
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
    public function edit(CategoriesNews $categoriesnews)
    {
        return view('admin.categoriesnews.create')->with(['category' => $categoriesnews]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoriesNews $categoriesnews)
    {
        $request->validate([
            'title' => 'required|unique:categories_articles,title',
        ]);

        try {
            $data = $request->all();
            $data['slug'] = Str::slug(transliterate($data['title']), '-');
            $categoriesnews->update($data);
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
    public function destroy(CategoriesNews $categoriesnews)
    {
        $categoriesnews->delete();
        return redirect()->route('categoryNews.index')->withSuccess('Запись успешно удалена!');
    }
}
