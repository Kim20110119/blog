@section('footer')
<footer id="footer" class="footer">
    <!-- SNS -->
    <aside class="footer-sns">
        <div class="wrap">
            <div id="header-sns" class="sp-hide">
                <ul>
                    <li class="facebook_icon"><a href="#" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
                    <li class="twitter_icon"><a href="#" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
                    <li class="google_icon"><a href="#" target="_blank"><i class="fa fa-google-plus-square"></i></a></li>
                    <li class="feedly_icon"><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
                </ul>
            </div>
        </div>
    </aside>
    <div class="footer-01">
        <div class="wrap">
            <div class="footer-01-item">
                <h3 class="footer-01-title">カテゴリ</h3>
                <nav class="menu-gnav2016-container">
                    <ul id="footer-gnav" class="">
                        @foreach($categorys as $category)
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category {{$category['category_en']}}"><a href="#">{{$category['category_jp']}}</a></li>
                        @endforeach
                    </ul>
                </nav>
            </div>
            <div class="footer-01-item">
                <h3 class="footer-01-title">リンク集</h3>
                <nav class="menu-snav2016-container">
                    <ul id="footer-snav" class="">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page"><a target="_blank" href="#">リンク１</a></li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a target="_blank" href="#">リンク２</a></li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a target="_blank" href="#">リンク３</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page"><a target="_blank" href="#">リンク４</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page"><a target="_blank" href="#">無料ダウンロード</a></li>
                    </ul>
                </nav>
            </div>
            <div class="footer-01-item">
                <h3 class="footer-01-title">参考サイト</h3>
                <nav class="menu-snav2016-container">
                    <ul id="footer-snav" class="">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://bazubu.com">バズ部</a></li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a target="_blank" href="https://liginc.co.jp">株式会社LIG</a></li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a target="_blank" href="https://blog.codecamp.jp">Code部</a></li>
                    </ul>
                </nav>
            </div>
            <div class="footer-01-item footer-nav-area">
                <h3 class="footer-01-title">当サイト情報</h3>
                <nav class="menu-fnav2016-container">
                    <ul id="footer-nav" class="">
                        <li class="d-none menu-item menu-item-type-custom menu-item-object-custom"><a target="_blank" href="#">サイト運営者紹介</a></li>
                        <li class="d-none menu-item menu-item-type-post_type menu-item-object-page"><a href="#">当サイトについて</a></li>
                        <li class="d-none menu-item menu-item-type-post_type menu-item-object-page"><a href="#">お問い合わせ</a></li>
                        <li class="d-none menu-item menu-item-type-post_type menu-item-object-page"><a href="#">免責事項</a></li>
                    </ul>
                </nav>
            </div>
        </div><!-- /wrap -->
    </div><!-- /footer-01 -->
    <div class="footer-02">
        <div class="wrap">
            <p class="footer-copy">© Copyright 2017 富フリー. All rights reserved.</p>
        </div><!-- /wrap -->
    </div><!-- /footer-02 -->
</footer>
@endsection