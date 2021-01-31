@extends('backside.layouts.app')

@section('content')
    <h1 class="mb-3">店舗情報</h1>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <p>店舗名</p>
                                </div>
                                <div class="col-md-8">
                                    <p>{{ $shop->name }}</p>
                                </div>
                            </div>
                        </li>

                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <p>住所</p>
                                </div>
                                <div class="col-md-8">
                                    <p>{{ $shop->address }}</p>
                                </div>
                            </div>
                        </li>

                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <p>メールアドレス</p>
                                </div>
                                <div class="col-md-8">
                                    <p>{{ $shop->mail }}</p>
                                </div>
                            </div>
                        </li>

                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <p>電話</p>
                                </div>
                                <div class="col-md-8">
                                    <p>{{ $shop->phone }}</p>
                                </div>
                            </div>
                        </li>

                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <p>営業時間</p>
                                </div>
                                <div class="col-md-8">
                                    <p>{{ $shop->opentime }} ~ {{ $shop->closetime }}</p>
                                </div>
                            </div>
                        </li>

                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <p>定休日</p>
                                </div>
                                <div class="col-md-8">
                                    @foreach($shop->dayoffs as $dayoff)
                                        {{ $dayoff->name }}
                                    @endforeach
                                </div>
                            </div>
                        </li>

                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <p>店舗種類</p>
                                </div>
                                <div class="col-md-8">
                                    {{ $shop->shoptype->name }}
                                </div>
                            </div>
                        </li>

                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <p>紹介</p>
                                </div>
                                <div class="col-md-8">
                                    {!! $shop->about !!}
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <div id="collapsegooglemap{{ $shop->id }}">
                        <iframe
                            width="100%"
                            height="300vw"
                            frameborder="0"
                            class="mt-1"
                            src="https://www.google.com/maps/embed/v1/place?key={{ config("services.google-map.apikey") }}&q={{ $shop->address }}"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-md-end mt-3 justify-content-around">
        <div class="col-5 col-md-2">
            <a href="{{ $shop->id }}/edit" class="btn btn-success mt-1 mt-md-0 w-100" role="button" aria-pressed="true">編集</a>
        </div>
        <div class="col-5 col-md-2 offset-1 offset-md-0">
            <a href="/backside/shop" class="btn btn-secondary mt-1 mt-md-0 w-100" role="button" aria-pressed="true">戻る</a>
        </div>
    </div>
@endsection
