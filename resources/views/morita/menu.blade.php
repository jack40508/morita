@extends('morita.layouts.app')

@section('content')

    <div class="row justify-content-center">
        @if(count($limitproducts) > 0)
            <div class="col-md-10 menu-list animate_fade-in">
                <div class="row">
                    <div class="col-md-8">
                        <h2>期間限定</h2>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    @foreach($limitproducts as $product)
                        <div class="col-md-3">
                            <div class="card card-product">
                                <div class="col-8 col-md-10">
                                    <img class="card-img-product" src="/img/product/product_{{ $product->id }}.jpg" alt="Card image cap">
                                </div>
                                <div class="col-12 text-center">
                                    <h4 class="card-product-name mt-3">{{ $product->name }}</h4>
                                </div>
                                <div class="col-12 text-right">
                                    <h5>～{{date('m-d',strtotime($product->soldoutdate))}}</h5>
                                    <h5>￥{{ $product->productsizes[0]->price }}</h5>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-card-product-detail mb-3" data-toggle="modal" data-target="#productModalCenter{{ $product->id }}">
                                        More
                                    </button>
                                    @include('morita.layouts.modal_product_detail')
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>

    @if(!is_null($select_productkategories))
    <div class="row justify-content-center">
        @foreach($select_productkategories as $select_productkategorie)
            <div class="col-md-10 menu-list animate_fade-in">
                <div class="row">
                    <div class="col-md-8">
                        <h2>{{ $select_productkategorie->name }}</h2>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    @foreach($select_productkategorie->onsellproducts as $product)
                        <div class="col-md-3">
                            <div class="card card-product">
                                <div class="col-8 col-md-10">
                                    <img class="card-img-product" src="/img/product/product_{{ $product->id }}.jpg" alt="Card image cap">
                                </div>
                                <div class="col-12 text-center">
                                    <h4 class="card-product-name mt-3">{{ $product->name }}</h4>
                                </div>
                                <div class="col-12 text-right">
                                    <h5>￥{{ $product->productsizes[0]->price }}</h5>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-card-product-detail mb-3" data-toggle="modal" data-target="#productModalCenter{{ $product->id }}">
                                        More
                                    </button>
                                    @include('morita.layouts.modal_product_detail')
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            @endforeach
    </div>
    @endif
@endsection
