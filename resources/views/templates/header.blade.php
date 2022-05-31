<header>
<div class="header-content h-full bg-brown text-white box-border py-3 sticky top-0">
    <section class="header-title flex justify-between items-center max-w-7xl mx-2">
        <a href="{{ url('/') }}" class="font-heading hover:no-underline">
            <p class="blog-name text-5xl">Fu-minBlog</p>
            <p class="blog-desc text-xs">趣味を呟く雑記ブログ</p>
        </a>
    </section>
    <nav class="header-nav text-center mx-auto">
        <ul class="flex justify-around">
            @foreach($global_nav as $gn)
                <li id="gnav-cats" class="text-lg px-3 mx-3">
                    <a href="{{ asset('/search/index?category=' . $gn['cat_slag']) }}" class="py-2 block hover:underline">
                        <p>{{ $gn['cat_name'] }}</p>
                    </a>
                    <ul id="gnav-gens" class="hidden">
                        @foreach($gn['genres'] as $ge)
                            <li>
                                <a href="{{ asset('/search/index?genre=' . $ge['gen_slag']) }}">
                                    <p>{{ $ge['gen_name'] }}</p>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul>
    </nav>
    <section class="search-box text-right">
        <form action="{{ asset('/search/index') }}" method="GET">
            @csrf
            <input
                class="p-2 text-left text-black outline-none"
                type="search"
                name="search"
                value="@if(isset($_GET['search'])) {{$_GET['search']}} @endif"
                placeholder=" 記事を検索"
            >
            <input type="submit" value="検索" class="btn-submit border-white hover:text-brown hover:bg-white">
        </form>
    </section>
    <section id="hamburger" class="mx-3">
        <div id="bar-area">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <div class="content bg-white-dark text-black px-2 py-2 duration-300 z-50 fixed overflow-visible top-90p">
            <nav class="top-nav border-b border-solid py-4">
                <p>トップページ</p>
                <ul class="link-list text-green">
                    <li>
                        <a href="{{ asset('/#about') }}">ブログ概要</a>
                    </li>
                    <li>
                        <a href="{{ asset('/#recent') }}">最近の投稿</a>
                    </li>
                    <li>
                        <a href="{{ asset('/#profile') }}">自己紹介</a>
                    </li>
                    <li>
                        <a href="{{ asset('/#career') }}">管理人経歴</a>
                    </li>
                </ul>
            </nav>
            <nav class="gnav">
                <p>記事を検索</p>
                <ul class="link-list text-blue">
                    @foreach($global_nav as $gn)
                        <li id="gnav-cats">
                            <a href="{{ asset('/search/index?category=' . $gn['cat_slag']) }}">
                                <p>{{ $gn['cat_name'] }}</p>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </nav>
            <div class="hbg-search-box">
                <form action="{{ asset('/search/index') }}" method="GET">
                    @csrf
                    <input
                        class="p-2 text-left text-black outline-none"
                        type="search"
                        name="search"
                        value="@if(isset($_GET['search'])) {{$_GET['search']}} @endif"
                        placeholder=" 記事を検索"
                    >
                    <input type="submit" value="検索" class="btn-submit mt-4 btn-submit border-black hover:text-white hover:bg-black">
                </form>
            </div>
        </div>
    </section>
</div>
</header>
