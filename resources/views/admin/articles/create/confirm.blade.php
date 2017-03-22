@extends('layouts.app')
@include('layouts.head')
@include('admin.header')
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
                    {!! Form::open(array('url' => 'admin/articles/store', 'method' => 'post', 'id' => 'form_articles_store', 'files' => true)) !!}
                    <article class="post type-post status-publish format-standard has-post-thumbnail hentry category-webmastertools">
                        <!-- 記事タイトル -->
                        <header class="post-header">
                            <ul class="post-meta list-inline">
                                <li class="cat">{{$master->getCategory($articles['category_2'])}}</li>
                            </ul>
                            <h1 class="post-title">{{$articles['title']}}</h1>
                            <div class="post-thumbnail">
                                <a href="{{$articles['image_link']}}" target="_blank"><img src="{{url('img/update/temp',$articles['image'])}}" width="100%" alt="{{$articles['image_alt']}}"></a>
                            </div>
                        </header>
                        <!-- 記事内容 -->
                        <section class="post-content">
                            {!!$articles['content']!!}
                        </section>
                        <!-- 記事内容 -->
                        <section class="post-content" itemprop="text">
                            <div id="comments" class="comments-area">
                                <div id="respond" class="comment-respond">
                                    <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="記事新規を登録する" /></p>
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
