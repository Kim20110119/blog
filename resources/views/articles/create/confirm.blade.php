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
            <div id="main" class="col-md-8" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
                <div class="main-inner">
                    <article id="post-29137" class="post-29137 post type-post status-publish format-standard has-post-thumbnail hentry category-webmastertools" itemscope="itemscope" itemtype="http://schema.org/BlogPosting">
                        <!-- 記事タイトル -->
                        <header class="post-header">
                            <ul class="post-meta list-inline">
                                <li class="cat">{{$master->getCategory($articles['category'])}}</li>
                            </ul>
                            <h1 class="post-title" itemprop="headline">{{$articles['title']}}</h1>
                            <div class="post-thumbnail">
                                <a href="{{$articles['image_link']}}" target="_blank"><img src="{{url('img/update/temp',$articles['image'])}}" width="100%" alt="モッピー！お金がたまるポイントサイト"></a>
                            </div>
                        </header>
                        <!-- 記事内容 -->
                        <section class="post-content" itemprop="text">
                            {!!$articles['content']!!}
                        </section>
                    </article>
                </div>
            </div><!-- /main-inner -->
        </div><!-- /main -->
    </div><!-- /wrap -->
</div><!-- /content -->
</div><!-- .pages -->
@endsection
