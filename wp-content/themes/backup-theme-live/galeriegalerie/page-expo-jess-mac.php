<?php 
/*
* Template name: Exposition Jess Mac
*/
get_header(); ?>

<?php if(have_posts()) while(have_posts()) : the_post(); ?>

	<div class="gifs group tous">

		<?php 
		$images = get_field('images');
		if($images) :
			shuffle($images);
			foreach($images as $i) :
				$url = $i['image']; ?>
				<div class="img"><img src="<?php echo $url; ?>"></div>
			<?php endforeach;
		endif; 
		?>

	</div>

<?php endwhile; ?>

<?php get_footer(); ?>