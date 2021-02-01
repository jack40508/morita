@extends('morita.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-10 mb-5 animate_fade-in" id="divHomeConsept">
            <p class="p-home-consept">
                時代に合った美味しいもので幸せに<br>
                上質だけど気取らない、身近な、楽しい時間をみなさまにお届けします
            </p>
            <a class="btn a-home-consept" href="/consept" role="button">詳しく見る</a>
        </div>
    </div>

    <div id="home-news" class="animate_fade-in">
        <div class="row text-center">
            <div class="col-md-4 offset-md-4">
                <h2 class="mb-3 home-title">News</h2>
            </div>
            <div class="col-md-3 d-none d-md-block">
                <h2 class="mb-3"><img src="img/morita/home-news.gif" alt=""/></h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-10 col-md-8 mb-5">
                <div class="row">
                    @foreach($news as $inews)
                        <div class="col-md-4 text-center mb-3 mb-md-0">
                            <div class="card home-news-card text-left">
                                @if(!is_null($inews->image))
                                    <div class="row">
                                        <div class="col-8 col-md-10">
                                            <img class="card-img-news" src="/img/news/news_{{ $inews->id }}_{{ $inews->image->id }}.jpg" alt="Card image cap">
                                        </div>
                                        <div class="col-4 col-md-2 card-news-date">
                                            <p class="pt-1">{{date('Y-m-d',strtotime($inews->upload_at))}} {{ $week[date('w',strtotime($inews->upload_at))] }}</p>
                                        </div>
                                    </div>
                                @else
                                    <div class="row">
                                        <div class="col-8 col-md-10">
                                            <img class="card-img-news" src="/img/news/news_default.jpg" alt="Card image cap">
                                        </div>
                                        <div class="col-4 col-md-2 card-news-date">
                                            <p class="pt-1">{{date('Y-m-d',strtotime($inews->upload_at))}} {{ $week[date('w',strtotime($inews->upload_at))] }}</p>
                                        </div>
                                    </div>
                                @endif
                                <div class="card-body card-content">
                                    <h5 class="card-title">{{ $inews->title }}</h5>
                                    <p class="card-text">{!! $inews->content !!}</p>
                                </div>
                                <div class="card-body text-right">
                                    <a href="/news/{{ $inews->id }}" class="btn btn-card-news-detail">詳しく見る</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
