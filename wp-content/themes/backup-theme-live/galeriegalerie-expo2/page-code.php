<?php 
/*
* Template name: Code
*/
?>
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
wp_enqueue_script('movingText', get_template_directory_uri() . '/js/movingText.js');
wp_head(); 
?>
<body class="code">
<div id="fb-root"></div>
<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_CA/sdk.js#xfbml=1&appId=415222945342431&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

jQuery(document).ready(function(){
    var texte = jQuery('.text').text();
    jQuery('.text').empty();
    jQuery('.text').typedText(texte, 'fast');
});

</script>

<div class="text">   
	<?php if(have_posts()) while(have_posts()) : the_post();
	the_content();
	endwhile; ?>
</div>

</body>
<script>

 /* (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-21346294-1', 'auto');
  ga('send', 'pageview'); */

</script>
</html>
