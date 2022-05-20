@extends('template')

@section('content')
<main>
<h1>test</h1>
<p>Here is one of the Article of this blog!</p>
<a href="../articles/create">新規登録</a>
{{-- {{ dump($post) }} --}}
<p>
    {{ $post->post_id }} <br>
    {{ $post->post_slag }} <br>
    {{ $post->gen_id }} <br>
    {{ $post->post_title }} <br>
    {{ $post->post_author }} <br>
    {!! $post->post_content !!} <br>
    {{ $post->post_stats }} <br>
    {{ $post->watch_count }} <br>
    {{ $post->cretaed_at }} <br>
    {{ $post->updated_at }} <br>
    {{ $post->deleted_at }} <br>
</p>
</main>
@endsection

@section('script')
<script></script>
@endsection
