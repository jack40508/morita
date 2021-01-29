@extends('backside.layouts.app')

@section('content')
    <h1 class="mb-3">ページ画面管理</h1>

    <div class="row justify-content-around">
        @foreach($pages as $page)
        <div class="col-12 col-md-2 mb-3 mb-md-0">
            <div class="card text-center">
                <h5 class="card-header">{{ $page->name }}</h5>
                <img class="card-img-top img-banner-firstview mt-3" src="/img/banner/banner_{{ $page->now_bannerimage->id }}.jpg" alt="Page Banner Image">
                <div class="card-body">
                    <a href="/backside/page/{{ $page->id }}" class="btn btn-info mt-1 w-100" role="button" aria-pressed="true">予定表</a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-warning mt-3 w-100" data-toggle="modal" data-target="#changeModal{{ $page->id }}">
                        変更
                    </button>
                    <!-- Modal -->
                    @include('backside.page.layouts.modal_change_bannerimage')
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <script>
        var cntPage = {{ count($pages) }};
        console.log(cntPage);
    </script>
    <script src="{{ asset('/js/backside/page-change.js') }}"></script>
@endsection
