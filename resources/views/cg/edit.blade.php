@extends('template')

@section('content')
<main>
<h1>test</h1>
<p>only developers can access this site!</p>
</main>
<a href="./index">index</a>
<form action="{{ route('articles/update', ['id' => $post->post_id]) }}" method="POST">
    @csrf
    <dl class="post_form">
        <input type="hidden" name="id" value="{{ $post->post_id }}">
        <div>
            <dt>スラッグ</dt>
            <dd>
                <input type="text" name="slag" value="{{ $post->post_slag }}" maxlength="20">
            </dd>
        </div>
        <div>
            <dt>タイトル</dt>
            <dd>
                <input type="text" name="title" value="{{ $post->post_title }}" maxlength="255">
            </dd>
        </div>
        <div>
            <dt>内容</dt>
            <dd>
                <textarea name="content" id="ckeditor" value="">{{ $post->post_content }}</textarea>
            </dd>
        </div>
        <div>
            <dt>公開設定</dt>
            <dd>
                <select name="stats" id="">
                    <option value="pending">編集中</option>
                    <option value="private">非公開</option>
                    <option value="public">公開</option>
                </select>
            </dd>
        </div>
    </dl>
    <input type="submit" value="登録">
</form>
<form action="{{ route('articles/destroy', ['id' => $post->post_id]) }}" method="POST" id="delete_{{ $post->post_id }}">
    @csrf
        <input type="submit" value="削除">
</form>
@endsection

@section('script')
<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script src="{{ asset('/js/CKEditor.js') }}"></script>
@endsection
