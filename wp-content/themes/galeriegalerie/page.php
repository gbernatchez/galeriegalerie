<?php get_header(); ?>

<?php if(have_posts()) while(have_posts) : the_post(); ?>

	<div class="popup visible">

		<div class="content">

			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>

		</div>

		<div class="overlay"></div>

	</div><!-- .popup -->

	<div class="mur gauche"></div>
	<div id="mur-fond"></div>
	<div class="mur droit"></div>
	<div id="sol" class="coin-droit coin-gauche"></div>

<?php endwhile; ?>

<?php get_footer(); ?>
