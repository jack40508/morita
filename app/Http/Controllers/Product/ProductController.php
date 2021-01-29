<?php

namespace App\Http\Controllers\Product;

use App\Product\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product\ProductRepository;
use App\Product\ProductkategorieRepository;

class ProductController extends Controller
{
    public function __construct(ProductRepository $product, ProductkategorieRepository $productkategorie)
    {
        $this->middleware('auth');
        $this->product = $product;
        $this->productkategorie = $productkategorie;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = $this->product->getAllProductsOrderBy('productkategorie_id');
        $productkategories = $this->productkategorie->getAllProductkategories();

        return view("backside.product.index",compact('products', 'productkategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $productkategories = $this->productkategorie->getAllProductkategoriesList();

        return view("backside.product.create",compact('productkategories'));
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
        //dd($request->limit);
        $this->product->createNewProduct($request);

        return redirect('backside/product/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //

        return view("backside.product.show",compact('product'));
    }

    public function search(Request $request)
    {
        $products = $this->product->getSearchProducts($request);
        $productkategories = $this->productkategorie->getAllProductkategories();

        $search_name = $request->name;
        $search_productkategories = $request->check_productkategories;
        $search_status = $request->check_status;

        return view("backside.product.search",compact('products', 'productkategories', 'search_name', 'search_productkategories', 'search_status'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        $productkategories = $this->productkategorie->getAllProductkategoriesList();
        $product->description = str_replace('<br/>', "\r\n", $product->description);

        return view("backside.product.edit",compact('product', 'productkategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        $this->product->updateProduct($request, $product);

        return redirect('backside/product/'.$product->id);
    }

    public function update_issell(Request $request, $product_id)
    {
        //
        $product = $this->product->getProductById($product_id);
        $this->product->updateProductIsSell($request->is_sell, $product);

        if($request->from == 'edit'){
            return redirect('backside/product/'.$product->id);
        }else{
            return redirect()->back();
        }
    }

    public function update_selldate(Request $request, $product_id)
    {
        //
        $product = $this->product->getProductById($product_id);

        $this->product->updateProductSelldate($request->date_start, $request->date_end, $product);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
