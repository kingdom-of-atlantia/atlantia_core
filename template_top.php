<?php
$proto = 'http';
if($_SERVER["HTTPS"] = "on")
{
	$proto = 'https';
}
?>

<!DOCTYPE html>
<html lang="" dir="ltr">
<head >
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="This is a website of the Kingdom of Atlantia. Part of the Society for Creative Anachronism." />
	<title><?=$SITE_TITLE_MENU ?> - Kingdom of Atlantia, SCA Inc</title>
	<link href="<?=$proto ?>://atlantia.sca.org/templates/jsn_decor_pro/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
	<link href="<?=$proto ?>://atlantia.sca.org/plugins/system/jcemediabox/css/jcemediabox.css?1d12bb5a40100bbd1841bfc0e498ce7b" rel="stylesheet" type="text/css" />
	<link href="<?=$proto ?>://atlantia.sca.org/plugins/system/jcemediabox/themes/standard/css/style.css?50fba48f56052a048c5cf30829163e4d" rel="stylesheet" type="text/css" />
	<link href="<?=$proto ?>://atlantia.sca.org/media/tooltips/css/style.min.css?v=7.2.1.p" rel="stylesheet" type="text/css" />
	<link href="<?=$proto ?>://atlantia.sca.org/media/modals/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?=$proto ?>://atlantia.sca.org/media/jui/css/bootstrap.min.css?c967f2ef488d3718c7148508c5f581c3" rel="stylesheet" type="text/css" />
	<link href="<?=$proto ?>://atlantia.sca.org/media/jui/css/bootstrap-responsive.min.css?c967f2ef488d3718c7148508c5f581c3" rel="stylesheet" type="text/css" />
	<link href="<?=$proto ?>://atlantia.sca.org/media/jui/css/bootstrap-extended.css?c967f2ef488d3718c7148508c5f581c3" rel="stylesheet" type="text/css" />
	<link href="<?=$proto ?>://atlantia.sca.org/plugins/system/jsntplframework/assets/3rd-party/bootstrap/css/bootstrap-frontend.min.css" rel="stylesheet" type="text/css" />
	<link href="<?=$proto ?>://atlantia.sca.org/plugins/system/jsntplframework/assets/3rd-party/bootstrap/css/bootstrap-responsive-frontend.min.css" rel="stylesheet" type="text/css" />
	<link href="<?=$proto ?>://atlantia.sca.org/templates/jsn_decor_pro/css/print.css" rel="stylesheet" type="text/css" media="Print" />
	<link href="<?=$proto ?>://atlantia.sca.org/templates/system/css/system.css" rel="stylesheet" type="text/css" />
	<link href="<?=$proto ?>://atlantia.sca.org/templates/system/css/general.css" rel="stylesheet" type="text/css" />
	<link href="<?=$proto ?>://atlantia.sca.org/templates/jsn_decor_pro/css/template.css" rel="stylesheet" type="text/css" />
	<link href="<?=$proto ?>://atlantia.sca.org/templates/jsn_decor_pro/css/template_pro.css" rel="stylesheet" type="text/css" />
	<link href="<?=$proto ?>://atlantia.sca.org/templates/jsn_decor_pro/css/colors/darkblue.css" rel="stylesheet" type="text/css" />
	<link href="<?=$proto ?>://atlantia.sca.org/templates/jsn_decor_pro/css/styles/personal.css" rel="stylesheet" type="text/css" />
	<link href="<?=$proto ?>://atlantia.sca.org/templates/jsn_decor_pro/css/jsn_iconlinks.css" rel="stylesheet" type="text/css" />
	<link href="<?=$proto ?>://atlantia.sca.org/templates/jsn_decor_pro/css/layouts/jsn_wide.css" rel="stylesheet" type="text/css" />
	<link href="<?=$proto ?>://atlantia.sca.org/templates/jsn_decor_pro/css/layouts/jsn_mobile.css" rel="stylesheet" type="text/css" />
	<link href="<?=$proto ?>://atlantia.sca.org/templates/jsn_decor_pro/css/jsn_social_icons.css" rel="stylesheet" type="text/css" />
	<link href="<?=$proto ?>://atlantia.sca.org/templates/jsn_decor_pro/css/custom.css" rel="stylesheet" type="text/css" />
	<link href="<?=$proto ?>://atlantia.sca.org/templates/jsn_decor_pro/css/template_custom.css" rel="stylesheet" type="text/css" />
	<link href="<?=$proto ?>://atlantia.sca.org/media/system/css/modal.css?c967f2ef488d3718c7148508c5f581c3" rel="stylesheet" type="text/css" />
	<link href="<?=$proto ?>://atlantia.sca.org/modules/mod_bt_login/tmpl/css/style2.0.css" rel="stylesheet" type="text/css" />
	<style type="text/css">

 .rl_tooltips-link {border-bottom: 1px dashed #cccccc;} .rl_tooltips.popover {max-width: 400px;z-index: 10000;}

	div.jsn-modulecontainer ul.menu-mainmenu ul,
	div.jsn-modulecontainer ul.menu-mainmenu ul li {
		width: 200px;
	}
	div.jsn-modulecontainer ul.menu-mainmenu ul ul {
		margin-left: 199px;
	}
	#jsn-pos-toolbar div.jsn-modulecontainer ul.menu-mainmenu ul ul {
		margin-right: 199px;
		margin-left : auto
	}
	div.jsn-modulecontainer ul.menu-sidemenu ul,
	div.jsn-modulecontainer ul.menu-sidemenu ul li {
		width: 200px;
	}
	div.jsn-modulecontainer ul.menu-sidemenu > li > ul {
		right: -230px;
		right: -220px\9;
	}
	body.jsn-direction-rtl div.jsn-modulecontainer ul.menu-sidemenu > li > ul {
		left: -230px;
		left: -220px\9;
		right: auto;
	}
	div.jsn-modulecontainer ul.menu-sidemenu ul ul {
		margin-left: 199px;
	}
	</style>
	<script type="application/json" class="joomla-script-options new">{"csrf.token":"bbf851ade6f34daaf0c4a7d15839955f","system.paths":{"root":"","base":""},"rl_tooltips":{"timeout":3000,"delay_hide":250,"delay_hide_touchscreen":3000,"use_auto_positioning":1,"fallback_position":"bottom"},"rl_modals":{"class":"modal_link","defaults":{"opacity":"0.8","maxWidth":"95%","maxHeight":"95%","current":"{current} \/ {total}","previous":"previous","next":"next","close":"close","xhrError":"This content failed to load.","imgError":"This image failed to load."},"auto_correct_size":1,"auto_correct_size_delay":0}}</script>
	<script src="<?=$proto ?>://atlantia.sca.org/media/jui/js/jquery.min.js?c967f2ef488d3718c7148508c5f581c3" type="text/javascript"></script>
	<script src="<?=$proto ?>://atlantia.sca.org/media/jui/js/jquery-noconflict.js?c967f2ef488d3718c7148508c5f581c3" type="text/javascript"></script>
	<script src="<?=$proto ?>://atlantia.sca.org/media/jui/js/jquery-migrate.min.js?c967f2ef488d3718c7148508c5f581c3" type="text/javascript"></script>
	<script src="<?=$proto ?>://atlantia.sca.org/media/jui/js/bootstrap.min.js?c967f2ef488d3718c7148508c5f581c3" type="text/javascript"></script>
	<script src="<?=$proto ?>://atlantia.sca.org/media/system/js/caption.js?c967f2ef488d3718c7148508c5f581c3" type="text/javascript"></script>
	<script src="<?=$proto ?>://atlantia.sca.org/plugins/system/jcemediabox/js/jcemediabox.js?0c56fee23edfcb9fbdfe257623c5280e" type="text/javascript"></script>
	<script src="<?=$proto ?>://atlantia.sca.org/media/system/js/core.js?c967f2ef488d3718c7148508c5f581c3" type="text/javascript"></script>
	<script src="<?=$proto ?>://atlantia.sca.org/media/tooltips/js/script.min.js?v=7.2.1.p" type="text/javascript"></script>
	<script src="<?=$proto ?>://atlantia.sca.org/media/modals/js/jquery.touchSwipe.min.js" type="text/javascript"></script>
	<script src="<?=$proto ?>://atlantia.sca.org/media/modals/js/jquery.colorbox-min.js" type="text/javascript"></script>
	<script src="<?=$proto ?>://atlantia.sca.org/media/modals/js/script.min.js?v=9.11.0" type="text/javascript"></script>
	<script src="<?=$proto ?>://atlantia.sca.org/media/system/js/mootools-core.js?c967f2ef488d3718c7148508c5f581c3" type="text/javascript"></script>
	<script src="<?=$proto ?>://atlantia.sca.org/media/system/js/mootools-more.js?c967f2ef488d3718c7148508c5f581c3" type="text/javascript"></script>
	<script src="<?=$proto ?>://atlantia.sca.org/plugins/system/jsntplframework/assets/joomlashine/js/noconflict.js" type="text/javascript"></script>
	<script src="<?=$proto ?>://atlantia.sca.org/plugins/system/jsntplframework/assets/joomlashine/js/utils.js" type="text/javascript"></script>
	<script src="<?=$proto ?>://atlantia.sca.org/templates/jsn_decor_pro/js/jsn_template.js" type="text/javascript"></script>
	<script src="<?=$proto ?>://atlantia.sca.org/media/system/js/modal.js?c967f2ef488d3718c7148508c5f581c3" type="text/javascript"></script>
	<script src="<?=$proto ?>://atlantia.sca.org/templates/jsn_decor_pro/js/custom.js" type="text/javascript"></script>
	<script src="<?=$proto ?>://atlantia.sca.org/modules/mod_bt_login/tmpl/js/jquery.simplemodal.js" type="text/javascript"></script>
	<script src="<?=$proto ?>://atlantia.sca.org/modules/mod_bt_login/tmpl/js/default.js" type="text/javascript"></script>
	<script type="text/javascript">
