<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Customer Login</title>
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<meta name="description" content="Default Description"/>
<meta name="keywords" content="Magento, Varien, E-commerce"/>
<meta name="robots" content="INDEX,FOLLOW"/>
<script type="text/javascript">
//<![CDATA[
window.__CF=window.__CF||{};window.__CF.AJS={"ga_key":{"ua":"UA-7078796-5","ga_bs":"2"}};
//]]>
</script>
<script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) { var CloudFlare=[{verbose:0,p:0,byc:0,owlid:"cf",mirage:{responsive:0,lazy:0},oracle:0,paths:{cloudflare:"../../../../cdn-cgi/nexp/abv=378448694/index.htm"},atok:"edd23b83a894393d34de14a3bdc27bb8",zone:"template-help.com",rocket:"0",apps:{"ga_key":{"ua":"UA-7078796-5","ga_bs":"2"}}}];var a=document.createElement("script"),b=document.getElementsByTagName("script")[0];a.async=!0;a.src="../../../../ajax.cloudflare.com/cdn-cgi/nexp/abv=4035706501/cloudflare.min.js";b.parentNode.insertBefore(a,b);}}catch(e){};
//]]>
</script>
<link rel="icon" HREF="../../../skin/frontend/default/theme423/favicon.ico" type="image/x-icon"/>
<link rel="shortcut icon" HREF="../../../skin/frontend/default/theme423/favicon.ico" type="image/x-icon"/>
<link href="../../../../../fonts.googleapis.com/css@family=Playfair+Display" rel='stylesheet' type='text/css'>
<link href="../../../../../fonts.googleapis.com/css@family=Open+Sans" rel='stylesheet' type='text/css'>
<link href="../../../../../fonts.googleapis.com/css@family=Open+Sans+Condensed-3A300" rel='stylesheet' type='text/css'>
<link href="../../../../../fonts.googleapis.com/css@family=Berkshire+Swash" rel='stylesheet' type='text/css'>
<script type="text/javascript" SRC="../../../skin/frontend/default/theme423/js/jquery-1.7.min.js"></script>
<script type="text/javascript" SRC="../../../skin/frontend/default/theme423/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" SRC="../../../skin/frontend/default/theme423/js/superfish.js"></script>
<script type="text/javascript" SRC="../../../skin/frontend/default/theme423/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" SRC="../../../skin/frontend/default/theme423/js/jquery.mobile.customized.min.js"></script>
<script type="text/javascript" SRC="../../../skin/frontend/default/theme423/js/scripts.js"></script>
<script type="text/javascript" SRC="../../../skin/frontend/default/theme423/js/easyTooltip.js"></script>
<script type="text/javascript" SRC="../../../skin/frontend/default/theme423/js/jquery.jcarousel.min.js"></script>
<script type="text/javascript" SRC="../../../skin/frontend/default/theme423/js/jquery.iosslider.min.js"></script>
<!--[if lt IE 7]>
<script type="text/javascript">
//<![CDATA[
    var BLANK_URL = 'http://livedemo00.template-help.com/magento_42124/js/blank.html';
    var BLANK_IMG = 'http://livedemo00.template-help.com/magento_42124/js/spacer.gif';
//]]>
</script>
<![endif]-->
<!--[if lt IE 8]>
<div style=' clear: both; text-align:center; position: relative;'>
 <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a>
</div>
<![endif]-->
<!--[if lt IE 9]>
	<style>
	body {
		min-width: 960px !important;
	}
	</style>
