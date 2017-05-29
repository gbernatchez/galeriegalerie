<?php 
/*
* Template name: Accueil
*/
get_header(); ?>

<div id="accueil">

	<header class="tous">
		<div class="intro"><?php pll_e("Bienvenue à l'espace de diffusion en ligne"); ?></div>
		<h1 class="visuallyhidden"><?php echo get_option('blogname'); ?></h1>
		<img alt="" class="logo-bleu" src="<?php echo get_template_directory_uri(); ?>/images/galeriegalerie_bleugros.gif">
	</header>

	<div class="group">
	
		<div class="entre">
			<a href="<?php echo get_permalink(7); ?>" title="Entre !">
				<img alt="" class="matisse" src="<?php echo get_template_directory_uri(); ?>/images/Matisse_01.gif">
				<div class="gros-entre"></div>
			</a>
		</div>

		<div class="content">
			
			<div id="mc_embed_signup">

				<img alt="" class="abonne-toi" src="<?php echo get_template_directory_uri(); ?>/images/ban_abonnement.gif">

				<form action="//online.us11.list-manage.com/subscribe/post?u=7db3addfbdf5cebea08e1f4d2&amp;id=2dd06301ba" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					<div class="group" id="mc_embed_signup_scroll">
						<div class="group">
							<label class="visuallyhidden" for="mce-EMAIL"><?php pll_e("Courriel"); ?></label>
							<div class="ze-email">
								<input autofocus type="email" placeholder="" value="" name="EMAIL" class="required email" id="mce-EMAIL">
							</div>
							<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_7db3addfbdf5cebea08e1f4d2_2dd06301ba" tabindex="-1" value=""></div>
							<div class="blink-radient ze-submit">
								<input type="submit" value="<?php pll_e("M'abonner"); ?>" name="subscribe" id="mc-embedded-subscribe">
							</div>
						</div>

						<div id="mce-responses">
							<div class="response" id="mce-error-response" style="display:none"></div>
							<div class="response" id="mce-success-response" style="display:none"></div>
						</div>
					</div>
				</form>
			</div>
			<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>

			<a class="bt-soutenir blink-radient" href="http://www.galeriegalerieweb.com/soutenir/" title="Soutenir le projet">
				<div>❤ <?php pll_e("Comment nous soutenir ?"); ?> ❤</div>
			</a>

		</div>

	</div>

</div>

<?php get_footer(); ?>
