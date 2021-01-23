<?php

namespace App\Http\Controllers\Product;

use App\Product\Productkategorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product\ProductkategorieRepository;

class ProductkategorieController extends Controller
{
    public function __construct(ProductkategorieRepository $productkategorie)
    {
        $this->middleware('auth');
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
        $productkategories = $this->productkategorie->getAllProductkategories();

        return view("backside.productkategorie.index",compact('productkategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("backside.productkategorie.create");
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
        $this->productkategorie->createProductkategorie($request);

        return redirect('backside/productkategorie/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Productkategorie  $productkategorie
     * @return \Illuminate\Http\Response
     */
    public function show(Productkategorie $productkategorie)
    {
        //

        return view("backside.productkategorie.show",compact('productkategorie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Productkategorie  $productkategorie
     * @return \Illuminate\Http\Response
     */
    public function edit(Productkategorie $productkategorie)
    {
        //
        return view("backside.productkategorie.edit",compact('productkategorie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Productkategorie  $productkategorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Productkategorie $productkategorie)
    {
        //
        $this->productkategorie->updateProductkategorie($productkategorie, $request);

        return redirect('backside/productkategorie/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Productkategorie  $productkategorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productkategorie $productkategorie)
    {
        //
        $this->productkategorie->destroyProductkategorie($productkategorie);

        return redirect('backside/productkategorie/');
    }
}
