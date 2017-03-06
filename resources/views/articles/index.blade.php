@extends('layouts.app')
@include('layouts.head')
@include('layouts.header')
@include('layouts.footer')
@include('layouts.javascript')
@inject('common', 'App\Common\Common')
@inject('master', 'App\Common\Master')
@section('content')
@yield('header')
<div class="pages">
    <div id="content">
        <div class="wrap">
            <ol class="breadcrumb clearfix"><li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="{{url('/')}}" itemprop="url"><span itemprop="title">ホーム</span></a> / </li><li>最新記事一覧</li></ol>
            <div id="main" class="col-md-8" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
                <div class="main-inner">
                    <section class="cat-content section-header bzb-postlist">
                        <header class="cat-header">
                            <div class="logo-area"><a href="{{url('/')}}"><img src="{{url('img/common/logo.jpg')}}" width="100" height="100" alt="富" /></a></div>
                            <h1 class="post-title" ><span>富フリーの全記事一覧</span></h1>
                        </header>
                    </section>
                    <div class="post-loop-wrap post-loop-wrap-list">
                        @foreach($articles_list as $articles)
                        <a href="{{url('articles/show/'.$articles['number'])}}">
                            <article id="{{$articles['number']}}" class="{{$articles['number']}} post type-post status-publish format-standard has-post-thumbnail hentry category-wordpress firstpost" itemscope="itemscope" itemtype="http://schema.org/BlogPosting">
                                <header class="post-header list-loop">
                                    <figure class="img">
                                        <a href="{{url('articles/show/'.$articles['number'])}}" rel="nofollow"><img width="400" height="250" src="{{url('img/articles/'.$articles['number'].'/resize',$articles['image'])}}" class="attachment-loop_thumb size-loop_thumb wp-post-image" alt="{{$articles['image_alt']}}" /></a>
                                    </figure>
                                    <ul class="post-meta list-inline">
                                        <li class="date updated" itemprop="datePublished" datetime="{{$articles['created_at']}}">{{$common->getCreateDate($articles['created_at'])}}</li>
                                        <li class="cattegory">{{$master->getCategory($articles['category'])}}</li>
                                    </ul>
                                    <h2 class="post-title" itemprop="headline"><a href="{{url('articles/show/'.$articles['number'])}}">{{$articles['title']}}</a></h2>
                                </header>
                            </article>
                        </a>
                        @endforeach
                    </div><!-- /post-loop-wrap -->
                </div><!-- /main-inner -->
            </div><!-- /main -->
        </div><!-- /wrap -->
    </div><!-- /content -->
</div><!-- .pages -->
<!-- ページTOP -->
<a href="{{url('articles')}}" class="pagetop show"><span><i class="fa fa-angle-up"></i></span></a>
@endsection
