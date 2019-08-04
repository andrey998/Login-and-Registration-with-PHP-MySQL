<?php
    // $page_title = 'Login';   
	include_once'config/Session.php';    
	include_once'includes/footer.php';
	include_once'controllers/ParseLogin.php'; 
	include_once'controllers/ParseRegister.php'; 
	include_once'controllers/ParseProfile.php'; 
?>

<html lang="en">
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<head>
		<title>Makaya:</title>
		<meta name="description" content="It's easier than ever to get what you want from the USA. Shop multiple stores, checkout once &amp; get fast, cheap global delivery to your door. " />
		<link rel="canonical" href="index.html" />
		<!--[if lt IE 9]>
		<script type="text/javascript">window.location = '/unsupported-browsers/';</script>
		<script src="/scripts/html5shiv.js" type="text/javascript"></script>
		<![endif]-->
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:image" content="images/common/ux/shopping/logo-stacked.png" />
		<meta property="og:image:type" content="image/png" />
		<meta property="og:image:width" content="309" />
		<meta property="og:image:height" content="116" />
		<meta name="apple-itunes-app" content="app-id=1456384202" />
		<link rel="apple-touch-icon" sizes="57x57" href="content/images/favicon/apple-icon-57x57.png" />
		<link rel="apple-touch-icon" sizes="60x60" href="content/images/favicon/apple-icon-60x60.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="content/images/favicon/apple-icon-72x72.png" />
		<link rel="apple-touch-icon" sizes="76x76" href="content/images/favicon/apple-icon-76x76.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="content/images/favicon/apple-icon-114x114.png" />
		<link rel="apple-touch-icon" sizes="120x120" href="content/images/favicon/apple-icon-120x120.png" />
		<link rel="apple-touch-icon" sizes="144x144" href="content/images/favicon/apple-icon-144x144.png" />
		<link rel="apple-touch-icon" sizes="152x152" href="content/images/favicon/apple-icon-152x152.png" />
		<link rel="apple-touch-icon" sizes="180x180" href="content/images/favicon/apple-icon-180x180.png" />
		<link rel="icon" type="image/png" sizes="192x192" href="content/images/favicon/android-icon-192x192.png" />
		<link rel="icon" type="image/png" sizes="32x32" href="content/images/favicon/favicon-32x32.png" />
		<link rel="icon" type="image/png" sizes="96x96" href="content/images/favicon/favicon-96x96.png" />
		<link rel="icon" type="image/png" sizes="16x16" href="content/images/favicon/favicon-16x16.png" />
		<meta name="msapplication-TileColor" content="#ffffff" />
		<meta name="msapplication-TileImage" content="content/images/favicon/ms-icon-144x144.png" />
		<meta name="theme-color" content="#ffffff" />
		<link rel="stylesheet" type="text/css" href="content/styles/site-styles.min.css?v=1.7.19.847" />
		<link rel="stylesheet" type="text/css" href="content/styles/register.css" />
		<link rel="stylesheet" href="assets/css/sweetalert.css">
		<link rel="stylesheet" href="assets/css/bootstrap.css">		
		<script>(window.BOOMR_mq=window.BOOMR_mq||[]).push(["addVar",{"rua.upush":"false","rua.cpush":"false","rua.upre":"false","rua.cpre":"false","rua.uprl":"false","rua.cprl":"false","rua.cprf":"false","rua.trans":"","rua.cook":"false","rua.ims":"false","rua.ufprl":"false","rua.cfprl":"false"}]);</script>
		<script>!function(){function o(n,i){if(n&&i)for(var r in i)i.hasOwnProperty(r)&&(void 0===n[r]?n[r]=i[r]:n[r].constructor===Object&&i[r].constructor===Object?o(n[r],i[r]):n[r]=i[r])}try{var n=decodeURIComponent("");if(n.length>0&&window.JSON&&"function"==typeof window.JSON.parse){var i=JSON.parse(n);void 0!==window.BOOMR_config?o(window.BOOMR_config,i):window.BOOMR_config=i}}catch(r){window.console&&"function"==typeof window.console.error&&console.error("mPulse: Could not parse configuration",r)}}();</script>
		<script>!function(a){var e="https://s.go-mpulse.net/boomerang/",t="addEventListener";if("True"=="True")a.BOOMR_config=a.BOOMR_config||{},a.BOOMR_config.PageParams=a.BOOMR_config.PageParams||{},a.BOOMR_config.PageParams.pci=!0,e="https://s2.go-mpulse.net/boomerang/";if(function(){function n(e){a.BOOMR_onload=e&&e.timeStamp||(new Date).getTime()}if(!a.BOOMR||!a.BOOMR.version&&!a.BOOMR.snippetExecuted){a.BOOMR=a.BOOMR||{},a.BOOMR.snippetExecuted=!0;var i,o,r,O=document.createElement("iframe");if(a[t])a[t]("load",n,!1);else if(a.attachEvent)a.attachEvent("onload",n);O.src="javascript:void(0)",O.title="",O.role="presentation",(O.frameElement||O).style.cssText="width:0;height:0;border:0;display:none;",r=document.getElementsByTagName("script")[0],r.parentNode.insertBefore(O,r);try{o=O.contentWindow.document}catch(_){i=document.domain,O.src="javascript:var d=document.open();d.domain='"+i+"';void(0);",o=O.contentWindow.document}o.open()._l=function(){var a=this.createElement("script");if(i)this.domain=i;a.id="boomr-if-as",a.src=e+"MWYX8-KKS5M-SAA9V-BAMSY-SF8MR",BOOMR_lstart=(new Date).getTime(),this.body.appendChild(a)},o.write("<bo"+'dy onload="document._l();">'),o.close()}}(),"".length>0)if(a&&"performance"in a&&a.performance&&"function"==typeof a.performance.setResourceTimingBufferSize)a.performance.setResourceTimingBufferSize();!function(){if(BOOMR=a.BOOMR||{},BOOMR.plugins=BOOMR.plugins||{},!BOOMR.plugins.AK){var e=""=="true"?1:0,t="",n="furqt5ixiczowxj2jnpq-f-851e7ff3f-clientnsv4-s.akamaihd.net",i={"ak.v":22,"ak.cp":"750265","ak.ai":parseInt("485971",10),"ak.ol":"0","ak.cr":1,"ak.ipv":4,"ak.proto":"","ak.rid":"4ee43162","ak.r":34194,"ak.a2":e,"ak.m":"a","ak.n":"essl","ak.bpcip":"45.35.9.0","ak.cport":16111,"ak.gh":"23.36.15.214","ak.quicv":"","ak.tlsv":"tls1.2","ak.0rtt":"","ak.csrc":"-","ak.acc":"reno","ak.t":"1564101471"};if(""!==t)i["ak.ruds"]=t;var o={i:!1,av:function(e){var t="http.initiator";if(e&&(!e[t]||"spa_hard"===e[t]))i["ak.feo"]=void 0!==a.aFeoApplied?1:0,BOOMR.addVar(i)},rv:function(){var a=["ak.bpcip","ak.cport","ak.cr","ak.csrc","ak.gh","ak.ipv","ak.m/index.html","ak.n","ak.ol","ak.proto","ak.quicv","ak.tlsv","ak.0rtt","ak.r","ak.acc","ak.t"];BOOMR.removeVar(a)}};BOOMR.plugins.AK={akVars:i,akDNSPreFetchDomain:n,init:function(){if(!o.i){var a=BOOMR.subscribe;a("before_beacon",o.av,null,null),a("onbeacon",o.rv,null,null),o.i=!0}return this},is_complete:function(){return!0}}}}()}(window);
		</script>
		</head>
		<body  lass="page-home">
						<div class="page-inner">
					<header class="login-header">
						<label class="icon-mobile-menu mobile-menu-icon-wrapper" for="mobile-menu-state"></label>
						<input type="checkbox" id="mobile-menu-state" style="visibility: hidden" />
						<div class="logo">
							<a class="logo-link" href="index.html">
								<img alt="Makaya" class="logo-img" src="content/images/logo-mark.png" />
							</a>
						</div>

							<div class="header-links mobile-menu-help-wrapper">
								<ul class="nav-links list-unstyled">
									<li class="nav-links-item desktop-menu-help">
										<?php 
											if(isset($_SESSION['username']) || isCookieValid($db)):
												?>		
											<span class="js-menu-help-in">		
												<a class="cd-profile" href="#0" data-toggle="modal" data-target="#profile-modal">PROFILE</a> / 
												<a class="cd-logout" href="logout.php">LOG OUT</a>		
											</span>
											<?php else: ?>
											<span class="js-menu-help">							
												<a class="cd-signin" href="#0">LOG IN</a> / 
												<a class="cd-signup" href="#0">SIGN UP</a>										
											</span>	
										<?php endif; ?>
									</li>
									<li class="nav-links-item mobile-menu-help">
										<input type="checkbox" id="js-mobile-help" style="visibility: hidden" />
										<label class="js-mobile-help" for="js-mobile-help">HELP</label>
										<ul class="nav-links list-unstyled">
											<li class="nav-links-item">
												<a href="how-it-works/index.html">
													<span>How it works</span>
												</a>
											</li>
											<li class="nav-links-item">
												<a href="shipping/index.html">
													<span>Shipping</span>
												</a>
											</li>
											<li class="nav-links-item">
												<a href="shipping/restrictions/index.html">
													<span>Restircted goods</span>
												</a>
											</li>
											<li class="nav-links-item">
												<a href="help/index.html">
													<span>Help &amp; FAQ</span>
												</a>
											</li>
											<li class="nav-links-item">
												<a href="help/contact/index.html">
													<span>Contact Us</span>
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</header>
						<main>
							<section class="landing-page">
								<!--slider script-->
								<script type="text/javascript" src="scripts/js/jssor.slider.min.js"></script>
								<script type="text/javascript">
									jssor_1_slider_init = function() {

										var jssor_1_options = {
										  $AutoPlay: 1,
										  $Idle: 2000,
										  $ArrowNavigatorOptions: {
											$Class: $JssorArrowNavigator$
										  },
										  $BulletNavigatorOptions: {
											$Class: $JssorBulletNavigator$
										  }
										};
										var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
										
										var MAX_WIDTH = 780;
										function ScaleSlider() {
											var containerElement = jssor_1_slider.$Elmt.parentNode;
											var containerWidth = containerElement.clientWidth;
											if (containerWidth) {
												var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);
												jssor_1_slider.$ScaleWidth(expectedWidth);
											}
											else {
												window.setTimeout(ScaleSlider, 30);
											}
										}

										ScaleSlider();
										$Jssor$.$AddEvent(window, "load", ScaleSlider);
										$Jssor$.$AddEvent(window, "resize", ScaleSlider);
										$Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
										/*#endregion responsive code end*/
									};
								</script>
								<style>
									/* jssor slider loading skin spin css */
									.jssorl-009-spin img {
										animation-name: jssorl-009-spin;
										animation-duration: 1.6s;
										animation-iteration-count: infinite;
										animation-timing-function: linear;
									}
									@keyframes jssorl-009-spin {
										from {
											transform: rotate(0deg);
										}
										to {
											transform: rotate(360deg);
										}
									}
									.jssorb052 .i {position:absolute;cursor:pointer;}
									.jssorb052 .i .b {fill:#000;fill-opacity:0.3;}
									.jssorb052 .i:hover .b {fill-opacity:.7;}
									.jssorb052 .iav .b {fill-opacity: 1;}
									.jssorb052 .i.idn {opacity:.3;}
									.jssora053 {display:block;position:absolute;cursor:pointer;}
									.jssora053 .a {fill:none;stroke:#fff;stroke-width:640;stroke-miterlimit:10;}
									.jssora053:hover {opacity:.8;}
									.jssora053.jssora053dn {opacity:.5;}
									.jssora053.jssora053ds {opacity:.3;pointer-events:none;}
								</style>
								<!--slider script-->
								<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:780px;height:480px;overflow:hidden;visibility:hidden;">									
									<div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:780px;height:480px;overflow:hidden;">
										<div>
											<img data-u="image" src="content/images/gallery/001.jpg" />
										</div>
										<div data-p="170.00">
											<img data-u="image" src="content/images/gallery/002.jpg" />
										</div>
										<div>
											<img data-u="image" src="content/images/gallery/003.jpg" />
										</div>
										
									</div>
									<!-- Bullet Navigator -->
									<div data-u="navigator" class="jssorb052" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
										<div data-u="prototype" class="i" style="width:16px;height:16px;">
											<svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
												<circle class="b" cx="8000" cy="8000" r="5800"></circle>
											</svg>
										</div>
									</div>
									<!-- Arrow Navigator -->
									<div data-u="arrowleft" class="jssora053" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
										<svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
											<polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
										</svg>
									</div>
									<div data-u="arrowright" class="jssora053" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
										<svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
											<polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
										</svg>
									</div>
								</div>
								<script type="text/javascript">jssor_1_slider_init();</script>
								
								<script type="text/javascript">
									if (typeof applicationConfig == 'undefined') { var applicationConfig = {}; }
									applicationConfig.requireVideoPlay = true;
								</script>
							</section>
							<section class="x-mobile-show app-store-promo">
								<h2 class="app-store-txt">Download the app &amp; start shopping U.S. stores!</h2>
								<a class="app-store-link x-only-android" href="">
									<img class="app-store-img" src="content/images/app-google.png" alt="Google Play" />
								</a>
								<a class="app-store-link x-only-ios" href="">
									<img class="app-store-img" src="content/images/app-ios.png" alt="App Store" />
								</a>
							</section>
							<section class="page-frame align-center get-extension-container">
								<div class="store-icons-all">
									<h3 class="store-icons-all-heading">Download the extension &amp; start shopping U.S stores!</h3>
									<div class="store-icons">
										<a href="" target="_blank">
											<img alt="Add to Chrome" src="content/images/add_to_chrome_free.png" />
										</a>
									</div>
								</div>
							</section>
							<section class="page-frame popular-stores">
								<div class="shop-stores">
									<p class="shop-stores-text center-text">Shop Hundreds of U.S Stores & Brands*</p>
									<div class="store-icon-container show-modal">
										<div class="store-icon-wrapper">
											<a class="modal-action" href="https://www.amazon.com/" target="_blank">
												<img src="content/images/amazon_shopping.png" />
											</a>
										</div>
										<div class="store-icon-wrapper">
											<a class="modal-action" href="https://www.c21stores.com/" target="_blank">
												<span class="icons-store icons-store-century"></span>
											</a>
										</div>
										<div class="store-icon-wrapper">
											<a class="modal-action" href="https://www.ebay.com/" target="_blank">
												<span class="icons-store icons-store-ebay"></span>
											</a>
										</div>
										<div class="store-icon-wrapper">
											<a class="modal-action" href="https://www.ralphlauren.com/" target="_blank">
												<span class="icons-store icons-store-lauren"></span>
											</a>
										</div>
										<div class="store-icon-wrapper">
											<a class="modal-action" href="https://www.amazon.com/stores/Levi%27s/Levi%27s/page/7B18FACC-DCB8-4735-B4AC-CDE16CD147DD" target="_blank">
												<span class="icons-store icons-store-levis"></span>
											</a>
										</div>
										<div class="store-icon-wrapper" >
											<a class="modal-action" href="https://www.michaelkors.com/" target="_blank">
												<span class="icons-store icons-store-kors"></span>
											</a>
										</div>
										<div class="store-icon-wrapper">
											<a class="modal-action" href="https://www.shopdisney.com/" target="_blank">
												<span class="icons-store icons-store-disney"></span>
											</a>
										</div>
										<div class="store-icon-wrapper">
											<a class="modal-action" href="https://www.jcrew.com/" target="_blank">
												<span class="icons-store icons-store-jcrew"></span>
											</a>
										</div>
										<div class="store-icon-wrapper">
											<a class="modal-action" href="https://www.macys.com/shop/search?keyword=nike" target="_blank">
												<span class="icons-store icons-store-nike"></span>
											</a>
										</div>
										<div class="store-icon-wrapper">
											<a class="modal-action" href="https://www.amazon.com/stores/adidas/adidas/page/5E398A61-45C7-46F9-A6C6-5B4797CC5063" target="_blank">
												<span class="icons-store icons-store-adidas"></span>
											</a>
										</div>
										<div class="store-icon-wrapper">
											<a class="modal-action" href="https://www.carters.com/" target="_blank">
												<span class="icons-store icons-store-carters"></span>
											</a>
										</div>
										<div class="store-icon-wrapper">
											<a class="modal-action" href="https://shop.nordstrom.com/c/all-vans" target="_blank">
												<span class="icons-store icons-store-vans"></span>
											</a>
										</div>
										<div class="store-icon-wrapper">
											<a class="modal-action" href="http://www.bathandbodyworks.com/" target="_blank">
												<span class="icons-store icons-store-bath"></span>
											</a>
										</div>
										<div class="store-icon-wrapper">
											<a class="modal-action" href="https://www.6pm.com/" target="_blank">
												<span class="icons-store icons-store-six"></span>
											</a>
										</div>
										<div class="store-icon-wrapper">
											<a class="modal-action" href="https://www.forever21.com/us/shop" target="_blank">
												<span class="icons-store icons-store-forever"></span>
											</a>
										</div>
										<div class="store-icon-wrapper">
											<a class="modal-action" href="https://www.walmart.com/" target="_blank">
												<span class="icons-store icons-store-walmart"></span>
											</a>
										</div>
										<div class="store-icon-wrapper">
											<a class="modal-action" href="https://shop.nordstrom.com/" target="_blank">
												<span class="icons-store icons-store-nordstrom"></span>
											</a>
										</div>
										<div class="store-icon-wrapper">
											<a class="modal-action" href="https://www.oshkosh.com/" target="_blank">
												<span class="icons-store icons-store-oshkosh"></span>
											</a>
										</div>
									</div>
								</div>
							</section>
							<script type="text/html" id="stores-modal-content">
								<section class="page-frame need-extension">
									<div class="need-extension-inner">
										<h3 class="need-extension-heading">Ready to start shopping U.S. stores?</h3>
										<p class="need-extension-help">Download the 			
											<span class="x-mobile-android-show">app from Google Play 
												<a href="" target="_blank">here</a>.
											</span>
											<span class="x-mobile-ios-show">app from iTunes 
												<a href="#" target="_blank">here</a>.
											</span>
											<span class="x-mobile-android-hide x-mobile-ios-hide">Chrome extension 
												<a href="#" target="_blank">here</a>.
											</span>
										</p>
									</div>
								</section>
							</script>
						</section>
						<script type="text/javascript">
							if (typeof applicationConfig == 'undefined') { var applicationConfig = {}; }
							applicationConfig.requireStoresPopUp = true;
						</script>
						<section class="page-frame three-steps-container">
							<div class="steps-container">
								<div class="steps-container-inner">
									<p class="steps-container-inner-heading">It's Easy to Get What You Love From the U.S.</p>
									<div class="steps-container-inner-step">
										<figure class="icon-store"></figure>
										<span class="steps-container-inner-step-text">
											<strong>1. Download the extension from 
												<a href="#">Chrome</a>
											</strong>
										</span>
									</div>
									<div class="steps-container-inner-step">
										<figure class="icon-cart-blue"></figure>
										<span class="steps-container-inner-step-text">
											<strong>2. Visit your favorite U.S. stores online and add items to your Makaya cart</strong>
										</span>
									</div>
									<div class="steps-container-inner-step">
										<figure class="icon-deliver"></figure>
										<span class="steps-container-inner-step-text">
											<strong>3. Checkout & get one box delivery</strong>
										</span>
									</div>
								</div>
							</div>
						</section>
						
						<section class="x-mobile-show app-store-promo">
							<h2 class="app-store-txt">Download the app &amp; start shopping U.S. stores!</h2>
							<a class="app-store-link x-only-android" href="">
								<img class="app-store-img" src="content/images/app-google.png" alt="Google Play" />
							</a>
							<a class="app-store-link x-only-ios" href="">
								<img class="app-store-img" src="content/images/app-ios.png" alt="App Store" />
							</a>
						</section>
						<section class="page-frame align-center get-extension-container">
							<div class="store-icons-all">
								<h3 class="store-icons-all-heading">Download the extension &amp; start shopping U.S stores!</h3>
								<div class="store-icons">
									<a href="#" target="_blank">
										<img alt="Add to Chrome" src="content/images/add_to_chrome_free.png" />
									</a>
								</div>
							</div>
						</section>
						<section class="page-frame align-center x-mobile-hide how-order">
							<h3 class="how-order-heading">How do I place a Makaya order?</h3>
							<p class="how-order-txt">It's easy! Just download the Makaya extension for
								<a href="" target="_blank">Chrome</a>.
								Shop all your favorite U.S. websites and add items to your Makaya cart as you go.
								Makaya provides one easy checkout from multiple U.S. stores, and includes international shipping charges, so there are no surprises.	
							</p>
							<p class="how-order-txt">
								<a href="how-it-works/index.html">Learn more about how Makaya works</a>.	
							</p>
						</section>
					</main>
				</div>
			</div>
			<div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
				<div class="cd-user-modal-container"> <!-- this is the container wrapper -->
					<ul class="cd-switcher">
						<li><a href="#0">Log In</a></li>
						<li><a href="#0">Sign Up</a></li>
					</ul>

					<div id="cd-login"> <!-- log in form -->
						<form class="cd-form" action="" method="POST" name="login-form">					
							<p class="fieldset">
								<label class="image-replace cd-email" for="signin-email">E-mail</label>
								<input class="full-width has-padding has-border" id="signin-email" type="email" placeholder="E-mail" name="username">
								<span class="cd-error-message">Error message here!</span>
							</p>

							<p class="fieldset">
								<label class="image-replace cd-password" for="signin-password">Password</label>
								<input class="full-width has-padding has-border" id="signin-password" type="text"  placeholder="Password" name="password">
								<a href="#0" class="hide-password">Hide</a>
								<span class="cd-error-message">Error message here!</span>
							</p>

							<p class="fieldset">
								<input name="remember" type="checkbox" id="remember-me" checked>
								<label for="remember-me">Remember me</label>
							</p>

							<p class="fieldset">							
								<input name="loginBtn"  class="full-width" type="submit" value="Login">
							</p>
						</form>
						
						<p class="cd-form-bottom-message"><a href="#0">Forgot your password?</a></p>
						<!-- <a href="#0" class="cd-close-form">Close</a> -->
					</div> <!-- cd-login -->

					<div id="cd-signup"> <!-- sign up form -->
						<form class="cd-form" action="" method="POST" name="signup-form">	
						<?php if(isset($result_regist)){
                            echo $result_regist;
                        } ?>
                        <?php if(!empty($form_errors_regist)){
                            echo show_errors($form_errors_regist);
                        } ?>
							<p class="fieldset">			
								<div class="row">
									<div class="col-md-6">
										<label class="image-replace cd-firstname" for="signup-firstname">First Name</label>
										<input class="has-padding has-border" id="signup-firstname" type="text" placeholder="FirstName" name="firstname">
										<span class="cd-error-message">Error message here!</span>
									</div>
									<div class="col-md-6">
										<label class="image-replace cd-lastname" for="signup-lastname">Last Name</label>
										<input class="has-padding has-border" id="signup-lastname" type="text" placeholder="LastName" name="lastname">
										<span class="cd-error-message">Error message here!</span>
									</div>
								</div>
							</p>
							<p class="fieldset">			
								<div class="row">
									<div class="col-md-6">
										<label class="image-replace cd-phone" for="signup-phone">Phone</label>
										<input class="has-padding has-border" id="signup-phone" type="text" placeholder="Phone Number" name="phone">
										<span class="cd-error-message">Error message here!</span>
									</div>
									<div class="col-md-6">
										<label class="image-replace cd-address" for="signup-address">Address</label>
										<input class="has-padding has-border" id="signup-address" type="text" placeholder="Address" name="address">
										<span class="cd-error-message">Error message here!</span>
									</div>
								</div>
							</p>
							<p class="fieldset">
								<label class="image-replace cd-email" for="signup-email">E-mail</label>
								<input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail" name="email">
								<span class="cd-error-message">Error message here!</span>
							</p>

							<p class="fieldset">
								<label class="image-replace cd-password" for="signup-password">Password</label>
								<input class="full-width has-padding has-border" id="signup-password" type="text"  placeholder="Password" name="password">
								<a href="#0" class="hide-password">Hide</a>
								<span class="cd-error-message">Error message here!</span>
							</p>

							<!-- <p class="fieldset">
								<input type="checkbox" id="accept-terms">
								<label for="accept-terms">I agree to the <a href="#0">Terms</a></label>
							</p> -->

							<p class="fieldset">						
								<input class="full-width has-padding" type="submit" name="registerBtn" value="Register">
							</p>
						</form>

						<!-- <a href="#0" class="cd-close-form">Close</a> -->
					</div> <!-- cd-signup -->

					<div id="cd-reset-password"> <!-- reset password form -->
						<p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

						<form class="cd-form">
							<p class="fieldset">
								<label class="image-replace cd-email" for="reset-email">E-mail</label>
								<input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
								<span class="cd-error-message">Error message here!</span>
							</p>

							<p class="fieldset">
								<input class="full-width has-padding" type="submit" value="Reset password">
							</p>
						</form>

						<p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
					</div> <!-- cd-reset-password -->
					<a href="#0" class="cd-close-form">Close</a>
				</div> <!-- cd-user-modal-container -->
			</div> <!-- cd-user-modal -->
			<!-- profile modal -->
			<div class="modal fade" id="profile-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
					<?php if(!isset($_SESSION['username'])) : ?>
					<p class="lead">
						Your not authorised to view this page <a href="login.php">Login</a> Not yet a member? <a href="index.php">Register</a>
					</p>
					<?php else : ?>
						<div class="modal-header text-center">
							<h4 class="modal-title w-100 font-weight-bold">Edit Your Profile</h4>							
						</div>
						<div class="modal-body mx-3">
						<form class="cd-form" action="" method="POST" name="profile-form">		
							<p class="fieldset">			
								<div class="row">
									<div class="col-md-6">
										<label class="image-replace cd-firstname" for="signup-firstname">First Name</label>
										<input class="has-padding has-border" id="signup-firstname" type="text" placeholder="FirstName" name="firstname" value="<?php if(isset($firstname)) echo $firstname; ?>">
										<span class="cd-error-message">Error message here!</span>
									</div>
									<div class="col-md-6">
										<label class="image-replace cd-lastname" for="signup-lastname">Last Name</label>
										<input class="has-padding has-border" id="signup-lastname" type="text" placeholder="LastName" name="lastname" value="<?php if(isset($lastname)) echo $lastname; ?>">
										<span class="cd-error-message">Error message here!</span>
									</div>
								</div>
							</p>
							<p class="fieldset">			
								<div class="row">
									<div class="col-md-6">
										<label class="image-replace cd-phone" for="signup-phone">Phone</label>
										<input class="has-padding has-border" id="signup-phone" type="text" placeholder="Phone Number" name="phone"  value="<?php if(isset($phone)) echo $phone; ?>">
										<span class="cd-error-message">Error message here!</span>
									</div>
									<div class="col-md-6">
										<label class="image-replace cd-address" for="signup-address">Address</label>
										<input class="has-padding has-border" id="signup-address" type="text" placeholder="Address" name="address" value="<?php if(isset($address)) echo $address; ?>">
										<span class="cd-error-message">Error message here!</span>
									</div>
								</div>
							</p>
							<p class="fieldset">
								<label class="image-replace cd-email" for="signup-email">E-mail</label>
								<input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail" name="email" value="<?php if(isset($email)) echo $email; ?>">
								<span class="cd-error-message">Error message here!</span>
							</p>

							<p class="fieldset">
								<label class="image-replace cd-password" for="signup-password">Password</label>
								<input class="full-width has-padding has-border" id="signup-password" type="text"  placeholder="Password" name="password" value="<?php if(isset($password)) echo $password; ?>">
								<a href="#0" class="hide-password">Hide</a>
								<span class="cd-error-message">Error message here!</span>
							</p>

							<!-- <p class="fieldset">
								<input type="checkbox" id="accept-terms">
								<label for="accept-terms">I agree to the <a href="#0">Terms</a></label>
							</p> -->

							<p class="fieldset">						
								<input type="hidden" name="hidden_id" value="<?php if(isset($id)) echo $id; ?>">
								<input class="full-width has-padding" type="submit" name="updateProfileBtn" value="Update Changes">
							</p>
						</form>

						</div>						
								<?php endif; ?>
				</div>
				</div>


			
			<footer class="page-footer" itemscope="" itemtype="http://schema.org/Organization">
				<div class="page-frame">
					<div class="footer-links-column1">
						<ul class="footer-links-column1-list">
							<li>CUSTOMER SERVICE</li>
							<li>
								<a href="how-it-works/index.html" itemprop="url">
									<span itemprop="name">How It Works</span>
								</a>
							</li>
							<li>
								<a href="stores/index.html" itemprop="url">
									<span itemprop="name">Browse Stores</span>
								</a>
							</li>
							<li>
								<a href="shipping/index.html" itemprop="url">
									<span itemprop="name">Shipping</span>
								</a>
							</li>
							<li>
								<a href="help/index.html" itemprop="url">Help &amp; FAQ</a>
							</li>
							<li>
								<a href="#" id="js-footer-tracking">Order Tracking</a>
							</li>
							<li>
								<a href="help/contact/index.html" itemprop="url">
									<span itemprop="name">Contact Us</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="footer-links-column2">
						<ul class="footer-links-column2-list">
							<li>COMPANY INFORMATION</li>
							<li>
								<a href="about/index.html" itemprop="url">
									<span itemprop="name">About Us</span>
								</a>
							</li>
							<li>
								<a href="blog/index.html" itemprop="url">
									<span itemprop="name">Blog</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="footer-links-column3">
						<ul class="footer-links-column3-list">
							<li>FOLLOW US</li>
							<li class="facebook-rating">
								<a href="" itemprop="url" target="_blank">Facebook</a>
							</li>
							<li>
								<a href="" itemprop="url" target="_blank">Instagram</a>
							</li>
							<li>
								<a href="" itemprop="url" target="_blank">Twitter</a>
							</li>
						</ul>
					</div>
					<div class="footer-links-column4 x-mobile-hide">
						<ul class="footer-links-column4-list align-center">
							<li>GET THE EXTENSION</li>
							<li>
								<a href="" target="_blank">
									<img alt="" src="content/images/add_to_chrome.png" style="height: 41px;" />
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="footer-credits">
					<div class="page-frame">
						<nav class="footer-copyrights-container">
							<span class="footer-copyrights">&copy; 2019 Makayamall.com All Rights Reserved</span>
							<span class="separator">|</span>
							<a class="sitemap" href="sitemap.xml" itemprop="url">XML Sitemap</a>
							<span class="footer-copyrights-cookies"> We use cookies to offer better online experiences. By visiting and using Makaya.com, you consent to our use of cookies. Learn about your options, rights and more by reading our 
								<a class="sitemap" href="" target="_blank">Terms and Conditions &amp; Privacy Policy. </a>  *All retailer logos appearing on this site are the property of their respective owners.
							</span>
						</nav>
					</div>
				</div>
			</footer>			
			<script src="scripts/js/jquery/jquery.min.js" type="text/javascript"></script>
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>
			<script type="text/javascript">
				if (typeof applicationConfig == 'undefined') { var applicationConfig = {}; }
				applicationConfig.requireHomeSlider = true;
				</script>
			<script type="text/javascript">
				$(function() {
					// Initialize form validation on the registration form.
					// It has the name attribute "registration"
					$("form[name='login-form']").validate({
						// Specify validation rules
						rules: {
						// The key name on the left side is the name attribute
						// of an input field. Validation rules are defined
						// on the right side						
						username: {
							required: true,
							// Specify that email should be validated
							// by the built-in "email" rule
							email: true
						},
						password: {
							required: true,
							minlength: 5
						}
						},
						// Specify validation error messages
						messages: {
						password: {
							required: "Please provide a password",
							minlength: "Your password must be at least 5 characters long"
						},
						username: "Please enter a valid email address"
						},
						// Make sure the form is submitted to the destination defined
						// in the "action" attribute of the form when valid
						submitHandler: function(form) {
							form.submit();
						}
					});
					$("form[name='signup-form']").validate({
						// Specify validation rules
						rules: {
						// The key name on the left side is the name attribute
						// of an input field. Validation rules are defined
						// on the right side
						firstname: "required",
						lastname: "required",
						email: {
							required: true,
							// Specify that email should be validated
							// by the built-in "email" rule
							email: true
						},
						phone: {
							required: true							
						},
						password: {
							required: true,
							minlength: 5
						}
						},
						// Specify validation error messages
						messages: {
						firstname: "Please enter your firstname",
						lastname: "Please enter your lastname",
						phone: "Please enter your phone number",
						password: {
							required: "Please provide a password",
							minlength: "Your password must be at least 5 characters long"
						},
						email: "Please enter a valid email address"
						},
						// Make sure the form is submitted to the destination defined
						// in the "action" attribute of the form when valid
						submitHandler: function(form) {
							form.submit();
						}
					});
					$("form[name='profile-form']").validate({
						// Specify validation rules
						rules: {
						// The key name on the left side is the name attribute
						// of an input field. Validation rules are defined
						// on the right side
						firstname: "required",
						lastname: "required",
						email: {
							required: true,
							// Specify that email should be validated
							// by the built-in "email" rule
							email: true
						},
						phone: {
							required: true							
						},
						password: {
							required: true,
							minlength: 5
						}
						},
						// Specify validation error messages
						messages: {
						firstname: "Please enter your firstname",
						lastname: "Please enter your lastname",
						phone: "Please enter your phone number",
						password: {
							required: "Please provide a password",
							minlength: "Your password must be at least 5 characters long"
						},
						email: "Please enter a valid email address"
						},
						// Make sure the form is submitted to the destination defined
						// in the "action" attribute of the form when valid
						submitHandler: function(form) {
							form.submit();
						}
					});
				});
				</script>
			<script type="text/javascript" src="scripts/plugins/modernizr.js"></script>
			<!--script type="text/javascript" src="scripts/require.js"></script-->
			<script type="text/javascript">
				if (typeof applicationConfig == 'undefined') { var applicationConfig = {}; }
				//require.config({ urlArgs: "v=1.7.19.847" });
			</script>
			<script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="scripts/js/jquery/jquery.bxslider.min.js" src="scripts/js/jquery/jquery.bxslider.min.js?v=1.7.19.847"></script>			
			<!-- <script type="text/javascript" src="scripts/main.min.js"></script> -->
			<script src="scripts/js/custom/landing/affiliate.js" type="text/javascript"></script>
			<script type="text/javascript" src="scripts/register.js"></script>
	</body>		
</html>