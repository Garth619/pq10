<div id="internal_main" class="no_banner">
	
	<div class="internal_container">

		<h1 class="internal_header"><?php the_title();?></h1><!-- internal_header -->
		
		<div id="contact_layout_one">
	
		<div id="location_info">
			
			<div class="location_col">
				
				<div class="location_tablet_layout">
				
					<span class="location_title"><?php the_field( 'layout_one_col_one_title' ); ?></span><!-- footer_location_title -->
					
					<div class="location_phone_wrapper">
					
						<span class="location_phone_title"><?php the_field( 'layout_one_col_one_phone_title' ); ?></span>
					
						<a class="location_phone_small" href="tel:<?php echo str_replace(['-', '(', ')', ' '], '', get_field('layout_one_col_one_phone')); ?>"><?php the_field( 'layout_one_col_one_phone'); ?></a><!-- location_phone -->
					
					</div><!-- location_phone_wrapper -->
				
				</div><!-- location_tablet_layout -->
				
				<div class="social_media">
					
					<?php get_template_part('page-templates/includes/template','social-media'); ?>
					
				</div><!-- social_media -->
				
			</div><!-- location_col -->
			
			<div class="location_col">
				
				<span class="location_title"><?php the_field( 'layout_one_col_two_title' ); ?></span><!-- footer_location_title -->
				
				<span class="address"><?php the_field( 'layout_one_col_two_address' ); ?></span><!-- address -->
				
				<a class="get_directions" href="<?php the_field( 'layout_one_col_two_link' ); ?>" target="_blank" rel="noopener"><?php the_field( 'layout_one_col_two_link_verbiage' ); ?></a><!-- get_directions -->
				
			</div><!-- location_col -->
			
			<div class="location_col">
				
				<span class="location_title"><?php the_field( 'layout_one_col_three_title' ); ?></span><!-- location_title -->
				
				<span class="address info"><?php the_field( 'layout_one_col_three_content' ); ?></span><!-- address -->
				
				<?php if(get_field('layout_one_col_three_link') && get_field('layout_one_col_three_link_verbiage')) { ?>
				
					<a class="get_directions complete_list" href="<?php the_field( 'layout_one_col_three_link' ); ?>"><?php the_field( 'layout_one_col_three_link_verbiage' ); ?></a><!-- get_directions -->
				
				<?php } ?>
				
			</div><!-- location_col -->
			
		</div><!-- location_info -->
	
	</div><!-- contact_layout_one -->
	
	</div><!-- internal_container -->

</div><!-- internal_main -->