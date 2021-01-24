@extends('backside.layouts.app')

@section('content')
    <h1 class="mb-3">{{ $productkategorie->name }}の商品一覧</h1>

    <table class="table mt-3">
        <thead class="thead-dark">
            <tr>
                <th scope="col">商品名</th>
                <th scope="col">値段</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($productkategorie->products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td nowrap="nowrap">
                        @if($product->productsizes->count() == 1)
                            @foreach($product->productsizes as $productsizes)
                                <p>{{ $productsizes->price }}円</p>
                            @endforeach
                        @elseif($product->productsizes->count() > 1)
                            @foreach($product->productsizes as $productsizes)
                                <p>{{ $productsizes->size }}　{{ $productsizes->price }}円</p>
                            @endforeach
                        @endif
                    </td>
                    <td>
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
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
