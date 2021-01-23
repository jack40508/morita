<?php
    namespace App\Product;

    use Illuminate\Http\Request;
    use Auth;
    use App\Product\Productkategorie;

    class ProductkategorieRepository{

        public function __construct(Productkategorie $productkategorie){
            $this->productkategorie = $productkategorie;
        }

        public function getAllProductkategories(){

            $productkategories = $this->productkategorie->get();

            return $productkategories;
        }

        public function getAllProductkategoriesList(){

            $productkategories = $this->productkategorie->pluck('name', 'id');

            return $productkategories;
        }

        public function createProductkategorie(Request $request){

            $newproductkategorie = new Productkategorie;

            $newproductkategorie->name = $request->name;
            $newproductkategorie->save();
        }

        public function updateProductkategorie(Productkategorie $productkategorie,Request $request){

            $productkategorie->name = $request->name;
            $productkategorie->save();
        }

        public function destroyProductkategorie(Productkategorie $productkategorie){
            $products = $productkategorie->products;
            foreach($products as $product){
                $product->productkategorie_id = -1;
                $product->save();
            }

            $productkategorie->delete();
        }

}
