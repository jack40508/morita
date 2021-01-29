<?php

namespace App\Http\Controllers\Page;

use App\Page\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Page\PageRepository;
use App\Page\BannerimageRepository;

class PageController extends Controller
{
    public function __construct(PageRepository $page, BannerimageRepository $bannerimage)
    {
        $this->middleware('auth');
        $this->page = $page;
        $this->bannerimage = $bannerimage;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pages = $this->page->getAllPages();
        $bannerimages = $this->bannerimage->getAllBannerimages();

        foreach($pages as $page){
            $page->now_bannerimage = $this->page->getNowBannerimage($page);
        }

        return view('backside.page.index', compact('pages', 'bannerimages'));
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
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
        $page->now_bannerimage = $this->page->getNowBannerimage($page);
        $page->basic_bannerimage = $this->page->getBasicBannerimage($page);
        $page->reserve_bannerimages = $this->page->getReserveBannerimage($page);

        return view('backside.page.show', compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        //
    }

    public function changebanner(Request $request, $page_id)
    {
        //
        $page = $this->page->getPageByID($page_id);

        $this->page->createNewPageBannerimage($request, $page);

        return redirect('backside/page/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        //
    }

    public function destroy_reserve($page_id, $reserve_id)
    {
        $this->page->deleteReserve($reserve_id);

        return redirect('backside/page/'.$page_id);
    }
}
