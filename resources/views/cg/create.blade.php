@extends('template')

@section('content')
<main>
<h1>test</h1>
<p>only developers can access this site!</p>
</main>
<a href="./index">index</a>
<p>カテゴリ登録フォーム</p>
<form action="./store" method="POST">
    @csrf
    <dl class="post_form">
        <div>
            <dt>スラッグ</dt>
            <dd>
                <input type="text">
            </dd>
        </div>
    </dl>
    <input type="submit" value="登録">
</form>
@endsection

@section('script')
<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script src="{{ asset('/js/CKEditor.js') }}"></script>
@endsection
