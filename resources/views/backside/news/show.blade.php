@extends('backside.layouts.app')

@section('content')
    <h1 class="mb-3">店舗情報</h1>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-2">
                                    <p>タイトル</p>
                                </div>
                                <div class="col-md-10">
                                    <p>{{ $news->title }}</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-2">
                                    <p>タグ</p>
                                </div>
                                <div class="col-md-10">
                                    <p>
                                        @foreach($news->newstags as $newstag)
                                            #{{ $newstag->name }}
                                        @endforeach
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-2">
                                    <p>内容</p>
                                </div>
                                <div class="col-md-12">
                                    <p>
                                        {!! $news->content !!}
                                    </p>
                                    @foreach($news->newsimages as $newsimage)
                                        <img src="/img/news/news_{{ $news->id }}_{{ $newsimage->id }}.jpg" onerror="this.style.display='none'" alt="img-news" class="img-news mt-md-0 mr-md-3 mt-3">
                                    @endforeach
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-md-end mt-3 justify-content-around">
        <div class="col-5 col-md-2">
            <a href="{{ $news->id }}/edit" class="btn btn-success mt-1 mt-md-0 w-100" role="button" aria-pressed="true">編集</a>
        </div>
        <div class="col-5 col-md-2 offset-1 offset-md-0">
            <a href="/backside/news" class="btn btn-secondary mt-1 mt-md-0 w-100" role="button" aria-pressed="true">戻る</a>
        </div>
    </div>
@endsection
