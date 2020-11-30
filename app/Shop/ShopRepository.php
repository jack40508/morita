<?php
    namespace App\Shop;

    use Illuminate\Http\Request;
    use Auth;
    use App\Shop\Shop;
    
class ShopRepository{
    
    public function __construct(Shop $shop){
        $this->shop = $shop;
    }

    public function getAllShops(){

        $shops = $this->shop->get();

        return $shops;
    }
}