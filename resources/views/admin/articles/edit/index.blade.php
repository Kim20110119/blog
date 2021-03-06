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
            <div id="main" class="col-md-8">
                <div class="main-inner">
                    <div class="home-articles-btn">
                        <a class="btn" href="{{url('admin/articles/show/'.$articles['number'])}}"><i class="fa fa-arrow-circle-left"></i> 記事詳細画面に戻る</a>
                    </div>
                    {!! Form::open(array('url' => 'admin/articles/edit_confirm', 'method' => 'post', 'id' => 'form_facility_registConfirm', 'files' => true, 'class' => 'cmxform')) !!}
                    <fieldset>
                        <legend>記事基本情報</legend>
                        <ol>
                            <li>
                                <label for="title">記事タイトル<em>*</em></label>
                                <input id="title" name="title" size="120" value="{{$articles['title']}}"/>
                            </li>
                            <li>
                                <label for="image_link">記事画像リンク</label>
                                <input id="image_link" name="image_link" size="120" value="{{$articles['image_link']}}"/>
                            </li>
                            <li>
                                <label for="image_alt">記事画像説明</label>
                                <input id="image_alt" name="image_alt" size="120" value="{{$articles['image_alt']}}"/>
                            </li>
                            <li>
                                <label for="category_1">カテゴリ(大)<em>*</em></label>
                                <select id="category_1" name="category_1">
                                    @foreach($categorys_1 as $key => $value)
                                    <option value="{{$key}}">{{$value}}</option>
                                    @endforeach
                                </select>
                            </li>
                            <li>
                                <label for="category_2">カテゴリ(小)<em>*</em></label>
                                <select id="category_2" name="category_2">
                                    @foreach($categorys_2 as $key => $value)
                                    <option value="{{$key}}">{{$value}}</option>
                                    @endforeach
                                </select>
                            </li>
                            <li>
                                <label for="recommend">お勧め<em>*</em></label>
                                <select id="recommend" name="recommend">
                                    @foreach($master->findRecommends() as $key => $value)
                                    <option value="{{$key}}">{{$value}}</option>
                                    @endforeach
                                </select>
                            </li>
                            <li>
                                <label for="keywords">記事キーワード</label>
                                <input id="keywords" name="keywords" size="120" value="{{$articles['keywords']}}"/>
                            </li>
                            <li>
                                <label for="description">記事説明</label>
                                <input id="description" name="description" size="120"  value="{{$articles['description']}}"/>
                            </li>
                        </ol>
                    </fieldset>
                    <fieldset>
                        <legend>記事詳細情報</legend>
                        <ol>
                            <li><label for="content">記事内容<em>*</em></label></li>
                        </ol>
                    </fieldset>
                    <textarea class="ckeditor" cols="80" id="editor1" name="content" rows="10">{{$articles['content']}}</textarea>
                    <script src="{{url('js/ckeditor','ckeditor.js')}}"></script>
                    <br />
                    <div id="comments" class="comments-area">
                        <div id="respond" class="comment-respond">
                            <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="記事編集を確認する" /></p>
                        </div><!-- #respond -->
                    </div>
                    <input type="hidden" name="number" value="{{$articles['number']}}"/>
                    <input type="hidden" name="image" value="{{$articles['image']}}"/>
                    <input type="hidden" name="created_at" value="{{$articles['created_at']}}"/>
                    {!! Form::close() !!}
                </div>
            </div><!-- /main-inner -->
        </div><!-- /main -->
    </div><!-- /wrap -->
</div><!-- /content -->
</div><!-- .pages -->
@endsection
