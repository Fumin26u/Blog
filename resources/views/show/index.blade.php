@extends('template')
@section('others_head')
    <meta property="og:image" content="{{ Storage::url($post->ogp) }}">
    @if (!is_null($post->post_desc))
    <meta property="og:description" content="{{ $post->post_desc }}">
    @endif
@endsection
@section('content')
<main>
<h1>{{ $post->post_title }}</h1>

<section class="detail_area">
    <p class="author"><small>投稿者: {{ $post->post_author }}</small></p>
    <p class="author"><small>作成日: {{ $post->created_at }}</small></p>
    <p class="author"><small>更新日: {{ $post->updated_at }}</small></p>
</section>

<section class="post_content">
    <div>{!! $post->post_content !!}</div>
</section>

@if(Auth::check())
<div class="link-area">
    <a href="../../">トップページ</a>
    <a href="../../articles/index">記事一覧</a>
    <a href="../../articles/create">記事投稿</a>
</div>
@endif
</main>
@endsection

@section('script')
<script></script>
@endsection
