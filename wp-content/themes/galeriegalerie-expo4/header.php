<!DOCTYPE html>
<html lang="fr-CA">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<?php if (is_page(503)): ?>
<meta http-equiv="refresh" content="30">
<?php endif; ?>

<title><?php wp_title(); ?></title>
<meta name="viewport" content="width=device-width, user-scalable=yes">
<meta name="google-site-verification" content="j3ROK83z7hREDudn60BKYnAWmWStZwhNN1dMEcYRH3o" />
<link href='https://fonts.googleapis.com/css?family=Signika:600,300%7CVT323' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Princess+Sofia" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>">
<!--[if lt IE 9]>
  <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
<![endif]-->
<?php 
wp_enqueue_script('jquery');
wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js');
wp_head(); 
?>
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<body <?php body_class( $class ); ?>>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_CA/sdk.js#xfbml=1&appId=415222945342431&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php if(!is_page('accueil') && !is_home() && !(is_page_template('page.php'))) : ?>

  <div class="landscape-gif"><img alt="rotate" src="<?php echo get_template_directory_uri(); ?>/images/rotate.gif"></div>

<?php endif; ?>

<?php
if ( function_exists('yoast_breadcrumb') ) {
     yoast_breadcrumb('<p class="visuallyhidden" id="breadcrumbs">','</p>');
}
?>

<?php if(!is_page(5)) : ?>

  <div id="zone-menu">
    <div class="overlay"></div>

    <a href="#" title="Menu" class="bt-menu">Menu</a>

    <?php if(is_page(40)) : ?>
      <a class="objet retour click" title="<?php echo get_the_title(9); ?>" href="<?php echo get_permalink(9); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/images/retourflehce.png">
      </a>
    <?php endif; ?>

    <?php if(is_page(734) || is_page(713) || is_page(702) || is_page(703) || is_page(704) || is_page(705) || is_page(706)) : ?>
      <a class="objet retour click" title="<?php echo get_the_title(7); ?>" href="<?php echo get_permalink(7); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/images/retourflehce.png">
      </a>
    <?php endif; ?>

    <?php if(is_child('archives')) : ?>
      <a class="objet retour click" title="<?php echo get_the_title(7); ?>" href="/archives">
        <img src="<?php echo get_template_directory_uri(); ?>/images/retourflehce.png">
      </a>
    <?php endif; ?>

    <div class="menu-content">
      <?php wp_nav_menu(array('theme_location' => 'navigation', 'container' => false)); ?>
    </div><!-- .menu-content -->

  </div><!-- #zone-menu -->

<?php endif; ?>

<?php 
$defaultTimeZone='UTC';
if(date_default_timezone_get()!=$defaultTimeZone) date_default_timezone_set($defaultTimeZone);
function _date($format="r", $timestamp=false, $timezone=false) {
    $userTimezone = new DateTimeZone(!empty($timezone) ? $timezone : 'GMT');
    $gmtTimezone = new DateTimeZone('GMT');
    $myDateTime = new DateTime(($timestamp!=false?date("r",(int)$timestamp):date("r")), $gmtTimezone);
    $offset = $userTimezone->getOffset($myDateTime);
    return date($format, ($timestamp!=false?(int)$timestamp:$myDateTime->format('U')) + $offset);
}

$date = _date("Ymd", false, 'America/New_York');
?>

<div id="page">