<![endif]-->
<link rel="stylesheet" type="text/css" href="../../../skin/frontend/default/theme423/css/styles.css" media="all"/>
<link rel="stylesheet" type="text/css" href="../../../skin/frontend/default/theme423/css/responsive.css" media="all"/>
<link rel="stylesheet" type="text/css" href="../../../skin/frontend/default/theme423/css/superfish.css" media="all"/>
<link rel="stylesheet" type="text/css" href="../../../skin/frontend/default/theme423/css/camera.css" media="all"/>
<link rel="stylesheet" type="text/css" href="../../../skin/frontend/base/default/css/widgets.css" media="all"/>
<link rel="stylesheet" type="text/css" href="../../../skin/frontend/default/theme423/css/ecommerceteam/cloud-zoom.css" media="all"/>
<link rel="stylesheet" type="text/css" href="../../../skin/frontend/default/theme423/css/print.css" media="print"/>
<script type="text/javascript" SRC="../../../js/prototype/prototype.js"></script>
<script type="text/javascript" SRC="../../../js/lib/ccard.js"></script>
<script type="text/javascript" SRC="../../../js/prototype/validation.js"></script>
<script type="text/javascript" SRC="../../../js/scriptaculous/builder.js"></script>
<script type="text/javascript" SRC="../../../js/scriptaculous/effects.js"></script>
<script type="text/javascript" SRC="../../../js/scriptaculous/dragdrop.js"></script>
<script type="text/javascript" SRC="../../../js/scriptaculous/controls.js"></script>
<script type="text/javascript" SRC="../../../js/scriptaculous/slider.js"></script>
<script type="text/javascript" SRC="../../../js/varien/js.js"></script>
<script type="text/javascript" SRC="../../../js/varien/form.js"></script>
<script type="text/javascript" SRC="../../../js/mage/translate.js"></script>
<script type="text/javascript" SRC="../../../js/mage/cookies.js"></script>
<script type="text/javascript" SRC="../../../js/ecommerceteam/cloud-zoom.1.0.2.min.js"></script>
<script type="text/javascript" SRC="../../../js/mage/captcha.js"></script>
<!--[if lt IE 8]>
<link rel="stylesheet" type="text/css" href="http://livedemo00.template-help.com/magento_42124/skin/frontend/default/theme423/css/styles-ie.css" media="all" />
<![endif]-->
<!--[if lt IE 7]>
<script type="text/javascript" src="http://livedemo00.template-help.com/magento_42124/js/lib/ds-sleight.js"></script>
<script type="text/javascript" src="http://livedemo00.template-help.com/magento_42124/skin/frontend/base/default/js/ie6.js"></script>
<![endif]-->
<script type="text/javascript">
//<![CDATA[
Mage.Cookies.path     = '../../../../magento_42124';
Mage.Cookies.domain   = '.livedemo00.template-help.com';
//]]>
</script>
<script type="text/javascript">//<![CDATA[
        var Translator = new Translate([]);
        //]]></script><script type="text/javascript">
/* <![CDATA[ */
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-7078796-5']);
_gaq.push(['_trackPageview']);

(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? '../../../../../https@ssl/index.htm' : '../../../../../www/index.htm') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

