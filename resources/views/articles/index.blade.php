@extends('layouts.app')
@include('layouts.head')
@include('layouts.header')
@include('layouts.footer')
@include('layouts.javascript')
@inject('common', 'App\Common\Common')
@inject('master', 'App\Common\Master')
@section('content')

<div id="overlay"></div>

<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.4&appId=1086941268009230";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<div class="slidemenu slidemenu-right normal">
    <div class="slidemenu-body">
        <div class="slidemenu-content">
            <ul class="slide-main-nav">
                <li><a href="http://bazubu.com/category/contents">コンテンツマーケティング</a></li>
                <li><a href="http://bazubu.com/category/wordpress">WordPress</a></li>
                <li><a href="http://bazubu.com/category/seo">SEO</a></li>
                <li><a href="http://bazubu.com/category/landingpage">ランディングページ</a></li>
                <li><a href="http://bazubu.com/category/socialmedia">ソーシャルメディア</a></li>
                <li><a href="http://bazubu.com/category/mail-magazine">メルマガ</a></li>
                <li><a href="http://bazubu.com/articles">バズ部の全記事一覧</a></li>
                <li><a href="http://bazubu.com/bazubu-marketing-manual">無料ダウンロード</a></li>
            </ul>

            <ul class="slide-sub-nav">
                <li><a href="http://bazubu.com/case" target="_blank">成功事例</a></li>
                <li><a href="http://bazubu.com/recruit">採用情報</a></li>
                <li><a href="http://bazubu.com/intern">インターン募集</a></li>
                <li><a href="http://lucy.ne.jp" target="_blank">会社情報</a></li>
            </ul>

            <div id="header-sns" class="sp-hide"><ul><li class="facebook_icon"><a href="https://www.facebook.com/bazubu" target="_blank"><i class="fa fa-facebook-square"></i></li><li class="twitter_icon"><a target="_blank" href="https://twitter.com/bazubu"><i class="fa fa-twitter-square"></i></a></li><li class="google_icon"><a target="_blank" href="https://plus.google.com/114842819702038376178"><i class="fa fa-google-plus-square"></i></li><li class="feedly_icon"><a target="_blank" href="http://cloud.feedly.com/#subscription%2Ffeed%2Fhttp%3A%2F%2Fbazubu.com%2Ffeed"><i class="fa fa-rss"></i></a></li></ul></div>	  </div>
    </div>
</div>
@yield('header')
<div class="pages">
    <div id="content">
        <div class="wrap">
            <ol class="breadcrumb clearfix"><li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="http://bazubu.com" itemprop="url"><span itemprop="title">ホーム</span></a> / </li><li>最新記事一覧</li></ol>
            <div id="main" class="col-md-8" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
                <div class="main-inner">
                    <section class="cat-content section-header bzb-postlist">
                        <header class="cat-header">
                            <div class="logo-area"><a href="http://kimyea.com"><img src="{{url('img/common/logo.jpg')}}" width="100" height="100" alt="富" /></a></div>
                            <h1 class="post-title" ><span>富フリーの全記事一覧</span></h1>
                        </header>
                    </section>
                    <div class="post-loop-wrap post-loop-wrap-list">
                        @foreach($articles_list as $articles)
                        <article id="{{$articles['id']}}" class="{{$articles['id']}} post type-post status-publish format-standard has-post-thumbnail hentry category-wordpress firstpost" itemscope="itemscope" itemtype="http://schema.org/BlogPosting">
                            <header class="post-header list-loop">
                                <figure class="img">
                                    <a href="http://bazubu.com/wordpress-design-basic-rule-29904.html" rel="nofollow"><img width="400" height="250" src="http://bazubu.com/wp-content/uploads/2015/05/20160502-01-400x250.jpg" class="attachment-loop_thumb size-loop_thumb wp-post-image" alt="" /></a>
                                </figure>
                                <ul class="post-meta list-inline">
                                    <li class="date updated" itemprop="datePublished" datetime="{{$articles['created_at']}}">{{$common->getCreateDate($articles['created_at'])}}</li>
                                    <li class="cattegory">{{$master->getCategory($articles['category'])}}</li>
                                </ul>
                                <h2 class="post-title" itemprop="headline"><a href="http://bazubu.com/wordpress-design-basic-rule-29904.html">{{$articles['title']}}</a></h2>
                            </header>
                        </article>
                        @endforeach
                    </div><!-- /post-loop-wrap -->
                </div><!-- /main-inner -->
            </div><!-- /main -->
        </div><!-- /wrap -->
    </div><!-- /content -->
