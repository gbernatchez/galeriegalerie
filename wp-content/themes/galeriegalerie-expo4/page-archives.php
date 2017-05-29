<?php 
/*
* Template name: Archives
*/
get_header(); ?>

<?php if(have_posts()) while(have_posts()) : the_post(); ?>

	<div class="content">

		<h1><?php the_title(); ?></h1>

		<ul class="dossiers group">

		<?php

		$idRevuePresse = 913;
		$revuePresse = get_page(913); if($revuePresse) : ?>

		<li><a title="<?php echo get_the_title($revuePresse->ID); ?>" href="<?php echo get_permalink($revuePresse->ID); ?>" class="dossier group">
			<img src="<?php echo get_template_directory_uri(); ?>/images/dossier.png" alt="">
			<h2><?php echo get_the_title($revuePresse->ID); ?></h2>
		</a></li> <?php

		
		endif;
		// Set up the objects needed
		$id = get_the_ID();
		$archives = get_pages(array(
			'sort_order' => 'desc',
			'sort_column' => 'post_date',
			'child_of' => $id,
			'post_type' => 'page',
			'post_status' => 'publish',
			'exclude' => 913
		));
		
		foreach($archives as $p) : ?>

			<li><a title="<?php echo get_the_title($p->ID); ?>" href="<?php echo get_permalink($p->ID); ?>" class="dossier group">
				<img src="<?php echo get_template_directory_uri(); ?>/images/dossier.png" alt="">
				<h2><?php echo get_the_title($p->ID); ?></h2>
				<span class="date"><?php echo get_the_date('j F Y' ,$p->ID); ?></span>
			</a></li>

		<?php endforeach; ?>

		</ul>
		
	</div>

<?php endwhile; ?>

<?php get_footer(); ?>
