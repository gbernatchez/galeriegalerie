
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/chatroom.css">

<a href="#" class="bt-chatroom"><span>Ouvrir le chat roume</span></a>

<div id="zone-chatroom">

	<div class="content entry-content">

		<div class="login-zone">

			<?php if (is_user_logged_in()) { ?>
				<a class="logout" href="<?php echo wp_logout_url( get_permalink() ); ?>">Déconnexion</a>
				<a target="_blank" class="edit-profil" href="<?php echo get_edit_user_link(); ?>">Modifier mon profil</a>
			<?php } else { get_template_part('ajax', 'auth'); ?>            	
				<p>Tu veux te joindre au chat ? <a onClick="" class="login_button" id="show_login" href="#">Connecte toi</a> ou 
				<a onClick="" class="login_button" id="show_signup" href="#">inscris toi</a> ! Tu vas voir, c'est facile ;)</p>
			<?php } ?>

		</div>

		<div class="form-chat">
		  
			<form id="login" class="ajax-auth group" action="login" method="post">
				<a class="close-login" href="">x</a>
	   			<h2>Connexion</h2>
	    		<p class="status"></p>  
	   			<?php wp_nonce_field('ajax-login-nonce', 'security'); ?>  
				<p>
					<label for="username">Username</label>
					<input id="username" type="text" class="required" name="username">
				</p>
				<p>
					<label for="password">Mot de passe</label>
					<input id="password" type="password" class="required" name="password">
				</p>
				<p class="button">
	    			<input class="submit_button" type="submit" value="Connexion">
	    		</p>
	    		<p style="text-align:center">
	    			<a target="_blank" class="text-link" href="<?php echo wp_lostpassword_url(); ?>">Mot de passe oublié ?</a>
				</p>
			</form>
	 
			<form id="register" class="ajax-auth group"  action="register" method="post">
				<a class="close-login" href="">x</a>
			    <h2>Création de compte</h2>
			    <p class="status"></p>
			    <?php wp_nonce_field('ajax-register-nonce', 'signonsecurity'); ?>         
			    <p>
			    	<label for="signonname">Username</label>
			    	<input id="signonname" type="text" name="signonname" class="required">
			   	</p>
			   	<p>
			    	<label for="email">Courriel</label>
			    	<input id="email" type="text" class="required email" name="email">
			    </p>
			    <p>
			    	<label for="signonpassword">Mot de passe</label>
			    	<input id="signonpassword" type="password" class="required" name="signonpassword" >
			    </p>
			    <p>
			    	<label for="password2">Confirmer le mot de passe</label>
			    	<input type="password" id="password2" class="required" name="password2">
			    </p>
			    <p class="button">
			    	<input class="submit_button" type="submit" value="Créer mon compte">   
				</p>
			</form>

		</div>

		<?php echo do_shortcode('[wise-chat theme="lightgray" show_users_counter="1" show_user_name="1" allow_post_links="1" allow_post_images="1" enable_images_uploader="1" enable_twitter_hashtags="1" show_message_submit_button="1" allow_change_user_name="1" emoticons_enabled="4" window_title="Expo Collective" enable_attachments_uploader="0" messages_time_mode="elapsed" enable_youtube="1" allow_change_text_color="0"]'); ?>

	</div><!-- .menu-content -->

</div><!-- #zone-chatroom -->