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
                    <td class="text-right">
                        <div class="row justify-content-end">
                            <div class="col-md-2">
                                <a href="productkategorie/{{ $productkategorie->id }}" class="btn btn-info" role="button" aria-pressed="true">商品一覧</a>
                            </div>
                            <div class="col-md-2">
                                <a href="productkategorie/{{ $productkategorie->id }}/edit" class="btn btn-success" role="button" aria-pressed="true">編集</a>
                            </div>
                            <div class="col-md-2">
                                {!! Form::open(['url'=>'backside/productkategorie/'.$productkategorie->id,'method'=>'DELETE']) !!}
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
