<?php get_header(); ?>

<?php if(have_posts()) while(have_posts()) : the_post(); ?>

	<div class="feuille">

		<div class="top">
			
			<div class="coin"></div>
			<div class="gauche"></div>

		</div>

		<div class="bottom">

			<div class="entry-content">
			
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>

			</div>

		</div>
	</div>

<?php endwhile; ?>

<?php get_footer(); ?>
