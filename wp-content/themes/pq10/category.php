<?php get_header(); ?>


<div id="internal_main">
	
	<div id="internal_banner">
		
		<div id="internal_banner_content">
			
		<h1 class="banner_title"><?php single_cat_title();?></h1><!-- banner_title -->
			
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




				
				
			
		
