<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{ asset("css/style.css") }}">
{{-- <link rel="stylesheet" href="{{ asset("css/app.css") }}"> --}}
<link rel="icon" href="{{ asset("images/favicon.png") }}">
{{-- Load codesnippets style of CKEditor --}}
<link href="{{ asset('ckeditor/plugins/codesnippet/lib/highlight/styles/default.css') }}" rel="stylesheet">
<script src="{{ asset("ckeditor/plugins/codesnippet/lib/highlight/highlight.pack.js") }}"></script>
<script>hljs.initHighlightingOnLoad();</script>
@yield('others_head')
