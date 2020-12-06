<?php
    namespace App\Shop;

    use Illuminate\Http\Request;
    use Auth;
    use App\Shop\Shoptype;

    class ShoptypeRepository{

        public function __construct(Shoptype $shoptype){
            $this->shoptype = $shoptype;
        }

        public function getAllShoptypes(){

            $shoptypes = $this->shoptype->get()->pluck('name', 'id');

            return $shoptypes;
        }

    }
