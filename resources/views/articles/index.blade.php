@extends('template')

@section('content')
<main>
<div class="link-area">
    <a href="./create">新規登録</a>
    <a href="../">トップページ</a>
</div>
<section class="about">
    <div class="title-area">
        <h2 class="title">投稿記事一覧</h2>
    </div>
    <div class="content">
        <ul class="post-list">
            @foreach ($articles as $article)
            <li class="no-link">
                <div class="img-area">
                    <img src="{{ Storage::url($article->ogp) }}" alt="">
                </div>
                <div class="text-area">
                    <h3>{{ $article->post_title }}</h3>
                    <p>{{ $article->post_desc }}</p>
                    <div class="link-area">
                        <a href="{{ asset('show/' . $article->post_id) }}">記事を表示</a>
                        <a href="{{ asset('articles/edit/' . $article->post_id) }}">記事を編集</a>
                    </div>
                    <div class="post-time">
                        <p>投稿日: {{ $article->created_at }}</p>
                        <p>更新日: {{ $article->updated_at }}</p>
                    </div>
                </div>
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
