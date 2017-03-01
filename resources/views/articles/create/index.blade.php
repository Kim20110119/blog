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

                    {!! Form::open(array('url' => 'admin/facility/registConfirm', 'method' => 'post', 'id' => 'form_facility_registConfirm', 'files' => true, 'class' => 'cmxform')) !!}
                    <fieldset>
                        <legend>記事基本情報</legend>
                        <ol>
                            <li>
                                <label for="name">記事タイトル<em>*</em></label>
                                <input id="name" size="120"/>
                            </li>
                            <li>
                                <label for="address1">記事画像</label>
                                <input id="address1" size="120"/>
                            </li>
                            <li>
                                <label for="address1">記事画像リンク</label>
                                <input id="address1" size="120"/>
                            </li>
                            <li>
                                <label for="sex">カテゴリ<em>*</em></label>
                                <select id="sex">
                                    @foreach($categorys as $category)
                                    <option value="{{$category['category_en']}}">{{$category['category_jp']}}</option>
                                    @endforeach
                                </select>
                            </li>
                            <li>
                                <label for="town-city">記事キーワード</label>
                                <input id="town-city" size="120"/>
                            </li>
                            <li>
                                <label for="county">記事説明</label>
                                <input id="county" size="120"/>
                            </li>
                        </ol>
                    </fieldset>
                    <fieldset>
                        <legend>記事詳細情報</legend>
                        <ol>
                            <li><label for="comments">記事内容<em>*</em></label></li>
                        </ol>
                    </fieldset>
                    <textarea class="ckeditor" cols="80" id="editor1" name="editor1" rows="10"></textarea>
                    <script src="{{url('js/ckeditor','ckeditor.js')}}"></script>
                    <br />
                    <p><input type="submit" value="登録する" /></p>
                    {!! Form::close() !!}
                </div>
            </div><!-- /main-inner -->
        </div><!-- /main -->
    </div><!-- /wrap -->
</div><!-- /content -->
</div><!-- .pages -->
@endsection