jQuery(function($){ $(".dropdown-toggle").dropdown(); });
jQuery(window).on('load',  function() {
				new JCaption('img.caption');
			});
JCEMediaBox.init({popup:{width:"",height:"",legacy:0,lightbox:0,shadowbox:0,resize:1,icons:1,overlay:1,overlayopacity:0.8,overlaycolor:"#000000",fadespeed:500,scalespeed:500,hideobjects:0,scrolling:"fixed",close:2,labels:{'close':'Close','next':'Next','previous':'Previous','cancel':'Cancel','numbers':'{$current} of {$total}'},cookie_expiry:"",google_viewer:0},tooltip:{className:"tooltip",opacity:0.8,speed:150,position:"br",offsets:{x: 16, y: 16}},base:"/",imgpath:"plugins/system/jcemediabox/img",theme:"standard",themecustom:"",themepath:"plugins/system/jcemediabox/themes",mediafallback:0,mediaselector:"audio,video"});
				JSNTemplate.initTemplate({
					templatePrefix			: "jsn_decor_pro_",
					templatePath			: "/templates/jsn_decor_pro",
					enableRTL				: 0,
					enableGotopLink			: 1,
					enableMobile			: 1,
					enableMobileMenuSticky	: 1,
					enableDesktopMenuSticky	: 1,
					responsiveLayout		: ["mobile","wide"],
					mobileMenuEffect		: "default"
				});

		jQuery(function($) {
			SqueezeBox.initialize({});
			SqueezeBox.assign($('a.modal').get(), {
				parse: 'rel'
			});
		});

		window.jModalClose = function () {
			SqueezeBox.close();
		};

		// Add extra modal close functionality for tinyMCE-based editors
		document.onreadystatechange = function () {
			if (document.readyState == 'interactive' && typeof tinyMCE != 'undefined' && tinyMCE)
			{
				if (typeof window.jModalClose_no_tinyMCE === 'undefined')
				{
					window.jModalClose_no_tinyMCE = typeof(jModalClose) == 'function'  ?  jModalClose  :  false;

					jModalClose = function () {
						if (window.jModalClose_no_tinyMCE) window.jModalClose_no_tinyMCE.apply(this, arguments);
						tinyMCE.activeEditor.windowManager.close();
					};
				}

				if (typeof window.SqueezeBoxClose_no_tinyMCE === 'undefined')
				{
					if (typeof(SqueezeBox) == 'undefined')  SqueezeBox = {};
					window.SqueezeBoxClose_no_tinyMCE = typeof(SqueezeBox.close) == 'function'  ?  SqueezeBox.close  :  false;

					SqueezeBox.close = function () {
						if (window.SqueezeBoxClose_no_tinyMCE)  window.SqueezeBoxClose_no_tinyMCE.apply(this, arguments);
						tinyMCE.activeEditor.windowManager.close();
					};
				}
			}
		};

jQuery(function($){ $(".hasTooltip").tooltip({"html": true,"container": "body"}); });
	</script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0" />

	<!-- html5.js and respond.min.js for IE less than 9 -->
	<!--[if lt IE 9]>
		<script src="<?=$proto ?>://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script src="<?=$proto ?>://atlantia.sca.org/plugins/system/jsntplframework/assets/3rd-party/respond/respond.min.js"></script>
	<![endif]-->
	</head>
