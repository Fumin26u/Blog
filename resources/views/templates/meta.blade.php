<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-9553B5XZZK"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-9553B5XZZK');
</script>
<link rel="stylesheet" href="{{ asset("css/app.css") }}">
<link rel="stylesheet" href="{{ asset("css/style.css") }}">
<link rel="icon" href="{{ asset("images/favicon.png") }}">
{{-- Load codesnippets style of CKEditor --}}
<link href="{{ asset('ckeditor/plugins/codesnippet/lib/highlight/styles/default.css') }}" rel="stylesheet">
<link rel="canonical" href="{{ url()->current() }}">
<meta property="og:type" content="website">
<meta property="og:site_name" content="fu-minblog">
<meta url="{{ url()->current() }}">
<script src="{{ asset("ckeditor/plugins/codesnippet/lib/highlight/highlight.pack.js") }}"></script>
<script>hljs.initHighlightingOnLoad();</script>
@yield('others_head')
