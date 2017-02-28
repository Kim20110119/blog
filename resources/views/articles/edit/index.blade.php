@extends('layouts.app')
@include('layouts.head')
@include('layouts.header')
@include('layouts.footer')
@include('layouts.javascript')
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
@yield('header')
<div class="pages">
    <div id="content">
        <div class="wrap">
            <div id="main" class="col-md-8" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
                <div class="main-inner">
                    <article id="post-29137" class="post-29137 post type-post status-publish format-standard has-post-thumbnail hentry category-webmastertools" itemscope="itemscope" itemtype="http://schema.org/BlogPosting">
                        <header class="post-header">
                            <ul class="post-meta list-inline">
                                <li class="date updated" itemprop="datePublished" datetime="2015-04-17T16:48:59+00:00">2015.04.17</li>
                                <li class="cat">ポイント</li>
                            </ul>
                            <h1 class="post-title" itemprop="headline">ポイント稼ぎ方法</h1>
                            <div class="post-thumbnail">
                                <img width="760" height="450" src="http://bazubu.com/wp-content/uploads/2015/04/20160510-204-760x450.jpg" class="attachment-post_thumb size-post_thumb wp-post-image" alt="" />
                            </div>
                            <div class="post-header-meta">
                                <!-- ソーシャルボタン -->
                                <ul class="bzb-sns-btn ">
                                    <li class="bzb-hatena">
                                        <a href="http://b.hatena.ne.jp/entry/http%3A%2F%2Fbazubu.com%2Fhow-to-wmt-remove-urls-29137.html" class="hatena-bookmark-button" data-hatena-bookmark-title="URL 削除ツールで検索結果から削除する方法" data-hatena-bookmark-layout="standard" data-hatena-bookmark-lang="ja" title="このエントリーをはてなブックマークに追加"><img src="//b.hatena.ne.jp/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a><script type="text/javascript" src="//b.hatena.ne.jp/js/bookmark_button.js" charset="utf-8" async="async"></script>
                                    </li>
                                    <li class="bzb-facebook">
                                        <div class="fb-like"
                                             data-href="http://bazubu.com/how-to-wmt-remove-urls-29137.html"
                                             data-layout="button_count"
                                             data-action="like"
                                             data-show-faces="false">
                                        </div>
                                    </li>
                                    <li class="bzb-twitter">
                                        <a href="https://twitter.com/share" class="twitter-share-button"  data-url="http://bazubu.com/how-to-wmt-remove-urls-29137.html"  data-text="URL 削除ツールで検索結果から削除する方法">Tweet</a>
                                        <script>!function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
        if (!d.getElementById(id)) {
            js = d.createElement(s);
            js.id = id;
            js.async = true;
            js.src = p + '://platform.twitter.com/widgets.js';
            fjs.parentNode.insertBefore(js, fjs);
        }
    }(document, 'script', 'twitter-wjs');</script>
                                    </li>
                                    <li class="bzb-googleplus">
                                        <div class="g-plusone" data-href="http%3A%2F%2Fbazubu.com%2Fhow-to-wmt-remove-urls-29137.html" ></div>
                                    </li>
                                </ul><!-- /bzb-sns-btns -->
                            </div>
                        </header>

                        <section class="post-content" itemprop="text">
                            <p>Search Console の URL 削除ツールを使うと、Google の検索結果からページ情報を削除できる。ただし、闇雲に利用すると検索ランキングに悪い影響を及ぼす恐れがあるため、特別な状況の時だけ利用しよう。</p>
                            <p>例えば会社の社内情報や、機密性の高い個人情報などのページを誤って公開し、これが検索結果に表示された場合はすぐに利用した方が良い。</p>
                            <p>それではまず、あなたが URL 削除ツールの利用が必要かどうかからチェックしていこう。</p>
                            <p><span id="more-29137"></span></p>
                            <div class="background-two">
                                <strong>検索結果の情報削除は一時的なもの</strong><br />
                                URL 削除ツールを使って、Google の検索結果から情報を削除するのは一時的なものなので、次の『<a href="http://bazubu.com/robots-txt-16678.html" target="_blank">robots.txtの効果的な活用方法</a>』『<a href="http://bazubu.com/seo101/how-to-use-noindex-tag" target="_blank">noindexの使い方</a>』『<a href="http://bazubu.com/seo101/how-to-use-nofollow" target="_blank">nofollowの使い方</a>』も読んでしっかり対処しておこう。
                            </div>
                            <div class="background-two">
                                <strong>注：ウェブマスターツールの名称が変更</strong><br />
                                Google は2015年5月20日にウェブマスター ツールの名称を <a href="http://googlewebmastercentral-ja.blogspot.jp/2015/05/announcing-google-search-console-new.html" target="_blank">Google Search Console</a> に変更している。
                            </div>
                            <!-- 見出し01 -->
                            <h2>１．URL 削除ツールを使用すべきでないケース</h2>
                            <p>まず、次のケースに該当する場合はこの削除ツールを使ってはいけないので、当てはまるかどうかチェックしよう。</p>
                            <!-- 見出し01-01 -->
                            <h3>１−１．サイトから削除した古いページURLを削除する</h3>
                            <p>この場合、URL 削除ツールを使う必要はない。なぜなら、Google は存在しないページを検出したら、検索結果から自然に削除してしまうからだ。</p>
                            <p>実際にバズ部で10記事以上のページURLを変更したことがあったが、しばらくすると古いURLは検索結果からなくなっていた。そしてURLを変更したページのアクセス数を大幅に減らすことは特になかった。</p>
                            <!-- 見出し01-01 -->
                            <h3>１−２．クロール エラーで検出されたURLを削除する</h3>
                            <p>Search Console の「クロール エラー」で検出されたページを削除したい場合、この削除ツールを使う必要はない。クローラーがURLにアクセスしてページが存在しないことを検出した後、検索結果から自然に削除してしまう。</p>
                            <!-- 見出し01-01 -->
                            <h3>１−３．URLを統一するために利用する</h3>
                            <p>次のサンプルURLの例を見てほしい。</p>
                            <div class="background-one">
                                <p>http://www.example.com</p>
                                <p>http://example.com</p>
                            </div>
                            <p>見た目はほとんど同じで、どちらのURLでブラウザに入力しても同じサイトにアクセスできるが、検索エンジンにとっては全く別物と認識する。Google はこれをどちらかに統一するように提案している。</p>
                            <p>しかし、この URL 統一のために URL 削除ツールを使用してはいけない。この対処方法として『<a href="https://support.google.com/webmasters/answer/139066" target="_blank">正規 URL を使用する</a>』 に詳しく記載しているので一読して実行しよう。</p>
                            <!-- 見出し02 -->
                            <h2>２．URL 削除ツール画面へのアクセス方法</h2>
                            <p>Search Console の画面にログインしたら対象のサイトURLをクリックしよう。そして左メニューより「Google インデックス →  URL 削除ツール」の順にクリックする。</p>
                            <p><img class="alignnone" src="http://bazubu.com/wp-content/uploads/2015/04/wmt-remove-urls-01.png" alt="" /></p>
                            <p>すると削除ツールの画面にアクセスできる。</p>
                        </section>
                    </article>
                </div>
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
<script type='text/javascript'>
    /* <![CDATA[ */
    var viewsCacheL10n = {"admin_ajax_url": "http:\/\/bazubu.com\/wp-admin\/admin-ajax.php", "post_id": "29137"};
    /* ]]> */
</script>
<script type='text/javascript' src='http://bazubu.com/wp-content/themes/xeory_base/lib/js/postviews-cache.js?ver=1.67'></script>
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