<body id="jsn-master" class="jsn-textstyle-personal jsn-color-darkblue jsn-direction-ltr jsn-responsive jsn-mobile jsn-joomla-30  jsn-com-content jsn-view-article jsn-itemid-318">
	<a id="top"></a>
		<div id="jsn-page">
			<div id="jsn-header">
			<div id="jsn-header-inner1">
			<div id="jsn-header-inner2">
				<div id="jsn-logo" class="pull-left">
			<a href="<?=$proto ?>://atlantia.sca.org/index.php" title="Welcome to the Kingdom of Atlantia"><img src="<?=$proto ?>://atlantia.sca.org/images/banners/welcome-to-atlantia-evanescent--1000x100y.png" alt="Welcome to the Kingdom of Atlantia" id="jsn-logo-desktop" /></a>			</div>
			<div id="jsn-headerright" class="pull-right">
							<div id="jsn-pos-top" class="pull-left">
					<div class=" jsn-modulecontainer"><div class="jsn-modulecontainer_inner"><div class="jsn-modulecontent"><div id="btl">
	<!-- Panel top -->

	<!-- content dropdown/modal box -->
	<div id="btl-content">

		<!-- Form login -->
		<div id="btl-content-login" class="btl-content-block">

			<!-- if not integrated any component -->
						<form name="btl-formlogin" class="btl-formlogin" action="/offices/atlantia-officers-web" method="post">
				<div id="btl-login-in-process"></div>
				<h3>Kingdom Officer Login</h3>
									<div class="spacer"></div>
								<div class="btl-label"><p>This login is for Kingdom Officers and staff use only.</p></div>
                <div class="clear"></div>
				<div class="btl-error" id="btl-login-error"></div>
				<div class="btl-field">
					<div class="btl-label">Username *</div>
					<div class="btl-input">
						<input id="btl-input-username" type="text" name="username"	/>
					</div>
				</div>
				<div class="btl-field">
					<div class="btl-label">Password *</div>
					<div class="btl-input">
						<input id="btl-input-password" type="password" name="password" alt="password" />
					</div>
				</div>
				<div class="clear"></div>
								<div class="btl-field">

					<div class="btl-input" id="btl-input-remember">
						<input id="btl-checkbox-remember"  type="checkbox" name="remember"
							value="yes" />
							Remember Me					</div>
				</div>
				<div class="clear"></div>
								<div class="btl-buttonsubmit">
					<input type="submit" name="Submit" class="btl-buttonsubmit" onclick="return loginAjax()" value="Log in" />
					<input type="hidden" name="bttask" value="login" />
					<input type="hidden" name="return" id="btl-return"	value="aW5kZXgucGhwP0l0ZW1pZD0zMTg=" />
					<input type="hidden" name="bbf851ade6f34daaf0c4a7d15839955f" value="1" />				</div>
			</form>
			<ul id ="bt_ul">
				<li>
					<a href="<?=$proto ?>://atlantia.sca.org/more/kingdom-officer-login?view=reset">
					Forgot your password?</a>
				</li>
				<li>
					<a href="<?=$proto ?>://atlantia.sca.org/more/kingdom-officer-login?view=remind">
					Forgot your username?</a>
				</li>
			</ul>

		<!-- if integrated with one component -->

		</div>


	</div>
	<div class="clear"></div>
</div>

<script type="text/javascript">
/*<![CDATA[*/
var btlOpt =
{
	BT_AJAX					:'http://atlantia.sca.org/offices/atlantia-officers-web',
	BT_RETURN				:'/offices/atlantia-officers-web',
	RECAPTCHA				:'none',
	LOGIN_TAGS				:'',
	REGISTER_TAGS			:'',
	EFFECT					:'btl-modal',
	ALIGN					:'right',
	BG_COLOR				:'#2B363C',
	MOUSE_EVENT				:'click',
	TEXT_COLOR				:'#dddddd',
	MESSAGES 				: {
		E_LOGIN_AUTHENTICATE 		: 'Username and password do not match or you do not have an account yet.',
		REQUIRED_NAME				: 'Please enter your name!',
		REQUIRED_USERNAME			: 'Please enter your username!',
		REQUIRED_PASSWORD			: 'Please enter your password!',
		REQUIRED_VERIFY_PASSWORD	: 'Please re-enter your password!',
		PASSWORD_NOT_MATCH			: 'Password does not match the verify password!',
		REQUIRED_EMAIL				: 'Please enter your email!',
		EMAIL_INVALID				: 'Please enter a valid email!',
		REQUIRED_VERIFY_EMAIL		: 'Please re-enter your email!',
		EMAIL_NOT_MATCH				: 'Email does not match the verify email!',
		CAPTCHA_REQUIRED			: 'Please enter captcha key'
	}
}
if(btlOpt.ALIGN == "center"){
	BTLJ(".btl-panel").css('textAlign','center');
}else{
	BTLJ(".btl-panel").css('float',btlOpt.ALIGN);
}
BTLJ("input.btl-buttonsubmit,button.btl-buttonsubmit").css({"color":btlOpt.TEXT_COLOR,"background":btlOpt.BG_COLOR});
BTLJ("#btl .btl-panel > span").css({"color":btlOpt.TEXT_COLOR,"background-color":btlOpt.BG_COLOR,"border":btlOpt.TEXT_COLOR});
/*]]>*/
</script>

<div class="clearbreak"></div></div></div></div>
					<div class="clearbreak"></div>
				</div>
							<div id="jsn-social-icons" class="pull-right">
					<ul>
										<li class="facebook">
							<a href="<?=$proto ?>://www.facebook.com/AtlantiaSCA" title="Facebook" target="_blank">
								Facebook</a>
						</li>
										<li class="twitter">
							<a href="<?=$proto ?>://www.twitter.com/atlantiasca" title="Twitter" target="_blank">
								Twitter</a>
						</li>
										<li class="youtube">
							<a href="https://www.youtube.com/results?search_query=atlantia+sca" title="YouTube" target="_blank">
								YouTube</a>
						</li>
									</ul>
				</div>
							</div>
				<div class="clearbreak"></div>
			</div>
							<div id="jsn-menu">
					<div id="jsn-menu-inner1">
					<div id="jsn-menu-inner2">
					<div id="jsn-menu-inner3">
						<div class="left">&nbsp;</div>
												<div id="jsn-pos-mainmenu" >
								<div class=" jsn-modulecontainer"><div class="jsn-modulecontainer_inner"><div class="jsn-modulecontent"><span id="jsn-menu-toggle-parent" class="jsn-menu-toggle"><i class="fa fa-navicon"></i></span>
<ul class="menu-mainmenu menu-iconmenu menu-richmenu">
	<li class="jsn-menu-mobile-control"><span class="close-menu"><i class="fa fa-times"></i></span></li>
	<li  class="first"><a class="jsn-nodescription clearfix" href="<?=$proto ?>://atlantia.sca.org/" >
		<span>
		<span class="jsn-menutitle">Home</span>	</span>
