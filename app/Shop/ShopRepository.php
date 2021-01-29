<?php
    namespace App\Shop;

    use Illuminate\Http\Request;
    use Auth;
    use App\Shop\Shop;
    use App\Shop\ShopDayoff;

    class ShopRepository{

        public function __construct(Shop $shop, ShopDayoff $shopdayoff){
            $this->shop = $shop;
            $this->shopdayoff = $shopdayoff;
        }

        public function getAllShops(){

            $shops = $this->shop->get();

            return $shops;
        }

        public function getNewestShop(){
            $shop = $this->shop->orderBy('id', 'DESC')->first();

            return $shop;
        }

        public function getFirstShopByColumnName($column_name, $request){
            $shop = $this->shop->where($column_name, $request)->first();

            return $shop;
        }

        public function createShop(Request $request){

            $newshop = new Shop;
            $newshop->name = $request->name;
            $newshop->address = $request->address;
            $newshop->mail = $request->mail;
            $newshop->phone = $request->phone;
            $newshop->opentime = $request->opentime;
            $newshop->closetime = $request->closetime;
            $newshop->shoptype_id = $request->shoptype;
            $newshop->about = $request->about;

            $newshop->save();

            $newestshop = $this->getNewestShop();

            foreach ($request->dayoffs as $key => $dayoff) {
                $newshopdayoff = new ShopDayoff;

                $newshopdayoff->shop_id = $newestshop->id;
                $newshopdayoff->dayoff_id = $dayoff;

                $newshopdayoff->save();
            }

        }

        public function updateShop(Shop $shop,Request $request){
            $shop->name = $request->name;
            $shop->address = $request->address;
            $shop->mail = $request->mail;
            $shop->phone = $request->phone;
            $shop->opentime = $request->opentime;
            $shop->closetime = $request->closetime;
            $shop->shoptype_id = $request->shoptype;
            $shop->about = $request->about;
            $shop->save();

            $this->shopdayoff->where('shop_id', $shop->id)->delete();

            foreach ($request->dayoffs as $key => $dayoff) {
                $newshopdayoff = new ShopDayoff;

                $newshopdayoff->shop_id = $shop->id;
                $newshopdayoff->dayoff_id = $dayoff;

                $newshopdayoff->save();
            }

        }

        public function destroyShop(Shop $shop){
            $shop->delete();
        }
    }
