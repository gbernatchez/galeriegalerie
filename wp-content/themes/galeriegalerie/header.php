<!DOCTYPE html>
<html lang="fr-CA">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title(); ?></title>
<meta name="viewport" content="width=device-width, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>">
<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
<![endif]-->
<?php 
wp_enqueue_script('jquery');
wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js');
wp_head(); 
?>
<meta property="twitter:image" content="wp-content/themes/galeriegalerie/favicons/twitter.png">
<link rel="icon" type="image/png" sizes="192x192" href="wp-content/themes/galeriegalerie/favicons/android-chrome-192x192.png">
<link rel="manifest" href="wp-content/themes/galeriegalerie/favicons/manifest.json">
<meta name="mobile-web-app-capable" content="yes">
<link rel="apple-touch-icon" sizes="114x114" href="wp-content/themes/galeriegalerie/favicons/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="wp-content/themes/galeriegalerie/favicons/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="wp-content/themes/galeriegalerie/favicons/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="wp-content/themes/galeriegalerie/favicons/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="wp-content/themes/galeriegalerie/favicons/apple-touch-icon-180x180.png">
<link rel="apple-touch-icon" sizes="57x57" href="wp-content/themes/galeriegalerie/favicons/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="wp-content/themes/galeriegalerie/favicons/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="wp-content/themes/galeriegalerie/favicons/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="wp-content/themes/galeriegalerie/favicons/apple-touch-icon-76x76.png">
<meta name="apple-mobile-web-app-capable" content="yes">
<link rel="icon" type="image/png" sizes="16x16" href="wp-content/themes/galeriegalerie/favicons/favicon-16x16.png">
<link rel="icon" type="image/png" sizes="230x230" href="wp-content/themes/galeriegalerie/favicons/favicon-230x230.png">
<link rel="icon" type="image/png" sizes="32x32" href="wp-content/themes/galeriegalerie/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="wp-content/themes/galeriegalerie/favicons/favicon-96x96.png">
<link rel="shortcut icon" href="wp-content/themes/galeriegalerie/favicons/favicon.ico">
<link rel="yandex-tableau-widget" href="wp-content/themes/galeriegalerie/favicons/yandex-browser-manifest.json">
<meta name="msapplication-TileColor" content="#FFFFFF">
<meta name="msapplication-TileImage" content="wp-content/themes/galeriegalerie/favicons/mstile-144x144.png">
<meta name="msapplication-config" content="wp-content/themes/galeriegalerie/favicons/browserconfig.xml">
<meta property="twitter:image" content="wp-content/themes/galeriegalerie/favicons/twitter.png">
<meta property="og:image" content="wp-content/themes/galeriegalerie/favicons/open-graph.png">
<link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 1)" href="wp-content/themes/galeriegalerie/favicons/apple-touch-startup-image-1024x748.png">
<link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 2)" href="wp-content/themes/galeriegalerie/favicons/apple-touch-startup-image-1536x2008.png">
<link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 2)" href="wp-content/themes/galeriegalerie/favicons/apple-touch-startup-image-2048x1496.png">
<link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 1)" href="wp-content/themes/galeriegalerie/favicons/apple-touch-startup-image-320x460.png">
<link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)" href="wp-content/themes/galeriegalerie/favicons/apple-touch-startup-image-640x1096.png">
<link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 2)" href="wp-content/themes/galeriegalerie/favicons/apple-touch-startup-image-640x920.png">
<link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 1)" href="wp-content/themes/galeriegalerie/favicons/apple-touch-startup-image-768x1004.png"></head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_CA/sdk.js#xfbml=1&appId=415222945342431&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="landscape-gif"><img src="<?php echo get_template_directory_uri(); ?>/images/rotate.gif"></div>
<div id="zone-menu">
	<div class="overlay"></div>
	<a href="#" class="bt-menu">menu</a>
	<div class="menu-content">
		<?php wp_nav_menu(array('theme_location' => 'Navigation', 'container' => false)); ?>
	</div><!-- .menu-content -->
</div><!-- #zone-menu -->
<div id="page"></div></body></html>