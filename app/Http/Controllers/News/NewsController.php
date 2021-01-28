<?php

namespace App\Http\Controllers\News;

use App\News\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News\NewsRepository;
use App\News\NewstagRepository;
use App\News\NewskategorieRepository;

class NewsController extends Controller
{
    public function __construct(NewsRepository $news, NewstagRepository $newstag, NewskategorieRepository $newskategorie)
    {
        $this->middleware('auth');
        $this->news = $news;
        $this->newstag = $newstag;
        $this->newskategorie = $newskategorie;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $news = $this->news->getAllNews();

        return view('backside.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $newstags = $this->newstag->getAllNewstags();
        $newskategories = $this->newskategorie->getAllNewskategoriesList();

        return view('backside.news.create', compact('newstags', 'newskategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->news->createNewNews($request);

        return redirect('backside/news/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
        return view('backside.news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //
        $newstags = $this->newstag->getAllNewstags();
        $newskategories = $this->newskategorie->getAllNewskategoriesList();

        $news->content = str_replace('<br/>', "\r\n", $news->content);
        $news->upload_at = str_replace(' ', "T", $news->upload_at);

        return view('backside.news.edit', compact('news', 'newstags', 'newskategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        //
        $this->news->updateNews($request, $news);

        return redirect('backside/news/'.$news->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, News $news)
    {
        //
        $this->news->changePermission($news);

        if($request->from == 'edit'){
            return redirect('backside/news/'.$news->id);
        }else{
            return redirect()->back();
        }
    }
}
