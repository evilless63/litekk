<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Settings;
use App\Tagsarticle;
use Str;

class ArticleController extends Controller
{

    private $path;

    public function __construct()
    {
        $path = 'images/articles/';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('admin.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.articles.create')->with(['tags' => Tagsarticle::all()]);
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
            'image' => 'required|mimes:jpeg,png'
        ]);

        try {
            $article = new Article();
            $_IMAGE = $request->file('image');
            $filename = $this->regexpImages(str_replace('"', '', time() . $_IMAGE->getClientOriginalName()));
            $uploadPath = 'images/articles';
            $_IMAGE->move($uploadPath, str_replace('"', '', $filename));
            $data = $request->all();
            $data['slug'] = Str::slug(transliterate($data['header']), '-');
            $data['image'] = $filename;



            $articlecreated = $article->create($data);

            $tags = array_filter(explode(",", $data['tags']), fn($value) => !is_null($value) && $value !== '');

            foreach ($tags as &$tag) {
                $tag = "#" . trim(preg_replace('/[^a-zA-Z0-9а-яА-Я]/iu', '', $tag));
            }

            unset($tag);
            
            $tags = array_unique($tags);

            foreach($tags as &$tag) {
                try {
                    $tagarticle = Tagsarticle::where('tagname', $tag)->first();

                    if ($tagarticle == null) {
                        $tagarticle = new Tagsarticle();
                        $tagarticle->tagname = $tag;
                        $tagarticlecreated = $tagarticle->create(['tagname' => $tag]);
                    } else {
                        $tagarticlecreated = $tagarticle;
                    }

                    $articlecreated->tagsarticles()->attach($tagarticlecreated);
                } catch (Exception $e) {
                }

                unset($tag);
            }

            return redirect()->route('article.index')->withSuccess('Запись успешно добавлена!');
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
    public function edit(Article $article)
    {
        return view('admin.articles.edit')->with(['article' => $article, 'tags' => Tagsarticle::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
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

            $article->update($data);
            $article->tagsarticles()->detach();

            $tags = array_filter(explode(",", $data['tags']), fn($value) => !is_null($value) && $value !== '');

            foreach ($tags as &$tag) {
                $tag = "#" . trim(preg_replace('/[^a-zA-Z0-9а-яА-Я]/iu', '', $tag));
            }
            unset($tag);

            $tags = array_unique($tags);

            foreach($tags as &$tag) {
                try {
                    $tagarticle = Tagsarticle::where('tagname', $tag)->first();

                    if ($tagarticle == null) {
                        $tagarticle = new Tagsarticle();
                        $tagarticle->tagname = $tag;
                        $tagarticlecreated = $tagarticle->create(['tagname' => $tag]);
                    } else {
                        $tagarticlecreated = $tagarticle;
                    }

                    $article->tagsarticles()->attach($tagarticlecreated);
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
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('article.index')->withSuccess('Запись успешно удалена!');
    }

    private function regexpImages($imageName)
    {
        return preg_replace("/[^A-Za-z\d\.]/", '', transliterate($imageName));
    }
}
