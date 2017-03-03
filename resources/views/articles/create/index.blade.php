@extends('admin.app')
@include('admin.head')
@include('admin.header')
@include('admin.javascript')
@inject('master', 'App\Common\Master')
@section('content')
@yield('header')
<div class="pages">
    <div id="content">
        <div class="wrap">
            <div id="main" class="col-md-8" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
                <div class="main-inner">

                    {!! Form::open(array('url' => 'articles/create_confirm', 'method' => 'post', 'id' => 'form_facility_registConfirm', 'files' => true, 'class' => 'cmxform')) !!}
                    <fieldset>
                        <legend>記事基本情報</legend>
                        <ol>
                            <li>
                                <label for="title">記事タイトル<em>*</em></label>
                                <input id="title" name="title" size="120"/>
                            </li>
                            <li>
                                <label for="image">記事画像</label>
                                <input type="file" id="image" name="image" size="120"/>
                            </li>
                            <li>
                                <label for="image_link">記事画像リンク</label>
                                <input id="image_link" name="image_link" size="120"/>
                            </li>
                            <li>
                                <label for="image_alt">記事画像説明</label>
                                <input id="image_alt" name="image_alt" size="120"/>
                            </li>
                            <li>
                                <label for="category">カテゴリ<em>*</em></label>
                                <select id="category" name="category">
                                    @foreach($categorys as $category)
                                    <option value="{{$category['id']}}">{{$category['category_jp']}}</option>
                                    @endforeach
                                </select>
                            </li>
                            <li>
                                <label for="keywords">記事キーワード</label>
                                <input id="keywords" name="keywords" size="120"/>
                            </li>
                            <li>
                                <label for="description">記事説明</label>
                                <input id="description" name="description" size="120"/>
                            </li>
                        </ol>
                    </fieldset>
                    <fieldset>
                        <legend>記事詳細情報</legend>
                        <ol>
                            <li><label for="content">記事内容<em>*</em></label></li>
                        </ol>
                    </fieldset>
                    <textarea class="ckeditor" cols="80" id="editor1" name="content" rows="10"></textarea>
                    <script src="{{url('js/ckeditor','ckeditor.js')}}"></script>
                    <br />
                    <p><input type="submit" value="記事確認" /></p>
                    {!! Form::close() !!}
                </div>
            </div><!-- /main-inner -->
        </div><!-- /main -->
    </div><!-- /wrap -->
</div><!-- /content -->
</div><!-- .pages -->
@endsection
