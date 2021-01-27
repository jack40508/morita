<?php

namespace App\Http\Controllers\News;

use App\News\Newstag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News\NewstagRepository;

class NewstagController extends Controller
{
    public function __construct(NewstagRepository $newstag)
    {
        $this->middleware('auth');
        $this->newstag = $newstag;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $newstags = $this->newstag->getAllNewstags();

        return view('backside.newstag.index', compact('newstags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backside.newstag.create');
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
        $this->newstag->createNewNewstag($request);

        return redirect('backside/newstag/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Newstag  $newstag
     * @return \Illuminate\Http\Response
     */
    public function show(Newstag $newstag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Newstag  $newstag
     * @return \Illuminate\Http\Response
     */
    public function edit(Newstag $newstag)
    {
        //
        return view('backside.newstag.edit', compact('newstag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Newstag  $newstag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Newstag $newstag)
    {
        //
        $this->newstag->updateNewstag($request, $newstag);

        return redirect('backside/newstag/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Newstag  $newstag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newstag $newstag)
    {
        //
        $this->newstag->deleteNewstag($newstag);

        return redirect('backside/newstag/');
    }
}
