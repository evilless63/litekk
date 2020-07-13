<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\TagsNews;
use App\CategoriesNews;
use Str;

class NewController extends Controller
{

    public function __construct()
    {
        $path = 'images/news/';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create')->with([
            'tags' => TagsNews::all(),
            'categories' => CategoriesNews::all(),
        ]);
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
            'header' => 'required|unique:articles,header',
            'description' => 'required',
            'text' => 'required',
            'catigoriesnews_id' => 'required',
            'image' => 'required|mimes:jpeg,png',
        ]);

        try {
            $news = new News();
            $_IMAGE = $request->file('image');
            $filename = $this->regexpImages(str_replace('"', '', time() . $_IMAGE->getClientOriginalName()));
            $uploadPath = 'images/news';
            $_IMAGE->move($uploadPath, str_replace('"', '', $filename));
            $data = $request->all();
            $data['slug'] = Str::slug(transliterate($data['header']), '-');
            $data['image'] = $filename;

            $newsCreated = $news->create($data);

            $tags = array_filter(explode(",", $data['tags']), fn($value) => !is_null($value) && $value !== '');

            foreach ($tags as &$tag) {
                $tag = "#" . trim(preg_replace('/[^a-zA-Z0-9а-яА-Я]/iu', '', $tag));
            }

            unset($tag);

            $tags = array_unique($tags);

            foreach ($tags as &$tag) {
                try {
                    $newsTag = TagsNews::where('tagname', $tag)->first();

                    if ($newsTag == null) {
                        $newsTag = new TagsNews();
                        $newsTag->tagname = $tag;
                        $newsTagCreated = $newsTag->create(['tagname' => $tag]);
                    } else {
                        $newsTagCreated = $newsTag;
                    }

                    $newsCreated->tagsarticles()->attach($newsTagCreated);
                } catch (Exception $e) {
                }

                unset($tag);
            }

            return redirect()->route('news.index')->withSuccess('Запись успешно добавлена!');
        } catch (Exception $e) {
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
    public function edit(News $news)
    {
        return view('admin.news.edit')->with(
            [
                'news' => $news,
                'tags' => TagsNews::all(),
                'categories' => CategoriesNews::all(),
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        try {
            $data = $request->all();
            if ($request->hasFile('image')) {
                $_IMAGE = $request->file('image');
                $filename = $this->regexpImages(str_replace('"', '', time() . $_IMAGE->getClientOriginalName()));
                $uploadPath = 'images/articles';
                $_IMAGE->move($uploadPath, str_replace('"', '', $filename));
                $data['image'] = $filename;
            }
            $data['slug'] = Str::slug(transliterate($data['header']), '-');
            $news->update($data);
            $news->tagsarticles()->detach();

            $tags = array_filter(explode(",", $data['tags']), fn($value) => !is_null($value) && $value !== '');

            foreach ($tags as &$tag) {
                $tag = "#" . trim(preg_replace('/[^a-zA-Z0-9а-яА-Я]/iu', '', $tag));
            }
            unset($tag);

            $tags = array_unique($tags);

            foreach ($tags as &$tag) {
                try {
                    $newsTag = TagsNews::where('tagname', $tag)->first();

                    if ($newsTag == null) {
                        $newsTag = new TagsNews();
                        $newsTag->tagname = $tag;
                        $newsTagCreated = $newsTag->create(['tagname' => $tag]);
                    } else {
                        $newsTagCreated = $newsTag;
                    }

                    $news->tagsarticles()->attach($newsTagCreated);
                } catch (Exception $e) {
                }

                unset($tag);
            }

            return redirect()->back()->withSuccess('Запись успешно изменена!');
        } catch (Exception $e) {
            return redirect()->back()->withError('Не удалось записать! Обратитесь в техническую поддержку для решения проблемы');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->route('news.index')->withSuccess('Запись успешно удалена!');
    }
    
}