(function(b){(function(a){"__CF"in b&&"DJS"in b.__CF?b.__CF.DJS.push(a):"addEventListener"in b?b.addEventListener("load",a,!1):b.attachEvent("onload",a)})(function(){"FB"in b&&"Event"in FB&&"subscribe"in FB.Event&&(FB.Event.subscribe("edge.create",function(a){_gaq.push(["_trackSocial","facebook","like",a])}),FB.Event.subscribe("edge.remove",function(a){_gaq.push(["_trackSocial","facebook","unlike",a])}),FB.Event.subscribe("message.send",function(a){_gaq.push(["_trackSocial","facebook","send",a])}));"twttr"in b&&"events"in twttr&&"bind"in twttr.events&&twttr.events.bind("tweet",function(a){if(a){var b;if(a.target&&a.target.nodeName=="IFRAME")a:{if(a=a.target.src){a=a.split("#")[0].match(/[^?=&]+=([^&]*)?/g);b=0;for(var c;c=a[b];++b)if(c.indexOf("url")===0){b=unescape(c.split("=")[1]);break a}}b=void 0}_gaq.push(["_trackSocial","twitter","tweet",b])}})})})(window);
/* ]]> */
</script>
</head>
<body class=" customer-account-login">
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
<div class="header-container">
<div class="container_24">
<div class="grid_24">
<div class="header">
<div class="header-buttons">
<div class="row-1">
<div class="header-button top-login">
<ul class="links">
<li class="first last"><a HREF="index.htm" title="Log In" class="Login_link">Log In</a></li>
</ul>
</div>
<div class="header-button menu-list">
<a href="#"></a>
<ul class="links">
<li class="first"><a HREF="../index.htm" title="My Account">My Account</a></li>
<li><a HREF="../../../checkout/cart/index.htm" title="My Cart" class="top-link-cart">My Cart</a></li>
<li><a HREF="../../../checkout/index.htm" title="Checkout" class="top-link-checkout">Checkout</a></li>
<li class=" last"><a HREF="../../../wishlist/index.htm" title="My Wishlist">My Wishlist</a></li>
</ul>
</div>
<div class="header-button currency-list">
<a href="#">$</a>
<ul>
<li>
<a HREF="../../../directory/currency/switch/currency/GBP/uenc/aHR0cDovL2xpdmVkZW1vMDAudGVtcGxhdGUtaGVsc6DC50F23" title="GBP">British Pound Sterling - GBP</a>
</li>
<li>
<a HREF="../../../directory/currency/switch/currency/EUR/uenc/aHR0cDovL2xpdmVkZW1vMDAudGVtcGxhdGUtaGVscCDDB9BB2" title="EUR">Euro - EUR</a>
</li>
<li>
<a HREF="../../../directory/currency/switch/currency/USD/uenc/aHR0cDovL2xpdmVkZW1vMDAudGVtcGxhdGUtaGVsc7EB5CD62" title="USD">US Dollar - USD</a>
</li>
</ul>
</div>
<div class="header-button lang-list">
<a href="#"></a>
<ul>
<li>
<a HREF="template-help.com@___store=english&___from_store=english" title="en_US">English</a>
<span>
en </span>
</li>
<li>
<a HREF="template-help.com@___store=german&___from_store=english" title="de_DE">German</a>
<span>
</span>
</li>
<li>
<a HREF="template-help.com@___store=spanish&___from_store=english" title="es_ES">Spanish</a>
<span>
</span>
</li>
<li>
<a HREF="template-help.com@___store=russian&___from_store=english" title="ru_RU">Russian</a>
<span>
</span>
</li>
</ul>
</div>
</div>
<div class="quick-access">
<div class="header-links">
<ul class="links">
<li class="first last"><a HREF="index.htm" title="Log In" class="Login_link">Log In</a></li>
</ul>
<ul class="links">
<li class="first"><a HREF="../index.htm" title="My Account">My Account</a></li>
<li><a HREF="../../../checkout/cart/index.htm" title="My Cart" class="top-link-cart">My Cart</a></li>
<li><a HREF="../../../checkout/index.htm" title="Checkout" class="top-link-checkout">Checkout</a></li>
<li class=" last"><a HREF="../../../wishlist/index.htm" title="My Wishlist">My Wishlist</a></li>
</ul>
</div>
</div>
</div>
<div class="clear"></div>
<a HREF="../../../index.htm" title="Magento Commerce" class="logo"><strong>Magento Commerce</strong><img SRC="../../../skin/frontend/default/theme423/images/logo.png" alt="Magento Commerce"/></a>
<div class="clear"></div>
<div class="row-2">
<div class="block-cart-header">
<div class="block-content">
<p class="empty"><span class="cart-title">My Cart:</span>0 item(s)</p>
</div>
</div>
<script>
	jQuery('.block-cart-header .cart-content').hide();
	if (jQuery('.container_24').width() < 800) {
		jQuery('.block-cart-header .summary, .block-cart-header .cart-content').click(function(){
				jQuery('.block-cart-header .cart-content').stop(true, true).slideToggle(300);
			}
		)
	}
	else {
		jQuery('.block-cart-header .summary, .block-cart-header .cart-content').hover(
			function(){jQuery('.block-cart-header .cart-content').stop(true, true).slideDown(400);},
			function(){	jQuery('.block-cart-header .cart-content').stop(true, true).delay(400).slideUp(300);}
		);
	}
