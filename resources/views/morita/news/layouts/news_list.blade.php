<ul class="list-group list-group-flush news-ul-news">
    @for($i=($page_id-1)*3; $i<$page_id*3; $i++)
        @if(isset($news[$i]))
            <div class="card card-news-main">
                <div class="card-body">
                    <a class="a-news-link text-color-fontgray" href="/news/{{ $news[$i]->id }}">
                        <div class="row">
                            <div class="col-12 col-md-4 mb-3 mb-md-0">
                                @if(!is_null($news[$i]->image))
                                    <img class="card-img-news-main" src="/img/news/news_{{ $news[$i]->id }}_{{ $news[$i]->image->id }}.jpg" alt="List image cap">
                                @else
                                    <img class="card-img-news-main" src="/img/news/news_default.jpg" alt="List image cap">
                                @endif
                            </div>
                            <div class="col-12 col-md-6">
                                <h4 class="mb-3">{{ date('Y-m-d',strtotime($news[$i]->upload_at ))}}</h4>
                                <h4 class="mb-3">{{ $news[$i]->newskategorie->name }}</h4>
                                <h2>{{ $news[$i]->title }}</h2>
                            </div>
                            <div class="col-12 text-right">
                                <img class="news-card-img-detail" src="/img/news/news_detail.png" alt="Card image page link">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        @endif
    @endfor
</ul>

@if(ceil(count($news)/3) > 1)
    <div class="row justify-content-center">
        <div class="col-1">
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    @if(1 < $page_id)
                        <li class="page-item">
                            <a class="page-link a-news-page" href="#" aria-label="Previous" id="newsPrePageId{{ $page_id-1 }}">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                    @endif
                    @for($i=1; $i<=ceil(count($news)/3); $i++)
                        @if($i == $page_id)
                            <li class="page-item"><a class="page-link a-news-page" id="newsPageId{{ $i }}" href="#" style="text-decoration: underline;">{{ $i }}</a></li>
                        @else
                            <li class="page-item"><a class="page-link a-news-page" id="newsPageId{{ $i }}" href="#">{{ $i }}</a></li>
                        @endif
                    @endfor
                    @if(ceil(count($news)/3) > $page_id)
                        <li class="page-item">
                            <a class="page-link a-news-page" href="#" aria-label="Next" id="newsNextPageId{{ $page_id+1 }}">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>
 @endif

 <script src="{{ asset('/js/news.js') }}"></script>