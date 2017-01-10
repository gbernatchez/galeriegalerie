<?php 
/*
* Template name: Exposition Roby Provost-Blanchard
*/
get_header(); ?>

<?php if(have_posts()) while(have_posts()) : the_post(); ?>

<iframe class="fullsize" src="http://lerabot.neocities.org/carte.html"></iframe>

<?php endwhile; ?>

<?php get_footer(); ?>