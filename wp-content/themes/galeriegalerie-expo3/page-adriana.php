<?php 
/*
* Template name: Adriana Smith
*/
get_header(); ?>

<?php if(have_posts()) while(have_posts()) : the_post(); ?>

<div class="wrapper">
	<div class="videoWrapper">
		<iframe src="https://player.vimeo.com/video/199476306?autoplay=1&loop=1&title=0&byline=0&portrait=0" frameborder="0"></iframe>
	</div>
</div>

<?php endwhile; ?>

<?php get_footer(); ?>
