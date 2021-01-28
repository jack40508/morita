<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <a href="/backside/">
                パティスリー モリタ管理
            </a>
        </li>
        <li>
            <a href="/backside/shop">店舗管理</a>
        </li>
        <li>
            <a href="/backside/page">画面管理</a>
        </li>
        <li>
            <a data-toggle="collapse" href="#collapseProduct" >商品管理</a>
            <ul class="collapse" id="collapseProduct">
                <li>
                    <a href="/backside/product">商品一覧</a>
                </li>
                <li>
                    <a href="/backside/productkategorie">カテゴリー管理</a>
                </li>
            </ul>

        </li>

        <li>
            <a data-toggle="collapse" href="#collapseNews" >お知らせ管理</a>
            <ul class="collapse" id="collapseNews">
                <li>
                    <a href="/backside/news" >お知らせ一覧</a>
                </li>
                <li>
                    <a href="/backside/newskategorie">カテゴリー管理</a>
                </li>
                <li>
                    <a href="/backside/newstag">タグ管理</a>
                </li>
            </ul>
        </li>
    </ul>
</div>

<script src="{{ asset('/js/backside/sidebar.js') }}"></script>
