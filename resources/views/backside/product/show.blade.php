@extends('backside.layouts.app')

@section('content')
    <h1 class="mb-3">商品詳細</h1>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-md-6">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <p>商品名</p>
                                </div>
                                <div class="col-md-8">
                                    <p>{{ $product->name }}</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <p>カテゴリー</p>
                                </div>
                                <div class="col-md-8">
                                    @if($product->productkategorie_id == -1)
                                        <p>未選択</p>
                                    @else
                                        <p>{{ $product->productkategorie->name }}</p>
                                    @endif
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <p>サイズ/価格</p>
                                </div>
                                <div class="col-md-8">
                                    @if($product->productsizes->count() == 1)
                                        @foreach($product->productsizes as $productsizes)
                                            <p>{{ $productsizes->price }}円</p>
                                        @endforeach
                                    @elseif($product->productsizes->count() > 1)
                                        @foreach($product->productsizes as $productsizes)
                                            <p>{{ $productsizes->size }} {{ $productsizes->price }}円</p>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <p>販売状態</p>
                                </div>
                                <div class="col-md-8">
                                    @if($product->is_sell)
                                        @if($product->soldoutdate != '2119-12-31')
                                            @if($product->selldate <= date('Y-m-d') && $product->soldoutdate >= date('Y-m-d'))
                                                <p><span class="badge badge-pill badge-danger mr-1" data-toggle="tooltip" data-placement="top" title="{{ $product->selldate }}~{{ $product->soldoutdate }}">期間限定</span>{{ $product->selldate }}~{{ $product->soldoutdate }}</p>
                                            @elseif($product->soldoutdate < date('Y-m-d'))
                                                <p><span class="badge badge-pill badge-secondary mr-1" data-toggle="tooltip" data-placement="top" title="{{ $product->selldate }}~{{ $product->soldoutdate }}">期間終了</span>{{ $product->selldate }}~{{ $product->soldoutdate }}</p>
                                            @elseif($product->selldate > date('Y-m-d'))
                                                <p><span class="badge badge-pill badge-warning mr-1" data-toggle="tooltip" data-placement="top" title="{{ $product->selldate }}~{{ $product->soldoutdate }}">開催日待ち</span>{{ $product->selldate }}~{{ $product->soldoutdate }}</p>
                                            @endif
                                        @else
                                            <p><span class="badge badge-pill badge-success mr-1">通常販売</span></p>
                                        @endif
                                    @else
                                        <p><span class="badge badge-pill badge-secondary mr-1">販売中止</span></p>
                                    @endif
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <p>説明</p>
                                </div>
                                <div class="col-md-8">
                                    <p>{!! $product->description !!}</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 md-12">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <p>商品画像</p>
                            <img src="/img/product/product_{{ $product->id }}.jpg" alt="product_img" class="product-img">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-md-end mt-3 justify-content-around">
        <div class="col-5 col-md-2">
            <a href="{{ $product->id }}/edit" class="btn btn-success mt-1 mt-md-0 w-100" role="button" aria-pressed="true">編集</a>
        </div>
        <div class="col-5 col-md-2 offset-1 offset-md-0">
            <a href="/backside/product" class="btn btn-secondary mt-1 mt-md-0 w-100" role="button" aria-pressed="true">戻る</a>
        </div>
    </div>
@endsection
