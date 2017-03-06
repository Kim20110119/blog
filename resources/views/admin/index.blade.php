@extends('admin.app')
@include('admin.head')
@include('admin.header')
@include('admin.logo')
@include('admin.javascript')
@inject('common', 'App\Common\Common')
@inject('master', 'App\Common\Master')
@include('home.articles')
@include('home.recommend')
@include('home.category')
@include('home.case')
@section('content')
@yield('header')
<div class="pages">
    <div id="content">
        <div class="wrap">
            <div id="main" class="col-md-8" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
                <div class="main-inner">
                    <div class="home-articles-btn">
                        <a class="btn" href="{{url('admin/articles')}}">記事一覧を見る <i class="fa fa-arrow-circle-right"></i></a>
                        <a class="btn" href="{{url('admin/articles')}}">カテゴリーを見る <i class="fa fa-arrow-circle-right"></i></a>
                        <a class="btn" href="{{url('admin/articles')}}">成功事例を見る <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div><!-- /main-inner -->
            </div><!-- /main -->
        </div><!-- /wrap -->
    </div><!-- /content -->
</div><!-- .pages -->
<!-- ページTOP -->
@endsection
