<?php
    namespace App\Product;

    use Illuminate\Http\Request;
    use Auth;
    use App\Product\Product;
    use App\Product\Productsize;

    class ProductRepository{

        public function __construct(Product $product, Productsize $productsize){
            $this->product = $product;
            $this->productsize = $productsize;
        }

        public function getAllProducts(){

            $products = $this->product->get();

            return $products;
        }

        public function getAllProductsOrderBy($column_name){
            $products = $this->product->orderBy($column_name)->get();

            return $products;
        }

        public function getProductById($id){
            $product = $this->product->where('id', $id)->first();

            return $product;
        }

        public function getNewestProduct(){
            $product = $this->product->orderBy('created_at', 'DESC')->first();

            return $product;
        }

        public function getLikeProductByKeyWithColumnName($column_name, $request){
            $products = $this->product->where($column_name, 'like', '%'.$request.'%')->get();

            return $products;
        }

        public function getSearchProducts($request){

            $products = $this->product->orderBy('productkategorie_id');

            if(!is_null($request->name)){
                $products = $products->where('name', 'like', '%'.$request->name.'%');
            }
    
            if(!is_null($request->check_productkategories)){
                
                $products = $products->where(function($query) use($request) {
                    foreach($request->check_productkategories as $key => $productkategorie){
                        if($key == 0){
                            $query->where('productkategorie_id', $productkategorie);
                        }
                        
                        else{
                            $query->orWhere('productkategorie_id', $productkategorie);
                        }
                        
                    }
                    
                });
            }

            if(!is_null($request->check_status)){
                
                $products = $products->where(function($query) use($request) {
                    foreach($request->check_status as $key => $status){
                        if($key == 0){
                            switch($status){
                                //通常販売
                                case 1:
                                    $query->where(function($q){
                                        $q->where('soldoutdate', '2119-12-31')->where('is_sell', true);
                                    });
                                    break;
                                
                                //期間限定
                                case 2:
                                    $query->where('soldoutdate', '!=', '2119-12-31');
                                    break;

                                //開催日待ち
                                case 3:
                                    $query->where('selldate', '>', date('Y-m-d'));
                                    break;

                                //販売中止
                                case 4:
                                    $query->where('is_sell', false);
                                    break;

                                //期間終了
                                case 5:
                                    $query->where('soldoutdate', '<', date('Y-m-d'));
                                    break;
                            }
                            
                        }
                        
                        else{
                            switch($status){
                                //通常販売
                                case 1:
                                    $query->orWhere(function($q){
                                        $q->where('soldoutdate', '2119-12-31')->where('is_sell', true);
                                    });
                                    break;
                                
                                //期間限定
                                case 2:
                                    $query->orWhere('soldoutdate', '!=', '2119-12-31');
                                    break;

                                //開催日待ち
                                case 3:
                                    $query->orWhere('selldate', '>', date('Y-m-d'));
                                    break;

                                //販売中止
                                case 4:
                                    $query->where('is_sell', false);
                                    break;

                                //期間終了
                                case 5:
                                    $query->orWhere('soldoutdate', '<', date('Y-m-d'));
                                    break;
                            }
                        }
                        
                    }
                    
                });
            }

            return $products->get();
        }

        public function createNewProduct($product){
            $newProduct = new Product;

            $newProduct->name = $product->name;
            $newProduct->productkategorie_id = $product->productkategories;

            if($product->limit){
                $newProduct->selldate = $product->date_start;
                $newProduct->soldoutdate = $product->date_end;
            }else{
                if(is_null($product->date_start)){
                    $newProduct->selldate = date('Y-m-d');
                }else{
                    $newProduct->selldate = $product->date_start;
                }
                $newProduct->soldoutdate = '2119-12-31';
            }

            $newProduct->save();

            $new_product_id = $this->getNewestProduct()->id;

            for($i=0; $i<count($product->size); $i++){
                $newProductsize = new Productsize;
                $newProductsize->product_id = $new_product_id;
                $newProductsize->size = $product->size[$i];
                $newProductsize->price = $product->price[$i];
                $newProductsize->save();
            }

            //Product Img Save
            $product_img_file = $product->product_img;
            $product_img_path = $product->product_img->path();
            $product_img_extension = $product->product_img->extension();
            $product_img_filename = 'product_'.$new_product_id.'.jpg';
            $product_img_upload_success = $product_img_file->move('img/product', $product_img_filename, $product_img_extension);
        }

        public function updateProduct($request, $product){
            $product->name = $request->name;
            $product->productkategorie_id = $request->productkategories;

            if($request->limit){
                $product->selldate = $request->date_start;
                $product->soldoutdate = $request->date_end;
            }else{
                if(is_null($request->date_start)){
                    $product->selldate = date('Y-m-d');
                }else{
                    $product->selldate = $request->date_start;
                }
                $product->soldoutdate = '2119-12-31';
            }

            if(count($request->size) == count($product->productsizes)){
                foreach($product->productsizes as $key => $productsize){
                    $productsize->size = $request->size[$key];
                    $productsize->price = $request->price[$key];
                    $productsize->save();
                }
            }else{
                foreach($product->productsizes as $productsize){
                    $productsize->delete();
                }

                for($i=0; $i<count($request->size); $i++){
                    $newProductsize = new Productsize;
                    $newProductsize->product_id = $product->id;
                    $newProductsize->size = $request->size[$i];
                    $newProductsize->price = $request->price[$i];
                    $newProductsize->save();
                }
            }
            
            if(!is_null($request->product_img)){
                //Product Img Save
                $product_img_file = $request->product_img;
                $product_img_path = $request->product_img->path();
                $product_img_extension = $request->product_img->extension();
                $product_img_filename = 'product_'.$product->id.'.jpg';
                $product_img_upload_success = $product_img_file->move('img/product', $product_img_filename, $product_img_extension);
            }

            $product->save();
        }

        public function updateProductIsSell($is_sell, $product){
            if($is_sell){
                $product->is_sell = true;
            }else{
                $product->is_sell = false;
            }

            $product->save();
        }

        public function updateProductSelldate($start, $end, $product){
            $product->selldate = $start;
            $product->soldoutdate = $end;

            $product->save();
        }
}
