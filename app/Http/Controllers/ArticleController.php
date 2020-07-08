<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Settings;

class ArticleController extends Controller
{

    private $path;

    public function __construct() {
        $path = 'images/articles/';
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.articles.index', compact(Article::all()));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.articles.create');
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
            'header' => 'required|unique:articles.header',
            'description' => 'required',
            'text' => 'required',
            'image' => 'required|dimensions:min_width=500,min_height=300|mimes:jpeg,png'
        ]);

        try {
            $article = new Article();
            $fileName = pathinfo($request->file('image')->getClientOriginalName(), PATHINFO_FILENAME);
            $fullFileName = $fileName."-".time().$request->file('image')->getClientOriginalExtension();
            $filepath = $request->file('image')->store($path, $fullFileName);
            $data = $request->all();
            $data['image'] = $filepath;
            $article->create($data);

            return redirect()->route('article.index');
        } catch(Exception $e) {
            return redirect()->back()->withError('Не удалось записать ! Обратитесь в техническую поддержку для решения проблемы');
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
    public function edit($id)
    {
        return view('admin.articles.edit')->with(['article' => $id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        try {
            $article = new Article();
            $data = $request->all();
            if($request->hasFile('image')) {
                $filepath = $request->file('image')->store($path);
                $data['image'] = $filepath;
            }          
            $id->update($data);
        } catch(Exception $e) {
            return redirect()->back()->withError('Не удалось записать ! Обратитесь в техническую поддержку для решения проблемы');
        }
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id->delete();
    }
}