</div><!-- .pages -->

<a href="#" class="pagetop"><span><i class="fa fa-angle-up"></i></span></a>
<script src="https://apis.google.com/js/platform.js" async defer>
    {
        lang: 'ja'
    }
</script>    <script type="text/javascript" src="http://bazubu.com/wp-content/themes/bazubu_2016/lib/sp-slidemenu-master/sp-slidemenu.js"></script>
<script>
    var sp_slidemenu = SpSlidemenu({
        main: '#content, #footer',
        button: '#header-menu-tog',
        slidemenu: '.slidemenu-right',
        direction: 'right'
    });
</script>
<script>
    (function ($) {

        $(function () {


            $(window).scroll(function () {
                if ($(this).scrollTop() > 12) {
                    $('#header').addClass('small');
                    $('.slidemenu').removeClass('normal');
                } else {
                    $('#header').removeClass('small');
                    $('.slidemenu').addClass('normal');
                }
            });

            $('.pnav-li-02').on('hover', function () {
                $('.pnav-sub-menu', this).stop().slideToggle('fast');
                $('#overlay').stop().toggleClass('active');
            });

            $('#header-menu-tog a').on('click', function () {
                return false;
            });


        });


    })(jQuery);

</script>
<link rel='stylesheet' id='ui.tabs-css'  href='http://bazubu.com/wp-content/plugins/xeory-postviews/css/ui.tabs.css?ver=1' type='text/css' media='all' />
<script type='text/javascript' src='http://bazubu.com/wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js?ver=3.51.0-2014.06.20'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var _wpcf7 = {"recaptcha": {"messages": {"empty": "\u3042\u306a\u305f\u304c\u30ed\u30dc\u30c3\u30c8\u3067\u306f\u306a\u3044\u3053\u3068\u3092\u8a3c\u660e\u3057\u3066\u304f\u3060\u3055\u3044\u3002"}}, "cached": "1"};
    /* ]]> */
</script>
<script type='text/javascript' src='http://bazubu.com/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=4.6.1'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var tocplus = {"visibility_show": "\u8868\u793a", "visibility_hide": "\u65e5\u8868\u793a", "width": "Auto"};
    /* ]]> */
</script>
<script type='text/javascript' src='http://bazubu.com/wp-content/plugins/table-of-contents-plus/front.min.js?ver=1509'></script>
<script type='text/javascript' src='http://bazubu.com/wp-content/plugins/xeory-postviews/js/xeory-postviews.js?ver=4.7.2'></script>
<script type='text/javascript' src='http://bazubu.com/wp-includes/js/jquery/ui/widget.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='http://bazubu.com/wp-content/plugins/xeory-rare/js/xeory-postviews.js?ver=4.7.2'></script>
<script type='text/javascript' src='http://bazubu.com/wp-content/themes/bazubu_2016/lib/jquery.bxslider/jquery.bxslider.min.js?ver=4.7.2'></script>
<script type='text/javascript' src='http://bazubu.com/wp-content/themes/bazubu_2016/lib/jquery.bxslider/jquery.bxslider.min.js?ver=4.7.2'></script>
<script type='text/javascript' src='http://bazubu.com/wp-content/themes/xeory_base/lib/js/jquery.pagetop.js?ver=4.7.2'></script>
<script type='text/javascript' src='http://bazubu.com/wp-includes/js/wp-embed.min.js?ver=4.7.2'></script>
<script type="text/javascript">
    jQuery.noConflict();
    (function ($) {
        $(function () {
// More code using $ as alias to jQuery
            $("area[href*=\\#],a[href*=\\#]:not([href=\\#]):not([href^='\\#tab']):not([href^='\\#quicktab']):not([href^='\\#pane'])").click(function () {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top - 20
                        }, 900, 'easeInQuint');
                        return false;
                    }
                }
            });
        });
    })(jQuery);
</script>
@endsection
