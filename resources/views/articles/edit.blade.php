@extends('template')

@section('content')
<main>

<div class="link-area">
    <a href="../index">記事一覧</a>
    <a href="../create">新規作成</a>
    <a href="../../">トップページ</a>
</div>

<form action="{{ route('articles/update', ['id' => $post->post_id]) }}" method="POST">
    @csrf
    <dl class="post-form">
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
                <input type="text" name="description" value="@if(isset($post)) {{ $post->post_desc }} @endif" maxlength="120">
            </dd>
        </div>
        <div class="post-content">
            <dt>内容</dt>
            <dd>
                <textarea name="content" id="ckeditor">@if(isset($post)) {{ $post->post_content }} @endif</textarea>
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
            <dd><input type="file" name="ogp"></dd>
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
    <input type="submit" class="px-4 btn-submit border-brown hover:bg-brown hover:text-white" value="登録">
</form>
<form action="{{ route('articles/destroy', ['id' => $post->post_id]) }}" method="POST" id="delete_{{ $post->post_id }}">
    @csrf
        {{-- <input type="submit" value="削除"> --}}
</form>
</main>
@endsection

@section('script')
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('/js/CKEditor.js') }}"></script>
@endsection
