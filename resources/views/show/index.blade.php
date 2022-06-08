@extends('template')

@section('others_head')
    <title>{{ $post->post_title }} | fu-minblog</title>
    <meta property="og:title" content="{{ $post->post_title }} | fu-minblog">
    <meta property="og:image" content="{{ Storage::url($post->ogp) }}">
    @if (!is_null($post->post_desc))
    <meta property="og:description" content="{{ $post->post_desc }}">
    @endif
@endsection

@section('content')

<main class="articles">
@if (!isset($post) && !Auth::check())
<section class="top-title not-found">
    <h1>お探しのページは存在しません</h1>
</section>
<section class="post-content">
    <p>お探しのページは非公開、または削除済みのページです。</p>
    <a href="{{ url('/') }}">トップページに戻る</a>
</section>  
@else
<section class="top-title">
    <h1>{{ $post->post_title }}</h1>
    <div class="details">
        <p>作成日: {{ $post->created_at }} / 更新日: {{ $post->updated_at }}</p>
    </div>
</section>

<section class="post-content">
    <div>{!! $post->post_content !!}</div>
</section>
@endif

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