</a></li><li  class="parent">	<a class="clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/chatelain/welcome-to-the-sca" title="Information, Local Groups" >
				<span>
		<span class="jsn-menutitle">Newcomer Information</span><span class="jsn-menudescription">Information, Local Groups</span>		</span>
	</a>
	<span class="jsn-menu-toggle"><i class="fa fa-navicon"></i></span><ul><li  class="first hidden-link">	<a class="clearfix" href="<?=$proto ?>://atlantia.sca.org/" >
		<i class="hidden-link "></i>		<span>
		<span class="jsn-menutitle">Atlantia Home</span>		</span>
	</a>
	</li><li  class="">	<a class="clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/chatelain/welcome-to-the-sca" >
				<span>
		<span class="jsn-menutitle">Welcome to the SCA</span>		</span>
	</a>
	</li><li  class="">	<a class="clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/chatelain/atlantia-map" >
				<span>
		<span class="jsn-menutitle">Map of Atlantia</span>		</span>
	</a>
	</li><li  class="">	<a class="clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/chatelain/groups" >
				<span>
		<span class="jsn-menutitle">Find Your Local Group</span>		</span>
	</a>
	</li><li  class="">	<a class="clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/baronage" >
				<span>
		<span class="jsn-menutitle">Landed Baronage</span>		</span>
	</a>
	</li><li  class="">	<a class="clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/chatelain/going-to-your-first-event" >
				<span>
		<span class="jsn-menutitle">Going to Your First Event</span>		</span>
	</a>
	</li><li  class="">	<a class="clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/chatelain/advice-to-newcomers" >
				<span>
		<span class="jsn-menutitle">Advice to Newcomers</span>		</span>
	</a>
	</li><li  class="">	<a class="clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/chatelain/officers-and-titles" >
				<span>
		<span class="jsn-menutitle">Officers and Titles</span>		</span>
	</a>
	</li><li  class="external-white">		<a class=" clearfix" href="<?=$proto ?>://socsen.sca.org/society-chatelaine/newcomer-resources-and-information/" target="_blank" title="Society Page" >
			<i class="external-white"></i>			<span>
			<span class="jsn-menutitle">Society Newcomer's Page</span><span class="jsn-menudescription">Society Page</span>			</span>
		</a>
</li><li  class="last external-white">		<a class=" clearfix" href="<?=$proto ?>://www.sca.org/members/about.html" target="_blank" title="Society Page" >
			<i class="external-white"></i>			<span>
			<span class="jsn-menutitle">Join the SCA</span><span class="jsn-menudescription">Society Page</span>			</span>
		</a>
</li></ul></li><li  class="parent">	<a class="clearfix" href="<?=$proto ?>://atlantia.sca.org/royalty/trm/contact-information" >
				<span>
		<span class="jsn-menutitle">Royalty</span>		</span>
	</a>
	<span class="jsn-menu-toggle"><i class="fa fa-navicon"></i></span><ul><li  class="first hidden-link">	<a class="clearfix" href="<?=$proto ?>://atlantia.sca.org/" >
		<i class="hidden-link "></i>		<span>
		<span class="jsn-menutitle">Atlantia Home</span>		</span>
	</a>
	</li><li  class="parent">	<a class="clearfix" href="<?=$proto ?>://atlantia.sca.org/royalty/trm/contact-information" >
				<span>
		<span class="jsn-menutitle">Their Royal Majesties</span>		</span>
	</a>
	<span class="jsn-menu-toggle"><i class="fa fa-navicon"></i></span><ul><li  class="first"><a class="jsn-nodescription clearfix" href="<?=$proto ?>://atlantia.sca.org/royalty/trm/contact-information" >
		<span>
		<span class="jsn-menutitle">Contact Information</span>	</span>
</a></li><li  class=""><a class="jsn-nodescription clearfix" href="<?=$proto ?>://atlantia.sca.org/royalty/trm/royal-progress" >
		<span>
		<span class="jsn-menutitle">Royal Progress</span>	</span>
</a></li><li  class="last"><a class="jsn-nodescription clearfix" href="<?=$proto ?>://atlantia.sca.org/royalty/trm/royal-whims" >
		<span>
		<span class="jsn-menutitle">Royal Whims</span>	</span>
</a></li></ul></li><li  class="parent">	<a class="clearfix" href="<?=$proto ?>://atlantia.sca.org/royalty/trh/contact-information" >
				<span>
		<span class="jsn-menutitle">Their Royal Highnesses</span>		</span>
	</a>
	<span class="jsn-menu-toggle"><i class="fa fa-navicon"></i></span><ul><li  class="first"><a class="jsn-nodescription clearfix" href="<?=$proto ?>://atlantia.sca.org/royalty/trh/contact-information" >
		<span>
		<span class="jsn-menutitle">Contact Information</span>	</span>
</a></li><li  class=""><a class="jsn-nodescription clearfix" href="<?=$proto ?>://atlantia.sca.org/royalty/trh/royal-progress" >
		<span>
		<span class="jsn-menutitle">Royal Progress</span>	</span>
</a></li><li  class="last"><a class="jsn-nodescription clearfix" href="<?=$proto ?>://atlantia.sca.org/royalty/trh/royal-whims" >
		<span>
		<span class="jsn-menutitle">Royal Whims</span>	</span>
</a></li></ul></li><li  class="last"><a class="clearfix" href="<?=$proto ?>://atlantia.sca.org/royalty/royal-notables" title="A&amp;S, Martial Champions" >
		<span>
		<span class="jsn-menutitle">Royal Notables</span><span class="jsn-menudescription">A&amp;S, Martial Champions</span>	</span>
</a></li></ul></li><li  class="active parent">	<a class="clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/officers/regnum" >
				<span>
		<span class="jsn-menutitle">Offices</span>		</span>
	</a>
	<span class="jsn-menu-toggle"><i class="fa fa-navicon"></i></span><ul><li  class="first hidden-link">	<a class="clearfix" href="<?=$proto ?>://atlantia.sca.org/" >
		<i class="hidden-link "></i>		<span>
		<span class="jsn-menutitle">Atlantia Home</span>		</span>
	</a>
	</li><li  class="parent">	<a class="clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/officers/regnum" >
				<span>
		<span class="jsn-menutitle">Kingdom Officers</span>		</span>
	</a>
	<span class="jsn-menu-toggle"><i class="fa fa-navicon"></i></span><ul><li  class="first"><a class="jsn-nodescription clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/officers/regnum" >
		<span>
		<span class="jsn-menutitle">Regnum</span>	</span>
