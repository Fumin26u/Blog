@extends('template')

@section('content')
<main class="max-w-7xl">
<div class="link-area">
    <a href="./create">新規登録</a>
    <a href="../">トップページ</a>
</div>
<section class="about">
    <div class="title-area">
        <h2 class="title">投稿記事一覧</h2>
    </div>
    <div class="content">
        <table class="post-index">
            <thead>
                <tr class="text-center">
                    <th class="id">ID</th>
                    <th class="title">タイトル</th>
                    <th class="description">記事説明</th>
                    <th class="count">閲覧回数</th>
                    <th class="created">投稿日付</th>
                    <th class="updated">最終更新日付</th>
                    <th class="show">表示</th>
                    <th class="edit">編集</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr>
                        <td class="id"><p>{{ $article->post_id }}</p></td>
                        <td class="title"><p>{{ $article->post_title }}</p></td>
                        <td class="description"><p>{{ $article->post_desc }}</p></td>
                        <td class="count"><p>{{ $article->watch_count }}</p></td>
                        <td class="created"><p>{{ $article->created_at }}</p></td>
                        <td class="updated"><p>{{ $article->updated_at }}</p></td>
                        <td class="show"><a href="{{ asset('show/' . $article->post_id) }}" class="btn-common text-blue border-blue hover:text-white hover:bg-blue">表示</a></td>
                        <td class="edit"><a href="{{ asset('articles/edit/' . $article->post_id) }}" class="btn-common text-green border-green hover:text-white hover:bg-green">編集</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="pagination my-2">
        {{ $articles->links() }}
    </div>
</section>
</main>
@endsection

@section('script')
<script></script>
@endsection