</script> <p class="welcome-msg">Welcome to our online store! </p>
<div class="clear"></div>
<form id="search_mini_form" action="http://livedemo00.template-help.com/magento_42124/catalogsearch/result/" method="get">
<div class="form-search">
<label for="search">Search:</label>
<input id="search" type="text" name="q" value="" class="input-text" maxlength="128"/>
<button type="submit" title="Search" class="button"><span><span>Search</span></span></button>
<div id="search_autocomplete" class="search-autocomplete"></div>
<script type="text/javascript">
        //<![CDATA[
            var searchForm = new Varien.searchForm('search_mini_form', 'search', '');
            searchForm.initAutocomplete('../../../catalogsearch/ajax/suggest/index.htm', 'search_autocomplete');
        //]]>
        </script>
</div>
</form>
</div>
<div class="clear"></div>
</div>
</div>
<div class="clear"></div>
</div>
</div>
<div class="nav-container">
<div class="container_24">
<div class="grid_24">
<div id="menu-icon">Categories</div>
<ul id="nav" class="sf-menu">
<li class="level0 nav-1 first level-top"><a HREF="../../../bracelets.html" class="level-top"><span>Bracelets</span></a></li><li class="level0 nav-2 level-top parent"><a HREF="../../../earrings.html" class="level-top"><span>Earrings</span></a><ul class="level0"><li class="level1 nav-2-1 first"><a HREF="../../../earrings/glass-earrings.html"><span>Glass Earrings</span></a></li><li class="level1 nav-2-2"><a HREF="../../../earrings/metal-earrings.html"><span>Metal Earrings</span></a></li><li class="level1 nav-2-3 last"><a HREF="../../../earrings/plastic-earrings.html"><span>Plastic Earrings</span></a></li></ul></li><li class="level0 nav-3 level-top"><a HREF="../../../neclaces.html" class="level-top"><span>Necklaces</span></a></li><li class="level0 nav-4 level-top"><a HREF="../../../rings.html" class="level-top"><span>Rings</span></a></li><li class="level0 nav-5 last level-top"><a HREF="../../../sets.html" class="level-top"><span>Sets</span></a></li> </ul>
</div>
<div class="clear"></div>
</div>
</div>
<div class="main-container col1-layout">
<div class="container_24">
<div class="grid_24">
<div class="main">
<div class="col-main alpha grid_24 omega">
<div class="account-login">
<div class="page-title">
<h1>Login or Create an Account</h1>
</div>
<form action="http://livedemo00.template-help.com/magento_42124/customer/account/loginPost/" method="post" id="login-form">
<div class="col2-set">
<div class="wrapper">
<div class="registered-users-wrapper grid_12 omega">
<div class="col-2 registered-users">
<div class="content">
<h2>Registered Customers</h2>
<p>If you have an account with us, please log in.</p>
<ul class="form-list">
<li>
<label for="email" class="required"><em>*</em>Email Address</label>
<div class="input-box">
<input type="email" name="login[username]" value="" id="email" class="input-text required-entry validate-email" title="Email Address"/>
</div>
</li>
<li>
<label for="pass" class="required"><em>*</em>Password</label>
<div class="input-box">
<input type="password" name="login[password]" class="input-text required-entry validate-password" id="pass" title="Password"/>
</div>
</li>
</ul>
<div id="window-overlay" class="window-overlay" style="display:none;"></div>
<div id="remember-me-popup" class="remember-me-popup" style="display:none;">
<div class="remember-me-popup-head">
<h3>What's this?</h3>
<a href="#" class="remember-me-popup-close" title="Close">Close</a>
</div>
<div class="remember-me-popup-body">
<p>Checking &quot;Remember Me&quot; will let you access your shopping cart on this computer when you are logged out</p>
<div class="remember-me-popup-close-button a-right">
<a href="#" class="remember-me-popup-close button" title="Close"><span>Close</span></a>
</div>
</div>
</div>
<script type="text/javascript">
//<![CDATA[
    function toggleRememberMepopup(event){
        if($('remember-me-popup')){
            var viewportHeight = document.viewport.getHeight(),
                docHeight      = $$('body')[0].getHeight(),
                height         = docHeight > viewportHeight ? docHeight : viewportHeight;
            $('remember-me-popup').toggle();
            $('window-overlay').setStyle({ height: height + 'px' }).toggle();
        }
        Event.stop(event);
    }

    document.observe("dom:loaded", function() {
        new Insertion.Bottom($$('body')[0], $('window-overlay'));
        new Insertion.Bottom($$('body')[0], $('remember-me-popup'));

        $$('.remember-me-popup-close').each(function(element){
            Event.observe(element, 'click', toggleRememberMepopup);
        })
        $$('#remember-me-box a').each(function(element) {
            Event.observe(element, 'click', toggleRememberMepopup);
        });
    });
