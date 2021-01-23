@extends('backside.layouts.app')

@section('content')
    <h1>商品カテゴリー管理</h1>
    <div class="text-right">
        <a href="product/create" class="btn btn-primary" role="button" aria-pressed="true">商品追加</a>
    </div>

    <table class="table mt-3">
        <thead class="thead-dark">
            <tr>
                <th scope="col">商品名</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td class="text-right">
                        <div class="row justify-content-end">
                            <div class="col-md-2">
                                <a href="product/{{ $product->id }}" class="btn btn-info" role="button" aria-pressed="true">詳細</a>
                            </div>
                            <div class="col-md-2">
                                <a href="product/{{ $product->id }}/edit" class="btn btn-success" role="button" aria-pressed="true">編集</a>
                            </div>
                            <div class="col-md-2">
                                {!! Form::open(['url'=>'backside/product/'.$product->id,'method'=>'DELETE']) !!}
                                  {!! Form::submit('削除',['class'=>'btn btn-danger']) !!}
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection