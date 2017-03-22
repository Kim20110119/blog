@include('layouts.css')
@section('head')
<meta charset="UTF-8">
<title>{{$title}}</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<meta name="author" content="富フリー">
<meta name="keywords" content="{{$keywords}}" />
<meta name="description" content="{{$description}}" />
<meta property="og:title" content="富フリー" />
<meta property="og:type" content="website" />
<meta property="og:description" content="富の自由に通じる奮闘の道" />
<meta property="og:url" content="http://kimyea.com/" />
<meta property="og:image" content="" />
<meta property="og:locale" content="ja_JP" />
<meta property="og:site_name" content="富フリー" />
<link rel='dns-prefetch' href="//kimyea.sakura.ne.jp" />
<link rel='dns-prefetch' href="//kimyea.com" />
<link rel="alternate" hreflang="ja" href="http://www.kimyea.com/">
<link rel="icon" href="{{url('img/common','favicon_main.ico')}}">
<!-- CSS -->
@yield('css')
@endsection