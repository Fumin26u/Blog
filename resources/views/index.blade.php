@extends('template')

@section('content')
<main class="toppage bg-white max-w-7xl mx-auto py-6">
<section class="about">
    <div class="title-area">
        <h2 class="title border-b-2 border-green border-solid inline-block -pb-2">ABOUT</h2>
        <p class="title-jp">ブログの概要</p>
    </div>
    <div class="content">
        <p class="text">
            管理人が喋りたいと思ったことを喋るだけの所謂<b>雑記ブログ</b>です。<br>
            それでもできるだけ有益な情報を提供するつもりです。多分。
        </p>
    </div>
</section>
<section class="profile">
    <div class="title-area">
        <h2></h2>
    </div>
</section>
<p class="text-green">Here is the Toppage of this blog!</p>
<a href="./articles/index">記事一覧</a>
<a href="./articles/create">記事投稿</a>
</main>
@endsection

@section('script')
<script></script>
@endsection
