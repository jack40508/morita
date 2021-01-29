@extends('morita.layouts.app')

@section('content')

    @foreach($shops as $shop)
        <div class="row justify-content-center shop_detail">
            <div class="col-md-4">
                <h3>■{{ $shop->name }}</h3>
                <p class="pl-1">{{ $shop->address }}</p>
                <p class="pl-1">Tel {{ $shop->phone }}</p>
                <p class="pl-1">Open {{ $shop->opentime }}～{{ $shop->closetime }}</p>
                <p class="pl-1">お休み   @foreach($shop->dayoffs as $dayoff)
                                            {{ $dayoff->name }}
                                        @endforeach
                </p>
                <p class="pl-1">{!! $shop->about !!}</p>
            </div>
            <div class="col-md-4">
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

        @endforeach

@endsection
