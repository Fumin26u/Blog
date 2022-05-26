@extends('template')

@section('content')
<main>
<h1>test</h1>
<p>only developers can access this site!</p>
</main>
<a href="./index">index</a>
<form action="./store" method="POST" enctype="multipart/form-data">
    @csrf
    <dl class="post_form">
        <div>
            <dt>スラッグ</dt>
            <dd>
                <input type="text" name="slag" value="@if(isset($post)) {{ $post->post_slag }} @endif" maxlength="20">
            </dd>
        </div>
        <div>
            <dt>タイトル</dt>
            <dd>
                <input type="text" name="title" value="@if(isset($post)) {{ $post->post_title }} @endif" maxlength="255">
            </dd>
        </div>
        <div>
            <dt>説明欄</dt>
            <dd>
                <input type="text" name="description" value="@if(isset($post)) {{ $post->post_title }} @endif" maxlength="120">
            </dd>
        </div>
        <div>
            <dt>内容</dt>
            <dd>
                <textarea name="content" id="ckeditor" value="">@if(isset($post)) {{ $post->post_content }} @endif</textarea>
            </dd>
        </div>
        <div>
            <dt>ジャンル</dt>
            <dd>
                <select name="genre" id="post_genres">
                    @foreach ($genres as $genre)
                    <option value="{{ $genre->gen_slag }}" @if(isset($post) && $post->gen_slag === $genre) selected @endif>{{ $genre->gen_name }}</option>
                    @endforeach
                </select>
            </dd>
        </div>
        <div>
            <dt>OGP画像</dt>
            <input type="file" name="ogp">
        </div>
        <div>
            <dt>公開設定</dt>
            <dd>
                <select name="stats" id="">
                    <option value="pending" @if(isset($post) && $post->post_stats === 'pending') selected @endif>編集中</option>
                    <option value="private" @if(isset($post) && $post->post_stats === 'private') selected @endif>非公開</option>
                    <option value="public" @if(isset($post) && $post->post_stats === 'public') selected @endif>公開</option>
                </select>
            </dd>
        </div>
    </dl>
    <input type="submit" value="登録">
</form>
@endsection

@section('script')
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('/js/CKEditor.js') }}"></script>
@endsection
