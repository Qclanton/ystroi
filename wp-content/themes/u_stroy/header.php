<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?>У-СТРОЙ</title>
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/images/fav.png" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/libs/popup/magnific-popup.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/libs/owl.carousel/assets/owl.carousel.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/media.css">
<script src="<?php bloginfo('template_url'); ?>/libs/modernizr/modernizr.js"></script>
<script src="http://yastatic.net/jquery/2.1.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.filestyle.js"></script>
<script type="text/javascript">
	rusMonth=["января","февраля","марта","апреля","мая","июня","июля","августа","сентября","октября","ноября","декабря"];
	window.onload = function () {
	jQuery("#user-city").text(ymaps.geolocation.city);
	now= new Date();
	$('#nowdate').text(now.getDate() + " " + rusMonth[now.getMonth()] + " " + (now.getYear()+1900));
  }
</script>
<script src="http://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU" type="text/javascript"></script>
<script>// <![CDATA[
$(function() {          $("#hwwork-button").click(function() {              $("#hwwork-video").attr({   loop: "loop" });                   })     });
// ]]></script>
</head>
<body <?php body_class(); ?>>
<!— Yandex.Metrika counter —><script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter31684801 = new Ya.Metrika({ id:31684801, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><!— /Yandex.Metrika counter —>
<div id="overlay"></div>
<div id="page" class="hfeed site">
  <section class="fix_header" id="home">
    <div class="fix_header_wrapper">
      <div class="city_wrapper">
        <p>Ваш город <span id="user-city"></span></p>
      </div> <!-- end city_wrapper -->
      <div class="date_wrapper">
        <p>Сегодня <span id="nowdate"></span></p>
      </div> <!-- end date_wrapper -->
      <div class="logo_wrapper">
        <a href="/index.php"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="logo"></a>
      </div> <!-- end logo_wrapper -->
      <div class="clock_wrapper">
      <object type='application/x-shockwave-flash'
data='<?php bloginfo('template_url'); ?>/flash/21.swf' width='93' height='93'> 
<param name='movie' value='<?php bloginfo('template_url'); ?>/flash/21.swf'>
<param name='wmode' value='transparent'>
</object>
      </div> <!-- end clock_wrapper -->
      <div class="fone_wrapper">
        <p>
          +7(495) 000-00-00 <span>с 09:00 до 20:00</span>
        </p>
      </div> <!-- end fone_wrapper -->
    </div> <!-- end header_wrapper -->
  </section> <!-- end header -->
	<div id="main" class="site-main">
