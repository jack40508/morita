@extends('backside.layouts.app')

@section('content')
    <h1 class="mb-3">{{ $news->title }}
        @if(!$news->permission)
        <span class="badge badge-pill badge-secondary mr-1">隠れる</span>
        @else
            @if(strtotime(date('Y/m/d H:i:s')) < strtotime($news->upload_at))
                <span class="badge badge-pill badge-warning mr-1">公開待ち</span>
            @endif
        @endif
    </h1>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-2">
                                    <p>カテゴリー</p>
                                </div>
                                <div class="col-md-10">
                                    @if($news->newskategorie_id == -1)
                                        <p>未選択</p>
                                    @else
                                        <p>{{ $news->newskategorie->name }}</p>
                                    @endif
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
                                    @if(strtotime(date('Y/m/d H:i:s')) < strtotime($news->upload_at))
                                        <p>予定公開日</p>
                                    @else
                                        <p>公開日</p>
                                    @endif
                                </div>
                                <div class="col-md-10">
                                    @if(strtotime(date('Y/m/d H:i:s')) < strtotime($news->upload_at))
                                        <p>{{ $news->upload_at }}</p>
                                    @else
                                        <p>{{ $news->upload_at }}</p>
                                    @endif
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
                                    <div class="row">
                                        @foreach($news->newsimages as $newsimage)
                                            <div class="col-6 col-md-3 mb-3 text-center">
                                                <img src="/img/news/news_{{ $news->id }}_{{ $newsimage->id }}.jpg" onerror="this.style.display='none'" alt="img-news" class="img-news mt-md-0 mr-md-3 mt-3">
                                            </div>
                                        @endforeach
                                    </div>
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
