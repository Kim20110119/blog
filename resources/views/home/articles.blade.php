@section('articles')
<section class="home-articles top-section">
    <div class="post-loop-wrap">
        @foreach($articles_list as $articles)
        <article id="{{$articles['id']}}}" class="post type-post status-publish format-standard has-post-thumbnail hentry category-wordpress" itemscope="itemscope" itemtype="http://schema.org/BlogPosting">
            <figure class="post-thumbnail">
                <a href="http://bazubu.com/wordpress-design-basic-rule-29904.html" rel="nofollow"><img width="400" height="250" src="http://bazubu.com/wp-content/uploads/2015/05/20160502-01-400x250.jpg" class="attachment-loop_thumb size-loop_thumb wp-post-image" alt="" /></a>
            </figure>
            <header class="post-header">
                <ul class="post-meta list-inline">
                    <li class="date updated" itemprop="datePublished" datetime="{{$articles['created_at']}}">{{$common->getCreateDate($articles['created_at'])}}</li>
                </ul>
                <h2 class="post-title" itemprop="headline"><a href="http://bazubu.com/wordpress-design-basic-rule-29904.html">{{$articles['title']}}</a></h2>
            </header>
            <section class="post-content" itemprop="text">
                <ul class="post-meta post-meta-under">
                    <li class="cattegory">{{$master->getCategory($articles['category'])}}</li>
                </ul>
            </section>
        </article>
        @endforeach
    </div><!-- /post-loop-wrap -->
    <div class="home-articles-btn">
        <a class="btn" href="{{url('articles')}}">新着記事一覧を見る <i class="fa fa-arrow-circle-right"></i></a>
    </div>
</section>
@endsection