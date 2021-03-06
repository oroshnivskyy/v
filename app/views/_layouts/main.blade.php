<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>{{{$title}}}</title>
    <link rel="icon" type="image/png" href="/favicon.png">
    <meta http-equiv="cache-control" content="public">
    <meta http-equiv="EXPIRES" content="{{date('D, j M Y H:I:S e', strtotime("+5 min"))}}">
    <meta name="viewport" content="width=device-width; initial-scale=1.0">
    <meta name="description" content="{{isset($metaDescription)?$metaDescription:'На нашем сайте Вы можете на свой вкус подобрать вышиванки для вас и ваших близких. Вышиванки по самым низким ценам. Вышиванки ручной работы'}}"/>
    <meta name="keywords" content="{{isset($metaKeywords)?$metaKeywords:'Вышиванки, украинские вышиванки, вышиванки для детей, вышиванки для мужчин, вышиванки для женщин, вышиванки для девушек, вышиванки для мальчиков, ручная робота, купить вышиванки, вышиванки в киеве, вышиванки ручной работы, вышиванки по низким ценам, вышиванка купить, вышиванки купить'}}"/>
    {{ HTML::style('css/default/favicon.ico',array('rel'=>'icon', 'type'=>'image/x-icon')) }}
    {{ HTML::style('css/default/favicon.ico',array('rel'=>'shortcut icon', 'type'=>'image/x-icon')) }}
    {{ HTML::style('//fonts.googleapis.com/css?family=Playfair+Display') }}
    {{ HTML::style('//fonts.googleapis.com/css?family=Open+Sans') }}
    {{ HTML::style('//fonts.googleapis.com/css?family=Open+Sans+Condensed:300') }}
    {{ HTML::style('//fonts.googleapis.com/css?family=Berkshire+Swash') }}
    {{ HTML::style('css/default/css/styles.css') }}
    {{ HTML::style('css/default/css/responsive.css') }}
    {{ HTML::style('css/default/css/superfish.css') }}
    {{ HTML::style('css/popup.css') }}
    <!--[if lt IE 9]>
    <style>
        body {
            min-width: 960px !important;
        }
    </style>
    <![endif]-->
    <!--[if lt IE 8]>
    {{ HTML::style('css/styles-ie.css') }}
    <![endif]-->
    @section('css')
    @show
    {{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js') }}
    <!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img
            src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0"
            height="42" width="820"
            alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/></a>
    </div>
    <![endif]-->
    {{ HTML::script('js/lib/superfish.js') }}
    {{ HTML::script('js/lib/jquery.easing.1.3.js') }}
    {{-- HTML::script('js/lib/scripts.js') --}}
    {{ HTML::script('js/lib/jquery.jcarousel.min.js') }}
    {{ HTML::script('//code.jquery.com/ui/1.10.3/jquery-ui.js') }}

    {{ HTML::style('css/zoomIt.css') }}
    {{ HTML::script('js/lib/zoom/zoomit.jquery.js') }}
    {{ HTML::script('js/scripts/effects.js') }}
    {{ HTML::script('js/scripts/pager.js') }}
    {{ HTML::script('//vk.com/js/api/openapi.js?98') }}

    <script type="text/javascript">
        VK.init({apiId: 3777082, onlyWidgets: true});
    </script>
    <script type="text/javascript">
        VK.Widgets.Like("vk_like", {type: "mini", height: 18},"index");
    </script>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    <!-- Place this tag after the last +1 button tag. -->
    <script type="text/javascript">
        window.___gcfg = {lang: 'ru'};

        (function() {
            var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
            po.src = 'https://apis.google.com/js/plusone.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
        })();
    </script>
</head>
<body class="{{isset($bodyClass)?$bodyClass:'cms-index-index cms-home'}}">
<div class="wrapper">
    <noscript>
        <div class="global-site-notice noscript">
            <div class="notice-inner">
                <p>
                    <strong>JavaScript seems to be disabled in your browser.</strong><br/>
                    You must have JavaScript enabled in your browser to utilize the functionality of this website. </p>
            </div>
        </div>
    </noscript>
    <div class="page">
        @include('_layouts.header')
        @include('composers.main_menu')
        <div id="main">
            @yield('main')
        </div>
        @include('_layouts.footer')
    </div>
    <?php /**
    {{ HTML::script('//code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js') }}
    {{ HTML::script('js/lib/easyTooltip.js') }}
    {{ HTML::script('js/prototype/prototype.js') }}
    {{ HTML::script('js/lib/ccard.js') }}
    {{ HTML::script('js/prototype/validation.js') }}
    {{ HTML::script('js/scriptaculous/builder.js') }}
    {{ HTML::script('js/scriptaculous/effects.js') }}
    {{ HTML::script('js/scriptaculous/dragdrop.js') }}
    {{ HTML::script('js/scriptaculous/controls.js') }}
    {{ HTML::script('js/scriptaculous/slider.js') }}
    {{ HTML::script('js/varien/form.js') }}
    {{ HTML::script('js/mage/translate.js') }}
    {{ HTML::script('js/ecommerceteam/cloud-zoom.1.0.2.min.js') }}
    {{ HTML::script('js/varien/js.js') }}
     */?>
    @section('js')
    @show
</div>
    @section('purchase')
    @show
</body>
</html>
