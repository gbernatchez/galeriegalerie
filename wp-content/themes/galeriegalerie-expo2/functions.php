<?php
/*
 * Functions for the site
 */
require_once( get_template_directory() . '/libs/custom-ajax-auth.php' );
show_admin_bar(false);
add_action( 'after_theme_setup', 'setup' );
function setup() {
	
}

if(is_admin()){
    //if(!current_user_can('administrator')) {
        remove_action( 'admin_color_scheme_picker', 'admin_color_scheme_picker' );
        add_action( 'personal_options', 'prefix_hide_personal_options' );
    //}
}
function prefix_hide_personal_options() {
?>
<script type="text/javascript">
jQuery('#wpwrap').css('opacity', 0);
  jQuery(document).ready(function( $ ){
    jQuery("#adminmenumain").hide();
    jQuery('#wpcontent, #wpfooter').css('margin-left', 0);
    jQuery("#your-profile .user-url-wrap").hide();
    jQuery("#your-profile .user-description-wrap").hide();
    jQuery("#your-profile .show-admin-bar").hide();
    jQuery("#screen-meta-links").hide();
    jQuery('#user-profile-picture .desciption').hide();
    jQuery("#wp-admin-bar-wp-logo").hide();
    jQuery('#your-profile .user-sessions-wrap').hide();
    jQuery('#avatar-manager tbody tr:first').hide();
    jQuery("#wpfooter").hide();
    jQuery("#wpwrap").css('opacity', 1);
  });
</script>
<?php
}

add_action( 'init', 'init' );
function init() {
	register_nav_menus( array( 'navigation' => 'Navigation' ) );
	add_theme_support( 'post-thumbnails' );

	register_sidebar( array(
		'name' => __( 'Sidebar', THEME_NAME ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	/* Exemple création post type */

	/*$labelsEvent = array(
        'name' => _x('Événements', 'post type general name', 'Pauvreté'),
        'singular_name' => _x('Événement', 'post type singular name', 'Pauvreté'),
        'add_new' => _x('Ajouter un événement', 'evenements'),
        'add_new_item' => __('Ajouter un événement'),
        'edit_item' => __('Modifier l\'événement'),
        'new_item' => __('Nouvel événement'),
        'all_items' => __('Tous les événement'),
        'view_item' => __('Voir l\'événement'),
        'search_items' => __('Chercher un événement'),
        'not_found' =>  __('Aucun événement trouvé'),
        'not_found_in_trash' => __('Rien de trouvé dans la corbeille'),
        'parent_item_colon' => '',
        'menu_name' => 'Événements'
    );
    
    $argEvent = array(
        'labels' => $labelsEvent,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => _x('evenements', 'URL slug', 'Pauvreté')),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => true,
        'menu_position' => 20,
        'menu_icon' => 'dashicons-calendar-alt',
        'supports' => array('title', 'thumbnail', 'editor', 'revisions', 'page-attributes')
    );

    register_post_type('evenements', $argEvent);

    register_taxonomy(
        'categorie-evenement',
        'evenements',
        array(
            'label' => __( 'Catégories' ),
            'hierarchical' => true,
        )
    ); */

}

function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/Matisse_01.gif);
            padding-bottom: 30px;
            height: 104px;
            width: 160px;
            background-size: 160px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );


