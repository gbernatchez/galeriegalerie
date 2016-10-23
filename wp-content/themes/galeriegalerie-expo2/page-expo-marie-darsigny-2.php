<?php 
/*
* Template name: Exposition Marie Darsigny - Page 2
*/
?>
<!DOCTYPE HTML>
<html>
<head>
  <title>les ongles</title>
  <link rel='shortcut icon'
     type='image/x-icon' href='data:image/x-icon;,'
    >

    <link rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/css/marie.css'>
    <?php 
    wp_enqueue_script('jquery');
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
</head>
<body class=''
  > <div id="zone-menu">
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

    <div class='bbar shades' id='bbar'>
      <div class='bbar shader' id='shader'></div>
      <div class='bbar'>
        <a href='http://newhive.com/mmmarie/les-ongles' class='icon logo hover bw'
          title='view in NewHive'
          target='_new'><svg viewBox='0 0 1000 1000'
  version='1.1' xmlns='http://www.w3.org/2000/svg'>
<g transform='translate(500, 208)'>
  <path fill='#f42308' d='M-97,42 A56,42,0,0,1,-97,-42 H97 A56,42,0,0,1,97,42 z'/>
</g>
<g transform='translate(500, 325)'>
  <path fill='#f75d08' d='M-208,42 A56,42,0,0,1,-208,-42 H208 A56,42,0,0,1,208,42 z'/>
</g>
<g transform='translate(500, 442)'>
  <path fill='#ea902f' d='M-319,42 A56,42,0,0,1,-319,-42 H319 A56,42,0,0,1,319,42 z'/>
</g>
<g transform='translate(500, 558)'>
  <path fill='#96aa04' d='M-319,42 A56,42,0,0,1,-319,-42 H319 A56,42,0,0,1,319,42 z'/>
</g>
<g transform='translate(500, 675)'>
  <path fill='#577f79' d='M-208,42 A56,42,0,0,1,-208,-42 H208 A56,42,0,0,1,208,42 z'/>
</g>
<g transform='translate(500, 792)'>
  <path fill='#698394' d='M-97,42 A56,42,0,0,1,-97,-42 H97 A56,42,0,0,1,97,42 z'/>
</g>
</svg></a>
        <div class='right'
          ><a id='full' class='icon hover bw' title='full screen'
            ><svg viewBox='-93 -93 507 507'
  version='1.1' xmlns='http://www.w3.org/2000/svg'>
<!-- 320x320 -->
<g>
    <path fill='#000' d='M15,0 H110 A15,15 0 0 1 110,30 H30 V110
        A15,15 0 0 1 0,110 V15 A15,15 0 0 1 15,0'/>
    <g fill='#000' transform='rotate(45 15,15)'>
        <path d='M15,0 H160 A15,15,0,0,1,160,30 H15 z'/>
    </g>
</g>
<g transform='rotate(90 160 160)'>
    <path fill='#000' d='M15,0 H110 A15,15 0 0 1 110,30 H30 V110
        A15,15 0 0 1 0,110 V15 A15,15 0 0 1 15,0'/>
    <g transform='rotate(45 15,15)'>
        <path fill='#000' d='M15,0 H160 A15,15,0,0,1,160,30 H15 z'/>
    </g>
</g>
<g transform='rotate(180 160 160)'>
    <path fill='#000' d='M15,0 H110 A15,15 0 0 1 110,30 H30 V110
        A15,15 0 0 1 0,110 V15 A15,15 0 0 1 15,0'/>
    <g transform='rotate(45 15,15)'>
        <path fill='#000' d='M15,0 H160 A15,15,0,0,1,160,30 H15 z'/>
    </g>
</g>
<g transform='rotate(-90 160 160)'>
    <path fill='#000' d='M15,0 H110 A15,15 0 0 1 110,30 H30 V110
        A15,15 0 0 1 0,110 V15 A15,15 0 0 1 15,0'/>
    <g transform='rotate(45 15,15)'>
        <path fill='#000' d='M15,0 H160 A15,15,0,0,1,160,30 H15 z'/>
    </g>
</g>
</svg></a
          ><a id='pause'
            class='icon hover bw'
            title='stop content'><svg viewBox='-31 -27 141 145'
  version='1.1' xmlns='http://www.w3.org/2000/svg'>
<!-- 80x92 -->
<g transform='translate(16,46)'>
  <path fill='#000' d='M-16,-30 V30 A10,10,0,0,0,16,30 L16,-30 A10,10,0,0,0,-16,-30'/>
