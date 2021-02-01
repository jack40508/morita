@extends('morita.layouts.app')

@section('content')

    <div class="row justify-content-around">
        <div class="col-md-8 col-12">
            <h2>{{ $news->title }}</h2>
            <hr>
            <h4 class="text-right">{{ $news->newskategorie->name }}</h4>
            <p>
                {!! $news->content !!}
            </p>

            @foreach($news->newstags as $newstag)
                <a href="/news/tag/{{ $newstag->id }}">#{{ $newstag->name }}</a>
            @endforeach

            <div class="row mt-5">
                @foreach($news->newsimages as $image)
                    <div class="col-md-3 col-12 mb-3">
                        <a href="/img/news/news_{{ $news->id }}_{{ $image->id }}.jpg" data-lighter>
                            <img src="/img/news/news_{{ $news->id }}_{{ $image->id }}.jpg" onerror="this.style.display='none'" alt="img-news" class="img-news mt-md-0 mr-md-3 mt-3">
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="col-12 text-right img-back-news">
                <a href="{{ URL::previous() }}"><img class="news-card-img-detail" src="/img/news/news_detail.png" alt="Card image page link"></a>
            </div>

        </div>
        <div class="col-md-3 col-12 d-none d-md-block">
            @include('morita.news.layouts.calendar')

            <h3 class="news-kategorie-title">Category</h3>
            <ul class="list-group list-group-flush">
                <li class="list-group-item text-right"><h4><a href="/news">全部 ({{ $cnt_all_news }})</a></h4></li>
                @foreach($newskategories as $newskategorie)
                <li class="list-group-item text-right"><h4><a href="/news/category/{{ $newskategorie->id }}">{{ $newskategorie->name }} ({{count($newskategorie->open_news)}})</a></h4></li>
                @endforeach
            </ul>
        </div>
    </div>

@endsection
