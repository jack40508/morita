@extends('backside.layouts.app')

@section('content')
    <h1>商品カテゴリー管理</h1>
    <div class="text-right">
        <a href="productkategorie/create" class="btn btn-primary" role="button" aria-pressed="true">新規カテゴリー</a>
    </div>

    <table class="table mt-3">
        <thead class="thead-dark">
            <tr>
                <th scope="col">カテゴリー名</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($productkategories as $productkategorie)
                <tr>
                    <td>{{ $productkategorie->name }}</td>
                    <td>
                        <div class="row justify-content-end">
                            <div class="col-md-3">
                                <a href="productkategorie/{{ $productkategorie->id }}" class="btn btn-info mt-1 mt-md-0 w-100" role="button" aria-pressed="true">商品一覧</a>
                            </div>
                            <div class="col-md-3">
                                <a href="productkategorie/{{ $productkategorie->id }}/edit" class="btn btn-success mt-1 mt-md-0 w-100" role="button" aria-pressed="true">編集</a>
                            </div>
                            <div class="col-md-2">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger mt-1 mt-md-0 w-100" data-toggle="modal" data-target="#deleteModal{{ $productkategorie->id }}">
                                    削除
                                </button>
                                <!-- Modal -->
                                @include('backside.productkategorie.layouts.modal_delete_check')
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
