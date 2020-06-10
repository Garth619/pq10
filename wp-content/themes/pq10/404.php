<?php get_header(); ?>

<div id="internal_main">
	
	<div id="internal_banner_two">
			
		<h1 class='banner_title_two'>Not Found</h1><!-- page_header_two -->
		
		<?php $global_internal_banner_image = get_field( 'global_internal_banner_image','option'); ?>
		<?php $banner_image = get_field( 'banner_image' ); ?>
		
		<?php if($banner_image) : ?>
		
			<img id="internal_hero" src="<?php echo $banner_image['url']; ?>" alt="<?php echo $banner_image['alt']; ?>"/><!-- internal_hero -->
		
		<?php else: ?>
		
			<img id="internal_hero" src="<?php echo $global_internal_banner_image['url']; ?>" alt="<?php echo $global_internal_banner_image['alt']; ?>"/><!-- internal_hero -->
		
		<?php endif;?>
		
	</div><!-- internal_banner_two -->
	
	<div class="page_container">
		
		<div id='not_found_wrapper' class='box_wrapper'>
		
			<span id='error'>Error code: 404</span><!-- error -->

			<span id='not_found_content'>The page you were looking for appears to have been moved, deleted or does not exist. You could go back to where you were or head straight to our home page.</span><!-- not_found_content -->
		
			<div id='not_found_button_wrapper'>
			
				<span class='button_two not_found_button'>Go back</span><!-- button_two -->

				<a class='button_two not_found_button' href="<?php bloginfo('url');?>">Home</a><!-- button_two -->
			
			</div><!-- not_found_button_wrapper -->

		</div><!-- not_found_wrapper -->
		
	</div><!-- page_container -->
	
</div><!-- internal_main -->


<?php get_footer(); ?>