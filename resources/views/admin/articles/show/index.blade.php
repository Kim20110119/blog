@extends('layouts.app')
@include('layouts.head')
@include('layouts.javascript')
@inject('common', 'App\Common\Common')
@inject('master', 'App\Common\Master')
@section('content')
@yield('header')
<div class="pages">
    <div id="content">
        <div class="wrap">
            <div id="main" class="col-md-8">
                <div class="main-inner">
                    <article id="{{$articles['number']}}" class="{{$articles['number']}} post type-post status-publish format-standard has-post-thumbnail hentry category-webmastertools">
                        <div class="home-articles-btn">
                            <a class="btn" href="{{url('admin/articles')}}"><i class="fa fa-arrow-circle-left"></i> 記事一覧へ戻る</a>
                        </div>
                        <!-- 記事タイトル -->
                        <header class="post-header">
                            <ul class="post-meta list-inline">
                                <li class="date updated" datetime="{{$articles['created_at']}}">{{$common->getCreateDate($articles['created_at'])}}</li>
                                <li class="cat">{{$master->getCategory($articles['category'])}}</li>
                            </ul>
                            <h1 class="post-title">{{$articles['title']}}</h1>
                            <div class="post-thumbnail">
                                <img src="{{url('img/articles/'.$articles['number'],$articles['image'])}}" width="100%" alt="{{$articles['image_alt']}}">
                            </div>
                        </header>
                        <!-- 記事内容 -->
                        <section class="post-content" itemprop="text">
                            {!!$articles['content']!!}
                        </section>
                        <div class="home-articles-btn">
                            <a class="btn" href="{{url('admin/articles/edit/'.$articles['number'])}}">記事を編集する <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                        @if($articles['delete_flag'] == 0)
                        <div class="home-articles-btn">
                            <a class="btn" href="{{url('admin/articles/delete/'.$articles['number'])}}">記事掲載を解除する</a>
                        </div>
                        @elseif($articles['delete_flag'] == 1)
                        <div class="home-articles-btn">
                            <a class="btn" href="{{url('admin/articles/resumption/'.$articles['number'])}}">記事掲載を再開する</a>
                        </div>
                        @endif
                    </article>
                </div>
            </div><!-- /main-inner -->
        </div><!-- /main -->
    </div><!-- /wrap -->
</div><!-- /content -->
</div><!-- .pages -->
<!-- ページTOP -->
<a href="#" class="pagetop show"><span><i class="fa fa-angle-up"></i></span></a>
@endsection
