<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>パティスリー</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/calendar.css" rel="stylesheet">

    <!-- Import jquery lighter -->
    <script src="/js/jquery.lighter.js" type="text/javascript"></script>
    <link href="/css/jquery.lighter.css" rel="stylesheet" type="text/css"/>

</head>
<body>
    <div id="wrapper">
        <div id="div-nav">
            @include('morita.layouts.nav')
        </div>
        <div class="mb-5" id="div-banner" style="background-image: url('/img/banner/banner_{{ $page->banner->id }}.jpg');">
            @if($page->name != 'Home')
                <h1 class="page_title">{{ $page->name }}</h1>
            @endif
        </div>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

        <footer class="footer font-small mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="pt-3">■{{ $headshop->name }}</p>
                        <p>{{ $headshop->address }}</p>
                        <p>Tel {{ $headshop->phone }}</p>
                        <p>Open {{ $headshop->opentime }}～{{ $headshop->closetime }}</p>
                        <p>お休み   @foreach($headshop->dayoffs as $dayoff)
                                        {{ $dayoff->name }}
                                    @endforeach
                        </p>
                        <p>{!! $headshop->about !!}</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- /#wrapper -->
</body>
</html>
