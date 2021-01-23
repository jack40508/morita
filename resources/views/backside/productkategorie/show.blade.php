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
                    <td>
                        @if($product->productsizes->count() == 1)
                            @foreach($product->productsizes as $productsizes)
                                <p>{{ $productsizes->price }}</p>
                            @endforeach
                        @elseif($product->productsizes->count() > 1)
                            @foreach($product->productsizes as $productsizes)
                                <p>{{ $productsizes->size }} {{ $productsizes->price }}</p>
                            @endforeach
                        @endif
                    </td>
                    @if($product->selldate != '1920-01-01' && $product->soldoutdate != '2119-12-31')
                    <td class="text-center">
                        <span class="badge badge-pill badge-danger mr-1">期間限定</span>
                        {{ $product->selldate }}~{{ $product->soldoutdate }}
                    </td>
                    @else
                    <td></td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