//]]>
</script>
<p class="required">* Required Fields</p>
<div class="buttons-set">
<a HREF="../forgotpassword/index.htm" class="f-left">Forgot Your Password?</a>
<button type="submit" class="button" title="Login" name="send" id="send2"><span><span>Login</span></span></button>
</div>
</div>
</div>
</div>
<div class="new-users-wrapper alpha grid_12">
<div class="col-1 new-users">
<div class="content">
<h2>New Customers</h2>
<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
<div class="buttons-set">
<button type="button" title="Create an Account" class="button" onclick="window.location='../create/index.htm';"><span><span>Create an Account</span></span></button>
</div>
</div>
</div>
</div>
</div>
</div>
</form>
<script type="text/javascript">
    //<![CDATA[
        var dataForm = new VarienForm('login-form', true);
    //]]>
    </script>
</div>
</div>
<div class="clear"></div>
</div>
</div>
<div class="clear"></div>
</div>
</div>
<div class="footer-container">
<div class="container_24">
<div class="wrapper">
<div class="grid_24">
<div class="footer">
<div class="footer-cols-wrapper">
<div class="footer-col">
<h4>Information</h4>
<div class="footer-col-content">
<ul>
<li><a HREF="../../../about-magento-demo-store">About Us</a></li>
<li><a HREF="../../../customer-service">Customer Service</a></li>
<li class="last privacy"><a HREF="../../../privacy-policy-cookie-restriction-mode">Privacy Policy</a></li>
</ul> <ul class="links">
<li class="first"><a HREF="../../../catalog/seo_sitemap/category/index.htm" title="Site Map">Site Map</a></li>
<li><a HREF="../../../catalogsearch/term/popular/index.htm" title="Search Terms">Search Terms</a></li>
<li><a HREF="../../../catalogsearch/advanced/index.htm" title="Advanced Search">Advanced Search</a></li>
<li><a HREF="../../../sales/guest/form/index.htm" title="Orders and Returns">Orders and Returns</a></li>
<li class=" last"><a HREF="../../../contacts/index.htm" title="Contact Us">Contact Us</a></li>
</ul>
</div>
</div>
</div>
<address>&copy; <script type="text/javascript">var mdate = new Date(); document.write(mdate.getFullYear());</script> Magento Demo Store. All Rights Reserved.</address>
<div class="clear"></div>
<ul class="social-buttons">
<li class="item-1"><a href="#"></a></li>
<li class="item-2"><a href="#"></a></li>
<li class="item-3"><a href="#"></a></li>
</ul> </div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
