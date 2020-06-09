<?php 

/* Template Name: Testimonials */

get_header(); ?>


<div id="internal_main">
	
	<div id="internal_banner_two">
			
		<h1 class='banner_title_two'><?php the_title();?></h1><!-- page_header_two -->
		
		<?php $global_internal_banner_image = get_field( 'global_internal_banner_image','option'); ?>
		<?php $banner_image = get_field( 'banner_image' ); ?>
		
		<?php if($banner_image) : ?>
		
			<img id="internal_hero" src="<?php echo $banner_image['url']; ?>" alt="<?php echo $banner_image['alt']; ?>"/><!-- internal_hero -->
		
		<?php else: ?>
		
			<img id="internal_hero" src="<?php echo $global_internal_banner_image['url']; ?>" alt="<?php echo $global_internal_banner_image['alt']; ?>"/><!-- internal_hero -->
		
		<?php endif;?>
		
	</div><!-- internal_banner_two -->
	
	<div class="page_container">
		
		<div id='tesimonial_wrapper' class='box_wrapper'>
		
			<div class='tesimonial_inner'>
			
				<?php echo file_get_contents( get_template_directory() . '/images/hilley/stars.svg' ); ?>

				<span class='testimonial_quote'>"Our criminal justice system is the best in the history of the world, but it is not perfect."</span><!-- testimonial_quote -->

				<span class='testimonial_descr'>In my experience, it is not unusual for criminal prosecutions to rely of faulty inestigations,  unconstitutional police conduct, or false accusation by purported victims. The presumption of innocence and the prosecution having the burden of proving guilt beyond a reasonable double are not legal fictions. They must be vigorously enforced. Forget them and you forget the foundation upon which our free society lives.</span><!-- testimonial_descr -->

				<span class='testimonial_name'>ATTORNEY TAYLOR ATTICUs</span><!-- class -->
			
			</div><!-- tesimonial_inner -->
		
		</div><!-- tesimonial_wrapper -->

		<div id='testimonial_bottom'>
		
			<div class='testimonial_col'>
			
				<div class='testimonial_single'>

				<div class='tesimonial_inner'>
				
				<?php echo file_get_contents( get_template_directory() . '/images/hilley/stars.svg' ); ?>

				<span class='testimonial_quote'>"Our criminal justice system is the best in the history of the world, but it is not perfect."</span><!-- testimonial_quote -->

				<span class='testimonial_descr'>In my experience, it is not unusual for criminal prosecutions to rely of faulty inestigations,  unconstitutional police conduct, or false accusation by purported victims. The presumption of innocence and the prosecution having the burden of proving guilt beyond a reasonable double are not legal fictions. They must be vigorously enforced. Forget them and you forget the foundation upon which our free society lives.</span><!-- testimonial_descr -->

				<span class='testimonial_name'>ATTORNEY TAYLOR ATTICUs</span><!-- class -->

				</div><!-- tesimonial_inner -->
				
				</div><!-- testimonial_single -->

				<div class='testimonial_single'>

				<div class='tesimonial_inner'>
				
				<?php echo file_get_contents( get_template_directory() . '/images/hilley/stars.svg' ); ?>

				<span class='testimonial_quote'>"Our criminal justice system is the best in the history of the world, but it is not perfect."</span><!-- testimonial_quote -->

				<span class='testimonial_descr'>In my experience, it is not unusual for criminal prosecutions to rely of faulty inestigations,  unconstitutional police conduct, or false accusation by purported victims. The presumption of innocence and the prosecution having the burden of proving guilt beyond a reasonable double are not legal fictions. They must be vigorously enforced. Forget them and you forget the foundation upon which our free society lives.</span><!-- testimonial_descr -->

				<span class='testimonial_name'>ATTORNEY TAYLOR ATTICUs</span><!-- class -->

				</div><!-- tesimonial_inner -->
				
				</div><!-- testimonial_single -->
			
			</div><!-- testimonial_col -->

			<div class='testimonial_col'>
			
				<div class='testimonial_single'>

				<div class='tesimonial_inner'>
				
				<?php echo file_get_contents( get_template_directory() . '/images/hilley/stars.svg' ); ?>

				<span class='testimonial_quote'>"Our criminal justice system is the best in the history of the world, but it is not perfect."</span><!-- testimonial_quote -->

				<span class='testimonial_descr'>In my experience, it is not unusual for criminal prosecutions to rely of faulty inestigations,  unconstitutional police conduct, or false accusation by purported victims. The presumption of innocence and the prosecution having the burden of proving guilt beyond a reasonable double are not legal fictions. They must be vigorously enforced. Forget them and you forget the foundation upon which our free society lives.</span><!-- testimonial_descr -->

				<span class='testimonial_name'>ATTORNEY TAYLOR ATTICUs</span><!-- class -->

				</div><!-- tesimonial_inner -->
				
				</div><!-- testimonial_single -->

				<div class='testimonial_single'>

				<div class='tesimonial_inner'>
				
				<?php echo file_get_contents( get_template_directory() . '/images/hilley/stars.svg' ); ?>

				<span class='testimonial_quote'>"Our criminal justice system is the best in the history of the world, but it is not perfect."</span><!-- testimonial_quote -->

				<span class='testimonial_descr'>In my experience, it is not unusual for criminal prosecutions to rely of faulty inestigations,  unconstitutional police conduct, or false accusation by purported victims. The presumption of innocence and the prosecution having the burden of proving guilt beyond a reasonable double are not legal fictions. They must be vigorously enforced. Forget them and you forget the foundation upon which our free society lives.</span><!-- testimonial_descr -->

				<span class='testimonial_name'>ATTORNEY TAYLOR ATTICUs</span><!-- class -->

				</div><!-- tesimonial_inner -->
				
				</div><!-- testimonial_single -->
			
			</div><!-- testimonial_col -->
		
		</div><!-- testimonial_bottom -->
		
	</div><!-- page_container -->
	
</div><!-- internal_main -->


<?php get_footer(); ?>
