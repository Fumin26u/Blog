@extends('template')

@section('content')
<main>
<h1>test</h1>
<p>only developers can access this site!</p>
</main>
<textarea id="ckeditor"></textarea>
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
    });
  </script>
@endsection
