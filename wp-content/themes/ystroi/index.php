<!doctype html>
<html lang=ru>
<head>
	<meta charset=utf-8>
	<title>Y-Stroy</title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
	<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=PT+Serif:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/buttons.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/menus.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/cols.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/forms.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/calc.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.arcticmodal-0.3.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page_inner.css" />
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png" />	
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/apple-touch-favicon.png"/>
	<meta name="viewport" content="width=device-width, initial-scale=0.85, maximum-scale=0.85, user-scalable=0" />
	<meta name="viewport" content="target-densitydpi=high-dpi" />
	<meta name="MobileOptimized" content="720"/>
	<meta name="HandheldFriendly" content="true"/>
	<?= wp_head() ?>
	<!--[if lt IE 10]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/placeholder_ie9.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/required_ie9.js"></script>
	<![endif]-->
</head>
<?php global $wp_query ?>
<?php $template_part = define_template_part() ?>	
<!--[if lt IE 9]>
   <script>
      document.createElement('header');
      document.createElement('nav');
      document.createElement('section');
      document.createElement('article');
      document.createElement('aside');
      document.createElement('footer');
   </script>
<![endif]-->
<body>
	<header <?= $template_part !== 'main' ? "class='header--inner'" : "" ?>>
		<div class="page__universal-wrapper">
			<div class="head-universal__col head-universal__col_first">
				<p>
					Ваш Город <br />
					<strong id="city"><?= defineCity() ?></strong>
				</p>
			</div>
			<div class="head-universal__col head-universal__col_second">
				<p>
					Сегодня <br />
					<strong id="date"><?= defineDate() ?></strong>
				</p>
			</div>
			<div class="head-universal__col head-universal__col_logo">
				<a href="<?= site_url(); ?>">
					<img src="<?= get_template_directory_uri(); ?>/images/logo.png" />		
				</a>
			</div>
			<div class="head-universal__col head-universal__col_clock">
				<p>
					<object type="application/x-shockwave-flash" data="http://ystroi.com/wp-content/themes/u_stroy/flash/21.swf" width="84" height="84"> 
						<param name="movie" value="/wp-content/themes/u_stroy/flash/21.swf">
						<param name="wmode" value="transparent">
					</object>
				</p>
			</div>
			<div class="head-universal__col head-universal__col_last">
				<p>
					<strong>+7 (495) 000-00-00 </strong> <br />
					C 09:00 до 20:00
				</p>
			</div>		
		</div>
	</header>
    
    <!-- Content -->
	<?= render_template_part($template_part, ['post'=>get_post($wp_query->queried_object_id)]) ?>

	<footer>
		<div class="page__universal-wrapper">
			<p>ООО «Подрядчик» — ремонтные и строительные работы.</p>
			<p>+7(495) 000-00-00 <br />
			с 09:00 до 20:00</p>
		</div>
		
	
	</footer>
	<a id="scroller" class="btn_top" href="#" style="display: none">
		<img alt="home" src="<?= get_template_directory_uri(); ?>/images/home2.png">
	</a>
</body>
</html>
