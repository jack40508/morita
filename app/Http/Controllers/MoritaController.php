<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page\PageRepository;
use App\Product\ProductkategorieRepository;
use App\News\NewsRepository;
use App\Shop\ShopRepository;

class MoritaController extends Controller
{
    //
    public function __construct(PageRepository $page, ProductkategorieRepository $productkategorie, NewsRepository $news, ShopRepository $shop)
    {
        $this->page = $page;
        $this->productkategorie = $productkategorie;
        $this->news = $news;
        $this->shop = $shop;
    }

    public function home()
    {
        //for all page
        $page = $this->page->getPageById('1');
        $page->banner = $this->page->getNowBannerimage($page);
        $productkategories = $this->productkategorie->getAllProductkategories();
        $headshop = $this->shop->getFirstShopByColumnName('shoptype_id', '1');

        //home
        $news = $this->news->getFrontNewestNewsOfOpen('3');

        foreach($news as $inews){
            $inews->image = $inews->newsimages->first();
        }

        $week = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');

        return view('morita.home', compact('page', 'productkategories', 'headshop', 'news', 'week'));
    }

    public function menu()
    {
        //for all page
        $page = $this->page->getPageById('2');
        $page->banner = $this->page->getNowBannerimage($page);
        $productkategories = $this->productkategorie->getAllProductkategories();
        $headshop = $this->shop->getFirstShopByColumnName('shoptype_id', '1');

        return view('morita.menu.index', compact('page', 'productkategories'));
    }

    public function menu_show($menu_id)
    {
        //for all page
        $page = $this->page->getPageById('2');
        $page->banner = $this->page->getNowBannerimage($page);
        $productkategories = $this->productkategorie->getAllProductkategories();
        $headshop = $this->shop->getFirstShopByColumnName('shoptype_id', '1');

        return view('morita.menu.show', compact('page', 'productkategories', 'headshop'));
    }

    public function news()
    {
        //for all page
        $page = $this->page->getPageById('3');
        $page->banner = $this->page->getNowBannerimage($page);
        $productkategories = $this->productkategorie->getAllProductkategories();
        $headshop = $this->shop->getFirstShopByColumnName('shoptype_id', '1');

        return view('morita.news.index', compact('page', 'productkategories', 'headshop'));
    }

    public function news_show($news_id)
    {
        //for all page
        $page = $this->page->getPageById('3');
        $page->banner = $this->page->getNowBannerimage($page);
        $productkategories = $this->productkategorie->getAllProductkategories();
        $headshop = $this->shop->getFirstShopByColumnName('shoptype_id', '1');

        return view('morita.news.show', compact('page', 'productkategories', 'headshop'));
    }

    public function consept()
    {
        //for all page
        $page = $this->page->getPageById('4');
        $page->banner = $this->page->getNowBannerimage($page);
        $productkategories = $this->productkategorie->getAllProductkategories();
        $headshop = $this->shop->getFirstShopByColumnName('shoptype_id', '1');

        return view('morita.consept', compact('page', 'productkategories', 'headshop'));
    }

    public function access()
    {
        //for all page
        $page = $this->page->getPageById('5');
        $page->banner = $this->page->getNowBannerimage($page);
        $productkategories = $this->productkategorie->getAllProductkategories();
        $headshop = $this->shop->getFirstShopByColumnName('shoptype_id', '1');

        //shop
        $shops = $this->shop->getAllShops();

        return view('morita.access', compact('page', 'productkategories', 'headshop', 'shops'));
    }
}