</a></li><li  class="last"><a class="clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/officers/order-principals" title="of Peerage and Merit" >
		<span>
		<span class="jsn-menutitle">Order Principals</span><span class="jsn-menudescription">of Peerage and Merit</span>	</span>
</a></li></ul></li><li  class="parent">	<a class="clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/seneschal/welcome" title="Chief Administrative Officer" >
				<span>
		<span class="jsn-menutitle">Seneschal</span><span class="jsn-menudescription">Chief Administrative Officer</span>		</span>
	</a>
	<span class="jsn-menu-toggle"><i class="fa fa-navicon"></i></span><ul><li  class="first"><a class="jsn-nodescription clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/seneschal/welcome" >
		<span>
		<span class="jsn-menutitle">Welcome to the Seneschal's Page</span>	</span>
</a></li><li  class=""><a class="jsn-nodescription clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/seneschal/branch-seneschals" >
		<span>
		<span class="jsn-menutitle">Branch Seneschals</span>	</span>
</a></li><li  class=""><a class="jsn-nodescription clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/seneschal/seneschal-forms-procedures" >
		<span>
		<span class="jsn-menutitle">Forms & Procedures</span>	</span>
</a></li><li  class=""><a class="jsn-nodescription clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/seneschal/submit-seneschal-report" >
		<span>
		<span class="jsn-menutitle">Submit Seneschal Report</span>	</span>
</a></li><li  class="parent">	<a class="clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/seneschal/youths/welcome" >
				<span>
		<span class="jsn-menutitle">Chancellor of Youths</span>		</span>
	</a>
	<span class="jsn-menu-toggle"><i class="fa fa-navicon"></i></span><ul><li  class="first"><a class="jsn-nodescription clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/seneschal/youths/welcome" >
		<span>
		<span class="jsn-menutitle">Welcome to the Chancellor of Youths</span>	</span>
</a></li><li  class=""><a class="jsn-nodescription clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/seneschal/youths/information-for-parents" >
		<span>
		<span class="jsn-menutitle">Information for Parents</span>	</span>
</a></li><li  class=""><a class="jsn-nodescription clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/seneschal/youths/pages" >
		<span>
		<span class="jsn-menutitle">Pages Academy</span>	</span>
</a></li><li  class=""><a class="jsn-nodescription clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/seneschal/youths/youth-awards" >
		<span>
		<span class="jsn-menutitle">Youth Awards</span>	</span>
</a></li><li  class=""><a class="jsn-nodescription clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/seneschal/youths/youth-activities-links" >
		<span>
		<span class="jsn-menutitle">Useful Links</span>	</span>
</a></li><li  class=""><a class="jsn-nodescription clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/seneschal/youths/youth-activities-forms" >
		<span>
		<span class="jsn-menutitle">Forms & Procedures</span>	</span>
</a></li><li  class=""><a class="jsn-nodescription clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/seneschal/youths/youth-activities-archive" >
		<span>
		<span class="jsn-menutitle">Archive</span>	</span>
</a></li><li  class=""><a class="jsn-nodescription clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/seneschal/youths/youth-activity-downloads" >
		<span>
		<span class="jsn-menutitle">Youth Activity Downloads</span>	</span>
</a></li><li  class="last"><a class="jsn-nodescription clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/seneschal/youths/pages-academy-promoting-locally" >
		<span>
		<span class="jsn-menutitle">Promoting the Academy Locally</span>	</span>
</a></li></ul></li><li  class="parent"><a class="jsn-nodescription clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/seneschal/clerk-of-law" >
		<span>
		<span class="jsn-menutitle">Clerk of Law</span>	</span>
</a><span class="jsn-menu-toggle"><i class="fa fa-navicon"></i></span><ul><li  class="first">	<a class="clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/seneschal/clerk-of-law/policy/seneschal" >
				<span>
		<span class="jsn-menutitle">The Atlantian Book of Policy</span>		</span>
	</a>
	</li><li  class="">	<a class="clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/seneschal/clerk-of-law/book-of-law/laws-of-the-kingdom" >
				<span>
		<span class="jsn-menutitle">The Atlantian Great Book of Law</span>		</span>
	</a>
	</li><li  class=""><a class="jsn-nodescription clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/seneschal/clerk-of-law/kingdom-financial-policy" >
		<span>
		<span class="jsn-menutitle">The Atlantian Kingdom Financial Policy</span>	</span>
</a></li><li  class="last"><a class="jsn-nodescription clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/seneschal/clerk-of-law/acorn-financial-policy" >
		<span>
		<span class="jsn-menutitle">The Acorn Financial Policy for the Kingdom of Atlantia</span>	</span>
</a></li></ul></li><li  class=""><a class="jsn-nodescription clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/seneschal/kingdom-event-bids" >
		<span>
		<span class="jsn-menutitle">Kingdom Event Bids</span>	</span>
</a></li><li  class=""><a class="jsn-nodescription clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/seneschal/atlantia-media-relations" >
		<span>
		<span class="jsn-menutitle">Media Relations</span>	</span>
</a></li><li  class=""><a class="jsn-nodescription clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/seneschal/atlantia-new-branches" >
		<span>
		<span class="jsn-menutitle">New Branches</span>	</span>
</a></li><li  class="last"><a class="jsn-nodescription clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/seneschal/atlantia-waiver-secretary" >
		<span>
		<span class="jsn-menutitle">Waiver Secretary</span>	</span>
</a></li></ul></li><li  class="parent external-white">		<a class=" clearfix" href="<?=$proto ?>://moas.atlantia.sca.org" target="_blank" >
			<i class="external-white"></i>			<span>
			<span class="jsn-menutitle">Arts and Sciences</span>			</span>
		</a>
<span class="jsn-menu-toggle"><i class="fa fa-navicon"></i></span><ul><li  class="first last external-white">		<a class=" clearfix" href="<?=$proto ?>://university.atlantia.sca.org/" target="_blank" >
			<i class="external-white"></i>			<span>
			<span class="jsn-menutitle">University Atlantia</span>			</span>
		</a>
</li></ul></li><li  class="parent">	<a class="clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/chatelain/welcome-to-the-sca" >
				<span>
		<span class="jsn-menutitle">Chatelain</span>		</span>
	</a>
	<span class="jsn-menu-toggle"><i class="fa fa-navicon"></i></span><ul><li  class="first hidden-link">	<a class="clearfix" href="<?=$proto ?>://atlantia.sca.org/" >
		<i class="hidden-link "></i>		<span>
		<span class="jsn-menutitle">Atlantia Home</span>		</span>
	</a>
	</li><li  class=""><a class="clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/chatelain/welcome-to-the-sca" title="Welcome" >
		<span>
		<span class="jsn-menutitle">Welcome to the SCA</span><span class="jsn-menudescription">Welcome</span>	</span>
