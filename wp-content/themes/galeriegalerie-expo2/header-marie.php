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
 <style>

body, html, #exprs { width:100%; height:100%; margin:0; }
body { overflow:hidden; }
iframe, svg { border:none; width:100%; height:100%; z-index:0; }
.hide { display:none !important; }
.icon { display:inline-block; }
.center { margin:auto; left:0;top:0;right:0;bottom:0; }

.hover,.hover path { transition-property:background-color fill stroke;
  transition-duration:1s; }
.hover.bw:hover path { fill:white; }
.page_btn:hover path { stroke:white; }
.hover.bw:hover > *, .page_btn:hover > * { background-color:black; }
#play_btn:hover path, #play_btn.b.hovered path { stroke:black; fill:white; }

.snapshot { width:100%; position:fixed; }
#play_btn { position:fixed; width:30%; height:30%; margin:auto;
  top:0;right:0;bottom:0;left:0; opacity:.85; }


#overlays > *, .bbar { position:fixed; z-index:1; }
.shades { transition-property:opacity; transition-duration:1s;
  opacity:0; z-index:1; }
.shades.shaded, .shades:hover { opacity:1; }

.hoverarea { width:20%; height:100%; }
.left { left:0 }
.right { right:0 }
.page_btn {
  top:50%;
  margin-top:-36px;
  background-color:white;
  width:60px; height:72px;
}

#bbar .icon.logo { width:50%; }
#bbar .icon.logo svg { width:60px; }

.bbar { bottom:0; height:60px; width:100%; }
#bbar .shader { background-color:#fff; opacity:.85; }
#bbar .icon { height:60px; width:60px; }
#bbar img { width:40px; padding:10px; }
#bbar .right { position:absolute; display:inline-block;
  right:0;top:0; height:100%; }


#preview { z-index:0; }
  </style>