@extends('template')

@section('content')
<main>
<h1>test</h1>
<p>only developers can access this site!</p>
</main>
<a href="./index">index</a>
<form action="./store" method="POST">
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
            <dt>内容</dt>
            <dd>
                <textarea name="content" id="ckeditor" value="">@if(isset($post)) {{ $post->post_content }} @endif</textarea>
            </dd>
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
<p>You can write Script at here!</p>
<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script>
    // エディタへの設定を適用する
    CKEDITOR.replace('ckeditor', {
        uiColor: '#EEEEEE',
        height: 300,
        width: 1200,
        // エディタ内に適用するCSS
        // contentsCss: [
        //     "./css/sample.css",
        // ],
        // スペルチェック機能OFF
        scayt_autoStartup: false,
        // Enterを押した際に改行タグを挿入
        enterMode: CKEDITOR.ENTER_BR,
        // Shift+Enterを押した際に段落タグを挿入
        shiftEnterMode: CKEDITOR.ENTER_P,
        // idやclassを指定可能にする
        allowedContent: true,
        // ツールバーを下にする
        toolbarLocation: 'bottom',
        // preコード挿入時
        format_pre: { element: 'pre', attributes: { 'class': 'code' } },
        // タグのパンくずリストを削除
        removePlugins: 'elementspath',
        // webからコピペした際でもプレーンテキストを貼り付けるようにする
        forcePasteAsPlainText: true,
        // 自動で空白を挿入しないようにする
        fillEmptyBlocks: false,
        // タブの入力を無効にする
        tabSpaces: 0,
    });
  </script>
@endsection
