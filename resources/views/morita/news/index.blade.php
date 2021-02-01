@extends('morita.layouts.app')

@section('content')

    <div class="row justify-content-around">
        <div class="col-12 col-md-8" id="news-area">
            <ul class="list-group list-group-flush news-ul-news">
                @for($i=0; $i<3; $i++)
                    @if(isset($news[$i]))
                        <li class="list-group-item news-list-news">
                            <a class="a-news-link text-color-fontgray" href="/news/{{ $news[$i]->id }}">
                                <div class="row">
                                    <div class="col-12 col-md-4 mb-3 mb-md-0">
                                        @if(!is_null($news[$i]->image))
                                            <img class="list-img-news" src="/img/news/news_{{ $news[$i]->id }}_{{ $news[$i]->image->id }}.jpg" alt="List image cap">
                                        @else
                                            <img class="list-img-news" src="/img/news/news_default.jpg" alt="List image cap">
                                        @endif
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <h4 class="mb-3">{{ date('Y-m-d',strtotime($news[$i]->upload_at ))}}</h4>
                                        <h4 class="mb-3">{{ $news[$i]->newskategorie->name }}</h4>
                                        <h2>{{ $news[$i]->title }}</h2>
                                    </div>
                                    <div class="col-12 text-right">
                                        <img class="news-list-img-detail" src="/img/news/news_detail.png" alt="Card image page link">
                                    </div>
                                </div>
                            </a>
                        </li>
                    @endif
                @endfor
            </ul>

            @if(ceil(count($news)/3) > 1)
                <div class="row justify-content-center">
                    <div class="col-1">
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <!--
                                <li class="page-item">
                                <a class="page-link a-news-page" href="#" aria-label="Previous" id="newsPrePageId0">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                </li>
                                -->
                                @for($i=1; $i<=ceil(count($news)/3); $i++)
                                    @if($i == 1)
                                        <li class="page-item"><a class="page-link a-news-page" id="newsPageId{{ $i }}" href="#" style="text-decoration: underline;">{{ $i }}</a></li>
                                    @else
                                        <li class="page-item"><a class="page-link a-news-page" id="newsPageId{{ $i }}" href="#">{{ $i }}</a></li>
                                    @endif
                                @endfor
                                <li class="page-item">
                                    <a class="page-link a-news-page" href="#" aria-label="Next" id="newsNextPageId2">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

            @endif
        </div>

        <div class="col-12 col-md-3 d-none d-md-block">
            @include('morita.news.layouts.calendar')

            <h3 class="news-kategorie-title">Category</h3>
            <ul class="list-group list-group-flush">
                @foreach($newskategories as $newskategorie)
                <li class="list-group-item text-right"><h4><a href="/news/category/{{ $newskategorie->id }}">{{ $newskategorie->name }} ({{count($newskategorie->open_news)}})</a></h4></li>
                @endforeach
            </ul>
        </div>
    </div>

    <script src="{{ asset('/js/news.js') }}"></script>
@endsection
