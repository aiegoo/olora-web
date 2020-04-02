<?php

/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densitydpi=medium-dpi" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<meta name="format-detection" content="telephone=no" />
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>

	<link rel="shortcut icon" href="<?php echo get_theme_file_uri() ?>/olora/assets/images/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon-precomposed" href="<?php echo get_theme_file_uri() ?>/olora/assets/images/114x114.png" />
	<link rel="apple-touch-icon-precomposed" sizes="<?php echo get_theme_file_uri() ?>/olora/114assets/user/assets/images/114x114.png" />
	<link type="text/css" rel="stylesheet" href="<?php echo get_theme_file_uri() ?>/olora/banner/css/jquery-ui-1.10.4.min.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo get_theme_file_uri() ?>/olora/banner/css/common_en.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo get_theme_file_uri() ?>/olora/banner/vendor/swiper/swiper.min.css" />

	<link type="text/css" rel="stylesheet" href="<?php echo get_theme_file_uri() ?>/olora/banner/css/main.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo get_theme_file_uri() ?>/olora/style.css" />

	<script type="text/javascript" src="<?php echo get_theme_file_uri() ?>/olora/banner/vendor/jquery/jquery-1.12.3.min.js"></script>
	<script type="text/javascript" src="<?php echo get_theme_file_uri() ?>/olora/banner/vendor/jquery/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="<?php echo get_theme_file_uri() ?>/olora/banner/vendor/jquery/jquery-ui.min.js"></script>
	<script type="text/javascript" src="<?php echo get_theme_file_uri() ?>/olora/banner/vendor/jquery/jquery.ui.touch-punch.min.js"></script>
	<script type="text/javascript" src="<?php echo get_theme_file_uri() ?>/olora/banner/vendor/jquery/jquery-bpopup/jquery.bpopup.min.js"></script>
	<script type="text/javascript" src="<?php echo get_theme_file_uri() ?>/olora/banner/vendor/ftscroller/ftscroller.min.js"></script>
	<script type="text/javascript" src="<?php echo get_theme_file_uri() ?>/olora/banner/vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?php echo get_theme_file_uri() ?>/olora/banner/vendor/sticky/jquery.sticky.js"></script>
	<script type="text/javascript" src="<?php echo get_theme_file_uri() ?>/olora/banner/vendor/swiper/swiper.min.js"></script>
	<script type="text/javascript" src="<?php echo get_theme_file_uri() ?>/olora/banner/js/ui.js"></script>
	<script type="text/javascript" src="<?php echo get_theme_file_uri() ?>/olora/banner/js/common.js"></script>
	<script type="text/javascript" src="<?php echo get_theme_file_uri() ?>/olora/banner/js/ajax.js"></script>
	<link href="<?php echo get_theme_file_uri() ?>/olora/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

</head>

