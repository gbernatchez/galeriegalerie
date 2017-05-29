<?php 
/*
* Template name: Alban Loosli
*/
get_header(); 
wp_enqueue_script('jquery-ui-draggable');
wp_enqueue_script('touch', get_template_directory_uri() . '/js/touch.js');
?>

<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery( ".zone img" ).draggable();

		var index = 5;
		jQuery('.zone img').dblclick(function(){
			jQuery(this).css('z-index', index);
			index++;
		});

	});
</script>

<?php if(have_posts()) while(have_posts()) : the_post(); ?>

	<div class="zone">
		<img src="<?php echo get_template_directory_uri(); ?>/b34u-d355in/alban-loosli/1_dessinNUM_PNG.png">
		<img src="<?php echo get_template_directory_uri(); ?>/b34u-d355in/alban-loosli/2_dessinNUM_PNG.png">
		<img src="<?php echo get_template_directory_uri(); ?>/b34u-d355in/alban-loosli/3_dessinNUM_PNG.png">
	</div>

<?php endwhile; ?>

<?php get_footer(); ?>
