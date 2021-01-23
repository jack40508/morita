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
        $products = $this->product->getAllProducts();
        
        return view("backside.product.index",compact('products'));
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
