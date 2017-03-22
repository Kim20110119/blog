@section('header')
<header id="header" class="header" role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
    <div class="header-brand">
        <h1 id="logo" itemprop="headline">
            <a href="{{url('/')}}"><img src="{{url('img/common/logo.png')}}" alt="富" /></a>
        </h1>
        <nav id="gnav" role="navigation" itemscope="itemscope" itemtype="http://scheme.org/SiteNavigationElement">
            <div id="gnav-container" class="gnav-container">
                <ul id="gnav-ul" class="clearfix">
                    @foreach($categorys as $key => $value)
                    <li id="" class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="#">{{$value}}</a></li>
                    @endforeach
                </ul>
            </div>
        </nav>
        <div id="header-menu-tog" class="toggle-menu-tog"><a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a></div>
    </div><!-- .header-brand -->
    <nav class="header-pnav sp-hide">
        <div class="pnav-container">
            <ul id="pnav-ul">
                <li class="pnav-li pnav-li-01">
                    <a href="#" target="_blank">成功事例</a>
                </li>
                <li class="pnav-li pnav-li-02"><a href="#">お問い合わせ</a></li>
            </ul>
        </div>
    </nav>
</header>
@endsection