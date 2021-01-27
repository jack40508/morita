@extends('backside.layouts.app')

@section('content')
    <h1>お知らせ管理</h1>
    <div class="text-right">
        <a href="news/create" class="btn btn-primary" role="button" aria-pressed="true">新規お知らせ</a>
    </div>

    <table class="table mt-3">
        <thead class="thead-dark">
            <tr>
                <th scope="col">タイトル</th>
                <th scope="col">状態</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($news as $news)
                <tr>
                    <td>{{ $news->title }}</td>
                    <td>
                        @if(!$news->permission)
                            <h4><span class="badge badge-pill badge-secondary mr-1">隠れる</span></h4>
                        @else
                            @if(strtotime(date('Y/m/d H:i:s')) < strtotime($news->upload_at))
                                <h4><span class="badge badge-pill badge-warning mr-1" data-toggle="tooltip" data-placement="top" title="{{ $news->upload_at }}公開">公開待ち</span></h4>
                            @endif
                        @endif
                    </td>
                    <td>
                        <div class="row justify-content-end">
                        <div class="col-md-2">
                                <a href="news/{{ $news->id }}" class="btn btn-info mt-md-0 mt-1 w-100" role="button" aria-pressed="true">詳細</a>
                            </div>
                            <div class="col-md-2">
                                <a href="news/{{ $news->id }}/edit" class="btn btn-success mt-md-0 mt-1 w-100" role="button" aria-pressed="true">編集</a>
                            </div>
                            <div class="col-md-2">
                                @php
                                    $from = "index"
                                @endphp

                                @if($news->permission)
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger mt-1 mt-md-0 w-100" data-toggle="modal" data-target="#closeModal{{ $news->id }}">
                                        隠れる
                                    </button>
                                    <!-- Modal -->
                                    @include('backside.news.layouts.modal_close_check')
                                @else
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary mt-1 mt-md-0 w-100" data-toggle="modal" data-target="#openModal{{ $news->id }}">
                                        公開
                                    </button>
                                    <!-- Modal -->
                                    @include('backside.news.layouts.modal_open_check')
                                @endif
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