</g>
<g transform='translate(64,46)'>
  <path fill='#000' d='M-16,-30 V30 A10,10,0,0,0,16,30 L16,-30 A10,10,0,0,0,-16,-30'/>
</g>
</svg></a
          ><a href='http://newhive.com/mmmarie/profile/feed' class='icon hover bw'
            title='@mmmarie'
            target='_new'><img
              id='owner' src='//d1v8u1ev1s9e4n.cloudfront.net/55089b07067d7b77838e94c6_70x70'></a></div>
      </div> 
    </div>

      </div>

  <div id='exprs'>
    <iframe id='57fd037e5ccacf7423600f9e' data-src='http://tnh.me/57fd037e5ccacf7423600f9e'
              src='http://tnh.me/57fd037e5ccacf7423600f9e'
        class='expr'
            allowfullscreen></iframe>

    <div id='preview' class='hide'>
      <img src='//d1v8u1ev1s9e4n.cloudfront.net/580797fd2a67e25bf3ab021a' class='snapshot center'>
      <div id='play_btn' class='hover b icon'
        ><svg viewBox='0 0 224 224'
  version='1.1' xmlns='http://www.w3.org/2000/svg'>
<g transform='translate(112, 112)'>
<!--<path fill='#fff' stroke='#000' stroke-width='2'
  d='M-97.5,-101 V101 A11,11,0,0,0,-82,110 L92,9.5
     A11,11,0,0,0,92,-9.5 L-82,-110 A11,11,0,0,0,-97.5,-101'
/>-->
<path fill='#000' stroke='#000' stroke-width='7'
  d='M-100,-100 V100 L86,0 z' stroke-linejoin='round'/>
<path fill='#000' stroke='#fff' stroke-width='5'
  d='M-100,-100 V100 L86,0 z' stroke-linejoin='round'/>
</g>
</svg></span>
    </div>
  </div>
  <script>

var preview = document.getElementById('preview')
   ,frame_el = document.getElementById("57fd037e5ccacf7423600f9e")
   ,cards = []
   ,at_card = false
   ,collection = null
   ,bbar = document.getElementById('bbar')
   ,pause = document.getElementById('pause')
   ,full = document.getElementById('full')
   ,play_btn = document.getElementById('play_btn')
   ,hover_left = document.getElementById('hover_left')
   ,hover_right = document.getElementById('hover_right')
   ,page_left = document.getElementById('page_left')
   ,page_right = document.getElementById('page_right')
   // ,share = document.getElementById('share')
   // ,link = document.getElementById('link')
   // ,link_btn = document.getElementById('link_btn')

function play(){
    preview.classList.add('hide')
    frame_el.setAttribute('src', frame_el.getAttribute('data-src'))
    frame_el.classList.remove('hide')
    bbar.classList.add('shaded')
    pause.classList.remove('hide')
    setTimeout(function(){ bbar.classList.remove('shaded') }, 500)
}
preview.onclick = play
pause.onclick = function(){
    frame_el.classList.add('hide')
    preview.classList.remove('hide')
    pause.classList.add('hide')
    frame_el.setAttribute('src', '');
    ( document.webkitExitFullscreen || document.mozExitFullScreen ||
      document.exitFullscreen ).call(document)
}
preview.onmouseover = function(){
    bbar.classList.add('shaded')
    play_btn.classList.add('hovered')
}
preview.onmouseout = function(){
    bbar.classList.remove('shaded')
    play_btn.classList.remove('hovered')
}
full.onclick = function(){
    var b = document.body;
    ( b.webkitRequestFullscreen || b.mozRequestFullScreen ||
      b.requestFullscreen ).call(b)
    if(Array.prototype.indexOf.call(frame_el.classList, 'hide') != -1) play()
}

function side_hover_over(handle, obj){
    handle.classList.add('hide')
    obj.classList.add('shaded')
    setTimeout(function(){
        handle.classList.remove('hide')
        obj.classList.remove('shaded')
    }, 2000)
}
//hover_left.onmouseover = function(){ side_hover_over(hover_left, page_left) }
//hover_right.onmouseover = function(){ side_hover_over(hover_right, page_right) }

window.onmousewheel = function(){
    document.getElementById('overlays').classList.add('hide')
    setTimeout(function(){
      document.getElementById('overlays').classList.remove('hide')
    }, 2000)
}

  </script>
<div id='dynamic_group'></div></body>
</html>