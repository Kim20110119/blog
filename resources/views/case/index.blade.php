@extends('layouts.app')
@include('layouts.head')
@include('layouts.header')
@include('layouts.footer')
@include('layouts.javascript')
@include('home.articles')
@include('home.recommend')
@include('home.category')
@include('home.case')
@section('content')
@yield('header')
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
<header id="header" class="header" role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">


    <div class="header-brand">
        <p id="logo" itemprop="headline">
            <a href="http://bazubu.com"><img src="http://bazubu.com/wp-content/uploads/2016/05/logo-2.png" alt="バズ部" /></a>
        </p>

        <nav id="gnav" role="navigation" itemscope="itemscope" itemtype="http://scheme.org/SiteNavigationElement">
            <div id="gnav-container" class="gnav-container"><ul id="gnav-ul" class="clearfix"><li id="menu-item-30477" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-30477 contents"><a href="http://bazubu.com/category/contents">コンテンツマーケティング</a></li>
                    <li id="menu-item-30476" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-30476 wordpress"><a href="http://bazubu.com/category/wordpress">WordPress</a></li>
                    <li id="menu-item-30475" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-30475 seo"><a href="http://bazubu.com/category/seo">SEO</a></li>
                    <li id="menu-item-30480" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-30480 landingpage"><a href="http://bazubu.com/category/landingpage">ランディングページ</a></li>
                    <li id="menu-item-30478" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-30478 socialmedia"><a href="http://bazubu.com/category/socialmedia">ソーシャルメディア</a></li>
                    <li id="menu-item-30479" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-30479 mail-magazine"><a href="http://bazubu.com/category/mail-magazine">メルマガ</a></li>
                </ul></div>		</nav>
        <div id="header-menu-tog" class="toggle-menu-tog"><a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a></div>

    </div><!-- .header-brand -->

    <nav class="header-pnav sp-hide">
        <div class="pnav-container">
            <ul id="pnav-ul">
                <li class="pnav-li pnav-li-01">
                    <a href="http://bazubu.com/case" target="_blank">成功事例</a>
                </li>
                <li class="pnav-li pnav-li-02">
                    <span>会社情報</span>
                    <ul class="pnav-sub-menu">
                        <li>
                            <a href="http://bazubu.com/recruit">採用情報</a>
                        </li>
                        <li>
                            <a href="http://bazubu.com/intern">インターン募集</a>
                        </li>
                        <li>
                            <a href="http://lucy.ne.jp" target="_blank">会社概要</a>
                        </li>
                        <li>
                            <a href="http://bazubu.com/sitemap">サイトマップ</a>
                        </li>
                    </ul>
                </li>
                <li class="pnav-li pnav-li-03"><a href="http://bazubu.com/contact">お問い合わせ</a></li>
            </ul>
        </div>
    </nav>

</header>



