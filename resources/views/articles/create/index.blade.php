@extends('admin.app')
@include('admin.head')
@include('admin.header')
@include('admin.javascript')
@section('content')
@yield('header')
<div class="pages">
    <div id="content">
        <div class="wrap">
            <div id="main" class="col-md-8" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
                <div class="main-inner">
                    <style type="text/css">
                        form.cmxform {
                            margin:1em 0; padding:0;
                            font-size:11px;
                        }
                        form.cmxform fieldset {
                            width:370px;
                            border:0;
                            border-top:1px solid #c9dca6;
                            background:url(/content/img/css/cmxform-fieldset.gif) left bottom repeat-x;
                        }
                        form.cmxform legend {
                            padding:1em 2px 0 2px;
                            font-weight:bold;
                        }
                        form.cmxform em {
                            color:#f00;
                            background-color:transparent;
                            font-weight:normal;
                            font-style:normal;
                            font-size:.8em;
                        }
                        form.cmxform label {
                            display:block;
                            float:left;
                            width:120px;
                        }
                        form.cmxform fieldset ol {
                            margin:0;
                            padding:0;
                        }
                        form.cmxform fieldset li {
                            list-style:none;
                            clear:both;
                            margin:0; padding:5px 5px 7px 7px;
                            background:url(/content/img/css/cmxform-divider.gif) left bottom repeat-x;
                        }
                        form.cmxform fieldset fieldset {
                            border:none;
                            background:none;
                        }
                        form.cmxform fieldset fieldset legend {
                            font-weight:normal;
                            padding-left:0;
                        }
                        form.cmxform fieldset fieldset label {
                            float:none;
                            width:auto;
                        }
                        form.cmxform .sr {
                            position:absolute;
                            left:-9999px; top:0;
                            width:1px; height:1px;
                            overflow:hidden;
                        }
                    </style>

                    <form class="cmxform" action="#">
                        <fieldset>
                            <legend>記事基本情報</legend>
                            <ol>
                                <li>
                                    <label for="name">記事タイトル<em>*</em></label>
                                    <input id="name" size="120"/>
                                </li>
                                <li>
                                    <label for="address1">記事画像<em>*</em></label>
                                    <input id="address1" size="120"/>
                                </li>
                                <li>
                                    <label for="sex">性別 <em>*</em></label> <select id="sex"><option value="female">女</option><option value="male">男</option></select>
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
                                <li><label for="comments">記事内容</label></li>
                            </ol>
                        </fieldset>
                        <textarea class="ckeditor" cols="80" id="editor1" name="editor1" rows="10"></textarea>
                        <script src="{{url('js/ckeditor','ckeditor.js')}}"></script>
                        <br />
                        <p><input type="submit" value="登録する" /></p>
                    </form>
                </div>
            </div><!-- /main-inner -->
        </div><!-- /main -->
    </div><!-- /wrap -->
</div><!-- /content -->
</div><!-- .pages -->
@endsection
