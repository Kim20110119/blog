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
                    <div class="home-articles-btn">
                        <a class="btn" href="{{url('admin/articles/edit/'.$articles['number'])}}"><i class="fa fa-arrow-circle-left"></i> 記事編集画面に戻る</a>
                    </div>
                    {!! Form::open(array('url' => 'admin/articles/update', 'method' => 'post', 'id' => 'form_articles_update')) !!}
                    <article id="{{$articles['number']}}" class="{{$articles['number']}} post type-post status-publish format-standard has-post-thumbnail hentry category-webmastertools">
                        <!-- 記事タイトル -->
                        <header class="post-header">
                            <ul class="post-meta list-inline">
                                <li class="date updated" datetime="{{$articles['created_at']}}">{{$common->getCreateDate($articles['created_at'])}}</li>
                                <li class="cat">{{$master->getCategory($articles['category_2'])}}</li>
                            </ul>
                            <h1 class="post-title" itemprop="headline">{{$articles['title']}}</h1>
                            <div class="post-thumbnail">
                                <a href="{{$articles['image_link']}}" target="_blank"><img src="{{url('img/articles/'.$articles['number'],$articles['image'])}}" width="100%" alt="{{$articles['image_alt']}}"></a>
                            </div>
                        </header>
                        <!-- 記事内容 -->
                        <section class="post-content" itemprop="text">
                            {!!$articles['content']!!}
                        </section>
                        <!-- 記事内容 -->
                        <section class="post-content" itemprop="text">
                            <div id="comments" class="comments-area">
                                <div id="respond" class="comment-respond">
                                    <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="記事編集を更新する" /></p>
                                </div><!-- #respond -->
                            </div>
                        </section>
                    </article>
                    {!! Form::close() !!}
                </div>
            </div><!-- /main-inner -->
        </div><!-- /main -->
    </div><!-- /wrap -->
</div><!-- /content -->
</div><!-- .pages -->
@endsection
