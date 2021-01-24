@extends('backside.layouts.app')

@section('content')
    <h1>店舗管理</h1>
    <div class="text-right">
        <a href="shop/create" class="btn btn-primary" role="button" aria-pressed="true">新規店舗</a>
    </div>

    <table class="table mt-3">
        <thead class="thead-dark">
            <tr>
                <th scope="col">店舗名</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($shops as $shop)
                <tr>
                    <td>{{ $shop->name }}</td>
                    <td>
                        <div class="row justify-content-end">
                            <div class="col-md-3">
                                <a href="shop/{{ $shop->id }}" class="btn btn-info w-100" role="button" aria-pressed="true">詳細</a>
                            </div>
                            <div class="col-md-3">
                                <a href="shop/{{ $shop->id }}/edit" class="btn btn-success mt-md-0 mt-1 w-100" role="button" aria-pressed="true">編集</a>
                            </div>
                            <div class="col-md-2">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger mt-1 mt-md-0 w-100" data-toggle="modal" data-target="#deleteModal{{ $shop->id }}">
                                    削除
                                </button>
                                <!-- Modal -->
                                @include('backside.shop.layouts.modal_delete_check')
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
