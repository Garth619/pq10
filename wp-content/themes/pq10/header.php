<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


<style>
	
	<?php if(get_field('fonts','option')): ?>
	 
		<?php while(has_sub_field('fonts','option')): ?>
	 
			@import url(<?php the_sub_field( 'font_url' ); ?>);
	    
		<?php endwhile; ?>
	 
	<?php endif; ?>



<?php the_field( 'review_css','option'); ?>

</style>

<?php wp_head(); ?>

<?php the_field('schema_code', 'option'); ?>

<?php the_field('analytics_code', 'option'); ?>

</head>

<body <?php body_class(); ?>>

<header>

<div id='header_left'>

	<a class='logo' href='<?php bloginfo('url');?>'>
	
			<?php echo file_get_contents( get_template_directory() . '/images/hilley/logo.svg' ) ?>
	
	</a><!-- logo -->

</div><!-- header_left -->

<div id='header_middle'>

	<div class='menu_wrapper'>
	
		<div class='menu_bars'>
		
			<span></span>
			<span></span>
			<span></span>
		
		</div><!-- menu_bars -->

		<span class="menu_verbiage">Menu</span><!-- menu_verbiage -->

		<div class='menu_close'>
		
			<div class='menu_close_x'>
			
				<span></span>
			
			</div><!-- menu_close_x -->

			<span class="menu_verbiage">Menu</span><!-- menu_verbiage -->
		
		</div><!-- menu_close -->
	
	</div><!-- menu_wrapper -->

</div><!-- header_middle -->

<div id='header_right'>

<div id='header_right_inner'>
	
	<div class='consult_cta'>
	
		<span class='consult_verbiage'>Free Consultation</span><!-- consult_verbiage -->

		<span class='consult_verbiage'>Hablamos Español</span><!-- consult_verbiage -->
	
	</div><!-- consult_cta -->

	<a id='header_phone' href='tel:4042336200'>(404) 233-6200</a><!-- header_phone -->

	</div><!-- header_right_inner -->

	<nav id="top_nav"><?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'main_menu' ) ); ?></nav>

</div><!-- header_right -->

</header>
	


