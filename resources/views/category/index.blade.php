@extends('layouts.app')
@include('layouts.head')
@include('layouts.header')
@include('layouts.footer')
@include('layouts.logo')
@include('layouts.javascript')
@inject('common', 'App\Common\Common')
@inject('master', 'App\Common\Master')
@include('category.articles')
@include('category.recommend')
@section('content')
@yield('header')
<div class="pages">
    <div id="content">
        <div class="wrap">
            <div id="main" class="col-md-8" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
                <div class="main-inner">
                    @yield('articles')
                    @yield('recommend')
                </div><!-- /main-inner -->
            </div><!-- /main -->
        </div><!-- /wrap -->
    </div><!-- /content -->
</div><!-- .pages -->
<!-- ページTOP -->
<a href="{{url('/')}}" class="pagetop show"><span><i class="fa fa-angle-up"></i></span></a>
@endsection
