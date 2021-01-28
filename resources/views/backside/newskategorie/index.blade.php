@extends('backside.layouts.app')

@section('content')
    <h1>お知らせカテゴリー管理</h1>
    <div class="text-right">
        <a href="newskategorie/create" class="btn btn-primary" role="button" aria-pressed="true">新規カテゴリー</a>
    </div>

    <table class="table mt-3">
        <thead class="thead-dark">
            <tr>
                <th scope="col">カテゴリー名</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($newskategories as $newskategorie)
                <tr>
                    <td>{{ $newskategorie->name }}</td>
                    <td>
                        <div class="row justify-content-end">
                            <div class="col-md-2">
                                <a href="newskategorie/{{ $newskategorie->id }}/edit" class="btn btn-success mt-1 mt-md-0 w-100" role="button" aria-pressed="true">編集</a>
                            </div>
                            <div class="col-md-2">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger mt-1 mt-md-0 w-100" data-toggle="modal" data-target="#deleteModal{{ $newskategorie->id }}">
                                    削除
                                </button>
                                <!-- Modal -->
                                @include('backside.newskategorie.layouts.modal_delete_check')
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
