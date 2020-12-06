<?php

namespace App\Http\Controllers\Shop;

use App\Shop\Shop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Shop\ShopRepository;
use App\Shop\ShoptypeRepository;
use App\Shop\DayoffRepository;

class ShopController extends Controller
{
    public function __construct(ShopRepository $shop, ShoptypeRepository $shoptype, DayoffRepository $dayoff)
    {
        $this->middleware('auth');
        $this->shop = $shop;
        $this->shoptype = $shoptype;
        $this->dayoff = $dayoff;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $shops = $this->shop->getAllShops();

        return view('backside.shop.index',compact('shops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $shoptypes = $this->shoptype->getAllShoptypes();
        $dayoffs = $this->dayoff->getAllDayoffs();

        return view('backside.shop.create',compact('shoptypes','dayoffs'));
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
        $this->shop->createShop($request);

        return redirect('backside/shop/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function show(Shop $shop)
    {
        //

        return view('backside.shop.show',compact('shop'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function edit(Shop $shop)
    {
        //
        $shoptypes = $this->shoptype->getAllShoptypes();
        $dayoffs = $this->dayoff->getAllDayoffs();




        foreach($dayoffs as $dayoff){
          $dayoff_check[$dayoff->id] = false;
          foreach($shop->dayoffs as $shopdayoff){
            if($dayoff->id == $shopdayoff->id){
              $dayoff_check[$dayoff->id] = true;
            }
          }
        }

        //dd($dayoff_check);
        return view('backside.shop.edit',compact('shop','shoptypes','dayoffs','dayoff_check'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shop $shop)
    {
        //
        $this->shop->updateShop($shop, $request);

        return redirect('backside/shop/'.$shop->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shop $shop)
    {
        //
        $this->shop->destroyShop($shop);

        return redirect('backside/shop/');
    }
}
