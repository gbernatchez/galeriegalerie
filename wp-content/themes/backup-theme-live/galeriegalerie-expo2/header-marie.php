<!DOCTYPE HTML>
<html>
<head>
  <link rel='shortcut icon'
     type='image/png' href='//d26s0ow2ajnmml.cloudfront.net/skin/1/logo.png.c04d308e'
    >
    <link href="https://fonts.googleapis.com/css?family=Signika:600,300%7Roboto" rel="stylesheet">
    
      <link id='css_minimal' rel='stylesheet' type='text/css' href='//d26s0ow2ajnmml.cloudfront.net/minimal.css.4f1f23b0'>
      <link rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/css/marie.css'>
    
          <script src='//d26s0ow2ajnmml.cloudfront.net/curl.js.1b2d308c'></script>
        <script>
curl({
    // TODO: use S3 / CDN for extra newhive-specific bundles
    //   with curl loading and versioning support
    baseUrl: "//newhive.com/lib"
    ,paths: {'media' : '//d1v8u1ev1s9e4n.cloudfront.net/' }
    ,pluginPath: 'curl/plugin'
});
    </script>
          <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
          <title>les cheveux</title>
            <script src='//d26s0ow2ajnmml.cloudfront.net/expr.js.e1b84cfc'></script>
    <?php 
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js');
    wp_head(); 
    ?>
</head>