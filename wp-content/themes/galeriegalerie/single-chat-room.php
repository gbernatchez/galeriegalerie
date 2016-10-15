<!DOCTYPE html>
<html lang="fr-CA">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title(); ?></title>
<meta name="viewport" content="width=device-width, user-scalable=yes">
<meta name="google-site-verification" content="j3ROK83z7hREDudn60BKYnAWmWStZwhNN1dMEcYRH3o" />
<link href='https://fonts.googleapis.com/css?family=Signika:600,300%7CVT323' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>">
<!--[if lt IE 9]>
  <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
<![endif]-->
<?php 
wp_enqueue_script('jquery');
wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js');
wp_head(); 
?>
<body <?php body_class( $class ); ?>>
<?php 
if(have_posts()) while(have_posts()) : the_post();
the_content();
endwhile; ?>

</div><!-- #page -->

</body>
</html>