<body class="comBg subPage" <?php //body_class(); 
							?>>

	<?php
	wp_body_open();
	?>
	<div class="wrap">
		<!-- areas : start -->
		<div class="areas">
			<!-- header : start -->
			<div class="header null" id="header">
				<!-- gnb_web_area : start -->
				<div class="gnb_web_area clearfix">
					<div class="gnb_bg"></div>
					<h1><a href="" class="logo"> <img src="olora//assets/images/value/" alt=""><em>HIGHT TECH</em></a></h1>
					<nav class="gnb">
						<ul class="dep1 clearfix">
							<li>
								<a href="" class="menu01" onclick="gtag('event', 'MENU-Who we are');">Who we are</a>
								<ul class="dep2">
									<li><a href="" class="menu02" onclick="gtag('event', 'MENU-Who we are|Company');">Company</a></li>
									<li><a href="../who/ceoMessage1b56.html?m=ceoMessage" class="menu02" onclick="gtag('event', 'MENU-Who we are|CEO Message');">CEO Message</a></li>
									<li><a href="" class="menu02" onclick="gtag('event', 'MENU-Who we are|Top Management');">Family <em>Members</em></a></li>
								</ul>
							</li>
							<li>
								<a href="" class="menu01" onclick="gtag('event', 'MENU-What we value');">What we value</a>
								<ul class="dep2">
									<li><a href="" class="menu02" onclick="gtag('event', 'MENU-What we value|Professionalism');">Pine City</a></li>
									<li><a href="" class="menu02" onclick="gtag('event', 'MENU-What we value|People & Training');">Cultural Heritage</a></li>
									<li><a href="" class="menu02" onclick="gtag('event', 'MENU-What we value|Management');">Be there</a></li>
									<li><a href="" class="menu02" onclick="gtag('event', 'MENU-What we value|Trust');">Innovation</a></li>
									<li><a href="" class="menu02" onclick="gtag('event', 'MENU-What we value|Ethics');">Ethics</a></li>
								</ul>
							</li>
							<li>
								<a href="../ship/view7d76.html?m=ship" class="menu01">What we do</a>
								<ul class="dep2">
									<li><a href="" class="menu02" onclick="gtag('event', 'MENU-What we do|LNG');">Deep Learning</a></li>
									<li><a href="" class="menu02" onclick="gtag('event', 'MENU-What we do|LPG}');">IoT Monitoring</a></li>
									<li><a href="" class="menu02" onclick="gtag('event', 'MENU-What we do|Ship Management');">Detection </a></li>
									<li><a href="" class="menu02" onclick="gtag('event', 'MENU-What we do|For The More');">Sensors</a></li>
									<li><a href="" class="menu02" onclick="gtag('event', 'MENU-What we do|For The More');">Solutions</a></li>
								</ul>
							</li>
						</ul>
					</nav>
					<!-- sub_menu -->
					<div class="sub_menu">
						<div class="menu_area">
							<ul class="dep1">
								<li><a href="" onclick="gtag('event', 'SUBMENU-News & Press');">Blog</a></li>
								<li><a href="" onclick="gtag('event', 'SUBMENU-Activitles');">Media</a></li>
								<li>
									<a href="" onclick="gtag('event', 'SUBMENU-Downloads');">Downloads</a>
									<ul class="dep2">
										<li><a href="" onclick="gtag('event', 'SUBMENU-CI');">- CI</a></li>
										<li><a href="" onclick="gtag('event', 'SUBMENU-Brochure');">- Brochure</a></li>
									</ul>
								</li>
							</ul>
							<!-- <ul class="dep1">
							<li><a href="" >Shore Staff</a></li>
							<li><a href="">Sea Staff</a></li>
						</ul> -->
							<ul class="dep1">
								<li><a href="">Contact Us</a></li>
								<li><a href="">Locations</a></li>
							</ul>
						</div>
					</div>
					<!-- sub_menu : end -->
					<!-- right_zone : start -->
					<div class="right_zone">
						<!-- info : start -->
						<div class="info">
							<ul class="clearfix">
								<li><a href="">News</a></li>
								<li><a href="">Careers</a></li>
								<li><a href="">Contact</a></li>
							</ul>
						</div>
						<!-- info : end -->
						<div class="global">
							<ul class="clearfix">
								<!-- 활성화시 li에 클래스 on추가 -->
								<li class="on"><a href="index.html">EN</a></li>
								<li class=""><a href="index.html">KR</a></li>
							</ul>
							<a href="#" class="btn_global">ENG</a>
						</div>
					</div>
					<!-- right_zone : end -->
				</div>
				<!-- gnb_web_area : end -->
				<!-- gnb_mobile_area : start -->
				<div class="gnb_mobile_area">
					<h1><a href="index.html" class="logo"><em>HIGH TECH</em></a></h1>
					<a href="#" class="btn_gnb"><em>Menu open</em></a>
					<nav class="nav_gnb">
						<div class="head">
							<div class="logo">
								<a href="index.html" class="logo"><em>HIGH TECH</em></a>
							</div>
							<div class="btns">
								<a href="main.html" class="btn_lang on">EN</a>
								<!-- 활성화된 언어에 클래스 on 추가 -->
								<a href="index.html" class="btn_lang ">KR</a>
								<a href="#" class="btn_gnb_close">Menu close</a>
							</div>
						</div>
						<!-- // menus : start -->
						<div class="menus scroller" id="scroller">
							<!-- // menu : start -->
							<div class="menu">
								<ul class="dep1">
									<li>

										<a href="" class="menu01 "><strong>Who we are</strong></a>
										<!-- <ul class="dep2">
										<li><a href="" class="menu02 ">Company</a></li>
										<li><a href="" class="menu02 ">CEO Message</a></li>
										<li><a href="" class="menu02 ">Top <em>Management</em></a></li>
									</ul> -->
									</li>
									<li>

										<a href="" class="menu01 "><strong>What we value</strong></a>
										<!-- <ul class="dep2">
										<li><a href="" class="menu02 ">Professionalism</a></li>
										<li><a href="" class="menu02 ">People & Training</a></li>
										<li><a href="" class="menu02 ">Management</a></li>
										<li><a href="" class="menu02 ">Trust</a></li>
										<li><a href="" class="menu02 ">Ethics</a></li>
									</ul> -->
									</li>
									<li>

										<a href="" class="menu01 "><strong>What we do</strong></a>
										<!-- <ul class="dep2">
										<li><a href="">LNG</a></li>
										<li><a href="" class="menu02 ">LPG</a></li>
										<li><a href="" class="menu02 ">Ship Management </a></li>
										<li><a href="" class="menu02 ">For The More</a></li>
									</ul> -->
									</li>
								</ul>
							</div>
							<!-- // menu : end -->
							<!-- // start : end -->
							<div class="menu menuSub">
								<ul class="dep1">
									<li>

										<a href="" class="menu01 ">News</a>
										<ul class="dep2">
											<li><a href="" class="menu02 ">Blog</a></li>
											<li><a href="" class="menu02 ">Media</a></li>
											<li>
												<a href="" class="menu02 menuPlus">Downloads</a>
												<ul class="dep3">
													<li><a href="" class="menu03 ">- CI</a></li>
													<li><a href="" class="menu03 ">- Brochure</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li>

										<a href="" class="menu01 ">Careers</a>
										<!-- <ul class="dep2">
										<li><a href="" class="menu02 ">Shore Staff</a></li>
										<li><a href="" class="menu02 ">Sea Staff</a></li>
									</ul> -->
									</li>
									<li>

										<a href="" class="menu01 ">Contact</a>
										<ul class="dep2">
											<li><a href="" class="menu02 ">Contact Us</a></li>
											<li><a href="" class="menu02 ">Locations</a></li>
										</ul>
									</li>
								</ul>
							</div>
							<!-- // menu : end -->
						</div>
						<!-- // menus : end -->
						<div class="nav_foot">
							<ul class="clearfix">
								<li><a href="" class="btn_01"><em>Contact us</em></a></li>
								<li><a href="" class="btn_02"><em>Brochure</em></a></li>
								<li><a href="" class="btn_03"><em>Locations</em></a></li>
							</ul>
						</div>
					</nav>
				</div>
				<!-- gnb_mobile_area : end -->

				<!-- top title area start -->



				<!-- Main -->
				<div class="title_area">
					<p class="title"></p>
					<p class="desc"></p>
				</div>





				<!----------sidebar----------->
				<div class="left">
					<div class="item">
						<span class=""><img style="height: 60px" src="<?php echo get_theme_file_uri() ?>/olora/banner/images/icons/high%20tech.png" alt=""></span>
					</div><br>
					<div class="item active">
						<span class=""><img style="padding: 10px;" src="<?php echo get_theme_file_uri() ?>/olora/banner/images/icons/project.jpg" alt=""></span>
						Home</div>
					<div class="item">
						<span class=""><img style="padding: 10px;" src="<?php echo get_theme_file_uri() ?>/olora/banner/images/icons/features.jpg" alt=""></span>
						Features</div>
					<div class="item">
						<span class=""><img style="padding: 10px;" src="<?php echo get_theme_file_uri() ?>/olora/banner/images/icons/Portfolio.jpg" alt=""></span>
						Portfolio</div>
					<div class="item">
						<span class=""><img style="padding: 10px;" src="<?php echo get_theme_file_uri() ?>/olora/banner/images/icons/Solution.jpg" alt=""></span>
						Solutions</div>
					<div class="item">
						<span class=""><img style="padding: 10px;" src="<?php echo get_theme_file_uri() ?>/olora/banner/images/icons/blog.jpg" alt=""></span>
						Blog</div>
					<div class="item">
						<span class=""><img style="padding: 10px;" src="<?php echo get_theme_file_uri() ?>/olora/banner/images/icons/aboutus.jpg" alt=""></span>
						About us</div>
				</div>






























				<!-- top title area end -->
			</div>
			<!-- header : end -->
			<!-- container : start -->
			<div class="container">
				<div class="content" id="content">
					<section class="main_section null">

						<article class="stickyMenu">
							<nav class="web_snb">

								<!-- sub menu start -->


								<!-- 메뉴의 수에 맞춰서 tbox_XX 의 XX에 숫자 입력 -->

								<ul class="tbox tbox_02">
									<li><a href="#">Contact us</a></li>
									<li class="on"><a href="#">Location</a></li>
								</ul>













								<!-- sub menu end -->

							</nav>

							<nav class="mobile_snb">
								<div class="tbox clearfix">
									<!-- box : start -->
									<div class="box dep1">
										<!-- dropLst : start -->
										<div class="dropLst">
											<a href="#" class="txt title">News</a>
											<div class="dlst">
												<ul>
													<li><a href="" class="value ">Who we are</a></li>
													<li><a href="" class="value ">What we value</a></li>
													<li><a href="" class="value ">What we do</a></li>
													<li><a href="" class="value ">News</a></li>
													<li><a href="" class="value ">Careers</a></li>
													<li><a href="" class="value ">Contact</a></li>
												</ul>
											</div>
										</div>
										<!-- dropLst : end -->
									</div>
									<!-- box : end -->
									<!-- box : start -->
									<div class="box dep2">
										<!-- dropLst : start -->

										<!-- mobile sub menu start -->













										<!-- sub menu end -->

										<!-- dropLst : end -->
									</div>
									<!-- box : end -->
								</div>
							</nav>
						</article>







						<script type="text/javascript">
							$(window).load(function() {
								onMainSlider();
							});

							function onMainSlider() {
								$('.slick_slider').on('init', function(event, slick) {

									$(this).on("beforeChange", function(event, slick, currentSlide, nextSlide) {
										$(this).find(".item a").attr("tabindex", "-1");
									}).on("afterChange", function(event, slick, currentSlide) {
										$(this).find(".slick-active a").attr("tabindex", 0);
									}).on("lazyLoadError", function(event, slick, image, imageSource) {
										console.log("error");
									});

									$(this).addClass("ani");
								}).slick({
									dots: true,
									infinite: true,
									speed: 1000,
									dots: true,
									arrows: true,
									autoplay: true,
									autoplaySpeed: 6000,
									fade: true,
									pauseOnHover: false,
									pauseOnFocus: false,
									cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
									customPaging: function(slider, i) {
										var title = $(slider.$slides[i]).data('title');
										return '<button><em>' + title + '</em></button>';
									},
									responsive: [{
										breakpoint: 768,
										settings: {
											customPaging: function(slider, i) {
												var num = i + 1;
												return '<button><em>0' + num + '</em></button>';
											}
										}
									}]
								});
							}
						</script>


						<article class="pages">
							<div class="slick_slider" style="font-size: 15px;">
								<div class="page page_01" data-title="DEEP LEARNING" font-size="18px;">
									<div class="bg">
										<div class="bg_area"></div>
										<img src="assets/images/main/bg_01.jpg" alt="">
									</div>
									<div class="intro">
										<div class="text_box">
											<p class="title eng"><em>DEEP LEARNING</em></p>
											<p class="desc"><em class="br">Lorem ipsum dolor sit amet. </em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, fugiat!</p>
											<a href="" class="btn_box eng"><em>Learn More</em></a>
										</div>
									</div>
								</div>
								<div class="page page_02" data-title="IOT MONITORING APP">
									<div class="bg">
										<div class="bg_area"></div>
										<img src="assets/images/main/bg_02.jpg" alt="">
									</div>
									<div class="intro">
										<div class="text_box">
											<p class="title eng"><em>IOT MONITORING APP</em></p>
											<p class="desc"><em class="br">Lorem ipsum dolor sit amet. </em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, fugiat!</p>
											<a href="" class="btn_box eng"><em>Learn More</em></a>
										</div>
									</div>
								</div>
								<div class="page page_03" data-title="TERMITE DETECTION">
									<div class="bg">
										<div class="bg_area"></div>
										<img src="assets/images/main/bg_03.jpg" alt="">
									</div>
									<div class="intro">
										<div class="text_box">
											<p class="title eng"><em>TERMITE DETECTION</em></p>
											<p class="desc"><em class="br">Lorem ipsum dolor sit amet. </em> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, numquam.</p>
											<a href="" class="btn_box eng"><em>Learn More</em></a>
										</div>
									</div>
								</div>
								<div class="page page_04" data-title="SENSORS">
									<div class="bg">
										<div class="bg_area"></div>
										<img src="/assets/images/main/bg_04.jpg" alt="">
									</div>
									<div class="intro">
										<div class="text_box">
											<p class="title eng"><em>SENSORS</em></p>
											<p class="desc"><em class="br">Lorem ipsum dolor sit amet. </em> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, numquam.</p>
											<a href="" class="btn_box"><em>Learn More</em></a>
										</div>
									</div>
								</div>
								<div class="page page_05" data-title="SOLOUTIONS">
									<div class="bg">
										<div class="bg_area"></div>
										<img src="assets/images/main/bg_05.jpg" alt="">
									</div>
									<div class="intro">
										<div class="text_box">
											<p class="title eng"><em>SOLUTIONS</em></p>
											<p class="desc"><em class="br">Lorem ipsum dolor sit amet. </em> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, numquam.</p>
											<a href="" class="btn_box"><em>Learn More</em></a>
										</div>
									</div>
								</div>
							</div>
							<!--
	<div class="slick_btns">
		<a href="#" class="slider_prev"></a>
		<a href="#" class="slider_next"></a>
	</div>
	-->
						</article>

						<!-- 
