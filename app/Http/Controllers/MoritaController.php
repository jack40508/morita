<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page\PageRepository;
use App\Product\ProductkategorieRepository;
use App\News\NewsRepository;
use App\News\NewskategorieRepository;
use App\News\NewstagRepository;
use App\Shop\ShopRepository;
use App\Product\ProductRepository;

class MoritaController extends Controller
{
    //
    public function __construct(PageRepository $page, ProductkategorieRepository $productkategorie, NewsRepository $news, NewskategorieRepository $newskategorie, NewstagRepository $newstag, ShopRepository $shop, ProductRepository $product)
    {
        $this->page = $page;
        $this->productkategorie = $productkategorie;
        $this->news = $news;
        $this->newskategorie = $newskategorie;
        $this->newstag = $newstag;
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

        //news
        $news = $this->news->getAllOpenNews();
        $newskategories = $this->newskategorie->getAllNewskategories();
        $cnt_all_news = $this->news->getAllOpenNews()->count();

        foreach($news as $inews){
            $inews->image = $inews->newsimages->first();
        }

        return view('morita.news.index', compact('page', 'productkategories', 'headshop', 'news', 'newskategories', 'cnt_all_news'));
    }

    public function news_show($news_id)
    {
        //for all page
        $page = $this->page->getPageById('3');
        $page->banner = $this->page->getNowBannerimage($page);
        $productkategories = $this->productkategorie->getAllProductkategories();
        $headshop = $this->shop->getFirstShopByColumnName('shoptype_id', '1');

        //news
        $news = $this->news->getNewsById($news_id);
        $newskategories = $this->newskategorie->getAllNewskategories();
        $cnt_all_news = $this->news->getAllOpenNews()->count();

        return view('morita.news.show', compact('page', 'productkategories', 'headshop', 'news', 'newskategories', 'cnt_all_news'));
    }

    public function news_search($search, $key)
    {
        //for all page
        $page = $this->page->getPageById('3');
        $page->banner = $this->page->getNowBannerimage($page);
        $productkategories = $this->productkategorie->getAllProductkategories();
        $headshop = $this->shop->getFirstShopByColumnName('shoptype_id', '1');

        //search
        switch($search){
            case 'category':
                $news = $this->newskategorie->getKategorieById($key)->open_news;
                $target = $this->newskategorie->getKategorieById($key);
                break;

            case 'tag':
                $news = $this->newstag->getNewstagById($key)->open_news;
                $target = $this->newstag->getNewstagById($key);
                break;

            case 'date':
                $news = $this->news->getOpenNewsByUploadAt(str_replace("-", "/", $key));
                $target = new Request();
                $target->name = str_replace("-", "/", $key);
                break;
            default:
                return redirect('news/');
                break;
        }

        //news
        $newskategories = $this->newskategorie->getAllNewskategories();
        foreach($news as $inews){
            $inews->image = $inews->newsimages->first();
        }
        $cnt_all_news = $this->news->getAllOpenNews()->count();

        return view('morita.news.index', compact('page', 'productkategories', 'headshop', 'news', 'newskategories', 'search', 'key', 'target', 'cnt_all_news'));
    }

    public function news_page($page_id)
    {
        $news = $this->news->getAllOpenNews();

        foreach($news as $inews){
            $inews->image = $inews->newsimages->first();
        }

        return view('morita.news.layouts.news_list', compact('page_id', 'news'));
    }

    public function news_search_page($search, $key, $page_id){
        //search
        switch($search){
            case 'category':
                $news = $this->newskategorie->getKategorieById($key)->open_news;
                $target = $this->newskategorie->getKategorieById($key);
                break;

            case 'tag':
                $news = $this->newstag->getNewstagById($key)->open_news;
                $target = $this->newstag->getNewstagById($key);
                break;

            case 'date':
                $news = $this->news->getOpenNewsByUploadAt(str_replace("-", "/", $key));
                $target = new Request();
                $target->name = str_replace("-", "/", $key);
                break;
            default:
                return redirect('news/');
                break;
        }

        //news
        $newskategories = $this->newskategorie->getAllNewskategories();
        foreach($news as $inews){
            $inews->image = $inews->newsimages->first();
        }

        return view('morita.news.layouts.news_list', compact('news', 'search', 'key', 'page_id'));
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
