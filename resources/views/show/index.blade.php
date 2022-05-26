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

<a href="../articles/create">記事の新規登録</a>
</main>
@endsection

@section('script')
<script></script>
@endsection
