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
                    <td class="text-right">
                        <div class="row justify-content-end">
                            <div class="col-md-2">
                                <a href="shop/{{ $shop->id }}" class="btn btn-info" role="button" aria-pressed="true">詳細</a>
                            </div>
                            <div class="col-md-2">
                                <a href="shop/{{ $shop->id }}/edit" class="btn btn-success" role="button" aria-pressed="true">編集</a>
                            </div>
                            <div class="col-md-2">
                                {!! Form::open(['url'=>'backside/shop/'.$shop->id,'method'=>'DELETE']) !!}
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
