<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page\PageRepository;
use App\Product\ProductkategorieRepository;
use App\News\NewsRepository;
use App\Shop\ShopRepository;
use App\Product\ProductRepository;

class MoritaController extends Controller
{
    //
    public function __construct(PageRepository $page, ProductkategorieRepository $productkategorie, NewsRepository $news, ShopRepository $shop, ProductRepository $product)
    {
        $this->page = $page;
        $this->productkategorie = $productkategorie;
        $this->news = $news;
        $this->shop = $shop;
        $this->product = $product;
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

    public function menu($menu_id)
    {
        //for all page
        $page = $this->page->getPageById('2');
        $page->banner = $this->page->getNowBannerimage($page);
        $productkategories = $this->productkategorie->getAllProductkategories();
        $headshop = $this->shop->getFirstShopByColumnName('shoptype_id', '1');

        //menu
        $products = $this->product->getAllProductsOnsellOrderByDesc('updated_at');

        $limitproducts = $products->where('soldoutdate', '!=', '2119-12-31');

        foreach($productkategories as $productkategorie){
            $productkategorie->onsellproducts = $products->where('productkategorie_id', $productkategorie->id)->where('soldoutdate', '2119-12-31');
        }

        if($menu_id == 'all'){
            $select_productkategories = $productkategories;
        }elseif($menu_id == 'limit'){
            $select_productkategories = null;
        }else{
            $select_productkategories = $productkategories->where('id', $menu_id);
            $limitproducts = $limitproducts->where('productkategorie_id', $menu_id);
        }

        return view('morita.menu', compact('page', 'productkategories', 'headshop', 'limitproducts', 'select_productkategories'));
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