<script type="text/javascript">
	$(document).ready(function() {
		cookiedata = document.cookie; 
		if ( cookiedata.indexOf("ncookie=done") < 0 ){ 
			document.getElementById('popup').style.display = "block";    //  팝업창 아이디
		} else {
			document.getElementById('popup').style.display = "none";
			document.getElementById('popup_bg').style.display = "none";// 팝업창 아이디
		}
	});
	
	function setCookie( name, value, expiredays ) { 
		var todayDate = new Date(); 
		todayDate.setDate( todayDate.getDate() + expiredays );
		document.cookie = name + "=" + escape( value ) + "; path=/; expires=" + todayDate.toGMTString() + ";"
	}


	function closeWin() { 
		document.getElementById('popup').style.display = "none";
		document.getElementById('popup_bg').style.display = "none";// 팝업창 아이디
	}

	function todaycloseWin() { 
		setCookie( "ncookie", "done" , 1 ); // 저장될 쿠키명 , 쿠키 value값 , 기간( ex. 1은 하루, 7은 일주일)
		document.getElementById('popup').style.display = "none"; 
		document.getElementById('popup_bg').style.display = "none"; // 팝업창 아이디
	}
	
</script>

<div class="popup_bg" id="popup_bg" onclick="closeWin();"></div>
<div class="popup" id="popup">
	<div class="web">
		<img src="/assets/user/assets/images/popup/popup_web.png" alt="5th ANIVERSARY | Hyundau LNH Shipping 5th Anniversary! World Class LNG Shipping Company를 향해 오늘도 항해 합니다." />
	</div>
	<div class="mobile">
		<img src="/assets/user/assets/images/popup/popup_mobile.png" alt="5th ANIVERSARY | Hyundau LNH Shipping 5th Anniversary! World Class LNG Shipping Company를 향해 오늘도 항해 합니다." />
	</div>
	<a href="#" class="btn_close_day" onclick="todaycloseWin();" alt="I don’t want to see this anymore."></a>
	<a href="#" class="btn_close"onclick="closeWin();" alt="close"></a>	
</div>
-->





					</section>

					<!-- quickLayer : start -->
					<div class="quickLayer ">
						<div class="sticky_quick">
							<a href="#" class="btn_open"><em>Quick Menu Open</em></a>
							<div class="menus">
								<a href="" class="btn_link btn_contact"><em>contactus</em></a>
								<a href="" class="btn_link btn_brochure"><em>brochure</em></a>
								<a href="" class="btn_link btn_locations"><em>locations</em></a>
								<a href="#" class="btn_close"><em>Quick Menu Close</em></a>
							</div>
							<a href="#" class="btn_top"><em>Top</em></a>
						</div>
					</div>
					<!-- quickLayer : end -->
				</div>
				<!-- content : end -->
			</div>
			<!-- container : end -->
		</div>
	</div>
	<!-- areas : end-->
	<?php
	// Output the menu modal.
	//get_template_part('template-parts/modal-menu');
