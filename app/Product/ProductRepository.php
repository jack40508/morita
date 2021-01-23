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

            $product = $this->product->get();

            return $product;
        }

        public function createNewProduct($product){
            $newProduct = new Product;

            $newProduct->name = $product->name;
            $newProduct->productkategorie_id = $product->productkategories;

            if($product->limit){
                $newProduct->selldate = $product->date_start;
                $newProduct->soldoutdate = $product->date_end;
            }else{
                $newProduct->selldate = '1920-01-01';
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

        public function getNewestProduct(){
            $product = $this->product->orderBy('created_at', 'DESC')->first();

            return $product;
        }
}
