<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>...</title>
    <meta name="description" content="...">
    <meta name="viewport" content="width=device-width,height=device-height, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Signika:600,300%7Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/conan-lai/style.css">
    <script src="http://cdn.jsdelivr.net/jquery/1.11.2/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/conan-lai/bgscroll.js"></script>
  
    <?php 
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js');
    wp_head(); 
    ?>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/fr_CA/sdk.js#xfbml=1&appId=415222945342431&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

</head>
<body>

<?php if(!is_page(5)) : ?>

  <div id="zone-menu">
    <div class="overlay"></div>

    <a href="#" title="Menu" class="bt-menu">Menu</a>

    <?php if(is_page(40)) : ?>
      <a class="objet retour click" title="<?php echo get_the_title(9); ?>" href="<?php echo get_permalink(9); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/images/retourflehce.png">
      </a>
    <?php endif; ?>

    <div class="menu-content">
      <?php wp_nav_menu(array('theme_location' => 'navigation', 'container' => false)); ?>
    </div><!-- .menu-content -->

  </div><!-- #zone-menu -->

<?php endif; ?>