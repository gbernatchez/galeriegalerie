<?php 
/*
* Template name: Entrée Chatroom
*/
get_header(); ?>

<div id="zone-chatroom">
	<div class="overlay"></div>

	<?php /* ?><a href="#" title="Chatroom" class="bt-chatroom">Chatroom</a><?php */ ?>

	<div class="content entry-content">

		<?php if (is_user_logged_in()) { ?>
			<a href="<?php echo wp_logout_url( get_permalink() ); ?>">Logout</a>

			<?php /* ?><iframe class="chatroom" src="http://www.galeriegalerieweb.gabi.com/chat-room/party/"></iframe><?php */ ?>
			<?php echo do_shortcode('[wise-chat theme="lightgray" show_users_counter="1" show_user_name="1" allow_post_links="1" allow_post_images="1" enable_images_uploader="1" enable_twitter_hashtags="1" show_message_submit_button="1" allow_change_user_name="1" emoticons_enabled="4" window_title="Expo Collective" enable_attachments_uploader="0" messages_time_mode="elapsed" enable_youtube="1" allow_change_text_color="1"]'); ?>

		<?php } else { get_template_part('ajax', 'auth'); ?>            	
			<a class="login_button" id="show_login" href="">Login</a>
			<a class="login_button" id="show_signup" href="">Signup</a>
		<?php } ?>
		  
		<form id="login" class="ajax-auth group" action="login" method="post">
   			<h1>Login</h1>
    		<p class="status"></p>  
   			<?php wp_nonce_field('ajax-login-nonce', 'security'); ?>  
			<label for="username">Username</label>
			<input id="username" type="text" class="required" name="username">
			<label for="password">Password</label>
			<input id="password" type="password" class="required" name="password">
			<a class="text-link" href="<?php echo wp_lostpassword_url(); ?>">Lost password?</a>
    		<input class="submit_button" type="submit" value="LOGIN"> 
		</form>
 
		<form id="register" class="ajax-auth group"  action="register" method="post">
		    <h1>Signup</h1>
		    <p class="status"></p>
		    <?php wp_nonce_field('ajax-register-nonce', 'signonsecurity'); ?>         
		    <label for="signonname">Username</label>
		    <input id="signonname" type="text" name="signonname" class="required">
		    <label for="email">Email</label>
		    <input id="email" type="text" class="required email" name="email">
		    <label for="signonpassword">Password</label>
		    <input id="signonpassword" type="password" class="required" name="signonpassword" >
		    <label for="password2">Confirm Password</label>
		    <input type="password" id="password2" class="required" name="password2">
		    <input class="submit_button" type="submit" value="SIGNUP">   
		</form>

	</div><!-- .menu-content -->

</div><!-- #zone-chatroom -->

<div class="mur gauche sorti">
	<img alt="" class="titre-porte" src="<?php echo get_template_directory_uri(); ?>/images/archives_flechecorriige.png">
	<a title="<?php echo get_the_title(11); ?>" href="<?php echo get_permalink(11); ?>"></a>
</div>

<div class="tous">
	<div class="objet fontaine">
		<img src="<?php echo get_template_directory_uri(); ?>/images/fontaine-deco.gif" alt="">
	</div>
</div>


<div id="mur-fond">

	<div class="tous">

		<h1 class="visuallyhidden">Exposition Collective</h1>

		<div class="inntro">
			♡☆ Exposition à venir, fin octobre 2016 ☆♡
		</div>

		<div class="objet enseigne">
			<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/enseigne.png">
		</div>

		<div class="objet danger danger1">
			<img src="<?php echo get_template_directory_uri(); ?>/images/danger.png" alt="">
		</div>

		<div class="objet danger danger2">
			<img src="<?php echo get_template_directory_uri(); ?>/images/danger.png" alt="">
		</div>

		<div id="porte1" class="objet porte click">
			<img src="<?php echo get_template_directory_uri(); ?>/images/porte1.jpg" alt="">
		</div>

		<div id="porte2" class="objet porte click">
			<img src="<?php echo get_template_directory_uri(); ?>/images/porte2.jpg" alt="">
		</div>

		<div id="porte3" class="objet porte click">
			<img src="<?php echo get_template_directory_uri(); ?>/images/porte3.jpg" alt="">
		</div>

	</div>

</div><!-- #mur-fond -->

<div class="mur droit sorti">
	<img alt="" class="archive titre-porte" src="<?php echo get_template_directory_uri(); ?>/images/archives_fleche.png">
	<a title="<?php echo get_the_title(9); ?>" href="<?php echo get_permalink(9); ?>"></a>
</div>

<div id="sol" class="coin-gauche coin-droit">

	<div class="tous">

		<div class="objet cone cone1">
			<img src="<?php echo get_template_directory_uri(); ?>/images/cone.png" alt="">
		</div>

		<div class="objet cone cone2">
			<img src="<?php echo get_template_directory_uri(); ?>/images/cone.png" alt="">
		</div>

		<div class="objet cone cone3">
			<img src="<?php echo get_template_directory_uri(); ?>/images/cone.png" alt="">
		</div>

		<div class="objet plante">
			<img src="<?php echo get_template_directory_uri(); ?>/images/plante.png" alt="">
		</div>

		<div class="objet chaise">
			<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/chaise.png">
		</div>

		<?php if(get_field('pamphlet')) : ?>

			<a href="<?php the_field('pamphlet'); ?>" target="_blank" title="Visionner le pamphlet" class="objet pamphlet click">
				<img src="<?php echo get_template_directory_uri(); ?>/images/expo_encours_02.gif" alt="">
			</a>

		<?php endif; ?>

		<a href="#" title="Fermer la radio" class="objet radio click">
			<img src="<?php echo get_template_directory_uri(); ?>/images/radio.gif" alt="">
		</a>

		<div class="objet table">
			<img src="<?php echo get_template_directory_uri(); ?>/images/table.png" alt="">
		</div>

		<div class="objet baraeau">
			<img src="<?php echo get_template_directory_uri(); ?>/images/baraeau.png" alt="">
		</div>

	</div>

</div><!-- #sol -->

<?php get_footer(); ?>
