<?php 
/*
* Template name: Exposition Anna Eye
*/
get_header(); ?>

<?php if(have_posts()) while(have_posts()) : the_post(); ?>

<div class="wrapper">
	<div class="videoWrapper">
		<iframe src="https://player.vimeo.com/video/179769939?autoplay=1&loop=1&title=0&byline=0&portrait=0" frameborder="0"></iframe>
	</div>
</div>

<div class="tous">
	<img src="<?php echo get_template_directory_uri(); ?>/images/plante-anna-2.png" class="plante-anna-1" alt="">
	<img src="<?php echo get_template_directory_uri(); ?>/images/plante-anna-1.png" class="plante-anna-2" alt="">
</div>
<?php endwhile; ?>

<?php get_footer(); ?>