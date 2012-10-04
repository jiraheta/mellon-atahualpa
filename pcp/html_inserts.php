<link rel="stylesheet" href="http://kaymmm.github.com/mellon-atahualpa/includes/mellon.css"  type="text/css" media="all">
<link rel="stylesheet" href="http://kaymmm.github.com/mellon-atahualpa/pcp/css/pcp.css"  type="text/css" media="all">
<?php	
wp_deregister_script( 'jquery' );
wp_deregister_script( 'jquery-ui' );
wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js', array(), null, false );
wp_register_script( 'jquery.ui', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js', array('jquery'), null, false );
wp_enqueue_script('jquery.ui');
wp_register_script( 'jquery.masonry', 'http://desandro.github.com/masonry/jquery.masonry.min.js', array('jquery'), null, false );        
wp_register_script( 'jquery.imagesloaded', 'http://desandro.github.com/imagesloaded/jquery.imagesloaded.min.js', array( 'jquery' ),null,false ); 
wp_register_script( 'scaleimage', 'http://kaymmm.github.com/mellon-atahualpa/includes/scaleimage.min.js', array(),null,false ); 
wp_register_script( 'resizeimages', 'http://kaymmm.github.com/mellon-atahualpa/pcp/js/resize.min.js', array('jquery','jquery.masonry','jquery.imagesloaded','scaleimage'),null,false ); 
wp_enqueue_script('resizeimages');
if (is_front_page()) {
	wp_register_script( 'jquery.cycle', 'http://kaymmm.github.com/mellon-atahualpa/includes/jquery.cycle.all.min.js', array( 'jquery' ),null,false ); 
	wp_register_script( 'slider', 'http://kaymmm.github.com/mellon-atahualpa/pcp/js/slider.min.js', array('jquery','jquery.cycle','jquery.imagesloaded','scaleimage'),null,false ); 
	wp_enqueue_script('slider');
} 
if (!is_singular()) {
	global $wp_query;
	$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
	$args = array('post_type' => array('post','event'),'scope' => 'all','paged' => $paged,'order' => 'DESC', 'orderby' => 'start_date');
	$args = array_merge($wp_query->query,$args);
	$wp_query = new WP_Query($args);
}
?>