</a></li><li  class=""><a class="jsn-nodescription clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/chatelain/atlantia-map" >
		<span>
		<span class="jsn-menutitle">Map of Atlantia</span>	</span>
</a></li><li  class="parent"><a class="clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/chatelain/groups" title="Baronies, Cantons, and Shires in Atlantia " >
		<span>
		<span class="jsn-menutitle">Find Your Local Group</span><span class="jsn-menudescription">Baronies, Cantons, and Shires in Atlantia </span>	</span>
</a><span class="jsn-menu-toggle"><i class="fa fa-navicon"></i></span><ul><li  class="first"><a class="jsn-nodescription clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/chatelain/groups/georgia" >
		<span>
		<span class="jsn-menutitle">Georgia</span>	</span>
</a></li><li  class=""><a class="jsn-nodescription clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/chatelain/groups/maryland" >
		<span>
		<span class="jsn-menutitle">Maryland</span>	</span>
</a></li><li  class=""><a class="jsn-nodescription clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/chatelain/groups/north-carolina" >
		<span>
		<span class="jsn-menutitle">North Carolina</span>	</span>
</a></li><li  class=""><a class="jsn-nodescription clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/chatelain/groups/south-carolina" >
		<span>
		<span class="jsn-menutitle">South Carolina</span>	</span>
</a></li><li  class="last"><a class="jsn-nodescription clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/chatelain/groups/virginia" >
		<span>
		<span class="jsn-menutitle">Virginia</span>	</span>
</a></li></ul></li><li  class=""><a class="jsn-nodescription clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/chatelain/going-to-your-first-event" >
		<span>
		<span class="jsn-menutitle">Going To Your First Event</span>	</span>
</a></li><li  class=""><a class="jsn-nodescription clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/chatelain/advice-to-newcomers" >
		<span>
		<span class="jsn-menutitle">Advice to Newcomers</span>	</span>
</a></li><li  class=""><a class="jsn-nodescription clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/chatelain/officers-and-titles" >
		<span>
		<span class="jsn-menutitle">Officers and Titles</span>	</span>
</a></li><li  class=""><a class="jsn-nodescription clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/chatelain/downloads" >
		<span>
		<span class="jsn-menutitle">Chatelain Downloads</span>	</span>
</a></li><li  class="external-white">		<a class=" clearfix" href="<?=$proto ?>://socsen.sca.org/society-chatelaine/newcomer-resources-and-information/" target="_blank" title="Society Page" >
			<i class="external-white"></i>			<span>
			<span class="jsn-menutitle">Society Newcomer's Page</span><span class="jsn-menudescription">Society Page</span>			</span>
		</a>
</li><li  class="last external-white">		<a class=" clearfix" href="<?=$proto ?>://www.sca.org/members/about.html" target="_blank" title="Society Page" >
			<i class="external-white"></i>			<span>
			<span class="jsn-menutitle">Join the SCA</span><span class="jsn-menudescription">Society Page</span>			</span>
		</a>
</li></ul></li><li  class="parent external-white">		<a class=" clearfix" href="<?=$proto ?>://chronicler.atlantia.sca.org/" target="_blank" >
			<i class="external-white"></i>			<span>
			<span class="jsn-menutitle">Chronicler</span>			</span>
		</a>
<span class="jsn-menu-toggle"><i class="fa fa-navicon"></i></span><ul><li  class="first last">	<a class="clearfix" href="<?=$proto ?>://history.atlantia.sca.org/" >
				<span>
		<span class="jsn-menutitle">Atlantian History</span>		</span>
	</a>
	</li></ul></li><li  class="parent external-white">		<a class=" clearfix" href="<?=$proto ?>://herald.atlantia.sca.org" target="_blank" >
			<i class="external-white"></i>			<span>
			<span class="jsn-menutitle">College of Heralds</span>			</span>
		</a>
<span class="jsn-menu-toggle"><i class="fa fa-navicon"></i></span><ul><li  class="first last external-white">		<a class=" clearfix" href="<?=$proto ?>://scribe.atlantia.sca.org/scriptorium/ " target="_blank" >
			<i class="external-white"></i>			<span>
			<span class="jsn-menutitle">Clerk Signet</span>			</span>
		</a>
</li></ul></li><li  class="parent external-white">		<a class=" clearfix" href="<?=$proto ?>://marshal.atlantia.sca.org" target="_blank" >
			<i class="external-white"></i>			<span>
			<span class="jsn-menutitle">Earl Marshal</span>			</span>
		</a>
<span class="jsn-menu-toggle"><i class="fa fa-navicon"></i></span><ul><li  class="first">	<a class="clearfix" href="<?=$proto ?>://marshal.atlantia.sca.org/" >
				<span>
		<span class="jsn-menutitle">Armored Combat</span>		</span>
	</a>
	</li><li  class="">		<a class=" clearfix" href="<?=$proto ?>://rapier.atlantia.sca.org" target="_blank" >
						<span>
			<span class="jsn-menutitle">Rapier Combat</span>			</span>
		</a>
</li><li  class="external-white">		<a class=" clearfix" href="<?=$proto ?>://archery.atlantia.sca.org" target="_blank" >
			<i class="external-white"></i>			<span>
			<span class="jsn-menutitle">Archery</span>			</span>
		</a>
</li><li  class="">		<a class=" clearfix" href="<?=$proto ?>://cavalry.atlantia.sca.org" target="_blank" >
						<span>
			<span class="jsn-menutitle">Equestrian</span>			</span>
		</a>
</li><li  class="">		<a class=" clearfix" href="<?=$proto ?>://siege.atlantia.sca.org" target="_blank" >
						<span>
			<span class="jsn-menutitle">Siege Weapons</span>			</span>
		</a>
</li><li  class="">		<a class=" clearfix" href="<?=$proto ?>://thrown-weapons.atlantia.sca.org" target="_blank" >
						<span>
			<span class="jsn-menutitle">Thrown Weapons</span>			</span>
		</a>
</li><li  class="last">		<a class=" clearfix" href="https://marshal.atlantia.sca.org/youth-combat/" target="_blank" >
						<span>
			<span class="jsn-menutitle">Youth Combat</span>			</span>
		</a>
</li></ul></li><li  class="external-white">		<a class=" clearfix" href="<?=$proto ?>://exchequer.atlantia.sca.org" target="_blank" >
			<i class="external-white"></i>			<span>
			<span class="jsn-menutitle">Exchequer</span>			</span>
		</a>
</li><li  class=""><a class="jsn-nodescription clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/baronage" >
		<span>
		<span class="jsn-menutitle">Landed Baronage</span>	</span>
