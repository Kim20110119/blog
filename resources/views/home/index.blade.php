@extends('layouts.app')
@include('layouts.head')
@include('layouts.header')
@include('layouts.footer')
@include('layouts.logo')
@include('layouts.javascript')
@inject('common', 'App\Common\Common')
@inject('master', 'App\Common\Master')
@include('home.articles')
@include('home.recommend')
@include('home.category')
@include('home.case')
@section('content')
@yield('header')
<div id="overlay"></div>

<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.4&appId=1086941268009230";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<div class="pages">
    <div id="content">
        <div class="wrap">
            <div id="main" class="col-md-8" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
                <div class="main-inner">
                    @yield('articles')
                    @yield('category')
                    @yield('case')
                    @yield('recommend')
                </div><!-- /main-inner -->
            </div><!-- /main -->

        </div><!-- /wrap -->
    </div><!-- /content -->
</div><!-- .pages -->

<a href="#" class="pagetop"><span><i class="fa fa-angle-up"></i></span></a>
<script src="https://apis.google.com/js/platform.js" async defer>
    {
        lang: 'ja'
    }
</script>
<script type="text/javascript" src="http://bazubu.com/wp-content/themes/bazubu_2016/lib/sp-slidemenu-master/sp-slidemenu.js"></script>
<script>
    var sp_slidemenu = SpSlidemenu({
        main: '#content, #footer',
        button: '#header-menu-tog',
        slidemenu: '.slidemenu-right',
        direction: 'right'
    });
</script>
<script>
    (function ($) {

        $(function () {


            $(window).scroll(function () {
                if ($(this).scrollTop() > 12) {
                    $('#header').addClass('small');
                    $('.slidemenu').removeClass('normal');
                } else {
                    $('#header').removeClass('small');
                    $('.slidemenu').addClass('normal');
                }
            });

            $('.pnav-li-02').on('hover', function () {
                $('.pnav-sub-menu', this).stop().slideToggle('fast');
                $('#overlay').stop().toggleClass('active');
            });

            $('#header-menu-tog a').on('click', function () {
                return false;
            });


        });


    })(jQuery);

</script>
<link rel='stylesheet' id='ui.tabs-css'  href='http://bazubu.com/wp-content/plugins/xeory-postviews/css/ui.tabs.css?ver=1' type='text/css' media='all' />
<script type='text/javascript' src='http://bazubu.com/wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js?ver=3.51.0-2014.06.20'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var _wpcf7 = {"recaptcha": {"messages": {"empty": "\u3042\u306a\u305f\u304c\u30ed\u30dc\u30c3\u30c8\u3067\u306f\u306a\u3044\u3053\u3068\u3092\u8a3c\u660e\u3057\u3066\u304f\u3060\u3055\u3044\u3002"}}, "cached": "1"};
    /* ]]> */
</script>
<script type='text/javascript' src='http://bazubu.com/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=4.6.1'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var tocplus = {"visibility_show": "\u8868\u793a", "visibility_hide": "\u65e5\u8868\u793a", "width": "Auto"};
    /* ]]> */
</script>
<script type='text/javascript' src='http://bazubu.com/wp-content/plugins/table-of-contents-plus/front.min.js?ver=1509'></script>
<script type='text/javascript' src='http://bazubu.com/wp-content/plugins/xeory-postviews/js/xeory-postviews.js?ver=4.7.2'></script>
<script type='text/javascript' src='http://bazubu.com/wp-includes/js/jquery/ui/widget.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='http://bazubu.com/wp-content/plugins/xeory-rare/js/xeory-postviews.js?ver=4.7.2'></script>
<script type='text/javascript' src='http://bazubu.com/wp-content/themes/bazubu_2016/lib/jquery.bxslider/jquery.bxslider.min.js?ver=4.7.2'></script>
<script type='text/javascript' src='http://bazubu.com/wp-content/themes/bazubu_2016/lib/jquery.bxslider/jquery.bxslider.min.js?ver=4.7.2'></script>
<script type='text/javascript' src='http://bazubu.com/wp-content/themes/xeory_base/lib/js/jquery.pagetop.js?ver=4.7.2'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var viewsCacheL10n = {"admin_ajax_url": "http:\/\/bazubu.com\/wp-admin\/admin-ajax.php", "post_id": "30482"};
    /* ]]> */
</script>
<script type='text/javascript' src='http://bazubu.com/wp-content/themes/xeory_base/lib/js/postviews-cache.js?ver=1.67'></script>
<script type='text/javascript' src='http://bazubu.com/wp-includes/js/wp-embed.min.js?ver=4.7.2'></script>
<script type="text/javascript">
    jQuery.noConflict();
    (function ($) {
        $(function () {
// More code using $ as alias to jQuery
            $("area[href*=\\#],a[href*=\\#]:not([href=\\#]):not([href^='\\#tab']):not([href^='\\#quicktab']):not([href^='\\#pane'])").click(function () {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top - 20
                        }, 900, 'easeInQuint');
                        return false;
                    }
                }
            });
        });
    })(jQuery);
</script>
@endsection
