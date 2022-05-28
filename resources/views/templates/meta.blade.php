<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{ asset("css/app.css") }}">
<link rel="stylesheet" href="{{ asset("css/style.css") }}">
<link rel="icon" href="{{ asset("images/favicon.png") }}">
{{-- Load codesnippets style of CKEditor --}}
<link href="{{ asset('ckeditor/plugins/codesnippet/lib/highlight/styles/default.css') }}" rel="stylesheet">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-142586151-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-142586151-1');
</script>
<script src="{{ asset("ckeditor/plugins/codesnippet/lib/highlight/highlight.pack.js") }}"></script>
<script>hljs.initHighlightingOnLoad();</script>
@yield('others_head')
