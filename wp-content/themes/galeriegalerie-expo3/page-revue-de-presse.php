<?php 
/*
* Template name: Revue de presse
*/
get_header(); ?>

<?php if(have_posts()) while(have_posts()) : the_post(); ?>

	<div class="content">

		<h1><?php the_title(); ?></h1>

		<div class="revues entry-content">
			<?php if(get_field('revue_presse')) :
					$revues = get_field('revue_presse');
					foreach($revues as $r) :
						$media = $r['media'];
						$titre = $r['titre'];
						$date = $r['date'];
						$desc = $r['desc']; 
						$lien = $r['lien'];

						$icone = $r['type'];
						if($icone == 'radio') :
							$icone = '<span class="fa fa-podcast"></span>';
						elseif ($icone == 'article') :
							$icone = '<span class="fa fa-newspaper-o"></span>';
						elseif ($icone == 'video') :
							$icone = '<span class="fa fa-video-camera"></span>';
						endif; 
						?>

							<a target="_blank" title="<?php echo $titre; ?>" href="<?php echo $lien; ?>">
								<h2><?php echo $icone; ?><?php echo $media; ?><span class="date"> - <?php echo $date; ?></span></h2>
								<h3><?php echo $titre; ?></h3>
								<p><?php echo $desc; ?></p>
							</a>


					<?php endforeach; ?>

			<?php endif; ?>
		</div>

	</div>

<?php endwhile; ?>

<?php get_footer(); ?>
