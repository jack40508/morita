<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoritaController extends Controller
{
    //
    public function home()
    {
        return view('morita.home');
    }

    public function menu()
    {
        return view('morita.menu.index');
    }

    public function menu＿show($menu_id)
    {
        return view('morita.menu.show');
    }

    public function news()
    {
        return view('morita.news.index');
    }

    public function news_show($news_id)
    {
        return view('morita.news.show');
    }
}