</a></li><li  class="parent external-white">		<a class=" clearfix" href="<?=$proto ?>://mol.atlantia.sca.org" target="_blank" >
			<i class="external-white"></i>			<span>
			<span class="jsn-menutitle">Minister of the Lists</span>			</span>
		</a>
<span class="jsn-menu-toggle"><i class="fa fa-navicon"></i></span><ul><li  class="first last">		<a class=" clearfix" href="https://www.authorizations.mol.atlantia.sca.org/" target="_blank" >
						<span>
			<span class="jsn-menutitle">Fighter Authorizations System</span>			</span>
		</a>
</li></ul></li>

<li  class="parent external-white">
  <a class="jsn-nodescription current clearfix" href="<?=$proto ?>://web.atlantia.sca.org/" >
    <span>
      <span class="jsn-menutitle">Web Minister</span>	</span>
  </a>
  <span class="jsn-menu-toggle"><i class="fa fa-navicon"></i></span><ul><li class="first">
  <a class="clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/seneschal/clerk-of-law/policy/web-minister" >
				<span>
		<span class="jsn-menutitle">Kingdom Web Minister Policy</span>		</span>
	</a>
	</li><li  class="external-white">		<a class=" clearfix" href="<?=$proto ?>://socsen.sca.org/social-media/social-media-resources/" target="_blank" >
			<i class="external-white"></i>			<span>
			<span class="jsn-menutitle">SCA Social Media Guidance</span>			</span>
		</a>
</li><li  class="external-white">		<a class=" clearfix" href="<?=$proto ?>://www.sca.org/officers/webminister/" target="_blank" >
			<i class="external-white"></i>			<span>
			<span class="jsn-menutitle">Society Web Minister's Page</span>			</span>
		</a>
</li><li  class="external-white">		<a class=" clearfix" href="<?=$proto ?>://www.sca.org/docs/library.html#releaseforms" target="_blank" >
			<i class="external-white"></i>			<span>
			<span class="jsn-menutitle">Society Publication Release Forms</span>			</span>
		</a>
</li><li  class=""><a class="jsn-nodescription clearfix" href="<?=$proto ?>://web.atlantia.sca.org/warrant.php" >
		<span>
		<span class="jsn-menutitle">Warrant Request Form</span>	</span>
</a></li><li  class="last"><a class="jsn-nodescription clearfix" href="<?=$proto ?>://web.atlantia.sca.org/faq.php" >
		<span>
		<span class="jsn-menutitle">Web Minister FAQ</span>	</span>
</a></li></ul></li></ul></li><li  class="parent">	<a class="clearfix" href="#" title="Announcements &amp; E-Lists" >
				<span>
		<span class="jsn-menutitle">News</span><span class="jsn-menudescription">Announcements &amp; E-Lists</span>		</span>
	</a>
	<span class="jsn-menu-toggle"><i class="fa fa-navicon"></i></span><ul><li  class="first external-white">		<a class=" clearfix" href="https://members.sca.org/apps/#Newsletters" target="_blank" title="Kingdom Newsletter (Membership Required)" >
			<i class="external-white"></i>			<span>
			<span class="jsn-menutitle">The Acorn Online</span><span class="jsn-menudescription">Kingdom Newsletter (Membership Required)</span>			</span>
		</a>
</li><li  class="external-white">		<a class=" clearfix" href="<?=$proto ?>://seahorse.atlantia.sca.org/listinfo.cgi/announce-atlantia.sca.org" target="_blank" >
			<i class="external-white"></i>			<span>
			<span class="jsn-menutitle">Announcements E-List</span>			</span>
		</a>
</li><li  class="last external-white">		<a class=" clearfix" href="<?=$proto ?>://merryrose.atlantia.sca.org" target="_blank" title="Atlantian Discussion E-List" >
			<i class="external-white"></i>			<span>
			<span class="jsn-menutitle">The Merry Rose</span><span class="jsn-menudescription">Atlantian Discussion E-List</span>			</span>
		</a>
</li></ul></li><li  class="parent">	<a class="clearfix" href="<?=$proto ?>://atlantia.sca.org/events/atlantia-calendar-events" title="in Atlantia" >
				<span>
		<span class="jsn-menutitle">Events</span><span class="jsn-menudescription">in Atlantia</span>		</span>
	</a>
	<span class="jsn-menu-toggle"><i class="fa fa-navicon"></i></span><ul><li  class="first"><a class="jsn-nodescription clearfix" href="<?=$proto ?>://atlantia.sca.org/events/atlantia-calendar-events" >
		<span>
		<span class="jsn-menutitle">Atlantian Calendar of Events</span>	</span>
</a></li><li  class=""><a class="jsn-nodescription clearfix" href="<?=$proto ?>://atlantia.sca.org/events/paypal-user-event-registration-form" >
		<span>
		<span class="jsn-menutitle">PayPal Event Registration Form</span>	</span>
</a></li><li  class="last external-white">		<a class=" clearfix" href="<?=$proto ?>://spike.atlantia.sca.org/" target="_blank" >
			<i class="external-white"></i>			<span>
			<span class="jsn-menutitle">Event Registration</span>			</span>
		</a>
</li></ul></li><li  class="parent">	<a class="clearfix" href="#" >
				<span>
		<span class="jsn-menutitle">Awards</span>		</span>
	</a>
	<span class="jsn-menu-toggle"><i class="fa fa-navicon"></i></span><ul><li  class="parent first external-white">		<a class=" clearfix" href="<?=$proto ?>://op.atlantia.sca.org" target="_blank" >
			<i class="external-white"></i>			<span>
			<span class="jsn-menutitle">Order of Precedence</span>			</span>
		</a>
<span class="jsn-menu-toggle"><i class="fa fa-navicon"></i></span><ul><li  class="first last external-white">		<a class=" clearfix" href="<?=$proto ?>://op.atlantia.sca.org/awards.php" target="_blank" >
			<i class="external-white"></i>			<span>
			<span class="jsn-menutitle">Atlantian Awards</span>			</span>
		</a>
</li></ul></li><li  class="external-white">		<a class=" clearfix" href="https://award.atlantia.sca.org/" target="_blank" >
			<i class="external-white"></i>			<span>
			<span class="jsn-menutitle">Award Recomendations</span>			</span>
		</a>
</li><li  class="last external-white">		<a class=" clearfix" href="<?=$proto ?>://polling.atlantia.sca.org" target="_blank" >
			<i class="external-white"></i>			<span>
			<span class="jsn-menutitle">Electronic System for Polling</span>			</span>
		</a>
