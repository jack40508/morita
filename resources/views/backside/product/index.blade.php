@extends('backside.layouts.app')

@section('content')
    <h1>商品管理</h1>

    <div class="text-right">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#productsearchModal">
        商品検索
        </button>

        @include('backside.product.layouts.modal_search')

        <a href="/backside/product/create" class="btn btn-primary ml-3" role="button" aria-pressed="true">商品追加</a>
    </div>

    <table class="table mt-3">
        <thead class="thead-dark">
            <tr>
                <th scope="col">商品名</th>
                <th scope="col" class="d-none d-md-table-cell">カテゴリー</th>
                <th scope="col" class="d-none d-md-table-cell">状態</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td class="d-none d-md-table-cell">
                        @if($product->productkategorie_id == -1)
                            未選択
                        @else
                            {{ $product->productkategorie->name }}
                        @endif
                    </td>
                    <td class="d-none d-md-table-cell">
                        @if($product->is_sell)
                            @if($product->soldoutdate != '2119-12-31')
                                @if($product->selldate <= date('Y-m-d') && $product->soldoutdate >= date('Y-m-d'))
                                    <h4><span class="badge badge-pill badge-danger mr-1" data-toggle="tooltip" data-placement="top" title="{{ $product->selldate }}~{{ $product->soldoutdate }}">期間限定</span></h4>
                                @elseif($product->soldoutdate < date('Y-m-d'))
                                    <h4><span class="badge badge-pill badge-secondary mr-1" data-toggle="tooltip" data-placement="top" title="{{ $product->selldate }}~{{ $product->soldoutdate }}">期間終了</span></h4>
                                @elseif($product->selldate > date('Y-m-d'))
                                    <h4><span class="badge badge-pill badge-warning mr-1" data-toggle="tooltip" data-placement="top" title="{{ $product->selldate }}~{{ $product->soldoutdate }}">開催日待ち</span></h4>
                                @endif
                            @else
                                @if($product->selldate > date('Y-m-d'))
                                    <h4><span class="badge badge-pill badge-warning mr-1" data-toggle="tooltip" data-placement="top" title="{{ $product->selldate }}~{{ $product->soldoutdate }}">開催日待ち</span></h4>
                                @endif
                            @endif
                        @else
                            <h4><span class="badge badge-pill badge-secondary mr-1">販売中止</span></h4>
                        @endif
                    </td>
                    <td>
                        <div class="row justify-content-end">
                            <div class="col-md-4">
                                <a href="/backside/product/{{ $product->id }}" class="btn btn-info mt-1 mt-md-0 w-100" role="button" aria-pressed="true">詳細</a>
                            </div>
                            <div class="col-md-4">
                                <a href="/backside/product/{{ $product->id }}/edit" class="btn btn-success mt-1 mt-md-0 w-100" role="button" aria-pressed="true">編集</a>
                            </div>
                            <div class="col-md-3">
                                @php
                                    $from = "index"
                                @endphp
                                @if($product->is_sell)
                                    @if($product->soldoutdate != '2119-12-31')
                                        @if($product->selldate <= date('Y-m-d') && $product->soldoutdate >= date('Y-m-d'))
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-warning mt-1 mt-md-0 w-100" data-toggle="modal" data-target="#sellDateUpdateModal{{ $product->id }}">
                                                変更
                                            </button>
                                            <!-- Modal -->
                                            @include('backside.product.layouts.modal_reset_selldate')
                                        @elseif($product->soldoutdate < date('Y-m-d'))
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-warning mt-1 mt-md-0 w-100" data-toggle="modal" data-target="#sellDateUpdateModal{{ $product->id }}">
                                                再開
                                            </button>

                                            <!-- Modal -->
                                            @include('backside.product.layouts.modal_reset_selldate')
                                        @elseif($product->selldate > date('Y-m-d'))
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-warning mt-1 mt-md-0 w-100" data-toggle="modal" data-target="#sellDateUpdateModal{{ $product->id }}">
                                                変更
                                            </button>
                                            <!-- Modal -->
                                            @include('backside.product.layouts.modal_reset_selldate')
                                        @endif
                                    @else
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-danger mt-1 mt-md-0 w-100" data-toggle="modal" data-target="#isSellUpdateModal{{ $product->id }}">
                                            中止
                                        </button>

                                        <!-- Modal -->
                                        @include('backside.product.layouts.modal_stop_sell')
                                    @endif

                                @else
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary mt-1 mt-md-0 w-100" data-toggle="modal" data-target="#isSellUpdateModal{{ $product->id }}">
                                        発売
                                    </button>

                                    <!-- Modal -->
                                    @include('backside.product.layouts.modal_start_sell')
                                @endif
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection