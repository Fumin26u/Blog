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
            <dt>ジャンル</dt>
            <dd>
                <select name="genre" id="post_genres">
                    @foreach ($genres as $genre)
                    <option value="{{ $genre->gen_slag }}" @if(isset($post) && $post->gen_id === $genre->gen_id) {{ 'selected' }} @endif>{{ $genre->gen_name }}</option>
                    @endforeach
                </select>
            </dd>
        </div>
        <div>
            <dt>公開設定</dt>
            <dd>
                <select name="stats" id="">
                    <option value="pending" @if(isset($post) && $post->post_stats === 'pending') {{'selected'}} @endif>編集中</option>
                    <option value="private" @if(isset($post) && $post->post_stats === 'private') {{'selected'}} @endif>非公開</option>
                    <option value="public" @if(isset($post) && $post->post_stats === 'public') {{'selected'}} @endif>公開</option>
                </select>
            </dd>
        </div>
    </dl>
    <input type="submit" value="登録">
</form>
<form action="{{ route('articles/destroy', ['id' => $post->post_id]) }}" method="POST" id="delete_{{ $post->post_id }}">
    @csrf
        {{-- <input type="submit" value="削除"> --}}
</form>
@endsection

@section('script')
<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script src="{{ asset('/js/CKEditor.js') }}"></script>
@endsection
