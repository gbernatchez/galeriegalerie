<?php 
/*
* Template name: Archive single
*/
get_header(); ?>

<?php if(have_posts()) while(have_posts()) : the_post(); ?>

	<div class="content">

		<h1><?php the_title(); ?></h1>

		<?php if(get_field('desc')) : ?>
			<div class="desc">
				<?php the_field('desc'); ?>
			</div>
		<?php endif; ?>

		<div class="entry-content">
			<?php the_content(); ?>
		</div>
		
	</div>

<?php endwhile; ?>

<?php get_footer(); ?>
