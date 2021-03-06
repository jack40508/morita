@extends('backside.layouts.app')

@section('content')
    <h1>お知らせタグ管理</h1>
    <div class="text-right">
        <a href="newstag/create" class="btn btn-primary" role="button" aria-pressed="true">新規タグ</a>
    </div>

    <table class="table mt-3">
        <thead class="thead-dark">
            <tr>
                <th scope="col">タグ名</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($newstags as $newstag)
                <tr>
                    <td>{{ $newstag->name }}</td>
                    <td>
                        <div class="row justify-content-end">
                            <div class="col-md-2">
                                <a href="newstag/{{ $newstag->id }}/edit" class="btn btn-success mt-md-0 mt-1 w-100" role="button" aria-pressed="true">編集</a>
                            </div>
                            <div class="col-md-2">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger mt-1 mt-md-0 w-100" data-toggle="modal" data-target="#deleteModal{{ $newstag->id }}">
                                    削除
                                </button>
                                <!-- Modal -->
                                @include('backside.newstag.layouts.modal_delete_check')
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
