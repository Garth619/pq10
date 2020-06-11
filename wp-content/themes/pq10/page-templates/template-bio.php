<?php 

/* Template Name: Att Bio */

get_header(); ?>

<div id="internal_main">
	
	<div id="internal_att_banner">
		
		<div id="internal_att_banner_content">
			
			<div id='banner_spacer'></div><!-- banner_spacer -->

			<div id='banner_right'>
			
				<h1 id='att_title'><?php the_title();?></h1><!-- att_title -->

				<span id='att_position'><?php the_field( 'position' ); ?></span><!-- att_position -->

			</div><!-- banner_right -->
			
		</div><!-- internal_att_banner_content -->
		
		<?php $global_internal_banner_image = get_field( 'global_internal_banner_image','option'); ?>
		<?php $banner_image = get_field( 'banner_image' ); ?>
		
		<?php if($banner_image) : ?>
		
			<img id="internal_hero" src="<?php echo $banner_image['url']; ?>" alt="<?php echo $banner_image['alt']; ?>"/><!-- internal_hero -->
		
		<?php else: ?>
		
			<img id="internal_hero" src="<?php echo $global_internal_banner_image['url']; ?>" alt="<?php echo $global_internal_banner_image['alt']; ?>"/><!-- internal_hero -->
		
		<?php endif;?>
		
	</div><!-- internal_att_banner_content -->
	
	<div class="page_container">

		<?php get_sidebar('bio'); ?>
		
		<div class="page_content">

			<div class='page_content_inner content'>
			
			<?php get_template_part( 'loop', 'page' ); ?>
			
			</div><!-- page_content_inner -->
			
		</div><!-- page_content -->

	</div><!-- page_container -->
	
	
</div><!-- internal_main -->
					 
					 	
<?php get_footer(); ?>
