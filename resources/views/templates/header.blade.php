<header class="h-full py-3 bg-brown text-white box-border shadow-lg">
<div class="header-content flex justify-between items-center max-w-7xl mx-auto">
    <section class="header-title font-heading w-1/6">
        <a href="{{ url('/') }}">
            <p class="blog-name text-5xl">Fu-minBlog</p>
            <p class="blog-desc text-xs">ブログの説明欄</p>
        </a>
    </section>
    <nav class="header-nav w-2/4 text-center">
        <ul class="flex justify-around">
            @foreach($global_nav as $gn)
                <li id="gnav-cats" class="text-lg w-1/4 px-2">
                    <a href="{{ asset('/search?word=' . $gn['cat_slag']) }}" class="py-2 block hover:underline">
                        <p>{{ $gn['cat_name'] }}</p>
                    </a>
                    <ul id="gnav-gens" class="hidden">
                        @foreach($gn['genres'] as $ge)
                            <li>
                                <a href="{{ asset('/search?word=' . $ge['gen_slag']) }}"">
                                    <p>{{ $ge['gen_name'] }}</p>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul>
    </nav>
    <section class="search-box w-1/3 text-right">
        <form action="{{ asset('/search') }}" method="GET">
            @csrf
            <input
                class="p-2 text-left text-black outline-none"
                type="search"
                name="header-search"
                value="@if(isset($_GET['header-search'])) {{$_GET['header-search']}} @endif"
                placeholder=" 記事を検索"
            >
            <input type="submit" value="検索" class="px-3 py-1.5 border-2 border-solid border-white">
        </form>
    </section>
</div>
</header>
