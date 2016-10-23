<?php 
/*
* Template name: Party Roume Content
*/
?>
<!DOCTYPE html>
<html lang="fr-CA">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="refresh" content="15">
<title><?php wp_title(); ?></title>
<meta name="viewport" content="width=device-width, user-scalable=yes">
<meta name="google-site-verification" content="j3ROK83z7hREDudn60BKYnAWmWStZwhNN1dMEcYRH3o" />
<link href='https://fonts.googleapis.com/css?family=Signika:600,300%7CVT323' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Princess+Sofia" rel="stylesheet">
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>">
<!--[if lt IE 9]>
  <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
<![endif]-->
<?php 
wp_enqueue_script('jquery');
wp_head(); 
?>

<div id="page">

<div id="container">

	<div id="party-roume-content">

		<?php echo wdi_feed(array('id'=>'1')); ?>

	</div><!-- #content -->

</div><!-- #container -->

<?php get_footer(); ?>