<div class="pages">

    <div id="content">

        <div class="breadcrumbs">
            <div class="wrap">
                <ol class="breadcrumb clearfix"><li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="http://bazubu.com" itemprop="url"><span itemprop="title">ホーム</span></a> / </li><li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="http://bazubu.com/category/webmastertools" itemprop="url"><span itemprop="title">サーチコンソール</span></a> / </li><li>URL 削除ツールで検索結果から削除する方法</li></ol>	</div>
        </div>

        <div class="wrap">

            <div id="main" class="col-md-8" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">

                <div class="main-inner">


                    <article id="post-29137" class="post-29137 post type-post status-publish format-standard has-post-thumbnail hentry category-webmastertools" itemscope="itemscope" itemtype="http://schema.org/BlogPosting">

                        <header class="post-header">
                            <ul class="post-meta list-inline">
                                <li class="date updated" itemprop="datePublished" datetime="2015-04-17T16:48:59+00:00">2015.04.17</li>
                                <li class="cat">サーチコンソール</li>
                            </ul>
                            <h1 class="post-title" itemprop="headline">URL 削除ツールで検索結果から削除する方法</h1>
                            <div class="post-thumbnail">
                                <img width="760" height="450" src="http://bazubu.com/wp-content/uploads/2015/04/20160510-204-760x450.jpg" class="attachment-post_thumb size-post_thumb wp-post-image" alt="" />        </div>
                            <div class="post-header-meta">
                                <!-- ソーシャルボタン -->
                                <ul class="bzb-sns-btn ">
                                    <li class="bzb-hatena">
                                        <a href="http://b.hatena.ne.jp/entry/http%3A%2F%2Fbazubu.com%2Fhow-to-wmt-remove-urls-29137.html" class="hatena-bookmark-button" data-hatena-bookmark-title="URL 削除ツールで検索結果から削除する方法" data-hatena-bookmark-layout="standard" data-hatena-bookmark-lang="ja" title="このエントリーをはてなブックマークに追加"><img src="//b.hatena.ne.jp/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a><script type="text/javascript" src="//b.hatena.ne.jp/js/bookmark_button.js" charset="utf-8" async="async"></script>
                                    </li>    <li class="bzb-facebook">
                                        <div class="fb-like"
                                             data-href="http://bazubu.com/how-to-wmt-remove-urls-29137.html"
                                             data-layout="button_count"
                                             data-action="like"
                                             data-show-faces="false"></div>
                                    </li>    <li class="bzb-twitter">
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
                                    </li>    <li class="bzb-googleplus">
                                        <div class="g-plusone" data-href="http%3A%2F%2Fbazubu.com%2Fhow-to-wmt-remove-urls-29137.html" ></div>
                                    </li>
                                </ul>
                                <!-- /bzb-sns-btns -->        </div>
                        </header>

                        <section class="post-content" itemprop="text">
                            <p>Search Console の URL 削除ツールを使うと、Google の検索結果からページ情報を削除できる。ただし、闇雲に利用すると検索ランキングに悪い影響を及ぼす恐れがあるため、特別な状況の時だけ利用しよう。</p>
                            <p>例えば会社の社内情報や、機密性の高い個人情報などのページを誤って公開し、これが検索結果に表示された場合はすぐに利用した方が良い。</p>
                            <p>それではまず、あなたが URL 削除ツールの利用が必要かどうかからチェックしていこう。</p>
                            <p><span id="more-29137"></span></p>
                            <div class="background-two"><strong>検索結果の情報削除は一時的なもの</strong><br />
                                URL 削除ツールを使って、Google の検索結果から情報を削除するのは一時的なものなので、次の『<a href="http://bazubu.com/robots-txt-16678.html" target="_blank">robots.txtの効果的な活用方法</a>』『<a href="http://bazubu.com/seo101/how-to-use-noindex-tag" target="_blank">noindexの使い方</a>』『<a href="http://bazubu.com/seo101/how-to-use-nofollow" target="_blank">nofollowの使い方</a>』も読んでしっかり対処しておこう。</div>
                            <div class="background-two"><strong>注：ウェブマスターツールの名称が変更</strong><br />
                                Google は2015年5月20日にウェブマスター ツールの名称を <a href="http://googlewebmastercentral-ja.blogspot.jp/2015/05/announcing-google-search-console-new.html" target="_blank">Google Search Console</a> に変更している。</div>
                            <h2>１．URL 削除ツールを使用すべきでないケース</h2>
                            <p>まず、次のケースに該当する場合はこの削除ツールを使ってはいけないので、当てはまるかどうかチェックしよう。</p>
                            <h3>１−１．サイトから削除した古いページURLを削除する</h3>
                            <p>この場合、URL 削除ツールを使う必要はない。なぜなら、Google は存在しないページを検出したら、検索結果から自然に削除してしまうからだ。</p>
                            <p>実際にバズ部で10記事以上のページURLを変更したことがあったが、しばらくすると古いURLは検索結果からなくなっていた。そしてURLを変更したページのアクセス数を大幅に減らすことは特になかった。</p>
                            <h3>１−２．クロール エラーで検出されたURLを削除する</h3>
                            <p>Search Console の「クロール エラー」で検出されたページを削除したい場合、この削除ツールを使う必要はない。クローラーがURLにアクセスしてページが存在しないことを検出した後、検索結果から自然に削除してしまう。</p>
                            <h3>１−３．URLを統一するために利用する</h3>
                            <p>次のサンプルURLの例を見てほしい。</p>
                            <div class="background-one">
                                <p>http://www.example.com</p>
                                <p>http://example.com</p>
                            </div>
                            <p>見た目はほとんど同じで、どちらのURLでブラウザに入力しても同じサイトにアクセスできるが、検索エンジンにとっては全く別物と認識する。Google はこれをどちらかに統一するように提案している。</p>
                            <p>しかし、この URL 統一のために URL 削除ツールを使用してはいけない。この対処方法として『<a href="https://support.google.com/webmasters/answer/139066" target="_blank">正規 URL を使用する</a>』 に詳しく記載しているので一読して実行しよう。</p>
                            <h3>１−４．ドメイン自体がスパム判定を受けている</h3>
                            <p>もしあなたのサイトが検索結果の上位にほとんど表示されなくなった場合、Googleからドメイン自体がスパム判定を受けている可能性がある。その時に URL 削除ツールを使って全てをリセットしようとしてはいけない。</p>
                            <p>まず現状を正確に知るために『<a href="http://bazubu.com/how-to-wmt-manual-actions-28967.html" target="_blank">手動による対策でスパム判定を受けた時の対処法</a>』を読んで確認してほしい。</p>
                            <h3>１−５．ハッキングされたサイトのURLを全て削除する</h3>
                            <p>これはまれなケースかもしれないが、もしハッキングされた場合、URL 削除ツールでドメインごと全てのページを検索結果から削除してはいけない。まずはハッキングの痕跡をクリーンアップして、再びクロールできるように設定する必要がある。詳しくは『<a href="https://support.google.com/webmasters/answer/163633" target="_blank">サイトがハッキングされた場合の対処方法</a>』 を確認しよう。</p>
                            <p>以上に該当しない場合、次の操作方法に進もう。</p>
                            <h2>２．URL 削除ツール画面へのアクセス方法</h2>
                            <p>Search Console の画面にログインしたら対象のサイトURLをクリックしよう。そして左メニューより「Google インデックス →  URL 削除ツール」の順にクリックする。</p>
                            <p><img class="alignnone" src="http://bazubu.com/wp-content/uploads/2015/04/wmt-remove-urls-01.png" alt="" /></p>
                            <p>すると削除ツールの画面にアクセスできる。</p>
                            <h2>３．URL 削除ツールの使い方</h2>
                            <p>ここでは例として１ページのURLを検索結果から削除する。まず「新しい削除リクエストを作成」をクリックする。</p>
                            <p><img class="alignnone" src="http://bazubu.com/wp-content/uploads/2015/04/wmt-remove-urls-02.png" alt="" /></p>
                            <p>入力欄が表示されたら、ページURLを入れて「続行」ボタンを押そう。</p>
                            <p><img class="alignnone" src="http://bazubu.com/wp-content/uploads/2015/04/wmt-remove-urls-03.png" alt="" /></p>
                            <p>すると次のように削除の詳細画面が表れる。</p>
                            <p><img class="alignnone" src="http://bazubu.com/wp-content/uploads/2015/04/wmt-remove-urls-04.png" alt="" /></p>
                            <p>「理由」という項目では次の３つの削除方法から選べる。</p>
                            <ul>
                                <li>検索結果とキャッシュからページを削除</li>
                                <li>キャッシュからのみページを削除</li>
                                <li>ディレクトリを削除</li>
                            </ul>
                            <p>キャッシュとは次のイメージのように検索結果の URL をクリックすると表示されるものだ。いつのページを参考にして検索エンジンが評価したのかがわかる。</p>
                            <p><img class="aligncenter" src="http://bazubu.com/wp-content/uploads/2015/04/wmt-remove-urls-07.png" alt="" /></p>
                            <p>ディレクトリを削除を選択すると、そのディレクトリ以下のページは全て検索結果から削除されるので注意しよう。</p>
                            <p>設定が完了したら「リクエストを送信」をクリックする。</p>
                            <p>するとリクエストを受け付けた内容が表示されるので、反映されるまでしばらく待つことになる。</p>
                            <p><img class="alignnone" src="http://bazubu.com/wp-content/uploads/2015/04/wmt-remove-urls-05.png" alt="" /></p>
                            <p>１日経って確認してみた。下図のように表示から「削除済み」を選ぶと、ステータスが「削除されました」となっていた。</p>
                            <p><img class="alignnone" src="http://bazubu.com/wp-content/uploads/2015/04/wmt-remove-urls-06.png" alt="" /></p>
                            <p>実際にGoogleで検索すると検索結果からなくなっていた。（ドメインの冒頭に「site:」を置いて、「site:http://◯◯◯.com」のように入力すると簡単にチェックできる）</p>
                            <p>以上がURL 削除ツールの確認方法となる。</p>
                        </section>

                        <footer class="post-footer">

                            <ul class="post-footer-list">
                                <li class="post-footer-item cat"><i class="fa fa-tag"></i>カテゴリー <a href="http://bazubu.com/category/webmastertools" rel="category tag">サーチコンソール</a></li>
                            </ul>

                            <!-- ソーシャルボタン -->
                            <ul class="bzb-sns-btn large">
                                <li class="bzb-hatena">
                                    <a href="http://b.hatena.ne.jp/entry/http%3A%2F%2Fbazubu.com%2Fhow-to-wmt-remove-urls-29137.html" class="hatena-bookmark-button" data-hatena-bookmark-title="URL 削除ツールで検索結果から削除する方法" data-hatena-bookmark-layout="vertical-balloon" data-hatena-bookmark-lang="ja" title="このエントリーをはてなブックマークに追加"><img src="//b.hatena.ne.jp/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a><script type="text/javascript" src="//b.hatena.ne.jp/js/bookmark_button.js" charset="utf-8" async="async"></script>
                                </li>    <li class="bzb-facebook">
                                    <div class="fb-like"
                                         data-href="http://bazubu.com/how-to-wmt-remove-urls-29137.html"
                                         data-layout="box_count"
                                         data-action="like"
                                         data-show-faces="false"></div>
                                </li>    <li class="bzb-twitter">
                                    <a href="https://twitter.com/share" class="twitter-share-button" data-count="vertical" data-url="http://bazubu.com/how-to-wmt-remove-urls-29137.html"  data-text="URL 削除ツールで検索結果から削除する方法">Tweet</a>
                                    <script>!function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';if (!d.getElementById(id)) {
            js = d.createElement(s);js.id = id;js.async = true;js.src = p + '://platform.twitter.com/widgets.js';
            fjs.parentNode.insertBefore(js, fjs);
        }
    }(document, 'script', 'twitter-wjs');</script>
                                </li>    <li class="bzb-googleplus">
                                    <div class="g-plusone" data-href="http%3A%2F%2Fbazubu.com%2Fhow-to-wmt-remove-urls-29137.html" data-size="tall"></div>
                                </li>
                            </ul>
                            <!-- /bzb-sns-btns -->
                        </footer>

                    </article>


                    <!-- CTA BLOCK -->
                    <div class="post-cta post-cta-22766">
                        <h4 class="cta-post-title">無料EBook：バズ部式マーケティング<br>PPC広告費を1/10にして売上を倍増させる全手法</h4>
                        <div class="post-cta-inner">
                            <div class="cta-post-content clearfix">


                                <div class="post-cta-cont">
                                    <div class="post-cta-img"><img src="http://bazubu.com/wp-content/uploads/2014/10/ebook1.png" width="261" height="322"></div>
                                    <p>PPCに頼り切ったマーケティングの打開策としてコンテンツマーケティングについて調べているがよく分からないと悩んでいませんか？</p>
                                    <p>本書は弊社やクライアント様がコンテンツマーケティングに取り組み</p>
                                    <ul>
                                        <li>・SEOのみで月間100万PV集めた方法</li>
                                        <li>・平均6.92%のコンバージョン率が出た新規顧客獲得法</li>
                                        <li>・CPLやCPAを大幅に改善した方法とそのからくり</li>
                                    </ul>
                                    <p>など、コンテンツマーケティングの効果と、具体的な施策内容を全94ページに渡って詳細に解説しているものです。</p>
                                    <p>是非、貴社のWEBマーケティングにもご活用下さい。</p>

                                    <br clear="both"><p class="post-cta-btn"><a class="button"  href="http://bazubu.com/bazubu-marketing-manual">EBookをダウンロード</a></p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- END OF CTA BLOCK -->

                    <div class="post-footer-related"><section class="section-header"><h3 class="post-title"><span>この記事を読んだ方は他にこんな記事を読んでいます。</span></h3></section><div class="row row20"><div class="gr3"><a href="http://bazubu.com/how-to-wmt-crawl-errors-29125.html" ><div class="inner"><div class="related"><img width="400" height="250" src="http://bazubu.com/wp-content/uploads/2015/04/20160510-199-400x250.jpg" class="attachment-loop_thumb size-loop_thumb wp-post-image" alt="" 0="" /></div><p class="title">Googleに正しく評価されるためのクロール エラーの確認方法</p></div></a></div><div class="gr3"><a href="http://bazubu.com/how-to-wmt-crawl-stats-29119.html" ><div class="inner"><div class="related"><img width="400" height="250" src="http://bazubu.com/wp-content/uploads/2015/04/20160510-198-400x250.jpg" class="attachment-loop_thumb size-loop_thumb wp-post-image" alt="" 0="" /></div><p class="title">Webクロールの巡回数を確認する方法</p></div></a></div><div class="gr3"><a href="http://bazubu.com/how-to-wmt-blocked-resources-29084.html" ><div class="inner"><div class="related"><img width="400" height="250" src="http://bazubu.com/wp-content/uploads/2015/04/20160510-202-400x250.jpg" class="attachment-loop_thumb size-loop_thumb wp-post-image" alt="" 0="" /></div><p class="title">画像・CSSの表示チェックができるWebクローラーツールの使い方</p></div></a></div><div class="gr3"><a href="http://bazubu.com/how-to-wmt-index-status-28994.html" ><div class="inner"><div class="related"><img width="400" height="250" src="http://bazubu.com/wp-content/uploads/2015/04/20160510-194-400x250.jpg" class="attachment-loop_thumb size-loop_thumb wp-post-image" alt="" 0="" /></div><p class="title">Google にインデックスされたか確認する方法</p></div></a></div><div class="gr3"><a href="http://bazubu.com/how-to-wmt-mobile-usability-28984.html" ><div class="inner"><div class="related"><img width="400" height="250" src="http://bazubu.com/wp-content/uploads/2015/04/20160510-196-400x250.jpg" class="attachment-loop_thumb size-loop_thumb wp-post-image" alt="" 0="" /></div><p class="title">モバイル ユーザビリティでスマホ表示をチェックする方法</p></div></a></div><div class="gr3"><a href="http://bazubu.com/how-to-wmt-manual-actions-28967.html" ><div class="inner"><div class="related"><img width="400" height="250" src="http://bazubu.com/wp-content/uploads/2015/04/20160510-195-400x250.jpg" class="attachment-loop_thumb size-loop_thumb wp-post-image" alt="" 0="" /></div><p class="title">Googleから手動ペナルティを受けた時の対処法</p></div></a></div><div class="gr3"><a href="http://bazubu.com/how-to-wmt-internal-links-28840.html" ><div class="inner"><div class="related"><img width="400" height="250" src="http://bazubu.com/wp-content/uploads/2015/04/20160510-205-400x250.jpg" class="attachment-loop_thumb size-loop_thumb wp-post-image" alt="" 0="" /></div><p class="title">内部リンクを変更・削除する前にチェックする方法</p></div></a></div><div class="gr3"><a href="http://bazubu.com/how-to-use-links-to-your-site-28692.html" ><div class="inner"><div class="related"><img width="400" height="250" src="http://bazubu.com/wp-content/uploads/2015/04/20160510-203-400x250.jpg" class="attachment-loop_thumb size-loop_thumb wp-post-image" alt="" 0="" /></div><p class="title">サイトへのリンクを確認してスパム被リンクを発見する方法</p></div></a></div></div></div>
                    <div><div class="post-footer-related post-footer-related-2nd"><section class="section-header"><h3 class="post-title"><span>人気の記事</span></h3></section><div class="row row20"><div class="gr4"><a href="http://bazubu.com/how-to-login-to-wordpress-22995.html"><figure class="img"><img width="150" height="150" src="http://bazubu.com/wp-content/uploads/2014/11/20160510-185-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" 0="" /></figure><div class="cont"><h4 class="title">WordPressのログイン方法とログインできない場合の解決法</h4><ul class="meta"><li class="date">2015.04.17</li><li class="cat">wordpress インストール</li></ul></div></a></div><div class="gr4"><a href="http://bazubu.com/all-in-one-seo-pack-23836.html"><figure class="img"><img width="150" height="150" src="http://bazubu.com/wp-content/uploads/2014/11/20160510-129-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" 0="" /></figure><div class="cont"><h4 class="title">All in One SEO Pack の設定方法と使い方</h4><ul class="meta"><li class="date">2015.04.17</li><li class="cat">wordpress プラグイン</li></ul></div></a></div><div class="gr4"><a href="http://bazubu.com/seo-13666.html"><figure class="img"><img width="150" height="150" src="http://bazubu.com/wp-content/uploads/2013/04/20160502-13-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" 0="" /></figure><div class="cont"><h4 class="title">SEO対策｜検索上位を独占するために弊社が行っている36の手順</h4><ul class="meta"><li class="date">2015.04.17</li><li class="cat">SEO</li></ul></div></a></div><div class="gr4"><a href="http://bazubu.com/wp-initial-settings-22899.html"><figure class="img"><img width="150" height="150" src="http://bazubu.com/wp-content/uploads/2014/11/20160510-166-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" 0="" /></figure><div class="cont"><h4 class="title">WordPressインストール後すぐやっておきたい６つの初期設定</h4><ul class="meta"><li class="date">2015.04.17</li><li class="cat">wordpress 設定</li></ul></div></a></div><div class="gr4"><a href="http://bazubu.com/6salestechs-3021.html"><figure class="img"><img width="150" height="150" src="http://bazubu.com/wp-content/uploads/2012/06/20160502-86-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" 0="" /></figure><div class="cont"><h4 class="title">トップセールスが無意識に使いこなしている６つの販売テクニック</h4><ul class="meta"><li class="date">2015.04.17</li><li class="cat">コピーライティング</li></ul></div></a></div><div class="gr4"><a href="http://bazubu.com/how-to-use-backwpup-23804.html"><figure class="img"><img width="150" height="150" src="http://bazubu.com/wp-content/uploads/2014/11/20160510-142-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" 0="" /></figure><div class="cont"><h4 class="title">BackWPUpで確実にWordPressのバックアップを取る方法</h4><ul class="meta"><li class="date">2015.04.17</li><li class="cat">wordpress</li></ul></div></a></div></div></section></div></div>



                    <div class="post-share">


                        <section class="cat-content section-header">
                            <h3 class="post-title"><span>最新の記事情報が取得できます</span></h3>
                        </section>

                        <div class="post-share-cont">
                            <div class="post-share-item post-share-fb">
                                <h4>Facebook</h4>
                                <div class="post-share-body">
                                    <p>「いいね！」ボタンを押すと、最新情報がすぐに確認できるようになります。</p>
                                    <div class="fb-page" data-href="https://www.facebook.com/BazuBu/" data-tabs="timeline" data-height="290" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/BazuBu/"><a href="https://www.facebook.com/BazuBu/">バズ部</a></blockquote></div></div>
                                </div>
                            </div>
                            <div class="post-share-item post-share-tw">
                                <h4>Twitter</h4>
                                <div class="post-share-body">
                                    <p>「フォローする」ボタンを押すと、最新情報がすぐにツイート上で確認できるようになります。</p>
                                    <a class="twitter-timeline" href="https://twitter.com/BAZUBU" data-widget-id="720431408276070403">@BAZUBUさんのツイート</a>
                                    <script>!function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';if (!d.getElementById(id)) {
            js = d.createElement(s);js.id = id;js.src = p + "://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js, fjs);}}(document, "script", "twitter-wjs");</script>
                                </div>
                            </div>
                        </div>
                    </div>

                    <aside class="post-author" itemprop="author" itemscope="itemscope" itemtype="http://schema.org/Person">
                        <div class="clearfix">
                            <div class="post-author-img">
                                <div class="inner">
                                    <img src="http://bazubu.com/wp-content/uploads/2016/03/201603bazubu.jpg" alt="アバター">
                                </div>
                            </div>
                            <div class="post-author-meta">
                                <h4 itemprop="name" class="author vcard author">バズ部編集部</h4>
                                <p><p>ユーザーに届ける価値を徹底的に追及するのがバズ部式マーケティング。<br />
                                    バズ部では、ユーザー主義を貫きながら、なおかつ数字にこだわり結果を出してきた手法やノウハウを<br />
                                    惜しみなく提供していきます。</p>
                                </p>
                            </div>
                        </div>
                    </aside>

                    <div id="comments" class="comments-area">

                        <header class="section-header">
                            <h3 class="post-title">
                                <span>コメントはこちらから</span>
                            </h3>
                        </header>



                    </div><!-- #comments -->



                </div><!-- /main-inner -->
            </div><!-- /main -->

        </div><!-- /wrap -->

    </div><!-- /content -->

    <footer id="footer" class="footer">
        <aside class="footer-sns">
            <div class="wrap">
                <div id="header-sns" class="sp-hide"><ul><li class="facebook_icon"><a href="https://www.facebook.com/bazubu" target="_blank"><i class="fa fa-facebook-square"></i></li><li class="twitter_icon"><a target="_blank" href="https://twitter.com/bazubu"><i class="fa fa-twitter-square"></i></a></li><li class="google_icon"><a target="_blank" href="https://plus.google.com/114842819702038376178"><i class="fa fa-google-plus-square"></i></li><li class="feedly_icon"><a target="_blank" href="http://cloud.feedly.com/#subscription%2Ffeed%2Fhttp%3A%2F%2Fbazubu.com%2Ffeed"><i class="fa fa-rss"></i></a></li></ul></div>		</div>
        </aside>
        <div class="footer-01">
            <div class="wrap">
                <div class="footer-01-item">
                    <h3 class="footer-01-title">カテゴリ</h3>
                    <nav class="menu-gnav2016-container"><ul id="footer-gnav" class=""><li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-30477 contents"><a href="http://bazubu.com/category/contents">コンテンツマーケティング</a></li>
                            <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-30476 wordpress"><a href="http://bazubu.com/category/wordpress">WordPress</a></li>
                            <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-30475 seo"><a href="http://bazubu.com/category/seo">SEO</a></li>
                            <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-30480 landingpage"><a href="http://bazubu.com/category/landingpage">ランディングページ</a></li>
                            <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-30478 socialmedia"><a href="http://bazubu.com/category/socialmedia">ソーシャルメディア</a></li>
                            <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-30479 mail-magazine"><a href="http://bazubu.com/category/mail-magazine">メルマガ</a></li>
                        </ul></nav>			</div>
                <div class="footer-01-item">
                    <h3 class="footer-01-title">特設ページ</h3>
                    <nav class="menu-snav2016-container"><ul id="footer-snav" class=""><li id="menu-item-30486" class="menu-item menu-item-type-post_type menu-item-object-page current_page_parent menu-item-30486 "><a href="http://bazubu.com/articles">バズ部の全記事一覧</a></li>
                            <li id="menu-item-30481" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-30481"><a target="_blank" href="http://bazubu.com/case">コンテンツマーケティングの成功事例集</a></li>
                            <li id="menu-item-30487" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-30487 "><a href="http://bazubu.com/bazubu-marketing-manual">無料ダウンロード</a></li>
                            <li id="menu-item-30786" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-30786 contact"><a href="http://bazubu.com/contact">お問い合わせ</a></li>
                            <li id="menu-item-30787" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-30787 privacy"><a href="http://bazubu.com/privacy">バズ部｜プライバシーポリシー</a></li>
                        </ul></nav>			</div>
                <div class="footer-01-item footer-nav-area">
                    <h3 class="footer-01-title">about us</h3>
                    <nav class="menu-fnav2016-container"><ul id="footer-nav" class=""><li id="menu-item-30488" class="d-none menu-item menu-item-type-custom menu-item-object-custom menu-item-30488"><a target="_blank" href="http://lucy.ne.jp">会社情報</a></li>
                            <li id="menu-item-30489" class="d-none menu-item menu-item-type-post_type menu-item-object-page menu-item-30489 contact"><a href="http://bazubu.com/contact">お問い合わせ</a></li>
                            <li id="menu-item-30491" class="d-none menu-item menu-item-type-post_type menu-item-object-page menu-item-30491 privacy"><a href="http://bazubu.com/privacy">バズ部｜プライバシーポリシー</a></li>
                            <li id="menu-item-30492" class="d-none menu-item menu-item-type-post_type menu-item-object-page menu-item-30492 recruit"><a href="http://bazubu.com/recruit">採用情報</a></li>
                            <li id="menu-item-30490" class="d-none menu-item menu-item-type-post_type menu-item-object-page menu-item-30490 intern"><a href="http://bazubu.com/intern">インターン募集</a></li>
                            <li id="menu-item-30493" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-30493"><a target="_blank" href="https://xeory.jp">Xeory(オリジナルのWordPressテーマ)</a></li>
                        </ul></nav>			</div>
                <div class="footer-01-item logo-area">
                    <a href="http://bazubu.com"><img src="http://bazubu.com/wp-content/themes/bazubu_2016/images/logo.png" alt="バズ部"></a>
                </div>
            </div><!-- /wrap -->
        </div><!-- /footer-01 -->
        <div class="footer-02">
            <div class="wrap">
                <p class="footer-copy">© Copyright 2017 バズ部. All rights reserved.</p>
            </div><!-- /wrap -->
        </div><!-- /footer-02 -->
    </footer>

</div><!-- .pages -->

<a href="#" class="pagetop"><span><i class="fa fa-angle-up"></i></span></a>
<script src="https://apis.google.com/js/platform.js" async defer>
  {
      lang: 'ja'}
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
