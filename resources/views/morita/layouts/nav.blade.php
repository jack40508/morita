<nav class="navbar fixed-top navbar-light navbar-expand-lg navbar-inverse pt-0">
    <a class="" href="/" id="nav_logo" style="width:10vw;"><img src="/img/logo/logo.png" alt="logo" class="mx-100"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto nav-md-ul">
            <li class="nav-item active ml-5">
                <a class="nav-link" href="/" id="nav_link_profile">Home</a>
            </li>
            <li class="nav-item dropdown active d-none d-md-flex">
                <a class="nav-link dropdown-toggle ml-5" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Menu
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="/menu/all">全て商品</a>
                    <a class="dropdown-item" href="/menu/limit">期間限定</a>
                    @foreach($productkategories as $productkategorie)
                        <a class="dropdown-item" href="/menu/{{ $productkategorie->id }}">{{ $productkategorie->name }}</a>
                    @endforeach
                </div>
            </li>
            <li class="nav-item active d-md-none">
                <a class="nav-link dropdown-toggle ml-5" href="#collapseMenu" id="navbarCollapseMenuLink" data-toggle="collapse" aria-haspopup="true" aria-expanded="false">
                    Menu
                </a>
            </li>
            <li class="nav-item collapse d-md-none pl-5" id="collapseMenu">
                <a class="dropdown-item" href="/menu/all">全て商品</a>
                <a class="dropdown-item" href="/menu/limit">期間限定</a>
                @foreach($productkategories as $productkategorie)
                    <a class="dropdown-item" href="/menu/{{ $productkategorie->id }}">{{ $productkategorie->name }}</a>
                @endforeach
            </li>
            <li class="nav-item active ml-5">
                <a class="nav-link" href="/news" id="nav_link_profile">News</a>
            </li>
            <li class="nav-item active ml-5">
                <a class="nav-link" href="/consept" id="nav_link_profile">Concept</a>
            </li>
            <li class="nav-item active ml-5">
                <a class="nav-link" href="/access" id="nav_link_profile">Access</a>
            </li>
        </ul>
    </div>
</nav>