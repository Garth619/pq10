<?php get_header(); ?>


<div id="internal_main">
	
	<div id="internal_banner">
		
		<div id="internal_banner_content">
			
		<?php if (have_posts())the_post();?>

		<h1 class="banner_title"><?php if ( is_day() ) : ?>
	
	<?php printf( __( '<span>%s</span>', 'twentyten' ), get_the_date() ); ?>
		
		<?php elseif ( is_month() ) : ?>
	
	<?php printf( __( '<span>%s</span>', 'twentyten' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'twentyten' ) ) ); ?>
		
		<?php elseif ( is_year() ) : ?>
	<?php printf( __( '<span>%s</span>', 'twentyten' ), get_the_date( _x( 'Y', 'yearly archives date format', 'twentyten' ) ) ); ?>
	
	<?php else : ?>
	
	<?php _e( 'Blog Archives', 'twentyten' ); ?>
	
	<?php endif; ?></h1><!-- banner_title -->

<?php rewind_posts(); ?>
			
			<?php if(get_field('turn_off_button') == "Yes") : ?>
			
			<?php else: ?>
			
				<a class="button internal_button" href="#consultation">
				
					<span><?php the_field( 'global_internal_banner_button_verbiage','option'); ?></span>
			
				</a>
			
			<?php endif;?>
			
		</div><!-- internal_banner_content -->
		
		<?php $global_internal_banner_image = get_field( 'global_internal_banner_image','option'); ?>
		<?php $banner_image = get_field( 'banner_image' ); ?>
		
		<?php if($banner_image) : ?>
		
			<img id="internal_hero" src="<?php echo $banner_image['url']; ?>" alt="<?php echo $banner_image['alt']; ?>"/><!-- internal_hero -->
		
		<?php else: ?>
		
			<img id="internal_hero" src="<?php echo $global_internal_banner_image['url']; ?>" alt="<?php echo $global_internal_banner_image['alt']; ?>"/><!-- internal_hero -->
		
		<?php endif;?>
		
	</div><!-- internal_banner -->
	
	<div class="page_container">
		
		<div class="page_content">
			
			<?php //if(get_field('banner_h1') == "Yes") : ?>
			
				<!-- <h2 class="page_header"><?php the_title();?></h2> -->
			
			<?php //else:?>
			
				<!-- <h1 class="page_header"><?php the_title();?></h1> -->
			
			<?php //endif;?>

			<div class='page_content_inner'>
			
			<?php get_template_part( 'loop', 'index' ); ?>
			
			</div><!-- page_content_inner -->
			
		
			
		</div><!-- page_content -->

		<?php get_sidebar('blog'); ?>
		
	</div><!-- page_container -->
	
	
</div><!-- internal_main -->


<?php get_footer(); ?>


		




