@extends('backside.layouts.app')

@section('content')
    <h1 class="mb-3">店舗情報</h1>

    <div class="row">
        <div class="col-md-6">
            <ul class="list-group">
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
                            {{ $shop->about }}
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
@endsection
