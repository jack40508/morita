<?php

namespace App\Http\Controllers\News;

use App\News\Newskategorie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\News\NewskategorieRepository;

class NewskategorieController extends Controller
{
    public function __construct(NewskategorieRepository $newskategorie)
    {
        $this->middleware('auth');
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
        $newskategories = $this->newskategorie->getAllNewskategories();

        return view('backside.newskategorie.index', compact('newskategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Newskategorie  $newskategorie
     * @return \Illuminate\Http\Response
     */
    public function show(Newskategorie $newskategorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Newskategorie  $newskategorie
     * @return \Illuminate\Http\Response
     */
    public function edit(Newskategorie $newskategorie)
    {
        //
        return view("backside.newskategorie.edit",compact('newskategorie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Newskategorie  $newskategorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Newskategorie $newskategorie)
    {
        //
        $this->newskategorie->updateNewskategorie($newskategorie, $request);

        return redirect('backside/newskategorie/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Newskategorie  $newskategorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newskategorie $newskategorie)
    {
        //
        $this->newskategorie->destroyNewskategorie($newskategorie);

        return redirect('backside/newskategorie/');
    }
}
