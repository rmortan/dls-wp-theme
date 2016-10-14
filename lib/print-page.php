<?php 

/**
* Template Name: Print Template
*/

add_action('genesis_loop', 'print_loop');

function print_loop(){


	/* START - Print Page Sections */
	$print_args = array(
		'post_type'  => 'print_page_sections',
		'orderby'=> 'menu_order',
		'order', 'ASC',
	);

	$printsections = new WP_Query($print_args);
	if(($printsections -> have_posts()) && (is_page( 18 ))) {
		while($printsections -> have_posts()): $printsections ->the_post();
		
			$description = get_field('description');
			$downloadLink = get_field('download_link');
			$downloadCTA = "Download!";

			get_template_part( '/includes/dls_cpt' );

		endwhile;
	}
	/* END - Print Page Sections */

	/* START - Print Elements */
	$elements_args = array(
		'post_type'  => 'print_elements',
		'orderby'=> 'menu_order',
		'order', 'ASC',
	);

	$printelements = new WP_Query($elements_args);
	if(($printelements -> have_posts()) && (is_page( 8 ))) {
		while($printelements -> have_posts()): $printelements ->the_post();
		
			$description = get_field('description');
			$downloadLink = get_field('download_link');
			$downloadCTA = "Download!";

			get_template_part( '/includes/dls_cpt' );

		endwhile;
	}
	/* END - Print Elements */

	/* START - Print Layouts */
	$layouts_args = array(
		'post_type'  => 'print_layouts',
		'orderby'=> 'menu_order',
		'order', 'ASC',
	);

	$printlayouts = new WP_Query($layouts_args);
	if(($printlayouts -> have_posts()) && (is_page( 13 ))) {
		while($printlayouts -> have_posts()): $printlayouts ->the_post();

			$description = get_field('description');
			$downloadLink = get_field('download_link');
			$downloadCTA = "Download!";

			get_template_part( '/includes/dls_cpt' );

		endwhile;
	}
	/* END - Print Layouts */

	/* START - Print Co-Branding */
	$cobranding_args = array(
		'post_type'  => 'print_cobrands',
		'orderby'=> 'menu_order',
		'order', 'ASC',
	);

	$printcobrands = new WP_Query($cobranding_args);
	if(($printcobrands -> have_posts()) && (is_page( 11 ))) {
		while($printcobrands -> have_posts()): $printcobrands ->the_post();

			$description = get_field('description');
			$downloadLink = get_field('download_link');
			$downloadCTA = "Download!";

			get_template_part( '/includes/dls_cpt' );

		endwhile;
	}
	/* END - Print Co-Branding */

	/* START - Print Applications */
	$applications_args = array(
		'post_type'  => 'print_applications',
		'orderby'=> 'menu_order',
		'order', 'ASC',
	);

	$printapplications = new WP_Query($applications_args);
	if(($printapplications -> have_posts()) && (is_page( 120 ))) {
		while($printapplications -> have_posts()): $printapplications ->the_post();

			$description = get_field('description');
			$downloadLink = get_field('download_link');
			$downloadCTA = "Download!";

			get_template_part( '/includes/dls_cpt' );

		endwhile;
	}
	/* END - Print Applications */
}

// remove Primary Sidebar from the Primary Sidebar area
remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );

// Print custom menu
add_action( 'genesis_after_header', 'dls_print_menu' );
function dls_print_menu() {
    genesis_widget_area( 'print-menu', array(
		'before' => '<div class="dls-menu print-menu second-level-menu widget-area"><div class="wrap">',
		'after'  => '</div></div>', 
	) );
}

// Print custom sidebar
add_action( 'genesis_after_content', 'dls_print_sidebar' );
function dls_print_sidebar() {
    genesis_widget_area( 'print-sidebar', array(
		'before' => '<aside class="dls-sidebar print-sidebar sidebar sidebar-primary widget-area"><div class="wrap">',
		'after'  => '</div></aside>', 
	) );
}

genesis();