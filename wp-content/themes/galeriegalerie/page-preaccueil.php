<?php 
/*
* Template name: Pre Accueil
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
<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_CA/sdk.js#xfbml=1&appId=415222945342431&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

/*jQuery(document).ready(function(){
  var starttime = new Date().getTime();
  var width = jQuery(window).width() - 40;
  var letters = document.location.hash ? document.location.hash.substr(1) : '<?php echo get_option('blogdescription'); ?>';
  var elements = jQuery('#elements');
  for (i = 0; i < letters.length; i++) {
    jQuery('<div>', {
      html: letters[i]
    })
    .addClass('letter')
    .appendTo(elements);
  }
  
  function run() {
    var elapsed = new Date().getTime() - starttime;
    var pos = elapsed * 0.1;
    
    jQuery('div.letter').each(function(index, letter) {
      var posx = (pos + 25 * index) % width;
      var posy = 100 + Math.sin(posx / 25) * 25;
      jQuery(letter).css('left', posx + 'px');
      jQuery(letter).css('top', posy + 'px');
    });
  }

  setInterval(run, 30);
}); */

</script>

<?php if(have_posts()) while(have_posts()) : the_post(); ?>

	<div class="tous preaccueil">

    <marquee scrollamount="10"><p>Ouverture <?php the_field('ouverture'); ?></p></marquee>

    <header>
      <img alt="Allo ;)" src="<?php echo get_template_directory_uri(); ?>/images/peek-a-boo.gif">
      <h1><?php echo get_option('blogname'); ?></h1>
      <h2 id="elements"><?php echo get_option('blogdescription'); ?></h2>
    </header>

		<marquee scrollamount="10"><p>Ouverture <?php the_field('ouverture'); ?></p></marquee>

	</div>

<?php endwhile; ?>

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


