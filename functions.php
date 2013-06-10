<?php

@define( 'PARENT_DIR', get_template_directory() );

require_once (PARENT_DIR . '/shortcodes.php');

add_theme_support( 'woocommerce' );

# Register Sidebars
if ( function_exists('register_sidebar') )
   register_sidebar(array('name' => 'Sidebar','before_widget' => '<div id="%1$s" class="box %2$s">','after_widget' => '</div>',));
   register_sidebar(array('name' => 'HP Testimonials','before_widget' => '<div id="%1$s" class="box %2$s">','after_widget' => '</div>',));
   register_sidebar(array('name' => 'Image Scroll','before_widget' => '<div id="%1$s" class="box %2$s">','after_widget' => '</div>',));
   register_sidebar(array('name' => 'Footer 1','before_widget' => '<div id="%1$s" class="widget-box %2$s">','after_widget' => '</div>',));
   register_sidebar(array('name' => 'Footer 2','before_widget' => '<div id="%1$s" class="widget-box %2$s">','after_widget' => '</div>',));
	
function register_my_menus() {
  register_nav_menus(
    array(
      'topnav' => __( 'Top Menu' ),
      'sidenav' => __( 'Side Menu' ),
      'footnav' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

register_post_type('team', array(
	'label' => 'Team',
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => true,
	'rewrite' => array('slug' => 'team'),
	'query_var' => true,
	'supports' => array('title', 'editor', 'excerpt', 'thumbnail')
	) );

	add_theme_support('post-thumbnails', array( team ) );

# Post Thumbnails
if ( function_exists( 'add_theme_support' ) ) { // Added in 2.9
	add_theme_support( 'post-thumbnails' );
}

# Get Thumbnail URL
function get_image_url(){
	$image_id = get_post_thumbnail_id();
	$image_url = wp_get_attachment_image_src($image_id,'large');
	$image_url = $image_url[0];
	echo $image_url;
	}	

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails', array( 'page' ) );
        set_post_thumbnail_size( 420, 240 );
}

# Displays the comment authors gravatar if available
function dp_gravatar($size=50, $attributes='', $author_email='') {
global $comment, $settings;
if (dp_settings('gravatar')=='enabled') {
if (empty($author_email)) {
ob_start();
comment_author_email();
$author_email = ob_get_clean();
}
$gravatar_url = 'http://www.gravatar.com/avatar/' . md5(strtolower($author_email)) . '?s=' . $size . '&amp;d=' . dp_settings('gravatar_fallback');
?><img src="<?php echo $gravatar_url; ?>" <?php echo $attributes ?>/><?php
}
}

# Puts link in excerpts more tag
function new_excerpt_more($more) {
       global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '">Read More</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

# custom excerpt length  -  p h p   e c h o   e x c e r p t ( 4 5 )
function excerpt($limit) {
      $excerpt = explode(' ', get_the_excerpt(), $limit);
      if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
      } else {
        $excerpt = implode(" ",$excerpt);
      } 
      $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
      return $excerpt;
    }

# Shortcode in widgets
add_filter('widget_text', 'do_shortcode');

# PHP in widgets
add_filter('widget_text','execute_php',100);
function execute_php($html){
     if(strpos($html,"<"."?php")!==false){
          ob_start();
          eval("?".">".$html);
          $html=ob_get_contents();
          ob_end_clean();
     }
     return $html;
}

// Limit Post Title
function shortened_title() {
$original_title = get_the_title();
$title = html_entity_decode($original_title, ENT_QUOTES, "UTF-8");
// Set Limit
$limit = "55";
// Set End Text
$ending="...";
if(strlen($title) >= ($limit+3)) {
$title = substr($title, 0, $limit) . $ending; }
echo $title;
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function wp_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}

remove_filter('term_description','wpautop');

class WPMUDEV_Update_Notifications {}

?>