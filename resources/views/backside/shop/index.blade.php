<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>パティスリー モリタ管理</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="/css/backside_style.css" rel="stylesheet">
</head>
<body>
    <div id="wrapper">
        <!-- Sidebar -->
        @include('backside.layout.slidebar')
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    <h1>店舗管理</h1>
                    <div class="text-right">
                        <button type="button" class="btn btn-primary">新規店舗</button>
                    </div>
                    
                    <table class="table mt-3">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">店舗名</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($shops as $shop)
                                <tr>
                                    <td>{{ $shop->name }}</td>
                                    <td class="text-right">
                                        <button type="button" class="btn btn-info mr-3">詳細</button>
                                        <button type="button" class="btn btn-success mr-3">編集</button>
                                        <button type="button" class="btn btn-danger">削除</button>    
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                        
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
</body>
</html>