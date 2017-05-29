<?php 
/*
* Template name: 3D Room
*/
get_header(); 
wp_enqueue_script('rotate-box', get_template_directory_uri() . '/js/rotate-box.js', 'jquery', '', true);
?>

<style type="text/css">

#show-buttons {
	position: absolute;
	top: 0;
	left: 100px;
	z-index: 9999;

}

.container {
  width: 2em;
  height: 2em;
  position: relative;
  perspective: 1em;
  font-size: 2000%;
  text-align: center;
}

#cube {
  width: 100%;
  height: 100%;
  position: absolute;
  transform-style: preserve-3d;
}

#cube figure {
  margin: 0;
  width: 2em;
  height: 2em;
  display: block;
  position: absolute;
}

#cube .front  { transform: rotateY(   0deg ); }
#cube .back   { transform: rotateX( 180deg ); }
#cube .right  { transform: rotateY(  90deg ); }
#cube .left   { transform: rotateY( -90deg ); }
#cube .top    { transform: rotateX(  90deg ); }
#cube .bottom { transform: rotateX( -90deg ); }

#cube .front  { transform: rotateY(   0deg ) translateZ( 1em ); }
#cube .back   { transform: rotateX( 180deg ) translateZ( 1em ); }
#cube .right  { transform: rotateY(  90deg ) translateZ( 1em ); }
#cube .left   { transform: rotateY( -90deg ) translateZ( 1em ); }
#cube .top    { transform: rotateX(  90deg ) translateZ( 1em ); }
#cube .bottom { transform: rotateX( -90deg ) translateZ( 1em ); }

#cube.show-front  { transform: translateZ( -1em ) rotateY(    0deg ); }
#cube.show-back   { transform: translateZ( -1em ) rotateX( -180deg ); }
#cube.show-right  { transform: translateZ( -1em ) rotateY(  -90deg ); }
#cube.show-left   { transform: translateZ( -1em ) rotateY(   90deg ); }
#cube.show-top    { transform: translateZ( -1em ) rotateX(  -90deg ); }
#cube.show-bottom { transform: translateZ( -1em ) rotateX(   90deg ); }

#cube { transition: transform 1s; }

	#cube.panels-backface-invisible figure {
		-webkit-backface-visibility: hidden;
		-moz-backface-visibility: hidden;
		-o-backface-visibility: hidden;
		backface-visibility: hidden;
	}

	
    #cube .front  { background: hsla( 000, 100%, 50%, 0.7 ); }
    #cube .back   { background: hsla( 160, 100%, 50%, 0.7 ); }
    #cube .right  { background: hsla( 120, 100%, 50%, 0.7 ); }
    #cube .left   { background: hsla( 180, 100%, 50%, 0.7 ); }
    #cube .top    { background: hsla( 240, 100%, 50%, 0.7 ); }
    #cube .bottom { background: hsla( 300, 100%, 50%, 0.7 ); }

   

</style>

  <section class="container">
    <div id="cube" class="show-front">
      <figure class="front">1</figure>
      <figure class="back">2</figure>
      <figure class="right">3</figure>
      <figure class="left">4</figure>
      <figure class="top">5</figure>
      <figure class="bottom">6</figure>
    </div>
  </section>

    <section id="options">

    <p id="show-buttons">
      <button class="show-front">Show 1</button>
      <button class="show-back">Show 2</button>
      <button class="show-right">Show 3</button>
      <button class="show-left">Show 4</button>
      <?php /* ?> <button class="show-top">Show 5</button>
      <button class="show-bottom">Show 6</button><?php */ ?>
    </p>

  </section>

<?php get_footer(); ?>
