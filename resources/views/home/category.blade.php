@section('category')
<section class="home-category top-section">
    <div class="wrap">
        <header class="section-header">
            @yield('logo')
            <h2 class="post-title" ><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;カテゴリー&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></h2>
        </header>
        <div class="home-category-cont">
            <ul class="home-category-list">
                <li>
                    <figure class="img">
                        <a href="{{url('business')}}" rel="nofollow"><img src="{{url('img/category/','business.jpg')}}" alt=""></a>
                    </figure>
                    <div class="cont">
                        <h3 class="title">
                            <a href="{{url('business')}}">ネットビジネス</a>
                        </h3>
                        <p class="text">ネット環境とパソコン、少しの時間さえあれば無料で初心者でもできるお小遣い稼ぎの方法を紹介しています。既に広まっているものから新しい手法までドンドン実践してその結果も報告していきます。</p>
                        <ol>
                            <li><a href="{{url('business/articles/show/articles-00000001')}}" rel="nofollow">初心者向きお小遣い稼ぎの方法</a></li>
                            <li><a href="{{url('business/articles/show/articles-00000003')}}" rel="nofollow">お小遣い稼ぎの準備するもの</a></li>
                            <li><a href="{{url('business/articles/show/articles-00000006')}}" rel="nofollow">フリーメールのおすすめ！</a></li>
                            <li><a href="{{url('business/articles/show/articles-00000011')}}" rel="nofollow">モッピーの評価・稼ぎ方まとめ</a></li>
                            <li><a href="{{url('business/articles/show/articles-00000013')}}" rel="nofollow">ポイントタウンの評価・稼ぎ方まとめ</a></li>
                        </ol>
                    </div>
                    <footer class="link">
                        <a class="btn" href="{{url('business')}}" rel="nofollow"><i class="fa fa-money"></i> ネットビジネスを詳しく見る <i class="fa fa-arrow-circle-o-right"></i></a>
                    </footer>
                </li>
                <li class="category-list-center">
                    <figure class="img">
                        <a href="{{url('information')}}" rel="nofollow"><img src="{{url('img/category/','information.jpg')}}" alt=""></a>
                    </figure>
                    <div class="cont">
                        <h3 class="title">
                            <a href="{{url('information')}}">ネット知識</a>
                        </h3>
                        <p class="text">よりビジネスを成長させたい方のためにSEO等必要な知識とスキルを全て解説しています。知識とスキルの活用により、より多くの検索流入を獲得することで集客が大きく改善されます。</p>
                        <ol>
                            <li><a href="#" rel="nofollow">ネット知識01</a></li>
                            <li><a href="#" rel="nofollow">ネット知識02</a></li>
                            <li><a href="#" rel="nofollow">ネット知識03</a></li>
                            <li><a href="#" rel="nofollow">ネット知識04</a></li>
                        </ol>
                    </div>
                    <footer class="link">
                        <a class="btn" href="{{url('information')}}" rel="nofollow"><i class="fa fa-question-circle"></i> ネット知識を詳しく見る <i class="fa fa-arrow-circle-o-right"></i></a>
                    </footer>
                </li>
                <li>
                    <figure class="img">
                        <a href="{{url('pandora')}}" rel="nofollow"><img src="{{url('img/category/','pandora.jpg')}}" alt=""></a>
                    </figure>
                    <div class="cont">
                        <h3 class="title">
                            <a href="{{url('pandora')}}">ネット雑談</a>
                        </h3>
                        <p class="text">「パンドラの箱」のようなネット上のいろんな雑談を乗せて、雑談の中で「パンドラの箱」底に残った希望を探せましょう。</p>
                        <ol>
                            <li><a href="#" rel="nofollow">ネット雑談01</a></li>
                            <li><a href="#" rel="nofollow">ネット雑談02</a></li>
                            <li><a href="#" rel="nofollow">ネット雑談03</a></li>
                            <li><a href="#" rel="nofollow">ネット雑談04</a></li>
                            <li><a href="#" rel="nofollow">ネット雑談05</a></li>
                            <li><a href="#" rel="nofollow">ネット雑談06</a></li>
                            <li><a href="#" rel="nofollow">ネット雑談07</a></li>
                        </ol>
                    </div>
                    <footer class="link">
                        <a class="btn" href="{{url('pandora')}}" rel="nofollow"><i class="fa fa-book"></i> ネット雑談を詳しく見る <i class="fa fa-arrow-circle-o-right"></i></a>
                    </footer>
                </li>
            </ul>
        </div>
    </div>
</section>
@endsection