</li></ul></li><li  class="parent">	<a class="clearfix" href="#" >
				<span>
		<span class="jsn-menutitle">More</span>		</span>
	</a>
	<span class="jsn-menu-toggle"><i class="fa fa-navicon"></i></span><ul><li  class="first"><a class="jsn-nodescription clearfix" href="<?=$proto ?>://atlantia.sca.org/more/disclaimer" >
		<span>
		<span class="jsn-menutitle">Disclaimer</span>	</span>
</a></li><li  class="external-white">		<a class=" clearfix" href="<?=$proto ?>://www.sca.org" target="_blank" >
			<i class="external-white"></i>			<span>
			<span class="jsn-menutitle">SCA, Inc.</span>			</span>
		</a>
</li><li  class="external-white">		<a class=" clearfix" href="<?=$proto ?>://www.sca.org/media/" target="_blank" >
			<i class="external-white"></i>			<span>
			<span class="jsn-menutitle">Media Relations</span>			</span>
		</a>
</li><li  class="parent">	<a class="clearfix" href="<?=$proto ?>://atlantia.sca.org/more/resources/downloadable-documents" >
				<span>
		<span class="jsn-menutitle">Resources</span>		</span>
	</a>
	<span class="jsn-menu-toggle"><i class="fa fa-navicon"></i></span><ul><li  class="first">	<a class="clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/seneschal/clerk-of-law/book-of-law/laws-of-the-kingdom" >
				<span>
		<span class="jsn-menutitle">Atlantian Great Book of Law</span>		</span>
	</a>
	</li><li  class="">	<a class="clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/seneschal/clerk-of-law/policy" >
				<span>
		<span class="jsn-menutitle">Atlantian Book of Policy</span>		</span>
	</a>
	</li><li  class="">	<a class="clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/seneschal/clerk-of-law/kingdom-financial-policy" >
				<span>
		<span class="jsn-menutitle">The Atlantian Kingdom Financial Policy</span>		</span>
	</a>
	</li><li  class="">	<a class="clearfix" href="<?=$proto ?>://atlantia.sca.org/offices/seneschal/clerk-of-law/acorn-financial-policy" >
				<span>
		<span class="jsn-menutitle">The Acorn Financial Policy for the Kingdom of Atlantia</span>		</span>
	</a>
	</li><li  class=""><a class="jsn-nodescription clearfix" href="<?=$proto ?>://atlantia.sca.org/more/resources/downloadable-documents" >
		<span>
		<span class="jsn-menutitle">Downloadable Documents</span>	</span>
</a></li><li  class="parent">	<a class="clearfix" href="<?=$proto ?>://atlantia.sca.org/more/resources/graphics/graphics-kingdom-regnum" >
				<span>
		<span class="jsn-menutitle">Graphics Repository</span>		</span>
	</a>
	<span class="jsn-menu-toggle"><i class="fa fa-navicon"></i></span><ul><li  class="first"><a class="jsn-nodescription clearfix" href="<?=$proto ?>://atlantia.sca.org/more/resources/graphics/graphics-kingdom-regnum" >
		<span>
		<span class="jsn-menutitle">Graphics -- Kingdom Regnum</span>	</span>
</a></li><li  class=""><a class="jsn-nodescription clearfix" href="<?=$proto ?>://atlantia.sca.org/more/resources/graphics/graphics-kingdom-officers" >
		<span>
		<span class="jsn-menutitle">Graphics -- Kingdom Officers</span>	</span>
</a></li><li  class="last"><a class="clearfix" href="<?=$proto ?>://atlantia.sca.org/more/resources/graphics/local-groups" title="Baronies, Cantons, and Shires" >
		<span>
		<span class="jsn-menutitle">Graphics -- Local Groups</span><span class="jsn-menudescription">Baronies, Cantons, and Shires</span>	</span>
</a></li></ul></li></ul></li><li  class="last"><a class="jsn-nodescription clearfix" href="<?=$proto ?>://atlantia.sca.org/more/kingdom-officer-login" >
		<span>
		<span class="jsn-menutitle">Kingdom Officer Login</span>	</span>
</a></li></ul></li></ul><div class="clearbreak"></div></div></div></div>
															</div>
											<span id="jsn-desktopswitch">
					<a href="#" onclick="javascript: JSNUtils.setTemplateAttribute('jsn_decor_pro_','mobile','no'); return false;"></a>
				</span>
				<span id="jsn-mobileswitch">
					<a href="#" onclick="javascript: JSNUtils.setTemplateAttribute('jsn_decor_pro_','mobile','yes'); return false;"></a>
				</span>
									<div class="right">&nbsp;</div>
						<div class="clearbreak"></div>
					</div>
					</div>
					</div>
				</div>
				<div class="clearbreak"></div>
						</div>
		</div>
		<div class="clearbreak"></div>
		<div id="jsn-body">
			<div id="jsn-body-inner">


			<div id="jsn-content" class="jsn-hasleft ">
				<div id="jsn-content_inner1"><div id="jsn-content_inner2"><div id="jsn-content_inner3"><div id="jsn-content_inner4">
					<div id="jsn-content_inner" class="row-fluid">
											<div id="jsn-breadcrumbs">
						</div>
										<div id="jsn-pos-content-inner">
											<div id="jsn-maincontent" class="span9 order2 offset3 row-fluid">
							<div id="jsn-maincontent_inner">
								<div id="jsn-centercol">
									<div id="jsn-centercol_inner">
														<div id="jsn-usermodules1" class="jsn-modulescontainer jsn-modulescontainer1">
											<div id="jsn-usermodules1_inner_grid1">
																	<div id="jsn-pos-user1" class="span12">
													<div class=" jsn-modulecontainer"><div class="jsn-modulecontainer_inner"><div><div><div class="jsn-modulecontent">

<div class="clearbreak"></div></div></div></div></div></div>
												</div>
																	<div class="clearbreak"></div>
											</div>
										</div>
														<div id="jsn-mainbody-content" class=" jsn-hasmainbody">
											<div id="jsn-mainbody-content-inner1"><div id="jsn-mainbody-content-inner2"><div id="jsn-mainbody-content-inner3"><div id="jsn-mainbody-content-inner4" class="row-fluid">
																								<div id="jsn-mainbody-content-inner" class="span12 order1 "><div id="mainbody-pos-content-inner">
																										<div id="jsn-mainbody">
														<div id="system-message-container">
	</div>

														<div class="item-page" itemscope itemtype="<?=$proto ?>://schema.org/Article">
	<meta itemscope itemprop="mainEntityOfPage" itemType="https://schema.org/WebPage" itemid="https://google.com/article" content=""/>
	<meta itemprop="inLanguage" content="en-GB" />
				<div class="page-header">
<h2 itemprop="headline">
<?=$SITE_TITLE_HEADER ?>
</h2>
							</div>


<div itemprop="articleBody">
<!-- CONTENT BELOW -->