@extends('admin.app')
@include('admin.head')
@include('admin.header')
@include('admin.javascript')
@inject('common', 'App\Common\Common')
@inject('master', 'App\Common\Master')
@section('content')
@yield('header')
<div class="pages">
    <div id="content">
        <div class="wrap">
            <ol class="breadcrumb clearfix"><li><a href="{{url('/admin')}}" itemprop="url"><span itemprop="title">ホーム</span></a> / </li><li>記事一覧</li></ol>
            <div id="main" class="col-md-8">
                <div class="main-inner">
                    <section class="cat-content section-header bzb-postlist">
                        <header class="cat-header">
                            <div class="logo-area"><a href="{{url('/admin')}}"><img src="{{url('img/common/logo.jpg')}}" width="100" height="100" alt="富" /></a></div>
                            <h1 class="post-title" ><span>富フリーの全記事一覧</span></h1>
                        </header>
                        <div class="home-articles-btn">
                            <a class="btn" href="{{url('admin/articles/create')}}">記事を作成する <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </section>
                    <div class="post-loop-wrap post-loop-wrap-list">
                        @foreach($articles_list as $articles)
                        <a href="{{url('admin/articles/show/'.$articles['number'])}}">
                            <article id="{{$articles['number']}}" class="{{$articles['number']}} post type-post status-publish format-standard has-post-thumbnail hentry category-wordpress firstpost" itemscope="itemscope" itemtype="http://schema.org/BlogPosting">
                                <header class="post-header list-loop">

                                    <figure class="img">
                                        <a href="{{url('admin/articles/show/'.$articles['number'])}}" rel="nofollow"><img width="400" height="250" src="{{url('img/articles/'.$articles['number'].'/resize',$articles['image'])}}" class="attachment-loop_thumb size-loop_thumb wp-post-image" alt="{{$articles['image_alt']}}" /></a>
                                    </figure>
                                    <ul class="post-meta list-inline">
                                        <li class="date updated">{{$common->getCreateDate($articles['created_at'])}}</li>
                                        <li class="cattegory">{{$master->getCategory($articles['category'])}}</li>
                                        @if($articles['delete_flag'] == 1)
                                        <li>
                                            <span><i class="fa fa-window-close"></i></span>
                                        </li>
                                        @endif
                                    </ul>
                                    <h2 class="post-title"><a href="{{url('admin/articles/show/'.$articles['number'])}}">{{$articles['title']}}</a></h2>
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
@endsection
