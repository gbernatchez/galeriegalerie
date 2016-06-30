<?php 
/*
* Template name: Finder
*/
get_header(); ?>

<?php if(have_posts()) while(have_posts()) : the_post(); ?>

	<div class="content">

		<h1><?php the_title(); ?></h1>

		<div class="dossiers">
			
			<a href="#" class="dossier">
				<img src="<?php echo get_template_directory_uri(); ?>/images/dossier.png">
				<h2>Dossier de presse</h2>
			</a>

		</div>

	</div>

<?php endwhile; ?>

<?php get_footer(); ?>
