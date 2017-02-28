@section('css')
<!-- common CSS -->
<style type="text/css">
    img.wp-smiley,
    img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0 .07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
    }
</style>
<link rel="stylesheet" id="related-post-style-css"  href="{{url('css/xeory-related/css','style.css')}}" type="text/css" media="all" />
<link rel="stylesheet" id="ParaAdmin-css"  href="{{url('css/xeory-related/ParaAdmin/css','ParaAdmin.css')}}" type="text/css" media="all" />
<link rel="stylesheet" id="color-picker-min-css"  href="{{url('css/admin/css','color-picker.min.css')}}" type="text/css" media="all" />
<link rel="stylesheet" id="related-post-style-text-css"  href="{{url('css/content/plugins/xeory-related/themes/text','style.css')}}" type="text/css" media="all" />
<link rel="stylesheet" id="related-post-style-flat-css"  href="{{url('css/content/plugins/xeory-related/themes/flat','style.css')}}" type="text/css" media="all" />
<link rel="stylesheet" id="crayon-min--css"  href="{{url('css/content/plugins/crayon-syntax-highlighter/css/min','crayon.min.css')}}" type="text/css" media="all" />
<link rel="stylesheet" id="xeory-base-css"  href="{{url('css/content/themes/xeory_base','base.css')}}" type="text/css" media="all" />
<link rel="stylesheet" id="main-css-css"  href="{{url('css/content/themes/tomifree','base.css')}}" type="text/css" media="all" />
<link rel="stylesheet" id="font-awesome-min-css"  href="{{url('css/fonts/font-awesome/css','font-awesome.min.css')}}" type="text/css" media="all" />
<link rel="stylesheet" id="contact-form-7-css"  href="{{url('css/content/plugins/contact-form-7/includes/css','styles.css')}}" type="text/css" media="all" />
<link rel="stylesheet" id="gss-shortcodes-css"  href="{{url('css/content/plugins/genesis-style-shortcodes','shortcodes.css')}}" type="text/css" media="all" />
<link rel="stylesheet" id="toc-screen-css"  href="{{url('css/content/plugins/table-of-contents-plus','screen.min.css')}}" type="text/css" media="all" />
<link rel="stylesheet" id="parent-style-css"  href="{{url('css/content/themes/xeory_base','style.css')}}" type="text/css" media="all" />
<link rel="stylesheet" id="child-style-min-css"  href="{{url('css/content/themes/tomifree/css','child-style.min.css')}}" type="text/css" media="all" />
<link rel="stylesheet" id="bx-style-css"  href="{{url('css/content/themes/tomifree/lib/jquery.bxslider','jquery.bxslider.css')}}" type="text/css" media="all" />
<link rel="stylesheet" id="zirei-css"  href="{{url('css/content/themes/tomifree/css','zirei.css')}}" type="text/css" media="all" />
<link rel='stylesheet' id='related-post-style-css'  href='http://bazubu.com/wp-content/plugins/xeory-related/css/style.css?ver=4.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='ParaAdmin-css'  href='http://bazubu.com/wp-content/plugins/xeory-related/ParaAdmin/css/ParaAdmin.css?ver=4.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='wp-color-picker-css'  href='http://bazubu.com/wp-admin/css/color-picker.min.css?ver=4.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='related-post-style-text-css'  href='http://bazubu.com/wp-content/plugins/xeory-related/themes/text/style.css?ver=4.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='related-post-style-flat-css'  href='http://bazubu.com/wp-content/plugins/xeory-related/themes/flat/style.css?ver=4.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='crayon-css'  href='http://bazubu.com/wp-content/plugins/crayon-syntax-highlighter/css/min/crayon.min.css?ver=_2.7.2_beta' type='text/css' media='all' />
<link rel='stylesheet' id='base-css-css'  href='http://bazubu.com/wp-content/themes/xeory_base/base.css?ver=4.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='main-css-css'  href='http://bazubu.com/wp-content/themes/bazubu_2016/style.css?ver=4.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css'  href='http://bazubu.com/wp-content/themes/xeory_base/lib/fonts/font-awesome-4.5.0/css/font-awesome.min.css?ver=4.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='http://bazubu.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=4.6.1' type='text/css' media='all' />
<link rel='stylesheet' id='gss shortcodes-css'  href='http://bazubu.com/wp-content/plugins/genesis-style-shortcodes/shortcodes.css?ver=0.1' type='text/css' media='screen' />
<link rel='stylesheet' id='toc-screen-css'  href='http://bazubu.com/wp-content/plugins/table-of-contents-plus/screen.min.css?ver=1509' type='text/css' media='all' />
<link rel='stylesheet' id='parent-style-css'  href='http://bazubu.com/wp-content/themes/xeory_base/style.css?ver=4.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='child-style-css'  href='http://bazubu.com/wp-content/themes/bazubu_2016/css/child-style.min.css?ver=4.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='bx-style-css'  href='http://bazubu.com/wp-content/themes/bazubu_2016/lib/jquery.bxslider/jquery.bxslider.css?ver=4.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='zirei-css'  href='http://bazubu.com/wp-content/themes/bazubu_2016/css/zirei.css?ver=4.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='bx_css-css'  href='http://bazubu.com/wp-content/themes/bazubu_2016/lib/jquery.bxslider/jquery.bxslider.css?ver=4.7.2' type='text/css' media='all' />
@endsection