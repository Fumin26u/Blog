@extends('template')

@section('content')
<main class="toppage bg-white max-w-5xl mx-auto my-6">

<section class="about">
    <div class="title-area">
        <h2 class="title">ABOUT</h2>
        <p class="title-jp">ブログ概要</p>
    </div>
    <div class="content">
        <p class="text">
            管理人が喋りたいと思ったことを喋るだけの所謂<b>雑記ブログ</b>です。<br>
            それでもできるだけ有益な情報を提供するつもりです。多分。<br>
            尚、このブログはLaravel(PHPフレームワーク)を用いたWordpress等CMSに頼っていない自作サイトです。
        </p>
        <dl class="desc-list">
            <p class="desc-title">主な投稿内容</p>
            <div>
                <dt>旅行関連:</dt>
                <dd>日本国内の旅行記録を写真と共に紹介</dd>
            </div>
            <div>
                <dt>プログラミング:</dt>
                <dd>初心者プログラマーによるWebアプリ開発奮闘記</dd>
            </div>
            <div>
                <dt>ゲーム関連:</dt>
                <dd>主に音ゲーやアイドルマスターのお話。好きは全力で語れ(?)</dd>
            </div>
            <div>
                <dt>その他:</dt>
                <dd>日常や考えていることなどを雑に呟きます。</dd>
            </div>
        </dl>
    </div>
</section>

</main>
@endsection

@section('script')
<script></script>
@endsection
