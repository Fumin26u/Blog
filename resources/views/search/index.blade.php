@extends('template')

@section('others_head')
    <title>{{ $search_words }}の検索結果 | fu-minblog</title>
    <meta property="og:title" content="{{ $search_words }}の検索結果 | fu-minblog">
    <meta property="og:description" content="fu-minblogは、プログラミング技術から旅行・ゲームなどの趣味の話、ふと思ったことまで、様々な経験を記事にしている雑記ブログです。できるだけ有益な情報を提供しております。">
    <meta property="og:image" content="{{ Storage::url('images/ogp/ogp-default.png') }}">
@endsection
@section('content')
<main class="search">

<section class="about">
    <div class="title-area">
        <h2 class="title">{{ $search_words }}の検索結果</h2>
        {{-- <p class="title-jp">最近の投稿</p> --}}
    </div>
    <div class="content">
        <ul class="post-list">
            @foreach ($posts as $post)
            <li>
                <a href="{{ asset('show/' . $post->post_id) }}">
                    <div class="img-area">
                        <img src="{{ Storage::url($post->ogp) }}" alt="">
                    </div>
                    <div class="text-area">
                        <h3>{{ $post->post_title }}</h3>
                        <p>{{ $post->post_desc }}</p>
                        <div class="post-time">
                            <p>投稿日: {{ $post->created_at }}</p>
                            <p>更新日: {{ $post->updated_at }}</p>
                        </div>
                    </div>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</section>

</main>
@endsection

@section('script')
<script></script>
@endsection
