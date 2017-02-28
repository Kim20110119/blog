<!DOCTYPE html>
<html lang="jp">
    <head>
        @yield('head')
        @yield('page_css')
        @yield('noindex')
    </head>
    <body id="top" class="post-template-default single single-post single-format-standard default" itemschope="itemscope" itemtype="http://schema.org/WebPage">
        @yield('navigation')
        @yield('content')
        @yield('footer')
        @yield('javascript')
        @yield('page_js')
    </body>
</html>
